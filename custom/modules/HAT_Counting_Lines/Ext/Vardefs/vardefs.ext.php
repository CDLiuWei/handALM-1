<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2016-12-21 10:11:55
$dictionary["HAT_Counting_Lines"]["fields"]["hat_counting_lines_documents"] = array (
  'name' => 'hat_counting_lines_documents',
  'type' => 'link',
  'relationship' => 'hat_counting_lines_documents',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_HAT_COUNTING_LINES_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);


// created: 2016-12-21 10:11:54
$dictionary["HAT_Counting_Lines"]["fields"]["hat_counting_lines_hat_counting_batchs"] = array (
  'name' => 'hat_counting_lines_hat_counting_batchs',
  'type' => 'link',
  'relationship' => 'hat_counting_lines_hat_counting_batchs',
  'source' => 'non-db',
  'module' => 'HAT_Counting_Batchs',
  'bean_name' => 'HAT_Counting_Batchs',
  'vname' => 'LBL_HAT_COUNTING_LINES_HAT_COUNTING_BATCHS_FROM_HAT_COUNTING_BATCHS_TITLE',
  'id_name' => 'hat_counting_lines_hat_counting_batchshat_counting_batchs_ida',
);
$dictionary["HAT_Counting_Lines"]["fields"]["hat_counting_lines_hat_counting_batchs_name"] = array (
  'name' => 'hat_counting_lines_hat_counting_batchs_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_HAT_COUNTING_LINES_HAT_COUNTING_BATCHS_FROM_HAT_COUNTING_BATCHS_TITLE',
  'save' => true,
  'id_name' => 'hat_counting_lines_hat_counting_batchshat_counting_batchs_ida',
  'link' => 'hat_counting_lines_hat_counting_batchs',
  'table' => 'hat_counting_batchs',
  'module' => 'HAT_Counting_Batchs',
  'rname' => 'name',
);
$dictionary["HAT_Counting_Lines"]["fields"]["hat_counting_lines_hat_counting_batchshat_counting_batchs_ida"] = array (
  'name' => 'hat_counting_lines_hat_counting_batchshat_counting_batchs_ida',
  'type' => 'link',
  'relationship' => 'hat_counting_lines_hat_counting_batchs',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_HAT_COUNTING_LINES_HAT_COUNTING_BATCHS_FROM_HAT_COUNTING_LINES_TITLE',
);


// created: 2016-12-21 10:11:55
$dictionary["HAT_Counting_Lines"]["fields"]["hat_counting_lines_hat_counting_results"] = array (
  'name' => 'hat_counting_lines_hat_counting_results',
  'type' => 'link',
  'relationship' => 'hat_counting_lines_hat_counting_results',
  'source' => 'non-db',
  'module' => 'HAT_Counting_Results',
  'bean_name' => 'HAT_Counting_Results',
  'side' => 'right',
  'vname' => 'LBL_HAT_COUNTING_LINES_HAT_COUNTING_RESULTS_FROM_HAT_COUNTING_RESULTS_TITLE',
);

?>