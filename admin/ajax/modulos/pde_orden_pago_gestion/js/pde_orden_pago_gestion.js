// archivo js del modulo 'pde_orden_pago'
$(function ($) {
    setInitPdeOrdenPagoGestion();
});

function setInitPdeOrdenPagoGestion() {

    setClickGenerarOrdenPago();
    setClickGenerarOrdenPagoItem();

    setClickWsFeAfip();
    setClickBtnGenerarWsFeAfip();
    //setClickPdeComprobanteBtnGenerarOrdenPago();

    // Buscadores modal generar orden_pago
    setChangeCmbFiltroPrvProveedor();

    // seleccion de las ordenes de venta del modal generar orden_pago
    setCheckGenerarVtaOrdenPagoAll();
    setCkeckGenerarVtaOrdenPagoUno();

    // Seccion acciones
    setClickPdeOrdenPagoGestionVerFicha();
    setClickPdeOrdenPagoGestionEnviarPorCorreo();
    setClickPdeOrdenPagoGestionEnviarPorCorreoConfirmar();
    setClickPdeOrdenPagoGestionAutorizar();
    setClickPdeOrdenPagoGestionAutorizarConfirmar();
    setClickPdeOrdenPagoGestionPreparar();
    setClickPdeOrdenPagoGestionPrepararConfirmar();
    setClickPdeOrdenPagoGestionPagoPreventista();
    setClickPdeOrdenPagoGestionPagoPreventistaConfirmar();
    setClickPdeOrdenPagoGestionPagoTransferido();
    setClickPdeOrdenPagoGestionPagoTransferidoConfirmar();
    setClickPdeOrdenPagoGestionRechazar();
    setClickPdeOrdenPagoGestionRechazarConfirmar();
    setClickPdeOrdenPagoGestionAnular();
    setClickPdeOrdenPagoGestionAnularConfirmar();
    setClickPdeOrdenPagoGestionPagoEnviado();
    setClickPdeOrdenPagoGestionPagoEnviadoConfirmar();
    setClickPdeOrdenPagoGestionPagoRecibido();
    setClickPdeOrdenPagoGestionPagoRecibidoConfirmar();
    
    setClickPdeOrdenPagoGestionEditarNotaPublica();
    setClickPdeOrdenPagoGestionEditarNotaPublicaConfirmar();

    setClickPdeOrdenPagoGestionVerAdjuntoMail();
    setClickPdeOrdenPagoGestionVerCuerpoMail();

    // Seccion filtros Top
    setChangeCmbFiltroPdeOrdenPagoCodigo();
    setChangeCmbFiltroPdeOrdenPagoNumeroOrdenPago();
    setChangeCmbFiltroPdeOrdenPagoCae();
    setChangeCmbFiltroPdeOrdenPagoPrvProveedor();
    setChangeCmbFiltroPdeOrdenPagoPdeTipoOrdenPago();
    setChangeCmbFiltroPdeOrdenPagoPdeTipoEstadoOrdenPago();

    // Modal Gestion Item OrdenPago
    setClickBtnAgregarItemOrdenPago();
    setClickBtnQuitarItemOrdenPago();
    setKeyupModalCalculoItemImporteUnitario();

    // Cheque
    setChangeCmbGralFpFormaPago();
    setClickPdeOrdenPagoGestionSetCheque();

    // recalculo del total en p1
    setClickModalPdeOrdenPagoP1TxtImporteSaldo();
    setClickModalPdeOrdenPagoP1TxtImporteUnitario();
    setClickModalPdeOrdenPagoP1TxtComprobanteTributo();

    // Modal
    setChangeCmbGralEmpresa();

}

function setChangeCmbFiltroPdeOrdenPagoCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_orden_pago_gestion");
    });
}

