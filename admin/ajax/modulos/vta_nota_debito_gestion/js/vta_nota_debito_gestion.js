// archivo js del modulo 'vta_nota_debito'
$(function ($) {
    setInitVtaNotaDebitoGestion();
});

function setInitVtaNotaDebitoGestion() {
    // Nueva nota de debito (+)
    setClickGenerarVtaNotaDebito();
    setChangeCmbFiltroCliCliente();
    
    setClickWsFeAfip();
    setClickWsAfipGenerarVtaNotaDebitoOnlineBtnSiguiente();

    // Botones Accion
    setClickVtaNotaDebitoGestionVerFicha();
    setClickVtaNotaDebitoGestionModificarDatos();
    setClickVtaNotaDebitoGestionModificarDatosConfirmacion();
    setClickVtaNotaDebitoGestionEnviarPorCorreoNotaDebito();
    setClickVtaNotaDebitoGestionEnviarPorCorreoNotaDebitoBtnEnviarNotaDebito();
    setClickVtaNotaDebitoGestionAnular();
    setClickVtaNotaDebitoGestionAnularConfirmar();

    setClickWsAfipGenerarNotaCreditoOnline();
    setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito();

    // Modal Agregar NC
    setClickBtnAgregarItemNotaDebito();
    setClickBtnQuitarItemNotaDebito();
    setKeyupModalCalculoItemImporteUnitario();
    setKeyupModalCalculoItemImporteTotal();
    setChangeCmbGralTipoIvaItem();
    setChangeCmbVtaNotaDebitoConcepto();
    setKeyupModalDescripcionItem();

    // Modal Ficha Tab email
    setClickVtaNotaDebitoGestionVerCuerpoMail();
    setClickVtaNotaDebitoGestionVerAdjuntoMail();
    
    // reintento manual de obtencion de CAE
    setClickWsAfipGenerarNotaDebitoOnline();
    setClickWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito();
    setClickWsAfipGenerarNotaDebitoOnlineBtnDesvincularNroComprobante();
    setClickWsAfipGenerarNotaDebitoOnlineBtnClonarNroComprobante();

    // Seccion filtros Top
    setChangeCmbFiltroVtaNotaDebitoCodigo();
    setChangeCmbFiltroVtaNotaDebitoNumeroNotaDebito();
    setChangeCmbFiltroVtaNotaDebitoCae();
    setChangeCmbFiltroVtaNotaDebitoCliCliente();
    setChangeCmbFiltroVtaNotaDebitoVtaTipoNotaDebito();
    setChangeCmbFiltroVtaNotaDebitoVtaGralCondicionIva();
    setChangeCmbFiltroVtaNotaDebitoVtaTipoEstado();

    // Modal
    setChangeCmbGralActividad();
    setChangeCmbGralEmpresa();
    setChangeCmbVtaPuntoVenta();
    
    // omitir minimo en tributo
    setChangeChkTributoOmitirMinimo();
}

