// JavaScript Document

$().ready(function(){
	setInitBuscador();
});

function setInitBuscador(){
	
	// se setea evento al cerrar
	$('#buscador #btn_cerrar').unbind();
	$('#buscador #btn_cerrar').click(function(){
		$('#buscador').hide();
	});

	// se setea evento al cerrar
	$('.ver_buscador').unbind();
	$('.ver_buscador').click(function(){
		//$('#buscador').toggle();
		var modulo = $(this).attr('modulo');

	$.ajax({
		type: 'POST',
		url: "parciales/buscadores/"+modulo+".php",
		dataType: "html",
		beforeSend: function(objeto){
			$('.div_modal').html(html_loading_img);
			$('.div_modal').show();
			$('.div_modal').dialog({
				width: 500,
				height: 600,
				modal: true,
				title: 'Buscador',
				close: function(){
					//$('.div_modal_' + elemento).dialog('destroy');					
				}				
			});
		},
		success: function(data) {

			$('.div_modal').html(data);
		},
		error: function(objeto, quepaso, otroobj){
			//alert("errorx "+ objeto.status);
		}
	});


		
	});

}