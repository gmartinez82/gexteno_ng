// archivo js del modulo 'pde_recepcion'
$(function ($) {
    setInitPdeRecepcions();
});

function setInitPdeRecepcions() {

    // general
    setClickBtnAgregarRecepcion();
    setSubmitFormModalPdeRecepcion();

    // filtros
    setChangePdeRecepcionFiltrosCentroPedido();
    setChangePdeRecepcionFiltrosProveedor();
    setChangePdeRecepcionFiltrosEtiqueta();
    setChangePdeRecepcionFiltrosCategoria();
    setChangePdeRecepcionFiltrosInsumo();
    setChangePdeRecepcionFiltrosTipoEstado();
    setChangePdeRecepcionFiltrosTipoRecepcion();
    setChangePdeRecepcionFiltrosCentroRecepcion();

    // acciones top
    setClickPdeRecepcionTopRegistrarPdeFactura();
    setClickPdeRecepcionTopRegistrarPdeFacturaConfirmacion();

    // acciones masivas  
    setCheckPdeRecepcionAll();
    
    // acciones
    setClickPdeRecepcionFicha();
    setClickPdeRecepcionRefresh();

    // acciones dbsuggest
    setClickPdeRecepcionDespacharAPanol();
    setClickPdeRecepcionRecibirEnPanol();
    setClickPdeRecepcionRegistrarPago();

    // recibir en panol
    setChangeCmbInsumoAlRecibir();
    setChangeSpinnerCantidadAlRecibir();

}

