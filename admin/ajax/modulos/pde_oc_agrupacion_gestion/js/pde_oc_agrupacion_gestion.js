// archivo js del modulo 'pde_oc_agrupacion'
$(function ($) {
    setInitPdeOcAgrupacions();
});

function setInitPdeOcAgrupacions() {

    // general
    setClickBtnAgregarPdeOcAgrupacionMasivo();
    setSubmitFormModalPdeOcAgrupacion();

    // masivo
    setClickBtnOcMasivaItemAgregar();
    setClickBtnOcMasivaItemQuitar();

    setOcMasivaChangeCmbPdeCentroPedido();
    setOcMasivaChangeCmbPrvProveedor();
    setOcMasivaChangeCmbIvaIncluido();
    setOcMasivaChangeTxtCantidad();
    setOcMasivaChangeDbsugInsumo();

    // guardar oc masiva
    setClickBtnGuardarOcMasiva();
    setClickBtnGenerarOcMasiva();

    // filtros
    setChangePdePedidoFiltrosCentroPedido();
    setChangePdeOcAgrupacionFiltroProveedor();
    setChangePdeOcAgrupacionFiltroCategoria();
    setChangePdeOcAgrupacionFiltroInsumo();
    setChangePdeOcAgrupacionFiltrosEstado();

    // acciones
    setClickPdeOcAgrupacionFicha();
    setClickPdeOcAgrupacionRefresh();
    setClickPdeOcAgrupacionGestionEnviarPorCorreo();
    setClickPdeOcAgrupacionGestionEnviarPorCorreoConfirmacion();

    // acciones dbsuggest
    setClickPdeOcAgrupacionAprobar();
    setClickPdeOcAgrupacionAnular();
    setClickPdeOcAgrupacionEditar();
    setClickPdeOcAgrupacionRecibirMasivo();
    setClickPdeOcAgrupacionRecibirMasivoConfirmar();

    setChkPdeOcAgrupacionRecibirMasivoSeleccionarAll();
    setChkPdeOcAgrupacionRecibirMasivoSeleccionarUno();

    setClickPdeOcAgrupacionVerEtiquetas();
    setClickBarcodeInternoRecepcionGenerarArchivoPDF();
    setClickPdeOcReclamar();

    setClickBtnVerModalInsInsumoVincularPrvInsumo();
    setClickBtnGuardarInsInsumoVincularPrvInsumo();

    setOcMasivaChangeTxtImporteOc();
    setOcMasivaChangeCmbPrvDescuentoComercial();

    // Reclamos
    setClickVerModalPdeOcReclamoAgregar();
    setClickVerModalPdeOcReclamoAgregarGuardar();
    setClickVerModalPdeOcReclamos();
}

/*
 Agregar OC Masivo
 */
function setClickBtnAgregarPdeOcAgrupacionMasivo() {
    $('.botonera .agregar-oc-masivo').unbind();
    $('.botonera .agregar-oc-masivo').click(function () {
        var pde_oc_agrupacion_id = 0;
        verModalAgregarPdeOcAgrupacionMasivo(pde_oc_agrupacion_id);
    });
}
function verModalAgregarPdeOcAgrupacionMasivo(pde_oc_agrupacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_agregar_masivo.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                /*height: 650,*/
                position: ['center', 20],
                modal: true,
                title: 'OC Masiva Directa',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pde_oc_agrupacion_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdeOcAgrupacions();
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

function setSubmitFormModalPdeOcAgrupacion() {
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

                setInitPdeOcAgrupacions();
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

// eventos del filtro
function setChangePdePedidoFiltrosCentroPedido() {
    $('#cmb_filtro_pde_centro_pedido_id').unbind();
    $('#cmb_filtro_pde_centro_pedido_id').change(function () {
        setAdmBuscadorTop('pde_oc_agrupacion_gestion');
    });
}
function setChangePdeOcAgrupacionFiltroProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        setAdmBuscadorTop('pde_oc_agrupacion_gestion');
    });
}
function setChangePdeOcAgrupacionFiltroCategoria() {
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

        setAdmBuscadorTop('pde_oc_agrupacion');
    });
}
function setChangePdeOcAgrupacionFiltroInsumo() {
    $('#cmb_filtro_ins_insumo_id').unbind();
    $('#cmb_filtro_ins_insumo_id').change(function () {
        setAdmBuscadorTop('pde_oc_agrupacion_gestion');
    });
}
function setChangePdeOcAgrupacionFiltrosEstado() {
    $('#cmb_filtro_pde_oc_agrupacion_estado_id').unbind();
    $('#cmb_filtro_pde_oc_agrupacion_estado_id').change(function () {
        setAdmBuscadorTop('pde_oc_agrupacion_gestion');
    });
}

