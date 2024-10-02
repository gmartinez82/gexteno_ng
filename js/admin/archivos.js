// JavaScript Document

$().ready(function(){
	setInitArchivos();
});

function setInitArchivos(){
	setClickSobreArchivo();
	setClickBtnArchivoModificar();
	setClickBtnArchivoEliminar();
	setClickBtnArchivoEstado();
	setClickBtnArchivoPublicado();
	
	setSortArchivoUno();
}

function setClickSobreArchivo(){
	$(".archivos .uno .archivo").each(function(){
		var identificador = $(this).parent().attr('identificador');
		var padre = $(".archivos").attr('padre');
		var clase = $(".archivos").attr('clase');
		var elemento_id = 'div_archivo_' + identificador;

		setRefreshArchivoConAjax(elemento_id, identificador, padre, clase);
	});


	$("#div_archivo_nuevo").each(function(){
		var identificador = $(this).parent().attr('identificador');
		var padre = $(".archivos").attr('padre');
		var clase = $(".archivos").attr('clase');
		var elemento_id = 'div_archivo_nuevo';
		
		setNuevaArchivoConAjax(elemento_id, identificador, padre, clase);
	});

}
function setRefreshArchivoConAjax(elemento_id, identificador, padre, clase){
	new AjaxUpload('#' + elemento_id, {
		action: 'ajax/archivos/upload.php?identificador='+identificador+'&padre='+padre+'&clase='+clase,
		onSubmit : function(file , ext){
			if (! (ext && /^(doc|docx|xls|xlsx|pdf|mp3)$/.test(ext))){
				// extensiones permitidas
				alert('Error: Solo se permiten archivos');
				// cancela upload
				return false;
			} else {
				$('#div_grupo_imagen_' + identificador + " .loading").show();
			}
		},
		onComplete: function(file, response){
			$('#div_grupo_imagen_' + identificador + " .loading").hide();
			$('#' + elemento_id).html(response);
		}
	});
}

function setNuevaArchivoConAjax(elemento_id, identificador, padre, clase){
	new AjaxUpload('#' + elemento_id, {
		action: 'ajax/archivos/upload_new.php?identificador='+identificador+'&padre='+padre+'&clase='+clase,
		onSubmit : function(file , ext){
			if (! (ext && /^(doc|docx|xls|xlsx|pdf|mp3)$/.test(ext))){
				// extensiones permitidas
				alert('Error: Solo se permiten archivos');
				// cancela upload
				return false;
			} else {
				$('#div_archivo_nuevo').children(".loading").show();
			}
		},
		onComplete: function(file, response){
			$('#div_archivo_nuevo').children(".loading").hide();
			$('#' + elemento_id).parent().before(response);
			
			setInitArchivos();
		}
	});
}

function setClickBtnArchivoModificar(){
	$('.boton.modificar').unbind();
	$('.boton.modificar').click(function(){
															  
		var identificador = $(this).parent().parent().attr('identificador');
		var padre = $(".archivos").attr('padre');
		var clase = $(".archivos").attr('clase');
		var tabla = $(".archivos").attr('tabla');

		var archivo = 'ajax/modulos/'+tabla+'_archivo/'+tabla+'_archivo_alta.php';		
		var pantalla = '&arr_pantalla=array(\''+tabla+'\', '+padre+', 0)';		
		
		var parametros = $.param( 
			{ 'arr_pantalla' :  
				{
				'prd_tipo_producto' :
					{ 'valor' : padre, 'modo' : 0 } 
				}
			}
		);
		pantalla = decodeURIComponent(parametros);		

		var data = 'id='+identificador + '&' +pantalla;
		
		var contenedor = 'div_modal';
		var tipo = 'formulario';
		var post = 'refreshArchivoUno(' + identificador + ', "' + clase + '", "' + tabla + '")';
/*	
$.ajax({
url:'ajax/modulos/prd_tipo_producto_archivo/prd_tipo_producto_archivo_alta.php',
dataType:'html',
type:'post',
data:{'arr':'{"parametros":{"val1":3,"val2":87,"val3":"hola"}"varx":"123456"}',
'n':'valorn1'},
success:function(data){
alert(data);
}
});		
	*/	
		wopenModal(archivo, data, contenedor, 600, 600, tipo, post);
	});
}

