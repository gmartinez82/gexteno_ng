// archivo js del modulo 'vta_ajuste_debe'
$(function ($) {
    setInitVtaAjusteDebeGestion();
});

function setInitVtaAjusteDebeGestion() {

    setClickGenerarAjusteDebe();
    setClickGenerarAjusteDebeItem();

    setClickWsFeAfip();
    setClickBtnGenerarWsFeAfip();
    //setClickVtaOrdenVentaBtnGenerarAjusteDebe();

    // Buscadores modal generar ajuste_debe
    setChangeCmbFiltroCliCliente();
    setClickVtaPresupuestoUnoParaFiltrarOVs();
    setKeyupModalBuscadorPersonaDescripcion();
    setKeyupModalBuscadorCodigoPresupuesto();

    // seleccion de las ordenes de venta del modal generar ajuste_debe
    setCheckOrdenVentaAll();
    setCkeckOrdenVentaUno();
    setCkeckVtaAjusteDebeVtaOrdenVentaUno();
    setCheckVtaAjusteDebeVtaOrdenVentaAll();

    // Seccion acciones
    setClickVtaAjusteDebeGestionVerFicha();
    setClickVtaAjusteDebeGestionModificarDatos();
    setClickVtaAjusteDebeGestionModificarDatosConfirmacion();
    setClickVtaAjusteDebeGestionEnviarPorCorreoAjusteDebe();
    setClickVtaAjusteDebeGestionEnviarPorCorreoAjusteDebeBtnEnviarAjusteDebe();
    setClickVtaAjusteDebeGestionAnular();
    setClickVtaAjusteDebeGestionAnularConfirmar();

    setClickVtaAjusteDebeGestionVerAdjuntoMail();
    setClickVtaAjusteDebeGestionVerCuerpoMail();

    // reintento manual de obtencion de CAE
    setClickWsAfipGenerarAjusteDebeOnline();
    setClickWsAfipGenerarAjusteDebeOnlineBtnGenerarAjusteDebe();

    setClickWsAfipGenerarNotaCreditoOnline();
    setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito();
    setClickWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem();

    // Seccion filtros Top
    setChangeCmbFiltroVtaAjusteDebeCodigo();
    setChangeCmbFiltroVtaAjusteDebeNumeroAjusteDebe();
    setChangeCmbFiltroVtaAjusteDebeCae();
    setChangeCmbFiltroVtaAjusteDebeGralCondicionIva();
    setChangeCmbFiltroVtaAjusteDebeCliCliente();
    setChangeCmbFiltroVtaAjusteDebeVtaTipoAjusteDebe();
    setChangeCmbFiltroVtaAjusteDebeVtaTipoEstado();
    setChangeCmbFiltroVtaAjusteDebeVtaComprador();
    setChangeCmbFiltroVtaAjusteDebeVtaVendedor();
    setChangeCmbFiltroVtaAjusteDebeVtaPreventista();
    setChangeCmbFiltroVtaAjusteDebeGralActividad();
    setChangeCmbFiltroVtaAjusteDebeGralEscenario();

    // Modal Gestion Item AjusteDebe
    setClickBtnAgregarItemAjusteDebe();
    setClickBtnQuitarItemAjusteDebe();
    setKeyupModalCalculoItemImporteUnitario();
    setKeyupModalCalculoItemImporteTotal();
    setChangeCmbGralTipoIvaItem();
    setChangeCmbVtaAjusteDebeConcepto();
    setKeyupModalDescripcionItem();

    // Modal
    setChangeCmbCliCliente();
    setChangeCmbGralActividad();
    setChangeCmbFormaPago();
    setChangeCmbMedioPago();
    setChangeCmbGralEmpresa();
    setChangeCmbVtaPuntoVenta();

    // acciones masivas
    setCheckVtaAjusteDebeAll();

    // acciones top
    setClickVtaAjusteDebeTopRegistrarDescuentoFinanciero();
    setClickVtaAjusteDebeTopRegistrarDescuentoFinancieroConfirmacion();

    setClickCmbAgregarReciboDescuentoFinanciero()

    setClickBtnAgregarItemReciboDescuentoFinanciero();
    setClickBtnQuitarItemReciboDescuentoFinanciero();

    setChangeCmbVtaReciboConcepto();
    setClickVtaReciboGestionSetRetencion();
    setClickVtaReciboGestionSetRetencionBtnGuardar();
    
    //cheque
    setChangeCmbGralFpFormaPago();
    setClickVtaReciboGestionSetCheque();
}

function setChangeCmbFiltroVtaAjusteDebeCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}

