var prodln = 0;
var columnNum = 6;
var lineno;
var num=0;
var resultHtml='';
var result_id='';

if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}

function insertLineHeader(tableid){
  $("#line_items_label").remove();//隐藏SugarCRM字段

  tablehead = document.createElement("thead");
  tablehead.id = tableid +"_head";
  document.getElementById(tableid).appendChild(tablehead);

  var x=tablehead.insertRow(-1);
  x.id='Line_head';
  var a=x.insertCell(0);
  a.innerHTML=SUGAR.language.get('HAT_Counting_Results', 'LBL_CYCLE_NUMBER');
  var i=x.insertCell(1);
  i.innerHTML=SUGAR.language.get('HAT_Counting_Results', 'LBL_COUNTING_RESULT');
  var j=x.insertCell(2);
  j.innerHTML=SUGAR.language.get('HAT_Counting_Results', 'LBL_ADJUST_NEEDED');
  var k=x.insertCell(3);
  k.innerHTML=SUGAR.language.get('HAT_Counting_Results', 'LBL_ADJUST_METHOD');
  var l=x.insertCell(4);
  l.innerHTML=SUGAR.language.get('HAT_Counting_Results', 'LBL_ADJUST_STATUS');
  var f=x.insertCell(5);
  f.innerHTML='&nbsp;';
}


function insertLineData(line_data ){ //将数据写入到对应的行字段中
  var ln = 0;
  if(line_data.id != '0' && line_data.id !== ''){
    result_id=line_data.id;
    ln = insertLineElements("lineItems");
    $("#line_id".concat(String(ln))).val(line_data.id);
    $("#line_cycle_number".concat(String(ln))).val(line_data.cycle_number);
    $("#line_counting_result".concat(String(ln))).val(line_data.counting_result);
    $("#line_adjust_method".concat(String(ln))).val(line_data.adjust_method);
    $("#line_adjust_needed".concat(String(ln))).attr('checked',line_data.adjust_needed==1?true:false);
    $("#line_adjust_needed".concat(String(ln))).val(line_data.adjust_needed);
    $("#line_adjust_status".concat(String(ln))).val(line_data.adjust_status);
    
    renderLine(ln);
    $("#line_editor"+ln).hide();
  }
}