function setChangeCmbFiltroVtaNotaDebitoCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_nota_debito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaDebitoCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_nota_debito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaDebitoNumeroNotaDebito() {
    $("#txt_buscador_numero_nota_debito").unbind();
    $("#txt_buscador_numero_nota_debito").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_nota_debito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaDebitoCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_nota_debito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaDebitoVtaTipoNotaDebito() {
    $("#cmb_filtro_vta_tipo_nota_debito_id").unbind();
    $("#cmb_filtro_vta_tipo_nota_debito_id").change(function () {
        setAdmBuscadorTop("vta_nota_debito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaDebitoVtaGralCondicionIva() {
    $("#cmb_filtro_gral_condicion_iva_id").unbind();
    $("#cmb_filtro_gral_condicion_iva_id").change(function () {
        setAdmBuscadorTop("vta_nota_debito_gestion");
    });
}
function setChangeCmbFiltroVtaNotaDebitoVtaTipoEstado() {
    $("#cmb_filtro_vta_nota_debito_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_nota_debito_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_nota_debito_gestion");
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
        url: "ajax/modulos/vta_nota_debito_gestion/get_gral_escenario_por_gral_actividad.php",
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
        url: "ajax/modulos/vta_nota_debito_gestion/get_vta_punto_venta_por_gral_empresa.php",
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
    var form = $("#form_generar_nota_debito");
    var form2 = $("#form_generar_ws_fe_afip");
    var tipo = $(".datos.generar-nota-debito").attr('tipo');
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/refresh_bloque_vta_nota_debito_gestion_tabla_totales.php",
        data: form.serialize() + '&' + form2.serialize() + '&tipo=' + tipo + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $("#bloque_vta_nota_debito_listado_items_tabla_totales").html(data);
            
            setInitVtaNotaDebitoGestion();
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

function setClickGenerarVtaNotaDebito() {
    $('.div_listado_buscador .col .boton.generar_nota_debito').unbind();
    $('.div_listado_buscador .col .boton.generar_nota_debito').click(function (e) {
        verModalGenerarVtaNotaDebito();
    });
}

function verModalGenerarVtaNotaDebito() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_debito_gestion/modal_generar_nota_debito.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 800,
                modal: true,
                title: 'Generar Nota de Debito',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaNotaDebitoGestion();
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
            refreshBloqueVtaNotaDebitoItem(dbsug_cli_cliente_id);
        }
    });
}

function refreshBloqueVtaNotaDebitoItem(dbsug_cli_cliente_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_nota_debito_gestion/bloque_vta_nota_debito_items_datos_x_cli_cliente.php",
        data: 'dbsug_cli_cliente_id=' + dbsug_cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_nota_debitos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_nota_debitos').html(data);
            setInitVtaNotaDebitoGestion();
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
// Modal Generar una Nueva Nota de Debito (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {
    $(".div_modal .datos.generar-nota-debito .div_datos_generar_nota_debitos .botonera #btn_set_ws_fe_nota_debito_afip").unbind();
    $(".div_modal .datos.generar-nota-debito .div_datos_generar_nota_debitos .botonera #btn_set_ws_fe_nota_debito_afip").click(function (e) {
        var cli_cliente_id = $(this).attr("cli_cliente_id");
        setControlModalWsFeAfip(cli_cliente_id);
    });
}

function setControlModalWsFeAfip(cli_cliente_id) {

    var form = $("#form_generar_nota_debito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/control_nota_debito_gestion_ws_fe_afip.php",
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

            setInitVtaNotaDebitoGestion();
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

    var form = $("#form_generar_nota_debito");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '95%',
                height: 900,
                modal: true,
                title: 'Generar Nota de Debito',
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitVtaNotaDebitoGestion();
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
// Modal Generar una Nueava Nota de Debito (Boton + del buscador top)
// Boton siguiente
// Boton Generar Nota Debito Online
// ----------------------------------------------------------------
function setClickWsAfipGenerarVtaNotaDebitoOnlineBtnSiguiente() {
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_nota_debito_online").unbind();
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_nota_debito_online").click(function (e) {
        setWsAfipGenerarVtaNotaDebitoOnlineBtnSiguiente();
    });
}

function setWsAfipGenerarVtaNotaDebitoOnlineBtnSiguiente() {

    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    
    var form = $("#form_generar_nota_debito");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_ws_afip_generar_nota_debito_online.php",
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
                
                refreshAdmAll('vta_nota_debito_gestion', 1);
            }

            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnAgregarItemNotaDebito() {
    $(".div_modal .datos.generar-nota-debito .div_datos_generar_nota_debitos #form_generar_nota_debito .boton.agregar_item_nota_debito").unbind();
    $(".div_modal .datos.generar-nota-debito .div_datos_generar_nota_debitos #form_generar_nota_debito .boton.agregar_item_nota_debito").click(function (e) {
        var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemNotaDebito(cli_cliente_id, key, $(this));
    });
}

function setBtnAgregarItemNotaDebito(cli_cliente_id, key, elem) {

    var form = $("#form_generar_nota_debito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_bloque_vta_nota_debito_items_datos_x_cli_cliente_uno.php",
        data: form.serialize() + '&dbsug_cli_cliente_id=' + cli_cliente_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_vta_nota_debito_items').append(data);

            elem.show();

            setInitVtaNotaDebitoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarItemNotaDebito() {
    $(".div_modal .datos.generar-nota-debito .div_datos_generar_nota_debitos #form_generar_nota_debito .boton.quitar_item_nota_debito").unbind();
    $(".div_modal .datos.generar-nota-debito .div_datos_generar_nota_debitos #form_generar_nota_debito .boton.quitar_item_nota_debito").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}

/*
 Ver Ficha de la NC
 */
function setClickVtaNotaDebitoGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_nota_debito_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_nota_debito_gestion_ver_ficha').click(function (e) {
        var vta_nota_debito_id = $(this).parents('.adm_botones_acciones').attr('vta_nota_debito_id');
        verModalVtaNotaDebitoGestionVerFicha(vta_nota_debito_id);
    });
}