function setClickPdeOcAgrupacionRefresh() {
    $('#listado_adm_pde_oc_agrupacion_gestion .adm_botones_accion.refresh').unbind();
    $('#listado_adm_pde_oc_agrupacion_gestion .adm_botones_accion.refresh').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.uno').attr('identificador');
        refreshAdmUno('pde_oc_agrupacion_gestion', pde_oc_agrupacion_id);
    });
}

function setClickPdeOcAgrupacionGestionEnviarPorCorreo() {
    $("#listado_adm_pde_oc_agrupacion_gestion .adm_botones_accion.pde-oc-agrupacion-enviar-por-correo").unbind();
    $("#listado_adm_pde_oc_agrupacion_gestion .adm_botones_accion.pde-oc-agrupacion-enviar-por-correo").click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents(".uno").attr("identificador");
        verModalPdeOcAgrupacionGestionBotonEnviarPorMail(pde_oc_agrupacion_id);
    });
}

function verModalPdeOcAgrupacionGestionBotonEnviarPorMail(pde_oc_agrupacion_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_pde_oc_agrupacion_gestion_enviar_email.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 360,
                modal: true,
                title: 'Enviar OC Masiva a Proveedor',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitPdeOcAgrupacions();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeOcAgrupacionGestionEnviarPorCorreoConfirmacion() {
    $(".div_modal .datos.enviar-factura #btn_enviar").unbind();
    $(".div_modal .datos.enviar-factura #btn_enviar").click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents(".datos").attr("pde_oc_agrupacion_id");
        setPdeOcAgrupacionGestionEnviarPorCorreoConfirmacion(pde_oc_agrupacion_id);
    });
}