function setChangeCmbFiltroPdeOrdenPagoCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_orden_pago_gestion");
    });
}
function setChangeCmbFiltroPdeOrdenPagoNumeroOrdenPago() {
    $("#txt_buscador_numero_orden_pago").unbind();
    $("#txt_buscador_numero_orden_pago").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_orden_pago_gestion");
    });
}
function setChangeCmbFiltroPdeOrdenPagoPrvProveedor() {
    $("#cmb_filtro_prv_proveedor_id").unbind();
    $("#cmb_filtro_prv_proveedor_id").change(function () {
        setAdmBuscadorTop("pde_orden_pago_gestion");
    });
}
function setChangeCmbFiltroPdeOrdenPagoPdeTipoOrdenPago() {
    $("#cmb_filtro_pde_tipo_orden_pago_id").unbind();
    $("#cmb_filtro_pde_tipo_orden_pago_id").change(function () {
        setAdmBuscadorTop("pde_orden_pago_gestion");
    });
}
function setChangeCmbFiltroPdeOrdenPagoPdeTipoEstadoOrdenPago() {
    $("#cmb_filtro_pde_orden_pago_tipo_estado_id").unbind();
    $("#cmb_filtro_pde_orden_pago_tipo_estado_id").change(function () {
        setAdmBuscadorTop("pde_orden_pago_gestion");
    });
}


// ----------------------------------------------------------------
// Modal Generar una Nueva OrdenPago
// ----------------------------------------------------------------
function setClickGenerarOrdenPago() {
    $('.div_listado_buscador .col .boton.generar_orden_pago').unbind();
    $('.div_listado_buscador .col .boton.generar_orden_pago').click(function (e) {

        var tipo = 'orden-venta';
        verModalGenerarOrdenPago(tipo);
    });
}

// ----------------------------------------------------------------
// Modal Generar una Nueva OrdenPago de Item
// ----------------------------------------------------------------
function setClickGenerarOrdenPagoItem() {
    $('.div_listado_buscador .col .boton.generar_orden_pago_item').unbind();
    $('.div_listado_buscador .col .boton.generar_orden_pago_item').click(function (e) {

        var tipo = 'item';
        verModalGenerarOrdenPago(tipo);
    });
}

function verModalGenerarOrdenPago(tipo) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_generar_orden_pago.php",
        data: 'tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Generar OrdenPago de Compra',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeOrdenPagoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

// ----------------------------------------------------------------
// Modal Generar una Nueva OrdenPago (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {

    $(".div_datos_generar_orden_pagos .botonera #btn_set_ws_fe_afip").unbind();
    $(".div_datos_generar_orden_pagos .botonera #btn_set_ws_fe_afip").click(function () {
        var tipo = $(".datos.generar-orden_pago").attr('tipo');
        setControlModalWsFeAfip(tipo);
    });
}

function setControlModalWsFeAfip(tipo) {

    var form              = $("#form_generar_orden_pago");
    var prv_proveedor_id  = $("#dbsug_prv_proveedor_id").val();
    var modulo            = 'pde_orden_pago';
    var var_sesion_random = $(".datos.generar-orden_pago").attr('var_sesion_random');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_orden_pago_gestion/control_pde_orden_pago_gestion_ws_fe_afip.php",
        data: form.serialize() + '&tipo=' + tipo + '&prv_proveedor_id=' + prv_proveedor_id + '&modulo=' + modulo + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $("#error_general").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
                $("#error_general").html(arr['error_general']);
            } else {
                verModalClickWsFeAfip(tipo);
            }

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalClickWsFeAfip(tipo) {

    var form = $("#form_generar_orden_pago");
    var prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_ws_fe_afip.php",
        data: form.serialize() + '&tipo=' + tipo + '&prv_proveedor_id=' + prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '95%',
                height: 900,
                modal: true,
                title: 'Generar OrdenPago de Compra',
//                close: function () {
//                    setClickAdmRefreshAll();
//                },
                hide: 'fade',
            });
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
                $("#error_general").html(arr['error_general']);
            } else {
                $('.div_modal_modal').html(data);
            }

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
// ----------------------------------------------------------------
// Modal Generar una Nueava OrdenPago (Boton + del buscador top)
// Boton siguiente
// Boton Generar OrdenPago Online
// ----------------------------------------------------------------
function setClickBtnGenerarWsFeAfip() {
    $(".datos.generar-ws-fe-afip .botonera #btn_generar_orden_pago_online").unbind();
    $(".datos.generar-ws-fe-afip .botonera #btn_generar_orden_pago_online").click(function () {
        setPdeComprobanteBtnGenerarOrdenPago();
    });
}

