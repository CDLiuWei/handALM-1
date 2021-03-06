<?php
$viewdefs ['AOR_Reports'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'form' => 
      array (
        'headerTpl' => 'modules/AOR_Reports/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/AOR_Reports/tpls/EditViewFooter.tpl',
      ),
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'frameworks_c',
            'studio' => 'visible',
            'label' => 'LBL_FRAMEWORKS',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'report_type_c',
            'studio' => 'visible',
            'label' => 'LBL_REPORT_TYPE',
          ),
          1 => 
          array (
            'name' => 'report_module',
            'studio' => 'visible',
            'label' => 'LBL_REPORT_MODULE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'custom_file_c',
            'label' => 'LBL_CUSTOM_FILE',
          ),
          1 => 
          array (
            'name' => 'graphs_per_row',
            'label' => 'LBL_GRAPHS_PER_ROW',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'export_type_c',
            'label' => 'LBL_EXPORT_TYPE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
