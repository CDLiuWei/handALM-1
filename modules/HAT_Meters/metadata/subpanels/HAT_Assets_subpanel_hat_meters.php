<?php
// created: 2016-07-17 22:33:08
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'meter_type' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_METER_TYPE',
    'id' => 'METER_TYPE_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'HAT_Meter_Types',
    'target_record_key' => 'meter_type_id',
  ),
  'latest_reading' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_LATEST_READING',
    'width' => '10%',
    'default' => true,
  ),
  'meter_uom' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'vname' => 'LBL_METER_UOM',
    'width' => '10%',
    'default' => true,
  ),
  'reading_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_READING_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'HAT_Meters',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'HAT_Meters',
    'width' => '5%',
    'default' => true,
  ),
);