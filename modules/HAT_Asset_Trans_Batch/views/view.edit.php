<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class HAT_Asset_Trans_BatchViewEdit extends ViewEdit
{

    function Display() {

        global $db;
        global $current_user;

        //0.处理头与行的语言包
        $modules = array('HAT_Asset_Trans', 'HAT_Asset_Trans_Batch',
        );

        foreach ($modules as $module) {
            if (!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js')) {
                require_once 'include/language/jsLanguage.php';
                jsLanguage::createModuleStringsCache($module, $GLOBALS['current_language']);
            }
            echo '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['js_version_key'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
        };


        //1、初始化Framework
        require_once('modules/HAA_Frameworks/orgSelector_class.php');
        $current_framework_id = empty($this->bean->hat_framework_id)?"":$this->bean->hat_framework_id;
        $current_module = $this->module;
        $current_action = $this->action;
        $this->ss->assign('FRAMEWORK',set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id'));

/*        //2.加载EventType对应的规则
        if isset($this->bean->hat_eventtype_id) {
            $beanEventType = BeanFactory::getBean('HAT_EventType', $this->bean->hat_eventtype_id);
                //注意这个$beanFramework对象在DISPLAY之后还要被调用，以用于按照Framework中的规则去限定页面上的字段
                if(isset($beanEventType)) {
                    $this->bean->hat_eventtype_id
                }
        }
*/
        //如果有工序来源，则初始化工序信息
        if (empty($this->bean->id) && !empty($_REQUEST['woop_id'])) {
            //如果当前对象还没有设置工序信息，并且参数中的工序有值，则根据参数中的WOOP对象填写当前处理单上的相关字段
               $sql_current_string ="SELECT
										  ham_wo.`id` wo_id,
										  ham_wo.`name` wo_name,
										  ham_woop.`id` woop_id,
										  ham_woop.`name` woop_name,
										  ham_wo.`wo_number` wo_number,
										  ham_woop.`woop_number` woop_number,
                                          ham_woop.`date_schedualed_finish` ,
                                          ham_woop.`date_target_finish`,
                                          ham_woop.`date_finish_not_later`,
										  contacts.id contact_id,
										  contacts.`last_name` contact_name,
										  accounts.`id` org_id,
										  accounts.`name` org_name
										FROM
										  ham_wo,
										  ham_woop
										  LEFT JOIN (
										      ham_work_center_people,
										      contacts,
										      accounts,
										      accounts_contacts
										    )
										    ON (
										      ham_woop.`work_center_people_id` = ham_work_center_people.`id`
										      AND ham_work_center_people.`deleted` = 0
										      AND contacts.id = ham_work_center_people.`contact_id`
										      AND contacts.`deleted` = 0
										      AND accounts_contacts.`account_id`  = accounts.`id`
										      AND accounts_contacts.`contact_id` =contacts.`id`
										    )
										WHERE ham_wo.`id` = ham_woop.`ham_wo_id`
										  AND ham_wo.`deleted` = 0
										  AND ham_woop.`deleted` = 0
                                      and ham_woop.id = '".$_REQUEST['woop_id']."'";

                //echo($sel_current_asset);
                $result_woop =  $db->query($sql_current_string);

                while ( $bean_woop = $db->fetchByAssoc($result_woop) ) {
                    $this->bean->source_woop_id = $bean_woop['woop_id'];
                    $this->bean->source_woop = $bean_woop['woop_name'];
                    $this->bean->source_wo_id = $bean_woop['wo_id'];
                    $this->bean->source_wo = $bean_woop['wo_name'];
                    $this->bean->owner_id = $bean_woop['contact_id'];
                    $this->bean->owner_contacts = $bean_woop['contact_name'];
                    $this->bean->tracking_number = $bean_woop['wo_number'].' / '.$bean_woop['woop_number'];
                    $this->bean->name = $bean_woop['wo_number'].':'.$bean_woop['woop_name'];
                    $this->bean->current_owning_org_id = $bean_woop['org_id'];
                    $this->bean->current_owning_org = $bean_woop['org_name'];

                    if(empty($this->bean->date_schedualed_finish)){
                        if(empty($this->bean->date_target_finish)){
                            if(empty($this->bean->date_finish_not_later)){
                                $this->bean->planned_complete_date = $this->bean->planned_execution_date;
                            } else {
                                $this->bean->planned_complete_date = $bean_woop['date_finish_not_later'];
                            }

                        } else {
                            $this->bean->planned_complete_date = $bean_woop['date_target_finish'];
                        }
                    } else {
                        $this->bean->planned_complete_date = $bean_woop['date_schedualed_finish'];
                    }

                    $this->ss->assign('SOURCE_WOOP_ID',$bean_woop['woop_id']);
                    $this->ss->assign('SOURCE_WO_ID',$bean_woop['wo_id']);
                    $this->ss->assign('SOURCE_WO_ORG',$bean_woop['wo_id']);
               }


        } elseif (empty($this->bean->id)){
            //如果不是从工序上来，但是处理新建的状态
            //
            $this->bean->owner_contacts = $current_user->linked_contact_c;
            $this->bean->owner_id = $current_user->contact_id_c;
            $this->bean->current_owning_org_id = $current_user->account_id_c;
            $this->bean->current_owning_org = $current_user->contact_organization_c;
        }



        parent::Display();
    }
}