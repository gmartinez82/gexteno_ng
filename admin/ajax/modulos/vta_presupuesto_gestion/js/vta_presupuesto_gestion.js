// archivo js del modulo 'vta_presupuesto'
$(function ($) {
    setInitVtaPresupuestoGestion();
});

function setInitVtaPresupuestoGestion() {

    // barcode detection
    setBarcodeScannerDetection();

    // metodo que inicializa funcionalidades de carrito
    setInitCarrito();

    // vta_presupuesto_gestion_edicion ver ficha del insumo
    setClickInsInsumoGestionEdicionFicha();

    // vta_presupuesto_gestion_edicion editar descripcion VtaPresupuestoInsInsumo
    setClickVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcion();
    setClickVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcionGuardar();

    // vta_presupuesto_gestion seccion filtros
    setChangeCmbFiltroVtaPresupuestoFechaDesde();
    setChangeCmbFiltroVtaPresupuestoFechaHasta();
    setChangeCmbFiltroVtaPresupuestoTipoEstado();
    setChangeCmbFiltroVtaPresupuestoCliCliente();
    setChangeCmbFiltroVtaPresupuestoTipoListaPrecio();
    setChangeCmbFiltroVtaPresupuestoGralSucursal();
    setChangeCmbFiltroVtaPresupuestoVtaVendedor();
    setChangeCmbFiltroVtaPresupuestoGralActividad();
    setChangeCmbFiltroVtaPresupuestoGralEscenario();

    // vta_presupuesto_gestion seccion acciones
    setClickVtaPresupuestoGestionFicha();
    setClickVtaPresupuestoGestionCancelarPresupuesto();
    setClickVtaPresupuestoGestionCancelarPresupuestoGuardar();
    setClickVtaPresupuestoGestionRetomarPresupuesto();

    setClickVtaPresupuestoGestionExtenderPresupuesto();
    setClickVtaPresupuestoGestionExtenderPresupuestoGuardar();

    setClickVtaPresupuestoGestionEnviarPorCorreoPresupuesto();

    // stock x panol
    setChangeCmbFiltroPanol();

    // checkbox edicion
    setChkVtaPresupuestoInsInsumoUno();
    setChkVtaPresupuestoInsInsumoAll();

    // combos medio y forma de pago
    setChangeCmbGralActividad();
    setChangeCmbFormaPago();
    setChangeCmbMedioPago();
    setChangeCmbCuota();

    // combos tipo venta y tipo despacho
    setChangeCmbTipoVenta();
    setChangeCmbTipoDespacho();

    // combos de confirmacion
    setChangeCmbConfirmacionFormaPago();
    setChangeCmbConfirmacionMedioPago();
    setChangeCmbConfirmacionGralActividad();
    setChangeCmbConfirmacionGralEmpresa();

    setChangeCmbVtaPresupuestoGestionIncluirLogistica();

    setChangeCmbInsTipoListaPrecio();

    // vta_presupuesto_gestion_edicion seccion acciones
    setClickVtaPresupuestoGestionEdicionCancelarInsInsumo();
    setClickVtaPresupuestoGestionEdicionCancelarInsInsumoGuardar();

    // vta_presupuesto_gestion_edicion seccion botonera pie de pag
    setClickVtaPresupuestoGestionEdicionBotonGuardarPresupuesto();
    setClickVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMailBtnEnviar();
    setClickVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMail();
    setClickVtaPresupuestoGestionEdicionBotonImprimirPresupuesto();
    setClickVtaPresupuestoGestionEdicionLimiteCtacteVerDetalle();
    setClickVtaPresupuestoGestionEdicionVolverAlBuscador();

    setClickVtaPresupuestoGestionEdicionBotonVentaAbandonar();
    setClickVtaPresupuestoGestionEdicionBotonVentaPreaprobacion();
    setClickVtaPresupuestoGestionEdicionBotonVentaPreaprobacionConfirmar();
    setClickVtaPresupuestoGestionEdicionBotonVentaDiferida();
    setClickVtaPresupuestoGestionEdicionBotonVentaDiferidaConfirmar();
    setClickVtaPresupuestoGestionEdicionBotonVentaInmediataContado();
    setClickVtaPresupuestoGestionEdicionBotonVentaInmediataContadoConfirmar();
    setClickVtaPresupuestoGestionEdicionBotonVentaInmediataCtacte();
    setClickVtaPresupuestoGestionEdicionBotonVentaInmediataCtacteConfirmar();
    
    setClickVtaPresupuestoGestionEdicionBotonAjusteInmediataContado();
    setClickVtaPresupuestoGestionEdicionBotonAjusteInmediataContadoConfirmar();
    

    // Cambios en el Spinner
    setChangeTxtCantidad();
    setChangeCmbBulto();
    setChangeTxtDescuento();
    setChangeTxtImporteUnitario();
    setChangeCmbTipoIVA();

    setChangeDbsugCliCliente();
    
    // alta de cliente
    //setKeyupTxtDocumento();

    // Ficha email
    setClickVtaPresupuestoGestionVerCuerpoMail();
    setClickVtaPresupuestoGestionVerAdjuntoMail();

    setClickVtaPresupuestoGestionDuplicarPresupuesto();
    setClickVtaPresupuestoGestionAnular();
    setClickVtaPresupuestoGestionAnularConfirmar();
    setClickVtaPresupuestoGestionCambiarListaPrecio();
    setClickVtaPresupuestoGestionCambiarListaPrecioConfirmar();

    // buscador de productos en presupuesto edicion
    setKeyupBuscador();
    setKeyupBuscadorModal();
    setClickBuscadorProductoAgregar();

    // modal confirmacion de presupuesto
    setChangeCmbConfirmacionGralFpCuota();
    setChangeCmbConfirmacionVtaPuntoVenta();
    setChangeCmbConfirmacionCliCliente();
    setChangeCmbConfirmacionPorcentajeIVA();

    // guardar clientes
    setClickBtnGuardarCliente();
    
    // multimoneda
    setClickBntMonedaElegida();

}

function setBarcodeScannerDetection() {

    $(document).scannerDetection({
        timeBeforeScanTest: 300, // wait for the next character for upto 200ms
        avgTimeByChar: 50, // it's not a barcode if a character takes longer than 100ms
        minLength:8,
        ignoreIfFocusOn: '#txt_buscador_productos',
        onComplete: function (barcode, qty) {
            $('#txt_buscador_productos').val(barcode);
            //$('#txt_buscador_productos').trigger('keypress');
            
            setTimeout(function(){
                setBuscadorProductos();
            }, 300);
        }
    });
}

function setChangeDbsugCliCliente() {
    var timeout;

    $('#form_vta_presupuesto_gestion_edicion #dbsug_cli_cliente_id').unbind();
    $('#form_vta_presupuesto_gestion_edicion #dbsug_cli_cliente_id').change(function () {

        var form = $("#form_vta_presupuesto_gestion_edicion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var cli_cliente_id = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        timeout = setTimeout(function () {
            
            // se actualiza el tipo de venta
            setVtaPresupuestoCliente(vta_presupuesto_id, cli_cliente_id);
            refreshVtaPresupuestoGestionEdicionAdmDatos();          
            refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
             
            refreshDatosPieCliente(cli_cliente_id);

            setVtaPreventistaCmbPorCliCliente(cli_cliente_id);
            setVtaCompradorCmbPorCliCliente(cli_cliente_id);
            //setInsTipoListaPrecioCmbPorCliCliente(cli_cliente_id); // la lista no depende del cliente
            //setGralActividadCmbPorCliCliente(cli_cliente_id);
            //setGralFpCuotaCmbPorCliCliente(cli_cliente_id);

            refreshVtaPresupuestoGestionEdicionAdmDatos();

            refreshBloqueCarritoTop();
            

            $('.botonera.confirmacion').hide();

        }, 500);
    });
}

