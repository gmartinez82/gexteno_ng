// archivo js del modulo 'pde_factura'
$(function ($) {
    setInitPdeFacturaGestion();
});

function setInitPdeFacturaGestion() {

    setClickGenerarFactura();
    setClickGenerarFacturaItem();

    setClickWsFeAfip();
    setClickBtnGenerarWsFeAfip();
    //setClickPdeOcBtnGenerarFactura();

    // Buscadores modal generar factura
    setChangeCmbFiltroPrvProveedor();
    setKeyupModalBuscadorOC();

    // seleccion de las ordenes de venta del modal generar factura
    setCheckPdeOcAll();
    setCkeckPdeOcUno();

    // Seccion acciones
    setClickPdeFacturaGestionVerFicha();
    setClickPdeFacturaGestionAnular();
    setClickPdeFacturaGestionAnularConfirmar();
    setClickPdeFacturaGestionModificarDatos();
    setClickPdeFacturaGestionModificarDatosConfirmacion();
    setClickPdeFacturaGestionEditarNotaInterna();
    setClickPdeFacturaGestionEditarNotaInternaConfirmar();
    setClickPdeFacturaGestionModificarOCs();
    setClickPdeFacturaGestionModificarOCsConfirmacion();
    setClickPdeFacturaGestionModificarOCsOrdenarItems();

    setClickPdeFacturaGestionVerAdjuntoMail();
    setClickPdeFacturaGestionVerCuerpoMail();

    setClickWsAfipGenerarFacturaOnline();
    setClickWsAfipGenerarFacturaOnlineBtnGenerarFactura();

    setClickWsAfipGenerarNotaCreditoOnline();
    setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito();
    setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem();

    // Seccion filtros Top
    setChangeCmbFiltroPdeFacturaCodigo();
    setChangeCmbFiltroPdeFacturaNumeroFactura();
    setChangeCmbFiltroPdeFacturaCae();
    setChangeCmbFiltroPdeFacturaPrvProveedor();
    setChangeCmbFiltroPdeFacturaPdeTipoFactura();
    setChangeCmbFiltroPdeFacturaPdeTipoEstado();

    // Modal Gestion Item Factura
    setClickBtnAgregarItemFactura();
    setClickBtnQuitarItemFactura();
    setKeyupModalCalculoItemImporteUnitario();
    setKeyupModalCalculoItemImporteTotal();
    setChangeCmbGralTipoIvaItem();
    setChangeCmbPdeFacturaConcepto();
    setKeyupModalDescripcionItem();

    // recalculo del total en p1
    setClickModalPdeFacturaP1TxtCantidad();
    setClickModalPdeFacturaP1TxtImporteUnitario();
    setClickModalPdeFacturaP1TxtPorcentajeDescuento();

    // recalculo de total
    setClickModalTotalesTxtTibuto();

    // Modal
    setChangeCmbGralActividad();
    setChangeCmbGralEmpresa();

    // acciones masivas
    setCheckPdeFacturaAll();

    // acciones top
    setClickPdeFacturaTopRegistrarDescuentoFinanciero();
    setClickPdeFacturaTopRegistrarDescuentoFinancieroConfirmacion();

    // Modificacion de Datos
    setChangeCmbPrvProveedor();

    // Reclamos
    setClickVerModalPdeOcReclamoAgregar();
    setClickVerModalPdeOcReclamoAgregarGuardar();
    setClickVerModalPdeOcReclamos();

    // Desvincular
    setClickVerModalPdeFacturaPdeOcDesvincular();


    // Centros de Costo
    setClickModalImputarCentroCostoTxtPorcentajeAfectado();
    setClickModalImputarCentroCostoBtnProrratear();
    setClickModalImputarCentroCostoBtnCentroCosto100Porciento();
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
        url: "ajax/modulos/pde_factura_gestion/get_gral_escenario_por_gral_actividad.php",
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
        url: "ajax/modulos/pde_factura_gestion/get_pde_centro_pedido_por_gral_empresa.php",
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

function setChangeCmbFiltroPdeFacturaCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_factura_gestion");
    });
}

function setChangeCmbFiltroPdeFacturaCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_factura_gestion");
    });
}
function setChangeCmbFiltroPdeFacturaNumeroFactura() {
    $("#txt_buscador_numero_factura").unbind();
    $("#txt_buscador_numero_factura").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("pde_factura_gestion");
    });
}
function setChangeCmbFiltroPdeFacturaPrvProveedor() {
    $("#cmb_filtro_prv_proveedor_id").unbind();
    $("#cmb_filtro_prv_proveedor_id").change(function () {
        setAdmBuscadorTop("pde_factura_gestion");
    });
}
function setChangeCmbFiltroPdeFacturaPdeTipoFactura() {
    $("#cmb_filtro_pde_tipo_factura_id").unbind();
    $("#cmb_filtro_pde_tipo_factura_id").change(function () {
        setAdmBuscadorTop("pde_factura_gestion");
    });
}
function setChangeCmbFiltroPdeFacturaPdeTipoEstado() {
    $("#cmb_filtro_pde_factura_tipo_estado_id").unbind();
    $("#cmb_filtro_pde_factura_tipo_estado_id").change(function () {
        setAdmBuscadorTop("pde_factura_gestion");
    });
}


