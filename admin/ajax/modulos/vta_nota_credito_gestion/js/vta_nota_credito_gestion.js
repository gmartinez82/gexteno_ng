// archivo js del modulo 'vta_nota_credito'
$(function ($) {
    setInitVtaNotaCreditoGestion();
});

function setInitVtaNotaCreditoGestion() {
    // Nueva nota de credito (+)
    setClickGenerarVtaNotaCredito();
    setChangeCmbFiltroCliCliente();
    
    setClickWsFeAfip();
    setClickWsAfipGenerarVtaNotaCreditoOnlineBtnSiguiente();

    // Botones Accion
    setClickVtaNotaCreditoGestionVerFicha();
    setClickVtaNotaCreditoGestionModificarDatos();
    setClickVtaNotaCreditoGestionModificarDatosConfirmacion();
    setClickVtaNotaCreditoGestionEnviarPorCorreoNotaCredito();
    setClickVtaNotaCreditoGestionEnviarPorCorreoNotaCreditoBtnEnviarNotaCredito();
    setClickVtaNotaCreditoGestionAnular();
    setClickVtaNotaCreditoGestionAnularConfirmar();
    
    setClickWsAfipGenerarNotaDebitoOnline();
    setClickWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito();

    // Modal Agregar NC
    setClickBtnAgregarItemNotaCredito();
    setClickBtnQuitarItemNotaCredito();
    setKeyupModalCalculoItemImporteUnitario();
    setKeyupModalCalculoItemImporteTotal();
    setChangeCmbGralTipoIvaItem();
    setChangeCmbVtaNotaCreditoConcepto();
    setKeyupModalDescripcionItem();

    // Modal Ficha Tab email
    setClickVtaNotaCreditoGestionVerCuerpoMail();
    setClickVtaNotaCreditoGestionVerAdjuntoMail();
    
    // reintento manual de obtencion de CAE
    setClickWsAfipGenerarNotaCreditoOnline();
    setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito();
    setClickWsAfipGenerarNotaCreditoOnlineBtnDesvincularNroComprobante();
    setClickWsAfipGenerarNotaCreditoOnlineBtnClonarNroComprobante();
    

    // Seccion filtros Top
    setChangeCmbFiltroVtaNotaCreditoCodigo();
    setChangeCmbFiltroVtaNotaCreditoNumeroNotaCredito();
    setChangeCmbFiltroVtaNotaCreditoCae();
    setChangeCmbFiltroVtaNotaCreditoCliCliente();
    setChangeCmbFiltroVtaNotaCreditoVtaTipoNotaCredito();
    setChangeCmbFiltroVtaNotaCreditoVtaGralCondicionIva();
    setChangeCmbFiltroVtaNotaCreditoVtaTipoEstado();

    // Modal
    setChangeCmbGralActividad();
    setChangeCmbGralEmpresa();
    setChangeCmbVtaPuntoVenta();
    
    // omitir minimo en tributo
    setChangeChkTributoOmitirMinimo();
}

