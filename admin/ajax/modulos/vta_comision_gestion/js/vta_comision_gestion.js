// archivo js del modulo 'vta_comision'
var accion_masiva;

$(function ($) {
    setInitVtaComisionGestion();
});

function setInitVtaComisionGestion() {

    setClickGenerarComision();

    setChangeCmbFiltroComprobantes();
    setChangeCmbFiltroVtaComisionista();

    // seleccion chk
    setChkGenerarVtaComisionAll();
    setChkGenerarVtaComisionUno();

    setClickModalVtaComisionP1TxtPorcentajeComision();

    // Forma de Pago
    setClickFormaPagoAgregar();
    setClickFormaPagoQuitar();
    setKeyupFormaPagoImporteUnitario();

    // Cheque
    setChangeCmbGralFpFormaPago();
    setClickVtaComisionGestionSetCheque();

    setClickBtnRegistrarComision();

    // Seccion acciones
    setClickVtaComisionGestionVerFicha();
    setClickVtaComisionGestionEnviarPorCorreo();
    setClickVtaComisionGestionEnviarPorCorreoConfirmar();
    setClickVtaComisionGestionAutorizar();
    setClickVtaComisionGestionAutorizarConfirmar();
    setClickVtaComisionGestionAnular();
    setClickVtaComisionGestionAnularConfirmar();
    setClickVtaComisionGestionPagar();
    setClickVtaComisionGestionPagarConfirmar();

    setClickVtaComisionGestionVerAdjuntoMail();
    setClickVtaComisionGestionVerCuerpoMail();


    // Seccion filtros Top
    setChangeCmbFiltroVtaComisionNumeroComision();
    setChangeCmbFiltroVtaComisionVtaPreventista();
    setChangeCmbFiltroVtaComisionVtaComprador();
    setChangeCmbFiltroVtaComisionVtaVendedor();
    setChangeCmbFiltroVtaComisionTipoEstado();

    // modificar porcentaje
    setClickBtnModificarPorcentaje();
    setClickBtnModificarPorcentajeConfirmacion();
}

function setChangeCmbFiltroVtaComisionNumeroComision() {
    $("#txt_buscador_numero_comision").unbind();
    $("#txt_buscador_numero_comision").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_comision_gestion");
    });
}
function setChangeCmbFiltroVtaComisionVtaPreventista() {
    $("#cmb_filtro_vta_preventista_id").unbind();
    $("#cmb_filtro_vta_preventista_id").change(function () {
        setAdmBuscadorTop("vta_comision_gestion");
    });
}
function setChangeCmbFiltroVtaComisionVtaComprador() {
    $("#cmb_filtro_vta_comprador_id").unbind();
    $("#cmb_filtro_vta_comprador_id").change(function () {
        setAdmBuscadorTop("vta_comision_gestion");
    });
}
function setChangeCmbFiltroVtaComisionVtaVendedor() {
    $("#cmb_filtro_vta_vendedor_id").unbind();
    $("#cmb_filtro_vta_vendedor_id").change(function () {
        setAdmBuscadorTop("vta_comision_gestion");
    });
}
function setChangeCmbFiltroVtaComisionTipoEstado() {
    $("#cmb_filtro_vta_comision_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_comision_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_comision_gestion");
    });
}