function verModalVtaNotaDebitoGestionVerFicha(vta_nota_debito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_ficha.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Nota de Debito',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaDebitoGestionEnviarPorCorreoNotaDebito() {
    $("#listado_adm_vta_nota_debito_gestion .adm_botones_accion.vta-nota-debito-enviar-por-correo").unbind();
    $("#listado_adm_vta_nota_debito_gestion .adm_botones_accion.vta-nota-debito-enviar-por-correo").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".uno").attr("identificador");
        verModalVtaNotaDebitoGestionBotonEnviarNotaDebitoPorMail(vta_nota_debito_id);
    });
}

function verModalVtaNotaDebitoGestionBotonEnviarNotaDebitoPorMail(vta_nota_debito_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_enviar_nota_debito.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '55%',
                height: 330,
                modal: true,
                title: 'Enviar Nota de Debito',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            setInitVtaNotaDebitoGestion();
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
function setClickVtaNotaDebitoGestionModificarDatos() {
    $("#listado_adm_vta_nota_debito_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_vta_nota_debito_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".uno").attr("identificador");
        verModalVtaNotaDebitoGestionModificarDatos(vta_nota_debito_id);
    });
}

function verModalVtaNotaDebitoGestionModificarDatos(vta_nota_debito_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_modificar_datos.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('vta_nota_debito_gestion', vta_nota_debito_id);                    
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            
            setInitVtaNotaDebitoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaDebitoGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".datos").attr("vta_nota_debito_id");
        setVtaNotaDebitoGestionModificarDatosConfirmacion(vta_nota_debito_id);
    });
}

function setVtaNotaDebitoGestionModificarDatosConfirmacion(vta_nota_debito_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_modificar_datos.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id,
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

            setInitVtaNotaDebitoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaDebitoGestionEnviarPorCorreoNotaDebitoBtnEnviarNotaDebito() {
    $(".div_modal .datos.enviar-nota-debito #btn_enviar").unbind();
    $(".div_modal .datos.enviar-nota-debito #btn_enviar").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".datos").attr("vta_nota_debito_id");
        setVtaFacturaGestionEnviarPorCorreoNotaDebitoBtnEnviarNotaDebito(vta_nota_debito_id);
    });
}

function setVtaFacturaGestionEnviarPorCorreoNotaDebitoBtnEnviarNotaDebito(vta_nota_debito_id) {
    var form = $("#form_enviar_nota_debito");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_enviar_nota_debito.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id,
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

            setInitVtaNotaDebitoGestion();
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
function setClickVtaNotaDebitoGestionAnular() {
    $('.db_context .db_context_content .uno.anular-nota-debito').unbind();
    $('.db_context .db_context_content .uno.anular-nota-debito').click(function (e) {
        var vta_nota_debito_id = $(this).parents('.datos').attr('vta_nota_debito_id');
        verModalVtaNotaDebitoGestionAnular(vta_nota_debito_id);
    });
}
function verModalVtaNotaDebitoGestionAnular(vta_nota_debito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_anular.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
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
                    refreshAdmUno('vta_nota_debito_gestion', vta_nota_debito_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitVtaNotaDebitoGestion();
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
function setClickVtaNotaDebitoGestionAnularConfirmar() {
    $(".div_modal .datos.anular-nota-debito .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-nota-debito .botonera #btn_registrar").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".datos").attr("vta_nota_debito_id");
        setVtaNotaDebitoGestionAnularConfirmar(vta_nota_debito_id);
    });
}

function setVtaNotaDebitoGestionAnularConfirmar(vta_nota_debito_id) {
    var form = $("#form_datos_anular_nota_debito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_anular.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id,
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

            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/* Seccion mail de ficha */

function setClickVtaNotaDebitoGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-debito-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-debito-ver-cuerpo-correo").click(function (e) {
        var vta_nota_debito_enviado_id = $(this).attr("vta_nota_debito_enviado_id");
        setVtaNotaDebitoGestionVerCuerpoMail(vta_nota_debito_enviado_id);
    });
}