/* Filtros */
function setChangePdeRecepcionFiltrosCentroPedido() {
    $('#cmb_filtro_pde_centro_pedido_id').unbind();
    $('#cmb_filtro_pde_centro_pedido_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosEtiqueta() {
    $('#cmb_filtro_ins_etiqueta_id').unbind();
    $('#cmb_filtro_ins_etiqueta_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {

        // se actualiza combo de insumos
        var categoria_id = $(this).val();
        var comprable = 1;
        var consumible = 0;
        var transformable_origen = 0;
        var transformable_destino = 0;
        setInsumoCmbPorCategoria(categoria_id, comprable);

        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosInsumo() {
    $('#cmb_filtro_ins_insumo_id').unbind();
    $('#cmb_filtro_ins_insumo_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosTipoEstado() {
    $('#cmb_filtro_pde_recepcion_tipo_estado_id').unbind();
    $('#cmb_filtro_pde_recepcion_tipo_estado_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosTipoRecepcion() {
    $('#cmb_filtro_pde_tipo_recepcion_id').unbind();
    $('#cmb_filtro_pde_tipo_recepcion_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}
function setChangePdeRecepcionFiltrosCentroRecepcion() {
    $('#cmb_filtro_pde_centro_recepcion_id').unbind();
    $('#cmb_filtro_pde_centro_recepcion_id').change(function () {
        setAdmBuscadorTop('pde_recepcion_gestion');
    });
}

function setInsumoCmbPorCategoria(categoria_id, comprable) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_insumo/get_json_ins_insumo_por_categoria.php",
        data: "categoria_id=" + categoria_id + "&comprable=" + comprable,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length
            var cmb_insumo = $('#cmb_filtro_ins_insumo_id');

            cmb_insumo.empty();
            cmb_insumo.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_insumo.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}


/* 
 * Registrar Factura de Compra
 */
function setClickPdeRecepcionTopRegistrarPdeFactura(){
    $('.div_listado_buscador .boton.registrar-pde-factura').unbind();
    $('.div_listado_buscador .boton.registrar-pde-factura').click(function () {
        verModalRegistrarPdeFactura();
    });    
}
function verModalRegistrarPdeFactura(){
    var form = $('#form_cuerpo');

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_recepcion_gestion/modal_recepcion_registrar_pde_factura.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 600,
                modal: true,
                title: 'Registrar Factura de Compra',
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
            setInitPdeRecepcions();
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

function setClickPdeRecepcionTopRegistrarPdeFacturaConfirmacion(){
    $('.div_modal .datos.registrar-pde-factura #btn_registrar_pde_factura').unbind();
    $('.div_modal .datos.registrar-pde-factura #btn_registrar_pde_factura').click(function (e) {
        setRegistrarFactura();
    });
}
function setRegistrarFactura(){
    var pagina = $("#hdn_pag_actual").val();
    var form = $("#form_recepcion");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_recepcion_gestion/set_registrar_factura.php",
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
                refreshAdmAll('pde_recepcion_gestion', pagina);
            }

            setInitVtaFacturaGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckPdeRecepcionAll(){
    $('#listado_adm_pde_recepcion_gestion #chk_pde_recepcion_all').unbind();
    $('#listado_adm_pde_recepcion_gestion #chk_pde_recepcion_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_pde_recepcion_gestion .chk_pde_recepcion").attr('checked', true);
        } else {
            $("#listado_adm_pde_recepcion_gestion .chk_pde_recepcion").attr('checked', false);
        }
        //$("#listado_vta_factura_generar_factura").find(".chk_vta_orden_venta").trigger('change');
    });
}

/*
 Agregar Pedido
 */
function setClickBtnAgregarRecepcion() {
    $('.botonera .agregar-recepcion').unbind();
    $('.botonera .agregar-recepcion').click(function () {
        verModalAgregarRecepcion();
        return false;
    });
}

function verModalAgregarRecepcion() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recepcion_gestion/modal_recepcion_agregar.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'Nuevo Recepcion de Proveedores (PDR)',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pde_recepcion_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeRecepcions();
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

function setSubmitFormModalPdeRecepcion() {
    $('#form_recepcion').unbind();
    $('#form_recepcion').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "html",
            beforeSend: function (objeto) {
                $('.div_modal').html(img_loading);
            },
            success: function (data) {
                $('.div_modal').html(data);
                setInitPdeRecepcions();
                setInit();

                setInitDbSuggest();
                setInitDbSuggestBoton();

                try {
                    // cerrar el modal automaticamente
                    var hdn_error = $("#hdn_error").val();
                    if (hdn_error == 0) {
                        // no hubo error
                        $('.div_modal').dialog('close');

                        var hdn_mensaje = $("#hdn_mensaje").val();
                        verDivMensaje('.div_listado_buscador', 'ok', hdn_mensaje, 2000);
                    }
                } catch (e) {
                }

            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
        return false;
    });
}


/* Refresh Uno */
function setClickPdeRecepcionRefresh() {
    $('#listado_adm_pde_recepcion_gestion .adm_botones_accion.refresh').unbind();
    $('#listado_adm_pde_recepcion_gestion .adm_botones_accion.refresh').click(function (e) {
        var recepcion_id = $(this).parents('.uno').attr('identificador');
        refreshAdmUno('pde_recepcion_gestion', recepcion_id);
    });
}


/*
 Ver Ficha de la Recepcion
 */
function setClickPdeRecepcionFicha() {
    $('#listado_adm_pde_recepcion_gestion .adm_botones_accion.ficha').unbind();
    $('#listado_adm_pde_recepcion_gestion .adm_botones_accion.ficha').click(function (e) {
        var recepcion_id = $(this).parents('.uno').attr('identificador');
        verModalFichaRecepcion(recepcion_id);
    });
}
function verModalFichaRecepcion(recepcion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recepcion_gestion/modal_recepcion_ficha.php",
        data: 'recepcion_id=' + recepcion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 450,
                modal: true,
                title: 'Ficha de la Recepcion (PDR)',
                close: function () {
                    $('.div_modal').dialog('close');
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('pde_recepcion_gestion', recepcion_id);

            $('.div_modal').html(data);
            setInitPdeRecepcions();
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
 Despachar Recepcion a Panol
 */
function setClickPdeRecepcionDespacharAPanol() {
    $('.db_context .db_context_content .uno.despachar').unbind();
    $('.db_context .db_context_content .uno.despachar').click(function (e) {
        var recepcion_id = $(this).parents('.datos').attr('recepcion_id');
        verModalDespacharAPanolRecepcion(recepcion_id);
    });
}
function verModalDespacharAPanolRecepcion(recepcion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recepcion_gestion/modal_recepcion_despachar.php",
        data: 'recepcion_id=' + recepcion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 550,
                modal: true,
                title: 'Despachar Recepcion hacia Pañol (PDR)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_recepcion_gestion', recepcion_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_recepcion_gestion', recepcion_id);

            $('.div_modal').html(data);
            setInitPdeRecepcions();
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
 Recibir Recepcion en Panol
 */
function setClickPdeRecepcionRecibirEnPanol() {
    $('.db_context .db_context_content .uno.recibir').unbind();
    $('.db_context .db_context_content .uno.recibir').click(function (e) {
        var recepcion_id = $(this).parents('.datos').attr('recepcion_id');
        verModalRecibirEnPanolRecepcion(recepcion_id);
    });
}
function verModalRecibirEnPanolRecepcion(recepcion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recepcion_gestion/modal_recepcion_recibir.php",
        data: 'recepcion_id=' + recepcion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Recibir Recepcion en Pañol (PDR)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_recepcion_gestion', recepcion_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_recepcion_gestion', recepcion_id);

            $('.div_modal').html(data);
            setInitPdeRecepcions();
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
 Reegistrar Pago de Compra
 */
function setClickPdeRecepcionRegistrarPago() {
    $('.db_context .db_context_content .uno.registrar-pago').unbind();
    $('.db_context .db_context_content .uno.registrar-pago').click(function (e) {
        var recepcion_id = $(this).parents('.datos').attr('recepcion_id');
        verModalRegistrarPago(recepcion_id);
    });
}
function verModalRegistrarPago(recepcion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recepcion_gestion/modal_registrar_pago.php",
        data: 'recepcion_id=' + recepcion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Registrar Pago',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_recepcion_gestion', recepcion_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_recepcion_gestion', recepcion_id);

            $('.div_modal').html(data);
            setInitPdeRecepcions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}




function setChangeCmbInsumoAlRecibir() {
    $('.modal-recibir #cmb_ins_insumo_id').unbind();
    $('.modal-recibir #cmb_ins_insumo_id').change(function (e) {
        var recepcion_id = $('#hdn_id').val();
        var insumo_id = $('#cmb_ins_insumo_id').val();
        var cantidad = $('#txt_cantidad').val();

        refreshBloqueInsumosIdentificadosEntrantes(recepcion_id, insumo_id, cantidad);
    });
}

function setChangeSpinnerCantidadAlRecibir() {
    $(".modal-recibir #txt_cantidad").spinner({
        min: 1,
    });

    $(".modal-recibir #txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var recepcion_id = $('#hdn_id').val();
            var insumo_id = $('#cmb_ins_insumo_id').val();
            var cantidad = $('#txt_cantidad').val();

            refreshBloqueInsumosIdentificadosEntrantes(recepcion_id, insumo_id, cantidad);
        }
    });
}

function refreshBloqueInsumosIdentificadosEntrantes(recepcion_id, insumo_id, cantidad) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_recepcion_gestion/refresh_bloque_insumos_identificados_entrantes.php",
        data: 'recepcion_id=' + recepcion_id + '&insumo_id=' + insumo_id + '&cantidad=' + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.bloque_insumos_identificados_entrantes').html(img_loading);
        },
        success: function (data) {
            $('.bloque_insumos_identificados_entrantes').html(data);

            setInitPdeRecepcions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