function setPdeOcAgrupacionGestionEnviarPorCorreoConfirmacion(pde_oc_agrupacion_id) {
    var form = $("#form_enviar_factura");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_pde_oc_agrupacion_gestion_enviar_email.php",
        data: form.serialize() + '&pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
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

            setInitPdeOcAgrupacions();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnOcMasivaItemAgregar() {
    $(".div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .boton.agregar_item_oc").unbind();
    $(".div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .boton.agregar_item_oc").click(function (e) {
        var prv_proveedor_id = $("#cmb_prv_proveedor_id").val();
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setOcMasivaItemAgregar(key, prv_proveedor_id, $(this));
    });
}

function setOcMasivaItemAgregar(key, prv_proveedor_id, elem) {

    var form = $("#form_div_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_oc_agregar_masivo_item_uno.php",
        data: form.serialize() + '&key=' + key + '&prv_proveedor_id=' + prv_proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_pde_oc_agrupacion_items').append(data);

            elem.show();

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnOcMasivaItemQuitar() {
    $(".div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .boton.quitar_item_oc").unbind();
    $(".div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .boton.quitar_item_oc").click(function (e) {

        //if (confirm('Esta seguro que desea eliminar el item?')) {
        $(this).parents("tr").remove();
        //}

        // se actualiza el total
        refreshOcMasivaItemDatosCostoTotal();
    });
}

function setOcMasivaChangeCmbPdeCentroPedido() {
    $('.div_modal .datos.agregar-masivo #cmb_pde_centro_pedido_id').unbind();
    $('.div_modal .datos.agregar-masivo #cmb_pde_centro_pedido_id').change(function () {
        refreshOcMasivaItemDatos();
    });
}

function setOcMasivaChangeCmbPrvProveedor() {
    $('.div_modal .datos.agregar-masivo #cmb_prv_proveedor_id').unbind();
    $('.div_modal .datos.agregar-masivo #cmb_prv_proveedor_id').change(function () {
        refreshOcMasivaItemDatos();
    });
}

function setOcMasivaChangeCmbIvaIncluido(){
    $('.div_modal .datos.agregar-masivo #cmb_iva_incluido').unbind();
    $('.div_modal .datos.agregar-masivo #cmb_iva_incluido').change(function () {
        //refreshOcMasivaItemDatos();
    });    
}

function setOcMasivaChangeTxtCantidad() {
    var timeout;

    $('.div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .txt_cantidad').unbind();
    $('.div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .txt_cantidad').keyup(function (e) {
        var key = $(this).parents(".tr-item").attr('key');

        var insumo_id = $("#dbsug_ins_insumo_" + key + "_id").val();

        if (insumo_id == '') {
            return;
        }

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.which === 13) {
            timeout = setTimeout(function () {
                var cantidad = $("#txt_cantidad_" + key).val();

                refreshOcMasivaItemUno(key);
            }, 500);
        }
    });

    /*
     Evento correspondiente al SPINNER de la caja de texto de cantidad
     */
    $(".spinner_cantidad").spinner({
        min: 1,
        numberFormat: "N3",
        spin: function (event, ui) {
            var key = $(this).parents(".tr-item").attr('key');

            var insumo_id = $("#dbsug_ins_insumo_" + key + "_id").val();

            if (insumo_id == '') {
                return;
            }

            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
            }
            timeout = setTimeout(function () {
                var cantidad = $("#txt_cantidad_" + key).val();

                refreshOcMasivaItemUno(key);
            }, 500);
        }
    });
}

function setOcMasivaChangeDbsugInsumo() {
    $('.div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .dbsug_ins_insumo_id').unbind();
    $('.div_modal .datos.agregar-masivo .listado_pde_oc_agrupacion_items .dbsug_ins_insumo_id').change(function () {
        var key = $(this).parents(".tr-item").attr('key');

        var insumo_id = $("#dbsug_ins_insumo_" + key + "_id").val();
        var cantidad = $("#txt_cantidad_" + key).val();

        if (insumo_id == '') {
            return;
        }

        refreshOcMasivaItemUno(key);
    });
}

function refreshOcMasivaItemUno(key)
{
    var form = $("#form_div_modal");
    var agrupacion_id = $(".datos.agregar-masivo").attr('pde_oc_agrupacion_id');
    var insumo_id = $("#dbsug_ins_insumo_" + key + "_id").val();
    //var cantidad = $("#txt_cantidad_" + key).val();
    //var importe_oc = $("#txt_importe_oc_" + key).val();
    if (insumo_id == '') {
        return;
    }

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/refresh_oc_agregar_masivo_item_uno.php",
        data: form.serialize() + '&key=' + key + '&agrupacion_id=' + agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            //$(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");

            $('.div_listado_pde_oc_agrupacion_items #costo_total_unitario_oc_masivo').html(img_loading);
            $('.div_listado_pde_oc_agrupacion_items #costo_total_unitario_oc_con_descuento_comercial_masivo').html(img_loading);
            $('.div_listado_pde_oc_agrupacion_items #costo_total_total_oc_masivo').html(img_loading);

        },
        success: function (data) {
            $('.listado_pde_oc_agrupacion_items #tr_item_' + key).html(data);

            setTimeout(function () {
                // se actualiza el total
                refreshOcMasivaItemDatosCostoTotal();
            }, 1000);

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function refreshOcMasivaItemDatos() {
    var form = $("#form_div_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/refresh_oc_agregar_masivo_item_datos.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            //$(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            $('.div_listado_pde_oc_agrupacion_items').html(data);

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function refreshOcMasivaItemDatosCostoTotal() {
    var form = $("#form_div_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/refresh_oc_agregar_masivo_item_datos_costo_total.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            //$(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {

            var arr = data;
            $('.div_listado_pde_oc_agrupacion_items #costo_total_unitario_oc_masivo').html(arr['costo_total_unitario_oc_masivo_formateado']);
            $('.div_listado_pde_oc_agrupacion_items #costo_total_unitario_oc_con_descuento_comercial_masivo').html(arr['costo_total_unitario_oc_con_descuento_comercial_masivo_formateado']);
            $('.div_listado_pde_oc_agrupacion_items #costo_total_total_oc_masivo').html(arr['costo_total_total_oc_masivo_formateado']);

            setInitPdeOcAgrupacions();
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
 * Guardar Temporalmente
 */
function setClickBtnGuardarOcMasiva() {
    $('.div_modal .datos.agregar-masivo .botonera #btn_guardar').unbind();
    $('.div_modal .datos.agregar-masivo .botonera #btn_guardar').click(function () {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');

        if (confirm('Guardar OC Masiva Temporalmente?')) {
            setGuardarOcMasiva(pde_oc_agrupacion_id);
        }
    });
}
function setGuardarOcMasiva(pde_oc_agrupacion_id) {
    var form = $("#form_div_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_oc_agregar_masivo_guardar_temporal.php",
        data: form.serialize() + "&pde_oc_agrupacion_id=" + pde_oc_agrupacion_id,
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

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/**
 * Generar OC de manera masiva
 */
function setClickBtnGenerarOcMasiva() {
    $('.div_modal .datos.agregar-masivo .botonera #btn_generar_oc_masiva').unbind();
    $('.div_modal .datos.agregar-masivo .botonera #btn_generar_oc_masiva').click(function () {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');

        if (confirm('Generar OC Masiva de manera definitiva?')) {
            setGenerarOcMasiva(pde_oc_agrupacion_id);
        }
    });
}
function setGenerarOcMasiva(pde_oc_agrupacion_id) {
    var form = $("#form_div_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_oc_agregar_masivo_generar_oc.php",
        data: form.serialize() + "&pde_oc_agrupacion_id=" + pde_oc_agrupacion_id,
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

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}



/*
 Ver Ficha de la OC
 */
function setClickPdeOcAgrupacionFicha() {
    $('#listado_adm_pde_oc_agrupacion_gestion .adm_botones_accion.ficha').unbind();
    $('#listado_adm_pde_oc_agrupacion_gestion .adm_botones_accion.ficha').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.uno').attr('identificador');
        verModalFichaOc(pde_oc_agrupacion_id);
    });
}
function verModalFichaOc(pde_oc_agrupacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_ficha.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
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
            refreshAdmUno('pde_oc_agrupacion_gestion', pde_oc_agrupacion_id);

            $('.div_modal').html(data);
            setInitPdeOcAgrupacions();
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
function setClickPdeOcAgrupacionAprobar() {
    $('.db_context .db_context_content .uno.aprobar').unbind();
    $('.db_context .db_context_content .uno.aprobar').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');
        var elem = $(this);

        if (confirm("Desea aprobar la AOCs? Se generaran las OC correspondientes")) {
            setOcAprobar(elem, pde_oc_agrupacion_id);
        }
    });
}
function setOcAprobar(elem, pde_oc_agrupacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_oc_agrupacion_gestion_aprobar.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            elem.parents('.datos').html(img_loading + " Generando OCs, un momento por favor...");
        },
        success: function (data) {
            refreshAdmUno('pde_oc_agrupacion_gestion', pde_oc_agrupacion_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Anular OC
 */
function setClickPdeOcAgrupacionAnular() {
    $('.db_context .db_context_content .uno.anular').unbind();
    $('.db_context .db_context_content .uno.anular').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');
        verModalAnularOc(pde_oc_agrupacion_id);
    });
}
function verModalAnularOc(pde_oc_agrupacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_anular.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
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
                    refreshAdmUno('pde_oc_agrupacion_gestion', pde_oc_agrupacion_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdeOcAgrupacions();
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
 Editar OC Masiva
 */
function setClickPdeOcAgrupacionEditar() {
    $('.db_context .db_context_content .uno.editar').unbind();
    $('.db_context .db_context_content .uno.editar').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');
        verModalAgregarPdeOcAgrupacionMasivo(pde_oc_agrupacion_id)
    });
}

/*
 Recibir Masivo OC
 */
function setClickPdeOcAgrupacionRecibirMasivo() {
    $('.db_context .db_context_content .uno.recibir-masivo').unbind();
    $('.db_context .db_context_content .uno.recibir-masivo').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');
        verModalRecibirMasivoOc(pde_oc_agrupacion_id);
    });
}
function verModalRecibirMasivoOc(pde_oc_agrupacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_recibir_masivo.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Recepcion Masiva Orden de Compra (OC)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_oc_agrupacion_gestion', pde_oc_agrupacion_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/**/
function setClickPdeOcAgrupacionVerEtiquetas()
{
    $('.db_context .db_context_content .uno.ver-etiquetas').unbind();
    $('.db_context .db_context_content .uno.ver-etiquetas').click(function (e) {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');
        verModalVerEtiquetas(pde_oc_agrupacion_id);
    });
}
function verModalVerEtiquetas(pde_oc_agrupacion_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_pde_recepcion_etiquetas.php",
        data: 'pde_oc_agrupacion_id=' + pde_oc_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 550,
                modal: true,
                title: 'Imprimir Etiquetas de Recepcion',
                close: function ()
                {
                    $('.div_modal').dialog('close');
                    //refreshAdmUno('pde_oc_agrupacion_gestion', pde_oc_agrupacion_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBarcodeInternoRecepcionGenerarArchivoPDF()
{
    $('.div_modal .etiquetas.botonera .boton.generar-archivo-pdf').unbind();
    $('.div_modal .etiquetas.botonera .boton.generar-archivo-pdf').click(function (e)
    {
        var pde_recepcion_id = $(this).parents('.etiqueta').attr('pde_recepcion_id');
        var cantidad = $("#txt_cantidad_" + pde_recepcion_id).val();
        //location.href = 'index.php?id=' + id;
        window.open(
                'ins_insumo_barcode_gestion_interno_recepcion_generacion_pdf.php?pde_recepcion_id=' + pde_recepcion_id + '&cantidad=' + cantidad,
                '_blank' // <- This is what makes it open in a new window.
                );
    });
}

/**
 Recibir Masivo OC Confirmacion
 */
function setClickPdeOcAgrupacionRecibirMasivoConfirmar() {
    $('.div_modal .datos.agregar-masivo .botonera #btn_generar_recepcion_masiva').unbind();
    $('.div_modal .datos.agregar-masivo .botonera #btn_generar_recepcion_masiva').click(function () {
        var pde_oc_agrupacion_id = $(this).parents('.datos').attr('pde_oc_agrupacion_id');

        if (confirm('Registrar Recepcion Masiva de OCs?')) {
            setRecibirOcAgrupacionMasivaConfirmacion(pde_oc_agrupacion_id);
        }
    });
}
function setRecibirOcAgrupacionMasivaConfirmacion(pde_oc_agrupacion_id) {
    var form = $("#form_div_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_oc_masivo_recibir.php",
        data: form.serialize() + "&pde_oc_agrupacion_id=" + pde_oc_agrupacion_id,
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

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setChkPdeOcAgrupacionRecibirMasivoSeleccionarAll() {
    $('.div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items #chk_recibir_all').unbind();
    $('.div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items #chk_recibir_all').click(function (e) {
        if ($(this).is(':checked')) {
            $(".div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items .chk_recibir").attr('checked', true);
        } else {
            $(".div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items .chk_recibir").attr('checked', false);
        }
        $(".div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items").find(".chk_recibir").trigger('change');
    });
}
function setChkPdeOcAgrupacionRecibirMasivoSeleccionarUno() {
    $('.div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items .chk_recibir').unbind();
    $(".div_modal .datos.agregar-masivo #listado_pde_oc_agrupacion_items .chk_recibir").change(function () {

        var pde_oc_id = $(this).parents('.uno').attr('pde_oc_id');
        var key = $(this).attr('key');

        if ($(this).is(':checked')) {

            // se muestra la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_recibir').show();
            $(this).parents('.uno').find('.txt_importe_unitario').show();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
        } else {
            // se oculta la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_recibir').hide();
            $(this).parents('.uno').find('.txt_importe_unitario').hide();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
        }
    });
}


function setClickPdeOcReclamar() {
    $('.adm_botones_accion_oc_recibir.reclamo').unbind();
    $('.adm_botones_accion_oc_recibir.reclamo').click(function (e) {

        var oc_id = $(this).parents('.tr-item.uno').attr('pde_oc_id');
        alert(oc_id);
        //verModalReclamarOc(oc_id);

    });
}


function verModalReclamarOc(oc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_gestion/modal_oc_reclamar.php",
        data: 'oc_id=' + oc_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Reclamar Orden de Compra (OC)',
                close: function ()
                {
                    $('.div_modal').dialog('close');
                    //refreshAdmUno('pde_oc_gestion', oc_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data)
        {
            //refreshAdmUno('pde_oc_gestion', oc_id);

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


function setOcMasivaChangeCmbPdeCentroPedido() {
    $('.div_modal .datos.agregar-masivo #cmb_pde_centro_pedido_id').unbind();
    $('.div_modal .datos.agregar-masivo #cmb_pde_centro_pedido_id').change(function () {

    });
}


function setClickBtnVerModalInsInsumoVincularPrvInsumo() {
    $('.tr-item .vincular-prv-insumo').unbind();
    $('.tr-item .vincular-prv-insumo').click(function () {
        var key = $(this).parents('.tr-item').attr('key');
        var insumo_id = $('#dbsug_ins_insumo_' + key + '_id').val();
        var proveedor_id = $('#cmb_prv_proveedor_id').val();

        verModalInsInsumoVincularPrvInsumo(key, insumo_id, proveedor_id);
    });
}


function verModalInsInsumoVincularPrvInsumo(key, insumo_id, proveedor_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_ins_insumo_vincular_prv_insumo.php",
        data: 'insumo_id=' + insumo_id + '&proveedor_id=' + proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '85%',
                height: 400,
                modal: true,
                title: 'Vincular insumo de proveedor',
                close: function ()
                {
                    refreshOcMasivaItemUno(key);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();

            //setInitRelaciones();
            setInitAccionesFormulario('div_modal_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnGuardarInsInsumoVincularPrvInsumo() {
    $('.div_modal_modal .datos.prv-insumo.vincular .botonera #btn_guardar').unbind();
    $('.div_modal_modal .datos.prv-insumo.vincular .botonera #btn_guardar').click(function () {
        var ins_insumo_id = $(this).parents('.datos').attr('ins_insumo_id');
        var prv_proveedor_id = $(this).parents('.datos').attr('prv_proveedor_id');

        if (confirm('Guardar Vinculo?')) {
            setGuardarInsInsumoVincularPrvInsumo(ins_insumo_id, prv_proveedor_id);
        }
    });
}

function setGuardarInsInsumoVincularPrvInsumo(ins_insumo_id, prv_proveedor_id) {
    var form = $("#form_div_modal_modal");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_oc_agrupacion_gestion/set_ins_insumo_vincular_prv_insumo_guardar.php",
        data: form.serialize() + "&ins_insumo_id=" + ins_insumo_id + "&prv_proveedor_id=" + prv_proveedor_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal_modal .textbox").removeClass('input-error');
            $(".div_modal_modal .label-error").html("");
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
                $(".div_modal_modal").dialog("close");
            }

            setInitPdeOcAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}



function setOcMasivaChangeTxtImporteOc()
{
    var timeout;

    $('.tr-item .importe-oc').unbind();
    $('.tr-item .importe-oc').keyup(function (e) {
        var key = $(this).parents(".tr-item").attr('key');

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.which === 13) {
            timeout = setTimeout(function () {
                refreshOcMasivaItemUno(key);
            }, 500);
        }
    });
}


function setOcMasivaChangeCmbPrvDescuentoComercial() {
    $('.tr-item .descuento-comercial').unbind();
    $('.tr-item .descuento-comercial').change(function () {
        var key = $(this).parents(".tr-item").attr('key');
        refreshOcMasivaItemUno(key);
    });
}

function setClickVerModalPdeOcReclamoAgregar()
{
    $('#listado_pde_oc_agrupacion_items .pde_oc_reclamar').unbind();
    $('#listado_pde_oc_agrupacion_items .pde_oc_reclamar').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('pde_oc_id');
        verModalPdeOcReclamoAgregar(oc_id);
    });
}


function verModalPdeOcReclamoAgregar(oc_id)
{
    $.ajax(
            {
                type: 'GET',
                url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_reclamar.php",
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
                },
                success: function (data)
                {
                    $('.div_modal_modal').html(data);
                    setInitPdeOcAgrupacions();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
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
                url: "ajax/modulos/pde_oc_agrupacion_gestion/set_oc_reclamar_guardar.php",
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

                    setInitPdeOcAgrupacions();
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
    $('#listado_pde_oc_agrupacion_items .pde_oc_reclamos').unbind();
    $('#listado_pde_oc_agrupacion_items .pde_oc_reclamos').click(function (e) {
        var oc_id = $(this).parents('.uno').attr('pde_oc_id');
        verModalPdeOcReclamos(oc_id);
    });
}

function verModalPdeOcReclamos(oc_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_oc_agrupacion_gestion/modal_oc_reclamos.php",
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
            setInitPdeOcAgrupacions();
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
                url: "ajax/modulos/pde_oc_agrupacion_gestion/get_pde_oc_agrupacion_recepcion_gestion_mostrar_icono_reclamos.php",
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

                    setInitPdeOcAgrupacions();
                    setInit();
                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}