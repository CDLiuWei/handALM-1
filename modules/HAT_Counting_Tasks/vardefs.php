<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['HAT_Counting_Tasks'] = array(
	'table'=>'hat_counting_tasks',
	'audited'=>true,
    'inline_edit'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
    'counting_type' => 
  array (
    'required' => true,
    'name' => 'counting_type',
    'vname' => 'LBL_COUNTING_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'ASSETS',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'hat_counting_type_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
    'counting_batch_status' => 
  array (
    'required' => true,
    'name' => 'counting_batch_status',
    'vname' => 'LBL_COUNTING_BATCH_STATUS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'ASSETS',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'hat_counting_batch_status_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
      'counting_task_status' => 
  array (
    'required' => true,
    'name' => 'counting_task_status',
    'vname' => 'LBL_COUNTING_TASK_STATUS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'ASSETS',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'hat_counting_task_status_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
      'counting_person_id' => 
    array (
      'required' => false,
      'name' => 'counting_person_id',
      'vname' => 'LBL_COUNTING_PERSON_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
      ),
    'counting_person' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'counting_person',
      'vname' => 'LBL_COUNTING_PERSON',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'counting_person_id',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      ), 
  'planed_start_date' => 
  array (
    'required' => true,
    'name' => 'planed_start_date',
    'vname' => 'LBL_PLANED_START_DATE',
    'type' => 'date',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'planed_complete_date' => 
  array (
    'required' => true,
    'name' => 'planed_complete_date',
    'vname' => 'LBL_PLANED_COMPLETE_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'hat_asset_counting_batch_id' => 
  array (
    'required' => false,
    'name' => 'hat_asset_counting_batch_id',
    'vname' => 'LBL_HAT_ASSET_COUNTING_BATCH_ID',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  ),
  'counting_batch_name' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'counting_batch_name',
    'vname' => 'LBL_COUNTING_BATCH_NAME',
    'type' => 'relate',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'id_name' => 'hat_asset_counting_batch_id',
    'ext2' => 'HAT_Counting_Batchs',
    'module' => 'HAT_Counting_Batchs',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'account_id_c' => 
  array (
    'required' => false,
    'name' => 'account_id_c',
    'vname' => 'LBL_ORGANIZATION_ACCOUNT_ID',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  ),
  'organization' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'organization',
    'vname' => 'LBL_ORGANIZATION',
    'type' => 'relate',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id_c',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
   'account_id_m' => 
  array (
    'required' => false,
    'name' => 'account_id_m',
    'vname' => 'LBL_ORGANIZATION_ACCOUNT_ID_M',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  ),
  'manager_org' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'manager_org',
    'vname' => 'LBL_MANAGER_ORG',
    'type' => 'relate',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id_m',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'snapshot_date' => 
  array (
    'required' => false,
    'name' => 'snapshot_date',
    'vname' => 'LBL_SNAPSHOT_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'adjust_posted' => 
  array (
    'required' => false,
    'name' => 'adjust_posted',
    'vname' => 'LBL_ADJUST_POSTED',
    'type' => 'bool',
    'massupdate' => 0,
    'default' => '0',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
    'separation' => 
  array (
    'required' => false,
    'name' => 'separation',
    'vname' => 'LBL_SEPARATION',
    'type' => 'bool',
    'massupdate' => 0,
    'default' => '0',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'haa_frameworks_id_c' => 
  array (
    'required' => true,
    'name' => 'haa_frameworks_id_c',
    'vname' => 'LBL_DOMAIN_HAA_FRAMEWORKS_ID',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  ),
  'domain' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'domain',
    'vname' => 'LBL_DOMAIN',
    'type' => 'relate',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'id_name' => 'haa_frameworks_id_c',
    'ext2' => 'HAA_Frameworks',
    'module' => 'HAA_Frameworks',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'objects_type' => 
  array (
    'required' => true,
    'name' => 'objects_type',
    'vname' => 'LBL_OBJECTS_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'ASSETS',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'hat_counting_objects_type_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
    'asset_status' => 
    array (
      'required' => false,
      'name' => 'asset_status',
      'vname' => 'LBL_ASSET_STATUS',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => 'InService',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'hat_asset_status_list',
      'studio' => 'visible',
      'dependency' => false,
      ),

  'org_drilldown' => 
  array (
    'required' => false,
    'name' => 'org_drilldown',
    'vname' => 'LBL_ORG_DRILLDOWN',
    'type' => 'bool',
    'massupdate' => 0,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
    'hat_asset_locations_id_c' => 
  array (
    'required' => false,
    'name' => 'hat_asset_locations_id_c',
    'vname' => 'LBL_LOCATION_HAT_ASSET_LOCATIONS_ID',
    'type' => 'id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
  ),
  'location' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'location',
    'vname' => 'LBL_LOCATION',
    'type' => 'relate',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'id_name' => 'hat_asset_locations_id_c',
    'ext2' => 'HAT_Asset_Locations',
    'module' => 'HAT_Asset_Locations',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'location_drilldown' => 
  array (
    'required' => false,
    'name' => 'location_drilldown',
    'vname' => 'LBL_LOCATION_DRILLDOWN',
    'type' => 'bool',
    'massupdate' => 0,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'aos_product_categories_id_1' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      //'source' => 'custom_fields',
      'name' => 'aos_product_categories_id_1',
      'vname' => 'LBL_ASSET_CATEGORY_AOS_PRODUCT_CATEGORIES_ID_1',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'HAT_Assetsaos_product_categories_id',
      //'custom_module' => 'HAT_Assets',
      ),
    'asset_category_1' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Asset Category',
      'required' => false,
      'source' => 'non-db',
      'name' => 'asset_category_1',
      'vname' => 'LBL_ASSET_CATEGORY_1',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'aos_product_categories_id_1',
      'ext2' => 'AOS_Product_Categories',
      'module' => 'AOS_Product_Categories',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'HAT_Assetsasset_category',
      //'custom_module' => 'HAT_Assets',
      ),
     'aos_product_categories_id_2' => 
    array (
      'inline_edit' => 2,
      'required' => false,
      //'source' => 'custom_fields',
      'name' => 'aos_product_categories_id_2',
      'vname' => 'LBL_ASSET_CATEGORY_AOS_PRODUCT_CATEGORIES_ID_2',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'HAT_Assetsaos_product_categories_id',
      //'custom_module' => 'HAT_Assets',
      ),
    'asset_category_2' => 
    array (
      'inline_edit' => '2',
      'labelValue' => 'Asset Category',
      'required' => false,
      'source' => 'non-db',
      'name' => 'asset_category_2',
      'vname' => 'LBL_ASSET_CATEGORY_2',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'aos_product_categories_id_2',
      'ext2' => 'AOS_Product_Categories',
      'module' => 'AOS_Product_Categories',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'HAT_Assetsasset_category',
      //'custom_module' => 'HAT_Assets',
      ),
     'aos_product_categories_id_3' => 
    array (
      'inline_edit' => 3,
      'required' => false,
      //'source' => 'custom_fields',
      'name' => 'aos_product_categories_id_3',
      'vname' => 'LBL_ASSET_CATEGORY_AOS_PRODUCT_CATEGORIES_ID_3',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'HAT_Assetsaos_product_categories_id',
      //'custom_module' => 'HAT_Assets',
      ),
    'asset_category_3' => 
    array (
      'inline_edit' => '3',
      'labelValue' => 'Asset Category',
      'required' => false,
      'source' => 'non-db',
      'name' => 'asset_category_3',
      'vname' => 'LBL_ASSET_CATEGORY_3',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'aos_product_categories_id_3',
      'ext2' => 'AOS_Product_Categories',
      'module' => 'AOS_Product_Categories',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'HAT_Assetsasset_category',
      //'custom_module' => 'HAT_Assets',
      ),
     'aos_product_categories_id_4' => 
    array (
      'inline_edit' => 4,
      'required' => false,
      //'source' => 'custom_fields',
      'name' => 'aos_product_categories_id_4',
      'vname' => 'LBL_ASSET_CATEGORY_AOS_PRODUCT_CATEGORIES_ID_4',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'HAT_Assetsaos_product_categories_id',
      //'custom_module' => 'HAT_Assets',
      ),
    'asset_category_4' => 
    array (
      'inline_edit' => '4',
      'labelValue' => 'Asset Category',
      'required' => false,
      'source' => 'non-db',
      'name' => 'asset_category_4',
      'vname' => 'LBL_ASSET_CATEGORY_4',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'aos_product_categories_id_4',
      'ext2' => 'AOS_Product_Categories',
      'module' => 'AOS_Product_Categories',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'HAT_Assetsasset_category',
      //'custom_module' => 'HAT_Assets',
      ),
            'description' => 
    array (
      'required' => false,
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      ),

        'hat_counting_line_link' =>
    array(
      'name' => 'hat_counting_line_link',
      'type' => 'link',
      'relationship' => 'hat_counting_lines_hat_counting_task',
      'vname' => 'LBL_HAT_COUNTING_LINES_SUBPANEL',
      'link_type' => 'many',
      'module' => 'HAT_Counting_Lines',
      'bean_name' => 'HAT_Counting_Lines',
      'source' => 'non-db',
      ),
        'hat_counting_result_link' =>
    array(
      'name' => 'hat_counting_result_link',
      'type' => 'link',
      'relationship' => 'hat_counting_results_hat_counting_task',
      'vname' => 'LBL_HAT_COUNTING_RESULTS_SUBPANEL',
      'link_type' => 'many',
      'module' => 'HAT_Counting_Results',
      'bean_name' => 'HAT_Counting_Results',
      'source' => 'non-db',
      ),
),
	'relationships'=>array (
     'hat_counting_lines_hat_counting_task' => 
 array (
    'lhs_module' => 'HAT_Counting_Tasks',
    'lhs_table' => 'hat_counting_tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'HAT_Counting_Lines',
    'rhs_table' => 'hat_counting_lines',
    'rhs_key' => 'hat_asset_counting_task_id',
    'relationship_type' => 'one-to-many',
    ),
      'hat_counting_results_hat_counting_task' => 
 array (
    'lhs_module' => 'HAT_Counting_Tasks',
    'lhs_table' => 'hat_counting_tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'HAT_Counting_Results',
    'rhs_table' => 'hat_counting_results',
    'rhs_key' => 'hat_asset_counting_task_id',
    'relationship_type' => 'one-to-many',
    ),
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAT_Counting_Tasks','HAT_Counting_Tasks', array('basic','assignable','security_groups'));