function setPdeComprobanteBtnGenerarOrdenPago() {

    var prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();
    var var_sesion_random = $(".datos.generar-orden_pago").attr('var_sesion_random');

    var form = $("#form_generar_orden_pago");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_generar_orden_pago.php",
        data: form.serialize() + '&' + form2.serialize() + '&prv_proveedor_id=' + prv_proveedor_id + '&var_sesion_random=' + var_sesion_random,
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
                $("#error_general").html(arr['error_general']);
            } else {
                $(".div_modal_modal").dialog("close");
                $(".div_modal").dialog("close");

                refreshAdmAll('pde_orden_pago_gestion', 1);
            }

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbFiltroPrvProveedor() {
    $("#dbsug_prv_proveedor_id").unbind();
    $("#dbsug_prv_proveedor_id").change(function () {
        var dbsug_prv_proveedor_id = $(this).val();

        var tipo = $('.datos.generar-orden_pago').attr('tipo');

        if (dbsug_prv_proveedor_id != '') {
            if (tipo == 'orden-venta') {
                refreshListOc(dbsug_prv_proveedor_id);
            } else if (tipo == 'item') {
                refreshBloquePdeOrdenPagoItem(dbsug_prv_proveedor_id);
            }
        }
    });
}

function refreshListOc(dbsug_prv_proveedor_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_orden_pago_gestion/bloque_pde_comprobante_listado_datos_x_prv_proveedor.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_orden_pagos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_codigo_presupuesto').val('');
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_orden_pagos').html(data);

            setInitPdeOrdenPagoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloquePdeOrdenPagoItem(dbsug_prv_proveedor_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_orden_pago_gestion/bloque_pde_orden_pago_items_datos_x_prv_proveedor.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_nota_creditos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_orden_pagos').html(data);

            setInitPdeOrdenPagoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckGenerarVtaOrdenPagoAll() {
    $('#listado_pde_orden_pago_generar_orden_pago #chk_pde_comprobante_select_all').unbind();
    $('#listado_pde_orden_pago_generar_orden_pago #chk_pde_comprobante_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_pde_orden_pago_generar_orden_pago .chk_pde_comprobante").attr('checked', true);
        } else {
            $("#listado_pde_orden_pago_generar_orden_pago .chk_pde_comprobante").attr('checked', false);
        }
        $("#listado_pde_orden_pago_generar_orden_pago").find(".chk_pde_comprobante").trigger('change');
    });
}

function setCkeckGenerarVtaOrdenPagoUno() {
    $("#listado_pde_orden_pago_generar_orden_pago .chk_pde_comprobante").unbind();
    $("#listado_pde_orden_pago_generar_orden_pago .chk_pde_comprobante").change(function () {
        var pde_comprobante_id = $(this).parents('.uno').attr('pde_comprobante_id');
        var pde_presupuesto_id = $(this).attr('pde_presupuesto_id');
        var multiseleccion = $(this).parents('table').attr('multiseleccion');
        if ($(this).is(':checked')) {

            // se muestra la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_pde_comprobante_importe_saldo').show();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
            // se inhabilitan checkbox de otras cotizaciones
            if (multiseleccion == 0) {
                $(".check_pde_comprobante").hide();
                $(".chk_pde_presupuesto_" + pde_presupuesto_id).show();
            }
        } else {
            // se oculta la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_pde_comprobante_importe_saldo').hide();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
            // se vuelven a habilitar los checks si no hay check seleccionado
            if (multiseleccion == 0) {
                var chk_checheado = $(".check_pde_comprobante input[type=checkbox]:checked").length;
                if (chk_checheado == 0) {
                    $(".check_pde_comprobante").show();
                }
            }
        }

        setRecalcularTotalComprobanteP1();
        
        setTimeout(function(){
            setRecalcularTotalComprobanteP1FormaPago();        
        }, 1000);
    });
}

/*
 Ver Ficha de la orden_pago
 */
function setClickPdeOrdenPagoGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.pde_orden_pago_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.pde_orden_pago_gestion_ver_ficha').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.adm_botones_acciones').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionVerFicha(pde_orden_pago_id);
    });
}