function setVtaNotaDebitoGestionVerCuerpoMail(vta_nota_debito_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_ver_cuerpo_email.php",
        data: 'vta_nota_debito_enviado_id=' + vta_nota_debito_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'Nota de Debito',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaDebitoGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-debito-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-nota-debito-comprobante").click(function (e) {
        var vta_nota_debito_enviado_id = $(this).attr("vta_nota_debito_enviado_id");
        setVtaNotaDebitoGestionVerAdjuntoMail(vta_nota_debito_enviado_id);
    });
}

function setVtaNotaDebitoGestionVerAdjuntoMail(vta_nota_debito_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_ver_adjunto_email.php",
        data: 'vta_nota_debito_enviado_id=' + vta_nota_debito_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'Nota de Debito Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaNotaDebitoGestion();
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
function setClickWsAfipGenerarNotaDebitoOnline() {
    $('#listado_adm_vta_nota_debito_gestion .adm_botones_accion.vta-nota-debito-gestion-generar-nota-debito-afip').unbind();
    $('#listado_adm_vta_nota_debito_gestion .adm_botones_accion.vta-nota-debito-gestion-generar-nota-debito-afip').click(function (e) {
        var vta_nota_debito_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaDebitoOnline(vta_nota_debito_id);
    });
}

function verModalWsAfipGenerarNotaDebitoOnline(vta_nota_debito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_ws_afip_generar_nota_debito_online.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Generar Nota Debito Online AFIP',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaNotaDebitoGestion();
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
function setClickWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito() {
    $(".div_modal .datos.generar-nota-debito-online-afip .botonera #btn_generar_nota_debito_online_afip").unbind();
    $(".div_modal .datos.generar-nota-debito-online-afip .botonera #btn_generar_nota_debito_online_afip").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".datos").attr("vta_nota_debito_id");
        setWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito(vta_nota_debito_id);
    });
}

function setWsAfipGenerarNotaDebitoOnlineBtnGenerarNotaDebito(vta_nota_debito_id) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_nota_debito_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_ws_afip_generar_nota_debito_online_manual.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id,
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
                refreshAdmAll('vta_nota_debito_gestion', pagina);
            }

            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaDebitoOnlineBtnDesvincularNroComprobante(){
    $(".div_modal .datos.generar-nota-debito-online-afip .botonera #btn_comprobante_desvincular_nro_comprobante").unbind();
    $(".div_modal .datos.generar-nota-debito-online-afip .botonera #btn_comprobante_desvincular_nro_comprobante").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".datos").attr("vta_nota_debito_id");
        var nro_comprobante = $(this).parents(".datos").attr("nro_comprobante");
        setWsAfipGenerarNotaDebitoOnlineDesvincularNroComprobante(vta_nota_debito_id, nro_comprobante);
    });
}
function setWsAfipGenerarNotaDebitoOnlineDesvincularNroComprobante(vta_nota_debito_id, nro_comprobante) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_nota_debito_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_ws_afip_anomalia_desvincular_nro_comprobante.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id + '&nro_comprobante=' + nro_comprobante,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            verModalWsAfipGenerarNotaDebitoOnline(vta_nota_debito_id);
            //$(".div_modal").dialog('close');
            //refreshAdmUno('vta_nota_debito_gestion', vta_nota_debito_id)

            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaDebitoOnlineBtnClonarNroComprobante(){
    $(".div_modal .datos.generar-nota-debito-online-afip .botonera #btn_comprobante_clonar_nro_comprobante").unbind();
    $(".div_modal .datos.generar-nota-debito-online-afip .botonera #btn_comprobante_clonar_nro_comprobante").click(function (e) {
        var vta_nota_debito_id = $(this).parents(".datos").attr("vta_nota_debito_id");
        var nro_comprobante = $(this).parents(".datos").attr("nro_comprobante");
        var ws_fe_ope_solicitud_id = $(this).attr('ws_fe_ope_solicitud_id');
        setWsAfipGenerarNotaDebitoOnlineClonarNroComprobante(vta_nota_debito_id, nro_comprobante, ws_fe_ope_solicitud_id);
    });
}
function setWsAfipGenerarNotaDebitoOnlineClonarNroComprobante(vta_nota_debito_id, nro_comprobante, ws_fe_ope_solicitud_id) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_nota_debito_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_ws_afip_anomalia_clonar_nro_comprobante.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id + '&nro_comprobante=' + nro_comprobante + '&ws_fe_ope_solicitud_id=' + ws_fe_ope_solicitud_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            //verModalWsAfipGenerarNotaDebitoOnline(vta_nota_debito_id);
            $(".div_modal").dialog('close');
            refreshAdmUno('vta_nota_debito_gestion', vta_nota_debito_id);

            setInitVtaNotaDebitoGestion();
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
// Generar NC desde ND
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarNotaCreditoOnline() {
    $('#listado_adm_vta_nota_debito_gestion .adm_botones_accion.vta-nota-debito-gestion-generar-nota-credito-afip').unbind();
    $('#listado_adm_vta_nota_debito_gestion .adm_botones_accion.vta-nota-debito-gestion-generar-nota-credito-afip').click(function (e) {
        var vta_nota_debito_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaCreditoOnline(vta_nota_debito_id);
    });
}