// ----------------------------------------------------------------
// Modal Generar una Nueva Comision
// ----------------------------------------------------------------
function setClickGenerarComision() {
    $('.div_listado_buscador .col .boton.agregar-comision').unbind();
    $('.div_listado_buscador .col .boton.agregar-comision').click(function (e) {

        var tipo = 'orden-venta';
        verModalGenerarComision(tipo);
    });
}
function verModalGenerarComision(tipo) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_agregar.php",
        data: 'tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Generar Comision de Venta',
                close: function () {
                    refreshAdmAll('vta_comision_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbFiltroComprobantes() {
    $(".cmb_filtro_comprobantes").unbind();
    $(".cmb_filtro_comprobantes").change(function () {
        var txt_fecha_desde = $("#txt_fecha_desde").val();
        var txt_fecha_hasta = $("#txt_fecha_hasta").val();

        var cmb_vta_preventista_id = $("#cmb_vta_preventista_id").val();
        var cmb_vta_comprador_id = $("#cmb_vta_comprador_id").val();
        var cmb_vta_vendedor_id = $("#cmb_vta_vendedor_id").val();
        var cmb_gral_actividad_id = $("#cmb_gral_actividad_id").val();
        var cmb_gral_escenario_id = $("#cmb_gral_escenario_id").val();
        var cmb_ver_todos = $("#cmb_ver_todos").val();
        var cmb_ver_otros = $("#cmb_ver_otros").val();

        refreshVtaFacturasAComisionar(txt_fecha_desde, txt_fecha_hasta, cmb_vta_preventista_id, cmb_vta_comprador_id, cmb_vta_vendedor_id, cmb_gral_actividad_id, cmb_gral_escenario_id, cmb_ver_todos, cmb_ver_otros);

    });
}

function setChangeCmbFiltroVtaComisionista() {
    $(".cmb_vta_comisionista_id").unbind();
    $(".cmb_vta_comisionista_id").change(function () {
        var txt_fecha_desde = $("#txt_fecha_desde").val();
        var txt_fecha_hasta = $("#txt_fecha_hasta").val();

        $(".cmb_vta_comisionista_id").not($(this)).val(0);

        var cmb_vta_preventista_id = $("#cmb_vta_preventista_id").val();
        var cmb_vta_comprador_id = $("#cmb_vta_comprador_id").val();
        var cmb_vta_vendedor_id = $("#cmb_vta_vendedor_id").val();
        var cmb_gral_actividad_id = $("#cmb_gral_actividad_id").val();
        var cmb_gral_escenario_id = $("#cmb_gral_escenario_id").val();
        var cmb_ver_todos = $("#cmb_ver_todos").val();
        var cmb_ver_otros = $("#cmb_ver_otros").val();

        refreshVtaFacturasAComisionar(txt_fecha_desde, txt_fecha_hasta, cmb_vta_preventista_id, cmb_vta_comprador_id, cmb_vta_vendedor_id, cmb_gral_actividad_id, cmb_gral_escenario_id, cmb_ver_todos, cmb_ver_otros);
    });
}
function refreshVtaFacturasAComisionar(txt_fecha_desde, txt_fecha_hasta, cmb_vta_preventista_id, cmb_vta_comprador_id, cmb_vta_vendedor_id, cmb_gral_actividad_id, cmb_gral_escenario_id, cmb_ver_todos, cmb_ver_otros) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_comision_gestion/bloque_vta_facturas_a_comisionar_datos.php",
        data: 'txt_fecha_desde=' + txt_fecha_desde +
                '&txt_fecha_hasta=' + txt_fecha_hasta +
                '&cmb_vta_preventista_id=' + cmb_vta_preventista_id +
                '&cmb_vta_comprador_id=' + cmb_vta_comprador_id +
                '&cmb_vta_vendedor_id=' + cmb_vta_vendedor_id +
                '&cmb_gral_actividad_id=' + cmb_gral_actividad_id + 
                '&cmb_gral_escenario_id=' + cmb_gral_escenario_id+
                '&cmb_ver_todos=' + cmb_ver_todos+
                '&cmb_ver_otros=' + cmb_ver_otros,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_agregar_vta_comision').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_agregar_vta_comision').html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChkGenerarVtaComisionAll() {
    $('#listado_vta_comision_agregar_comision #chk_vta_comprobante_select_all').unbind();
    $('#listado_vta_comision_agregar_comision #chk_vta_comprobante_select_all').click(function (e) {
        
        accion_masiva = true;
        
        if ($(this).is(':checked')) {
            $("#listado_vta_comision_agregar_comision .chk_vta_comprobante").attr('checked', true);
        } else {
            $("#listado_vta_comision_agregar_comision .chk_vta_comprobante").attr('checked', false);
        }
        $("#listado_vta_comision_agregar_comision").find(".chk_vta_comprobante").trigger('change');
        
        // loading
        $("#listado_vta_comision_agregar_comision").before("<div id='html_loading_botonera' style='margin: 10px auto; text-align: center; '>" + img_loading + " Calculando Totales, aguarde por favor</div>");

        // se actualiza el importe total de la comision
        setTimeout(function () {

            setRecalcularTotalComprobanteP1();
            setRecalcularTotalFormaPago();

            $('#html_loading_botonera').remove();
        }, 3000);
        
        accion_masiva = false;
    });
}

