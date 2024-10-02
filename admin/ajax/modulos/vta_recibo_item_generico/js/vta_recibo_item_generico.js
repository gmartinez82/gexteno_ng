// archivo js del modulo 'vta_recibo'
$(function ($) {
    setInitVtaReciboGestion();
});

function setInitVtaReciboGestion()
{
    setClickBtnAgregarItemRecibo();
    setClickBtnQuitarItemRecibo();

    // Cheque
    setChangeCmbGralFpFormaPago();
    setClickVtaReciboGestionSetCheque();

    // Retencion
    setChangeCmbVtaReciboConcepto();
    setClickVtaReciboGestionSetRetencion();
    setClickVtaReciboGestionSetRetencionBtnGuardar();

    setClickVtaReciboGestionItemImporteUnitario();
    
    // Multimoneda
    setChangeCmbGralMoneda();
}


function setClickBtnAgregarItemRecibo() {
    $(".vta_recibo_item_generico_agregar_item_recibo").unbind();
    $(".vta_recibo_item_generico_agregar_item_recibo").click(function (e) {
        //var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var cli_cliente_id = $("#vta_recibo_item_generico_listado_vta_recibo_items").attr("cli_cliente_id");

        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemRecibo(cli_cliente_id, key, $(this));
    });
}


function setBtnAgregarItemRecibo(cli_cliente_id, key, elem) {

    //var form = $("#form_generar_recibo");
    //var presupuesto_id = $('.listado_vta_recibo_item_generico_vta_recibo_items').attr('vta_presupuesto_id');
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_item_generico/set_bloque_vta_recibo_item_generico_uno.php",
        data: 'dbsug_cli_cliente_id=' + cli_cliente_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_vta_recibo_item_generico_vta_recibo_items tbody').append(data);

            elem.show();

            setInitVtaReciboGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnQuitarItemRecibo() {
    $(".listado_vta_recibo_item_generico_vta_recibo_items .boton.vta_recibo_item_generico_quitar_item_recibo").unbind();
    $(".listado_vta_recibo_item_generico_vta_recibo_items .boton.vta_recibo_item_generico_quitar_item_recibo").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?'))
        {
            $(this).parents("tr").remove();
            setRecalcularTotalReciboItemGenerico();
        }
    });
}


/*
 * Forma de Pago 
 */
function setChangeCmbGralFpFormaPago()
{
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .cmb_vta_recibo_item_generico_gral_fp_forma_pago_id").unbind();
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .cmb_vta_recibo_item_generico_gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax(
                {
                    type: "POST",
                    url: "ajax/modulos/vta_recibo_item_generico/set_vta_recibo_item_generico_gral_fp_forma_pago.php",
                    data: "key=" + key + "&cmb_vta_recibo_item_generico_gral_fp_forma_pago_id[" + key + "]=" + cmb_gral_fp_forma_pago_id,
                    dataType: "json",
                    beforeSend: function ()
                    {
                        $("#cmb_vta_recibo_item_generico_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');
                        $("#cmb_vta_recibo_item_generico_gral_fp_forma_pago_id" + key + "_error").html("");
                    },
                    success: function (data)
                    {
                        var arr = data;

                        if (arr["error"])
                        {
                            $.each(arr, function (i, item) {
                                $("#" + i).addClass('input-error');
                                $("#" + i + "_error").html(arr[i]);
                            });
                        } else
                        {
                            $("#cmb_vta_recibo_item_generico_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');

                            if (arr['btn_cheque'])
                            {
                                $('#btn_ver_modal_set_cheque_info_' + key).show();

                                $('#txt_vta_recibo_item_generico_importe_unitario_' + key).val('');
                                $('#txt_vta_recibo_item_generico_importe_unitario_real_' + key).val('');
                                $('#txt_vta_recibo_item_generico_descripcion_' + key).val('');
                                $('#txt_vta_recibo_item_generico_referencia_' + key).val('');

                                if (arr["importe_cheque_formateado"])
                                {
                                    $('#txt_vta_recibo_item_generico_importe_unitario_' + key).val(arr['importe_cheque_formateado']);
                                    $('#txt_vta_recibo_item_generico_importe_unitario_real_' + key).val(arr['importe_cheque_formateado']);
                                    $('#txt_vta_recibo_item_generico_descripcion_' + key).val(arr['descripcion_cheque']);
                                    $('#txt_vta_recibo_item_generico_referencia_' + key).val(arr['numero_cheque']);
                                }

                                $('#txt_vta_recibo_item_generico_importe_unitario_' + key).attr('readonly', 'readonly');
                                $('#txt_vta_recibo_item_generico_importe_unitario_real_' + key).attr('readonly', 'readonly');
                                $('#txt_vta_recibo_item_generico_descripcion_' + key).attr('readonly', 'readonly');
                                $('#txt_vta_recibo_item_generico_referencia_' + key).attr('readonly', 'readonly');
                            } else
                            {
                                //$('#txt_importe_unitario_' + key).val('');
                                //$('#txt_descripcion_' + key).val('');
                                //$('#txt_referencia_' + key).val('');

                                $('#btn_ver_modal_set_cheque_info_' + key).hide();

                                $('#txt_vta_recibo_item_generico_importe_unitario_' + key).removeAttr('readonly');
                                $('#txt_vta_recibo_item_generico_importe_unitario_real_' + key).removeAttr('readonly');
                                $('#txt_vta_recibo_item_generico_descripcion_' + key).removeAttr('readonly');
                                $('#txt_vta_recibo_item_generico_referencia_' + key).removeAttr('readonly');
                            }
                        }

                        setInitVtaReciboGestion();
                        setInit();
                        setInitDbSuggest();
                        setInitDbSuggestBoton();
                    },
                    error: function (jqXHR, estado, error) {

                    }
                });
    });
}


