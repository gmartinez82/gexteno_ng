// archivo js del modulo 'pde_oc'
$(function ($) {
    setInitPdeOcs();
});

function setInitPdeOcs() {

    // general
    setClickBtnAgregarPdeOc();
    setChangePdeOcAgregarCategoria();
    setSubmitFormModalPdeOc();

    // filtros
    setChangePdePedidoFiltrosCentroPedido();
    setChangePdeOcFiltroProveedor();
    setChangePdeOcFiltroCategoria();
    setChangePdeOcFiltroInsumo();
    setChangePdeOcFiltrosEstado();
    setChangePdeOcFiltrosEstadoRecepcion();
    setChangePdeOcFiltrosEstadoFacturacion();
    setChangePdeOcFiltrosDestacado();

    // acciones
    setClickPdeOcFicha();
    setClickPdeOcRefresh();
    setClickPdeOcGestionEnviarPorCorreo();
    setClickPdeOcGestionEnviarPorCorreoConfirmacion();
    
    setClickPdeOcReclamos();

    // acciones dbsuggest
    setClickPdeOcPublicar();
    setClickPdeOcAnular();
    setClickPdeOcReclamar();
    setClickPdeOcRecibir();
    setClickPdeOcRecibirEnPanol();

    // modal recibir en panol
    setChangeCmbInsumoAlRecibir();
    setChangeSpinnerCantidadAlRecibir();

    // etiqueta de recepcion
    setClickGenerarEtiquetaRecepcion();
    setClickGenerarEtiquetaRecepcionConfirmar();
    setClickGenerarEtiquetaRecepcionConfirmarExec();

    setClickBarcodeInternoRecepcionGenerarArchivoPDF();
}


/*
 Agregar OC
 */
function setClickBtnAgregarPdeOc() {
    $('.botonera .agregar-oc').unbind();
    $('.botonera .agregar-oc').click(function () {
        verModalAgregarPdeOc();
    });
}
function verModalAgregarPdeOc() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_agregar.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 650,
                modal: true,
                title: 'Nuevo OC Directa',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pde_oc_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeOcs();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();

            //setInitRelaciones();
            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

// eventos del filtro
function setChangePdePedidoFiltrosCentroPedido() {
    $('#cmb_filtro_pde_centro_pedido_id').unbind();
    $('#cmb_filtro_pde_centro_pedido_id').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}
function setChangePdeOcFiltroProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}
function setChangePdeOcFiltroCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {

        // se actualiza combo de insumos
        var categoria_id = $(this).val();
        var cmb = $('#cmb_filtro_ins_insumo_id');
        var comprable = 1;
        var consumible = 0;
        var transformable_origen = 0;
        var transformable_destino = 0;
        setInsumoCmbPorCategoria(cmb, categoria_id, comprable);

        setAdmBuscadorTop('pde_oc');
    });
}
function setChangePdeOcFiltroInsumo() {
    $('#cmb_filtro_ins_insumo_id').unbind();
    $('#cmb_filtro_ins_insumo_id').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}
function setChangePdeOcFiltrosEstado() {
    $('#cmb_filtro_pde_oc_estado_id').unbind();
    $('#cmb_filtro_pde_oc_estado_id').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}
function setChangePdeOcFiltrosEstadoRecepcion() {
    $('#cmb_filtro_pde_oc_tipo_estado_recepcion_id').unbind();
    $('#cmb_filtro_pde_oc_tipo_estado_recepcion_id').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}
function setChangePdeOcFiltrosEstadoFacturacion() {
    $('#cmb_filtro_pde_oc_tipo_estado_facturacion_id').unbind();
    $('#cmb_filtro_pde_oc_tipo_estado_facturacion_id').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}
function setChangePdeOcFiltrosDestacado() {
    $('#cmb_filtro_destacado').unbind();
    $('#cmb_filtro_destacado').change(function () {
        setAdmBuscadorTop('pde_oc_gestion');
    });
}