// ----------------------------------------------------------------
// Modal Generar una Nueva Factura
// ----------------------------------------------------------------
function setClickGenerarFactura() {
    $('.div_listado_buscador .col .boton.generar_factura').unbind();
    $('.div_listado_buscador .col .boton.generar_factura').click(function (e) {

        var tipo = 'orden-venta';
        verModalGenerarFactura(tipo);
    });
}

// ----------------------------------------------------------------
// Modal Generar una Nueva Factura de Item
// ----------------------------------------------------------------
function setClickGenerarFacturaItem() {
    $('.div_listado_buscador .col .boton.generar_factura_item').unbind();
    $('.div_listado_buscador .col .boton.generar_factura_item').click(function (e) {

        var tipo = 'item';
        verModalGenerarFactura(tipo);
    });
}

function verModalGenerarFactura(tipo) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_generar_factura.php",
        data: 'tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Generar Factura de Compra',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeFacturaGestion();
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
// Modal Generar una Nueva Factura (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {

    $(".div_datos_generar_facturas .botonera #btn_set_ws_fe_afip").unbind();
    $(".div_datos_generar_facturas .botonera #btn_set_ws_fe_afip").click(function () {
        var tipo = $(".datos.generar-factura").attr('tipo');
        setControlModalWsFeAfip(tipo);
    });
}

function setControlModalWsFeAfip(tipo) {

    var form = $("#form_generar_factura");
    var prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/control_pde_factura_gestion_ws_fe_afip.php",
        data: form.serialize() + '&tipo=' + tipo + '&prv_proveedor_id=' + prv_proveedor_id,
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

            setInitPdeFacturaGestion();
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

    var form = $("#form_generar_factura");
    var prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_ws_fe_afip.php",
        data: form.serialize() + '&tipo=' + tipo + '&prv_proveedor_id=' + prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '95%',
                height: 900,
                modal: true,
                title: 'Generar Factura de Compra',
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

            setInitPdeFacturaGestion();
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
// Modal Generar una Nueava Factura (Boton + del buscador top)
// Boton siguiente
// Boton Generar Factura Online
// ----------------------------------------------------------------
function setClickBtnGenerarWsFeAfip() {
    $(".datos.generar-ws-fe-afip .botonera #btn_generar_factura_online").unbind();
    $(".datos.generar-ws-fe-afip .botonera #btn_generar_factura_online").click(function () {
        var tipo = $(".datos.generar-ws-fe-afip").attr('tipo');
        setPdeOcBtnGenerarFactura(tipo);
    });
}

function setPdeOcBtnGenerarFactura(tipo) {

    var prv_proveedor_id = $("#cmb_prv_proveedor_id").val();

    var form = $("#form_generar_factura");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_generar_factura.php",
        data: form.serialize() + '&' + form2.serialize() + '&tipo=' + tipo + '&prv_proveedor_id=' + prv_proveedor_id,
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

                refreshAdmAll('pde_factura_gestion', 1);
            }

            setInitPdeFacturaGestion();
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

        var tipo = $('.datos.generar-factura').attr('tipo');

        if (dbsug_prv_proveedor_id != '') {
            if (tipo == 'orden-venta') {
                refreshListOc();
            } else if (tipo == 'item') {
                refreshBloquePdeFacturaItem();
            }
        }
    });
}

function setKeyupModalBuscadorOC() {
    var timeout;
    $("#txt_buscador_filtros_varios").unbind();
    $("#txt_buscador_filtros_varios").keyup(function (e) {
        var txt_buscador_filtros_varios = $(this).val();
        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.keyCode === 13) {
            if (txt_buscador_filtros_varios.length >= 2) {
                timeout = setTimeout(function () {
                    refreshListOcNoFacturadas();
                }, 500);
            } else if (txt_buscador_filtros_varios.length == 0) {
                timeout = setTimeout(function () {
                    refreshListOcNoFacturadas();
                }, 500);
            }
        }
    });
}