function verModalPdeOrdenPagoGestionVerFicha(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_ficha.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la OrdenPago',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeOrdenPagoGestion();
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

function setClickPdeOrdenPagoGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-orden_pago-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-orden_pago-ver-cuerpo-correo").click(function (e) {
        var pde_orden_pago_enviado_id = $(this).attr("pde_orden_pago_enviado_id");
        setPdeOrdenPagoGestionVerCuerpoMail(pde_orden_pago_enviado_id);
    });
}

function setPdeOrdenPagoGestionVerCuerpoMail(pde_orden_pago_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_ver_cuerpo_email.php",
        data: 'pde_orden_pago_enviado_id=' + pde_orden_pago_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'OrdenPago',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeOrdenPagoGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-orden_pago-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-orden_pago-comprobante").click(function (e) {
        var pde_orden_pago_enviado_id = $(this).attr("pde_orden_pago_enviado_id");
        setPdeOrdenPagoGestionVerAdjuntoMail(pde_orden_pago_enviado_id);
    });
}

function setPdeOrdenPagoGestionVerAdjuntoMail(pde_orden_pago_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_ver_adjunto_email.php",
        data: 'pde_orden_pago_enviado_id=' + pde_orden_pago_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'OrdenPago Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeOrdenPagoGestionEnviarPorCorreo() {
    $("#listado_adm_pde_orden_pago_gestion .adm_botones_accion.pde-orden_pago-enviar-por-correo").unbind();
    $("#listado_adm_pde_orden_pago_gestion .adm_botones_accion.pde-orden_pago-enviar-por-correo").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".uno").attr("identificador");
        verModalPdeOrdenPagoGestionBotonEnviarOrdenPagoPorMail(pde_orden_pago_id);
    });
}

