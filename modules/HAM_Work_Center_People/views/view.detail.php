<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class HAM_Work_Center_PeopleViewDetail extends ViewDetail
{

    function Display() {

        //֮ǰ������������ݣ��ڴ˲�����ʾ

        $bean_contact = BeanFactory::getBean('Contacts', $this->bean->contact_id);
		//echo $this->bean->user_id_c;

        if ($bean_contact) { // test if $bean_location was loaded successfully
                // this is only necessary if you'll need custom fields from ModuleB
                // $bean_location->custom_fields->retrieve();
                // now set some variables of current record on ModuleA to values retrieved from the related record on ModuleB
                $this->bean->organization_name = isset($bean_contact->account_name)?$bean_contact->account_name:'';
                //��bean�е����ݸ��Ƶ�@this->bean->map_lat
				$this->bean->user_name=$bean_contact->linked_user_c;
        }
        parent::Display();//���ø��෽��

    }

}