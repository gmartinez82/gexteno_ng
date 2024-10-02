// JavaScript Document

$().ready(function(){
	setInitMensajes();
});

function setInitMensajes(){
	
	// se setea evento al cerrar
	$('.mensajes .mensaje .cerrar').unbind();
	$('.mensajes .mensaje .cerrar').click(function(){
		$(this).parent().parent().hide();		
	});

	// se setea evento al no mostrar
	$('.mensajes .mensaje .ocultar').unbind();
	$('.mensajes .mensaje .ocultar').click(function(){
		var id = $(this).parent().parent().attr('mensaje_id');
		$(this).parent().parent().hide();
		
		$.ajax({
			type: 'POST',
			url: "../ajax/mensajes/ocultar.php",
			data: "id=" + id,
			dataType: "html",
			beforeSend: function(objeto){
				$(".mensajes .mensaje #mensaje_"+id).fadeOut();
			},
			success: function(data) {
				$(".mensajes .mensaje #mensaje_"+id).html(data);				
			},
			error: function(objeto, quepaso, otroobj){
				alert("errorx "+ objeto);
			}
		});
		
	});

}