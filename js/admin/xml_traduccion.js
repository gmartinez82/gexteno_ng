// JavaScript Document

$(function($) {
	setXmlTraduccionKeyPress();
});

function setXmlTraduccionKeyPress(){
	$("#table_xml_traduccion input").unbind();
	$("#table_xml_traduccion input").keyup(function(){
		var id = $(this).attr('id');
		
		if($("#hdn_" + id).val() == 0){
			$("#" + id).after('<img src="imgs/btn_estado_1.gif" width="18" align="absmiddle" title="Modificado">');
		}
		
		$("#hdn_" + id).val(1);
	});
}