function refreshArchivoUno(id, clase, tabla){
	$.ajax({
		type: 'POST',
		url: 'ajax/modulos/'+tabla+'_archivo/'+tabla+'_archivo_uno_refresh.php',
		data: 'id=' + id + '&clase=' + clase,
		dataType: "html",
		beforeSend: function(objeto){
			//$('#div_item_hijos_' + item_id).html(img_loading);
		},
		success: function(data) {
			$('#div_grupo_archivo_' + id).html(data);
			setInitArchivos();
		},
		error: function(objeto, quepaso, otroobj){
			alert("error "+ objeto.status + ' ' + objeto.message);
		}
	});	
}

function setClickBtnArchivoEliminar(){
	$('.boton.eliminar').unbind();
	$('.boton.eliminar').click(function(){
															  
		var identificador = $(this).parent().parent().attr('identificador');
		var clase = $(".archivos").attr('clase');
		var tabla = $(".archivos").attr('tabla');
		
		if(confirm("Seguro que desea eliminar?")){
		$.ajax({
			type: 'POST',
			url: 'ajax/modulos/'+tabla+'_archivo/'+tabla+'_archivo_uno_eliminar.php',
			data: 'id=' + identificador + '&clase=' + clase,
			dataType: "html",
			beforeSend: function(objeto){
				//$('#div_item_hijos_' + item_id).html(img_loading);
			},
			success: function(data) {
				$('#div_grupo_archivo_' + identificador).html(data);
				setInitArchivos();
			},
			error: function(objeto, quepaso, otroobj){
				alert("error "+ objeto.status + ' ' + objeto.message);
			}
		});
		}
	});
}

function setClickBtnArchivoEstado(){
	$('.boton.estado').unbind();
	$('.boton.estado').click(function(){
															  
		var identificador = $(this).parent().parent().attr('identificador');
		var clase = $(".archivos").attr('clase');
		var tabla = $(".archivos").attr('tabla');
		
		$.ajax({
			type: 'POST',
			url: 'ajax/modulos/'+tabla+'_archivo/'+tabla+'_archivo_uno_estado.php',
			data: 'id=' + identificador + '&clase=' + clase,
			dataType: "html",
			beforeSend: function(objeto){
				//$('#div_item_hijos_' + item_id).html(img_loading);
			},
			success: function(data) {
				$('#div_grupo_archivo_' + identificador).html(data);
				setInitArchivos();
			},
			error: function(objeto, quepaso, otroobj){
				alert("error "+ objeto.status + ' ' + objeto.message);
			}
		});
	});
}

function setClickBtnArchivoPublicado(){
	$('.boton.publicado').unbind();
	$('.boton.publicado').click(function(){
															  
		var identificador = $(this).parent().parent().attr('identificador');
		var clase = $(".archivos").attr('clase');
		var tabla = $(".archivos").attr('tabla');
		
		$.ajax({
			type: 'POST',
			url: 'ajax/modulos/'+tabla+'_archivo/'+tabla+'_archivo_uno_publicado.php',
			data: 'id=' + identificador + '&clase=' + clase,
			dataType: "html",
			beforeSend: function(objeto){
				//$('#div_item_hijos_' + item_id).html(img_loading);
			},
			success: function(data) {
				$('#div_grupo_archivo_' + identificador).html(data);
				setInitArchivos();
			},
			error: function(objeto, quepaso, otroobj){
				alert("error "+ objeto.status + ' ' + objeto.message);
			}
		});
	});
}

function setSortArchivoUno(){
	//$( ".archivos" ).sortable();
	$(".archivos").sortable({
		start: function (e,ui){
		},  
		sort: function (e,ui){
		},  
		change: function(){
		},		
		stop: function(event, ui) {
		},
		update: function(event, ui) { 
			var padre = $(this).attr('padre');
			var clase = $(this).attr('clase');
			var orden = $(this).sortable("serialize") + '&padre='+padre + '&clase='+clase;
			
			$.post( 
				"ajax/archivos/ordenar.php", 
				orden,
				function(data){ // success
					//$(".archivos").html(data);
				}
			)
		}
	});
	
	
}