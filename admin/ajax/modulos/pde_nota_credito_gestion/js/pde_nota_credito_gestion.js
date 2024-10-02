// archivo js del modulo 'pde_nota_credito'
$(function ($) {
    setInitPdeNotaCreditoGestion();
});

function setInitPdeNotaCreditoGestion() {
    // Nueva nota de credito (+)
    setClickGenerarPdeNotaCredito();
    setChangeCmbFiltroPrvProveedor();

    setClickWsFeAfip();
    setClickWsAfipGenerarPdeNotaCreditoOnlineBtnSiguiente();

    // Botones Accion
    setClickPdeNotaCreditoGestionVerFicha();
    setClickPdeNotaCreditoGestionModificarDatos();
    setClickPdeNotaCreditoGestionModificarDatosConfirmacion();
    setClickPdeNotaCreditoGestionAnular();
    setClickPdeNotaCreditoGestionAnularConfirmar();

    setClickWsAfipGenerarNotaDebitoOnline();
    setClickWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito();

    // Modal Agregar NC
    setClickBtnAgregarItemNotaCredito();
    setClickBtnQuitarItemNotaCredito();
    setKeyupModalCalculoItemImporteUnitario();
    setKeyupModalCalculoItemImporteTotal();
    setChangeCmbGralTipoIvaItem();
    setChangeCmbPdeNotaCreditoConcepto();
    setKeyupModalDescripcionItem();

    // Modal Ficha Tab email
    setClickPdeNotaCreditoGestionVerCuerpoMail();
    setClickPdeNotaCreditoGestionVerAdjuntoMail();

    // Seccion filtros Top
    setChangeCmbFiltroPdeNotaCreditoCodigo();
    setChangeCmbFiltroPdeNotaCreditoNumeroNotaCredito();
    setChangeCmbFiltroPdeNotaCreditoCae();
    setChangeCmbFiltroPdeNotaCreditoPrvProveedor();
    setChangeCmbFiltroPdeNotaCreditoPdeTipoNotaCredito();
    setChangeCmbFiltroPdeNotaCreditoPdeTipoEstado();

    // recalculo de total
    setClickModalTotalesTxtTibuto();

    // Modal
    setChangeCmbGralActividad();
    setChangeCmbGralEmpresa();
}


function setChangeCmbGralActividad() {
    $('#cmb_gral_actividad_id').unbind();
    $('#cmb_gral_actividad_id').change(function () {

        // se actualiza combo de punto de venta
        var gral_actividad_id = $(this).val();
        if (gral_actividad_id > 0) {
            setGralEscenarioCmbPorGralActividad(gral_actividad_id);
        } else {
            var cmb_gral_escenario = $('#cmb_cmb_gral_escenario_id');
            cmb_gral_escenario.empty();
            cmb_gral_escenario.append('<option value="">...</option>');
        }
    });
}
function setGralEscenarioCmbPorGralActividad(gral_actividad_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_nota_credito_gestion/get_gral_escenario_por_gral_actividad.php",
        data: "gral_actividad_id=" + gral_actividad_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_gral_escenario_id');

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
        url: "ajax/modulos/pde_nota_credito_gestion/get_pde_centro_pedido_por_gral_empresa.php",
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

function setChangeCmbFiltroPdeNotaCreditoCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_nota_credito_gestion");
    });
}
function setChangeCmbFiltroPdeNotaCreditoCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_nota_credito_gestion");
    });
}
function setChangeCmbFiltroPdeNotaCreditoNumeroNotaCredito() {
    $("#txt_buscador_numero_nota_credito").unbind();
    $("#txt_buscador_numero_nota_credito").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_nota_credito_gestion");
    });
}
function setChangeCmbFiltroPdeNotaCreditoPrvProveedor() {
    $("#cmb_filtro_prv_proveedor_id").unbind();
    $("#cmb_filtro_prv_proveedor_id").change(function () {
        setAdmBuscadorTop("pde_nota_credito_gestion");
    });
}
function setChangeCmbFiltroPdeNotaCreditoPdeTipoNotaCredito() {
    $("#cmb_filtro_pde_tipo_nota_credito_id").unbind();
    $("#cmb_filtro_pde_tipo_nota_credito_id").change(function () {
        setAdmBuscadorTop("pde_nota_credito_gestion");
    });
}
function setChangeCmbFiltroPdeNotaCreditoPdeTipoEstado() {
    $("#cmb_filtro_pde_nota_credito_tipo_estado_id").unbind();
    $("#cmb_filtro_pde_nota_credito_tipo_estado_id").change(function () {
        setAdmBuscadorTop("pde_nota_credito_gestion");
    });
}