function setInsumoCmbPorCategoria(cmb, categoria_id, comprable) {
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
            var cmb_insumo = $(cmb);

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
function setChangePdeOcAgregarCategoria() {
    $('#cmb_ins_categoria_id').unbind();
    $('#cmb_ins_categoria_id').change(function () {

        // se actualiza combo de insumos
        var categoria_id = $(this).val();
        var cmb = $('#cmb_ins_insumo_id');
        var comprable = 1;
        var consumible = 0;
        var transformable_origen = 0;
        var transformable_destino = 0;
        setInsumoCmbPorCategoria(cmb, categoria_id, comprable);
    });
}


function setSubmitFormModalPdeOc() {
    $('#form_pedido').unbind();
    $('#form_pedido').submit(function () {
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
                setInitPdeOcs();
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

function setClickPdeOcRefresh() {
    $('#listado_adm_pde_oc_gestion .adm_botones_accion.refresh').unbind();
    $('#listado_adm_pde_oc_gestion .adm_botones_accion.refresh').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('identificador');
        refreshAdmUno('pde_oc_gestion', oc_id);
    });
}


function setClickPdeOcGestionEnviarPorCorreo() {
    $("#listado_adm_pde_oc_gestion .adm_botones_accion.pde-oc-enviar-por-correo").unbind();
    $("#listado_adm_pde_oc_gestion .adm_botones_accion.pde-oc-enviar-por-correo").click(function (e) {
        var pde_oc_id = $(this).parents(".uno").attr("identificador");
        verModalPdeOcGestionBotonEnviarPorMail(pde_oc_id);
    });
}

function verModalPdeOcGestionBotonEnviarPorMail(pde_oc_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_oc_gestion/modal_pde_oc_gestion_enviar_email.php",
        data: 'pde_oc_id=' + pde_oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '55%',
                height: 330,
                modal: true,
                title: 'Enviar OC a Proveedor',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            
            setInitPdeOcs();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeOcGestionEnviarPorCorreoConfirmacion() {
    $(".div_modal .datos.enviar-factura #btn_enviar").unbind();
    $(".div_modal .datos.enviar-factura #btn_enviar").click(function (e) {
        var pde_oc_id = $(this).parents(".datos").attr("pde_oc_id");
        setPdeOcGestionEnviarPorCorreoConfirmacion(pde_oc_id);
    });
}

function setPdeOcGestionEnviarPorCorreoConfirmacion(pde_oc_id) {
    var form = $("#form_enviar_factura");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_oc_gestion/set_pde_oc_gestion_enviar_email.php",
        data: form.serialize() + '&pde_oc_id=' + pde_oc_id,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            $(".div_modal .botonera").hide();
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            //$('.div_modal').html(img_loading);
            var arr = data;
            if (arr["error"]) {
                $(".div_modal .botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitPdeOcs();
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
 Ver Modal de Reclamos
 */
function setClickPdeOcReclamos() {
    $('#listado_adm_pde_oc_gestion .adm_botones_accion.reclamos').unbind();
    $('#listado_adm_pde_oc_gestion .adm_botones_accion.reclamos').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('identificador');
        verModalReclamosOc(oc_id);
    });
}
function verModalReclamosOc(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_reclamos.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 1000,
                height: 450,
                modal: true,
                title: 'Reclamos de la Orden de Compra (OC)',
                close: function () {
                    $('.div_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeOcs();
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
 Ver Ficha de la OC
 */
function setClickPdeOcFicha() {
    $('#listado_adm_pde_oc_gestion .adm_botones_accion.ficha').unbind();
    $('#listado_adm_pde_oc_gestion .adm_botones_accion.ficha').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('identificador');
        verModalFichaOc(oc_id);
    });
}
function verModalFichaOc(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_ficha.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 450,
                modal: true,
                title: 'Ficha de la Orden de Compra (OC)',
                close: function () {
                    $('.div_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            refreshAdmUno('pde_oc_gestion', oc_id);

            $('.div_modal').html(data);
            setInitPdeOcs();
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
 Oc Pedido
 */
function setClickPdeOcPublicar() {
    $('.db_context .db_context_content .uno.publicar').unbind();
    $('.db_context .db_context_content .uno.publicar').click(function (e) {
        var oc_id = $(this).parents('.datos').attr('oc_id');
        setOcPublicado(oc_id);
    });
}
function setOcPublicado(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/set_oc_gestion_publicado.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {

        },
        success: function (data) {
            refreshPdeOcUno(oc_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Anular OC
 */
function setClickPdeOcAnular() {
    $('.db_context .db_context_content .uno.anular').unbind();
    $('.db_context .db_context_content .uno.anular').click(function (e) {
        var oc_id = $(this).parents('.datos').attr('oc_id');
        verModalAnularOc(oc_id);
    });
}
function verModalAnularOc(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_anular.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Anular Orden de Compra (OC)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_oc_gestion', oc_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_oc_gestion', oc_id);

            $('.div_modal').html(data);
            setInitPdeOcs();
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
 Reclamar OC
 */
function setClickPdeOcReclamar() {
    $('.db_context .db_context_content .uno.reclamar').unbind();
    $('.db_context .db_context_content .uno.reclamar').click(function (e) {
        var oc_id = $(this).parents('.datos').attr('oc_id');
        verModalReclamarOc(oc_id);
    });
}
function verModalReclamarOc(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_reclamar.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Reclamar Orden de Compra (OC)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_oc_gestion', oc_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_oc_gestion', oc_id);

            $('.div_modal').html(data);
            setInitPdeOcs();
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
 Recibir OC
 */
function setClickPdeOcRecibir() {
    $('.db_context .db_context_content .uno.recibir').unbind();
    $('.db_context .db_context_content .uno.recibir').click(function (e) {
        var oc_id = $(this).parents('.datos').attr('oc_id');
        verModalRecibirOc(oc_id);
    });
}
function verModalRecibirOc(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_recibir.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Recibir Orden de Compra (OC)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_oc_gestion', oc_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_oc_gestion', oc_id);

            $('.div_modal').html(data);
            setInitPdeOcs();
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
 Recibir OC en Panol
 */
function setClickPdeOcRecibirEnPanol() {
    $('.db_context .db_context_content .uno.recibir-en-panol').unbind();
    $('.db_context .db_context_content .uno.recibir-en-panol').click(function (e) {
        var oc_id = $(this).parents('.datos').attr('oc_id');
        verModalRecibirOcEnPanol(oc_id);
    });
}
function verModalRecibirOcEnPanol(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_recibir_en_panol.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Recibir Orden de Compra (OC) en Pañol',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_oc_gestion', oc_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_oc_gestion', oc_id);

            $('.div_modal').html(data);
            setInitPdeOcs();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Modal Recibir en Panol */
function setChangeCmbInsumoAlRecibir() {
    $('.modal-recibir #cmb_ins_insumo_id').unbind();
    $('.modal-recibir #cmb_ins_insumo_id').change(function (e) {
        var oc_id = $('#hdn_id').val();
        var insumo_id = $('#cmb_ins_insumo_id').val();
        var cantidad = $('#txt_cantidad').val();

        refreshBloqueInsumosIdentificadosEntrantes(oc_id, insumo_id, cantidad);
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
            var oc_id = $('#hdn_id').val();
            var insumo_id = $('#cmb_ins_insumo_id').val();
            var cantidad = $('#txt_cantidad').val();

            refreshBloqueInsumosIdentificadosEntrantes(oc_id, insumo_id, cantidad);
        }
    });
}

function refreshBloqueInsumosIdentificadosEntrantes(oc_id, insumo_id, cantidad) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/refresh_bloque_insumos_identificados_entrantes.php",
        data: 'oc_id=' + oc_id + '&insumo_id=' + insumo_id + '&cantidad=' + cantidad,
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

/*
 Generar Etiqueta de Recepcion
 */
function setClickGenerarEtiquetaRecepcion() {
    $('#listado_adm_pde_oc_gestion .boton.etiquetas-recepcion').unbind();
    $('#listado_adm_pde_oc_gestion .boton.etiquetas-recepcion').click(function (e) {
        var id = $(this).parents('.recepcion').attr('pde_recepcion_id');
        verModalEtiquetaRecepcion(id);
    });
}
function verModalEtiquetaRecepcion(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_etiqueta_recepcion.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 550,
                modal: true,
                title: 'Generacion de Etiqueta de Recepcion',
                close: function () {
                    //$('.div_modal').dialog('close');					
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitPdeOcs();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickGenerarEtiquetaRecepcionConfirmar() {
    $('.div_modal .etiqueta-recepcion .boton.generar-archivo').unbind();
    $('.div_modal .etiqueta-recepcion .boton.generar-archivo').click(function (e) {
        var id = $(this).parents('.datos').attr('pde_recepcion_id');
        var cantidad = $("#txt_cantidad").val();

        //location.href = 'index.php?id=' + id;
        window.open(
                'ins_insumo_barcode_gestion_interno_generacion.php?id=' + id + '&cantidad=' + cantidad,
                '_blank' // <- This is what makes it open in a new window.
                );
    });
}

function setClickGenerarEtiquetaRecepcionConfirmarExec() {
    $('.div_modal .etiqueta-recepcion .boton.generar-archivo-exec').unbind();
    $('.div_modal .etiqueta-recepcion .boton.generar-archivo-exec').click(function (e) {
        var id = $(this).parents('.datos').attr('pde_recepcion_id');
        var cantidad = $("#txt_cantidad").val();
        var elem = $(this);

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/pde_oc_gestion/set_etiqueta_recepcion_exec.php",
            data: 'id=' + id + '&cantidad=' + cantidad,
            dataType: "html",
            beforeSend: function (objeto) {
                elem.hide();
            },
            success: function (data) {
                elem.show();
                refreshAdmUno('pde_oc_gestion', id);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}


function setClickBarcodeInternoRecepcionGenerarArchivoPDF()
{
    $('.div_modal .etiqueta-recepcion .boton.generar-archivo-pdf').unbind();
    $('.div_modal .etiqueta-recepcion .boton.generar-archivo-pdf').click(function (e)
    {
        var pde_recepcion_id = $(this).parents('.datos').attr('pde_recepcion_id');
        var cantidad = $("#txt_cantidad").val();
        //location.href = 'index.php?id=' + id;
        window.open(
                'ins_insumo_barcode_gestion_interno_recepcion_generacion_pdf.php?pde_recepcion_id=' + pde_recepcion_id + '&cantidad=' + cantidad,
                '_blank' // <- This is what makes it open in a new window.
                );
    });
}
