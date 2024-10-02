// archivo js del modulo 'vta_orden_venta_gestion'
$(function ($) {
    setInitVtaOrdenVentaGestion();
});

function setInitVtaOrdenVentaGestion() {

    // vta_presupuesto_gestion seccion filtros
    setChangeCmbFiltroVtaOrdenVentaFechaDesde();
    setChangeCmbFiltroVtaOrdenVentaFechaHasta();
    setChangeCmbFiltroVtaOrdenVentaVtaVendedor();
    setChangeCmbFiltroVtaOrdenVentaTipoEmision();
    setChangeCmbFiltroVtaOrdenVentaTipoEstado();
    setChangeCmbFiltroVtaOrdenVentaTipoEstadoRemision();
    setChangeCmbFiltroVtaOrdenVentaTipoEstadoRemisionActiva();
    setChangeCmbFiltroVtaOrdenVentaTipoEstadoFacturacion();
    setChangeCmbFiltroVtaOrdenVentaTipoEstadoFacturacionActiva();
    setChangeCmbFiltroVtaOrdenVentaCliCliente();
    setChangeCmbFiltroVtaOrdenVentaTipoListaPrecio();
    setChangeCmbFiltroVtaFacturaGralActividad();
    setChangeCmbFiltroVtaFacturaGralEscenario();

    // Acciones
    setClickVtaOrdenVentaGestionVerFicha();
    setClickVtaOrdenVentaGestionSetEstado();
    setClickVtaOrdenVentaGestionSetEstadoBtnGuardar();
    
    // Acciones Foraneas
    setClickAccionForaneaFacturar();
    setClickAccionForaneaFacturarAjuste();
    setClickAccionForaneaRemitir();
    setClickAccionForaneaRemitirAjuste();

}

