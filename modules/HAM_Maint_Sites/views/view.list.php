<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');

class HAM_Maint_SitesViewList extends ViewList
{
/*
 *  重写方法，添加where条件
 */
function processSearchForm(){
  parent::processSearchForm();

  $haa_frameworks_id=$_SESSION["current_framework"];
  if ($this->where) {
    $this->where.=" and ham_maint_sites.haa_frameworks_id='".$haa_frameworks_id."'";
  }else{
    $this->where="ham_maint_sites.haa_frameworks_id='".$haa_frameworks_id."'";
  }
}

}