function refreshListOcUno(pde_oc_id, cont) {

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/refresh_bloque_pde_oc_listado_uno.php",
        data: 'pde_oc_id=' + pde_oc_id + '&cont=' + cont,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#tr_pde_oc_uno_' + pde_oc_id).html(img_loading);
        },
        success: function (data) {
            $('#tr_pde_oc_uno_' + pde_oc_id).html(data);

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshListOc() {
    // -------------------------------------------------------------------------
    // utilizado para facturas de OC
    // -------------------------------------------------------------------------    
    var dbsug_prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();
    var prv_proveedor_id = $(".div_datos_generar_facturas").attr('prv_proveedor_id');
    var pde_factura_id = $(".div_datos_generar_facturas").attr('pde_factura_id');
    var txt_buscador_filtros_varios = ($("#txt_buscador_filtros_varios").length > 0) ? $("#txt_buscador_filtros_varios").val() : '';

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/bloque_pde_oc_listado_datos_x_prv_proveedor.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id + '&prv_proveedor_id=' + prv_proveedor_id + '&pde_factura_id=' + pde_factura_id + '&txt_buscador_filtros_varios=' + txt_buscador_filtros_varios,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_facturas').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_facturas').html(data);

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshListOcNoFacturadas() {
    // -------------------------------------------------------------------------
    // utilizado para facturas de OC No Facturadas
    // -------------------------------------------------------------------------    
    var dbsug_prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();
    var prv_proveedor_id = $(".div_datos_generar_facturas").attr('prv_proveedor_id');
    var pde_factura_id = $(".div_datos_generar_facturas").attr('pde_factura_id');
    var txt_buscador_filtros_varios = ($("#txt_buscador_filtros_varios").length > 0) ? $("#txt_buscador_filtros_varios").val() : '';

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/refresh_facturar_bloque_oc_no_facturadas.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id + '&prv_proveedor_id=' + prv_proveedor_id + '&pde_factura_id=' + pde_factura_id + '&txt_buscador_filtros_varios=' + txt_buscador_filtros_varios,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_facturas .bloque-oc-no-facturadas').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_facturas .bloque-oc-no-facturadas').html(data);

            refreshListOcFacturadas();

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshListOcFacturadas() {
    // -------------------------------------------------------------------------
    // utilizado para facturas de OC Facturadas
    // -------------------------------------------------------------------------    
    var dbsug_prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();
    var prv_proveedor_id = $(".div_datos_generar_facturas").attr('prv_proveedor_id');
    var pde_factura_id = $(".div_datos_generar_facturas").attr('pde_factura_id');
    var txt_buscador_filtros_varios = ($("#txt_buscador_filtros_varios").length > 0) ? $("#txt_buscador_filtros_varios").val() : '';

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/refresh_facturar_bloque_oc_facturadas.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id + '&prv_proveedor_id=' + prv_proveedor_id + '&pde_factura_id=' + pde_factura_id + '&txt_buscador_filtros_varios=' + txt_buscador_filtros_varios,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_facturas .bloque-oc-facturadas').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_facturas .bloque-oc-facturadas').html(data);

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function refreshBloquePdeFacturaItem() {
    // -------------------------------------------------------------------------
    // utilizado para facturas por item
    // -------------------------------------------------------------------------
    var dbsug_prv_proveedor_id = $("#dbsug_prv_proveedor_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/bloque_pde_factura_items_datos_x_prv_proveedor.php",
        data: 'dbsug_prv_proveedor_id=' + dbsug_prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_nota_creditos').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_facturas').html(data);

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckPdeOcAll() {
    $('#listado_pde_factura_generar_factura #chk_pde_oc_select_all').unbind();
    $('#listado_pde_factura_generar_factura #chk_pde_oc_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_pde_factura_generar_factura .chk_pde_oc").attr('checked', true);
        } else {
            $("#listado_pde_factura_generar_factura .chk_pde_oc").attr('checked', false);
        }
        $("#listado_pde_factura_generar_factura").find(".chk_pde_oc").trigger('change');
    });
}

function setCkeckPdeOcUno() {
    $("#listado_pde_factura_generar_factura .chk_pde_oc").unbind();
    $("#listado_pde_factura_generar_factura .chk_pde_oc").change(function () {
        var pde_oc_id = $(this).parents('.uno').attr('pde_oc_id');
        if ($(this).is(':checked')) {

            // se muestra la caja de texto de cantidad
            $("#txt_pde_oc_cantidad_" + pde_oc_id).show();
            $("#txt_pde_oc_importe_unitario_" + pde_oc_id).show();
            $("#txt_pde_oc_porcentaje_descuento_" + pde_oc_id).show();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
        } else {
            // se oculta la caja de texto de cantidad
            $("#txt_pde_oc_cantidad_" + pde_oc_id).hide();
            $("#txt_pde_oc_importe_unitario_" + pde_oc_id).hide();
            $("#txt_pde_oc_porcentaje_descuento_" + pde_oc_id).hide();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
        }

        setRecalcularTotalComprobanteP1();
    });
}

/*
 Ver Ficha de la factura
 */
function setClickPdeFacturaGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.pde_factura_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.pde_factura_gestion_ver_ficha').click(function (e) {
        var pde_factura_id = $(this).parents('.adm_botones_acciones').attr('pde_factura_id');
        verModalPdeFacturaGestionVerFicha(pde_factura_id);
    });
}

function verModalPdeFacturaGestionVerFicha(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_ficha.php",
        data: 'pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Factura',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdeFacturaGestionModificarDatos() {
    $('.db_context .db_context_content .uno.editar-factura').unbind();
    $(".db_context .db_context_content .uno.editar-factura").click(function (e) {
        var pde_factura_id = $(this).parents('.datos').attr('pde_factura_id');
        verModalPdeFacturaGestionModificarDatos(pde_factura_id);
    });
}

function verModalPdeFacturaGestionModificarDatos(pde_factura_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_modificar_datos.php",
        data: 'pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('pde_factura_gestion', pde_factura_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeFacturaGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var pde_factura_id = $(this).parents(".datos").attr("pde_factura_id");
        setPdeFacturaGestionModificarDatosConfirmacion(pde_factura_id);
    });
}

