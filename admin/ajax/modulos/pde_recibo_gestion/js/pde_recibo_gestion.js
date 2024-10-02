// archivo js del modulo 'pde_recibo'
$(function ($) {
    setInitPdeReciboGestion();
});

function setInitPdeReciboGestion() {
    
    // Nueva Recibo (+)
    setClickGenerarPdeRecibo();
    setChangeCmbFiltroPrvProveedor();

    setClickWsFeAfip();
    setClickWsAfipGenerarPdeReciboOnlineBtnSiguiente();

    // Botones Accion
    setClickPdeReciboGestionVerFicha();
    setClickPdeReciboGestionModificarDatos();
    setClickPdeReciboGestionModificarDatosConfirmacion();
    setClickPdeReciboGestionAnular();
    setClickPdeReciboGestionAnularConfirmar();

    // Modal Agregar NC
    setClickBtnAgregarItemRecibo();
    setClickBtnQuitarItemRecibo();

    // Cheque
    setChangeCmbGralFpFormaPago();
    setClickPdeReciboGestionSetCheque();

    // Modal Ficha Tab email
    setClickPdeReciboGestionVerCuerpoMail();
    setClickPdeReciboGestionVerAdjuntoMail();

    // Seccion filtros Top
    setChangeCmbFiltroPdeReciboCodigo();
    setChangeCmbFiltroPdeReciboNumeroRecibo();
    setChangeCmbFiltroPdeReciboCae();
    setChangeCmbFiltroPdeReciboPrvProveedor();
    setChangeCmbFiltroPdeReciboPdeTipoRecibo();
    setChangeCmbFiltroPdeReciboPdeTipoEstado();

    // Modal
    setChangeCmbGralEmpresa();
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
        url: "ajax/modulos/pde_recibo_gestion/get_pde_centro_pedido_por_gral_empresa.php",
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

function setChangeCmbFiltroPdeReciboCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_recibo_gestion");
    });
}
function setChangeCmbFiltroPdeReciboCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_recibo_gestion");
    });
}
function setChangeCmbFiltroPdeReciboNumeroRecibo() {
    $("#txt_buscador_numero_recibo").unbind();
    $("#txt_buscador_numero_recibo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_recibo_gestion");
    });
}
function setChangeCmbFiltroPdeReciboPrvProveedor() {
    $("#cmb_filtro_prv_proveedor_id").unbind();
    $("#cmb_filtro_prv_proveedor_id").change(function () {
        setAdmBuscadorTop("pde_recibo_gestion");
    });
}
function setChangeCmbFiltroPdeReciboPdeTipoRecibo() {
    $("#cmb_filtro_pde_tipo_recibo_id").unbind();
    $("#cmb_filtro_pde_tipo_recibo_id").change(function () {
        setAdmBuscadorTop("pde_recibo_gestion");
    });
}
function setChangeCmbFiltroPdeReciboPdeTipoEstado() {
    $("#cmb_filtro_pde_recibo_tipo_estado_id").unbind();
    $("#cmb_filtro_pde_recibo_tipo_estado_id").change(function () {
        setAdmBuscadorTop("pde_recibo_gestion");
    });
}

function setClickGenerarPdeRecibo() {
    $('.div_listado_buscador .col .boton.generar_recibo').unbind();
    $('.div_listado_buscador .col .boton.generar_recibo').click(function (e) {
        verModalGenerarPdeRecibo();
    });
}

function verModalGenerarPdeRecibo() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recibo_gestion/modal_generar_recibo.php",
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
            setInitPdeReciboGestion();
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
        if (dbsug_prv_proveedor_id != '') {
            refreshBloquePdeReciboItem(dbsug_prv_proveedor_id);
        }
    });
}

function refreshBloquePdeReciboItem(dbsug_prv_proveedor_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_recibo_gestion/bloque_pde_recibo_items_datos_x_prv_proveedor.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_recibos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_recibos').html(data);
            setInitPdeReciboGestion();
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
        var prv_proveedor_id = $(this).attr("prv_proveedor_id");
        //verModalClickWsFeAfip(prv_proveedor_id);
        setControlModalWsFeAfip(prv_proveedor_id);
    });
}