function setChangeCmbFiltroVtaAjusteDebeCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeNumeroAjusteDebe() {
    $("#txt_buscador_numero_ajuste_debe").unbind();
    $("#txt_buscador_numero_ajuste_debe").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeGralCondicionIva() {
    $("#cmb_filtro_gral_condicion_iva_id").unbind();
    $("#cmb_filtro_gral_condicion_iva_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");

        // se determina si se muestra o no boton para NC Descuento Financiero
        controlMostrarBtnNCDescuentoFinanciero();
    });
}
function setChangeCmbFiltroVtaAjusteDebeVtaTipoAjusteDebe() {
    $("#cmb_filtro_vta_tipo_ajuste_debe_id").unbind();
    $("#cmb_filtro_vta_tipo_ajuste_debe_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeVtaTipoEstado() {
    $("#cmb_filtro_vta_ajuste_debe_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_ajuste_debe_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");

        // se determina si se muestra o no boton para NC Descuento Financiero
        controlMostrarBtnNCDescuentoFinanciero();
    });
}
function setChangeCmbFiltroVtaAjusteDebeVtaComprador() {
    $("#cmb_filtro_vta_comprador_id").unbind();
    $("#cmb_filtro_vta_comprador_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeVtaVendedor() {
    $("#cmb_filtro_vta_vendedor_id").unbind();
    $("#cmb_filtro_vta_vendedor_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeVtaPreventista() {
    $("#cmb_filtro_vta_preventista_id").unbind();
    $("#cmb_filtro_vta_preventista_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeGralActividad() {
    $("#cmb_filtro_gral_actividad_id").unbind();
    $("#cmb_filtro_gral_actividad_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteDebeGralEscenario() {
    $("#cmb_filtro_gral_escenario_id").unbind();
    $("#cmb_filtro_gral_escenario_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_debe_gestion");
    });
}

function controlMostrarBtnNCDescuentoFinanciero() {
    var cli_cliente_id = $('#cmb_filtro_cli_cliente_id').val();
    var vta_ajuste_debe_tipo_estado_id = $('#cmb_filtro_vta_ajuste_debe_tipo_estado_id').val();

    if (cli_cliente_id != '' && vta_ajuste_debe_tipo_estado_id == 6) {
        $(".div_listado_buscador #form_buscador_top .col .boton.registrar-descuento-financiero").show();
    } else {
        $(".div_listado_buscador #form_buscador_top .col .boton.registrar-descuento-financiero").hide();
    }

}


// ----------------------------------------------------------------
// Modal Generar una Nueva AjusteDebe
// ----------------------------------------------------------------
function setClickGenerarAjusteDebe() {
    $('.div_listado_buscador .col .boton.generar_ajuste_debe').unbind();
    $('.div_listado_buscador .col .boton.generar_ajuste_debe').click(function (e) {

        var tipo = 'orden-venta';
        verModalGenerarAjusteDebe(tipo);
    });
}

// ----------------------------------------------------------------
// Modal Generar una Nueva AjusteDebe de Item
// ----------------------------------------------------------------
function setClickGenerarAjusteDebeItem() {
    $('.div_listado_buscador .col .boton.generar_ajuste_debe_item').unbind();
    $('.div_listado_buscador .col .boton.generar_ajuste_debe_item').click(function (e) {

        var tipo = 'item';
        verModalGenerarAjusteDebe(tipo);
    });
}

function verModalGenerarAjusteDebe(tipo) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_generar_ajuste_debe.php",
        data: 'tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 800,
                modal: true,
                title: 'Generar AjusteDebe',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaAjusteDebeGestion();
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
// Modal Generar una Nueva AjusteDebe (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {

    $(".div_datos_generar_ajuste_debes .botonera #btn_set_ws_fe_afip").unbind();
    $(".div_datos_generar_ajuste_debes .botonera #btn_set_ws_fe_afip").click(function () {
        var tipo = $(".datos.generar-ajuste-debe").attr('tipo');
        setControlModalWsFeAfip(tipo);
    });
}

function setControlModalWsFeAfip(tipo) {

    var form = $("#form_generar_ajuste_debe");
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/control_vta_ajuste_debe_gestion_ws_fe_afip.php",
        data: form.serialize() + '&tipo=' + tipo + '&cli_cliente_id=' + cli_cliente_id,
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

            setInitVtaAjusteDebeGestion();
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

    var form = $("#form_generar_ajuste_debe");
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_ws_fe_afip.php",
        data: form.serialize() + '&tipo=' + tipo + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '95%',
                height: 900,
                modal: true,
                title: 'Generar AjusteDebe',
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

            setInitVtaAjusteDebeGestion();
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
// Modal Generar una Nueava AjusteDebe (Boton + del buscador top)
// Boton siguiente
// Boton Generar AjusteDebe Online
// ----------------------------------------------------------------
function setClickBtnGenerarWsFeAfip() {
    $(".datos.generar-ws-fe-afip .botonera #btn_generar_ajuste_debe_online").unbind();
    $(".datos.generar-ws-fe-afip .botonera #btn_generar_ajuste_debe_online").click(function () {
        var tipo = $(".datos.generar-ws-fe-afip").attr('tipo');
        setVtaOrdenVentaBtnGenerarAjusteDebe(tipo);
    });
}

function setVtaOrdenVentaBtnGenerarAjusteDebe(tipo) {

    var cli_cliente_id = $("#cmb_cli_cliente_id").val();

    var form = $("#form_generar_ajuste_debe");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_ws_afip_generar_ajuste_debe_online.php",
        data: form.serialize() + '&' + form2.serialize() + '&tipo=' + tipo + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal_modal .label-error").html("");
            $(".div_modal_modal .input-error").removeClass('input-error');
            $(".div_modal_modal .label-error-botonera").html("");
            $(".div_modal_modal .label-error-botonera").hide();
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal_modal .botonera-loading").remove();
                $(".div_modal_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                    $("#" + i + "_error").show();
                });

                $("#error_general").html(arr['error_general']);

            } else {
                $(".div_modal_modal").dialog("close");
                $(".div_modal").dialog("close");

                if(getDbCurrentPageName() === 'vta_factura_gestion'){
                    refreshAdmAll('vta_factura_gestion', 1);
                }
            }

            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setKeyupModalBuscadorCodigoPresupuesto() {
    var timeout;
    $("#txt_buscador_codigo_presupuesto").unbind();
    $("#txt_buscador_codigo_presupuesto").keyup(function (e) {
        var txt_buscador_codigo_presupuesto = $(this).val();
        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }
        if (txt_buscador_codigo_presupuesto.length >= 2) {
            timeout = setTimeout(function () {
                refreshListOrdenVentaCodigoPresupuesto(txt_buscador_codigo_presupuesto);
            }, 500);
        } else if (txt_buscador_codigo_presupuesto.length == 0) {
            timeout = setTimeout(function () {
                refreshListOrdenVentaCodigoPresupuesto(txt_buscador_codigo_presupuesto);
            }, 500);
        }
        // Limpiar el combo y cajas de texto
        $('#txt_buscador_persona_descripcion').val('');
        $('#dbsug_cli_cliente').val('');
        $('#dbsug_cli_cliente_id').val('');
    });
}

