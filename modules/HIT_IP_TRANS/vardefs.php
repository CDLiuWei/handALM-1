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

$dictionary['HIT_IP_TRANS'] = array (
	'table' => 'hit_ip_trans',
	'audited' => true,
	'inline_edit' => true,
	'duplicate_merge' => true,
	'fields' => array (
		'hit_ip_subnets_id' => array (
			'required' => false,
			'name' => 'hit_ip_subnets_id',
			'vname' => 'LBL_HIT_IP_SUBNETS_ID',
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
		'hit_ip_subnets' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'hit_ip_subnets',
			'vname' => 'LBL_HIT_IP',
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
			'id_name' => 'hit_ip_subnets_id',
			'ext2' => 'HIT_IP_Subnets',
			'module' => 'HIT_IP_Subnets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		'hit_ip_trans_batch_id' => array (
			'required' => false,
			'name' => 'hit_ip_trans_batch_id',
			'vname' => 'LBL_HIT_IP_TRANS_BATCH_ID',
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
		'associated_ip' => array (
			'required' => false,
			'name' => 'associated_ip',
			'vname' => 'LBL_ASSOCIATED_IP',
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

		'mask' => array (
			'required' => false,
			'name' => 'mask',
			'vname' => 'LBL_MASK',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'source' => 'non-db',
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

		'gateway' => array (
			'required' => false,
			'name' => 'gateway',
			'vname' => 'LBL_GATEWAY',
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

		'bandwidth_type' => array (
			'required' => false,
			'name' => 'bandwidth_type',
			'vname' => 'LBL_BANDWIDTH_TYPE',
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

		'port' => array (
			'required' => false,
			'name' => 'port',
			'vname' => 'LBL_PORT',
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
		
		'port_backup' => array (
			'required' => false,
			'name' => 'port_backup',
			'vname' => 'LBL_PORT_BACKUP',
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

		'speed_limit' => array (
			'required' => false,
			'name' => 'speed_limit',
			'vname' => 'LBL_SPEED_LIMIT',
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

		'hat_assets_id' => array (
			'required' => false,
			'name' => 'hat_assets_id',
			'vname' => 'LBL_HAT_ASSETS_ID',
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

		'hat_asset_name' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'hat_asset_name',
			'vname' => 'LBL_HAT_ASSET_NAME',
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
			'id_name' => 'hat_assets_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		'hat_assets_cabinet_id' => array (
			'required' => false,
			'name' => 'hat_assets_cabinet_id',
			'vname' => 'LBL_HAT_ASSETS_CABINET_ID',
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

		'cabinet' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'cabinet',
			'vname' => 'LBL_CABINET',
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
			'id_name' => 'hat_assets_cabinet_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		'monitoring' => array (
			'required' => false,
			'name' => 'monitoring',
			'vname' => 'LBL_MONITORING',
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
		//备份 监控链接
		'monitoring_backup' => array (
			'required' => false,
			'name' => 'monitoring_backup',
			'vname' => 'LBL_MONITORING_BACKUP',
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

		'channel_num' => array (
			'required' => false,
			'name' => 'channel_num',
			'vname' => 'LBL_CHANNEL_NUM',
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
		
		'channel_num_backup' => array (
			'required' => false,
			'name' => 'channel_num_backup',
			'vname' => 'LBL_CHANNEL_NUM_BACKUP',
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

		'channel_content' => array (
			'required' => false,
			'name' => 'channel_content',
			'vname' => 'LBL_CHANNEL_CONTENT',
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
		
		'channel_content_backup' => array (
			'required' => false,
			'name' => 'channel_content_backup',
			'vname' => 'LBL_CHANNEL_CONTENT_BACKUP',
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
		
		'mrtg_link' => array (
			'required' => false,
			'name' => 'mrtg_link',
			'vname' => 'LBL_MRTG_LINK',
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

		'line_parent_ip' => array (
			'source' => 'non-db',
			'name' => 'line_parent_ip',
			'vname' => 'LBL_LINE_PARENT_IP',
			'type' => 'varchar',
			'default' => '',
			'reportable' => true,
			'studio' => 'visible'
		),
		
		
		'access_assets_name' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'access_asset_name',
			'vname' => 'LBL_ACCESS_ASSET_NAME',
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
			'id_name' => 'hat_assets_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
		),
		
		
		'access_assets_id' => 
  array (
    'required' => false,
    'name' => 'access_assets_id',
    'vname' => 'LBL_ACCESS_ASSETS_ID',
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
  
  
  'access_assets_backup_name' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'access_assets_backup_name',
			'vname' => 'LBL_ACCESS_ASSETS_BACKUP_NAME',
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
			'id_name' => 'access_assets_backup_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
		),
		
		
		'access_assets_backup_id' => 
  array (
    'required' => false,
    'name' => 'access_assets_backup_id',
    'vname' => 'LBL_ACCESS_ASSETS_BACKUP_ID',
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
  
  
 /* 'main_asset_id' => array (
			'required' => false,
			'name' => 'main_asset_id',
			'vname' => 'LBL_MAIN_ASSET_ID',
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

		'main_asset' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'main_asset',
			'vname' => 'LBL_MAIN_ASSET',
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
			'id_name' => 'main_asset_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
		),
		
		
		'backup_asset_id' => array (
			'required' => false,
			'name' => 'backup_asset_id',
			'vname' => 'LBL_BACKUP_ASSET_ID',
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

		'backup_asset' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'backup_asset',
			'vname' => 'LBL_BACKUP_ASSET',
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
			'id_name' => 'backup_asset_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
		),
  
  */
  
  'date_start' => array (
			'required' => false,
			'name' => 'date_start',
			'vname' => 'LBL_DATE_START',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => true,
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
			'dbType' => 'datetime',
			//'display_default' => 'now&12:00am',
		),

'date_end' => array (
			'required' => false,
			'name' => 'date_end',
			'vname' => 'LBL_DATE_END',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => true,
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
			'dbType' => 'datetime',
			//'display_default' => 'now&12:00am',
		),
		
		
		'status' =>
        array (
            'required' => false,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
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
            'len' => 100,
            'size' => '20',
            'options' => 'haa_code_type_list',
            'studio' => 'visible',
            'dependency' => false,
            ),
            
            'enable_action' => 
      array (
            'required' => false,
            'name' => 'enable_action',
            'vname' => 'LBL_ENABLE_ACTION',
            'type' => 'bool',
            'massupdate' => 0,
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
            ),

            
	
	),
	'relationships' => array (),
	'optimistic_locking' => true,
	'unified_search' => true,

	
);
if (!class_exists('VardefManager')) {
	require_once ('include/SugarObjects/VardefManager.php');
}
VardefManager :: createVardef('HIT_IP_TRANS', 'HIT_IP_TRANS', array (
	'basic',
	'assignable',
	'security_groups'
));