function setChangeCmbFiltroVtaOrdenVentaFechaDesde() {
    $("#txt_filtro_desde").unbind();
    $("#txt_filtro_desde").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaFechaHasta() {
    $("#txt_filtro_hasta").unbind();
    $("#txt_filtro_hasta").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaVtaVendedor() {
    $("#cmb_filtro_vta_vendedor_id").unbind();
    $("#cmb_filtro_vta_vendedor_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoEmision() {
    $("#cmb_filtro_vta_presupuesto_tipo_emision_id").unbind();
    $("#cmb_filtro_vta_presupuesto_tipo_emision_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoEstado() {
    $("#cmb_filtro_vta_orden_venta_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_orden_venta_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoEstadoRemision() {
    $("#cmb_filtro_vta_orden_venta_tipo_estado_remision_id").unbind();
    $("#cmb_filtro_vta_orden_venta_tipo_estado_remision_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoEstadoRemisionActiva() {
    $("#cmb_filtro_vta_orden_venta_tipo_estado_remision_activa").unbind();
    $("#cmb_filtro_vta_orden_venta_tipo_estado_remision_activa").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoEstadoFacturacion() {
    $("#cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id").unbind();
    $("#cmb_filtro_vta_orden_venta_tipo_estado_facturacion_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoEstadoFacturacionActiva() {
    $("#cmb_filtro_vta_orden_venta_tipo_estado_facturacion_activa").unbind();
    $("#cmb_filtro_vta_orden_venta_tipo_estado_facturacion_activa").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

function setChangeCmbFiltroVtaOrdenVentaTipoListaPrecio() {
    $("#cmb_filtro_ins_tipo_lista_precio_id").unbind();
    $("#cmb_filtro_ins_tipo_lista_precio_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}
function setChangeCmbFiltroVtaFacturaGralActividad() {
    $("#cmb_filtro_gral_actividad_id").unbind();
    $("#cmb_filtro_gral_actividad_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}
function setChangeCmbFiltroVtaFacturaGralEscenario() {
    $("#cmb_filtro_gral_escenario_id").unbind();
    $("#cmb_filtro_gral_escenario_id").change(function () {
        setAdmBuscadorTop("vta_orden_venta_gestion");
    });
}

/*
 Ver Ficha de OV
 */
function setClickVtaOrdenVentaGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_orden_venta_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_orden_venta_gestion_ver_ficha').click(function (e) {
        var vta_orden_venta_id = $(this).parents('.adm_botones_acciones').attr('vta_orden_venta_id');
        verModalVtaOrdenVentaGestionVerFicha(vta_orden_venta_id);
    });
}

function verModalVtaOrdenVentaGestionVerFicha(vta_orden_venta_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_orden_venta_gestion/modal_vta_orden_venta_gestion_ficha.php",
        data: 'vta_orden_venta_id=' + vta_orden_venta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 600,
                modal: true,
                title: 'Ficha de la Orden de Venta',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaOrdenVentaGestion();
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
 Ver Accion Cambia el estado del remito
 */
function setClickVtaOrdenVentaGestionSetEstado() {
    $('.adm_botones_acciones .adm_botones_accion.vta_orden_venta_gestion_set_estado').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_orden_venta_gestion_set_estado').click(function (e) {
        var vta_orden_venta_id = $(this).parents('.adm_botones_acciones').attr('vta_orden_venta_id');
        verModalVtaOrdenVentaGestionSetEstado(vta_orden_venta_id);
    });
}

function verModalVtaOrdenVentaGestionSetEstado(vta_orden_venta_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_orden_venta_gestion/modal_vta_orden_venta_gestion_set_estado.php",
        data: 'vta_orden_venta_id=' + vta_orden_venta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '60%',
                height: 400,
                modal: true,
                title: 'Cambiar Estado de la Orden de Venta',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaOrdenVentaGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaOrdenVentaGestionSetEstadoBtnGuardar() {
    $(".div_modal .datos.vta-orden-venta-set-estado #form_vta_orden_venta_set_estado .botonera #btn_guardar").unbind();
    $(".div_modal .datos.vta-orden-venta-set-estado #form_vta_orden_venta_set_estado .botonera #btn_guardar").click(function (e) {
        var vta_orden_venta_id = $(this).parents(".datos").attr("vta_orden_venta_id");
        setVtaOrdenVentaGestionSetEstadoBtnGuardar(vta_orden_venta_id);
    });
}

function setVtaOrdenVentaGestionSetEstadoBtnGuardar(vta_orden_venta_id) {

    var form = $("#form_vta_orden_venta_set_estado");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_orden_venta_gestion/set_vta_orden_venta_gestion_set_estado.php",
        data: form.serialize() + '&vta_orden_venta_id=' + vta_orden_venta_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".botonera").hide();
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
                refreshAdmAll('vta_orden_venta_gestion', 1);
            }

            setInitVtaOrdenVentaGestion();
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
// Facturacion
// -----------------------------------------------------------------------------
function setClickAccionForaneaFacturar(){
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-facturar').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-facturar').click(function (e) {
        
        var cli_cliente_id = $(this).parents('.uno').attr('cli_cliente_id');
        var vta_presupuesto_id = $(this).parents('.uno').attr('vta_presupuesto_id');
        
        verModalFacturacion(cli_cliente_id, vta_presupuesto_id);
    });    
}
function verModalFacturacion(cli_cliente_id, vta_presupuesto_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_factura_gestion/modal_generar_factura.php",
        data: 'tipo=orden-venta&cli_cliente_id=' + cli_cliente_id + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Generar Factura desde Orden de Venta',
                close: function () {
                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('vta_orden_venta_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            
            getFileCssVtaFacturaGestion();
            getFileJsVtaFacturaGestion();
                
            setTimeout(function () {

                $('.div_modal').html(data);
                
                setInitVtaFacturaGestion();

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

function getFileCssVtaFacturaGestion() {
    $.ajax({
        url: global_path_http + "admin/ajax/modulos/vta_factura_gestion/css/vta_factura_gestion.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $(".div_modal").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsVtaFacturaGestion() {
    $.getScript(global_path_http + "admin/ajax/modulos/vta_factura_gestion/js/vta_factura_gestion.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}

// -----------------------------------------------------------------------------
// Facturacion Ajuste
// -----------------------------------------------------------------------------
function setClickAccionForaneaFacturarAjuste(){
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-facturar-ajuste').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-facturar-ajuste').click(function (e) {
        
        var cli_cliente_id = $(this).parents('.uno').attr('cli_cliente_id');
        var vta_presupuesto_id = $(this).parents('.uno').attr('vta_presupuesto_id');
        
        verModalFacturacionAjuste(cli_cliente_id, vta_presupuesto_id);
    });    
}
function verModalFacturacionAjuste(cli_cliente_id, vta_presupuesto_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_debe_gestion/modal_generar_ajuste_debe.php",
        data: 'tipo=orden-venta&cli_cliente_id=' + cli_cliente_id + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Generar Ajuste desde Orden de Venta',
                close: function () {
                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('vta_orden_venta_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            
            getFileCssVtaAjusteDebeGestion();
            getFileJsVtaAjusteDebeGestion();
                
            setTimeout(function () {

                $('.div_modal').html(data);
                
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

function getFileCssVtaAjusteDebeGestion() {
    $.ajax({
        url: global_path_http + "admin/ajax/modulos/vta_ajuste_debe_gestion/css/vta_ajuste_debe_gestion.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $(".div_modal").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsVtaAjusteDebeGestion() {
    $.getScript(global_path_http + "admin/ajax/modulos/vta_ajuste_debe_gestion/js/vta_ajuste_debe_gestion.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}

// -----------------------------------------------------------------------------
// Remision
// -----------------------------------------------------------------------------
function setClickAccionForaneaRemitir(){
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-remitir').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-remitir').click(function (e) {
        
        var cli_cliente_id = $(this).parents('.uno').attr('cli_cliente_id');
        var vta_presupuesto_id = $(this).parents('.uno').attr('vta_presupuesto_id');
        
        verModalRemision(cli_cliente_id, vta_presupuesto_id);
    });    
}
function verModalRemision(cli_cliente_id, vta_presupuesto_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_remito_gestion/modal_generar_remito.php",
        data: 'tipo=orden-venta&cli_cliente_id=' + cli_cliente_id + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Generar Remito desde Orden de Venta',
                close: function () {
                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('vta_orden_venta_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            
            getFileCssVtaRemitoGestion();
            getFileJsVtaRemitoGestion();
                
            setTimeout(function () {

                $('.div_modal').html(data);
                
                setInitVtaRemitoGestion();

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

function getFileCssVtaRemitoGestion() {
    $.ajax({
        url: global_path_http + "admin/ajax/modulos/vta_remito_gestion/css/vta_remito_gestion.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $(".div_modal").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsVtaRemitoGestion() {
    $.getScript(global_path_http + "admin/ajax/modulos/vta_remito_gestion/js/vta_remito_gestion.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}

// -----------------------------------------------------------------------------
// RemisionAjuste
// -----------------------------------------------------------------------------
function setClickAccionForaneaRemitirAjuste(){
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-remitir-ajuste').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta-presupuesto-vta-remitir-ajuste').click(function (e) {
        
        var cli_cliente_id = $(this).parents('.uno').attr('cli_cliente_id');
        var vta_presupuesto_id = $(this).parents('.uno').attr('vta_presupuesto_id');
        
        verModalRemisionAjuste(cli_cliente_id, vta_presupuesto_id);
    });    
}
function verModalRemisionAjuste(cli_cliente_id, vta_presupuesto_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_generar_remito_ajuste.php",
        data: 'tipo=orden-venta&cli_cliente_id=' + cli_cliente_id + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 800,
                modal: true,
                title: 'Generar Remito Ajuste desde Orden de Venta',
                close: function () {
                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('vta_orden_venta_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            
            getFileCssVtaRemitoAjusteGestion();
            getFileJsVtaRemitoAjusteGestion();
                
            setTimeout(function () {

                $('.div_modal').html(data);
                
                setInitVtaRemitoAjusteGestion();

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

function getFileCssVtaRemitoAjusteGestion() {
    $.ajax({
        url: global_path_http + "admin/ajax/modulos/vta_remito_ajuste_gestion/css/vta_remito_ajuste_gestion.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $(".div_modal").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsVtaRemitoAjusteGestion() {
    $.getScript(global_path_http + "admin/ajax/modulos/vta_remito_ajuste_gestion/js/vta_remito_ajuste_gestion.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}