function setChangeCmbFiltroVtaNotaCreditoCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaCreditoCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaCreditoNumeroNotaCredito() {
    $("#txt_buscador_numero_nota_credito").unbind();
    $("#txt_buscador_numero_nota_credito").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaCreditoCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaCreditoVtaTipoNotaCredito() {
    $("#cmb_filtro_vta_tipo_nota_credito_id").unbind();
    $("#cmb_filtro_vta_tipo_nota_credito_id").change(function () {
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaCreditoVtaGralCondicionIva() {
    $("#cmb_filtro_gral_condicion_iva_id").unbind();
    $("#cmb_filtro_gral_condicion_iva_id").change(function () {
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaCreditoVtaTipoEstado() {
    $("#cmb_filtro_vta_nota_credito_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_nota_credito_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_nota_credito_gestion");
    });
}

function setClickGenerarVtaNotaCredito() {
    $('.div_listado_buscador .col .boton.generar_nota_credito').unbind();
    $('.div_listado_buscador .col .boton.generar_nota_credito').click(function (e) {
        verModalGenerarVtaNotaCredito();
    });
}

function verModalGenerarVtaNotaCredito() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_credito_gestion/modal_generar_nota_credito.php",
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
            setInitVtaNotaCreditoGestion();
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
            refreshBloqueVtaNotaCreditoItem(dbsug_cli_cliente_id);
        }
    });
}

function refreshBloqueVtaNotaCreditoItem(dbsug_cli_cliente_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_nota_credito_gestion/bloque_vta_nota_credito_items_datos_x_cli_cliente.php",
        data: 'dbsug_cli_cliente_id=' + dbsug_cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_nota_creditos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_nota_creditos').html(data);
            
            setInitVtaNotaCreditoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
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
        url: "ajax/modulos/vta_nota_credito_gestion/get_gral_escenario_por_gral_actividad.php",
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
        url: "ajax/modulos/vta_nota_credito_gestion/get_vta_punto_venta_por_gral_empresa.php",
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

function setChangeCmbVtaPuntoVenta() {
    $('#cmb_vta_punto_venta_id').unbind();
    $('#cmb_vta_punto_venta_id').change(function () {
        refreshBloqueComprobanteTotales();
    });
}

function refreshBloqueComprobanteTotales() {
    var form = $("#form_generar_nota_credito");
    var form2 = $("#form_generar_ws_fe_afip");
    var tipo = $(".datos.generar-nota-credito").attr('tipo');
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/refresh_bloque_vta_nota_credito_gestion_tabla_totales.php",
        data: form.serialize() + '&' + form2.serialize() + '&tipo=' + tipo + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $("#bloque_vta_nota_credito_listado_items_tabla_totales").html(data);
            
            setInitVtaNotaCreditoGestion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeChkTributoOmitirMinimo() {
    $("#chk_tributo_omitir_minimo").unbind();
    $("#chk_tributo_omitir_minimo").click(function (e) {
        refreshBloqueComprobanteTotales();
    });
}


// ----------------------------------------------------------------
// Modal Generar una Nueva Nota de Credito (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos .botonera #btn_set_ws_fe_nota_credito_afip").unbind();
    $(".div_modal .datos.generar-nota-credito .div_datos_generar_nota_creditos .botonera #btn_set_ws_fe_nota_credito_afip").click(function (e) {
        var cli_cliente_id = $(this).attr("cli_cliente_id");
        setControlModalWsFeAfip(cli_cliente_id);
    });
}

function setControlModalWsFeAfip(cli_cliente_id) {

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/control_vta_nota_credito_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id, 
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
                verModalClickWsFeAfip(cli_cliente_id);
            }

            setInitVtaNotaCreditoGestion();
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

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id,
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

            setInitVtaNotaCreditoGestion();
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
function setClickWsAfipGenerarVtaNotaCreditoOnlineBtnSiguiente() {
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_nota_credito_online").unbind();
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_nota_credito_online").click(function (e) {
        setWsAfipGenerarVtaNotaCreditoOnlineBtnSiguiente();
    });
}

function setWsAfipGenerarVtaNotaCreditoOnlineBtnSiguiente() {
    
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
   
    var form = $("#form_generar_nota_credito");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_ws_afip_generar_nota_credito_online.php",
        data: form.serialize() + '&' + form2.serialize() + "&cli_cliente_id=" + cli_cliente_id,
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
                
                refreshAdmAll('vta_nota_credito_gestion', 1);
            }

            setInitVtaNotaCreditoGestion();
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
        var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemNotaCredito(cli_cliente_id, key, $(this));
    });
}

function setBtnAgregarItemNotaCredito(cli_cliente_id, key, elem) {

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_bloque_vta_nota_credito_items_datos_x_cli_cliente_uno.php",
        data: form.serialize() + '&dbsug_cli_cliente_id=' + cli_cliente_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_vta_nota_credito_items').append(data);

            elem.show();

            setInitVtaNotaCreditoGestion();
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
function setClickVtaNotaCreditoGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_nota_credito_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_nota_credito_gestion_ver_ficha').click(function (e) {
        var vta_nota_credito_id = $(this).parents('.adm_botones_acciones').attr('vta_nota_credito_id');
        verModalVtaNotaCreditoGestionVerFicha(vta_nota_credito_id);
    });
}