function setClickGenerarPdeNotaCredito() {
    $('.div_listado_buscador .col .boton.generar_nota_credito').unbind();
    $('.div_listado_buscador .col .boton.generar_nota_credito').click(function (e) {
        verModalGenerarPdeNotaCredito();
    });
}

function verModalGenerarPdeNotaCredito() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_nota_credito_gestion/modal_generar_nota_credito.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 800,
                modal: true,
                title: 'Generar Nota de Credito',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeNotaCreditoGestion();
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
            refreshBloquePdeNotaCreditoItem(dbsug_prv_proveedor_id);
        }
    });
}

function refreshBloquePdeNotaCreditoItem(dbsug_prv_proveedor_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_nota_credito_gestion/bloque_pde_nota_credito_items_datos_x_prv_proveedor.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_nota_creditos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_nota_creditos').html(data);
            setInitPdeNotaCreditoGestion();
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
// Modal Generar una Nueva Nota de Credito (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos .botonera #btn_set_ws_fe_nota_credito_afip").unbind();
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos .botonera #btn_set_ws_fe_nota_credito_afip").click(function (e) {
        var prv_proveedor_id = $(this).attr("prv_proveedor_id");
        setControlModalWsFeAfip(prv_proveedor_id);
    });
}

function setControlModalWsFeAfip(prv_proveedor_id) {

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/control_pde_nota_credito_gestion_ws_fe_afip.php",
        data: form.serialize() + '&prv_proveedor_id=' + prv_proveedor_id,
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

            setInitPdeNotaCreditoGestion();
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

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_ws_fe_afip.php",
        data: form.serialize() + '&prv_proveedor_id=' + prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '95%',
                height: 900,
                modal: true,
                title: 'Generar Nota de Credito',
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitPdeNotaCreditoGestion();
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
// Modal Generar una Nueava Nota de Credito (Boton + del buscador top)
// Boton siguiente
// Boton Generar Nota Credito Online
// ----------------------------------------------------------------
function setClickWsAfipGenerarPdeNotaCreditoOnlineBtnSiguiente() {
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_nota_credito_online").unbind();
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_nota_credito_online").click(function (e) {
        setWsAfipGenerarPdeNotaCreditoOnlineBtnSiguiente();
    });
}

function setWsAfipGenerarPdeNotaCreditoOnlineBtnSiguiente() {

    var prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();

    var form = $("#form_generar_nota_credito");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_ws_afip_generar_nota_credito_online.php",
        data: form.serialize() + '&' + form2.serialize() + "&prv_proveedor_id=" + prv_proveedor_id,
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

                refreshAdmAll('pde_nota_credito_gestion', 1);
            }

            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnAgregarItemNotaCredito() {
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos #form_generar_nota_credito .boton.agregar_item_nota_credito").unbind();
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos #form_generar_nota_credito .boton.agregar_item_nota_credito").click(function (e) {
        var prv_proveedor_id = $(this).parents("form").attr("prv_proveedor_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemNotaCredito(prv_proveedor_id, key, $(this));
    });
}

function setBtnAgregarItemNotaCredito(prv_proveedor_id, key, elem) {

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/set_bloque_pde_nota_credito_items_datos_x_prv_proveedor_uno.php",
        data: form.serialize() + '&dbsug_prv_proveedor_id=' + prv_proveedor_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_pde_nota_credito_items').append(data);

            elem.show();

            setInitPdeNotaCreditoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarItemNotaCredito() {
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos #form_generar_nota_credito .boton.quitar_item_nota_credito").unbind();
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos #form_generar_nota_credito .boton.quitar_item_nota_credito").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}

/*
 Ver Ficha de la NC
 */
function setClickPdeNotaCreditoGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.pde_nota_credito_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.pde_nota_credito_gestion_ver_ficha').click(function (e) {
        var pde_nota_credito_id = $(this).parents('.adm_botones_acciones').attr('pde_nota_credito_id');
        verModalPdeNotaCreditoGestionVerFicha(pde_nota_credito_id);
    });
}

