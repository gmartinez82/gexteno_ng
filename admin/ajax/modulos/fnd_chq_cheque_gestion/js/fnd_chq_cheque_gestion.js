// archivo js del modulo 'fnd_chq_cheque'
$(function($)
{
	setInitFndChqChequeGestion();
});


function setInitFndChqChequeGestion()
{
	setClickFndChqChequeGestionVerFicha();
    setClickBtnVerModalFndChqChequeGestionModificarEstado();
    setClickBtnFndChqChequeGestionModificarEstado();
    setClickBtnVerModalEditarFndChqChequeGestion();
    setClickBtnGuardarEditarFndChqChequeGestion();
    setClickBtnAltaFndChqChequeGestion();

    setChangeCmbFiltroFndChqTipoEmisor();
    setChangeCmbFiltroFndChqTipoEmision();
    setChangeCmbFiltroFndChqTipoPago();
    setChangeCmbFiltroFndChqTipoEstado();
    setChangeCmbFiltroGralBanco();
    setChangeCmbFiltroFndChqFechaCobroDesde();
    setChangeCmbFiltroFndChqFechaCobroHasta();
    setChangeCmbFiltroFndChqEnCartera();
    setChangeCmbFiltroGralCaja();

    setChangeCmbFndChqTipoEmisorFndChqChequeEditar();
    setChangeCmbFndChqChequeraFndChqChequeEditar();
}


/*
 Ver Ficha del Recibo
 */
function setClickFndChqChequeGestionVerFicha()
{
    $('.adm_botones_acciones .adm_botones_accion.fnd_chq_cheque_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.fnd_chq_cheque_gestion_ver_ficha').click(function (e)
    {
        var fnd_chq_cheque_id = $(this).parents('.adm_botones_acciones').attr('fnd_chq_cheque_id');
        verModalFndChqChequeGestionVerFicha(fnd_chq_cheque_id);
    });
}