function setClickVtaReciboGestionSetCheque()
{
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key = $(this).parents("tr").attr('key');
        var cheque_id = 0;
        var en_cartera = '-1';
        var txt_buscador_cheque = '';
        var limpiar_cheque_seleccionado = 0;

        var modulo = 'vta_recibo_item_generico';
        var var_sesion_random = $('#vta_recibo_item_generico_listado_vta_recibo_items').attr('var_sesion_random');

        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}


function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
    // -------------------------------------------------------------------------
    // se elimina el div, si existiese
    // -------------------------------------------------------------------------
    $('.div_modal_cheque_buscador').remove(); 
    
    // -------------------------------------------------------------------------
    // se crea el div
    // -------------------------------------------------------------------------
    $('<div>', {
        id: 'div_modal_cheque_buscador',
        class: 'div_modal_cheque_buscador',
        title: ''
    }).appendTo('body');    
    
    $.ajax(
            {
                type: "GET",
                //url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_set_cheque_info.php",
                url: "ajax/modulos/fnd_chq_cheque_buscador/modal_fnd_chq_cheque_buscador_set_cheque_info.php",
                data: 'modulo=' + modulo
                        + '&key=' + key
                        + '&cheque_id=' + cheque_id
                        + '&en_cartera=' + en_cartera
                        + '&txt_buscador_cheque=' + txt_buscador_cheque
                        + '&limpiar_cheque_seleccionado=' + limpiar_cheque_seleccionado
                        + '&var_sesion_random=' + var_sesion_random,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('.div_modal_cheque_buscador').html(img_loading);
                    $('.div_modal_cheque_buscador').dialog({
                        width: 1200,
                        height: 600,
                        modal: true,
                        title: 'Datos del Cheque',
                        close: function ()
                        {
                            setRecalcularTotalReciboItemGenerico();
                        },
                        hide: 'fade',
                    });
                },
                success: function (data)
                {
                    $(".div_modal_cheque_buscador").html(data);
                    $(".div_modal_cheque_buscador .datos").hide();

                    setTimeout(function ()
                    {
                        getFileCssFndChqChequeBuscador(); // se levanta CSS
                        $(".div_modal_cheque_buscador .datos").fadeIn();
                    }, 500);


                    setTimeout(function ()
                    {

                        getFileJsFndChqChequeBuscador(); // se levanta JS

                        setInitVtaReciboGestion();
                        setInit();

                        setInitDbSuggest();
                        setInitDbSuggestBoton();
                    }, 500);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function getFileCssFndChqChequeBuscador(){
    $.ajax({
        url: "../css/admin/modulos/fnd_chq_cheque_buscador.css?" + Math.random(),
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_fnd_chq_cheque_buscador").before(css);
        }
    });
}


function getFileJsFndChqChequeBuscador(){
    $.ajax({
        url: "../js/admin/modulos/fnd_chq_cheque_buscador.js?" + Math.random(),
        success: function (data){
            var js = "<script>" + data + "</script>";
            $("#form_fnd_chq_cheque_buscador").before(js);
        }
    });
}



/*
 * Retenciones 
 */
function setChangeCmbVtaReciboConcepto()
{
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .cmb_vta_recibo_item_generico_vta_recibo_concepto_id").unbind();
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .cmb_vta_recibo_item_generico_vta_recibo_concepto_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_vta_recibo_concepto_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_recibo_item_generico/set_vta_recibo_item_generico_vta_recibo_concepto.php",
            data: "key=" + key + "&cmb_vta_recibo_concepto_id=" + cmb_vta_recibo_concepto_id,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_vta_recibo_item_generico_vta_recibo_concepto_id[" + key + "]").removeClass('input-error');
                $("#cmb_vta_recibo_item_generico_vta_recibo_concepto_id_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else
                {
                    $("#cmb_vta_recibo_item_generico_vta_recibo_concepto_id[" + key + "]").removeClass('input-error');

                    if (arr["btn_retencion"]) {
                        $("#btn_ver_modal_set_retencion_info_" + key).show();
                    } else {
                        $("#btn_ver_modal_set_retencion_info_" + key).hide();
                    }
                }

                setInitVtaReciboGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}


function setClickVtaReciboGestionSetRetencion()
{
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .boton.ver_modal_set_retencion_info").unbind();
    $("#vta_recibo_item_generico_listado_vta_recibo_items .tr-item .boton.ver_modal_set_retencion_info").click(function (e) {
        var key = $(this).parents("tr").attr('key');
        verModalVtaReciboGestionSetRetencion(key);
    });
}


function verModalVtaReciboGestionSetRetencion(key)
{
    var modulo = 'vta_recibo_item_generico';
    var var_sesion_random = $('#vta_recibo_item_generico_listado_vta_recibo_items').attr('var_sesion_random');

    $.ajax(
            {
                type: "GET",
                url: "ajax/modulos/vta_recibo_item_generico/modal_vta_recibo_item_generico_retencion_info.php",
                data: 'modulo=' + modulo + '&key=' + key + '&var_sesion_random=' + var_sesion_random,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    $('.div_modal_retenciones').html(img_loading);
                    $('.div_modal_retenciones').dialog({
                        width: 700,
                        height: 450,
                        modal: true,
                        title: 'Datos de la Retencion',
                        close: function () {
                        },
                        hide: 'fade',
                    });
                },
                success: function (data)
                {
                    $(".div_modal_retenciones").html(data);

                    setInitVtaReciboGestion();
                    setInit();
                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickVtaReciboGestionSetRetencionBtnGuardar() {
    $(".div_modal_retenciones #form_set_retencion_info .datos .botonera .boton.btn_guardar").unbind();
    $(".div_modal_retenciones #form_set_retencion_info .datos .botonera .boton.btn_guardar").click(function (e) {
        setVtaReciboGestionSetRetencionBtnGuardar();
    });
}


function setVtaReciboGestionSetRetencionBtnGuardar()
{
    var form_set_retencion_info = $('#form_set_retencion_info');
    var key = form_set_retencion_info.attr('key');
    var modulo = form_set_retencion_info.attr('modulo');
    var var_sesion_random = form_set_retencion_info.attr('var_sesion_random');

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/vta_recibo_item_generico/set_vta_recibo_item_generico_retencion_info.php",
                data: form_set_retencion_info.serialize() + '&modulo=' + modulo + '&key=' + key + '&var_sesion_random=' + var_sesion_random,
                dataType: "json",
                beforeSend: function () {
                    $(".div_modal_retenciones .botonera").hide();
                    $(".div_modal_retenciones .textbox").removeClass('input-error');
                    $(".div_modal_retenciones .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;

                    if (arr["error"])
                    {
                        $(".div_modal_retenciones .botonera").show();
                        $.each(arr, function (i, item) {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal_retenciones").dialog("close");
                    }

                    setInitVtaReciboGestion();
                    setInit();
                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (jqXHR, estado, error) {
                }
            });
}



function setClickVtaReciboGestionItemImporteUnitario()
{
    $('.listado_vta_recibo_item_generico_vta_recibo_items .txt_vta_recibo_item_generico_importe_unitario_real').unbind();
    $('.listado_vta_recibo_item_generico_vta_recibo_items .txt_vta_recibo_item_generico_importe_unitario_real').keyup(function ()
    {
        setTimeout(function ()
        {
            setRecalcularTotalReciboItemGenerico();
        }, 500);
    });
}

function setRecalcularTotalReciboItemGenerico()
{
    var form = $("#vta_recibo_item_generico_listado_vta_recibo_items").parents('form');
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_item_generico/set_vta_recibo_item_generico_recalcular_total.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto)
        {
        },
        success: function (data)
        {
            var arr = data;
            var arr_comentarios = data["comentarios"];
            var arr_inputs = data["inputs"];
            
            $.each(arr_comentarios, function (i, item) {
                $("#" + i).html(arr_comentarios[i]);
            });
            $.each(arr_inputs, function (i, item) {
                $("#" + i).val(arr_inputs[i]);
            });
            $(".vta_recibo_item_generico_total").html(arr['VTA_RECIBO_ITEM_GENERICO_TOTAL_FORMATEADO']);

            setInitVtaReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbGralMoneda(){
    $('.listado_vta_recibo_item_generico_vta_recibo_items .cmb_vta_recibo_item_generico_gral_moneda_id').unbind();
    $('.listado_vta_recibo_item_generico_vta_recibo_items .cmb_vta_recibo_item_generico_gral_moneda_id').change(function ()
    {
        setRecalcularTotalReciboItemGenerico();
    });
}
