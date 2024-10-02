// JavaScript Document

$().ready(function(){	
	// applying the settings	
	var seleccionado = $("#hdn_menu_sel").val();
	$('#adm_menu').Accordion({
		active: 'h3.'+seleccionado,
		header: 'h3.head',
		alwaysOpen: false,
		animated: true,
		showSpeed: 400,
		hideSpeed: 800
	});
	$("#div_menu_cargando").hide();
	$("#adm_menu").show();
});	

function menu_grupo(grupo){
	$('#hdn_menu_sel').val(grupo);
}