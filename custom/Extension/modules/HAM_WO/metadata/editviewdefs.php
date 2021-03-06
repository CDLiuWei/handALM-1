<?php
$module_name = 'HAM_WO';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/HAM_WO/js/editview_map_point.js',
        ),
        1 => 
        array (
          'file' => 'modules/HAM_WO/js/HAM_WO_editview.js',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'wo_number',
            'label' => 'LBL_WO_NUMBER',
          ),
          1 => 
          array (
            'name' => 'site',
            'studio' => 'visible',
            'label' => 'LBL_SITE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ham_act_id_rule',
            'studio' => 'visible',
            'label' => 'HAM_ACT_ID_RULE',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'ham_act_id_rule',
                'id' => 'activity',
                'act_status' => 'wo_status',
                'ham_priority_id' => 'wo_priority_id',
                'priority' => 'wo_priority',
                'event_type' => 'event_type',
                'hat_event_type_id' => 'hat_event_type_id',
              ),
              'call_back_function' => 'setHamActivityReturn',
            ),
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'wo_status',
            'studio' => 'visible',
            'label' => 'LBL_WO_STATUS',
          ),
          1 => 
          array (
            'name' => 'event_type',
            'label' => 'LBL_EVENT_TYPE',
            'displayParams' => 
            array (
              'initial_filter' => '&basic_type_advanced=WO',
            ),
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'location',
            'studio' => 'visible',
            'label' => 'LBL_LOCATION',
            'displayParams' => 
            array (
              'initial_filter' => '&maint_site_advanced="+encodeURIComponent(document.getElementById("site").value)+"',
              'field_to_name_array' => 
              array (
                'name' => 'location',
                'id' => 'hat_asset_locations_id',
                'location_title' => 'location_desc',
                'map_zoom' => 'map_zoom',
                'map_lat' => 'map_lat',
                'map_lng' => 'map_lng',
                'map_address' => 'map_search_text',
                'map_type' => 'map_type',
                'map_enabled' => 'location_map_enabled',
              ),
              'call_back_function' => 'setLocationPopupReturn',
            ),
          ),
          1 => 
          array (
            'name' => 'asset',
            'displayParams' => 
            array (
              'initial_filter' => '&hat_asset_locations_hat_assets_name_advanced="+encodeURIComponent(document.getElementById("location").value)+"',
              'field_to_name_array' => 
              array (
                'name' => 'asset',
                'id' => 'hat_assets_id',
                'asset_desc' => 'asset_desc',
                'location_desc' => 'location_extra_desc',
              ),
              'call_back_function' => 'setAssetPopupReturn',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'location_extra_desc',
            'studio' => 'visible',
            'label' => 'LBL_LOCATION_EXTRA_DESC',
          ),
          1 => 
          array (
            'name' => 'map_enabled',
            'label' => 'LBL_MAP_ENABLED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contract',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'work_center',
            'studio' => 'visible',
            'label' => 'LBL_WORK_CENTER',
			'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'work_center',
                'id' => 'work_center_id',
              ),
			  'call_back_function' => 'setWorkCenterPopupReturn',
            ),
          ),
          1 => 
          array (
            'name' => 'work_center_res',
            'studio' => 'visible',
            'label' => 'LBL_WORK_CENTER_RES',
			'displayParams' => 
            array (
              'initial_filter' => '&work_center_id_advanced="+encodeURIComponent(document.getElementById("work_center_id").value)+"',
              'field_to_name_array' => 
              array (
                'name' => 'work_center_res',
                'id' => 'work_center_res_id',
              ),
			  'call_back_function' => 'setWorkCenterResPopupReturn',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'work_center_people',
            'studio' => 'visible',
            'label' => 'LBL_WORK_CENTER_PEOPLE',
			'displayParams' => 
            array (
			  'initial_filter' => '&work_center_res_id_advanced="+encodeURIComponent(document.getElementById("work_center_res_id").value)+"',
              'field_to_name_array' => 
              array (
                'name' => 'work_center_people',
                'id' => 'work_center_people_id',
              ),
			  //'call_back_function' => 'setWorkCenterPeoplePopupReturn',
            ),
          ),
          1 => 
          array (
            'name' => 'work_order_access',
            'studio' => 'visible',
            'label' => 'LBL_WORK_ORDER_ACCESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'next_woop_assignment',
            'label' => 'LBL_NEXT_WOOP_ASSIGNMENT',
          ),
          1 => 
          array (
            'name' => 'complete_by_last_woop',
            'label' => 'LBL_COMPLETE_BY_LAST_WOOP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'map_search_area',
            'studio' => 'visible',
            'label' => 'LBL_MAP_SEARCH_AREA',
            'customCode' => '<input type="text" id="map_search_text" name="map_search_text"/><input type="button" id="btn_map_search" name="btn_map_search" value="Search on Map" size="30";/> <input type="checkbox" id="chk_rewrite_address" checked="true">Rewrite Address',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'map_type',
            'studio' => 'visible',
            'label' => 'LBL_MAP_TYPE',
          ),
          1 => 
          array (
            'name' => 'map_zoom',
            'studio' => 'visible',
            'label' => 'LBL_MAP_ZOOM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'map_lat',
            'label' => 'LBL_MAP_LAT',
            'precision' => '8',
          ),
          1 => 
          array (
            'name' => 'map_lng',
            'label' => 'LBL_MAP_LNG',
            'precision' => '8',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'map_display_area',
            'studio' => 'visible',
            'label' => 'LBL_MAP_DISPLAY_AREA',
            'customCode' => '<div id="cuxMap" style="background-color: #efefef; ">map will be loaded here</div>',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'wo_priority',
            'studio' => 'visible',
            'label' => 'LBL_WO_PRIORITY',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'wo_priority',
                'id' => 'wo_priority_id',
              ),
              'call_back_function' => 'setWoPriorityReturn',
            ),
          ),
          1 => 
          array (
            'name' => 'plan_fixed',
            'label' => 'LBL_PLAN_FIXED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_target_start',
            'label' => 'LBL_TARGET_START_DATE',
          ),
          1 => 
          array (
            'name' => 'date_target_finish',
            'label' => 'LBL_TARGET_FINISH_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_schedualed_start',
            'label' => 'LBL_SCHEDUALED_START_DATE',
          ),
          1 => 
          array (
            'name' => 'date_schedualed_finish',
            'label' => 'LBL_SCHEDUALED_FINISH_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_start_not_earlier',
            'label' => 'LBL_START_NOT_EARLIER_DATE',
          ),
          1 => 
          array (
            'name' => 'date_finish_not_later',
            'label' => 'LBL_FINISH_NOT_LATER_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_actual_start',
            'label' => 'LBL_ACTUAL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'date_actual_finish',
            'label' => 'LBL_ACTUAL_FINISH_DATE',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reporter',
            'studio' => 'visible',
            'label' => 'LBL_REPORTER',
          ),
          1 => 
          array (
            'name' => 'reporter_org',
            'studio' => 'visible',
            'label' => 'LBL_REPORTER_ORG',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reported_date',
            'label' => 'LBL_REPORTED_DATE',
          ),
          1 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'priority',
                'id' => 'ham_priority_id',
              ),
              'call_back_function' => 'setHamPriorityReturn',
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'source_type',
            'label' => 'LBL_SOURCE_TYPE',
            'customCode' => '<input type="text" id="source_type" name="source_type" value="{$fields.source_type.value}"><input type="hidden" id="source_id" name="source_id" value="{$fields.source_id.value}">',
          ),
          1 => 'source_reference',
        ),
      ),
    ),
  ),
);
?>