function setControlModalWsFeAfip(prv_proveedor_id) {

    var form              = $("#form_generar_recibo");
    var modulo            = 'pde_recibo';
    var var_sesion_random = $(".datos.generar-recibo").attr('var_sesion_random');
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_recibo_gestion/control_pde_recibo_gestion_ws_fe_afip.php",
        data: form.serialize() + '&prv_proveedor_id=' + prv_proveedor_id + '&modulo=' + modulo + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
//            $(".botonera").hide();
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
                verModalClickWsFeAfip(prv_proveedor_id);
            }

            setInitPdeReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalClickWsFeAfip(prv_proveedor_id) {

    var form = $("#form_generar_recibo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_recibo_gestion/modal_pde_recibo_gestion_ws_fe_afip.php",
        data: form.serialize() + '&prv_proveedor_id=' + prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '95%',
                height: 600,
                modal: true,
                title: 'Generar Recibo',
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitPdeReciboGestion();
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
function setClickWsAfipGenerarPdeReciboOnlineBtnSiguiente() {
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_recibo_online").unbind();
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_recibo_online").click(function (e) {
        setWsAfipGenerarPdeReciboOnlineBtnSiguiente();
    });
}

function setWsAfipGenerarPdeReciboOnlineBtnSiguiente() {

    var prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();
    var var_sesion_random = $(".datos.generar-recibo").attr('var_sesion_random');

    var form = $("#form_generar_recibo");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_recibo_gestion/set_pde_recibo_gestion_ws_afip_generar_recibo_online.php",
        data: form.serialize() + '&' + form2.serialize() + "&prv_proveedor_id=" + prv_proveedor_id + '&var_sesion_random=' + var_sesion_random,
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

                refreshAdmAll('pde_recibo_gestion', 1);
            }

            setInitPdeReciboGestion();
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
        var prv_proveedor_id = $(this).parents("form").attr("prv_proveedor_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemRecibo(prv_proveedor_id, key, $(this));
    });
}

function setBtnAgregarItemRecibo(prv_proveedor_id, key, elem) {

    var form = $("#form_generar_recibo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_recibo_gestion/set_bloque_pde_recibo_items_datos_x_prv_proveedor_uno.php",
        data: form.serialize() + '&dbsug_prv_proveedor_id=' + prv_proveedor_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_pde_recibo_items').append(data);

            elem.show();

            setInitPdeReciboGestion();
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
function setClickPdeReciboGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.pde_recibo_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.pde_recibo_gestion_ver_ficha').click(function (e) {
        var pde_recibo_id = $(this).parents('.adm_botones_acciones').attr('pde_recibo_id');
        verModalPdeReciboGestionVerFicha(pde_recibo_id);
    });
}

function verModalPdeReciboGestionVerFicha(pde_recibo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recibo_gestion/modal_pde_recibo_gestion_ficha.php",
        data: 'pde_recibo_id=' + pde_recibo_id,
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
            setInitPdeReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdeReciboGestionModificarDatos() {
    $("#listado_adm_pde_recibo_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_pde_recibo_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var pde_recibo_id = $(this).parents(".uno").attr("identificador");
        verModalPdeReciboGestionModificarDatos(pde_recibo_id);
    });
}

function verModalPdeReciboGestionModificarDatos(pde_recibo_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_recibo_gestion/modal_pde_recibo_gestion_modificar_datos.php",
        data: 'pde_recibo_id=' + pde_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('pde_recibo_gestion', pde_recibo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitPdeReciboGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeReciboGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var pde_recibo_id = $(this).parents(".datos").attr("pde_recibo_id");
        setPdeReciboGestionModificarDatosConfirmacion(pde_recibo_id);
    });
}