function verModalVtaNotaCreditoGestionVerFicha(vta_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_ficha.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
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
            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Modificar Datos */
function setClickVtaNotaCreditoGestionModificarDatos() {
    $("#listado_adm_vta_nota_credito_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_vta_nota_credito_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".uno").attr("identificador");
        verModalVtaNotaCreditoGestionModificarDatos(vta_nota_credito_id);
    });
}

function verModalVtaNotaCreditoGestionModificarDatos(vta_nota_credito_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_modificar_datos.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('vta_nota_credito_gestion', vta_nota_credito_id);                    
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            
            setInitVtaNotaCreditoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaCreditoGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".datos").attr("vta_nota_credito_id");
        setVtaNotaCreditoGestionModificarDatosConfirmacion(vta_nota_credito_id);
    });
}

function setVtaNotaCreditoGestionModificarDatosConfirmacion(vta_nota_credito_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_modificar_datos.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id,
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

            setInitVtaNotaCreditoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Enviar por Correo */
function setClickVtaNotaCreditoGestionEnviarPorCorreoNotaCredito() {
    $("#listado_adm_vta_nota_credito_gestion .adm_botones_accion.vta-nota-credito-enviar-por-correo").unbind();
    $("#listado_adm_vta_nota_credito_gestion .adm_botones_accion.vta-nota-credito-enviar-por-correo").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".uno").attr("identificador");
        verModalVtaNotaCreditoGestionBotonEnviarNotaCreditoPorMail(vta_nota_credito_id);
    });
}

function verModalVtaNotaCreditoGestionBotonEnviarNotaCreditoPorMail(vta_nota_credito_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_enviar_nota_credito.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '55%',
                height: 330,
                modal: true,
                title: 'Enviar Nota de Credito',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaCreditoGestionEnviarPorCorreoNotaCreditoBtnEnviarNotaCredito() {
    $(".div_modal .datos.enviar-nota-credito #btn_enviar").unbind();
    $(".div_modal .datos.enviar-nota-credito #btn_enviar").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".datos").attr("vta_nota_credito_id");
        setVtaFacturaGestionEnviarPorCorreoNotaCreditoBtnEnviarNotaCredito(vta_nota_credito_id);
    });
}

function setVtaFacturaGestionEnviarPorCorreoNotaCreditoBtnEnviarNotaCredito(vta_nota_credito_id) {
    var form = $("#form_enviar_nota_credito");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_enviar_nota_credito.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id,
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

            setInitVtaNotaCreditoGestion();
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
function setClickVtaNotaCreditoGestionAnular() {
    $('.db_context .db_context_content .uno.anular-nota-credito').unbind();
    $('.db_context .db_context_content .uno.anular-nota-credito').click(function (e) {
        var vta_nota_credito_id = $(this).parents('.datos').attr('vta_nota_credito_id');
        verModalVtaNotaCreditoGestionAnular(vta_nota_credito_id);
    });
}
function verModalVtaNotaCreditoGestionAnular(vta_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_anular.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
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
                    refreshAdmUno('vta_nota_credito_gestion', vta_nota_credito_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitVtaNotaCreditoGestion();
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
function setClickVtaNotaCreditoGestionAnularConfirmar() {
    $(".div_modal .datos.anular-nota-credito .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-nota-credito .botonera #btn_registrar").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".datos").attr("vta_nota_credito_id");
        setVtaNotaCreditoGestionAnularConfirmar(vta_nota_credito_id);
    });
}

function setVtaNotaCreditoGestionAnularConfirmar(vta_nota_credito_id) {
    var form = $("#form_datos_anular_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_anular.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id,
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

            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/* Seccion mail de ficha */

function setClickVtaNotaCreditoGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-credito-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-credito-ver-cuerpo-correo").click(function (e) {
        var vta_nota_credito_enviado_id = $(this).attr("vta_nota_credito_enviado_id");
        setVtaNotaCreditoGestionVerCuerpoMail(vta_nota_credito_enviado_id);
    });
}

function setVtaNotaCreditoGestionVerCuerpoMail(vta_nota_credito_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_ver_cuerpo_email.php",
        data: 'vta_nota_credito_enviado_id=' + vta_nota_credito_enviado_id,
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
            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaCreditoGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-credito-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-credito-comprobante").click(function (e) {
        var vta_nota_credito_enviado_id = $(this).attr("vta_nota_credito_enviado_id");
        setVtaNotaCreditoGestionVerAdjuntoMail(vta_nota_credito_enviado_id);
    });
}

