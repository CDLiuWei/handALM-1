<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

require_once('include/utils/sugar_file_utils.php');

function addConfigFromSSO($id){
    echo "----------------------------------------";
    echo "111111111111111111111111111111111111111111111111111111111";

	$bean_sso = BeanFactory::getBean('HAA_SSOSets',$id);
    $http_referer_url = $bean_sso->http_referer_url;
    return $http_referer_url;
    
    //require_once('config_override.php');
    $contents_before = sugar_file_get_contents('config_override.php');
    echo $contents_before;
    echo "----------------------------------------";
    echo "string";







	/*if(!(ACLController::checkAccess('HAOS_Revenues_Quotes', 'edit', true))){
		ACLController::displayNoAccess();
		die;
	}

	require_once('modules/HAOS_Revenues_Quotes/createRevenue.php');
	$at = new HAOS_Insurance_Claims();
	$at->retrieve($Id);
	if ($at->claim_treated_status!='Treated'){
		die('已处理的保险理赔才能创建收支计费项!');
	}

	$rawRow['haa_frameworks_id_c'] = $rawRow['haa_frameworks_id_c'];
	$rawRow['revenue_quote_number'] = '';
	$rawRow['name'] = $at->name.'收支';
	$rawRow['clear_status'] = 'Unclear';
	$rawRow['event_date'] = date_format(date_create($at->time),"Y-m-d") ;
	$rawRow['source_code'] = 'HAOS_Insurance_Claims';
	$rawRow['source_id'] = $at->id;

	$rawRow['source_reference'] =  $at->claim_number;
	if($at->parent_type=='Contacts'){
		$rawRow['contact_id_c'] = $at->parent_id;
	}
	elseif($at->parent_type=='Accounts'){
		$rawRow['account_id_c'] = $at->parent_id;
	}

	$rawRow['expense_group'] = $at->claim_type;

	$quoteRow['line_item_type_c']='Service';
	$quoteRow['vat']="0.0";
	$quoteRow['product_total_price']=$at->act_claim_total_amt;
	$quoteRow['product_list_price']=$at->act_claim_total_amt;
	$quoteRow['product_unit_price']=$at->act_claim_total_amt;
	$quoteRow['name']=$at->comment;

	$at->haos_revenues_quotes_id=createRevenue($rawRow,$quoteRow);
	$at->save();
	return $at->haos_revenues_quotes_id;
*/
}

?>
