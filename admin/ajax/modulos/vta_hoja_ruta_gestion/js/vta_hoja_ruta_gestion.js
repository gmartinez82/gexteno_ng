// archivo js del modulo 'vta_hoja_ruta'
$(function ($) {
    setInitVtaHojaRutaGestion();
});

function setInitVtaHojaRutaGestion() {
    // codigo
    setLocalidadsOrdenar();
    setComprobantesOrdenar();
    setClickChkRemitoUno();

    setClickChkComprobanteAll();

    setClickBtnBuscadorComprobantes();

    setClickLocalidad();
}

function setLocalidadsOrdenar() {

    $('.hoja_ruta.ordenar .bloque-comprobantes').sortable({
        axis: 'y',
        handle: '.localidad-ordenar',
        stop: function (event, ui) {
        },
        update: function (event, ui) {
            var vta_hoja_ruta_id = $('#form_hoja_ruta').attr('vta_hoja_ruta_id');
            var orden = $(this).sortable('serialize') + '&vta_hoja_ruta_id=' + vta_hoja_ruta_id + '&ordenar_por=localidad';
            
            $.post(
                'ajax/modulos/vta_hoja_ruta_gestion/set_hoja_ruta_ordenar.php',
                    orden,
                    function (data) { // success
                        //alert(vta_hoja_ruta_id);
                        console.log('- ordena por localidad');
                    }
            )
        }
    });

}

function setComprobantesOrdenar() {

    $('.hoja_ruta.ordenar .bloque-comprobantes .bloque-comprobantes-x-localidad').sortable({
        axis: 'y',
        handle: '.comprobante-ordenar',
        stop: function (event, ui) {
        },
        update: function (event, ui) {
            var vta_hoja_ruta_id = $('#form_hoja_ruta').attr('vta_hoja_ruta_id');
            var orden = $(this).sortable('serialize') + '&vta_hoja_ruta_id=' + vta_hoja_ruta_id + '&ordenar_por=comprobante';
            
            $.post(
                    'ajax/modulos/vta_hoja_ruta_gestion/set_hoja_ruta_ordenar.php',
                    orden,
                    function (data) { // success
                        console.log('- ordena por comprobante');
                    }
            )
        }
    });
}


function setClickChkRemitoUno()
{
    $('#form_modal .datos.vincular-comprobantes input[type=checkbox]').unbind();
    $('#form_modal .datos.vincular-comprobantes input[type=checkbox]').click(function (e)
	{
        var vincular = 0;
		var identificador_comprobante = $(this).parents('.uno').attr('identificador_comprobante');
        var clase = $(this).attr('clase');
        
        if($(this).is(':checked'))
		{  
            vincular = 1;
		}
        else
        {
            vincular = 0;
        }

		setVtaComprobanteUno(identificador_comprobante, vincular, clase);
    });
}


function setVtaComprobanteUno(identificador_comprobante, vincular, clase)
{
    var form = $('#form_modal');
    var identificador_modal = $('#form_modal .datos.vincular-comprobantes').attr('identificador');
    
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/vta_hoja_ruta_gestion/set_modal_agregar_comprobante.php',
        //data: form.serialize() + '&identificador_modal=' + identificador_modal + '&identificador_comprobante=' + identificador_comprobante + '&vincular=' + vincular + '&clase=' + clase,
        data: 'identificador_modal=' + identificador_modal + '&identificador_comprobante=' + identificador_comprobante + '&vincular=' + vincular + '&clase=' + clase,
        dataType: 'json',
        async: true,
        beforeSend: function (objeto)
        {
            $('.uno.div_comprobante_' + identificador_comprobante).html(img_loading);
        },
        success: function (data)
        {
            //$('#div_remito_' + identificador_comprobante).html(data);
            refreshVtaComprobanteUno(identificador_modal, identificador_comprobante, clase);
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function refreshVtaComprobanteUno(identificador, identificador_comprobante, clase)
{
    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/vta_hoja_ruta_gestion/refresh_bloque_modal_agregar_comprobante_uno.php',
        data: 'identificador=' + identificador + '&identificador_comprobante=' + identificador_comprobante + '&clase=' + clase,
        dataType: 'html',
        async: true,
        beforeSend: function (objeto) {
            //$('.uno.div_comprobante_' + identificador_comprobante).html(img_loading);
        },
        success: function (data) {
            $('.uno.div_comprobante_' + identificador_comprobante).html(data);
            setInitVtaHojaRutaGestion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function setClickChkComprobanteAll()
{
    $('.listado-comprobante #chk_comprobante_id_all').unbind();
    $('.listado-comprobante #chk_comprobante_id_all').click(function (e)
    {
        if ($(this).is(':checked'))
        {
            $(this).parents('.listado-comprobante').find('.uno input[type=checkbox]').prop("checked", true).trigger('click');
        }
        else
        {
            $(this).parents('.listado-comprobante').find('.uno input[type=checkbox]').prop("checked", false).trigger('click');
        }
    });
}


function setClickBtnBuscadorComprobantes()
{
    $('#form_modal .div_listado_buscador .txt_buscador_boton').unbind();
    $('#form_modal .div_listado_buscador .txt_buscador_boton').click(function (e)
	{
        var form = $('#form_modal');
        var vta_hoja_ruta_id = form.attr('vta_hoja_ruta_id');
        //var buscador_de = $('.div_listado_buscador').attr('buscador_de');
        var elem = $(this);
        
        $.ajax(
        {
            type: 'POST',
            url: 'ajax/modulos/vta_hoja_ruta_gestion/set_buscador_comprobante.php',
            data: form.serialize() + '&vta_hoja_ruta_id=' + vta_hoja_ruta_id,
            dataType: "html",
            beforeSend: function (objeto)
            {
                $('.bloque-tabs').html(img_loading);
            },
            success: function (data)
            {
                $('.bloque-tabs').html(data);
                setInitVtaHojaRutaGestion();
                setInit();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickLocalidad()
{
    $(".localidad-info").on( "click", function() {
        var id = $(this).parents('.geo-localidad').attr('identificador');	 
        $('#bloque_comprobantes_x_localidad_' + id).toggle();
    });
}