function verModalFndChqChequeGestionVerFicha(fnd_chq_cheque_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_chq_cheque_gestion/modal_fnd_chq_cheque_gestion_ficha.php",
        data: 'fnd_chq_cheque_id=' + fnd_chq_cheque_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 550,
                modal: true,
                title: 'Ficha de la Recibo',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitFndChqChequeGestion();
            setInit();
            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickBtnVerModalFndChqChequeGestionModificarEstado()
{
    $('.db_context .db_context_content .uno.modificar-estado').unbind();
    $('.db_context .db_context_content .uno.modificar-estado').click(function (e)
    {
        var fnd_chq_cheque_id = $(this).parents('.datos').attr('fnd_chq_cheque_id');
        //alert(fnd_chq_cheque_id);
        verModalFndChqChequeGestionModificarEstado(fnd_chq_cheque_id);
    });
}

function verModalFndChqChequeGestionModificarEstado(fnd_chq_cheque_id)
{
    $.ajax(
    {
        type: 'GET',
        url: "ajax/modulos/fnd_chq_cheque_gestion/modal_fnd_chq_cheque_gestion_modificar_estado.php",
        data: 'fnd_chq_cheque_id=' + fnd_chq_cheque_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Cambiar Estado Cheque',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('fnd_chq_cheque_gestion', fnd_chq_cheque_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitFndChqChequeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj){
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnFndChqChequeGestionModificarEstado()
{
    $(".div_modal .datos.modificar-estado #btn_modificar_estado").unbind();
    $(".div_modal .datos.modificar-estado #btn_modificar_estado").click(function (e)
    {
        var fnd_chq_cheque_id = $(this).parents(".datos").attr("fnd_chq_cheque_id");
        setFndChqChequeGestionModificarEstado(fnd_chq_cheque_id);
    });
}


function setFndChqChequeGestionModificarEstado(fnd_chq_cheque_id)
{
    var form = $("#form_datos_modificar_estado");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/fnd_chq_cheque_gestion/set_fnd_chq_cheque_gestion_modificar_estado.php",
        data: form.serialize() + '&fnd_chq_cheque_id=' + fnd_chq_cheque_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();
                
                $.each(arr, function (i, item)
                {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            }
            else
            {
                $(".div_modal").dialog("close");
            }

            setInitFndChqChequeGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Ver Ficha del Recibo
 */
function setClickBtnVerModalEditarFndChqChequeGestion()
{
    $('.adm_botones_acciones .adm_botones_accion.fnd_chq_cheque_gestion_editar').unbind();
    $('.adm_botones_acciones .adm_botones_accion.fnd_chq_cheque_gestion_editar').click(function (e)
    {
        var fnd_chq_cheque_id = $(this).parents('.adm_botones_acciones').attr('fnd_chq_cheque_id');
        verModalEditarFndChqChequeGestion(fnd_chq_cheque_id);
    });
}


function verModalEditarFndChqChequeGestion(fnd_chq_cheque_id)
{
    var modal_titulo = '';
    if(fnd_chq_cheque_id != '' && fnd_chq_cheque_id != 0){
         modal_titulo = 'Editar ';
    }
    else{
        modal_titulo = 'Alta de '
    }

    $.ajax(
    {
        type: 'GET',
        url: "ajax/modulos/fnd_chq_cheque_gestion/modal_fnd_chq_cheque_gestion_editar.php",
        data: 'fnd_chq_cheque_id=' + fnd_chq_cheque_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog(
            {
                width: '55%',
                height: 600,
                modal: true,
                title: modal_titulo + 'Cheque',
                close: function ()
                {
                    var pag = $("#hdn_pag_actual").val();
                    refreshAdmAll('fnd_chq_cheque_gestion', pag);
                    //refreshAdmUno('fnd_chq_cheque_gestion', fnd_chq_cheque_id);
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitFndChqChequeGestion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnGuardarEditarFndChqChequeGestion()
{
    $("#form_fnd_chq_cheque_editar .datos .botonera .boton.btn_guardar").unbind();
    $("#form_fnd_chq_cheque_editar .datos .botonera .boton.btn_guardar").click(function (e) {
        setFndChqChequeGestionEditar();
    });
}


function setFndChqChequeGestionEditar()
{
    var form_fnd_chq_cheque_editar = $("#form_fnd_chq_cheque_editar");
    var fnd_chq_cheque_id          = form_fnd_chq_cheque_editar.attr('fnd_chq_cheque_id');
    
    $.ajax(
    {
        type: "POST",
        url: "ajax/modulos/fnd_chq_cheque_gestion/set_fnd_chq_cheque_gestion_editar.php",
        data: form_fnd_chq_cheque_editar.serialize() + '&fnd_chq_cheque_id=' + fnd_chq_cheque_id,
        dataType: "json",
        beforeSend: function ()
        {
            $(".div_modal .botonera").hide();
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data)
        {
            var arr = data;

            if (arr["error"])
            {
                $(".div_modal .botonera").show();
                $.each(arr, function (i, item)
                {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            }
            else
            {
                $(".div_modal").dialog("close");
            }
            
            setInitFndChqChequeGestion();
            setInit();

        },
        error: function (jqXHR, estado, error) {
        }
    });
}



function setClickBtnAltaFndChqChequeGestion()
{
    $('.div_listado_buscador .col .boton.alta_cheque').unbind();
    $('.div_listado_buscador .col .boton.alta_cheque').click(function (e)
    {
        var fnd_chq_cheque_id = '';
        verModalEditarFndChqChequeGestion(fnd_chq_cheque_id);
    });
}


function setChangeCmbFiltroFndChqTipoEmisor()
{
    $("#cmb_filtro_fnd_chq_tipo_emisor_id").unbind();
    $("#cmb_filtro_fnd_chq_tipo_emisor_id").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroFndChqTipoEmision()
{
    $("#cmb_filtro_fnd_chq_tipo_emision_id").unbind();
    $("#cmb_filtro_fnd_chq_tipo_emision_id").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroFndChqTipoPago()
{
    $("#cmb_filtro_fnd_chq_tipo_pago_id").unbind();
    $("#cmb_filtro_fnd_chq_tipo_pago_id").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroFndChqTipoEstado()
{
    $("#cmb_filtro_fnd_chq_tipo_estado_id").unbind();
    $("#cmb_filtro_fnd_chq_tipo_estado_id").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}

function setChangeCmbFiltroGralBanco()
{
    $("#cmb_filtro_gral_banco_id").unbind();
    $("#cmb_filtro_gral_banco_id").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroFndChqFechaCobroDesde()
{
    $("#txt_filtro_fecha_cobro_desde").unbind();
    $("#txt_filtro_fecha_cobro_desde").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroFndChqFechaCobroHasta()
{
    $("#txt_filtro_fecha_cobro_hasta").unbind();
    $("#txt_filtro_fecha_cobro_hasta").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroFndChqEnCartera()
{
    $("#cmb_fnd_chq_en_cartera").unbind();
    $("#cmb_fnd_chq_en_cartera").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}


function setChangeCmbFiltroGralCaja()
{
    $("#cmb_gral_caja_id").unbind();
    $("#cmb_gral_caja_id").change(function (e)
    {
        setAdmBuscadorTop("fnd_chq_cheque_gestion");
    });
}

function setChangeCmbFndChqTipoEmisorFndChqChequeEditar()
{
    $('#cmb_fnd_chq_tipo_emisor_id').unbind();
    $('#cmb_fnd_chq_tipo_emisor_id').change(function (e)
    {
        var cmb_fnd_chq_tipo_emisor_id = $(this).val();
        var cmb_fnd_chq_chequera_id    = 0;
        refreshDivDatosFndChqChequeEditar(cmb_fnd_chq_tipo_emisor_id, cmb_fnd_chq_chequera_id);
    });
}


function refreshDivDatosFndChqChequeEditar(fnd_chq_tipo_emisor_id, fnd_chq_chequera_id)
{
    $.ajax(
    {
        type: 'POST',
        url: 'ajax/modulos/fnd_chq_cheque_gestion/set_fnd_chq_cheque_gestion_fnd_chq_chequera.php',
        data: 'fnd_chq_tipo_emisor_id=' + fnd_chq_tipo_emisor_id + '&fnd_chq_chequera_id=' + fnd_chq_chequera_id,
        dataType: "json",
        beforeSend: function ()
        {
            $('.depende-chequera').removeAttr('readonly');
            $('.depende-chequera option:not(:selected)').prop('disabled', false);
        },
        success: function (data)
        {
            var arr = data;
            
            $.each(arr, function (i, item)
            {
                $('#' + i).val(arr[i]);
            });
            
            if (arr['tipo_emisor'] == 'PROPIO')
            {
                $('#form_fnd_chq_cheque_editar .datos .par.chq-chequera-editar').show();
                
                $('.depende-chequera').attr('readonly', 'readonly');
                $('.depende-chequera option:not(:selected)').prop('disabled', true);
            }
            else
            {
                $('#form_fnd_chq_cheque_editar .datos .par.chq-chequera-editar').hide();
                $('#cmb_fnd_chq_chequera_id').val(0);
            }
            
            setInitFndChqChequeGestion();
            setInit();
        },
        error: function (jqXHR, estado, error)
        {
        }
    });
}


function setChangeCmbFndChqChequeraFndChqChequeEditar()
{
    $('#cmb_fnd_chq_chequera_id').unbind();
    $('#cmb_fnd_chq_chequera_id').change(function (e)
    {
        var cmb_fnd_chq_tipo_emisor_id = $('#cmb_fnd_chq_tipo_emisor_id').val();
        var cmb_fnd_chq_chequera_id    = $(this).val();
        refreshDivDatosFndChqChequeEditar(cmb_fnd_chq_tipo_emisor_id, cmb_fnd_chq_chequera_id);
    });
}