function refreshListOrdenVentaCodigoPresupuesto(txt_buscador_codigo_presupuesto) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/bloque_vta_orden_venta_listado_datos_x_codigo_presupuesto.php",
        data: 'txt_buscador_codigo_presupuesto=' + txt_buscador_codigo_presupuesto,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_ajuste_debes').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_ajuste_debes').html(data);
            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setKeyupModalBuscadorPersonaDescripcion() {
    var timeout;
    $("#txt_buscador_persona_descripcion").unbind();
    $("#txt_buscador_persona_descripcion").keyup(function (e) {
        var txt_buscador_persona_descripcion = $(this).val();
        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }
        if (txt_buscador_persona_descripcion.length >= 2) {
            timeout = setTimeout(function () {
                refreshListOrdenVentaPersonaDescripcion(txt_buscador_persona_descripcion);
            }, 500);
        } else if (txt_buscador_persona_descripcion.length == 0) {
            timeout = setTimeout(function () {
                refreshListOrdenVentaPersonaDescripcion(txt_buscador_persona_descripcion);
            }, 500);
        }

        // Limpiar el combo y cajas de texto
        $('#txt_buscador_codigo_presupuesto').val('');
        $('#dbsug_cli_cliente').val('');
        $('#dbsug_cli_cliente_id').val('');
    });
}

function refreshListOrdenVentaPersonaDescripcion(txt_buscador_persona_descripcion) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/bloque_vta_orden_venta_listado_datos_x_persona_descripcion.php",
        data: 'txt_buscador_persona_descripcion=' + txt_buscador_persona_descripcion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_ajuste_debes').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_ajuste_debes').html(data);
            setInitVtaAjusteDebeGestion();
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

        var tipo = $('.datos.generar-ajuste-debe').attr('tipo');

        if (dbsug_cli_cliente_id != '') {
            
            if (tipo == 'orden-venta') {
                refreshListOrdenVenta(dbsug_cli_cliente_id, 0);
            } else if (tipo == 'item') {
                refreshBloqueVtaAjusteDebeItem(dbsug_cli_cliente_id);
            }
        }
    });
}

function refreshListOrdenVenta(dbsug_cli_cliente_id, vta_presupuesto_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/bloque_vta_orden_venta_listado_datos_x_cli_cliente.php",
        data: 'dbsug_cli_cliente_id=' + dbsug_cli_cliente_id + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_ajuste_debes').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_codigo_presupuesto').val('');
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_ajuste_debes').html(data);

            setInitVtaAjusteDebeGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoUnoParaFiltrarOVs(){
    $(".chk_vta_presupuesto_id").unbind();
    $(".chk_vta_presupuesto_id").click(function () {
        var dbsug_cli_cliente_id = $("#dbsug_cli_cliente_id").val();
        var vta_presupuesto_id = $(this).val();
        
        refreshListOrdenVenta(dbsug_cli_cliente_id, vta_presupuesto_id);
    });    
}

function refreshBloqueVtaAjusteDebeItem(dbsug_cli_cliente_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/bloque_vta_ajuste_debe_items_datos_x_cli_cliente.php",
        data: 'dbsug_cli_cliente_id=' + dbsug_cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_ajuste_debes').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_ajuste_debes').html(data);

            setInitVtaAjusteDebeGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckOrdenVentaAll() {
    $('#listado_vta_ajuste_debe_generar_ajuste_debe #chk_vta_orden_venta_select_all').unbind();
    $('#listado_vta_ajuste_debe_generar_ajuste_debe #chk_vta_orden_venta_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_vta_ajuste_debe_generar_ajuste_debe .chk_vta_orden_venta").attr('checked', true);
        } else {
            $("#listado_vta_ajuste_debe_generar_ajuste_debe .chk_vta_orden_venta").attr('checked', false);
        }
        $("#listado_vta_ajuste_debe_generar_ajuste_debe").find(".chk_vta_orden_venta").trigger('change');
    });
}

function setCkeckOrdenVentaUno() {
    $("#listado_vta_ajuste_debe_generar_ajuste_debe .chk_vta_orden_venta").unbind();
    $("#listado_vta_ajuste_debe_generar_ajuste_debe .chk_vta_orden_venta").change(function () {
        var vta_orden_venta_id = $(this).parents('.uno').attr('vta_orden_venta_id');
        var vta_presupuesto_id = $(this).attr('vta_presupuesto_id');
        var multiseleccion = $(this).parents('table').attr('multiseleccion');
        if ($(this).is(':checked')) {

// se muestra la caja de texto de cantidad
            $("#txt_vta_orden_venta_cantidad_" + vta_orden_venta_id).show();
            // se activa el spinner de la caja de texto de cantidad
            $("#txt_vta_orden_venta_cantidad_" + vta_orden_venta_id).spinner({
                min: $("#txt_vta_orden_venta_cantidad_" + vta_orden_venta_id).attr('min'),
                max: $("#txt_vta_orden_venta_cantidad_" + vta_orden_venta_id).attr('max'),
                numberFormat: "n",
                step: $("#txt_vta_orden_venta_cantidad_" + vta_orden_venta_id).attr('step')
            });
            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
            // se inhabilitan checkbox de otras cotizaciones
            if (multiseleccion == 0) {
                $(".check_vta_orden_venta").hide();
                $(".chk_vta_presupuesto_" + vta_presupuesto_id).show();
            }
        } else {
// se oculta la caja de texto de cantidad
            $("#txt_vta_orden_venta_cantidad_" + vta_orden_venta_id).hide();
            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
            // se vuelven a habilitar los checks si no hay check seleccionado
            if (multiseleccion == 0) {
                var chk_checheado = $(".check_vta_orden_venta input[type=checkbox]:checked").length;
                if (chk_checheado == 0) {
                    $(".check_vta_orden_venta").show();
                }
            }

        }
    });
}

/*
 Ver Ficha de la ajuste_debe
 */
function setClickVtaAjusteDebeGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_ajuste_debe_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_ajuste_debe_gestion_ver_ficha').click(function (e) {
        var vta_ajuste_debe_id = $(this).parents('.adm_botones_acciones').attr('vta_ajuste_debe_id');
        verModalVtaAjusteDebeGestionVerFicha(vta_ajuste_debe_id);
    });
}