function insertLineElements(tableid) { //创建界面要素
  //自定义区域JS加载
var id=$("#task_template_attr").val();
if (id!="") {
  attr_info_result(id,'line_',prodln);
}
//包括以下内容：1）显示头，2）定义SQS对象，3）定义界面显示的可见字段，4）界面行编辑器界面
if (document.getElementById(tableid + '_head') !== null) {
  document.getElementById(tableid + '_head').style.display = "";
}

tablebody = document.createElement("tbody");
tablebody.id = "line_body" + prodln;
document.getElementById(tableid).appendChild(tablebody);

var line_act_type_option = document.getElementById("resactastidden").value;
var line_res_type_option = document.getElementById("rescountresidden").value;
var line_adj_type_option = document.getElementById("resadjmetidden").value;
var line_adj_stas_option = document.getElementById("resadjstaidden").value;

var z1 = tablebody.insertRow(-1);
z1.id = 'line_displayed' + prodln;
z1.className = 'oddListRowS1';
z1.innerHTML  =
"<td><span name='displayed_line_cycle_number[" + prodln + "]' id='displayed_line_cycle_number" + prodln + "'></span></td>" +
"<td><span name='displayed_line_counting_result[" + prodln + "]' id='displayed_line_counting_result" + prodln + "'></span></td>"+
"<td><span name='displayed_line_adjust_needed[" + prodln + "]' id='displayed_line_adjust_needed" + prodln + "'></span></td>"+
"<td><span name='displayed_line_adjust_method[" + prodln + "]' id='displayed_line_adjust_method" + prodln + "'></span></td>"+
"<td><span name='displayed_line_adjust_status[" + prodln + "]' id='displayed_line_adjust_status" + prodln + "'></span></td>"+
"<td><input type='button' value='" + SUGAR.language.get('app_strings', 'LBL_EDITINLINE') + "' class='button'  id='btn_edit_line" + prodln +"' onclick='LineEditorShow("+prodln+")'></td>";

  var x = tablebody.insertRow(-1); //以下生成的是Line Editor
  x.id = 'line_editor' + prodln;
 // x.style = "display:none";
 x.innerHTML  = "<td colSpan='"+columnNum+"'>"+
 "<link rel='stylesheet' type='text/css' href='custom/resources/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'>"+
 "<table border='0' class='lineEditor' width='100%'>"+
 "<tr>"+
 "<input name='line_id["+prodln+"]' id='line_id"+prodln+"' value='' type='hidden'>"+
 "<td>"+SUGAR.language.get('HAT_Counting_Results', 'LBL_CYCLE_NUMBER')+"<span class='required'>*</span></td>"+
 "<td><input id='line_cycle_number"+prodln+"' name='line_cycle_number["+prodln+"]'  type='text' value=''></td>"+
 "<td>"+SUGAR.language.get('HAT_Counting_Results', 'LBL_COUNTING_RESULT')+"</td>"+
 "<td><select tabindex='116' name='line_counting_result[" + prodln + "]' id='line_counting_result" + prodln + "' onchange='setadjustneed("+prodln+")'>" + line_res_type_option +"</select></td>"+
 "</td>"+
 "</tr>"+
 resultHtml+
 "<tr>"+
 "<td>"+SUGAR.language.get('HAT_Counting_Results', 'LBL_ADJUST_NEEDED')+"</td>"+
 "<input type='hidden' name='line_adjust_needed["+prodln+"]' value='0'> "+
 "<td><input name='line_adjust_needed["+prodln+"]' id='line_adjust_needed"+prodln+"' title='' value='1' type='checkbox' ></td>"+
 "<td>"+SUGAR.language.get('HAT_Counting_Results', 'LBL_ADJUST_METHOD')+"</td>"+
 "<td><select tabindex='116' name='line_adjust_method[" + prodln + "]' id='line_adjust_method" + prodln + "'>" + line_adj_type_option +"</select></td>"+   
 "</tr>"+
 "<tr>"+
 "<td>"+SUGAR.language.get('HAT_Counting_Results', 'LBL_ADJUST_STATUS')+"</td>"+
 "<td><select tabindex='116' name='line_adjust_status[" + prodln + "]' id='line_adjust_status" + prodln + "'>" + line_adj_stas_option +"</select></td>"+
 "<td><input type='hidden' id='line_deleted"+prodln+"' name='line_deleted["+prodln+"]' value='0'></td>"+
 "<td><input type='button' id='line_delete_line" + prodln + "' class='button btn_del' value='" + SUGAR.language.get('app_strings', 'LBL_DELETE_INLINE') + "' tabindex='116' onclick='btnMarkLineDeleted(" + prodln + ",\"line_\")'>"+
 "<button type='button' id='btn_LineEditorClose" + prodln + "' class='button btn_save' value='" + SUGAR.language.get('app_strings', 'LBL_CLOSEINLINE') + "' tabindex='116' onclick='LineEditorClose(" + prodln + ",\"line_\")'>"+SUGAR.language.get('app_strings', 'LBL_SAVE_BUTTON_LABEL')+" & "+SUGAR.language.get('app_strings', 'LBL_CLOSEINLINE')+" <img src='themes/default/images/id-ff-clear.png' alt='" + SUGAR.language.get(module_sugar_grp1, 'LBL_REMOVE_PRODUCT_LINE') + "'></button></td>"+
 "</tr>"+
 "</table></td>";

 num=prodln;
 renderLine(prodln);
 prodln++;
 return prodln - 1;
}

function renderLine(ln) { //将编辑器中的内容显示于正常行中
  $("#displayed_line_cycle_number"+ln).html($("#line_cycle_number"+ln).val());
  $("#displayed_line_counting_result"+ln).html($("#line_counting_result"+ln).find("option:selected").html());
  $("#displayed_line_adjust_method"+ln).html($("#line_adjust_method"+ln).find("option:selected").html());
  $("#displayed_line_adjust_status"+ln).html($("#line_adjust_status"+ln).find("option:selected").html());
  var flag=$("#line_adjust_needed"+ln).is(':checked')?"是":"否";
  $("#displayed_line_adjust_needed"+ln).html(flag);

  $("#lineItems tr td").each(function(){
    $(this).css('vertical-align','middle');
  });

}

function insertLineFootor(tableid)
{
  tablefooter = document.createElement("tfoot");
  document.getElementById(tableid).appendChild(tablefooter);

  var footer_row=tablefooter.insertRow(-1);
  var footer_cell = footer_row.insertCell(0);

  footer_cell.scope="row";
  footer_cell.colSpan=columnNum;
  footer_cell.innerHTML="<input id='btnAddNewLine' type='button' class='button btn_del' onclick='addNewLine(\"" +tableid+ "\")' value='+ "+SUGAR.language.get('HAT_Counting_Results', 'LBL_BTN_ADD_LINE')+"' />";
}