function verModalPdeNotaCreditoGestionVerFicha(pde_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_ficha.php",
        data: 'pde_nota_credito_id=' + pde_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Nota de Credito',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdeNotaCreditoGestionModificarDatos() {
    $("#listado_adm_pde_nota_credito_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_pde_nota_credito_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var pde_nota_credito_id = $(this).parents(".uno").attr("identificador");
        verModalPdeNotaCreditoGestionModificarDatos(pde_nota_credito_id);
    });
}

function verModalPdeNotaCreditoGestionModificarDatos(pde_nota_credito_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_modificar_datos.php",
        data: 'pde_nota_credito_id=' + pde_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('pde_nota_credito_gestion', pde_nota_credito_id);                    
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            
            setInitPdeNotaCreditoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeNotaCreditoGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var pde_nota_credito_id = $(this).parents(".datos").attr("pde_nota_credito_id");
        setPdeNotaCreditoGestionModificarDatosConfirmacion(pde_nota_credito_id);
    });
}

function setPdeNotaCreditoGestionModificarDatosConfirmacion(pde_nota_credito_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_modificar_datos.php",
        data: form.serialize() + '&pde_nota_credito_id=' + pde_nota_credito_id,
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

            setInitPdeNotaCreditoGestion();
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
function setClickPdeNotaCreditoGestionAnular() {
    $('.db_context .db_context_content .uno.anular-recibo').unbind();
    $('.db_context .db_context_content .uno.anular-recibo').click(function (e) {
        var pde_nota_credito_id = $(this).parents('.datos').attr('pde_nota_credito_id');
        verModalPdeNotaCreditoGestionAnular(pde_nota_credito_id);
    });
}
function verModalPdeNotaCreditoGestionAnular(pde_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_anular.php",
        data: 'pde_nota_credito_id=' + pde_nota_credito_id,
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
                    refreshAdmUno('pde_nota_credito_gestion', pde_nota_credito_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitPdeNotaCreditoGestion();
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
function setClickPdeNotaCreditoGestionAnularConfirmar() {
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").click(function (e) {
        var pde_nota_credito_id = $(this).parents(".datos").attr("pde_nota_credito_id");
        setPdeNotaCreditoGestionAnularConfirmar(pde_nota_credito_id);
    });
}

function setPdeNotaCreditoGestionAnularConfirmar(pde_nota_credito_id) {
    var form = $("#form_datos_anular_recibo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_anular.php",
        data: form.serialize() + '&pde_nota_credito_id=' + pde_nota_credito_id,
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

            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/* Seccion mail de ficha */

function setClickPdeNotaCreditoGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-nota-credito-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-nota-credito-ver-cuerpo-correo").click(function (e) {
        var pde_nota_credito_enviado_id = $(this).attr("pde_nota_credito_enviado_id");
        setPdeNotaCreditoGestionVerCuerpoMail(pde_nota_credito_enviado_id);
    });
}

function setPdeNotaCreditoGestionVerCuerpoMail(pde_nota_credito_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_ver_cuerpo_email.php",
        data: 'pde_nota_credito_enviado_id=' + pde_nota_credito_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'Nota de Credito',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeNotaCreditoGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-nota-credito-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-nota-credito-comprobante").click(function (e) {
        var pde_nota_credito_enviado_id = $(this).attr("pde_nota_credito_enviado_id");
        setPdeNotaCreditoGestionVerAdjuntoMail(pde_nota_credito_enviado_id);
    });
}

function setPdeNotaCreditoGestionVerAdjuntoMail(pde_nota_credito_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_ver_adjunto_email.php",
        data: 'pde_nota_credito_enviado_id=' + pde_nota_credito_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'Nota de Credito Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaDebitoOnline() {
    $('#listado_adm_pde_nota_credito_gestion .adm_botones_accion.pde-nota-credito-gestion-generar-nota-debito-afip').unbind();
    $('#listado_adm_pde_nota_credito_gestion .adm_botones_accion.pde-nota-credito-gestion-generar-nota-debito-afip').click(function (e) {
        var pde_nota_credito_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaDebitoOnline(pde_nota_credito_id);
    });
}