function verModalVtaAjusteDebeGestionVerFicha(vta_ajuste_debe_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_ficha.php",
        data: 'vta_ajuste_debe_id=' + vta_ajuste_debe_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la AjusteDebe',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteDebeGestionModificarDatos() {
    $("#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".uno").attr("identificador");
        verModalVtaAjusteDebeGestionModificarDatos(vta_ajuste_debe_id);
    });
}

function verModalVtaAjusteDebeGestionModificarDatos(vta_ajuste_debe_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_modificar_datos.php",
        data: 'vta_ajuste_debe_id=' + vta_ajuste_debe_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '65%',
                height: 450,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('vta_ajuste_debe_gestion', vta_ajuste_debe_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitVtaAjusteDebeGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteDebeGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".datos").attr("vta_ajuste_debe_id");
        setVtaAjusteDebeGestionModificarDatosConfirmacion(vta_ajuste_debe_id);
    });
}

function setVtaAjusteDebeGestionModificarDatosConfirmacion(vta_ajuste_debe_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_modificar_datos.php",
        data: form.serialize() + '&vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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

            setInitVtaAjusteDebeGestion();
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
function setClickVtaAjusteDebeGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-debe-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-debe-ver-cuerpo-correo").click(function (e) {
        var vta_ajuste_debe_enviado_id = $(this).attr("vta_ajuste_debe_enviado_id");
        setVtaAjusteDebeGestionVerCuerpoMail(vta_ajuste_debe_enviado_id);
    });
}

function setVtaAjusteDebeGestionVerCuerpoMail(vta_ajuste_debe_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_ver_cuerpo_email.php",
        data: 'vta_ajuste_debe_enviado_id=' + vta_ajuste_debe_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'AjusteDebe',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteDebeGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-debe-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-debe-comprobante").click(function (e) {
        var vta_ajuste_debe_enviado_id = $(this).attr("vta_ajuste_debe_enviado_id");
        setVtaAjusteDebeGestionVerAdjuntoMail(vta_ajuste_debe_enviado_id);
    });
}

function setVtaAjusteDebeGestionVerAdjuntoMail(vta_ajuste_debe_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_ver_adjunto_email.php",
        data: 'vta_ajuste_debe_enviado_id=' + vta_ajuste_debe_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'AjusteDebe Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteDebeGestionEnviarPorCorreoAjusteDebe() {
    $("#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.vta-ajuste-debe-enviar-por-correo").unbind();
    $("#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.vta-ajuste-debe-enviar-por-correo").click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".uno").attr("identificador");
        verModalVtaAjusteDebeGestionBotonEnviarAjusteDebePorMail(vta_ajuste_debe_id);
    });
}

function verModalVtaAjusteDebeGestionBotonEnviarAjusteDebePorMail(vta_ajuste_debe_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_enviar_ajuste_debe.php",
        data: 'vta_ajuste_debe_id=' + vta_ajuste_debe_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '55%',
                height: 330,
                modal: true,
                title: 'Enviar AjusteDebe',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteDebeGestionEnviarPorCorreoAjusteDebeBtnEnviarAjusteDebe() {
    $(".div_modal .datos.enviar-ajuste-debe #btn_enviar").unbind();
    $(".div_modal .datos.enviar-ajuste-debe #btn_enviar").click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".datos").attr("vta_ajuste_debe_id");
        setVtaAjusteDebeGestionEnviarPorCorreoAjusteDebeBtnEnviarAjusteDebe(vta_ajuste_debe_id);
    });
}

function setVtaAjusteDebeGestionEnviarPorCorreoAjusteDebeBtnEnviarAjusteDebe(vta_ajuste_debe_id) {
    var form = $("#form_enviar_ajuste_debe");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_enviar_ajuste_debe.php",
        data: form.serialize() + '&vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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

            setInitVtaAjusteDebeGestion();
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
function setClickVtaAjusteDebeGestionAnular() {
    $('.db_context .db_context_content .uno.anular-ajuste-debe').unbind();
    $('.db_context .db_context_content .uno.anular-ajuste-debe').click(function (e) {
        var vta_ajuste_debe_id = $(this).parents('.datos').attr('vta_ajuste_debe_id');
        verModalVtaAjusteDebeGestionAnular(vta_ajuste_debe_id);
    });
}
function verModalVtaAjusteDebeGestionAnular(vta_ajuste_debe_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_anular.php",
        data: 'vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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
                    refreshAdmUno('vta_ajuste_debe_gestion', vta_ajuste_debe_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaAjusteDebeGestion();
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
function setClickVtaAjusteDebeGestionAnularConfirmar() {
    $(".div_modal .datos.anular-ajuste-debe .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-ajuste-debe .botonera #btn_registrar").click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".datos").attr("vta_ajuste_debe_id");
        setVtaAjusteDebeGestionAnularConfirmar(vta_ajuste_debe_id);
    });
}

function setVtaAjusteDebeGestionAnularConfirmar(vta_ajuste_debe_id) {
    var form = $("#form_datos_anular_ajuste_debe");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_anular.php",
        data: form.serialize() + '&vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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

            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

// -----------------------------------------------------------------------------
// Generar CAE Manualmente
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarAjusteDebeOnline() {
    $('#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.vta-ajuste-debe-gestion-generar-ajuste-debe-afip').unbind();
    $('#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.vta-ajuste-debe-gestion-generar-ajuste-debe-afip').click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarAjusteDebeOnline(vta_ajuste_debe_id);
    });
}

function verModalWsAfipGenerarAjusteDebeOnline(vta_ajuste_debe_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_ws_afip_generar_ajuste_debe_online.php",
        data: 'vta_ajuste_debe_id=' + vta_ajuste_debe_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Generar AjusteDebe Online AFIP',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaAjusteDebeGestion();
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
function setClickWsAfipGenerarAjusteDebeOnlineBtnGenerarAjusteDebe() {
    $(".div_modal .datos.generar-ajuste-debe-online-afip .botonera #btn_generar_ajuste_debe_online_afip").unbind();
    $(".div_modal .datos.generar-ajuste-debe-online-afip .botonera #btn_generar_ajuste_debe_online_afip").click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".datos").attr("vta_ajuste_debe_id");
        setWsAfipGenerarAjusteDebeOnlineBtnGenerarAjusteDebe(vta_ajuste_debe_id);
    });
}

