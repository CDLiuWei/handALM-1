<?php 
//REF:http://urdhva-tech.blogspot.sg/2013/02/add-custom-subpanel-in-accounts-module.html
function get_current_asset($params) {
    $args = func_get_args();
	$asset_id = $args[0]['asset_id'];

    $return_array['select'] = " SELECT *";
    $return_array['from'] = " FROM hat_assets ";
    $return_array['where'] = " WHERE hat_assets.id = '" . $asset_id . "'";//���Զ�����deleted�ֶ�
    $return_array['join'] = "";
    $return_array['join_tables'] = "";
    return $return_array;
}

/*function get_uom_base($params) {
    $args = func_get_args();
	$base_unit_id = $args[0]['base_unit_id'];
	$uom_class_id = $args[0]['uom_class_id'];

    $return_array['select'] = " SELECT haa_uom.*";
    $return_array['from'] = " FROM haa_uom ";
    $return_array['where'] = " WHERE haa_uom.deleted = '0' AND haa_uom.id = '" . $base_unit_id . "' AND haa_uom.haa_uom_classes_id = '" . $uom_class_id . "' ";
    $return_array['join'] = "";
    $return_array['join_tables'] = "";

    return $return_array;
}*/

function get_hit_racks($params) {
    $args = func_get_args();
	$using_org_id = $args[0]['using_org_id'];

    $return_array['select'] = " SELECT hit_racks.*";
    $return_array['from'] = " FROM hit_racks";
    //$return_array['where'] = " WHERE hit_racks.hat_assets_id = hat_assets.id and hat_assets.using_org_id='" . $using_org_id . "'";//���Զ�����deleted�ֶ�z
	$return_array['where'] = " WHERE hit_racks.hat_assets_id = hat_assets.id and hat_assets.using_org_id='" . $using_org_id . "' or exists (select 1 from hit_rack_allocations,hat_assets where hit_rack_allocations.hit_racks_id=hit_racks.id and hat_assets.id=hit_rack_allocations.hat_assets_id and hat_assets.using_org_id='".$using_org_id."' )";
    $return_array['join'] = ",hat_assets";
    $return_array['join_tables'] = "hit_racks.hat_assets_id = hat_assets.id";
    return $return_array;
}