function setVtaPresupuestoCliente(vta_presupuesto_id, cli_cliente_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_cliente.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id + "&cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            //refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function refreshDatosPieCliente(cli_cliente_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_bloque_vta_presupuesto_gestion_pie_datos_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            $("#bloque_vta_presupuesto_gestion_pie_datos_cliente").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
            
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function refreshDatosPieDespacho(cli_cliente_id, tipo_despacho_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_bloque_vta_presupuesto_gestion_pie_datos_despacho.php",
        data: "cli_cliente_id=" + cli_cliente_id + "&tipo_despacho_id=" + tipo_despacho_id,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            $("#bloque_vta_presupuesto_gestion_pie_datos_despacho").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
            
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
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
        url: "ajax/modulos/vta_presupuesto_gestion/get_gral_escenario_por_gral_actividad.php",
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
        url: "ajax/modulos/vta_presupuesto_gestion/get_gral_fp_medio_pago_por_gral_fp_forma_pago.php",
        data: "gral_fp_forma_pago_id=" + gral_fp_forma_pago_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_gral_fp_medio_pago_id');

            var cmb_gral_fp_cuota = $('#cmb_gral_fp_cuota_id');
            cmb_gral_fp_cuota.empty();
            cmb_gral_fp_cuota.append('<option value="">...</option>');

            cmb.empty();
            cmb.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                if(len === 1){
                    cmb.append('<option selected="selected" value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                    $('#cmb_gral_fp_medio_pago_id').trigger('change');
                }else{
                    cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');                    
                }
            }
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
        url: "ajax/modulos/vta_presupuesto_gestion/get_gral_fp_cuota_por_gral_fp_medio_pago.php",
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
                if(len === 1){
                    cmb.append('<option selected="selected" value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                    $('#cmb_gral_fp_cuota_id').trigger('change');
                }else{
                    cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');                    
                }
            }
            
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCmbCuota(){
    $('#cmb_gral_fp_cuota_id').unbind();
    $('#cmb_gral_fp_cuota_id').change(function () {

        var form = $("#form_vta_presupuesto_gestion_edicion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var gral_fp_cuota_id = $(this).val();

        // se actualiza la cuota elegida
        setGralFpCuota(vta_presupuesto_id, gral_fp_cuota_id);
    });    
}
function setGralFpCuota(vta_presupuesto_id, gral_fp_cuota_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/set_gral_fp_cuota.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id + "&gral_fp_cuota_id=" + gral_fp_cuota_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCmbTipoVenta(){
    $('#cmb_vta_presupuesto_tipo_venta_id').unbind();
    $('#cmb_vta_presupuesto_tipo_venta_id').change(function () {

        var form = $("#form_vta_presupuesto_gestion_edicion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var vta_presupuesto_tipo_venta_id = $(this).val();
        
        // se actualiza el tipo de venta
        setVtaPresupuestoTipoVenta(vta_presupuesto_id, vta_presupuesto_tipo_venta_id);
        refreshVtaPresupuestoGestionEdicionAdmDatos();
    });    
}
function setVtaPresupuestoTipoVenta(vta_presupuesto_id, vta_presupuesto_tipo_venta_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_tipo_venta.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id + "&vta_presupuesto_tipo_venta_id=" + vta_presupuesto_tipo_venta_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCmbTipoDespacho(){
    $('#cmb_vta_presupuesto_tipo_despacho_id').unbind();
    $('#cmb_vta_presupuesto_tipo_despacho_id').change(function () {

        var form = $("#form_vta_presupuesto_gestion_edicion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var vta_presupuesto_tipo_despacho_id = $(this).val();
        var cli_cliente_id = $("#dbsug_cli_cliente_id").val();

        // se actualiza el tipo de venta
        setVtaPresupuestoTipoDespacho(vta_presupuesto_id, vta_presupuesto_tipo_despacho_id, cli_cliente_id);
        //refreshVtaPresupuestoGestionEdicionAdmDatos();
    });    
}
function setVtaPresupuestoTipoDespacho(vta_presupuesto_id, vta_presupuesto_tipo_despacho_id, cli_cliente_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_tipo_despacho.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id + "&vta_presupuesto_tipo_despacho_id=" + vta_presupuesto_tipo_despacho_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            //refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
            refreshDatosPieDespacho(cli_cliente_id, vta_presupuesto_tipo_despacho_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCmbConfirmacionFormaPago() {
    $('#cmb_confirmacion_gral_fp_forma_pago_id').unbind();
    $('#cmb_confirmacion_gral_fp_forma_pago_id').change(function () {

        // se actualiza combo de medio de pago
        var gral_fp_forma_pago_id = $(this).val();
        if (gral_fp_forma_pago_id > 0) {
            setMedioPagoCmbConfirmacionPorFormaPago(gral_fp_forma_pago_id);
        } else {
            var cmb_gral_fp_medio_pago = $('#cmb_confirmacion_gral_fp_medio_pago_id');
            cmb_gral_fp_medio_pago.empty();
            cmb_gral_fp_medio_pago.append('<option value="">...</option>');

            var cmb_gral_fp_cuota = $('#cmb_confirmacion_gral_fp_cuota_id');
            cmb_gral_fp_cuota.empty();
            cmb_gral_fp_cuota.append('<option value="">...</option>');
        }
    });
}
function setMedioPagoCmbConfirmacionPorFormaPago(gral_fp_forma_pago_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/get_gral_fp_medio_pago_por_gral_fp_forma_pago.php",
        data: "gral_fp_forma_pago_id=" + gral_fp_forma_pago_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_confirmacion_gral_fp_medio_pago_id');

            cmb.empty();
            cmb.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

            var cmb_gral_fp_cuota = $('#cmb_confirmacion_gral_fp_cuota_id');
            cmb_gral_fp_cuota.empty();
            cmb_gral_fp_cuota.append('<option value="">...</option>');

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCmbConfirmacionMedioPago() {
    $('#cmb_confirmacion_gral_fp_medio_pago_id').unbind();
    $('#cmb_confirmacion_gral_fp_medio_pago_id').change(function () {

        // se actualiza combo de medio de pago
        var gral_fp_medio_pago_id = $(this).val();
        setGralFpCuotaCmbConfirmacionPorMedioPago(gral_fp_medio_pago_id);

    });
}
function setGralFpCuotaCmbConfirmacionPorMedioPago(gral_fp_medio_pago_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/get_gral_fp_cuota_por_gral_fp_medio_pago.php",
        data: "gral_fp_medio_pago_id=" + gral_fp_medio_pago_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_confirmacion_gral_fp_cuota_id');

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

function setChangeCmbConfirmacionGralActividad() {
    $('#cmb_confirmacion_gral_actividad_id').unbind();
    $('#cmb_confirmacion_gral_actividad_id').change(function () {

        // se actualiza combo de punto de venta
        var gral_actividad_id = $(this).val();
        if (gral_actividad_id > 0) {
            setGralEscenarioCmbConfirmacionPorGralActividad(gral_actividad_id);
        } else {
            var cmb_gral_escenario = $('#cmb_confirmacion_cmb_gral_escenario_id');
            cmb_gral_escenario.empty();
            cmb_gral_escenario.append('<option value="">...</option>');
        }
    });
}
function setGralEscenarioCmbConfirmacionPorGralActividad(gral_actividad_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/get_gral_escenario_por_gral_actividad.php",
        data: "gral_actividad_id=" + gral_actividad_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_confirmacion_gral_escenario_id');

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

function setChangeCmbConfirmacionGralEmpresa() {
    $('#cmb_confirmacion_gral_empresa_id').unbind();
    $('#cmb_confirmacion_gral_empresa_id').change(function () {

        // se actualiza combo de punto de venta
        var gral_empresa_id = $(this).val();
        if (gral_empresa_id > 0) {
            setVtaPuntoVentaCmbConfirmacionPorGralEmpresa(gral_empresa_id);
        } else {
            var cmb_vta_punto_venta = $('#cmb_confirmacion_vta_punto_venta_id');
            cmb_vta_punto_venta.empty();
            cmb_vta_punto_venta.append('<option value="">...</option>');

        }
    });
}
function setVtaPuntoVentaCmbConfirmacionPorGralEmpresa(gral_empresa_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/get_vta_punto_venta_por_gral_empresa.php",
        data: "gral_empresa_id=" + gral_empresa_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_confirmacion_vta_punto_venta_id');

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

function setChangeCmbVtaPresupuestoGestionIncluirLogistica() {
    $('#cmb_incluir_logistica').unbind();
    $('#cmb_incluir_logistica').change(function () {

        var form = $("#form_vta_presupuesto_gestion_edicion");

        var incluir_logistica = $(this).val();
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");

        setVtaPresupuestoGestionIncluirLogistica(vta_presupuesto_id, incluir_logistica);
    });
}
function setVtaPresupuestoGestionIncluirLogistica(vta_presupuesto_id, incluir_logistica) {

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_incluir_logistica.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id + "&incluir_logistica=" + incluir_logistica,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setClickVtaPresupuestoGestionFicha() {
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.ver-ficha-vta-presupuesto").unbind();
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.ver-ficha-vta-presupuesto").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".uno").attr("identificador");
        verModalFichaVtaPresupuesto(vta_presupuesto_id);
    });
}

function verModalFichaVtaPresupuesto(vta_presupuesto_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_ficha.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 650,
                modal: true,
                title: 'Ficha del Presupuesto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionCancelarPresupuesto() {
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-cancelar").unbind();
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-cancelar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".uno").attr("identificador");
        verModalVtaPresupuestoGestionCancelarPresupuesto(vta_presupuesto_id);
    });
}

function verModalVtaPresupuestoGestionCancelarPresupuesto(vta_presupuesto_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_acciones_cancelar_presupuesto.php",
        data: "vta_presupuesto_id=" + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 350,
                modal: true,
                title: 'Cancelar Presupuesto',
                close: function () {
                    refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionCancelarPresupuestoGuardar() {
    $(".div_modal .datos.cancelar-presupuesto #btn_guardar").unbind();
    $(".div_modal .datos.cancelar-presupuesto #btn_guardar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        setVtaPresupuestoGestionCancelarPresupuestoGuardar(vta_presupuesto_id);
    });
}
function setVtaPresupuestoGestionCancelarPresupuestoGuardar(vta_presupuesto_id) {
    var form = $("#form_cancelar_presupuesto");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_cancelar_presupuesto.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
//            $(".botonera").hide();
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
            }

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionRetomarPresupuesto() {
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-retomar").unbind();
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-retomar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".uno").attr("identificador");

        $.ajax({
            type: "GET",
            url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_retomar_presupuesto.php",
            data: 'vta_presupuesto_id=' + vta_presupuesto_id,
            dataType: "html",
            beforeSend: function (objeto) {
                $('.div_modal').html(img_loading);
            },
            success: function (data) {
                document.location.href = "vta_presupuesto_gestion_edicion.php?vta_presupuesto_id=" + vta_presupuesto_id;
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickVtaPresupuestoGestionEnviarPorCorreoPresupuesto() {
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-enviar-por-correo").unbind();
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-enviar-por-correo").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".uno").attr("identificador");
        verModalVtaPresupuestoGestionBotonEnviarPresupuestoPorMail(vta_presupuesto_id);
    });
}

function verModalVtaPresupuestoGestionBotonEnviarPresupuestoPorMail(vta_presupuesto_id) {
    var form = $("#form_vta_presupuesto_gestion_edicion");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_enviar_presupuesto.php",
        data: 'vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {

            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 350,
                modal: true,
                title: 'Enviar Presupuesto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbFiltroPanol() {
    $('#listado_adm_vta_presupuesto_gestion_edicion #cmb_filtro_pan_panol_id').unbind();
    $('#listado_adm_vta_presupuesto_gestion_edicion #cmb_filtro_pan_panol_id').change(function (e) {
        $("#listado_adm_vta_presupuesto_gestion_edicion .uno").each(function () {
            var id = $(this).attr('identificador');
            refreshVtaPresupuestoGestionEdicionAdmUno(id);
        });
    });
}

function setChkVtaPresupuestoInsInsumoUno() {
    $('#listado_adm_vta_presupuesto_gestion_edicion .chk_vta_presupuesto_ins_insumo').unbind();
    $('#listado_adm_vta_presupuesto_gestion_edicion .chk_vta_presupuesto_ins_insumo').click(function (e) {
        if ($(this).is(':checked')) {
        } else {
        }
    });
}

function setChkVtaPresupuestoInsInsumoAll() {
    $('#listado_adm_vta_presupuesto_gestion_edicion #chk_vta_presupuesto_ins_insumo_all').unbind();
    $('#listado_adm_vta_presupuesto_gestion_edicion #chk_vta_presupuesto_ins_insumo_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_vta_presupuesto_gestion_edicion .chk_vta_presupuesto_ins_insumo").attr('checked', true);
        } else {
            $("#listado_adm_vta_presupuesto_gestion_edicion .chk_vta_presupuesto_ins_insumo").attr('checked', false);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionVolverAlBuscador() {
    $(".botonera #btn_presupuesto_volver_buscador").unbind();
    $(".botonera #btn_presupuesto_volver_buscador").click(function (e) {
        document.location.href = "ins_insumo_gestion.php";
    });
}

function setClickVtaPresupuestoGestionExtenderPresupuesto() {
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-extender-presupuesto").unbind();
    $("#listado_adm_vta_presupuesto_gestion .adm_botones_accion.vta-presupuesto-extender-presupuesto").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".uno").attr("identificador");
        verModalVtaPresupuestoGestionExtenderPresupuesto(vta_presupuesto_id);
    });
}

function verModalVtaPresupuestoGestionExtenderPresupuesto(vta_presupuesto_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_acciones_extender_presupuesto.php",
        data: 'vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 350,
                modal: true,
                title: 'Extender Presupuesto',
                close: function () {
                    refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionExtenderPresupuestoGuardar() {
    $(".div_modal .datos.extender-presupuesto #btn_guardar").unbind();
    $(".div_modal .datos.extender-presupuesto #btn_guardar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        setVtaPresupuestoGestionExtenderPresupuesto(vta_presupuesto_id);
    });
}
function setVtaPresupuestoGestionExtenderPresupuesto(vta_presupuesto_id) {
    var form = $("#form_exteder_presupuesto");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_extender_presupuesto.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
//            $(".botonera").hide();
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
                //infoActualizacionRefreshBloqueEmail();
            }

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickVtaPresupuestoGestionEdicionCancelarInsInsumo() {
    $(".adm_botones_acciones .adm_botones_accion.presupuesto_gestion_edicion.vta-presupuesto-gestion-edicion-cancelar").unbind();
    $(".adm_botones_acciones .adm_botones_accion.presupuesto_gestion_edicion.vta-presupuesto-gestion-edicion-cancelar").click(function (e) {
        var vta_presupuesto_ins_insumo_id = $(this).parents(".uno").attr("identificador");
        verModalVtaPresupuestoGestionEdicionCancelarInsInsumo(vta_presupuesto_ins_insumo_id);
    });

}

function verModalVtaPresupuestoGestionEdicionCancelarInsInsumo(vta_presupuesto_ins_insumo_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_acciones_cancelar_item.php",
        data: 'vta_presupuesto_ins_insumo_id=' + vta_presupuesto_ins_insumo_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 300,
                modal: true,
                title: 'Cancelar Item de Presupuesto',
                close: function () {
                    // refrescar el listado de items... 
                    // Por el momeno lo hago por la func setVtaPresupuestoGestionEdicionCancelarInsInsumoGuardar()
//                    refreshDivBloqueCarrito();
//                    refreshDivListadoPresupuestoEdicionDatos(vta_presupuesto_id);
//                    refreshDivListadoPresupuestoEdicionDatosPie();
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionCancelarInsInsumoGuardar() {
    $(".div_modal .datos.cancelar-item #btn_guardar").unbind();
    $(".div_modal .datos.cancelar-item #btn_guardar").click(function (e) {
        var vta_presupuesto_ins_insumo_id = $(this).parents(".datos").attr("vta_presupuesto_ins_insumo_id");
        var vta_presupuesto_id = $(this).attr("vta_presupuesto_id");
        setVtaPresupuestoGestionEdicionCancelarInsInsumoGuardar(vta_presupuesto_ins_insumo_id, vta_presupuesto_id);
    });
}

function setVtaPresupuestoGestionEdicionCancelarInsInsumoGuardar(vta_presupuesto_ins_insumo_id, vta_presupuesto_id) {
    var form = $("#form_cancelar_item");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_cancelar_item.php",
        data: form.serialize() + '&vta_presupuesto_ins_insumo_id=' + vta_presupuesto_ins_insumo_id,
        dataType: "json",
        beforeSend: function (objeto) {
//            $(".botonera").hide();
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
                refreshVtaPresupuestoGestionEdicionAdmUnoCancelar(vta_presupuesto_ins_insumo_id);
                refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                refreshBloqueCarritoTop();
            }

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshVtaPresupuestoGestionEdicionAdmUnoCancelar(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_vta_presupuesto_gestion_edicion_uno.php",
        data: "vta_presupuesto_ins_insumo_id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).css("opacity", "0.4");
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).closest('tr').remove();

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/**
 * Abandonar Presupuesto
 */
function setClickVtaPresupuestoGestionEdicionBotonVentaAbandonar() {
    $(".botonera #btn_presupuesto_abandonar_presupuesto").unbind();
    $(".botonera #btn_presupuesto_abandonar_presupuesto").click(function (e) {

        if (confirm('Esta seguro que desea abandonar el presupuesto actual?')) {
            setCarritoBtnAbandonar(); // metodo programado en JS de carrito
        }
    });
}


/**
 * Registrar Preaprobacion
 */
function setClickVtaPresupuestoGestionEdicionBotonVentaPreaprobacion() {
    $(".botonera #btn_presupuesto_generar_preaprobacion").unbind();
    $(".botonera #btn_presupuesto_generar_preaprobacion").click(function (e) {

        verModalVtaPresupuestoGestionEdicionBotonVentaPreaprobacion();
    });
}

function verModalVtaPresupuestoGestionEdicionBotonVentaPreaprobacion() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_boton_preaprobacion.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 400,
                modal: true,
                title: 'Confirmar Preaprobacion de Presupuesto',
                close: function () {
                    //refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonVentaPreaprobacionConfirmar() {
    $(".botonera #btn_presupuesto_generar_preaprobacion_confirmar").unbind();
    $(".botonera #btn_presupuesto_generar_preaprobacion_confirmar").click(function (e) {
        var elem = $(this);

        //if (confirm('Desea generar la Preaprobacion?')) {
            setVtaPresupuestoGestionEdicionBotonVentaPreaprobacionConfirmar(elem);
        //}
    });
}
function setVtaPresupuestoGestionEdicionBotonVentaPreaprobacionConfirmar(elem) {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_boton_preaprobacion.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");

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

                $(".div_modal").dialog("close");
            } else {
                document.location.href = "vta_presupuesto_gestion.php";
                //document.location.href = "vta_factura_gestion.php?accion=crear&vta_presupuesto_id=" + vta_presupuesto_id;
            }

            setInitVtaPresupuestoGestion();
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
 * Venta Diferida
 */
function setClickVtaPresupuestoGestionEdicionBotonVentaDiferida() {
    $(".botonera #btn_presupuesto_generar_venta_diferida").unbind();
    $(".botonera #btn_presupuesto_generar_venta_diferida").click(function (e) {

        verModalVtaPresupuestoGestionEdicionBotonVentaDiferida();
    });
}

function verModalVtaPresupuestoGestionEdicionBotonVentaDiferida() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_boton_venta_diferida.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 400,
                modal: true,
                title: 'Confirmar Venta Diferida',
                close: function () {
                    //refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonVentaDiferidaConfirmar() {
    $(".botonera #btn_presupuesto_generar_venta_diferida_confirmar").unbind();
    $(".botonera #btn_presupuesto_generar_venta_diferida_confirmar").click(function (e) {
        var elem = $(this);

        if (confirm('Desea generar la Venta Diferida?')) {
            setVtaPresupuestoGestionEdicionBotonVentaDiferidaConfirmar(elem);
        }
    });
}
function setVtaPresupuestoGestionEdicionBotonVentaDiferidaConfirmar(elem) {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_boton_venta_diferida.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");

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

                $(".div_modal").dialog("close");
            } else {
                document.location.href = "vta_presupuesto_gestion.php";
                //document.location.href = "vta_factura_gestion.php?accion=crear&vta_presupuesto_id=" + vta_presupuesto_id;
            }

            setInitVtaPresupuestoGestion();
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
 * Venta Inmediata Contado
 */
function setClickVtaPresupuestoGestionEdicionBotonVentaInmediataContado() {
    $(".botonera #btn_presupuesto_generar_venta_inmediata_contado").unbind();
    $(".botonera #btn_presupuesto_generar_venta_inmediata_contado").click(function (e) {
        
        // ---------------------------------------------------------------------
        // se seleccionan todos los productos, en la inmediata contado no se puede vender parcializado
        // ---------------------------------------------------------------------
        $("#listado_adm_vta_presupuesto_gestion_edicion .chk_vta_presupuesto_ins_insumo").attr('checked', true);

        setVtaPresupuestoGestionEdicionBotonVentaInmediataContado();
    });
}
function setVtaPresupuestoGestionEdicionBotonVentaInmediataContado() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_boton_venta_inmediata_contado.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 700,
                modal: true,
                title: 'Confirmar Venta Inmediata al Contado',
                close: function () {
                    //refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                    refreshVtaPresupuestoGestionEdicionAdmDatos();
                },
                hide: 'fade',
            });
            
            $('.div_modal_retenciones').remove();
            $('.div_modal_cheque_buscador').remove();
            
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonVentaInmediataContadoConfirmar() {
    $(".botonera #btn_presupuesto_generar_venta_inmediata_contado_confirmar").unbind();
    $(".botonera #btn_presupuesto_generar_venta_inmediata_contado_confirmar").click(function (e) {
        if (confirm('Desea generar la Venta Inmediata al Contado?')) {
            setVtaPresupuestoGestionEdicionBotonVentaInmediataContadoConfirmar();
        }
    });
}

function setVtaPresupuestoGestionEdicionBotonVentaInmediataContadoConfirmar() {

    var form = $("#form_vta_presupuesto_gestion_edicion");
    var form2 = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    var modulo             = 'vta_recibo_item_generico';
    var var_sesion_random  = $('#vta_recibo_item_generico_listado_vta_recibo_items').attr('var_sesion_random');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_boton_venta_inmediata_contado.php",
        data: form.serialize() + '&' + form2.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id + "&modulo=" + modulo + "&var_sesion_random=" + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");

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

                //$(".div_modal").dialog("close"); // no se debe cerrar en venta inmediata contado
            } else {
                var vta_factura_id = arr["vta_factura_id"];
                var vta_factura_hash = arr["vta_factura_hash"];
                
                if($('#chk_abrir_comprobante').is(':checked')){
                    var url_factura = global_path_http + 'admin/ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=' + vta_factura_id + '&hash=' + vta_factura_hash;                    
                    window.open(url_factura, '_blank');
                }
                
                document.location.href = "vta_presupuesto_gestion.php";
            }
            
            setInitVtaPresupuestoGestion();
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
 * Venta Inmediata Ctacte
 */
function setClickVtaPresupuestoGestionEdicionBotonVentaInmediataCtacte() {
    $(".botonera #btn_presupuesto_generar_venta_inmediata_ctacte").unbind();
    $(".botonera #btn_presupuesto_generar_venta_inmediata_ctacte").click(function (e) {

        setVtaPresupuestoGestionEdicionBotonVentaInmediataCtacte();
    });
}
function setVtaPresupuestoGestionEdicionBotonVentaInmediataCtacte() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_boton_venta_inmediata_ctacte.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 550,
                modal: true,
                title: 'Confirmar Venta Inmediata en Cuenta Corriente',
                close: function () {
                    //refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonVentaInmediataCtacteConfirmar() {
    $(".botonera #btn_presupuesto_generar_venta_inmediata_ctacte_confirmar").unbind();
    $(".botonera #btn_presupuesto_generar_venta_inmediata_ctacte_confirmar").click(function (e) {

        if (confirm('Desea generar la Venta Inmediata en Cta Cte del Cliente?')) {
            setVtaPresupuestoGestionEdicionBotonVentaInmediataCtacteConfirmar();
        }
    });
}

function setVtaPresupuestoGestionEdicionBotonVentaInmediataCtacteConfirmar() {

    var form = $("#form_vta_presupuesto_gestion_edicion");
    var form2 = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_boton_venta_inmediata_ctacte.php",
        data: form.serialize() + '&' + form2.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");

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

                //$(".div_modal").dialog("close"); // no se debe cerrar en venta inmediata ctacte
            } else {
                document.location.href = "vta_presupuesto_gestion.php";
            }

            setInitVtaPresupuestoGestion();
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
 * Ajuste Inmediata Contado
 */
function setClickVtaPresupuestoGestionEdicionBotonAjusteInmediataContado() {
    $(".botonera #btn_presupuesto_generar_ajuste_inmediata_contado").unbind();
    $(".botonera #btn_presupuesto_generar_ajuste_inmediata_contado").click(function (e) {

        setVtaPresupuestoGestionEdicionBotonAjusteInmediataContado();
    });
}

function setVtaPresupuestoGestionEdicionBotonAjusteInmediataContado() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_boton_ajuste_inmediata_contado.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 700,
                modal: true,
                title: 'Confirmar Ajuste Inmediato al Contado',
                close: function () {
                    //refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });
            
            $('.div_modal_retenciones').remove();
            $('.div_modal_cheque_buscador').remove();
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonAjusteInmediataContadoConfirmar() {
    $(".botonera #btn_presupuesto_generar_ajuste_inmediata_contado_confirmar").unbind();
    $(".botonera #btn_presupuesto_generar_ajuste_inmediata_contado_confirmar").click(function (e) {
        if (confirm('Desea generar el Ajuste Inmediato al Contado?')) {
            setVtaPresupuestoGestionEdicionBotonAjusteInmediataContadoConfirmar();
        }
    });
}

function setVtaPresupuestoGestionEdicionBotonAjusteInmediataContadoConfirmar() {

    var form = $("#form_vta_presupuesto_gestion_edicion");
    var form2 = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    var modulo             = 'vta_recibo_item_generico';
    var var_sesion_random  = $('#vta_recibo_item_generico_listado_vta_recibo_items').attr('var_sesion_random');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_boton_ajuste_inmediata_contado.php",
        data: form.serialize() + '&' + form2.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id + "&modulo=" + modulo + "&var_sesion_random=" + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");

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

                //$(".div_modal").dialog("close"); // no se debe cerrar en venta inmediata contado
            } else {
                document.location.href = "vta_presupuesto_gestion.php";
            }

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonImprimirPresupuesto() {
    $(".botonera #btn_presupuesto_imprimir_presupuesto").unbind();
    $(".botonera #btn_presupuesto_imprimir_presupuesto").click(function (e) {
//        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
//        setVtaPresupuestoGestionEdicionBotonImprimirPresupuesto();
        alert('Impresion del Presupuesto');
    });
}

function setClickVtaPresupuestoGestionEdicionLimiteCtacteVerDetalle() {
    $(".div_listado_presupuesto_edicion_datos_pie .mensaje-alerta .mensaje-alerta-datos .mensaje-alerta-uno.resumen-con-detalle").unbind();
    $(".div_listado_presupuesto_edicion_datos_pie .mensaje-alerta .mensaje-alerta-datos .mensaje-alerta-uno.resumen-con-detalle").click(function (e) {
        $('.mensaje-alerta-uno.detalle').toggle();
    });
}

function setClickVtaPresupuestoGestionEdicionBotonGuardarPresupuesto() {
    $(".botonera #btn_presupuesto_guardar_presupuesto").unbind();
    $(".botonera #btn_presupuesto_guardar_presupuesto").click(function (e) {
        setVtaPresupuestoGestionEdicionBotonGuardarPresupuesto();
    });
}

function setVtaPresupuestoGestionEdicionBotonGuardarPresupuesto() {

    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_boton_guardar_presupuesto.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
                refreshBloqueCarritoTop();
            }

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbFiltroVtaPresupuestoTipoEstado() {
    $("#cmb_filtro_vta_presupuesto_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_presupuesto_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setChangeCmbFiltroVtaPresupuestoCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setChangeCmbFiltroVtaPresupuestoTipoListaPrecio() {
    $("#cmb_filtro_ins_tipo_lista_precio_id").unbind();
    $("#cmb_filtro_ins_tipo_lista_precio_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setChangeCmbFiltroVtaPresupuestoGralSucursal() {
    $("#cmb_filtro_gral_sucursal_id").unbind();
    $("#cmb_filtro_gral_sucursal_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setChangeCmbFiltroVtaPresupuestoVtaVendedor() {
    $("#cmb_filtro_vta_vendedor_id").unbind();
    $("#cmb_filtro_vta_vendedor_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setChangeCmbFiltroVtaPresupuestoFechaDesde() {
    $("#txt_filtro_desde").unbind();
    $("#txt_filtro_desde").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setChangeCmbFiltroVtaPresupuestoFechaHasta() {
    $("#txt_filtro_hasta").unbind();
    $("#txt_filtro_hasta").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}
function setChangeCmbFiltroVtaPresupuestoGralActividad() {
    $("#cmb_filtro_gral_actividad_id").unbind();
    $("#cmb_filtro_gral_actividad_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}
function setChangeCmbFiltroVtaPresupuestoGralEscenario() {
    $("#cmb_filtro_gral_escenario_id").unbind();
    $("#cmb_filtro_gral_escenario_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_gestion");
    });
}

function setClickVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMail() {
    $(".botonera #btn_presupuesto_enviar_presupuesto").unbind();
    $(".botonera #btn_presupuesto_enviar_presupuesto").click(function (e) {
        verModalVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMail();
    });
}

function verModalVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMail() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_enviar_presupuesto.php",
        data: 'vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 350,
                modal: true,
                title: 'Enviar Presupuesto via Email',
                close: function () {
                    //refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal").html(data);

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMailBtnEnviar() {
    $(".div_modal .datos.enviar-presupuesto #btn_enviar").unbind();
    $(".div_modal .datos.enviar-presupuesto #btn_enviar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        setVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMailBtnEnviar(vta_presupuesto_id);
    });
}

function setVtaPresupuestoGestionEdicionBotonEnviarPresupuestoPorMailBtnEnviar(vta_presupuesto_id) {
    var form = $("#form_enviar_presupuesto");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_enviar_presupuesto.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .datos.enviar-presupuesto .botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .datos.enviar-presupuesto .botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaPresupuestoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeTxtCantidad() {
    var timeout;
    var es_tecla_tab = 0;
    var es_evento_blur = 0;

    // Evento correspondiente al CHANGE de la caja de texto de cantidad
    $(".txt_cantidad.textbox.spinner.spinner_cantidad").unbind();
    
    //------------------------------------------------------------------------------------------------------
    // Se asigna el evento keydown primero porque es el unico con el que se detecta la tecla TABULADOR (keycode 9)
    // Si detecta que es tabulador dispara el keyup  (luego de soltar la tecla) y el codigo sigue.
    // Pero en el caso de si es tabulador permite ejecutar el codigo de actualizacion de la lista TAB (que en el keyup no se detecta) O ENTER
    //------------------------------------------------------------------------------------------------------
    $(".txt_cantidad.textbox.spinner.spinner_cantidad").keydown (function (e)
    {
        var code = e.keyCode || e.which;
        if (e.which === 9) { //carriage return (return key), horizontal tab
            es_tecla_tab = 1;
            $(this).trigger('keyup');
        }
    });
    
    $(".txt_cantidad.textbox.spinner.spinner_cantidad").blur (function (e)
    {
            es_evento_blur = 1;
            $(this).trigger('keyup');
    });    
    
    $(".txt_cantidad.textbox.spinner.spinner_cantidad").keyup(function (e) {

        // solo numeros
        this.value = (this.value + '').replace(/[^.0-9]/g, '');

        var cantidad = $(this).val();
        var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (cantidad.length > 0) {
            if (e.which === 13 || e.which === 9) {
                
                timeout = setTimeout(function () {
                    setVtaPresupuestoInsInsumoSetCantidad(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, cantidad);
                    refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                    //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    //refreshBloqueCarritoTop();
                }, 100);
            }else{
                if(es_tecla_tab === 1 || es_evento_blur === 1){
                    setVtaPresupuestoInsInsumoSetCantidad(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, cantidad);
                    refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                    //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    //refreshBloqueCarritoTop();
                }
            }
        }
    });
    
    $(".spinner.spinner_cantidad").each(function () {        
        // Evento correspondiente al SPINNER de la caja de texto de cantidad         
        $(this).spinner({
            min: $(this).attr('min'),
            step: $(this).attr('step'),
            numberFormat: "n",
            spin: function (event, ui) {

                var cantidad = ui.value;

                var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
                var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');

                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }

                timeout = setTimeout(function () {
                    setVtaPresupuestoInsInsumoSetCantidad(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, cantidad);
                    refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                    //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    //refreshBloqueCarritoTop();
                }, 1000);
            }
        });
    });
    
}

function setChangeCmbBulto() {

    // Evento correspondiente al CHANGE del select de bultos
    $(".cmb_ins_insumo_bulto_id").unbind();
    $(".cmb_ins_insumo_bulto_id").change(function (e) {

        var bulto_id = $(this).val();
        var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');

        setVtaPresupuestoInsInsumoSetBulto(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, bulto_id);
        refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
        //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
        //refreshBloqueCarritoTop();
    });

}

function setChangeTxtDescuento() {
    var timeout;
    var es_tecla_tab = 0;
    var es_evento_blur = 0;
    
    // Evento correspondiente al CHANGE de la caja de texto de descuento
    $(".txt_descuento.textbox.spinner").unbind();

    //------------------------------------------------------------------------------------------------------
    // Se asigna el evento keydown primero porque es el unico con el que se detecta la tecla TABULADOR (keycode 9)
    // Si detecta que es tabulador dispara el keyup  (luego de soltar la tecla) y el codigo sigue.
    // Pero en el caso de si es tabulador permite ejecutar el codigo de actualizacion de la lista TAB (que en el keyup no se detecta) O ENTER
    //------------------------------------------------------------------------------------------------------
    $(".txt_descuento.textbox.spinner").keydown (function (e)
    {
        var code = e.keyCode || e.which;
        if (e.which === 9) { //carriage return (return key), horizontal tab
            es_tecla_tab = 1;
            $(this).trigger('keyup');
        }
    });

    $(".txt_descuento.textbox.spinner").blur (function (e)
    {
            es_evento_blur = 1;
            $(this).trigger('keyup');
    });

    $(".txt_descuento.textbox.spinner").keyup (function (e)
    {
        this.value = (this.value + '').replace(/[^.0-9]/g, '');
        
        var descuento = $(this).val();
        var max = $(this).attr('max');
        var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');
        
        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        descuento = parseFloat(descuento);
        max = parseFloat(max);
        
        var code = e.keyCode || e.which;
        
        if ( code != 8)
        {            
            if (descuento >= 0 && descuento <= max) {
                if (e.which === 13 || e.which === 9) { //if original
                    timeout = setTimeout(function () {
                        setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, descuento);
                        refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                        //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                        //refreshBloqueCarritoTop();
                    }, 100);
                }else{
                    if(es_tecla_tab === 1 || es_evento_blur === 1){
                        setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, descuento);
                        refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                        //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                        //refreshBloqueCarritoTop();
                    }                    
                }
            } else {
                alert('El descuento permitido es entre 0 y ' + max + '%');

                setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, max);
                refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                //refreshBloqueCarritoTop();
            }
        }
        es_tecla_tab = 0;
        es_evento_blur = 0;
    });
    $(".descuento .spinner").each(function () {

        $(this).spinner({
            min: 0,
            max: $(this).attr('max'),
            step: 0.01,
            numberFormat: "n1",
            spin: function (event, ui) {
                var descuento = ui.value;
                var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
                var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');
                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }

                timeout = setTimeout(function () {
                    setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, descuento);
                    refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                    //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    //refreshBloqueCarritoTop();
                }, 1000);
            }
        });
    });
}

function setChangeTxtDescuentoX() {
    var timeout;

    // Evento correspondiente al CHANGE de la caja de texto de descuento
    $(".txt_descuento.textbox.spinner").unbind();
    $(".txt_descuento.textbox.spinner").keydown(function (e) {

        // solo numeros
        this.value = (this.value + '').replace(/[^.0-9]/g, '');

        var descuento = $(this).val();
        var max = $(this).attr('max');
        var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');
        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        descuento = parseFloat(descuento);
        max = parseFloat(max);

        if (descuento >= 0 && descuento <= max) {
            if (e.which === 13 || e.which === 9) {
                timeout = setTimeout(function () {
                    setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, descuento);
                    refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                    //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    //refreshBloqueCarritoTop();
                }, 500);
            }
        } else {
            alert('El descuento permitido es entre 0 y ' + max + '%');

            setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, max);
            refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
            //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
            //refreshBloqueCarritoTop();
        }
    });
    $(".descuento .spinner").each(function () {

        $(this).spinner({
            min: 0,
            max: $(this).attr('max'),
            step: 0.01,
            numberFormat: "n1",
            spin: function (event, ui) {
                var descuento = ui.value;
                var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
                var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');
                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }

                timeout = setTimeout(function () {
                    setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, descuento);
                    refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                    //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    //refreshBloqueCarritoTop();
                }, 1000);
            }
        });
    });
}

function setChangeTxtImporteUnitario() {
    var timeout;

    // Evento correspondiente al CHANGE de la caja de texto de descuento
    $(".txt_importe_unitario").unbind();
    $(".txt_importe_unitario").keyup(function (e) {

        // solo numeros
        //this.value = (this.value + '').replace(/[^.0-9]/g, '');

        var importe_unitario = this.value;

        var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.which === 13) {
            timeout = setTimeout(function () {
                setVtaPresupuestoInsInsumoSetImporteUnitario(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, importe_unitario);
                refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
                //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                //refreshBloqueCarritoTop();
            }, 100);
        }
    });

    $('.txt_importe_unitario').priceFormat({
        prefix: '',
        clearPrefix: true,
        thousandsSeparator: '.',
        centsSeparator: ',',
        centsLimit: 5,
        allowNegative: true
    });
    $('.txt_importe_unitario').focus(function () {
        $(this).select();
    });
}

function setChangeCmbTipoIVA(){
    // Evento correspondiente al CHANGE del select de tipo de iva
    $(".cmb_gral_tipo_iva_id").unbind();
    $(".cmb_gral_tipo_iva_id").change(function (e) {

        var gral_tipo_iva_id = $(this).val();
        var vta_presupuesto_ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var vta_presupuesto_id = $("#form_vta_presupuesto_gestion_edicion").attr('vta_presupuesto_id');

        setVtaPresupuestoInsInsumoSetTipoIVA(vta_presupuesto_id, vta_presupuesto_ins_insumo_id, gral_tipo_iva_id);
        refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
        //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
        //refreshBloqueCarritoTop();
    });
}

function setVtaPresupuestoInsInsumoSetImporteUnitario(vta_presupuesto_id, id, importe_unitario) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_importe_unitario.php",
        data: "vta_presupuesto_ins_insumo_id=" + id + '&importe_unitario=' + importe_unitario,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {

            //refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
            refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
            refreshBloqueCarritoTop();

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setVtaPresupuestoInsInsumoSetBulto(vta_presupuesto_id, id, bulto_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_bulto.php",
        data: "vta_presupuesto_ins_insumo_id=" + id + '&bulto_id=' + bulto_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            //refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
            refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
            refreshBloqueCarritoTop();

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setVtaPresupuestoInsInsumoSetDescuento(vta_presupuesto_id, id, descuento) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_descuento.php",
        data: "vta_presupuesto_ins_insumo_id=" + id + '&txt_descuento=' + descuento,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {

            //refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
            refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
            refreshBloqueCarritoTop();

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setVtaPresupuestoInsInsumoSetCantidad(vta_presupuesto_id, id, cantidad) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_cantidad.php",
        data: "vta_presupuesto_ins_insumo_id=" + id + '&txt_cantidad=' + cantidad,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {

            if (data['error'] === true) {
                verDbDialogMessage('error', 'Error' , data['msg'], 4000);
            }else{
                verDbDialogMessage('ok', 'Cantidad Modificada' , data['msg'], 800);

                refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                refreshBloqueCarritoTop();                  
            }
           
            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setVtaPresupuestoInsInsumoSetTipoIVA(vta_presupuesto_id, id, gral_tipo_iva_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_tipo_iva_id.php",
        data: "vta_presupuesto_ins_insumo_id=" + id + '&gral_tipo_iva_id=' + gral_tipo_iva_id,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {

            //refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
            refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
            refreshBloqueCarritoTop();

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshVtaPresupuestoGestionEdicionAdmDatos() {

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_vta_presupuesto_gestion_edicion_datos.php",
        data: "",
        dataType: "html",
        beforeSend: function (objeto) {
            $('#listado_adm_vta_presupuesto_gestion_edicion').css("opacity", "0.4");
            //$('.div_listado_presupuesto_edicion_datos').html(html_loading_img);
        },
        success: function (data) {
            $('#listado_adm_vta_presupuesto_gestion_edicion').css("opacity", "1");
            $('.div_listado_presupuesto_edicion_datos').html(data);

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshVtaPresupuestoGestionEdicionAdmUno(id) {
    var cont = $("#tr_vta_presupuesto_ins_insumo_gestion_uno_" + id).attr('cont');
    var panol_id = $("#cmb_filtro_pan_panol_id").val();
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_vta_presupuesto_gestion_edicion_uno.php",
        data: "vta_presupuesto_ins_insumo_id=" + id + "&cont=" + cont + "&panol_id=" + panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).css("opacity", "0.4");
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).css("opacity", "1");
            $('#tr_vta_presupuesto_ins_insumo_gestion_uno_' + id).html(data);
            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshVtaPresupuestoGestionEdicionTotalesPie(id, mensaje_confirmacion) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_vta_presupuesto_gestion_edicion_totales_pie.php",
        data: "vta_presupuesto_id=" + id + "&mensaje_confirmacion=" + mensaje_confirmacion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_listado_presupuesto_edicion_datos_pie').css("opacity", "0.4");
            $('.div_listado_presupuesto_edicion_datos_pie').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_listado_presupuesto_edicion_datos_pie').css("opacity", "1");
            $('.div_listado_presupuesto_edicion_datos_pie').html(data);
            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_vta_presupuesto_gestion_edicion_totales_pie_seccion_totales.php",
        data: "vta_presupuesto_id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_listado_presupuesto_edicion_datos_pie .col.c4').css("opacity", "0.4");
            $('.div_listado_presupuesto_edicion_datos_pie .col.c4').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_listado_presupuesto_edicion_datos_pie .col.c4').css("opacity", "1");
            $('.div_listado_presupuesto_edicion_datos_pie .col.c4').html(data);
            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbInsTipoListaPrecio() {
    $('#form_vta_presupuesto_gestion_edicion #cmb_ins_tipo_lista_precio_id').unbind();
    $('#form_vta_presupuesto_gestion_edicion #cmb_ins_tipo_lista_precio_id').change(function () {
        if (confirm("Desea cambiar la lista de precio del presupuesto ?")) {
            setCmbInsTipoListaPrecio(); 
        }
    });
}

function setCmbInsTipoListaPrecio() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_cmb_lista_precio.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            if (arr['error']) {
                $('#form_vta_presupuesto_gestion_edicion #cmb_ins_tipo_lista_precio_id').val(arr['ins_tipo_lista_precio_id_actual']);
                
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                //location.reload();
                refreshVtaPresupuestoGestionEdicionAdmDatos();
                //refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                refreshVtaPresupuestoGestionEdicionTotalesPie(vta_presupuesto_id);
                refreshBloqueCarritoTop();                    
                
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Ver Ficha del Insumo
 */
function setClickInsInsumoGestionEdicionFicha() {
    $('.adm_botones_acciones .adm_botones_accion.presupuesto_gestion_edicion.vta-presupuesto-gestion-edicion-ver-ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.presupuesto_gestion_edicion.vta-presupuesto-gestion-edicion-ver-ficha').click(function (e) {
        var insumo_id = $(this).attr('ins_insumo');
        verModalFichaInsumo(insumo_id);
    });
}

function verModalFichaInsumo(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/modal_insumo_ficha.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha del Insumo',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_gestion', insumo_id);
            $('.div_modal').html(data);
            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcion() {
    $("#listado_adm_vta_presupuesto_gestion_edicion .uno .descripcion_edicion").unbind();
    $("#listado_adm_vta_presupuesto_gestion_edicion .uno .descripcion_edicion").click(function (e) {
        var vta_presupuesto_ins_insumo_id = $(this).parents(".uno").attr("identificador");
        verModalVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcion(vta_presupuesto_ins_insumo_id);
    });
}

function verModalVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcion(vta_presupuesto_ins_insumo_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_edicion_editar_descripcion.php",
        data: 'vta_presupuesto_ins_insumo_id=' + vta_presupuesto_ins_insumo_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 280,
                modal: true,
                title: 'Editar descripcion del insumo',
                close: function () {
                    // refrescar el listado de items... 
                    // Por el momeno lo hago por la func setVtaPresupuestoGestionEdicionCancelarInsInsumoGuardar()
//                    refreshDivBloqueCarrito();
//                    refreshDivListadoPresupuestoEdicionDatos(vta_presupuesto_id);
//                    refreshDivListadoPresupuestoEdicionDatosPie();
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $(".div_modal").html(data);
            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcionGuardar() {
    $(".div_modal .datos.editar-descripcion #btn_guardar").unbind();
    $(".div_modal .datos.editar-descripcion #btn_guardar").click(function (e) {
        var vta_presupuesto_ins_insumo_id = $(this).parents(".datos").attr("vta_presupuesto_ins_insumo_id");
        setVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcionGuardar(vta_presupuesto_ins_insumo_id);
    });
}

function setVtaPresupuestoGestionEdicionEditarVtaPresupuestoInsInsumoDescripcionGuardar(vta_presupuesto_ins_insumo_id) {
    var form = $("#form_editar_descripcion");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_edicion_editar_descripcion.php",
        data: form.serialize() + '&vta_presupuesto_ins_insumo_id=' + vta_presupuesto_ins_insumo_id,
        dataType: "json",
        beforeSend: function (objeto) {
//            $(".botonera").hide();
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
                refreshVtaPresupuestoGestionEdicionAdmUno(vta_presupuesto_ins_insumo_id);
            }

            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Secchion mail de ficha */

function setClickVtaPresupuestoGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-presupuesto-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-presupuesto-ver-cuerpo-correo").click(function (e) {
        var vta_presupuesto_enviado_id = $(this).attr("vta_presupuesto_enviado_id");
        setVtaPresupuestoGestionVerCuerpoMail(vta_presupuesto_enviado_id);
    });
}

function setVtaPresupuestoGestionVerCuerpoMail(vta_presupuesto_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_ver_cuerpo_email.php",
        data: 'vta_presupuesto_enviado_id=' + vta_presupuesto_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '75%',
                height: 600,
                modal: true,
                title: 'Presupuesto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaPresupuestoGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-presupuesto-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-presupuesto-comprobante").click(function (e) {
        var vta_presupuesto_enviado_id = $(this).attr("vta_presupuesto_enviado_id");
        setVtaPresupuestoGestionVerAdjuntoMail(vta_presupuesto_enviado_id);
    });
}

function setVtaPresupuestoGestionVerAdjuntoMail(vta_presupuesto_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_ver_adjunto_email.php",
        data: 'vta_presupuesto_enviado_id=' + vta_presupuesto_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'Presupuesto Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setVtaPreventistaCmbPorCliCliente(cli_cliente_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_preventista/get_json_vta_preventista_por_cli_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_preventista = $('#cmb_vta_preventista_id');
            cmb_preventista.empty();
            if (len == 0) {
                cmb_preventista.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {

                    var var_selected = '';
                    if (arr[i].selected == 1) {
                        var_selected = 'selected="selected"';
                    }

                    cmb_preventista.append('<option ' + var_selected + ' value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                }
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setVtaCompradorCmbPorCliCliente(cli_cliente_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_comprador/get_json_vta_comprador_por_cli_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_comprador = $('#cmb_vta_comprador_id');
            cmb_comprador.empty();
            if (len == 0) {
                cmb_comprador.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {

                    var var_selected = '';
                    if (arr[i].selected == 1) {
                        var_selected = 'selected="selected"';
                    }
                    cmb_comprador.append('<option ' + var_selected + ' value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                }
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setInsTipoListaPrecioCmbPorCliCliente(cli_cliente_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_tipo_lista_precio/get_json_ins_tipo_lista_precio_por_cli_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_tipo_lista_precio = $('#cmb_ins_tipo_lista_precio_id');
            cmb_tipo_lista_precio.empty();
            if (len == 0) {
                cmb_tipo_lista_precio.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {
                    cmb_tipo_lista_precio.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                }
            }

            // se ejecuta trigger de change cmb lista de precio
            $('#form_vta_presupuesto_gestion_edicion #cmb_ins_tipo_lista_precio_id').trigger('change');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setGralActividadCmbPorCliCliente(cli_cliente_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/gral_actividad/get_json_gral_actividad_por_cli_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_gral_actividad = $('#cmb_gral_actividad_id');
            cmb_gral_actividad.empty();
            if (len == 0) {
                cmb_gral_actividad.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {
                    cmb_gral_actividad.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                }
            }

            // se ejecuta trigger de change cmb actividad, para actualizar dependencias
            $('#form_vta_presupuesto_gestion_edicion #cmb_gral_actividad_id').trigger('change');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setGralFpCuotaCmbPorCliCliente(cli_cliente_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/gral_fp_cuota/get_json_gral_fp_cuota_por_cli_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            // -----------------------------------------------------------------
            // Forma Pago
            // -----------------------------------------------------------------
            var len = Object.keys(arr).length;
            var cmb_gral_fp_forma_pago = $('#cmb_gral_fp_forma_pago_id');

            cmb_gral_fp_forma_pago.val('');
            if (len === 1) {
                for (var i = 0; i < len; i++) {
                    if (arr[i].selected === 1) {
                    cmb_gral_fp_forma_pago.val(arr[i].gral_fp_forma_pago_id);
                }
            }
            }

            // -----------------------------------------------------------------
            // Medio Pago
            // -----------------------------------------------------------------
            var len = Object.keys(arr).length;
            var cmb_gral_fp_medio_pago = $('#cmb_gral_fp_medio_pago_id');
            cmb_gral_fp_medio_pago.empty();
            if (len === 0) {
                cmb_gral_fp_medio_pago.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {
                    if (arr[i].selected === 1) {
                    cmb_gral_fp_medio_pago.append('<option value="' + arr[i].gral_fp_medio_pago_id + '">' + arr[i].gral_fp_medio_pago_descripcion + '</option>');
                }
            }
            }

            // -----------------------------------------------------------------
            // Cuotas
            // -----------------------------------------------------------------
            var len = Object.keys(arr).length;
            var cmb_gral_fp_cuota = $('#cmb_gral_fp_cuota_id');
            cmb_gral_fp_cuota.empty();
            if (len === 0) {
                cmb_gral_fp_cuota.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {
                    if (arr[i].selected === 1) {
                    cmb_gral_fp_cuota.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                }
            }
            }

            // se ejecuta trigger de change cmb lista de precio
            //$('#form_vta_presupuesto_gestion_edicion #cmb_gral_fp_cuota_id').trigger('change');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}


function setClickVtaPresupuestoGestionDuplicarPresupuesto()
{
    $('.db_context .db_context_content .uno.duplicar-presupuesto').unbind();
    $('.db_context .db_context_content .uno.duplicar-presupuesto').click(function (e) {
        var vta_presupuesto_id = $(this).parents('.datos').attr('vta_presupuesto_id');
        if (confirm("Desea duplicar el Presupuesto ?")) {
            setVtaPrespuestoDuplicarPresupuesto(vta_presupuesto_id);
        }
    });
}

function setVtaPrespuestoDuplicarPresupuesto(vta_presupuesto_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_duplicar_presupuesto.php",
        data: 'vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            refreshAdmAll('vta_presupuesto_gestion', 1);

            setInitVtaPresupuestoGestion();
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
function setClickVtaPresupuestoGestionAnular() {
    $('.db_context .db_context_content .uno.anular-presupuesto').unbind();
    $('.db_context .db_context_content .uno.anular-presupuesto').click(function (e) {
        var vta_presupuesto_id = $(this).parents('.datos').attr('vta_presupuesto_id');
        verModalVtaPresupuestoGestionAnular(vta_presupuesto_id);
    });
}
function verModalVtaPresupuestoGestionAnular(vta_presupuesto_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_anular.php",
        data: 'vta_presupuesto_id=' + vta_presupuesto_id,
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
                    refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaPresupuestoGestion();
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
function setClickVtaPresupuestoGestionAnularConfirmar() {
    $(".div_modal .datos.anular-presupuesto .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-presupuesto .botonera #btn_registrar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        setVtaPresupuestoGestionAnularConfirmar(vta_presupuesto_id);
    });
}

function setVtaPresupuestoGestionAnularConfirmar(vta_presupuesto_id) {
    var form = $("#form_datos_anular_presupuesto");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_anular.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
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

            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

/*
 Cambiar Lista Precio
 */
function setClickVtaPresupuestoGestionCambiarListaPrecio() {
    $('.db_context .db_context_content .uno.cambiar-lista-precio').unbind();
    $('.db_context .db_context_content .uno.cambiar-lista-precio').click(function (e) {
        var vta_presupuesto_id = $(this).parents('.datos').attr('vta_presupuesto_id');
        verModalVtaPresupuestoGestionCambiarListaPrecio(vta_presupuesto_id);
    });
}
function verModalVtaPresupuestoGestionCambiarListaPrecio(vta_presupuesto_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_cambiar_lista_precio.php",
        data: 'vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Cambiar Lista Precio',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('vta_presupuesto_gestion', vta_presupuesto_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaPresupuestoGestion();
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
 CambiarListaPrecio Comprobante Confirmacion
 */
function setClickVtaPresupuestoGestionCambiarListaPrecioConfirmar() {
    $(".div_modal .datos.cambiar-lista-precio .botonera #btn_registrar").unbind();
    $(".div_modal .datos.cambiar-lista-precio .botonera #btn_registrar").click(function (e) {
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        setVtaPresupuestoGestionCambiarListaPrecioConfirmar(vta_presupuesto_id);
    });
}

function setVtaPresupuestoGestionCambiarListaPrecioConfirmar(vta_presupuesto_id) {
    var form = $("#form_datos_cambiar_lista_precio");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_cambiar_lista_precio.php",
        data: form.serialize() + '&vta_presupuesto_id=' + vta_presupuesto_id,
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

            setInitVtaPresupuestoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/* Keyup Buscador */
function setKeyupBuscador() {
    var timeout;

    $("#txt_buscador_productos").unbind();
    $("#txt_buscador_productos").keyup(function (e) {
        var txt_buscador = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.which === 13) {
            if (txt_buscador.length >= 3) {
                timeout = setTimeout(function () {
                    setBuscadorProductos();
                }, 100);
            }

        } else if (txt_buscador.length !== 0) {
            /*if (txt_buscador.length >= 6) {
                timeout = setTimeout(function () {
                    setBuscadorProductos();
                }, 100);
            }*/
        } else if (txt_buscador.length === 0) {
        }
    });
}

/* Keyup Buscador Modal */
function setKeyupBuscadorModal() {
    var timeout;

    $("#txt_buscador_productos_modal").unbind();
    $("#txt_buscador_productos_modal").keyup(function (e) {
        var txt_buscador_productos = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.which === 13) {
            if (txt_buscador_productos.length >= 3) {
                timeout = setTimeout(function () {
                    setBuscadorProductosModal();
                }, 100);
            }
        } else if (txt_buscador_productos.length == 0) {
        }
    });
}

function setBuscadorProductos() {
    var form = $("#form_vta_presupuesto_gestion_edicion");
    var vta_presupuesto_id = form.attr("vta_presupuesto_id");
    var txt_buscador_productos = $('#txt_buscador_productos').val();

    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_buscar_producto.php',
        data: 'txt_buscador_productos=' + txt_buscador_productos,
        dataType: "json",
        beforeSend: function (objeto) {

        },
        success: function (data) {

            if (data['cantidad'] === 1) {
                //$("#txt_buscador_productos").select();

                if (data['error'] === 1) {
                    verDbDialogMessage('error', 'Error' , data['msg'], 2000);
                }else{
                    verDbDialogMessage('ok', 'Producto Encontrado' , data['msg'], 800);
                    
                    refreshVtaPresupuestoGestionEdicionAdmDatos();
                    refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                    refreshBloqueCarritoTop();                    
                }
                
            } else {
                verModalProductos();
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setBuscadorProductosModal() {
    var txt_buscador_productos_modal = $('#txt_buscador_productos_modal').val();

    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_buscar_producto_modal.php',
        data: 'txt_buscador_productos_modal=' + txt_buscador_productos_modal,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal .buscador.productos .datos').html(img_loading_gr);
        },
        success: function (data) {
            refreshModalProductosDatos();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshModalProductosDatos() {
    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/vta_presupuesto_gestion/refresh_vta_presupuesto_gestion_modal_buscador_productos_datos.php',
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal .buscador.productos .datos').html(data);

            setInitVtaPresupuestoGestion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalProductos() {
    var txt_buscador_productos = $('#txt_buscador_productos').val();

    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/vta_presupuesto_gestion/modal_vta_presupuesto_gestion_buscar_productos.php',
        data: 'txt_buscador_productos=' + txt_buscador_productos,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading_gr);
            $('.div_modal').dialog({
                width: '70%',
                height: 550,
                modal: true,
                title: 'Seleccionar un producto',
                close: function () {
                    $("#txt_buscador_productos").select();
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            $("#txt_buscador_productos_modal").focusTextToEnd();

            setInitVtaPresupuestoGestion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

(function ($) {
    $.fn.focusTextToEnd = function () {
        this.focus();
        var $thisVal = this.val();
        this.val('').val($thisVal);
        return this;
    }
}(jQuery));

function setClickBuscadorProductoAgregar() {
    $(".div_modal .buscador.productos .buscador-producto-uno .producto-info .boton.agregar").unbind();
    $(".div_modal .buscador.productos .buscador-producto-uno .producto-info .boton.agregar").click(function () {
        var form = $("#form_vta_presupuesto_gestion_edicion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var ins_insumo_id = $(this).parents('.buscador-producto-uno').attr('ins_insumo_id');

        $.ajax({
            type: 'POST',
            url: 'ajax/modulos/vta_presupuesto_gestion/set_vta_presupuesto_gestion_buscar_producto_agregar.php',
            data: 'ins_insumo_id=' + ins_insumo_id,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (data) {
                $('.div_modal').dialog('close');

                refreshVtaPresupuestoGestionEdicionAdmDatos();
                refreshVtaPresupuestoGestionEdicionTotalesPieSeccionTotales(vta_presupuesto_id);
                refreshBloqueCarritoTop();                    
                
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setChangeCmbConfirmacionGralFpCuota(){
    $("#cmb_confirmacion_gral_fp_cuota_id").unbind();
    $("#cmb_confirmacion_gral_fp_cuota_id").change(function (e){
        var form = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var gral_fp_cuota_id = $(this).val();
        var cli_cliente_id = $("#cmb_confirmacion_cli_cliente_id").val();
        var vta_punto_venta_id = $("#cmb_confirmacion_vta_punto_venta_id").val();
        var porcentaje_iva = $("#cmb_porcentaje_iva").val();
        var origen             = form.attr("origen"); 

        refreshBloqueVtaReciboItemGenericoDatos(gral_fp_cuota_id, vta_punto_venta_id, cli_cliente_id, vta_presupuesto_id, origen, porcentaje_iva);
    });
}

function setChangeCmbConfirmacionVtaPuntoVenta(){
    $("#cmb_confirmacion_vta_punto_venta_id").unbind();
    $("#cmb_confirmacion_vta_punto_venta_id").change(function (e){
        var form = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var gral_fp_cuota_id = $("#cmb_confirmacion_gral_fp_cuota_id").val();
        var cli_cliente_id = $("#cmb_confirmacion_cli_cliente_id").val();
        var vta_punto_venta_id = $(this).val();
        var porcentaje_iva = $("#cmb_porcentaje_iva").val();
        var origen             = form.attr("origen"); 

        refreshBloqueVtaReciboItemGenericoDatos(gral_fp_cuota_id, vta_punto_venta_id, cli_cliente_id, vta_presupuesto_id, origen, porcentaje_iva);
    });
}

function setChangeCmbConfirmacionCliCliente(){
    $("#cmb_confirmacion_cli_cliente_id").unbind();
    $("#cmb_confirmacion_cli_cliente_id").change(function (e){
        var form = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var gral_fp_cuota_id = $("#cmb_confirmacion_gral_fp_cuota_id").val();
        var cli_cliente_id = $("#cmb_confirmacion_cli_cliente_id").val();
        var vta_punto_venta_id = $("#cmb_confirmacion_vta_punto_venta_id").val();
        var porcentaje_iva = $("#cmb_porcentaje_iva").val();
        var origen             = form.attr("origen"); 

        refreshBloqueVtaReciboItemGenericoDatos(gral_fp_cuota_id, vta_punto_venta_id, cli_cliente_id, vta_presupuesto_id, origen, porcentaje_iva);
    });
}

function setChangeCmbConfirmacionPorcentajeIVA(){
    $("#cmb_porcentaje_iva").unbind();
    $("#cmb_porcentaje_iva").change(function (e){
        var form = $("#form_vta_presupuesto_gestion_edicion_confirmacion");
        var vta_presupuesto_id = form.attr("vta_presupuesto_id");
        var gral_fp_cuota_id = $("#cmb_confirmacion_gral_fp_cuota_id").val();
        var cli_cliente_id = $("#cmb_confirmacion_cli_cliente_id").val();
        var vta_punto_venta_id = $("#cmb_confirmacion_vta_punto_venta_id").val();
        var porcentaje_iva = $(this).val();
        var origen             = form.attr("origen"); 

        refreshBloqueVtaReciboItemGenericoDatos(gral_fp_cuota_id, vta_punto_venta_id, cli_cliente_id, vta_presupuesto_id, origen, porcentaje_iva);
    });
}

function refreshBloqueVtaReciboItemGenericoDatos(gral_fp_cuota_id, vta_punto_venta_id, cli_cliente_id, vta_presupuesto_id, origen, porcentaje_iva) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_gestion/refresh_bloque_vta_recibo_item_generico_datos.php",
        data: "gral_fp_cuota_id=" + gral_fp_cuota_id + "&vta_punto_venta_id=" + vta_punto_venta_id + "&cli_cliente_id=" + cli_cliente_id + "&vta_presupuesto_id=" + vta_presupuesto_id + "&origen=" + origen + "&porcentaje_iva=" + porcentaje_iva,
        dataType: "html",
        async: false,
        beforeSend: function (objeto)
        {

            $('.div_modal_retenciones').remove();
            $('.div_modal_cheque_buscador').remove();
        },
        success: function (data)
        {
            $(".div_dato_recibo_item_generico").html(data);

        },
        error: function (objeto, quepaso, otroobj) {

        }
    });
}

function setClickBtnGuardarCliente(){
    $("#btn_guardar_cliente").unbind();
    $("#btn_guardar_cliente").click(function (e) {

        var form = $("#form_vta_presupuesto_gestion_edicion");
        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_presupuesto_gestion/set_cli_cliente_alta_simple.php",
            data: form.serialize(),
            dataType: "json",
            async: false,
            beforeSend: function (objeto) {
                $(".div_listado_presupuesto_edicion_datos_pie .botonera.cliente-alta").hide();
                $(".div_listado_presupuesto_edicion_datos_pie .botonera.cliente-alta").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
                $(".div_listado_presupuesto_edicion_datos_pie .textbox").removeClass('input-error');
                $(".div_listado_presupuesto_edicion_datos_pie .label-error").html("");
            },
            success: function (data) {
                var arr = data;
                if (arr["error"]) {
                    $(".div_listado_presupuesto_edicion_datos_pie .botonera-loading").remove();
                    $(".div_listado_presupuesto_edicion_datos_pie .botonera.cliente-alta").show();

                    $.each(arr, function (i, item)
                    {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    var cliente_id = arr['cliente_id'];
                    var cliente_descripcion = arr['persona_descripcion'];

                    $('#form_vta_presupuesto_gestion_edicion #dbsug_cli_cliente_id').val(cliente_id);
                    $('#form_vta_presupuesto_gestion_edicion #dbsug_cli_cliente').val(cliente_descripcion);
                    $('#form_vta_presupuesto_gestion_edicion #dbsug_cli_cliente_id').trigger('change');
                }
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("error: "+ quepaso);
            }
        });
    });
}

function setClickBntMonedaElegida(){
    $(".confirmacion .bloque-monedas-importe .uno-moneda").unbind();
    $(".confirmacion .bloque-monedas-importe .uno-moneda").click(function (e) {
        var moneda_id = $(this).attr('gral_moneda_id');
        var importe = $(this).attr('importe');
        
        //alert(moneda_id);
        //alert(importe);
        
        $("#cmb_vta_recibo_item_generico_gral_moneda_id_1").val(moneda_id);
        $("#txt_vta_recibo_item_generico_importe_unitario_real_1").val(importe);
        
        setInit();            
        setTimeout(function(){
            setRecalcularTotalReciboItemGenerico();
        }, 500);
                
    });
}