function setWsAfipGenerarAjusteDebeOnlineBtnGenerarAjusteDebe(vta_ajuste_debe_id) {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_generar_ajuste_debe_online_afip");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_ws_afip_generar_ajuste_debe_online_manual.php",
        data: form.serialize() + '&vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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
                refreshAdmAll('vta_ajuste_debe_gestion', pagina);
            }

            setInitVtaAjusteDebeGestion();
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
// Generar NC desde AjusteDebe
// -----------------------------------------------------------------------------
function setClickWsAfipGenerarNotaCreditoOnline() {
    $('#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.vta-ajuste-debe-gestion-generar-nota-credito-afip').unbind();
    $('#listado_adm_vta_ajuste_debe_gestion .adm_botones_accion.vta-ajuste-debe-gestion-generar-nota-credito-afip').click(function (e) {
        var vta_ajuste_debe_id = $(this).parents(".uno").attr("identificador");
        verModalWsAfipGenerarNotaCreditoOnline(vta_ajuste_debe_id);
    });
}

function verModalWsAfipGenerarNotaCreditoOnline(vta_ajuste_debe_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_gestion_ws_afip_generar_nota_credito_online.php",
        data: 'vta_ajuste_debe_id=' + vta_ajuste_debe_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Generar Nota de Credito Online AFIP',
                close: function () {
                    refreshAdmUno('vta_ajuste_debe_gestion', vta_ajuste_debe_id)
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaAjusteDebeGestion();
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
        var vta_ajuste_debe_id = $(this).attr("vta_ajuste_debe_id");

        if (confirm('Desea generar la NC?')) {
            setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(vta_ajuste_debe_id);
        }
    });
}

function setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCredito(vta_ajuste_debe_id) {

    var form = $("#form_generar_nota_credito");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_ws_afip_generar_nota_credito_online.php",
        data: form.serialize() + '&vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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
                $(".div_modal").dialog("close");
            }

            setInitVtaAjusteDebeGestion();
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
        var vta_ajuste_debe_id = $(this).attr("vta_ajuste_debe_id");
        setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem(vta_ajuste_debe_id);
    });
}

function setWsAfipGenerarNotaCreditoOnlineBtnGenerarNotaCreditoItem(vta_ajuste_debe_id) {

    var form = $("#form_generar_nota_credito_item");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_ws_afip_generar_nota_credito_item_online.php",
        data: form.serialize() + '&vta_ajuste_debe_id=' + vta_ajuste_debe_id,
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

            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function setCheckVtaAjusteDebeVtaOrdenVentaAll() {
    $('#listado_vta_ajuste_debe_generar_nota_credito #chk_vta_ajuste_debe_vta_orden_venta_select_all').unbind();
    $('#listado_vta_ajuste_debe_generar_nota_credito #chk_vta_ajuste_debe_vta_orden_venta_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_vta_ajuste_debe_generar_nota_credito .chk_vta_ajuste_debe_vta_orden_venta").attr('checked', true);
        } else {
            $("#listado_vta_ajuste_debe_generar_nota_credito .chk_vta_ajuste_debe_vta_orden_venta").attr('checked', false);
        }
        $("#listado_vta_ajuste_debe_generar_nota_credito").find(".chk_vta_ajuste_debe_vta_orden_venta").trigger('change');
    });
}

function setCkeckVtaAjusteDebeVtaOrdenVentaUno() {
    $("#listado_vta_ajuste_debe_generar_nota_credito .chk_vta_ajuste_debe_vta_orden_venta").unbind();
    $("#listado_vta_ajuste_debe_generar_nota_credito .chk_vta_ajuste_debe_vta_orden_venta").change(function () {
        var vta_ajuste_debe_vta_orden_venta_id = $(this).parents('.uno').attr('vta_ajuste_debe_vta_orden_venta_id');
        var vta_presupuesto_id = $(this).attr('vta_presupuesto_id');
        var multiseleccion = $(this).parents('table').attr('multiseleccion');

        if ($(this).is(':checked')) {

            // se muestra la caja de texto de cantidad
            $("#txt_vta_ajuste_debe_vta_orden_venta_cantidad_" + vta_ajuste_debe_vta_orden_venta_id).show();

            // se activa el spinner de la caja de texto de cantidad
            $("#txt_vta_ajuste_debe_vta_orden_venta_cantidad_" + vta_ajuste_debe_vta_orden_venta_id).spinner({
                min: $("#txt_vta_ajuste_debe_vta_orden_venta_cantidad_" + vta_ajuste_debe_vta_orden_venta_id).attr('min'),
                max: $("#txt_vta_ajuste_debe_vta_orden_venta_cantidad_" + vta_ajuste_debe_vta_orden_venta_id).attr('max'),
                numberFormat: "n",
                step: $("#txt_vta_ajuste_debe_vta_orden_venta_cantidad_" + vta_ajuste_debe_vta_orden_venta_id).attr('step')
            });
            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
            // se inhabilitan checkbox de otras cotizaciones
            if (multiseleccion == 0) {
                $(".check_vta_ajuste_debe_vta_orden_venta").hide();
                $(".chk_vta_presupuesto_" + vta_presupuesto_id).show();
            }
        } else {
            // se oculta la caja de texto de cantidad
            $("#txt_vta_ajuste_debe_vta_orden_venta_cantidad_" + vta_ajuste_debe_vta_orden_venta_id).hide();
            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
            // se vuelven a habilitar los checks si no hay check seleccionado
            if (multiseleccion == 0) {
                var chk_checheado = $(".check_vta_ajuste_debe_vta_orden_venta input[type=checkbox]:checked").length;
                if (chk_checheado == 0) {
                    $(".check_vta_ajuste_debe_vta_orden_venta").show();
                }
            }

        }
    });
}