function verModalWsAfipGenerarNotaDebitoOnline(pde_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_nota_credito_gestion/modal_pde_nota_credito_gestion_ws_afip_generar_nota_debito_online.php",
        data: 'pde_nota_credito_id=' + pde_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 500,
                modal: true,
                title: 'Generar Nota de Debito Online AFIP',
                close: function () {
//                    refreshAdmUno('pde_nota_credito_gestion', pde_nota_credito_id);
                    refreshAdmAll('pde_nota_credito_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito() {
    $(".div_modal .botonera #btn_generar_nota_debito").unbind();
    $(".div_modal .botonera #btn_generar_nota_debito").click(function (e) {
        var pde_nota_credito_id = $(this).attr("pde_nota_credito_id");
        setWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito(pde_nota_credito_id);
    });
}

function setWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito(pde_nota_credito_id) {

    var form = $("#form_generar_nota_debito_ws_fe_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_ws_afip_generar_nota_debito_online.php",
        data: form.serialize() + '&pde_nota_credito_id=' + pde_nota_credito_id,
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

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setKeyupModalCalculoItemImporteUnitario() {
    $("#listado_pde_nota_credito_items .tr-item .txt_importe_unitario").unbind();
    $("#listado_pde_nota_credito_items .tr-item .txt_importe_unitario").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var prv_proveedor_id = $("#form_generar_nota_credito").attr("prv_proveedor_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_calculo_item_importe_unitario.php",
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

                setInitPdeNotaCreditoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setKeyupModalCalculoItemImporteTotal() {
    $("#listado_pde_nota_credito_items .tr-item .txt_importe_total").unbind();
    $("#listado_pde_nota_credito_items .tr-item .txt_importe_total").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_total = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var prv_proveedor_id = $("#form_generar_nota_credito").attr("prv_proveedor_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_calculo_item_importe_total.php",
            data: "key=" + key + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_total=" + importe_total + '&prv_proveedor_id=' + prv_proveedor_id,
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
                    $("#txt_importe_unitario_" + key).val(arr["importe_unitario"]);
                    $("#txt_importe_iva_" + key).val(arr["importe_iva"]);
                }

                setInitPdeNotaCreditoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setChangeCmbGralTipoIvaItem() {
    $("#listado_pde_nota_credito_items .tr-item .gral_tipo_iva_id").unbind();
    $("#listado_pde_nota_credito_items .tr-item .gral_tipo_iva_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).parents("tr").find(".txt_importe_unitario").val();
        var importe_total = $(this).parents("tr").find(".txt_importe_total").val();
        var gral_tipo_iva_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_calculo_item_cmb.php",
            data: "key=" + key + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_unitario=" + importe_unitario + "&importe_total=" + importe_total,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_gral_tipo_iva_id[" + key + "]").removeClass('input-error');
                $("#cmb_gral_tipo_iva_id_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#txt_importe_unitario_" + key).val(arr["importe_unitario"]);
                    $("#txt_importe_iva_" + key).val(arr["importe_iva"]);
                    $("#txt_importe_total_" + key).val(arr["importe_total"]);
                }

                setInitPdeNotaCreditoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setChangeCmbPdeNotaCreditoConcepto() {
    $("#listado_pde_nota_credito_items .tr-item .pde_nota_credito_concepto_id").unbind();
    $("#listado_pde_nota_credito_items .tr-item .pde_nota_credito_concepto_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var pde_nota_credito_concepto_id = $(this).val();

        if (pde_nota_credito_concepto_id !== "") {
            $("#cmb_pde_nota_credito_concepto_id[" + key + "]").removeClass('input-error');
            $("#cmb_pde_nota_credito_concepto_id_" + key + "_error").html("");
        }
    });
}

function setKeyupModalDescripcionItem() {
    $("#listado_pde_nota_credito_items .tr-item .txt_descripcion").unbind();
    $("#listado_pde_nota_credito_items .tr-item .txt_descripcion").keyup(function (e) {

        var key = $(this).parents("tr").attr("key");
        var descripcion = $(this).val();

        if (descripcion !== "") {
            $("#txt_descripcion_" + key).removeClass('input-error');
            $("#txt_descripcion_" + key + "_error").html("");
        }
    });
}

function setClickModalTotalesTxtTibuto() {
    $('.txt_comprobante_tributo').unbind();
    $('.txt_comprobante_tributo').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobante();
        }, 500);
    });

}
function setRecalcularTotalComprobante() {
    var form = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_nota_credito_gestion/set_pde_nota_credito_gestion_recalcular_total.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            $("#txt_comprobante_total").val(arr['COMPROBANTE_TOTAL']);
            $("#div_comprobante_total").html(arr['COMPROBANTE_TOTAL_FORMATEADO']);

            setInitPdeNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