function verModalWsAfipGenerarNotaCreditoOnline(vta_nota_debito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_nota_debito_gestion/modal_vta_nota_debito_gestion_ws_afip_generar_nota_credito_online.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 500,
                modal: true,
                title: 'Generar Nota de Credito Online AFIP',
                close: function () {
//                    refreshAdmUno('vta_nota_debito_gestion', vta_nota_debito_id);
                    refreshAdmAll('vta_nota_debito_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito() {
    $(".div_modal .botonera #btn_generar_nota_credito").unbind();
    $(".div_modal .botonera #btn_generar_nota_credito").click(function (e) {
        var vta_nota_debito_id = $(this).attr("vta_nota_debito_id");
        setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(vta_nota_debito_id);
    });
}

function setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(vta_nota_debito_id) {

    var form = $("#form_generar_nota_credito_item");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_ws_afip_generar_nota_credito_online.php",
        data: form.serialize() + '&vta_nota_debito_id=' + vta_nota_debito_id,
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

            setInitVtaNotaDebitoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function setKeyupModalCalculoItemImporteUnitario() {
    $("#listado_vta_nota_debito_items .tr-item .txt_importe_unitario").unbind();
    $("#listado_vta_nota_debito_items .tr-item .txt_importe_unitario").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var cli_cliente_id = $("#form_generar_nota_debito").attr("cli_cliente_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_calculo_item_importe_unitario.php",
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

                setInitVtaNotaDebitoGestion();
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
    $("#listado_vta_nota_debito_items .tr-item .txt_importe_total").unbind();
    $("#listado_vta_nota_debito_items .tr-item .txt_importe_total").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_total = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var cli_cliente_id = $("#form_generar_nota_debito").attr("cli_cliente_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_calculo_item_importe_total.php",
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

                setInitVtaNotaDebitoGestion();
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
    $("#listado_vta_nota_debito_items .tr-item .gral_tipo_iva_id").unbind();
    $("#listado_vta_nota_debito_items .tr-item .gral_tipo_iva_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).parents("tr").find(".txt_importe_unitario").val();
        var importe_total = $(this).parents("tr").find(".txt_importe_total").val();
        var gral_tipo_iva_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_nota_debito_gestion/set_vta_nota_debito_gestion_calculo_item_cmb.php",
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

                setInitVtaNotaDebitoGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setChangeCmbVtaNotaDebitoConcepto() {
    $("#listado_vta_nota_debito_items .tr-item .vta_nota_debito_concepto_id").unbind();
    $("#listado_vta_nota_debito_items .tr-item .vta_nota_debito_concepto_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var vta_nota_debito_concepto_id = $(this).val();

        if (vta_nota_debito_concepto_id !== "") {
            $("#cmb_vta_nota_debito_concepto_id[" + key + "]").removeClass('input-error');
            $("#cmb_vta_nota_debito_concepto_id_" + key + "_error").html("");
        }
    });
}

function setKeyupModalDescripcionItem() {
    $("#listado_vta_nota_debito_items .tr-item .txt_descripcion").unbind();
    $("#listado_vta_nota_debito_items .tr-item .txt_descripcion").keyup(function (e) {

        var key = $(this).parents("tr").attr("key");
        var descripcion = $(this).val();

        if (descripcion !== "") {
            $("#txt_descripcion_" + key).removeClass('input-error');
            $("#txt_descripcion_" + key + "_error").html("");
        }
    });
}