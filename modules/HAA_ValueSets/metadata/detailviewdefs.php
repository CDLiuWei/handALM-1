<?php
$module_name = 'HAA_ValueSets';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '3',
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
        2 => 
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL3' => 
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
            'name' => 'valueset_type',
            'studio' => 'visible',
            'label' => 'LBL_VALUESET_TYPE',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'format_type',
            'studio' => 'visible',
            'label' => 'LBL_FORMAT_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'maximum_size',
            'label' => 'LBL_MAXIMUM_SIZE',
          ),
          1 => 
          array (
            'name' => 'number_precision',
            'label' => 'LBL_NUMBER_PRECISION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'application_table_name',
            'studio' => 'visible',
            'label' => 'LBL_APPLICATION_TABLE_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'value_column_name',
            'label' => 'LBL_VALUE_COLUMN_NAME',
          ),
          1 => 
          array (
            'name' => 'value_column_type',
            'studio' => 'visible',
            'label' => 'LBL_VALUE_COLUMN_TYPE',
          ),
          2 => 
          array (
            'name' => 'value_column_size',
            'label' => 'LBL_VALUE_COLUMN_SIZE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_column_name',
            'label' => 'LBL_ID_COLUMN_NAME',
          ),
          1 => 
          array (
            'name' => 'id_column_type',
            'studio' => 'visible',
            'label' => 'LBL_ID_COLUMN_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'id_column_size',
            'label' => 'LBL_ID_COLUMN_SIZE',
          ),
          1 => 
          array (
            'name' => 'meaning_column_name',
            'label' => 'LBL_MEANING_COLUMN_NAME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'meaning_column_type',
            'studio' => 'visible',
            'label' => 'LBL_MEANING_COLUMN_TYPE',
          ),
          1 => 
          array (
            'name' => 'meaning_column_size',
            'label' => 'LBL_MEANING_COLUMN_SIZE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'additional_where_clause',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_WHERE_CLAUSE',
          ),
          1 => 
          array (
            'name' => 'additional_quickpick_columns',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_QUICKPICK_COLUMNS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parent_flex_value_set',
            'studio' => 'visible',
            'label' => 'LBL_PARENT_FLEX_VALUE_SET',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dependant_default_value',
            'label' => 'LBL_DEPENDANT_DEFAULT_VALUE',
          ),
          1 => 
          array (
            'name' => 'dependant_default_value_desc',
            'label' => 'LBL_DEPENDANT_DEFAULT_VALUE_DESC',
          ),
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => '',
        ),
      ),
    ),
  ),
);
?>
