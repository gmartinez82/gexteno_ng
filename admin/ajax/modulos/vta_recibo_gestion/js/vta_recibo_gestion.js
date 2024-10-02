// archivo js del modulo 'vta_recibo'
$(function ($) {
    setInitVtaReciboGestion();
});

function setInitVtaReciboGestion() {
    
    // Nueva Recibo (+)
    setClickGenerarVtaRecibo();
    setChangeCmbFiltroCliCliente();

    setClickWsFeAfip();
    setClickWsAfipGenerarVtaReciboOnlineBtnSiguiente();

    // Botones Accion
    setClickVtaReciboGestionVerFicha();
    setClickVtaReciboGestionModificarDatos();
    setClickVtaReciboGestionModificarDatosConfirmacion();
    setClickVtaReciboGestionEnviarPorCorreoRecibo();
    setClickVtaReciboGestionEnviarPorCorreoReciboBtnEnviarRecibo();
    setClickVtaReciboGestionAnular();
    setClickVtaReciboGestionAnularConfirmar();

    // Modal Agregar NC
    setClickBtnAgregarItemRecibo();
    setClickBtnQuitarItemRecibo();

    // Cheque
    setChangeCmbGralFpFormaPago();
    setClickVtaReciboGestionSetCheque();

    // Retencion
    setChangeCmbVtaReciboConcepto();
    setClickVtaReciboGestionSetRetencion();
    setClickVtaReciboGestionSetRetencionBtnGuardar();

    // Modal Ficha Tab email
    setClickVtaReciboGestionVerCuerpoMail();
    setClickVtaReciboGestionVerAdjuntoMail();

    // Seccion filtros Top
    setChangeCmbFiltroVtaReciboCodigo();
    setChangeCmbFiltroVtaReciboNumeroRecibo();
    setChangeCmbFiltroVtaReciboCae();
    setChangeCmbFiltroVtaReciboCliCliente();
    setChangeCmbFiltroVtaReciboVtaTipoRecibo();
    setChangeCmbFiltroVtaReciboVtaTipoEstado();
    setChangeCmbFiltroVtaReciboVtaGralCondicionIva();

    // Modal
    setChangeCmbGralEmpresa();

}

function setChangeCmbGralEmpresa() {
    $('#cmb_gral_empresa_id').unbind();
    $('#cmb_gral_empresa_id').change(function () {

        // se actualiza combo de punto de venta
        var gral_empresa_id = $(this).val();
        if (gral_empresa_id > 0) {
            setVtaPuntoVentaCmbPorGralEmpresa(gral_empresa_id);
        } else {
            var cmb_vta_punto_venta = $('#cmb_vta_punto_venta_id');
            cmb_vta_punto_venta.empty();
            cmb_vta_punto_venta.append('<option value="">...</option>');

        }
    });
}