function setPdeFacturaGestionModificarDatosConfirmacion(pde_factura_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_modificar_datos.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
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

            setInitPdeFacturaGestion();
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
function setClickPdeFacturaGestionAnular() {
    $('.db_context .db_context_content .uno.anular-recibo').unbind();
    $('.db_context .db_context_content .uno.anular-recibo').click(function (e) {
        var pde_factura_id = $(this).parents('.datos').attr('pde_factura_id');
        verModalPdeFacturaGestionAnular(pde_factura_id);
    });
}
function verModalPdeFacturaGestionAnular(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_anular.php",
        data: 'pde_factura_id=' + pde_factura_id,
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
                    refreshAdmUno('pde_factura_gestion', pde_factura_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitPdeFacturaGestion();
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
function setClickPdeFacturaGestionAnularConfirmar() {
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-recibo .botonera #btn_registrar").click(function (e) {
        var pde_factura_id = $(this).parents(".datos").attr("pde_factura_id");
        setPdeFacturaGestionAnularConfirmar(pde_factura_id);
    });
}

function setPdeFacturaGestionAnularConfirmar(pde_factura_id) {
    var form = $("#form_datos_anular_recibo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_anular.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
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

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Editar Nota Interna
 */
function setClickPdeFacturaGestionEditarNotaInterna() {
    $('.db_context .db_context_content .uno.editar-nota-interna').unbind();
    $('.db_context .db_context_content .uno.editar-nota-interna').click(function (e) {
        var pde_factura_id = $(this).parents('.datos').attr('pde_factura_id');
        verModalPdeFacturaGestionEditarNotaInterna(pde_factura_id);
    });
}
function verModalPdeFacturaGestionEditarNotaInterna(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_editar_nota_interna.php",
        data: 'pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Editar Nota Interna',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_factura_gestion', pde_factura_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitPdeFacturaGestion();
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
 Editar Nota Interna Confirmacion
 */
function setClickPdeFacturaGestionEditarNotaInternaConfirmar() {
    $(".div_modal .datos.editar-nota-interna .botonera #btn_registrar").unbind();
    $(".div_modal .datos.editar-nota-interna .botonera #btn_registrar").click(function (e) {
        var pde_factura_id = $(this).parents(".datos").attr("pde_factura_id");
        setPdeFacturaGestionEditarNotaInternaConfirmar(pde_factura_id);
    });
}

function setPdeFacturaGestionEditarNotaInternaConfirmar(pde_factura_id) {
    var form = $("#form_datos_editar_nota_interna");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_editar_nota_interna.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
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

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/*
 Editar OCs de la Factura
 */
function setClickPdeFacturaGestionModificarOCs() {
    $('.db_context .db_context_content .uno.editar-factura-oc').unbind();
    $('.db_context .db_context_content .uno.editar-factura-oc').click(function (e) {
        var pde_factura_id = $(this).parents('.datos').attr('pde_factura_id');
        verModalPdeFacturaGestionModificarOCs(pde_factura_id);
    });
}
function verModalPdeFacturaGestionModificarOCs(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_modificar_ocs.php",
        data: 'pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Editar OCs de la  Factura',
                close: function () {
                    refreshAdmUno('pde_factura_gestion', pde_factura_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitPdeFacturaGestion();
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
 Modificar OCs Confirmacion
 */
function setClickPdeFacturaGestionModificarOCsConfirmacion() {
    $(".div_modal .div_datos_generar_facturas #btn_pde_factura_agregar_oc").unbind();
    $(".div_modal .div_datos_generar_facturas #btn_pde_factura_agregar_oc").click(function (e) {
        var pde_factura_id = $(this).parents(".div_datos_generar_facturas").attr("pde_factura_id");
        setPdeFacturaGestionModificarOCsConfirmacion(pde_factura_id);
    });
}

function setPdeFacturaGestionModificarOCsConfirmacion(pde_factura_id) {
    var form = $("#form_generar_factura");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_modificar_ocs.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
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
                $("#error_general").html(arr['error_general']);
            } else {
                //$(".div_modal").dialog("close");
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();

                refreshListOcNoFacturadas();
                refreshListOcFacturadas();
            }

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setClickPdeFacturaGestionModificarOCsOrdenarItems() {
    $(".div_modal .div_datos_generar_facturas .cmb_ordenar_item").unbind();
    $(".div_modal .div_datos_generar_facturas .cmb_ordenar_item").change(function (e) {
        var pde_factura_pde_oc_id = $(this).parents(".uno").attr("pde_factura_pde_oc_id");
        var orden = $(this).val();
        setClickPdeFacturaGestionModificarOCsOrdenarItemsConfirmacion(pde_factura_pde_oc_id, orden);
    });
}
function setClickPdeFacturaGestionModificarOCsOrdenarItemsConfirmacion(pde_factura_pde_oc_id, orden) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_orden_items_en_factura.php",
        data: 'pde_factura_pde_oc_id=' + pde_factura_pde_oc_id + '&orden=' + orden,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {

        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/* Seccion mail de ficha */

function setClickPdeFacturaGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-factura-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-factura-ver-cuerpo-correo").click(function (e) {
        var pde_factura_enviado_id = $(this).attr("pde_factura_enviado_id");
        setPdeFacturaGestionVerCuerpoMail(pde_factura_enviado_id);
    });
}

function setPdeFacturaGestionVerCuerpoMail(pde_factura_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_ver_cuerpo_email.php",
        data: 'pde_factura_enviado_id=' + pde_factura_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'Factura',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeFacturaGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-factura-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.pde-factura-comprobante").click(function (e) {
        var pde_factura_enviado_id = $(this).attr("pde_factura_enviado_id");
        setPdeFacturaGestionVerAdjuntoMail(pde_factura_enviado_id);
    });
}

function setPdeFacturaGestionVerAdjuntoMail(pde_factura_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_ver_adjunto_email.php",
        data: 'pde_factura_enviado_id=' + pde_factura_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'Factura Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitPdeFacturaGestion();
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
// Boton Acciones Informar Factura Onlines
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarFacturaOnline() {
    $('#listado_adm_pde_factura_gestion .adm_botones_accion.pde-factura-gestion-generar-factura-afip').unbind();
    $('#listado_adm_pde_factura_gestion .adm_botones_accion.pde-factura-gestion-generar-factura-afip').click(function (e) {
        var pde_factura_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarFacturaOnline(pde_factura_id);
    });
}

function verModalWsAfipGenerarFacturaOnline(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_ws_afip_generar_factura_online.php",
        data: 'pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Generar Factura de Compra',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeFacturaGestion();
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
// Boton Acciones Informar Factura Onlines
// Boton Generar Factura Online
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarFacturaOnlineBtnGenerarFactura() {
    $(".div_modal .datos.generar-factura-online-afip .botonera #btn_generar_factura_online_afip").unbind();
    $(".div_modal .datos.generar-factura-online-afip .botonera #btn_generar_factura_online_afip").click(function (e) {
        var pde_factura_id = $(this).parents(".datos").attr("pde_factura_id");
        setWsAfipGenerarFacturaOnlineBtnGenerarFactura(pde_factura_id);
    });
}

function setWsAfipGenerarFacturaOnlineBtnGenerarFactura(pde_factura_id) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_factura_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_ws_afip_generar_factura_online.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
//            $(".botonera").hide();
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
                refreshAdmAll('pde_factura_gestion', pagina);
            }

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickWsAfipGenerarNotaCreditoOnline() {
    $('#listado_adm_pde_factura_gestion .adm_botones_accion.pde-factura-gestion-generar-nota-credito-afip').unbind();
    $('#listado_adm_pde_factura_gestion .adm_botones_accion.pde-factura-gestion-generar-nota-credito-afip').click(function (e) {
        var pde_factura_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaCreditoOnline(pde_factura_id);
    });
}

function verModalWsAfipGenerarNotaCreditoOnline(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_gestion_ws_afip_generar_nota_credito_online.php",
        data: 'pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Generar Nota de Credito Online AFIP',
                close: function () {
                    refreshAdmUno('pde_factura_gestion', pde_factura_id)
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeFacturaGestion();
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
    $(".div_modal #form_generar_nota_credito .botonera #btn_generar_nota_credito").unbind();
    $(".div_modal #form_generar_nota_credito .botonera #btn_generar_nota_credito").click(function (e) {
        var pde_factura_id = $(this).attr("pde_factura_id");
        setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(pde_factura_id);
    });
}

function setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(pde_factura_id) {

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_ws_afip_generar_nota_credito_online.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
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

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem() {
    $(".div_modal #form_generar_nota_credito_item .botonera #btn_generar_nota_credito_item").unbind();
    $(".div_modal #form_generar_nota_credito_item .botonera #btn_generar_nota_credito_item").click(function (e) {
        var pde_factura_id = $(this).attr("pde_factura_id");
        setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem(pde_factura_id);
    });
}

function setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem(pde_factura_id) {

    var form = $("#form_generar_nota_credito_item");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_ws_afip_generar_nota_credito_item_online.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
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

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setCheckPdeFacturaAll() {
    $('#listado_adm_pde_factura_gestion #chk_pde_factura_all').unbind();
    $('#listado_adm_pde_factura_gestion #chk_pde_factura_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_pde_factura_gestion .chk_pde_factura").attr('checked', true);
        } else {
            $("#listado_adm_pde_factura_gestion .chk_pde_factura").attr('checked', false);
        }
    });
}

/* 
 * Registrar Descuento Financiero
 */
function setClickPdeFacturaTopRegistrarDescuentoFinanciero() {

    $('.div_listado_buscador .boton.registrar-descuento-financiero').unbind();
    $('.div_listado_buscador .boton.registrar-descuento-financiero').click(function () {
        verModalRegistrarDescuentoFinanciero();
    });
}
function verModalRegistrarDescuentoFinanciero() {
    var form = $('#form_cuerpo');

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_factura_gestion/modal_pde_factura_registrar_descuento_financiero.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 600,
                modal: true,
                title: 'Registrar Descuento Financiero',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    //refreshAdmAll('pde_recepcion_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeFacturaTopRegistrarDescuentoFinancieroConfirmacion() {
    $('.div_modal .datos.registrar-descuento-financiero .botonera #btn_registrar_descuento_financiero').unbind();
    $('.div_modal .datos.registrar-descuento-financiero .botonera #btn_registrar_descuento_financiero').click(function (e) {
        setRegistrarDescuentoFinanciero();
    });
}
function setRegistrarDescuentoFinanciero() {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_modal_registrar_descuento_financiero");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_registrar_descuento_financiero.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
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
            } else {
                $(".div_modal").dialog("close");
                refreshAdmAll('pde_factura_gestion', pagina);
            }

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}










function setClickBtnAgregarItemFactura() {
    $(".div_modal .datos.generar-factura .div_datos_generar_facturas #form_generar_factura .boton.agregar_item_factura").unbind();
    $(".div_modal .datos.generar-factura .div_datos_generar_facturas #form_generar_factura .boton.agregar_item_factura").click(function (e) {
        var prv_proveedor_id = $(this).parents("form").attr("prv_proveedor_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemFactura(prv_proveedor_id, key, $(this));
    });
}

function setBtnAgregarItemFactura(prv_proveedor_id, key, elem) {

    var form = $("#form_generar_factura");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_bloque_pde_factura_items_datos_x_prv_proveedor_uno.php",
        data: form.serialize() + '&dbsug_prv_proveedor_id=' + prv_proveedor_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_pde_factura_items').append(data);

            elem.show();

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarItemFactura() {
    $(".div_modal .datos.generar-factura .div_datos_generar_facturas #form_generar_factura .boton.quitar_item_factura").unbind();
    $(".div_modal .datos.generar-factura .div_datos_generar_facturas #form_generar_factura .boton.quitar_item_factura").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}

function setKeyupModalCalculoItemImporteUnitario() {
    $("#listado_pde_factura_items .tr-item .txt_importe_unitario").unbind();
    $("#listado_pde_factura_items .tr-item .txt_importe_unitario").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var prv_proveedor_id = $("#form_generar_factura").attr("prv_proveedor_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_calculo_item_importe_unitario.php",
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

                setInitPdeFacturaGestion();
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
    $("#listado_pde_factura_items .tr-item .txt_importe_total").unbind();
    $("#listado_pde_factura_items .tr-item .txt_importe_total").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_total = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var prv_proveedor_id = $("#form_generar_factura").attr("prv_proveedor_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_calculo_item_importe_total.php",
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

                setInitPdeFacturaGestion();
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
    $("#listado_pde_factura_items .tr-item .gral_tipo_iva_id").unbind();
    $("#listado_pde_factura_items .tr-item .gral_tipo_iva_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).parents("tr").find(".txt_importe_unitario").val();
        var importe_total = $(this).parents("tr").find(".txt_importe_total").val();
        var gral_tipo_iva_id = $(this).val();
        var prv_proveedor_id = $("#form_generar_factura").attr("prv_proveedor_id");

        $.ajax({
            type: "POST",
            url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_calculo_item_cmb.php",
            data: "key=" + key + "&prv_proveedor_id=" + prv_proveedor_id + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_unitario=" + importe_unitario + "&importe_total=" + importe_total,
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

                setInitPdeFacturaGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {
            }
        });
    });
}

function setChangeCmbPdeFacturaConcepto() {
    $("#listado_pde_factura_items .tr-item .pde_factura_concepto_id").unbind();
    $("#listado_pde_factura_items .tr-item .pde_factura_concepto_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var pde_factura_concepto_id = $(this).val();

        if (pde_factura_concepto_id !== "") {
            $("#cmb_pde_factura_concepto_id[" + key + "]").removeClass('input-error');
            $("#cmb_pde_factura_concepto_id_" + key + "_error").html("");
        }
    });
}

function setKeyupModalDescripcionItem() {
    $("#listado_pde_factura_items .tr-item .txt_descripcion").unbind();
    $("#listado_pde_factura_items .tr-item .txt_descripcion").keyup(function (e) {

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
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_recalcular_total.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            $("#txt_comprobante_total").val(arr['COMPROBANTE_TOTAL']);
            $("#div_comprobante_total").html(arr['COMPROBANTE_TOTAL_FORMATEADO']);

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickModalPdeFacturaP1TxtCantidad() {
    $('.txt_pde_oc_cantidad').unbind();
    $('.txt_pde_oc_cantidad').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobanteP1();
        }, 500);
    });
}
function setClickModalPdeFacturaP1TxtImporteUnitario() {
    $('.txt_pde_oc_importe_unitario').unbind();
    $('.txt_pde_oc_importe_unitario').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobanteP1();
        }, 500);
    });
}
function setClickModalPdeFacturaP1TxtPorcentajeDescuento() {
    $('.txt_pde_oc_porcentaje_descuento').unbind();
    $('.txt_pde_oc_porcentaje_descuento').keyup(function () {
        setTimeout(function () {
            setRecalcularTotalComprobanteP1();
        }, 500);
    });
}
function setRecalcularTotalComprobanteP1() {
    var form = $("#form_generar_factura");
    var pde_factura_id = $('.div_datos_generar_facturas').attr('pde_factura_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_recalcular_total_p1.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var arr_comprobantes_oc = arr['COMPROBANTE_OC'];

            if (arr['COMPROBANTE_SELECCIONADO']) {
                $.each(arr_comprobantes_oc, function (i, item) {
                    $("#div_p1_importe_unitario_con_descuento_oc_calculado_" + i).html(arr_comprobantes_oc[i]['IMPORTE_OC_UNITARIO_FORMATEADO']);
                    $("#div_p1_importe_total_oc_calculado_" + i).html(arr_comprobantes_oc[i]['IMPORTE_OC_TOTAL_FORMATEADO']);
                });
            }

            //$("#div_p1_comprobante_subtotal_sin_descuento").html(arr['COMPROBANTE_SUBTOTAL_SIN_DESCUENTO_FORMATEADO']);
            $("#div_p1_comprobante_subtotal_con_descuento").html(arr['COMPROBANTE_SUBTOTAL_CON_DESCUENTO_FORMATEADO']);
            $("#div_p1_comprobante_iva").html(arr['COMPROBANTE_SUBTOTAL_IVA_FORMATEADO']);
            $("#div_p1_comprobante_total").html(arr['COMPROBANTE_TOTAL_FORMATEADO']);

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/**
 * Autor: Pablo Rosen
 * Creado: 09/01/2019 10:47
 * Evento de cambio de SELECT de Proveedores en la pantalla de modificacion de comprobante
 */
function setChangeCmbPrvProveedor()
{
    $('#cmb_prv_proveedor_id').unbind();
    $('#cmb_prv_proveedor_id').change(function ()
    {
        // se actualiza combo de punto de venta
        var prv_proveedor_id = $(this).val();
        if (prv_proveedor_id > 0) {
            setPrvDescuentoFinancieroCmbPorPrvProveedor(prv_proveedor_id);
        } else
        {
            var cmb_prv_descuento_financiero = $('#cmb_prv_descuento_financiero_id');
            cmb_prv_descuento_financiero.empty();
            cmb_prv_descuento_financiero.append('<option value="">...</option>');
        }
    });
}

function setPrvDescuentoFinancieroCmbPorPrvProveedor(prv_proveedor_id)
{
    $.ajax(
            {
                type: "GET",
                url: "ajax/modulos/pde_factura_gestion/get_prv_descuento_financiero_por_prv_proveedor.php",
                data: "prv_proveedor_id=" + prv_proveedor_id,
                dataType: "json",
                async: false,
                beforeSend: function (objeto) {
                },
                success: function (data) {
                    var arr = data;
                    var len = Object.keys(arr).length;
                    var cmb = $('#cmb_prv_descuento_financiero_id');

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

function setClickVerModalPdeOcReclamoAgregar()
{
    $('#listado_pde_factura_generar_factura .pde_oc_reclamar').unbind();
    $('#listado_pde_factura_generar_factura .pde_oc_reclamar').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('pde_oc_id');
        verModalPdeOcReclamoAgregar(oc_id);
    });
}


function verModalPdeOcReclamoAgregar(oc_id)
{
    $.ajax(
            {
                type: 'GET',
                url: "ajax/modulos/pde_factura_gestion/modal_oc_reclamar.php",
                data: 'oc_id=' + oc_id,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    $('.div_modal_modal').html(img_loading);
                    $('.div_modal_modal').dialog(
                            {
                                width: 850,
                                height: 480,
                                modal: true,
                                title: 'Reclamar Orden de Compra (OC)',
                                close: function ()
                                {
                                    getPdeOcReclamosMostrarIconoReclamos(oc_id);
                                }
                            });
                    //dbContextHideContent();
                },
                success: function (data)
                {
                    //refreshAdmUno('pde_oc_gestion', oc_id);
                    $('.div_modal_modal').html(data);
                    setInitPdeFacturaGestion();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickVerModalPdeOcReclamoAgregarGuardar()
{
    $('#form_reclamar .datos.pde-oc.reclamar .botonera #btn_guardar').unbind();
    $('#form_reclamar .datos.pde-oc.reclamar .botonera #btn_guardar').click(function () {
        var oc_id = $(this).parents('.datos').attr('oc_id');
        if (confirm('Guardar Reclamo?')) {
            setModalPdeOcReclamoAgregarGuardar(oc_id);
        }
    });
}


function setModalPdeOcReclamoAgregarGuardar(oc_id)
{
    var form = $("#form_reclamar");

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/pde_factura_gestion/set_oc_reclamar_guardar.php",
                data: form.serialize() + "&oc_id=" + oc_id,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal_modal .botonera").hide();
                    $(".div_modal_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
                    $(".div_modal_modal .textbox").removeClass('input-error');
                    $(".div_modal_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;

                    if (arr["error"])
                    {
                        $(".div_modal_modal .botonera-loading").remove();
                        $(".div_modal_modal .botonera").show();

                        $.each(arr, function (i, item) {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal_modal").dialog("close");
                    }

                    setInitPdeFacturaGestion();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}



function setClickVerModalPdeOcReclamos()
{
    $('#listado_pde_factura_generar_factura .pde_oc_reclamos').unbind();
    $('#listado_pde_factura_generar_factura .pde_oc_reclamos').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('pde_oc_id');
        verModalPdeOcReclamos(oc_id);
    });
}

function verModalPdeOcReclamos(oc_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/modal_oc_reclamos.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: 1000,
                height: 450,
                modal: true,
                title: 'Reclamos de la Orden de Compra (OC)',
                close: function () {
                    $('.div_modal_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);
            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function getPdeOcReclamosMostrarIconoReclamos(pde_oc_id)
{
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/pde_factura_gestion/get_pde_factura_gestion_mostrar_icono_reclamos.php",
                data: 'pde_oc_id=' + pde_oc_id,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (data)
                {
                    var arr = data;
                    var arr_comprobantes_oc = arr['COMPROBANTE_OC'];

                    if (arr_comprobantes_oc[pde_oc_id]['TIENE_RECLAMOS'] === 1) {
                        $("#pde_oc_reclamos_" + pde_oc_id).show();
                    } else
                    {
                        $("#pde_oc_reclamos_" + pde_oc_id).hide();
                    }

                    setInitPdeFacturaGestion();
                    setInit();
                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickVerModalPdeFacturaPdeOcDesvincular() {
    $('#listado_pde_factura_generar_factura .pde_factura_pde_oc_desvincular').unbind();
    $('#listado_pde_factura_generar_factura .pde_factura_pde_oc_desvincular').click(function (e) {
        var pde_oc_id = $(this).parents('.uno').attr('pde_oc_id');
        var pde_factura_pde_oc_id = $(this).parents('.uno').attr('pde_factura_pde_oc_id');
        var cont = $(this).parents('.uno').attr('cont');

        if (confirm('Desea desvincular?')) {
            verModalPdeFacturaPdeOcDesvincular(pde_oc_id, pde_factura_pde_oc_id, cont);
        }
    });
}
function verModalPdeFacturaPdeOcDesvincular(pde_oc_id, pde_factura_pde_oc_id, cont) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_factura_gestion/set_pde_factura_pde_oc_desvincular.php",
        data: 'pde_oc_id=' + pde_oc_id + '&pde_factura_pde_oc_id=' + pde_factura_pde_oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            $("#tr_pde_factura_pde_oc_uno_" + pde_factura_pde_oc_id).removeClass('selected');
            $("#tr_pde_factura_pde_oc_uno_" + pde_factura_pde_oc_id).remove();

            refreshListOcNoFacturadas();
            refreshListOcFacturadas();
            //refreshListOcUno(pde_oc_id, cont);

            setRecalcularTotalComprobanteP1();

            setInitPdeFacturaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickModalImputarCentroCostoTxtPorcentajeAfectado(){
    $('.txt_gral_centro_costo_porcentaje_afectado').unbind();
    $('.txt_gral_centro_costo_porcentaje_afectado').blur(function (){
        setTimeout(function () {
            setRecalcularTotalPorcentajeAfectadoCentroCosto();
        }, 0);
    });
}

function setRecalcularTotalPorcentajeAfectadoCentroCosto() {
    var form = $("#form_imputar_centro_costo");
    var pde_factura_id = $('#listado_gral_centro_costo').attr('pde_factura_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_factura_gestion/refresh_bloque_pde_factura_modal_imputar_centro_costo.php",
        data: form.serialize() + '&pde_factura_id=' + pde_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data){
            $('.bloque').html(data);

            setInitPdeFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickModalImputarCentroCostoBtnProrratear(){
    $('#btn_prorratear').unbind();
    $('#btn_prorratear').click(function (){
        var inputs = document.getElementsByClassName("txt_gral_centro_costo_porcentaje_afectado").length;
        var porcentaje = 0;
        $('.txt_gral_centro_costo_porcentaje_afectado').each(function(){
            porcentaje = (100 / inputs).toFixed(5);
            $(this).val(porcentaje);
        });
        setTimeout(function () {
            setRecalcularTotalPorcentajeAfectadoCentroCosto();
        }, 100);
    });    
}
function setClickModalImputarCentroCostoBtnCentroCosto100Porciento(){
    $('#listado_gral_centro_costo .centro-costo').unbind();
    $('#listado_gral_centro_costo .centro-costo').click(function (){
        var gral_centro_costo_id = $(this).parents('.uno').attr('identificador');
        
        $('.txt_gral_centro_costo_porcentaje_afectado').val(0);
        $('#txt_gral_centro_costo_porcentaje_afectado_' + gral_centro_costo_id).val(100);
        
        setTimeout(function () {
            setRecalcularTotalPorcentajeAfectadoCentroCosto();
        }, 100);
    });        
}