function setChkGenerarVtaComisionUno() {
    $("#listado_vta_comision_agregar_comision .chk_vta_comprobante").unbind();
    $("#listado_vta_comision_agregar_comision .chk_vta_comprobante").change(function () {
        
        var elem = $(this);
        var vta_comprobante_id = $(this).parents('.uno').attr('vta_comprobante_id');

        setRecalcularImporteComisionP1(elem);

        if(accion_masiva === false){
            // se actualiza el importe total de la comision
            setTimeout(function () {
                setRecalcularTotalComprobanteP1();
                setRecalcularTotalFormaPago();
            }, 500);
        }
        if ($(this).is(':checked')) {

            // se muestra la caja de texto de porcentaje
            $(this).parents('.uno').find('.porcentaje-comision').show();

            // se oculta el label de porcentaje
            $(this).parents('.uno').find('.porcentaje-comision-label').hide();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
        } else {
            // se oculta la caja de texto de porcentaje
            $(this).parents('.uno').find('.porcentaje-comision').hide();

            // se muestra el label de porcentaje
            $(this).parents('.uno').find('.porcentaje-comision-label').show();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
        }
    });
}

function setClickModalVtaComisionP1TxtPorcentajeComision() {
    $('.txt_porcentaje_comision').unbind();
    $('.txt_porcentaje_comision').keyup(function () {
        var elem = $(this);

        // se recalcula el importe de comision
        setTimeout(function () {
            setRecalcularImporteComisionP1(elem);

            // se actualiza el importe total de la comision
            setTimeout(function () {
                setRecalcularTotalComprobanteP1();
                setRecalcularTotalFormaPago();
            }, 500);

        }, 500);

    });
}
function setRecalcularImporteComisionP1(elem) {
    var chk_vta_comprobante = elem.parents('.uno').find('.chk_vta_comprobante').is(':checked');
    var base_comisionable = elem.parents('.uno').find('.hdn_importe_base_comisionable').val();
    var porcentaje_comision = elem.parents('.uno').find('.txt_porcentaje_comision').val();

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_recalcular_importe_comision_p1.php",
        data: 'chk_vta_comprobante=' + chk_vta_comprobante + '&base_comisionable=' + base_comisionable + '&porcentaje_comision=' + porcentaje_comision,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            elem.parents('.uno').find(".importe-comision").html(arr['COMPROBANTE_IMPORTE_COMISION_FORMATEADO']);
            elem.parents('.uno').find(".hdn_importe_comision").val(arr['COMPROBANTE_IMPORTE_COMISION']);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setRecalcularTotalComprobanteP1() {
    var form = $("#form_generar_vta_comision");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_recalcular_importe_comision_total_p1.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            $("#div_p1_comprobante_importe_base_total").html(arr['COMPROBANTE_TOTAL_BASE_FORMATEADO']);
            $("#div_p1_comprobante_importe_comision_total").html(arr['COMPROBANTE_TOTAL_COMISION_FORMATEADO']);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickFormaPagoAgregar() {
    $("#listado_vta_comision_forma_pago .boton.vta-comision-agregar-forma-pago").unbind();
    $("#listado_vta_comision_forma_pago .boton.vta-comision-agregar-forma-pago").click(function (e) {
        var prv_proveedor_id = $(this).parents("form").attr("prv_proveedor_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemFormaPago(prv_proveedor_id, key, $(this));
    });
}

function setBtnAgregarItemFormaPago(prv_proveedor_id, key, elem) {

    var form = $("#form_generar_vta_comision");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_bloque_vta_facturas_a_comisionar_forma_pago_uno.php",
        data: form.serialize() + '&dbsug_prv_proveedor_id=' + prv_proveedor_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('#listado_vta_comision_forma_pago').append(data);

            elem.show();

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickFormaPagoQuitar() {
    $("#listado_vta_comision_forma_pago .boton.quitar_forma_pago").unbind();
    $("#listado_vta_comision_forma_pago .boton.quitar_forma_pago").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();

            setRecalcularTotalFormaPago();
        }
    });
}

function setKeyupFormaPagoImporteUnitario() {
    $('#listado_vta_comision_forma_pago .txt_importe_unitario').unbind();
    $('#listado_vta_comision_forma_pago .txt_importe_unitario').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalFormaPago();
        }, 500);
    });
}
function setRecalcularTotalFormaPago() {
    var form = $("#form_generar_vta_comision");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_recalcular_total_forma_pago.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            $("#div_p1_forma_pago_total_pago").html(arr['FORMA_PAGO_TOTAL_FORMATEADO']);
            $("#div_p1_forma_pago_total_comprobantes").html(arr['FORMA_PAGO_TOTAL_COMPROBANTES_FORMATEADO']);
            $("#div_p1_forma_pago_total_saldo").html(arr['FORMA_PAGO_TOTAL_SALDO_FORMATEADO']);

            setInitVtaComisionGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setChangeCmbGralFpFormaPago() {
    $("#listado_vta_comision_forma_pago .tr-item .gral_fp_forma_pago_id").unbind();
    $("#listado_vta_comision_forma_pago .tr-item .gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_gral_fp_forma_pago.php",
            data: "key=" + key + "&cmb_gral_fp_forma_pago_id=" + cmb_gral_fp_forma_pago_id,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');
                $("#cmb_gral_fp_forma_pago_id_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#cmb_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');

                    if (arr["btn_cheque"]) {
                        $("#btn_ver_modal_set_cheque_info_" + key).show();

                        $('#txt_importe_unitario_' + key).val('');//revisar, usar el key para acceder directamente y no el class
                        $('#txt_descripcion_' + key).val('');
                        
                        if (arr["importe_cheque_formateado"])
                        {
                            $('#txt_importe_unitario_' + key).val(arr['importe_cheque_formateado']);
                            $('#txt_descripcion_' + key).val(arr['descripcion_cheque']);
                        }

                        $('#txt_importe_unitario_' + key).attr('readonly', 'readonly');
                        $('#txt_descripcion_' + key).attr('readonly', 'readonly');
                    } else {
                        $("#btn_ver_modal_set_cheque_info_" + key).hide();

                        $('#txt_importe_unitario_' + key).removeAttr('readonly');
                        $('#txt_descripcion_' + key).removeAttr('readonly');
                    }
                }

                setInitVtaComisionGestion();
                setInit();

                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}


function setClickVtaComisionGestionSetCheque()
{
    $("#listado_vta_comision_forma_pago .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_vta_comision_forma_pago .tr-item .boton.ver_modal_set_cheque_info").click(function (e) {
        var key                         = $(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;
        
        var modulo                      = 'vta_comision';
        var var_sesion_random           = $('.datos.vta-comision-agregar').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}

function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
    $.ajax(
    {
        type: "GET",
        //url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_set_cheque_info.php",
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
                width: '90%',
                height: 600,
                modal: true,
                title: 'Datos del Cheque',
                close: function () {
                    setRecalcularTotalFormaPago();
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            setTimeout(function ()
            {
                $(".div_modal_cheque_buscador").html(data);

                getFileCssFndChqChequeBuscador(); // se levanta CSS
                getFileJsFndChqChequeBuscador(); // se levanta JS

            setInitVtaComisionGestion();
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


function getFileCssFndChqChequeBuscador()
{
    $.ajax(
    {
        url: "../css/admin/modulos/fnd_chq_cheque_buscador.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_fnd_chq_cheque_buscador").before(css);
        }
    });
}


function getFileJsFndChqChequeBuscador()
{
    $.ajax(
    {
        url: "../js/admin/modulos/fnd_chq_cheque_buscador.js",
        success: function (data)
        {
            var js = "<script>" + data + "</script>";
            $("#form_fnd_chq_cheque_buscador").before(js);
        }
    });
}

function setClickBtnRegistrarComision() {
    $("#form_generar_vta_comision #btn_generar_comision").unbind();
    $("#form_generar_vta_comision #btn_generar_comision").click(function (e) {
        if (confirm("Desea Registrar Comision?")) {
            setVtaComisionRegistrarComisionConfirmar();
        }
    });
}
function setVtaComisionRegistrarComisionConfirmar() {
    var cmb_vta_preventista_id    = $("#cmb_vta_preventista_id").val();
    var cmb_vta_comprador_id      = $("#cmb_vta_comprador_id").val();
    var cmb_vta_vendedor_id       = $("#cmb_vta_vendedor_id").val();
    var form_generar_vta_comision = $("#form_generar_vta_comision");
    var var_sesion_random         = $(".datos.vta-comision-agregar").attr('var_sesion_random');
    var modulo                    = 'vta_comision';
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_agregar.php",
        data: form_generar_vta_comision.serialize() 
        + '&modulo=' + modulo
        + '&cmb_vta_preventista_id=' + cmb_vta_preventista_id 
        + '&cmb_vta_comprador_id=' + cmb_vta_comprador_id 
        + '&cmb_vta_vendedor_id=' + cmb_vta_vendedor_id
        + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function () {
            $(".div_modal .botonera").hide();
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (jqXHR, estado, error) {
        }
    });
}


/*
 Ver Ficha de la comision
 */
function setClickVtaComisionGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_comision_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_comision_gestion_ver_ficha').click(function (e) {
        var vta_comision_id = $(this).parents('.uno').attr('identificador');
        verModalVtaComisionGestionVerFicha(vta_comision_id);
    });
}

function verModalVtaComisionGestionVerFicha(vta_comision_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_ficha.php",
        data: 'vta_comision_id=' + vta_comision_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Comision',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Seccion mail de ficha */
function setClickVtaComisionGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-comision-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-comision-ver-cuerpo-correo").click(function (e) {
        var vta_comision_enviado_id = $(this).attr("vta_comision_enviado_id");
        setVtaComisionGestionVerCuerpoMail(vta_comision_enviado_id);
    });
}

function setVtaComisionGestionVerCuerpoMail(vta_comision_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_ver_cuerpo_email.php",
        data: 'vta_comision_enviado_id=' + vta_comision_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'Comision',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_modal").html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaComisionGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-comision-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-comision-comprobante").click(function (e) {
        var vta_comision_enviado_id = $(this).attr("vta_comision_enviado_id");
        setVtaComisionGestionVerAdjuntoMail(vta_comision_enviado_id);
    });
}

function setVtaComisionGestionVerAdjuntoMail(vta_comision_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_ver_adjunto_email.php",
        data: 'vta_comision_enviado_id=' + vta_comision_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'Comision Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_modal").html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaComisionGestionEnviarPorCorreo() {
    $("#listado_adm_vta_comision_gestion .adm_botones_accion.vta_comision_enviar_por_correo").unbind();
    $("#listado_adm_vta_comision_gestion .adm_botones_accion.vta_comision_enviar_por_correo").click(function (e) {
        var vta_comision_id = $(this).parents(".uno").attr("identificador");
        verModalVtaComisionGestionBotonEnviarComisionPorMail(vta_comision_id);
    });
}

function verModalVtaComisionGestionBotonEnviarComisionPorMail(vta_comision_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_enviar_comision.php",
        data: 'vta_comision_id=' + vta_comision_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 400,
                modal: true,
                title: 'Enviar Comision',
                close: function () {
                    refreshAdmUno('vta_comision_gestion', vta_comision_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaComisionGestionEnviarPorCorreoConfirmar() {
    $(".div_modal .datos.enviar-comision #btn_enviar").unbind();
    $(".div_modal .datos.enviar-comision #btn_enviar").click(function (e) {
        var vta_comision_id = $(this).parents(".datos").attr("vta_comision_id");
        setVtaComisionGestionEnviarPorCorreoConfirmar(vta_comision_id);
    });
}

function setVtaComisionGestionEnviarPorCorreoConfirmar(vta_comision_id) {
    var form = $("#form_enviar_comision");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_enviar_comision.php",
        data: form.serialize() + '&vta_comision_id=' + vta_comision_id,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            $(".div_modal .botonera").hide();
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            //$('.div_modal').html(img_loading);
            var arr = data;
            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaComisionGestion();
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
 Autorizar Comision
 */
function setClickVtaComisionGestionAutorizar() {
    $('.db_context .db_context_content .uno.autorizar-comision').unbind();
    $('.db_context .db_context_content .uno.autorizar-comision').click(function (e) {
        var vta_comision_id = $(this).parents('.datos').attr('vta_comision_id');
        verModalVtaComisionGestionAutorizar(vta_comision_id);
    });
}
function verModalVtaComisionGestionAutorizar(vta_comision_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_autorizar.php",
        data: 'vta_comision_id=' + vta_comision_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Autorizar Comision',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('vta_comision_gestion', vta_comision_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaComisionGestion();
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
 Autorizar Comision Confirmacion
 */
function setClickVtaComisionGestionAutorizarConfirmar() {
    $(".div_modal .datos.autorizar-comision .botonera #btn_registrar").unbind();
    $(".div_modal .datos.autorizar-comision .botonera #btn_registrar").click(function (e) {
        var vta_comision_id = $(this).parents(".datos").attr("vta_comision_id");
        setVtaComisionGestionAutorizarConfirmar(vta_comision_id);
    });
}

function setVtaComisionGestionAutorizarConfirmar(vta_comision_id) {
    var form = $("#form_datos_autorizar_comision");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_autorizar.php",
        data: form.serialize() + '&vta_comision_id=' + vta_comision_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .label-error").html("");
            $(".div_modal .input-error").removeClass('input-error');
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/*
 Anular Comision
 */
function setClickVtaComisionGestionAnular() {
    $('.db_context .db_context_content .uno.anular-comision').unbind();
    $('.db_context .db_context_content .uno.anular-comision').click(function (e) {
        var vta_comision_id = $(this).parents('.datos').attr('vta_comision_id');
        verModalVtaComisionGestionAnular(vta_comision_id);
    });
}
function verModalVtaComisionGestionAnular(vta_comision_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_anular.php",
        data: 'vta_comision_id=' + vta_comision_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Anular Comision',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('vta_comision_gestion', vta_comision_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaComisionGestion();
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
 Anular Comision Confirmacion
 */
function setClickVtaComisionGestionAnularConfirmar() {
    $(".div_modal .datos.anular-comision .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-comision .botonera #btn_registrar").click(function (e) {
        var vta_comision_id = $(this).parents(".datos").attr("vta_comision_id");
        setVtaComisionGestionAnularConfirmar(vta_comision_id);
    });
}

function setVtaComisionGestionAnularConfirmar(vta_comision_id) {
    var form = $("#form_datos_anular_comision");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_anular.php",
        data: form.serialize() + '&vta_comision_id=' + vta_comision_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .label-error").html("");
            $(".div_modal .input-error").removeClass('input-error');
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Pago Recibido Comision
 */
function setClickVtaComisionGestionPagar() {
    $('.db_context .db_context_content .uno.pagar-comision').unbind();
    $('.db_context .db_context_content .uno.pagar-comision').click(function (e) {
        var vta_comision_id = $(this).parents('.datos').attr('vta_comision_id');
        verModalVtaComisionGestionPagar(vta_comision_id);
    });
}
function verModalVtaComisionGestionPagar(vta_comision_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comision_gestion/modal_vta_comision_gestion_pagar.php",
        data: 'vta_comision_id=' + vta_comision_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Registrar Pago Recibido de Comision',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('vta_comision_gestion', vta_comision_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaComisionGestion();
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
 Pago Recibido Comision Confirmacion
 */
function setClickVtaComisionGestionPagarConfirmar() {
    $(".div_modal .datos.pago-recibido-comision .botonera #btn_registrar").unbind();
    $(".div_modal .datos.pago-recibido-comision .botonera #btn_registrar").click(function (e) {
        var vta_comision_id = $(this).parents(".datos").attr("vta_comision_id");
        setVtaComisionGestionPagarConfirmar(vta_comision_id);
    });
}

function setVtaComisionGestionPagarConfirmar(vta_comision_id) {
    var form = $("#form_datos_pago_recibido_comision");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_vta_comision_gestion_pagar.php",
        data: form.serialize() + '&vta_comision_id=' + vta_comision_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .label-error").html("");
            $(".div_modal .input-error").removeClass('input-error');
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setClickBtnModificarPorcentaje(){
    $(".btn-modificar-porcentaje").unbind();
    $(".btn-modificar-porcentaje").click(function (e) {
        verModalModificarPorcentaje();
    });    
}
function verModalModificarPorcentaje(){
    var form = $("#form_generar_vta_comision");

    var cmb_vta_preventista_id = $("#cmb_vta_preventista_id").val();
    var cmb_vta_comprador_id = $("#cmb_vta_comprador_id").val();
    var cmb_vta_vendedor_id = $("#cmb_vta_vendedor_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_comision_gestion/modal_modificar_porcentaje.php",
        data: form.serialize() + 
                '&cmb_vta_preventista_id=' + cmb_vta_preventista_id +
                '&cmb_vta_comprador_id=' + cmb_vta_comprador_id +
                '&cmb_vta_vendedor_id=' + cmb_vta_vendedor_id
        ,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '85%',
                height: 550,
                modal: true,
                title: 'Modificar Porcentaje de Comision',
                close: function () {
                }
            });
        },
        success: function (data) {

            $('.div_modal_modal').html(data);

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnModificarPorcentajeConfirmacion(){
    $("#btn_registrar_porcentaje").unbind();
    $("#btn_registrar_porcentaje").click(function (e) {
        setBtnModificarPorcentajeConfirmacion();
    });      
}
function setBtnModificarPorcentajeConfirmacion(){
    var form = $("#form_generar_vta_comision");
    var form2 = $("#form_datos_modificar_porcentaje_comision");

    var cmb_vta_preventista_id = $("#cmb_vta_preventista_id").val();
    var cmb_vta_comprador_id = $("#cmb_vta_comprador_id").val();
    var cmb_vta_vendedor_id = $("#cmb_vta_vendedor_id").val();

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comision_gestion/set_modificar_porcentaje.php",
        data: form.serialize() + '&' + form2.serialize() +
                '&cmb_vta_preventista_id=' + cmb_vta_preventista_id +
                '&cmb_vta_comprador_id=' + cmb_vta_comprador_id +
                '&cmb_vta_vendedor_id=' + cmb_vta_vendedor_id
        ,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal_modal .label-error").html("");
            $(".div_modal_modal .input-error").removeClass('input-error');
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal_modal .botonera-loading").remove();
                $(".div_modal_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal_modal").dialog("close");
                $('#cmb_ver_todos').trigger('change');
            }

            setInitVtaComisionGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}