function setCheckVtaAjusteDebeAll() {
    $('#listado_adm_vta_ajuste_debe_gestion #chk_vta_ajuste_debe_all').unbind();
    $('#listado_adm_vta_ajuste_debe_gestion #chk_vta_ajuste_debe_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_vta_ajuste_debe_gestion .chk_vta_ajuste_debe").attr('checked', true);
        } else {
            $("#listado_adm_vta_ajuste_debe_gestion .chk_vta_ajuste_debe").attr('checked', false);
        }
    });
}

/* 
 * Registrar Descuento Financiero
 */
function setClickVtaAjusteDebeTopRegistrarDescuentoFinanciero() {

    $('.div_listado_buscador .boton.registrar-descuento-financiero').unbind();
    $('.div_listado_buscador .boton.registrar-descuento-financiero').click(function () {
        verModalRegistrarDescuentoFinanciero();
    });
}
function verModalRegistrarDescuentoFinanciero() {
    var form = $('#form_cuerpo');

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_ajuste_debe_registrar_descuento_financiero.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
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
            setInitVtaAjusteDebeGestion();
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

function setClickVtaAjusteDebeTopRegistrarDescuentoFinancieroConfirmacion() {
    $('.div_modal .datos.registrar-descuento-financiero .botonera #btn_registrar_descuento_financiero').unbind();
    $('.div_modal .datos.registrar-descuento-financiero .botonera #btn_registrar_descuento_financiero').click(function (e) {
        setRegistrarDescuentoFinanciero();
    });
}
function setRegistrarDescuentoFinanciero() {
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_modal_registrar_descuento_financiero");
    var var_sesion_random = form.attr('var_sesion_random');
    var modulo            = 'vta_recibo_descuento_financiero_cheque_info';

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_registrar_descuento_financiero.php",
        data: form.serialize() + '&var_sesion_random=' + var_sesion_random + '&modulo=' + modulo,
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

                refreshAdmAll('vta_ajuste_debe_gestion', pagina);
            }

            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnAgregarItemAjusteDebe() {
    $(".div_modal .datos.generar-ajuste-debe .div_datos_generar_ajuste_debes #form_generar_ajuste_debe .boton.agregar_item_ajuste_debe").unbind();
    $(".div_modal .datos.generar-ajuste-debe .div_datos_generar_ajuste_debes #form_generar_ajuste_debe .boton.agregar_item_ajuste_debe").click(function (e) {
        var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemAjusteDebe(cli_cliente_id, key, $(this));
    });
}

function setBtnAgregarItemAjusteDebe(cli_cliente_id, key, elem) {

    var form = $("#form_generar_ajuste_debe");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/set_bloque_vta_ajuste_debe_items_datos_x_cli_cliente_uno.php",
        data: form.serialize() + '&dbsug_cli_cliente_id=' + cli_cliente_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_vta_ajuste_debe_items').append(data);

            elem.show();

            setInitVtaAjusteDebeGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarItemAjusteDebe() {
    $(".div_modal .datos.generar-ajuste-debe .div_datos_generar_ajuste_debes #form_generar_ajuste_debe .boton.quitar_item_ajuste_debe").unbind();
    $(".div_modal .datos.generar-ajuste-debe .div_datos_generar_ajuste_debes #form_generar_ajuste_debe .boton.quitar_item_ajuste_debe").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}

function setKeyupModalCalculoItemImporteUnitario() {
    $("#listado_vta_ajuste_debe_items .tr-item .txt_importe_unitario").unbind();
    $("#listado_vta_ajuste_debe_items .tr-item .txt_importe_unitario").blur(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var cli_cliente_id = $("#form_generar_ajuste_debe").attr("cli_cliente_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_calculo_item_importe_unitario.php",
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

                setInitVtaAjusteDebeGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {
//                console.log(estado);
//                console.log(error);
            }
        });
    });
}

function setKeyupModalCalculoItemImporteTotal() {
    $("#listado_vta_ajuste_debe_items .tr-item .txt_importe_total").unbind();
    $("#listado_vta_ajuste_debe_items .tr-item .txt_importe_total").blur(function (e) {
        //$("#listado_vta_ajuste_debe_items .tr-item .txt_importe_unitario_con_iva").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var importe_total = $(this).val();
        var gral_tipo_iva_id = $(this).parents("tr").find(".gral_tipo_iva_id").val();
        var cli_cliente_id = $("#form_generar_ajuste_debe").attr("cli_cliente_id");

        //hace el calculo
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_calculo_item_importe_total.php",
            data: "key=" + key + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_total=" + importe_total + '&cli_cliente_id=' + cli_cliente_id,
            dataType: "json",
            beforeSend: function () {
                $("#txt_importe_unitario_" + key).removeClass('input-error');
                $("#txt_importe_unitario_" + key + "_error").html("");
                $("#txt_importe_total_" + key).removeClass('input-error');
                $("#txt_importe_total_" + key + "_error").html("");

            },
            success: function (data) {
//            $('.div_modal').html(img_loading);
                var arr = data;
                if (arr["error"]) {
                    $(".botonera").show();
                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#txt_importe_unitario_" + key).val(arr["importe_unitario"]);
                    $("#txt_importe_iva_" + key).val(arr["importe_iva"]);
                }

                setInitVtaAjusteDebeGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {
//                console.log(estado);
//                console.log(error);
            }
        });
    });
}