function verModalPdeOrdenPagoGestionBotonEnviarOrdenPagoPorMail(pde_orden_pago_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_enviar_orden_pago.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 330,
                modal: true,
                title: 'Enviar OrdenPago',
                close: function () {
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeOrdenPagoGestionEnviarPorCorreoConfirmar() {
    $(".div_modal .datos.enviar-orden_pago #btn_enviar").unbind();
    $(".div_modal .datos.enviar-orden_pago #btn_enviar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionEnviarPorCorreoConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionEnviarPorCorreoConfirmar(pde_orden_pago_id) {
    var form = $("#form_enviar_orden_pago");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_enviar_orden_pago.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
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
 Autorizar Orden de Pago
 */
function setClickPdeOrdenPagoGestionAutorizar() {
    $('.db_context .db_context_content .uno.autorizar-orden-pago').unbind();
    $('.db_context .db_context_content .uno.autorizar-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionAutorizar(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionAutorizar(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_autorizar.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Autorizar Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Autorizar Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionAutorizarConfirmar() {
    $(".div_modal .datos.autorizar-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.autorizar-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionAutorizarConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionAutorizarConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_autorizar_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_autorizar.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Preparar Orden de Pago
 */
function setClickPdeOrdenPagoGestionPreparar() {
    $('.db_context .db_context_content .uno.preparar-orden-pago').unbind();
    $('.db_context .db_context_content .uno.preparar-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionPreparar(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionPreparar(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_preparar.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Preparar Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Preparar Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionPrepararConfirmar() {
    $(".div_modal .datos.preparar-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.preparar-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionPrepararConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionPrepararConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_preparar_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_preparar.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Pago a Preventista Orden de Pago
 */
function setClickPdeOrdenPagoGestionPagoPreventista() {
    $('.db_context .db_context_content .uno.pago-preventista-orden-pago').unbind();
    $('.db_context .db_context_content .uno.pago-preventista-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionPagoPreventista(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionPagoPreventista(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_pago_preventista.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Pago Preventista Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 PagoPreventista Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionPagoPreventistaConfirmar() {
    $(".div_modal .datos.pago-preventista-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.pago-preventista-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionPagoPreventistaConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionPagoPreventistaConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_pago_preventista_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_pago_preventista.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Pago Transferido Orden de Pago
 */
function setClickPdeOrdenPagoGestionPagoTransferido() {
    $('.db_context .db_context_content .uno.transferir-orden-pago').unbind();
    $('.db_context .db_context_content .uno.transferir-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionPagoTransferido(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionPagoTransferido(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_pago_transferido.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Transferir Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Pago Transferido Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionPagoTransferidoConfirmar() {
    $(".div_modal .datos.transferir-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.transferir-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionPagoTransferidoConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionPagoTransferidoConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_transferir_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_pago_transferido.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Rechazar Orden de Pago
 */
function setClickPdeOrdenPagoGestionRechazar() {
    $('.db_context .db_context_content .uno.rechazar-orden-pago').unbind();
    $('.db_context .db_context_content .uno.rechazar-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionRechazar(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionRechazar(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_rechazar.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Rechazar Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Rechazar Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionRechazarConfirmar() {
    $(".div_modal .datos.rechazar-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.rechazar-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionRechazarConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionRechazarConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_rechazar_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_rechazar.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Anular Orden de Pago
 */
function setClickPdeOrdenPagoGestionAnular() {
    $('.db_context .db_context_content .uno.anular-orden-pago').unbind();
    $('.db_context .db_context_content .uno.anular-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionAnular(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionAnular(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_anular.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Anular Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Anular Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionAnularConfirmar() {
    $(".div_modal .datos.anular-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionAnularConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionAnularConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_anular_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_anular.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Pago Enviado Orden de Pago
 */
function setClickPdeOrdenPagoGestionPagoEnviado() {
    $('.db_context .db_context_content .uno.pago-enviado-orden-pago').unbind();
    $('.db_context .db_context_content .uno.pago-enviado-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionPagoEnviado(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionPagoEnviado(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_pago_enviado.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Registrar Pago Enviado de Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Pago Enviado Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionPagoEnviadoConfirmar() {
    $(".div_modal .datos.pago-enviado-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.pago-enviado-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionPagoEnviadoConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionPagoEnviadoConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_pago_enviado_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_pago_enviado.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Pago Recibido Orden de Pago
 */
function setClickPdeOrdenPagoGestionPagoRecibido() {
    $('.db_context .db_context_content .uno.pago-recibido-orden-pago').unbind();
    $('.db_context .db_context_content .uno.pago-recibido-orden-pago').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionPagoRecibido(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionPagoRecibido(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_pago_recibido.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 850,
                height: 550,
                modal: true,
                title: 'Registrar Pago Recibido de Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Pago Recibido Orden de Pago Confirmacion
 */
function setClickPdeOrdenPagoGestionPagoRecibidoConfirmar() {
    $(".div_modal .datos.pago-recibido-orden-pago .botonera #btn_registrar").unbind();
    $(".div_modal .datos.pago-recibido-orden-pago .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionPagoRecibidoConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionPagoRecibidoConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_pago_recibido_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_pago_recibido.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/*
 Editar Nota Publica
 */
function setClickPdeOrdenPagoGestionEditarNotaPublica() {
    $('.db_context .db_context_content .uno.editar-nota-publica').unbind();
    $('.db_context .db_context_content .uno.editar-nota-publica').click(function (e) {
        var pde_orden_pago_id = $(this).parents('.datos').attr('pde_orden_pago_id');
        verModalPdeOrdenPagoGestionEditarNotaPublica(pde_orden_pago_id);
    });
}
function verModalPdeOrdenPagoGestionEditarNotaPublica(pde_orden_pago_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_orden_pago_gestion/modal_pde_orden_pago_gestion_editar_nota_publica.php",
        data: 'pde_orden_pago_id=' + pde_orden_pago_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Editar Nota Publica',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_orden_pago_gestion', pde_orden_pago_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeOrdenPagoGestion();
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
 Editar Nota Publica Confirmacion
 */
function setClickPdeOrdenPagoGestionEditarNotaPublicaConfirmar() {
    $(".div_modal .datos.editar-nota-publica .botonera #btn_registrar").unbind();
    $(".div_modal .datos.editar-nota-publica .botonera #btn_registrar").click(function (e) {
        var pde_orden_pago_id = $(this).parents(".datos").attr("pde_orden_pago_id");
        setPdeOrdenPagoGestionEditarNotaPublicaConfirmar(pde_orden_pago_id);
    });
}

function setPdeOrdenPagoGestionEditarNotaPublicaConfirmar(pde_orden_pago_id) {
    var form = $("#form_datos_editar_nota_publica");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_editar_nota_publica.php",
        data: form.serialize() + '&pde_orden_pago_id=' + pde_orden_pago_id,
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

            setInitPdeOrdenPagoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function setClickBtnAgregarItemOrdenPago() {
    $(".div_modal .datos.generar-orden_pago .div_datos_generar_orden_pagos #form_generar_orden_pago .boton.agregar_item_orden_pago").unbind();
    $(".div_modal .datos.generar-orden_pago .div_datos_generar_orden_pagos #form_generar_orden_pago .boton.agregar_item_orden_pago").click(function (e) {
        var prv_proveedor_id = $(this).parents("form").attr("prv_proveedor_id");
        var key = 0;
        $("#listado_pde_orden_pago_items .tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemOrdenPago(prv_proveedor_id, key, $(this));
    });
}

function setBtnAgregarItemOrdenPago(prv_proveedor_id, key, elem) {

    var form = $("#form_generar_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_bloque_pde_orden_pago_items_datos_x_prv_proveedor_uno.php",
        data: form.serialize() + '&dbsug_prv_proveedor_id=' + prv_proveedor_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_pde_orden_pago_items').append(data);

            elem.show();

            setTimeout(function () {
                setRecalcularTotalComprobanteP1FormaPago();
            }, 1000);

            setInitPdeOrdenPagoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarItemOrdenPago() {
    $(".div_modal .datos.generar-orden_pago .div_datos_generar_orden_pagos #form_generar_orden_pago .boton.quitar_item_orden_pago").unbind();
    $(".div_modal .datos.generar-orden_pago .div_datos_generar_orden_pagos #form_generar_orden_pago .boton.quitar_item_orden_pago").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
            
            setTimeout(function () {
                setRecalcularTotalComprobanteP1FormaPago();
            }, 1000);
        }
    });
}

function setKeyupModalCalculoItemImporteUnitario() {
    $("#listado_pde_orden_pago_items .tr-item .txt_importe_unitario").unbind();
    $("#listado_pde_orden_pago_items .tr-item .txt_importe_unitario").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var prv_proveedor_id = $("#form_generar_orden_pago").attr("prv_proveedor_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_calculo_item_importe_unitario.php",
            data: "key=" + key + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_unitario=" + importe_unitario + '&prv_proveedor_id=' + prv_proveedor_id,
            dataType: "json",
            beforeSend: function () {
                $("#txt_importe_unitario_" + key).removeClass('input-error');
                $("#txt_importe_unitario_" + key + "_error").html("");
                $("#txt_importe_total_" + key).removeClass('input-error');
                $("#txt_importe_total_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;
                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#txt_importe_iva_" + key).val(arr["importe_iva"]);
                    $("#txt_importe_total_" + key).val(arr["importe_total"]);
                }

                setInitPdeOrdenPagoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {
            }
        });
    });
}

function setChangeCmbGralFpFormaPago() {
    $("#listado_pde_orden_pago_items .tr-item .gral_fp_forma_pago_id").unbind();
    $("#listado_pde_orden_pago_items .tr-item .gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_gral_fp_forma_pago.php",
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
                        $('#txt_referencia_' + key).val('');

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

                setInitPdeOrdenPagoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setClickPdeOrdenPagoGestionSetCheque()
{
    $("#listado_pde_orden_pago_items .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_pde_orden_pago_items .tr-item .boton.ver_modal_set_cheque_info").click(function (e) {
        var key = $(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;
        
        var modulo                      = 'pde_orden_pago';
        var var_sesion_random           = $('.datos.generar-orden_pago').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}


function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
    $.ajax({
        type: "GET",
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
                    setTimeout(function () {
                        setRecalcularTotalComprobanteP1FormaPago();
                    }, 1000);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            setTimeout(function ()
            {
                $(".div_modal_cheque_buscador").html(data);

                getFileCssFndChqChequeBuscador(); // se levanta CSS
                getFileJsFndChqChequeBuscador(); // se levanta JS

            setInitPdeOrdenPagoGestion();
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

function setClickModalPdeOrdenPagoP1TxtImporteSaldo() {
    $('.txt_pde_comprobante_importe_saldo').unbind();
    $('.txt_pde_comprobante_importe_saldo').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobanteP1();
        }, 1000);
        setTimeout(function () {
            setRecalcularTotalComprobanteP1FormaPago();
        }, 2000);
    });
}
function setRecalcularTotalComprobanteP1() {
    var prv_proveedor_id  = $("#dbsug_prv_proveedor_id").val();
    var form = $("#form_generar_orden_pago");
    
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_recalcular_total_p1.php",
        data: form.serialize() + "&prv_proveedor_id=" + prv_proveedor_id,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            
            $("#div_p1_comprobante_total_saldo").html(arr['COMPROBANTE_TOTAL_SALDO_FORMATEADO']);
            $("#txt_p1_comprobante_total_saldo").val(arr['COMPROBANTE_TOTAL_SALDO']);
            $("#div_p1_comprobante_total_importe_imponible").html(arr['COMPROBANTE_TOTAL_IMPORTE_IMPONIBLE_FORMATEADO']);
            $("#txt_p1_comprobante_total_importe_imponible").val(arr['COMPROBANTE_TOTAL_IMPORTE_IMPONIBLE']);

            $.each(arr['COMPROBANTE_IMPORTE_IMPONIBLE'], function (i, item) {
                $("#txt_pde_comprobante_importe_imponible_" + i).val(arr['COMPROBANTE_IMPORTE_IMPONIBLE'][i]);
                $("#div_importe_imponible_" + i).html(arr['COMPROBANTE_IMPORTE_IMPONIBLE_FORMATEADO'][i]);
            });

            $('.label-mensaje').html('');

            $.each(arr['RETENCIONES'], function (i, item) {
                $("#txt_tributo_importe_" + i).val(arr['RETENCIONES'][i]['IMPORTE']);
                $("#txt_tributo_importe_" + i + "_mensaje").html(arr['RETENCIONES'][i]['MENSAJE']);
            });

            setTimeout(function(){
                setInitPdeOrdenPagoGestion();
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
function setClickModalPdeOrdenPagoP1TxtImporteUnitario() {
    $('.txt_importe_unitario').unbind();
    $('.txt_importe_unitario').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobanteP1FormaPago();
        }, 1000);
    });
}
function setRecalcularTotalComprobanteP1FormaPago() {
    var prv_proveedor_id  = $("#dbsug_prv_proveedor_id").val();
    var form = $("#form_generar_orden_pago");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_orden_pago_gestion/set_pde_orden_pago_gestion_recalcular_total_p1_forma_pago.php",
        data: form.serialize() + "&prv_proveedor_id=" + prv_proveedor_id,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            $("#div_p1_forma_pago_total_pago").html(arr['FORMA_PAGO_TOTAL_FORMATEADO']);
            $("#div_p1_forma_pago_total_comprobantes").html(arr['FORMA_PAGO_TOTAL_COMPROBANTES_FORMATEADO']);
            $("#div_p1_forma_pago_total_retenciones").html(arr['FORMA_PAGO_TOTAL_RETENCIONES_FORMATEADO']);
            $("#div_p1_forma_pago_total_saldo").html(arr['FORMA_PAGO_TOTAL_SALDO_FORMATEADO']);

            setTimeout(function(){
                setInitPdeOrdenPagoGestion();
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

function setClickModalPdeOrdenPagoP1TxtComprobanteTributo() {
    $('.txt-tributo-importe').unbind();
    $('.txt-tributo-importe').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobanteP1FormaPago();
        }, 1000);
    });
}


function setChangeCmbGralEmpresa() {
    $('#cmb_gral_empresa_id').unbind();
    $('#cmb_gral_empresa_id').change(function () {

        // se actualiza combo de punto de venta
        var gral_empresa_id = $(this).val();
        if (gral_empresa_id > 0) {
            setPdeCentroPedidoCmbPorGralEmpresa(gral_empresa_id);
        } else {
            var cmb_pde_centro_pedido = $('#cmb_pde_centro_pedido_id');
            cmb_pde_centro_pedido.empty();
            cmb_pde_centro_pedido.append('<option value="">...</option>');

        }
    });
}

function setPdeCentroPedidoCmbPorGralEmpresa(gral_empresa_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_orden_pago_gestion/get_pde_centro_pedido_por_gral_empresa.php",
        data: "gral_empresa_id=" + gral_empresa_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_pde_centro_pedido_id');

            cmb.empty();
            cmb.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}