function setVtaPuntoVentaCmbPorGralEmpresa(gral_empresa_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/get_vta_punto_venta_por_gral_empresa.php",
        data: "gral_empresa_id=" + gral_empresa_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_vta_punto_venta_id');

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

function setChangeCmbFiltroVtaReciboCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboNumeroRecibo() {
    $("#txt_buscador_numero_recibo").unbind();
    $("#txt_buscador_numero_recibo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboVtaTipoRecibo() {
    $("#cmb_filtro_vta_tipo_recibo_id").unbind();
    $("#cmb_filtro_vta_tipo_recibo_id").change(function () {
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboVtaTipoEstado() {
    $("#cmb_filtro_vta_recibo_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_recibo_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboVtaGralCondicionIva() {
    $("#cmb_filtro_gral_condicion_iva_id").unbind();
    $("#cmb_filtro_gral_condicion_iva_id").change(function () {
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}
function setChangeCmbFiltroVtaReciboVtaGralEmpresa() {
    $("#cmb_filtro_gral_empresa_id").unbind();
    $("#cmb_filtro_gral_empresa_id").change(function () {
        setAdmBuscadorTop("vta_recibo_gestion");
    });
}

function setClickGenerarVtaRecibo() {
    $('.div_listado_buscador .col .boton.generar_recibo').unbind();
    $('.div_listado_buscador .col .boton.generar_recibo').click(function (e) {
        verModalGenerarVtaRecibo();
    });
}

function verModalGenerarVtaRecibo() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_recibo_gestion/modal_generar_recibo.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 800,
                modal: true,
                title: 'Generar Recibo',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
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

function setChangeCmbFiltroCliCliente() {
    $("#dbsug_cli_cliente_id").unbind();
    $("#dbsug_cli_cliente_id").change(function () {
        var dbsug_cli_cliente_id = $(this).val();
        if (dbsug_cli_cliente_id != '') {
            refreshBloqueVtaReciboItem(dbsug_cli_cliente_id);
        }
    });
}

function refreshBloqueVtaReciboItem(dbsug_cli_cliente_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_recibo_gestion/bloque_vta_recibo_items_datos_x_cli_cliente.php",
        data: 'dbsug_cli_cliente_id=' + dbsug_cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_recibos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_recibos').html(data);
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

// ----------------------------------------------------------------
// Modal Generar una Nueva Recibo (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {
    $(".div_modal .datos.generar-recibo .div_datos_generar_recibos .botonera #btn_set_ws_fe_recibo_afip").unbind();
    $(".div_modal .datos.generar-recibo .div_datos_generar_recibos .botonera #btn_set_ws_fe_recibo_afip").click(function (e) {
        var cli_cliente_id = $(this).attr("cli_cliente_id");
        //verModalClickWsFeAfip(cli_cliente_id);
        setControlModalWsFeAfip(cli_cliente_id);
    });
}

function setControlModalWsFeAfip(cli_cliente_id)
{
    var form              = $("#form_generar_recibo");
    var modulo            = 'vta_recibo';
    var var_sesion_random = $(".datos.generar-recibo").attr('var_sesion_random');
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_gestion/control_vta_recibo_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&modulo=' + modulo + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            //$(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        close: function () {
            setClickAdmRefreshAll();
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
                verModalClickWsFeAfip(cli_cliente_id);
            }

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

function verModalClickWsFeAfip(cli_cliente_id) {

    var form = $("#form_generar_recibo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '90%',
                height: 700,
                modal: true,
                title: 'Generar Recibo',
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

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
// ----------------------------------------------------------------
// Modal Generar una Nueava Recibo (Boton + del buscador top)
// Boton siguiente
// Boton Generar Recibo Online
// ----------------------------------------------------------------
function setClickWsAfipGenerarVtaReciboOnlineBtnSiguiente() {
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_recibo_online").unbind();
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_recibo_online").click(function (e) {
        setWsAfipGenerarVtaReciboOnlineBtnSiguiente();
    });
}

function setWsAfipGenerarVtaReciboOnlineBtnSiguiente() {

    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    var var_sesion_random = $(".datos.generar-recibo").attr('var_sesion_random');

    var form = $("#form_generar_recibo");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_ws_afip_generar_recibo_online.php",
        data: form.serialize() + '&' + form2.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal_modal .textbox").removeClass('input-error');
            $(".div_modal_modal .label-error").html("");
        },
        close: function () {
            setClickAdmRefreshAll();
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
                $(".div_modal").dialog("close");
                $(".div_modal_modal").dialog("close");

                refreshAdmAll('vta_recibo_gestion', 1);
            }

            setInitVtaReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setClickBtnAgregarItemRecibo() {
    $(".div_modal .datos.generar-recibo .div_datos_generar_recibos #form_generar_recibo .boton.agregar_item_recibo").unbind();
    $(".div_modal .datos.generar-recibo .div_datos_generar_recibos #form_generar_recibo .boton.agregar_item_recibo").click(function (e) {
        var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemRecibo(cli_cliente_id, key, $(this));
    });
}

function setBtnAgregarItemRecibo(cli_cliente_id, key, elem) {

    var form = $("#form_generar_recibo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_gestion/set_bloque_vta_recibo_items_datos_x_cli_cliente_uno.php",
        data: form.serialize() + '&dbsug_cli_cliente_id=' + cli_cliente_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_vta_recibo_items').append(data);

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
    $(".div_modal .datos.generar-recibo .div_datos_generar_recibos #form_generar_recibo .boton.quitar_item_recibo").unbind();
    $(".div_modal .datos.generar-recibo .div_datos_generar_recibos #form_generar_recibo .boton.quitar_item_recibo").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}

/*
 Ver Ficha del Recibo
 */
function setClickVtaReciboGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_recibo_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_recibo_gestion_ver_ficha').click(function (e) {
        var vta_recibo_id = $(this).parents('.adm_botones_acciones').attr('vta_recibo_id');
        verModalVtaReciboGestionVerFicha(vta_recibo_id);
    });
}

function verModalVtaReciboGestionVerFicha(vta_recibo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_ficha.php",
        data: 'vta_recibo_id=' + vta_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Recibo',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
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

function setClickVtaReciboGestionModificarDatos() {
    $("#listado_adm_vta_recibo_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_vta_recibo_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var vta_recibo_id = $(this).parents(".uno").attr("identificador");
        verModalVtaReciboGestionModificarDatos(vta_recibo_id);
    });
}

function verModalVtaReciboGestionModificarDatos(vta_recibo_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_modificar_datos.php",
        data: 'vta_recibo_id=' + vta_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 620,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('vta_recibo_gestion', vta_recibo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

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

function setClickVtaReciboGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var vta_recibo_id = $(this).parents(".datos").attr("vta_recibo_id");
        setVtaReciboGestionModificarDatosConfirmacion(vta_recibo_id);
    });
}

function setVtaReciboGestionModificarDatosConfirmacion(vta_recibo_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_modificar_datos.php",
        data: form.serialize() + '&vta_recibo_id=' + vta_recibo_id,
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

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

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


function setClickVtaReciboGestionEnviarPorCorreoRecibo() {
    $("#listado_adm_vta_recibo_gestion .adm_botones_accion.vta-recibo-enviar-por-correo").unbind();
    $("#listado_adm_vta_recibo_gestion .adm_botones_accion.vta-recibo-enviar-por-correo").click(function (e) {
        var vta_recibo_id = $(this).parents(".uno").attr("identificador");
        verModalVtaReciboGestionBotonEnviarReciboPorMail(vta_recibo_id);
    });
}

function verModalVtaReciboGestionBotonEnviarReciboPorMail(vta_recibo_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_enviar_recibo.php",
        data: 'vta_recibo_id=' + vta_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '55%',
                height: 330,
                modal: true,
                title: 'Enviar Recibo',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
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

function setClickVtaReciboGestionEnviarPorCorreoReciboBtnEnviarRecibo() {
    $(".div_modal .datos.enviar-recibo #btn_enviar").unbind();
    $(".div_modal .datos.enviar-recibo #btn_enviar").click(function (e) {
        var vta_recibo_id = $(this).parents(".datos").attr("vta_recibo_id");
        setVtaFacturaGestionEnviarPorCorreoReciboBtnEnviarRecibo(vta_recibo_id);
    });
}

function setVtaFacturaGestionEnviarPorCorreoReciboBtnEnviarRecibo(vta_recibo_id) {
    var form = $("#form_enviar_recibo");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_enviar_recibo.php",
        data: form.serialize() + '&vta_recibo_id=' + vta_recibo_id,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            $(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
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

/* Seccion mail de ficha */

function setClickVtaReciboGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-recibo-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-recibo-ver-cuerpo-correo").click(function (e) {
        var vta_recibo_enviado_id = $(this).attr("vta_recibo_enviado_id");
        setVtaReciboGestionVerCuerpoMail(vta_recibo_enviado_id);
    });
}

function setVtaReciboGestionVerCuerpoMail(vta_recibo_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_ver_cuerpo_email.php",
        data: 'vta_recibo_enviado_id=' + vta_recibo_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'Recibo',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
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

function setClickVtaReciboGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-recibo-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-recibo-comprobante").click(function (e) {
        var vta_recibo_enviado_id = $(this).attr("vta_recibo_enviado_id");
        setVtaReciboGestionVerAdjuntoMail(vta_recibo_enviado_id);
    });
}

function setVtaReciboGestionVerAdjuntoMail(vta_recibo_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_ver_adjunto_email.php",
        data: 'vta_recibo_enviado_id=' + vta_recibo_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'Recibo Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
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

/*
 Anular Comprobante
 */
function setClickVtaReciboGestionAnular() {
    $('.db_context .db_context_content .uno.anular-recibo').unbind();
    $('.db_context .db_context_content .uno.anular-recibo').click(function (e) {
        var vta_recibo_id = $(this).parents('.datos').attr('vta_recibo_id');
        verModalVtaReciboGestionAnular(vta_recibo_id);
    });
}
function verModalVtaReciboGestionAnular(vta_recibo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_anular.php",
        data: 'vta_recibo_id=' + vta_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Anular Comprobante',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('vta_recibo_gestion', vta_recibo_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

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
/*
 Anular Comprobante Confirmacion
 */
function setClickVtaReciboGestionAnularConfirmar() {
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").click(function (e) {
        var vta_recibo_id = $(this).parents(".datos").attr("vta_recibo_id");
        setVtaReciboGestionAnularConfirmar(vta_recibo_id);
    });
}

function setVtaReciboGestionAnularConfirmar(vta_recibo_id) {
    var form = $("#form_datos_anular_recibo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_anular.php",
        data: form.serialize() + '&vta_recibo_id=' + vta_recibo_id,
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

            setInitVtaReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/*
 * Forma de Pago 
 */
function setChangeCmbGralFpFormaPago() {
    $("#listado_vta_recibo_items .tr-item .gral_fp_forma_pago_id").unbind();
    $("#listado_vta_recibo_items .tr-item .gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_gral_fp_forma_pago.php",
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

                    if (arr['btn_cheque'])
                    {
                        $('#btn_ver_modal_set_cheque_info_' + key).show();

                        $('#txt_importe_unitario_' + key).val('');//revisar, usar el key para acceder directamente y no el class
                        $('#txt_descripcion_' + key).val('');
                        $('#txt_referencia_' + key).val('');

                        if (arr["importe_cheque_formateado"])
                        {
                            $('#txt_importe_unitario_' + key).val(arr['importe_cheque_formateado']);
                            $('#txt_descripcion_' + key).val(arr['descripcion_cheque']);
                            $('#txt_referencia_' + key).val(arr['numero_cheque']);
                        }

                        $('#txt_importe_unitario_' + key).attr('readonly', 'readonly');
                        $('#txt_descripcion_' + key).attr('readonly', 'readonly');
                        $('#txt_referencia_' + key).attr('readonly', 'readonly');
                    } else
                    {
                        //$('#txt_importe_unitario_' + key).val('');
                        //$('#txt_descripcion_' + key).val('');
                        //$('#txt_referencia_' + key).val('');

                        $('#btn_ver_modal_set_cheque_info_' + key).hide();

                        $('#txt_importe_unitario_' + key).removeAttr('readonly');
                        $('#txt_descripcion_' + key).removeAttr('readonly');
                        $('#txt_referencia_' + key).removeAttr('readonly');
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

function setClickVtaReciboGestionSetCheque() {
    $("#listado_vta_recibo_items .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_vta_recibo_items .tr-item .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key                         = $(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;

        var modulo                      = 'vta_recibo';
        var var_sesion_random           = $('.datos.generar-recibo').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}

function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
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
                        close: function () {
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



/*
 * Retenciones 
 */
function setChangeCmbVtaReciboConcepto() {
    $("#listado_vta_recibo_items .tr-item .cmb_vta_recibo_concepto_id").unbind();
    $("#listado_vta_recibo_items .tr-item .cmb_vta_recibo_concepto_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_vta_recibo_concepto_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_vta_recibo_concepto.php",
            data: "key=" + key + "&cmb_vta_recibo_concepto_id=" + cmb_vta_recibo_concepto_id,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_vta_recibo_concepto_id[" + key + "]").removeClass('input-error');
                $("#cmb_vta_recibo_concepto_id_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#cmb_vta_recibo_concepto_id[" + key + "]").removeClass('input-error');

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

function setClickVtaReciboGestionSetRetencion() {
    $("#listado_vta_recibo_items .tr-item .boton.ver_modal_set_retencion_info").unbind();
    $("#listado_vta_recibo_items .tr-item .boton.ver_modal_set_retencion_info").click(function (e) {
        var key = $(this).parents("tr").attr('key');
        verModalVtaReciboGestionSetRetencion(key);
    });
}

function verModalVtaReciboGestionSetRetencion(key)
{
    var modulo            = 'vta_recibo';
    var var_sesion_random = $(".datos.generar-recibo").attr('var_sesion_random');
    $.ajax(
    {
        type: "GET",
        url: "ajax/modulos/vta_recibo_gestion/modal_vta_recibo_gestion_set_retencion_info.php",
        data: 'modulo=' + modulo + '&key=' + key + '&var_sesion_random=' + var_sesion_random,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Datos de la Retencion',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_modal").html(data);

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
    $(".div_modal_modal #form_set_retencion_info .datos .botonera .boton.btn_guardar").unbind();
    $(".div_modal_modal #form_set_retencion_info .datos .botonera .boton.btn_guardar").click(function (e) {
        setVtaReciboGestionSetRetencionBtnGuardar();
    });
}

function setVtaReciboGestionSetRetencionBtnGuardar() {

    var form_set_retencion_info = $('#form_set_retencion_info');
    var key                     = form_set_retencion_info.attr('key');
    var modulo                  = form_set_retencion_info.attr('modulo');
    var var_sesion_random       = form_set_retencion_info.attr('var_sesion_random');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_recibo_gestion/set_vta_recibo_gestion_set_retencion_info.php",
        data: form_set_retencion_info.serialize()  + '&modulo=' + modulo + '&key=' + key + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function () {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .textbox").removeClass('input-error');
            $(".div_modal_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal_modal .botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal_modal").dialog("close");
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