function setChangeCmbGralTipoIvaItem() {
    $("#listado_vta_ajuste_debe_items .tr-item .gral_tipo_iva_id").unbind();
    $("#listado_vta_ajuste_debe_items .tr-item .gral_tipo_iva_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var importe_unitario = $(this).parents("tr").find(".txt_importe_unitario").val();
        var importe_total = $(this).parents("tr").find(".txt_importe_total").val();
        var gral_tipo_iva_id = $(this).val();
        var cli_cliente_id = $("#form_generar_ajuste_debe").attr("cli_cliente_id");

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_ajuste_debe_gestion_calculo_item_cmb.php",
            data: "key=" + key + "&cli_cliente_id=" + cli_cliente_id + "&gral_tipo_iva_id=" + gral_tipo_iva_id + "&importe_unitario=" + importe_unitario + "&importe_total=" + importe_total,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_gral_tipo_iva_id[" + key + "]").removeClass('input-error');
                $("#cmb_gral_tipo_iva_id_" + key + "_error").html("");
            },
            success: function (data) {
//            $('.div_modal').html(img_loading);
                var arr = data;
                if (arr["error"]) {
                    $(".botonera").show();
                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#txt_importe_unitario_" + key).val(arr["importe_unitario"]);
                    $("#txt_importe_iva_" + key).val(arr["importe_iva"]);
                    $("#txt_importe_total_" + key).val(arr["importe_total"]);
                }

                setInitVtaAjusteDebeGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {
//                console.log(estado);
//                console.log(error);
            }
        });
    });
}

function setChangeCmbVtaAjusteDebeConcepto() {
    $("#listado_vta_ajuste_debe_items .tr-item .vta_ajuste_debe_concepto_id").unbind();
    $("#listado_vta_ajuste_debe_items .tr-item .vta_ajuste_debe_concepto_id").change(function (e) {
        var key = $(this).parents("tr").attr("key");
        var vta_ajuste_debe_concepto_id = $(this).val();

        if (vta_ajuste_debe_concepto_id !== "") {
            $("#cmb_vta_ajuste_debe_concepto_id[" + key + "]").removeClass('input-error');
            $("#cmb_vta_ajuste_debe_concepto_id_" + key + "_error").html("");
        }
    });
}

function setKeyupModalDescripcionItem() {
    $("#listado_vta_ajuste_debe_items .tr-item .txt_descripcion").unbind();
    $("#listado_vta_ajuste_debe_items .tr-item .txt_descripcion").keyup(function (e) {

        var key = $(this).parents("tr").attr("key");
        var descripcion = $(this).val();

        if (descripcion !== "") {
            $("#txt_descripcion_" + key).removeClass('input-error');
            $("#txt_descripcion_" + key + "_error").html("");
        }
    });
}