function setVtaNotaCreditoGestionVerAdjuntoMail(vta_nota_credito_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_ver_adjunto_email.php",
        data: 'vta_nota_credito_enviado_id=' + vta_nota_credito_enviado_id,
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
            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

// -----------------------------------------------------------------------------
// Generar CAE Manualmente
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarNotaCreditoOnline() {
    $('#listado_adm_vta_nota_credito_gestion .adm_botones_accion.vta-nota-credito-gestion-generar-nota-credito-afip').unbind();
    $('#listado_adm_vta_nota_credito_gestion .adm_botones_accion.vta-nota-credito-gestion-generar-nota-credito-afip').click(function (e) {
        var vta_nota_credito_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaCreditoOnline(vta_nota_credito_id);
    });
}

function verModalWsAfipGenerarNotaCreditoOnline(vta_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_ws_afip_generar_nota_credito_online.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Generar Nota Credito Online AFIP',
                close: function () {
                    //setClickAdmRefreshAll();
                    refreshAdmUno('vta_nota_credito_gestion', vta_factura_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

// -----------------------------------------------------------------------------
// Generar CAE Manualmente Confirmacion
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito() {
    $(".div_modal .datos.generar-nota-credito-online-afip .botonera #btn_generar_nota_credito_online_afip").unbind();
    $(".div_modal .datos.generar-nota-credito-online-afip .botonera #btn_generar_nota_credito_online_afip").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".datos").attr("vta_nota_credito_id");
        setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(vta_nota_credito_id);
    });
}

function setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(vta_nota_credito_id) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_nota_credito_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_ws_afip_generar_nota_credito_online_manual.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id,
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
                refreshAdmAll('vta_nota_credito_gestion', pagina);
            }

            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaCreditoOnlineBtnDesvincularNroComprobante(){
    $(".div_modal .datos.generar-nota-credito-online-afip .botonera #btn_comprobante_desvincular_nro_comprobante").unbind();
    $(".div_modal .datos.generar-nota-credito-online-afip .botonera #btn_comprobante_desvincular_nro_comprobante").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".datos").attr("vta_nota_credito_id");
        var nro_comprobante = $(this).parents(".datos").attr("nro_comprobante");
        setWsAfipGenerarNotaCreditoOnlineDesvincularNroComprobante(vta_nota_credito_id, nro_comprobante);
    });
}
function setWsAfipGenerarNotaCreditoOnlineDesvincularNroComprobante(vta_nota_credito_id, nro_comprobante) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_nota_credito_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_ws_afip_anomalia_desvincular_nro_comprobante.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id + '&nro_comprobante=' + nro_comprobante,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            verModalWsAfipGenerarNotaCreditoOnline(vta_nota_credito_id);
            //$(".div_modal").dialog('close');
            //refreshAdmUno('vta_nota_credito_gestion', vta_nota_credito_id)

            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaCreditoOnlineBtnClonarNroComprobante(){
    $(".div_modal .datos.generar-nota-credito-online-afip .botonera #btn_comprobante_clonar_nro_comprobante").unbind();
    $(".div_modal .datos.generar-nota-credito-online-afip .botonera #btn_comprobante_clonar_nro_comprobante").click(function (e) {
        var vta_nota_credito_id = $(this).parents(".datos").attr("vta_nota_credito_id");
        var nro_comprobante = $(this).parents(".datos").attr("nro_comprobante");
        var ws_fe_ope_solicitud_id = $(this).attr('ws_fe_ope_solicitud_id');
        setWsAfipGenerarNotaCreditoOnlineClonarNroComprobante(vta_nota_credito_id, nro_comprobante, ws_fe_ope_solicitud_id);
    });
}
function setWsAfipGenerarNotaCreditoOnlineClonarNroComprobante(vta_nota_credito_id, nro_comprobante, ws_fe_ope_solicitud_id) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_nota_credito_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_ws_afip_anomalia_clonar_nro_comprobante.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id + '&nro_comprobante=' + nro_comprobante + '&ws_fe_ope_solicitud_id=' + ws_fe_ope_solicitud_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            //verModalWsAfipGenerarNotaCreditoOnline(vta_nota_credito_id);
            $(".div_modal").dialog('close');
            refreshAdmUno('vta_nota_credito_gestion', vta_nota_credito_id);

            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