function addNewLine(tableid) {
  if (check_form('EditView')) {//只有必须填写的字段都填写了才可以新增

  insertLineElements(tableid);//加入新行
    LineEditorShow(prodln-1);       //打开行编辑器 
    setdefaultnum(num);  
  }
}


function btnMarkLineDeleted(ln, key) {//删除当前行
  if(confirm(SUGAR.language.get('app_strings','NTC_DELETE_CONFIRMATION'))) {
    markLineDeleted(ln, key);
    LineEditorClose(ln); 
  }
  else
  {
    return false;
  }
}
function markLineDeleted(ln, key) {//删除当前行

  // collapse line; update deleted value
  document.getElementById(key + 'body' + ln).style.display = 'none';
  document.getElementById(key + 'deleted' + ln).value = '1';
  document.getElementById(key + 'delete_line' + ln).onclick = '';

/*  if (typeof validate != "undefined" && typeof validate['EditView'] != "undefined") {
    removeFromValidate('EditView','line_cycle_number'+ ln);
  }*/
  resetLineNum_Bold();

}

function LineEditorShow(ln){ //显示行编辑器（先自动关闭所有的行编辑器，再打开当前行）
  //validate(ln);
  if (prodln>1) {
    for (var i=0;i<prodln;i++) {
      LineEditorClose(i);
    }
  }
  $("#line_displayed"+ln).hide();
  $("#line_editor"+ln).show();

}

function LineEditorClose(ln) {//关闭行编辑器（显示为正常行）
 // if (check_form('EditView')) {
  $("#line_editor"+ln).hide();
  $("#line_displayed"+ln).show();
  renderLine(ln);
  resetLineNum_Bold();
  
  //}
}

function resetLineNum_Bold() {//数行号
  var j=0;
  for (var i=0;i<prodln;i++) {
    if ($("#line_deleted"+i).val()!=1) {//跳过已经删除的行（实际数据还没有删除，只是从界面隐藏）
      j=j+1;
      $("#displayed_line_num" + i).text(j);
    }
  }
}

function validate(ln){

  addToValidate('EditView', 'line_cycle_number'+ ln,'varchar', 'true',SUGAR.language.get('HAT_Counting_Results', 'LBL_CYCLE_NUMBER'));
}

function setdefaultsta(ln){
  var h_sta =$("#asset_status").val();
  if(h_sta != $('#line_actual_asset_status'+ln).find('option:selected').val()){
    document.getElementById("line_status_diff_flag"+ln).checked=true;
    $('#line_status_diff_flag'+ln).val('1');
  }else{
    document.getElementById("line_status_diff_flag"+ln).checked=false;
    $('#line_status_diff_flag'+ln).val('0');
  }
  setcountingres(ln,'#line_status_diff_flag');
}

function setadjustneed(ln){
  if($('#line_counting_result'+ln).find('option:selected').val()!='Matched'){
    document.getElementById("line_adjust_needed"+ln).checked=true;
    $('#line_adjust_needed'+ln).val('1');
  }else{
    document.getElementById("line_adjust_needed"+ln).checked=false;
    $('#line_adjust_needed'+ln).val('0');
  }
}

function setdefaultnum(ln){
  var default_num =ln+1;
  document.getElementById("line_cycle_number"+ln).value=default_num;
  document.getElementById("line_counting_result"+ln).value='';
}

$("#LBL_EDITVIEW_PANEL1 tr").each(function(i){
  $(this).children().each(function(i){
    $(this).removeAttr('colspan');
    if(i==1)
      $(this).attr('width','87.5%');
  });
  if (i==1) {
    $("#line_items_span").parent().attr('colspan','2');
    $("#line_items_span").parent().attr('width','100%');
  }
});

function replace_display_lines(linesHtml,elementId) {
  var lineItems=document.getElementById(elementId);
  lineItems.innerHTML=linesHtml;
}


function attr_info_result(id,prefix,prodln){
  var module_id = result_id;
  $.ajax({
    url:'index.php?to_pdf=true&module=HAT_Counting_Tasks&action=counting_task_attr',
    data:'&id='+id+'&type=INV_DETAIL_RESULTS&module_action=EditView&module_name=HAT_Counting_Results&module_id='+module_id+'&prefix='+prefix
    +'&prodln='+prodln,
    type:'POST',
    async:false,
    success:function(result){
      resultHtml=result;
    }
  });
}