function setChangeCmbCliCliente() {
    $('#cmb_cli_cliente_id').unbind();
    $('#cmb_cli_cliente_id').change(function () {
        refreshBloqueComprobanteTotales();
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
        url: "ajax/modulos/vta_ajuste_debe_gestion/get_gral_escenario_por_gral_actividad.php",
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

function setChangeCmbFormaPago() {
    $('#cmb_gral_fp_forma_pago_id').unbind();
    $('#cmb_gral_fp_forma_pago_id').change(function () {

        // se actualiza combo de medio de pago
        var gral_fp_forma_pago_id = $(this).val();
        if (gral_fp_forma_pago_id > 0) {
            setMedioPagoCmbPorFormaPago(gral_fp_forma_pago_id);
        } else {
            var cmb_gral_fp_medio_pago = $('#cmb_gral_fp_medio_pago_id');
            cmb_gral_fp_medio_pago.empty();
            cmb_gral_fp_medio_pago.append('<option value="">...</option>');

            var cmb_gral_fp_cuota = $('#cmb_gral_fp_cuota_id');
            cmb_gral_fp_cuota.empty();
            cmb_gral_fp_cuota.append('<option value="">...</option>');
        }
    });
}

function setMedioPagoCmbPorFormaPago(gral_fp_forma_pago_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/get_gral_fp_medio_pago_por_gral_fp_forma_pago.php",
        data: "gral_fp_forma_pago_id=" + gral_fp_forma_pago_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_gral_fp_medio_pago_id');

            cmb.empty();
            cmb.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

            var cmb_gral_fp_cuota = $('#cmb_gral_fp_cuota_id');
            cmb_gral_fp_cuota.empty();
            cmb_gral_fp_cuota.append('<option value="">...</option>');

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCmbMedioPago() {
    $('#cmb_gral_fp_medio_pago_id').unbind();
    $('#cmb_gral_fp_medio_pago_id').change(function () {

        // se actualiza combo de medio de pago
        var gral_fp_medio_pago_id = $(this).val();
        setGralFpCuotaCmbPorMedioPago(gral_fp_medio_pago_id);

    });
}

function setGralFpCuotaCmbPorMedioPago(gral_fp_medio_pago_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/get_gral_fp_cuota_por_gral_fp_medio_pago.php",
        data: "gral_fp_medio_pago_id=" + gral_fp_medio_pago_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_gral_fp_cuota_id');

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
        url: "ajax/modulos/vta_ajuste_debe_gestion/get_vta_punto_venta_por_gral_empresa.php",
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
    var form = $("#form_generar_ajuste_debe");
    var form2 = $("#form_generar_ws_fe_afip");
    var tipo = $(".datos.generar-ajuste-debe").attr('tipo');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_debe_gestion/refresh_bloque_vta_ajuste_debe_gestion_tabla_totales.php",
        data: form.serialize() + '&' + form2.serialize() + '&tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $("#bloque_vta_ajuste_debe_listado_items_tabla_totales").html(data);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}


function setClickCmbAgregarReciboDescuentoFinanciero() {
    $("#form_modal_registrar_descuento_financiero #cmb_generar_recibo").unbind();
    $("#form_modal_registrar_descuento_financiero #cmb_generar_recibo").change(function (e) {
        var cmb_generar_recibo = $(this).val();

        $(".div-bloque-items-datos").hide();
        if (parseInt(cmb_generar_recibo) === 1) {
            $(".div-bloque-items-datos").show();
        }
    });
}

function setClickBtnAgregarItemReciboDescuentoFinanciero() {
    $("#form_modal_registrar_descuento_financiero .datos.registrar-descuento-financiero .div-bloque-items-datos #listado_vta_recibo_items_descuento_financiero .boton.agregar_item_recibo").unbind();
    $("#form_modal_registrar_descuento_financiero .datos.registrar-descuento-financiero .div-bloque-items-datos #listado_vta_recibo_items_descuento_financiero .boton.agregar_item_recibo").click(function (e) {
        var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemReciboDescuentoFinanciero(cli_cliente_id, key, $(this));
    });
}


function setBtnAgregarItemReciboDescuentoFinanciero(cli_cliente_id, key, elem)
{
    var form = $("#form_generar_recibo_descuento_financiero");

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/vta_ajuste_debe_gestion/set_bloque_vta_ajuste_debe_descuento_financiero_items_datos_x_cli_cliente_uno.php",
                data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&key=' + key,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (data) {
                    $('.listado_vta_recibo_items_descuento_financiero').append(data);

                    elem.show();

                    setInitVtaAjusteDebeGestion();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}

function setClickBtnQuitarItemReciboDescuentoFinanciero()
{
    $(".div-bloque-items-datos #listado_vta_recibo_items_descuento_financiero .boton.quitar_item_recibo").unbind();
    $(".div-bloque-items-datos #listado_vta_recibo_items_descuento_financiero .boton.quitar_item_recibo").click(function (e)
    {
        if (confirm('Esta seguro que desea eliminar el item?'))
        {
            $(this).parents("tr").remove();
        }
    });
}


/*
 * Retenciones 
 */
function setChangeCmbVtaReciboConcepto()
{
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .cmb_vta_recibo_concepto_id").unbind();
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .cmb_vta_recibo_concepto_id").change(function (e)
    {
        var key = $(this).parents("tr").attr("key");
        var cmb_vta_recibo_concepto_id = $(this).val();

        $.ajax(
                {
                    type: "POST",
                    url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_recibo_gestion_vta_recibo_concepto.php",
                    data: "key=" + key + "&cmb_vta_recibo_concepto_id=" + cmb_vta_recibo_concepto_id,
                    dataType: "json",
                    beforeSend: function () {
                        $("#cmb_vta_recibo_concepto_id[" + key + "]").removeClass('input-error');
                        $("#cmb_vta_recibo_concepto_id_" + key + "_error").html("");
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
                            $("#cmb_vta_recibo_concepto_id[" + key + "]").removeClass('input-error');

                            if (arr["btn_retencion"])
                            {
                                $("#btn_ver_modal_set_retencion_info_" + key).show();
                            } else
                            {
                                $("#btn_ver_modal_set_retencion_info_" + key).hide();
                            }
                        }

                        setInitVtaAjusteDebeGestion();
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
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .boton.ver_modal_set_retencion_info").unbind();
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .boton.ver_modal_set_retencion_info").click(function (e) {
        var key = $(this).parents("tr").attr('key');
        verModalVtaReciboGestionSetRetencion(key);
    });
}

function verModalVtaReciboGestionSetRetencion(key)
{
    var modulo            = 'vta_recibo_descuento_financiero';
    var var_sesion_random = $("#form_modal_registrar_descuento_financiero").attr('var_sesion_random');
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_recibo_gestion_set_retencion_info.php",
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
        success: function (data)
        {
            $(".div_modal_modal").html(data);

            setInitVtaAjusteDebeGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickVtaReciboGestionSetRetencionBtnGuardar()
{
    $(".div_modal_modal #form_set_retencion_info .datos .botonera .boton.btn_guardar").unbind();
    $(".div_modal_modal #form_set_retencion_info .datos .botonera .boton.btn_guardar").click(function (e) {
        setVtaReciboGestionSetRetencionBtnGuardar();
    });
}

function setVtaReciboGestionSetRetencionBtnGuardar()
{
    var form_set_retencion_info = $("#form_set_retencion_info");
    var key                     = form_set_retencion_info.attr('key');
    var modulo                  = form_set_retencion_info.attr('modulo');
    var var_sesion_random       = form_set_retencion_info.attr('var_sesion_random');

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_recibo_gestion_set_retencion_info.php",
        data: form_set_retencion_info.serialize()  + '&modulo=' + modulo + '&key=' + key + '&var_sesion_random=' + var_sesion_random,
                dataType: "json",
                beforeSend: function () {
                    $(".div_modal_modal .botonera").hide();
                    $(".div_modal_modal .textbox").removeClass('input-error');
                    $(".div_modal_modal .label-error").html("");
                },
                success: function (data) {
                    var arr = data;

                    if (arr["error"])
                    {
                        $(".div_modal_modal .botonera").show();
                        $.each(arr, function (i, item) {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal_modal").dialog("close");
                    }

                    setInitVtaAjusteDebeGestion();
                    setInit();
                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (jqXHR, estado, error) {
                }
            });
}


function setChangeCmbGralFpFormaPago()
{
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .gral_fp_forma_pago_id").unbind();
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax(
                {
                    type: "POST",
                    url: "ajax/modulos/vta_ajuste_debe_gestion/set_vta_recibo_gestion_gral_fp_forma_pago.php",
                    data: "key=" + key + "&cmb_gral_fp_forma_pago_id=" + cmb_gral_fp_forma_pago_id,
                    dataType: "json",
                    beforeSend: function () {
                        $("#cmb_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');
                        $("#cmb_gral_fp_forma_pago_id_" + key + "_error").html("");
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
                        } else{
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
                                $('#btn_ver_modal_set_cheque_info_' + key).hide();

                                $('#txt_importe_unitario_' + key).removeAttr('readonly');
                                $('#txt_descripcion_' + key).removeAttr('readonly');
                                $('#txt_referencia_' + key).removeAttr('readonly');
                            }
                        }

                        setInitVtaAjusteDebeGestion();
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
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_vta_recibo_items_descuento_financiero .tr-item .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key = $(this).parents("tr").attr('key');
        var cheque_id = 0;
        var en_cartera = '-1';
        var txt_buscador_cheque = '';
        var limpiar_cheque_seleccionado = 0;

        var modulo                      = 'vta_recibo_descuento_financiero';
        var var_sesion_random           = $('#form_modal_registrar_descuento_financiero').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}

function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
    $.ajax(
            {
                type: "GET",
        //url: "ajax/modulos/vta_ajuste_debe_gestion/modal_vta_recibo_gestion_set_cheque_info.php",
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

                    setInitVtaAjusteDebeGestion();
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