function setPdeReciboGestionModificarDatosConfirmacion(pde_recibo_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_recibo_gestion/set_pde_recibo_gestion_modificar_datos.php",
        data: form.serialize() + '&pde_recibo_id=' + pde_recibo_id,
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

            setInitPdeReciboGestion();
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
function setClickPdeReciboGestionAnular() {
    $('.db_context .db_context_content .uno.anular-recibo').unbind();
    $('.db_context .db_context_content .uno.anular-recibo').click(function (e) {
        var pde_recibo_id = $(this).parents('.datos').attr('pde_recibo_id');
        verModalPdeReciboGestionAnular(pde_recibo_id);
    });
}
function verModalPdeReciboGestionAnular(pde_recibo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recibo_gestion/modal_pde_recibo_gestion_anular.php",
        data: 'pde_recibo_id=' + pde_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Rechazar Orden de Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_recibo_gestion', pde_recibo_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitPdeReciboGestion();
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
function setClickPdeReciboGestionAnularConfirmar() {
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").click(function (e) {
        var pde_recibo_id = $(this).parents(".datos").attr("pde_recibo_id");
        setPdeReciboGestionAnularConfirmar(pde_recibo_id);
    });
}

function setPdeReciboGestionAnularConfirmar(pde_recibo_id) {
    var form = $("#form_datos_anular_recibo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_recibo_gestion/set_pde_recibo_gestion_anular.php",
        data: form.serialize() + '&pde_recibo_id=' + pde_recibo_id,
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

            setInitPdeReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/* Seccion mail de ficha */

function setClickPdeReciboGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-recibo-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-recibo-ver-cuerpo-correo").click(function (e) {
        var pde_recibo_enviado_id = $(this).attr("pde_recibo_enviado_id");
        setPdeReciboGestionVerCuerpoMail(pde_recibo_enviado_id);
    });
}

function setPdeReciboGestionVerCuerpoMail(pde_recibo_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_recibo_gestion/modal_pde_recibo_gestion_ver_cuerpo_email.php",
        data: 'pde_recibo_enviado_id=' + pde_recibo_enviado_id,
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
            setInitPdeReciboGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeReciboGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-recibo-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-recibo-comprobante").click(function (e) {
        var pde_recibo_enviado_id = $(this).attr("pde_recibo_enviado_id");
        setPdeReciboGestionVerAdjuntoMail(pde_recibo_enviado_id);
    });
}

function setPdeReciboGestionVerAdjuntoMail(pde_recibo_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_recibo_gestion/modal_pde_recibo_gestion_ver_adjunto_email.php",
        data: 'pde_recibo_enviado_id=' + pde_recibo_enviado_id,
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
            setInitPdeReciboGestion();
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
    $("#listado_pde_recibo_items .tr-item .gral_fp_forma_pago_id").unbind();
    $("#listado_pde_recibo_items .tr-item .gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_recibo_gestion/set_pde_recibo_gestion_gral_fp_forma_pago.php",
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
                    } else {
                        //$('#txt_importe_unitario_' + key).val('');
                        //$('#txt_descripcion_' + key).val('');
                        //$('#txt_referencia_' + key).val('');

                        $('#btn_ver_modal_set_cheque_info_' + key).hide();

                        $('#txt_importe_unitario_' + key).removeAttr('readonly');
                        $('#txt_descripcion_' + key).removeAttr('readonly');
                        $('#txt_referencia_' + key).removeAttr('readonly');
                    }
                }

                setInitPdeReciboGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setClickPdeReciboGestionSetCheque() {
    $("#listado_pde_recibo_items .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_pde_recibo_items .tr-item .boton.ver_modal_set_cheque_info").click(function (e) {
        var key                         = $(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;

        var modulo                      = 'pde_recibo';
        var var_sesion_random           = $('.datos.generar-recibo').attr('var_sesion_random');

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
                        width: 1200,
                        height: 600,
                        modal: true,
                        title: 'Datos del Cheque',
                        close: function () {
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

                    setInitPdeReciboGestion();
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
