// archivo js del modulo 'ins_stock_resumen'
$(function ($) {
    setInitStockResumen();
});

function setInitStockResumen() {

    // filtros
    setChangeFiltroEtiqueta();
    setChangeFiltroCategoria();
    setChangeFiltroClasificacion();
    setChangeFiltroMarca();
    setChangeFiltroProveedor();
    setChangeFiltroPanol();
    setChangeFiltroTipoEstado();
    setChangeFiltroRequiereReabastecimiento();
    setChangeFiltroEstado();

    // general
    setClickCantidadVerModalDetalle();
    setClickCantidadPasivoVerModalDetalle();
    setClickVerModalHistorialMovimientos();
    setClickVerModalCostoEvolucion();
    setClickCostoAgregar();

    setClickDetalleBtnHistorial();

    setClickEditarPuntosPanolCentral();
    setClickEditarPuntosPanolApoderado();
    setClickUbicacion();

    // acciones masivas
    setCheckInsStockResumenGestionAll();

    // se agrega evento para generar Pde Pedido
    setClickBtnAgregarPedidoPde();

    // se agrega evento para generar Pde OC Masiva
    setClickBtnAgregarOcMasivaPde();

    // se agrega evento para generar Pdi Solicitud, Inicializacion y Ajuste
    setClickBtnAgregarSolicitudPdi();
    setClickBtnAgregarInicializacionPdi();
    setClickBtnAgregarAjustePdi();

    // se agrega evento para generar PdiAgrupacion Masiva
    setClickBtnAgregarPdiPedidoAgrupacionMasiva();

}

/*
 Agregar Solicitud de Stock
 */
function setClickBtnAgregarSolicitudPdi() {
    $('.db_context .db_context_content .datos .uno.registrar-solicitud').unbind();
    $('.db_context .db_context_content .datos .uno.registrar-solicitud').click(function () {
        var ins_stock_resumen_id = $(this).parents('.uno').attr('identificador');
        
        verModalAgregarSolicitudPdi(ins_stock_resumen_id);
    });
}