// -----------------------------------------------------------------------------
// Generar ND desde NC
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarNotaDebitoOnline() {
    $('#listado_adm_vta_nota_credito_gestion .adm_botones_accion.vta-nota-credito-gestion-generar-nota-debito-afip').unbind();
    $('#listado_adm_vta_nota_credito_gestion .adm_botones_accion.vta-nota-credito-gestion-generar-nota-debito-afip').click(function (e) {
        var vta_nota_credito_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaDebitoOnline(vta_nota_credito_id);
    });
}

function verModalWsAfipGenerarNotaDebitoOnline(vta_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_credito_gestion/modal_vta_nota_credito_gestion_ws_afip_generar_nota_debito_online.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 500,
                modal: true,
                title: 'Generar Nota de Debito Online AFIP',
                close: function () {
//                    refreshAdmUno('vta_nota_credito_gestion', vta_nota_credito_id);
                    refreshAdmAll('vta_nota_credito_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaNotaCreditoGestion();
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
        var vta_nota_credito_id = $(this).attr("vta_nota_credito_id");
        setWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito(vta_nota_credito_id);
    });
}

function setWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito(vta_nota_credito_id) {

    var form = $("#form_generar_nota_debito_item");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_ws_afip_generar_nota_debito_online.php",
        data: form.serialize() + '&vta_nota_credito_id=' + vta_nota_credito_id,
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

            setInitVtaNotaCreditoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setKeyupModalCalculoItemImporteUnitario() {
    $("#listado_vta_nota_credito_items .tr-item .txt_importe_unitario").unbind();
    $("#listado_vta_nota_credito_items .tr-item .txt_importe_unitario").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var cli_cliente_id = $("#form_generar_nota_credito").attr("cli_cliente_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_calculo_item_importe_unitario.php",
            data: "key=" + key + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_unitario=" + importe_unitario + '&cli_cliente_id=' + cli_cliente_id,
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

                setInitVtaNotaCreditoGestion();
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
    $("#listado_vta_nota_credito_items .tr-item .txt_importe_total").unbind();
    $("#listado_vta_nota_credito_items .tr-item .txt_importe_total").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_total = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var cli_cliente_id = $("#form_generar_nota_credito").attr("cli_cliente_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_calculo_item_importe_total.php",
            data: "key=" + key + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_total=" + importe_total + '&cli_cliente_id=' + cli_cliente_id,
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

                setInitVtaNotaCreditoGestion();
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
    $("#listado_vta_nota_credito_items .tr-item .gral_tipo_iva_id").unbind();
    $("#listado_vta_nota_credito_items .tr-item .gral_tipo_iva_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).parents("tr").find(".txt_importe_unitario").val();
        var importe_total = $(this).parents("tr").find(".txt_importe_total").val();
        var gral_tipo_iva_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_nota_credito_gestion/set_vta_nota_credito_gestion_calculo_item_cmb.php",
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

                setInitVtaNotaCreditoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setChangeCmbVtaNotaCreditoConcepto() {
    $("#listado_vta_nota_credito_items .tr-item .vta_nota_credito_concepto_id").unbind();
    $("#listado_vta_nota_credito_items .tr-item .vta_nota_credito_concepto_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var vta_nota_credito_concepto_id = $(this).val();

        if (vta_nota_credito_concepto_id !== "") {
            $("#cmb_vta_nota_credito_concepto_id[" + key + "]").removeClass('input-error');
            $("#cmb_vta_nota_credito_concepto_id_" + key + "_error").html("");
        }
    });
}

function setKeyupModalDescripcionItem() {
    $("#listado_vta_nota_credito_items .tr-item .txt_descripcion").unbind();
    $("#listado_vta_nota_credito_items .tr-item .txt_descripcion").keyup(function (e) {

        var key = $(this).parents("tr").attr("key");
        var descripcion = $(this).val();

        if (descripcion !== "") {
            $("#txt_descripcion_" + key).removeClass('input-error');
            $("#txt_descripcion_" + key + "_error").html("");
        }
    });
}