function verModalAgregarSolicitudPdi(ins_stock_resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar.php",
        data: 'tipo_accion=solicitud' + '&ins_stock_resumen_id=' + ins_stock_resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Solicitud de Stock (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');

                    refreshAdmUno('ins_stock_resumen_gestion', ins_stock_resumen_id);
                },
                hide: 'fade',
            });

        },
        success: function (data) {

            getFileJsPdiPedido(); // se levanta JS

            setTimeout(function () {
                $('.div_modal').html(data);

                getFileCssPdiPedido(); // se levanta CSS
                setInitPdiPedidos();

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

/*
 Agregar Inicializacion de Stock
 */
function setClickBtnAgregarInicializacionPdi() {
    $('.div_listado_buscador #form_buscador_top .col .boton.registrar-inicializacion').unbind();
    $('.div_listado_buscador #form_buscador_top .col .boton.registrar-inicializacion').click(function () {
        verModalAgregarInicializacionPdi();
    });
}

function verModalAgregarInicializacionPdi() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_ajuste.php",
        data: 'tipo_accion=inicializacion',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Ajuste Inicializacion de Stock (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('ins_stock_resumen_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {

            getFileJsPdiPedido(); // se levanta JS

            setTimeout(function () {
                $('.div_modal').html(data);

                getFileCssPdiPedido(); // se levanta CSS
                setInitPdiPedidos();

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


/*
 Agregar Ajuste de Stock
 */
function setClickBtnAgregarAjustePdi() {
    $('.db_context .db_context_content .datos .uno.registrar-ajuste').unbind();
    $('.db_context .db_context_content .datos .uno.registrar-ajuste').click(function () {
        var ins_stock_resumen_id = $(this).parents('.uno').attr('identificador');

        verModalAgregarAjustePdi(ins_stock_resumen_id);
    });
}

function verModalAgregarAjustePdi(ins_stock_resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_ajuste.php",
        data: 'tipo_accion=ajuste' + '&ins_stock_resumen_id=' + ins_stock_resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Ajuste Interno de Stock (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');

                    refreshAdmUno('ins_stock_resumen_gestion', ins_stock_resumen_id);
                },
                hide: 'fade',
            });

        },
        success: function (data) {

            getFileJsPdiPedido(); // se levanta JS

            setTimeout(function () {

                $('.div_modal').html(data);

                getFileCssPdiPedido(); // se levanta CSS
                setInitPdiPedidos();

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

function getFileCssPdiPedido() {
    $.ajax({
        url: global_path_http + "css/admin/pdi.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_pedido").before(css);
        }
    });
}
function getFileJsPdiPedido() {
    $.ajax({
        url: global_path_http + "admin/ajax/modulos/pdi_pedido_gestion/js/pdi_pedido_gestion.js",
        success: function (data) {
            var css = "<script>" + data + "</script>";
            $("#form_pedido").before(css);
        }
    });
}


/*
 Agregar Pedido PDE
 */
function setClickBtnAgregarPedidoPde() {
    $('.adm_botones_acciones .adm_botones_accion.generar-pde').unbind();
    $('.adm_botones_acciones .adm_botones_accion.generar-pde').click(function () {
        var ins_stock_resumen_id = $(this).parents('.uno').attr('identificador');

        verModalAgregarPedidoPde(ins_stock_resumen_id);
    });
}

function verModalAgregarPedidoPde(ins_stock_resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_agregar.php",
        data: 'ins_stock_resumen_id=' + ins_stock_resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 650,
                modal: true,
                title: 'Generar Pedido Externo (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');

                    refreshAdmUno('ins_stock_resumen_gestion', ins_stock_resumen_id);

                },
                hide: 'fade',
            });
        },
        success: function (data) {

            getFileJsPdePedido(); // se levanta JS

            setTimeout(function () {
                $('.div_modal').html(data);

                getFileCssPdePedido(); // se levanta CSS
                setInitPdePedidos();

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

function getFileCssPdePedido() {
    $.ajax({
        url: "../css/admin/pde.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_div_modal").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsPdePedido() {
    $.getScript("../js/admin/modulos/pde_pedido.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}

/*
 Agregar OC Masiva PDE
 */
function setClickBtnAgregarOcMasivaPde() {
    $('.div_listado_buscador #form_buscador_top .col .boton.registrar-oc-masiva').unbind();
    $('.div_listado_buscador #form_buscador_top .col .boton.registrar-oc-masiva').click(function () {

        verModalAgregarOcMasivaPde();
    });
}
function verModalAgregarOcMasivaPde() {
    var form = $("#form_cuerpo");
    var prv_proveedor_id = $('#cmb_filtro_prv_proveedor_id').val();
    var pan_panol_id = $('#cmb_filtro_pan_panol_id').val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_agregar_masivo.php",
        data: form.serialize() + '&prv_proveedor_id=' + prv_proveedor_id + '&pan_panol_id=' + pan_panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 650,
                modal: true,
                title: 'Generar OC Masiva (OC)',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('ins_stock_resumen_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            getFileJsPdeOc(); // se levanta JS

            setTimeout(function () {
                $('.div_modal').html(data);

                getFileCssPdeOc(); // se levanta CSS
                setInitPdeOcAgrupacions();

                setInit();

                setInitDbSuggest();
                setInitDbSuggestBoton();
            }, 1500);

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function getFileCssPdeOc() {
    $.ajax({
        url: "../admin/ajax/modulos/pde_oc_agrupacion_gestion/css/pde_oc_agrupacion_gestion.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_div_modal").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsPdeOc() {
    $.getScript("../admin/ajax/modulos/pde_oc_agrupacion_gestion/js/pde_oc_agrupacion_gestion.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}

/*
 Editar Puntos de Pedido Panol Apoderado
 */
function setClickEditarPuntosPanolCentral() {
    $('#listado_adm_ins_stock_resumen_gestion .boton.editar.puntos_panol_central').unbind();
    $('#listado_adm_ins_stock_resumen_gestion .boton.editar.puntos_panol_central').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalPuntosPanolCentral(id);
    });
}
function verModalPuntosPanolCentral(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_puntos_panol_central.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 650,
                height: 600,
                modal: true,
                title: 'Puntos de Pedido',
                close: function () {
                    //$('.div_modal').dialog('close');					
                    refreshAdmUno('ins_stock_resumen_gestion', id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitStockResumen();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Editar Puntos de Pedido Panol Apoderado
 */
function setClickEditarPuntosPanolApoderado() {
    $('#listado_adm_ins_stock_resumen_gestion .boton.editar.puntos_panol_apoderado').unbind();
    $('#listado_adm_ins_stock_resumen_gestion .boton.editar.puntos_panol_apoderado').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalPuntosPanolApoderado(id);
    });
}
function verModalPuntosPanolApoderado(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_puntos_panol_apoderado.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 650,
                height: 600,
                modal: true,
                title: 'Puntos de Pedido',
                close: function () {
                    //$('.div_modal').dialog('close');					
                    refreshAdmUno('ins_stock_resumen_gestion', id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitStockResumen();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Ver ubicacion
 */
function setClickUbicacion() {
    $('#listado_adm_ins_stock_resumen_gestion .boton.ver.ubicacion').unbind();
    $('#listado_adm_ins_stock_resumen_gestion .boton.ver.ubicacion').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalUbicacion(id);
    });
}
function verModalUbicacion(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_ubicacion.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 550,
                height: 400,
                modal: true,
                title: 'Ubicacion del Producto en Pañol',
                close: function () {
                    //$('.div_modal').dialog('close');					
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitStockResumen();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckInsStockResumenGestionAll() {
    $('#listado_adm_ins_stock_resumen_gestion #chk_pde_stock_resumen_all').unbind();
    $('#listado_adm_ins_stock_resumen_gestion #chk_pde_stock_resumen_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_ins_stock_resumen_gestion .chk_ins_stock_resumen").attr('checked', true);
        } else {
            $("#listado_adm_ins_stock_resumen_gestion .chk_ins_stock_resumen").attr('checked', false);
        }
    });
}

// eventos del filtro
function setChangeFiltroEtiqueta() {
    $('#cmb_filtro_ins_etiqueta_id').unbind();
    $('#cmb_filtro_ins_etiqueta_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}
function setChangeFiltroCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}
function setChangeFiltroClasificacion() {
    $('#cmb_filtro_ins_clasificacion_id').unbind();
    $('#cmb_filtro_ins_clasificacion_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}
function setChangeFiltroMarca() {
    $('#cmb_filtro_ins_marca_id').unbind();
    $('#cmb_filtro_ins_marca_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}
function setChangeFiltroProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');

        // se determina si se muestra o no boton para OC masiva
        controlMostrarBtnOcMasiva();
    });
}
function setChangeFiltroPanol() {
    $('#cmb_filtro_pan_panol_id').unbind();
    $('#cmb_filtro_pan_panol_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');

        // se determina si se muestra o no boton para OC masiva
        controlMostrarBtnOcMasiva();
    });
}
function setChangeFiltroTipoEstado() {
    $('#cmb_filtro_ins_stock_resumen_tipo_estado_id').unbind();
    $('#cmb_filtro_ins_stock_resumen_tipo_estado_id').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}
function setChangeFiltroRequiereReabastecimiento() {
    $('#cmb_filtro_requiere_reabastecimiento').unbind();
    $('#cmb_filtro_requiere_reabastecimiento').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}
function setChangeFiltroEstado() {
    $('#cmb_filtro_estado').unbind();
    $('#cmb_filtro_estado').change(function () {
        setAdmBuscadorTop('ins_stock_resumen_gestion');
    });
}

function controlMostrarBtnOcMasiva() {
    var prv_proveedor_id = $('#cmb_filtro_prv_proveedor_id').val();
    var pan_panol_id = $('#cmb_filtro_pan_panol_id').val();

    if (prv_proveedor_id != '' && pan_panol_id != '') {
        $(".div_listado_buscador #form_buscador_top .col .boton.registrar-oc-masiva").show();
    } else {
        $(".div_listado_buscador #form_buscador_top .col .boton.registrar-oc-masiva").hide();
    }

}




function setClickCantidadVerModalDetalle() {
    $("#listado_adm_ins_stock_resumen_gestion .uno .cantidad_disponible.detalle").unbind();
    $("#listado_adm_ins_stock_resumen_gestion .uno .cantidad_disponible.detalle").click(function () {
        var identificador = $(this).parents('.uno').attr('identificador');
        verModalCantidadDetalle(identificador, 'ACTIVO');
    });
}
function setClickCantidadPasivoVerModalDetalle() {
    $("#listado_adm_ins_stock_resumen_gestion .uno .cantidad_pasivo.detalle").unbind();
    $("#listado_adm_ins_stock_resumen_gestion .uno .cantidad_pasivo.detalle").click(function () {
        var identificador = $(this).parents('.uno').attr('identificador');
        verModalCantidadDetalle(identificador, 'PASIVO');
    });
}

function verModalCantidadDetalle(identificador, tipo) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_cantidad_detalle.php",
        data: 'identificador=' + identificador + '&tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 500,
                modal: true,
                title: '',
                close: function () {
                    $('.div_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitStockResumen();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVerModalHistorialMovimientos() {
    $("#listado_adm_ins_stock_resumen_gestion .uno .modificado").unbind();
    $("#listado_adm_ins_stock_resumen_gestion .uno .modificado").click(function () {
        var identificador = $(this).parents('.uno').attr('identificador');
        verModalHistorialMovimientos(identificador);
    });
}

function verModalHistorialMovimientos(identificador) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_historial_movimientos.php",
        data: 'identificador=' + identificador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: '',
                close: function () {
                    //$('.div_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitStockResumen();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVerModalCostoEvolucion() {
    $("#listado_adm_ins_stock_resumen_gestion .uno .costo").unbind();
    $("#listado_adm_ins_stock_resumen_gestion .uno .costo").click(function () {
        var identificador = $(this).parents('.uno').attr('identificador');
        verModalCostoEvolucion(identificador);
    });
}

function verModalCostoEvolucion(identificador) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_costo_evolucion.php",
        data: 'identificador=' + identificador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 500,
                modal: true,
                title: '',
                close: function () {
                    //$('.div_modal').dialog('close');
                    refreshAdmUno('ins_stock_resumen_gestion', identificador);
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitStockResumen();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickCostoAgregar() {
    $('#btn_costo_agregar').unbind();
    $('#btn_costo_agregar').click(function () {
        var stock_resumen_id = $(this).parents('.datos').attr('stock_resumen_id');
        verModalCostoAgregar(stock_resumen_id);
    });
}
function verModalCostoAgregar(stock_resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/modal_costo_agregar.php",
        data: 'stock_resumen_id=' + stock_resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '50%',
                height: 400,
                modal: true,
                title: '',
                close: function () {
                    //$('.div_modal').dialog('close');
                    refreshBloqueInsumoCostos(stock_resumen_id);
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitStockResumen();

            setInit();
            setInitAccionesFormulario('div_modal_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloqueInsumoCostos(stock_resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_resumen_gestion/refresh_bloque_insumo_costos.php",
        data: 'stock_resumen_id=' + stock_resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal .costos').html(data);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickDetalleBtnHistorial() {
    $('.datos.detalle .ver-historial').unbind();
    $('.datos.detalle .ver-historial').click(function () {
        var insumo_identificado_movimiento_id = $(this).parents('.uno').attr('movimiento_id');

        verModalHistorialNeumatico(insumo_identificado_movimiento_id);
    });
}

function verModalHistorialNeumatico(insumo_identificado_movimiento_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_identificado_bandeja/modal_historial.php",
        data: 'insumo_identificado_movimiento_id=' + insumo_identificado_movimiento_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: 'Historial',
                close: function () {
                    $('.div_modal_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setClickModalTabs();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Agregar PdiPedidoAgrupacion Masiva
 */
function setClickBtnAgregarPdiPedidoAgrupacionMasiva() {
    $('.div_listado_buscador #form_buscador_top .col .boton.registrar-pdi-pedido-agrupacion').unbind();
    $('.div_listado_buscador #form_buscador_top .col .boton.registrar-pdi-pedido-agrupacion').click(function () {
        verModalAgregarPdiPedidoAgrupacionMasiva();
    });
}

function verModalAgregarPdiPedidoAgrupacionMasiva() {
    var form = $("#form_cuerpo");
    var pan_panol_id = $('#cmb_filtro_pan_panol_id').val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_agrupacion_agregar_masivo.php",
        data: form.serialize() + '&pan_panol_id=' + pan_panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                /*height: 650,*/
                position: ['center', 20],
                modal: true,
                title: 'Generar Pedido Masiva (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('ins_stock_resumen_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            getFileJsPdiPedidoAgrupacion(); // se levanta JS

            setTimeout(function () {
                $('.div_modal').html(data);

                getFileCssPdiPedidoAgrupacion(); // se levanta CSS
                setInitPdiPedidoAgrupacions();

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

function getFileCssPdiPedidoAgrupacion() {
    $.ajax({
        url: "../admin/ajax/modulos/pdi_pedido_agrupacion_gestion/css/pdi_pedido_agrupacion_gestion.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_pedido_masivo").before(css);
        },
        error: function (objeto, quepaso, otroobj) {
            alert("errorx " + objeto.status);
        }
    });
}

function getFileJsPdiPedidoAgrupacion() {
    $.getScript("../admin/ajax/modulos/pdi_pedido_agrupacion_gestion/js/pdi_pedido_agrupacion_gestion.js")
            .done(function (script, textStatus) {
                //console.log(textStatus);
            })
            .fail(function (jqxhr, settings, exception) {
                //alert("errorx ");
            });
}
