// archivo js del modulo 'pde_pedido'
$(function ($) {
    setInitPdePedidos();
});

function setInitPdePedidos() {
    // general
    setClickBtnAgregarPdePedido();
    setSubmitFormModalPdePedido();

    // filtros
    setChangePdePedidoFiltrosCentroPedido();
    setChangePdePedidoFiltrosProveedor();
    setChangePdePedidoFiltrosCategoria();
    setChangePdePedidoFiltrosInsumo();
    setChangePdePedidoFiltrosUrgencia();
    setChangePdePedidoFiltrosEstado();
    setChangePdePedidoFiltrosDestacado();
    setChangePdePedidoFiltrosLeido();

    // acciones
    setClickPdePedidoEditar();
    setClickPdePedidoFicha();
    setClickPdePedidoRefresh();
    setClickPdePedidoGestionEnviarPorCorreo();
    setClickPdePedidoGestionEnviarPorCorreoConfirmacion();

    setClickPdePedidoFichaForzarEnvioEmail();

    // acciones dbsuggest
    setClickPdePedidoPublicar();
    setClickPdePedidoAnular();
    setClickPdePedidoExtender();

    // links
    setClickPdeCotizacionsModal();
    setClickPdeOcsModal();

    // alta
    setChangeCmbCentroPedido();
    setChangeInsumo();
    setClickPdeAltaBtnGuardar();

    // bloque proveedores
    setClickTxtProveedorBuscador();
    setClickAgregarPedidoUnoProveedor();
    setClickAltaProveedoresVincularCategoria();
    setClickAltaProveedoresVincularInsumo();

    // bloque marcas
    setClickTxtMarcaBuscador();
    setClickAgregarPedidoUnoMarca();
    setClickAltaMarcasVincularCategoria();
    setClickAltaMarcasVincularInsumo();

    setKeypressEnterPdePedidos();
}

function setKeypressEnterPdePedidos() {
    $('.div_modal .pde-agregar').focus();

    // se hace foco en cada de texto de busqueda al presionar una tecla
    $(".div_modal .pde-agregar").keydown(function (e) {

        if (e.which != 13) {
            // excepcion para otras cajas
            var nodeName = e.target.nodeName;
            if (nodeName == 'INPUT' || nodeName == 'TEXTAREA' || nodeName == 'SELECT') {
                return true;
            }

            //$("#dbsug_ins_insumo").focus();
        }

    });

    // se evita accion al presionar enter
    $(document).keypress(function (e) {
        //alert(e.which);
        if (e.which == 13) {
            return false;
        }
    });
}



// Init Cotizaciones
function setInitPdeCotizaciones() {
    // general
    setSubmitFormModalPdeCotizacion();

    // reclamos
    setClickVerReclamos();

    // acciones
    setClickPdeCotizacionAgregar();
    setClickPdeCotizacionEditar();
    setClickPdeCotizacionDestacado();
    setClickPdeCotizacionRefresh();
    setClickPdeCotizacionGenerarOc();
}

function setInitPdeOcs() {
}


/* Filtros */
function setChangePdePedidoFiltrosCentroPedido() {
    $('#cmb_filtro_pde_centro_pedido_id').unbind();
    $('#cmb_filtro_pde_centro_pedido_id').change(function () {
        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosCategoria() {
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

        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosInsumo() {
    $('#cmb_filtro_ins_insumo_id').unbind();
    $('#cmb_filtro_ins_insumo_id').change(function () {
        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosUrgencia() {
    $('#cmb_filtro_pde_urgencia_id').unbind();
    $('#cmb_filtro_pde_urgencia_id').change(function () {
        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosEstado() {
    $('#cmb_filtro_pde_estado_id').unbind();
    $('#cmb_filtro_pde_estado_id').change(function () {
        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosDestacado() {
    $('#cmb_filtro_destacado').unbind();
    $('#cmb_filtro_destacado').change(function () {
        setAdmBuscadorTop('pde_pedido');
    });
}
function setChangePdePedidoFiltrosLeido() {
    $('#cmb_filtro_leido').unbind();
    $('#cmb_filtro_leido').change(function () {
        setAdmBuscadorTop('pde_pedido');
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
            var cmb_insumo = cmb;

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
 Agregar Pedido
 */
function setClickBtnAgregarPdePedido() {
    $('.botonera .agregar-pedido').unbind();
    $('.botonera .agregar-pedido').click(function () {
        verModalAgregarPdePedido();
        return false;
    });
}

function verModalAgregarPdePedido() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_agregar.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Nuevo Pedido a Proveedores (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pde_pedido', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdePedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();

            //setInitRelaciones();
            //setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setSubmitFormModalPdePedido() {
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
                setInitPdePedidos();
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

function setSubmitFormModalPdeCotizacion() {
    $('#form_cotizacion').unbind();
    $('#form_cotizacion').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "html",
            beforeSend: function (objeto) {
                $('.div_modal_modal').html(img_loading);
            },
            success: function (data) {
                $('.div_modal_modal').html(data);
                setInitPdeCotizaciones();
                setInit();

                setInitDbSuggest();
                setInitDbSuggestBoton();

                try {
                    // cerrar el modal automaticamente
                    var hdn_error = $("#hdn_error").val();
                    if (hdn_error == 0) {
                        // no hubo error
                        $('.div_modal_modal').dialog('close');

                        var hdn_mensaje = $("#hdn_mensaje").val();
                        verDivMensaje('#listado_adm_pde_cotizacion', 'ok', hdn_mensaje, 2000);
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



/*
 Editar el Pedido
 */
function setClickPdePedidoEditar() {
    $('#listado_adm_pde_pedido .adm_botones_accion.editar').unbind();
    $('#listado_adm_pde_pedido .adm_botones_accion.editar').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalEditarPedido(pedido_id);
    });
}
function verModalEditarPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_agregar.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 650,
                modal: true,
                title: 'Editar Pedido a Proveedores (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');

                    //var pagina = $("#hdn_pag_actual").val();
                    //refreshAdmAll('pde_pedido', pagina);

                    refreshAdmUno('pde_pedido', pedido_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdePedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();

            var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
            var insumo_id = $("#dbsug_ins_insumo_id").val();
            var buscador = '';
            refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador);
            refreshPdeAltaMarcas(insumo_id, pedido_id, buscador);

            //setInitRelaciones();
            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdePedidoRefresh() {
    $('#listado_adm_pde_pedido .adm_botones_accion.refresh').unbind();
    $('#listado_adm_pde_pedido .adm_botones_accion.refresh').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        refreshAdmUno('pde_pedido', pedido_id);
    });
}


function setClickPdePedidoGestionEnviarPorCorreo() {
    $("#listado_adm_pde_pedido .adm_botones_accion.pde-pedido-enviar-por-correo").unbind();
    $("#listado_adm_pde_pedido .adm_botones_accion.pde-pedido-enviar-por-correo").click(function (e) {
        var pde_pedido_id = $(this).parents(".uno").attr("identificador");
        verModalPdePedidoGestionBotonEnviarPorMail(pde_pedido_id);
    });
}

function verModalPdePedidoGestionBotonEnviarPorMail(pde_pedido_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_pedido/modal_pde_pedido_gestion_enviar_email.php",
        data: 'pde_pedido_id=' + pde_pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 600,
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
            
            setInitPdePedidos();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdePedidoGestionEnviarPorCorreoConfirmacion() {
    $(".div_modal .datos.enviar-factura #btn_enviar").unbind();
    $(".div_modal .datos.enviar-factura #btn_enviar").click(function (e) {
        var pde_pedido_id = $(this).parents(".datos").attr("pde_pedido_id");
        setPdePedidoGestionEnviarPorCorreoConfirmacion(pde_pedido_id);
    });
}

function setPdePedidoGestionEnviarPorCorreoConfirmacion(pde_pedido_id) {
    var form = $("#form_enviar_factura");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_pedido/set_pde_pedido_gestion_enviar_email.php",
        data: form.serialize() + '&pde_pedido_id=' + pde_pedido_id,
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

            setInitPdePedidos();
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
 Ver Ficha del Pedido
 */
function setClickPdePedidoFicha() {
    $('#listado_adm_pde_pedido .adm_botones_accion.ficha').unbind();
    $('#listado_adm_pde_pedido .adm_botones_accion.ficha').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalFichaPedido(pedido_id);
    });
}
function verModalFichaPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_ficha.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: 'Ficha del Pedido (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('pde_pedido', pedido_id);

            $('.div_modal').html(data);
            setInitPdePedidos();
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
 Forzar Envio de Email
 */
function setClickPdePedidoFichaForzarEnvioEmail() {
    $('.tabs #tab_general .uno.proveedor .envio .accion.forzar-envio').unbind();
    $('.tabs #tab_general .uno.proveedor .envio .accion.forzar-envio').click(function (e) {
        var proveedor_id = $(this).parents('.uno.proveedor').attr('proveedor_id');
        var pedido_destinatario_id = $(this).parents('.uno.proveedor').attr('pedido_destinatario_id');

        if (confirm("Desea forzar el envio del email al destinatario?")) {
            setForzarEnvioEmailDestinatario(proveedor_id, pedido_destinatario_id);
        }
    });
}
function setForzarEnvioEmailDestinatario(proveedor_id, pedido_destinatario_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_pedido/set_forzar_envio_email_destinatario.php",
        data: 'proveedor_id=' + proveedor_id + '&pedido_destinatario_id=' + pedido_destinatario_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $("#div_uno_destinatario_" + pedido_destinatario_id).html(img_loading);
        },
        success: function (data) {
            refreshEmailDestinatarioUno(proveedor_id, pedido_destinatario_id);

            setInitPdePedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshEmailDestinatarioUno(proveedor_id, pedido_destinatario_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/refresh_pde_pedido_destinatario_uno.php",
        data: 'proveedor_id=' + proveedor_id + '&pedido_destinatario_id=' + pedido_destinatario_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $("#div_uno_destinatario_" + pedido_destinatario_id).html(img_loading);
        },
        success: function (data) {
            $("#div_uno_destinatario_" + pedido_destinatario_id).html(data);

            setInitPdePedidos();
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
 Publicar Pedido
 */
function setClickPdePedidoPublicar() {
    $('.db_context .db_context_content .uno.publicar').unbind();
    $('.db_context .db_context_content .uno.publicar').click(function (e) {
        var pedido_id = $(this).parents('.datos').attr('pedido_id');

        if (confirm('Desea PUBLICAR el pedido para los proveedores?')) {
            setPedidoPublicado(pedido_id);
        }
    });
}
function setPedidoPublicado(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/set_pde_pedido_publicado.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {

        },
        success: function (data) {
            refreshAdmUno('pde_pedido', pedido_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Anular Pedido
 */
function setClickPdePedidoAnular() {
    $('.db_context .db_context_content .uno.anular').unbind();
    $('.db_context .db_context_content .uno.anular').click(function (e) {
        var pedido_id = $(this).parents('.datos').attr('pedido_id');
        verModalAnularPedido(pedido_id);
    });
}
function verModalAnularPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_anular.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Anular Pedido (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_pedido', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_pedido', pedido_id);

            $('.div_modal').html(data);
            setInitPdePedidos();
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
 Extender Pedido
 */
function setClickPdePedidoExtender() {
    $('.db_context .db_context_content .uno.extender').unbind();
    $('.db_context .db_context_content .uno.extender').click(function (e) {
        var pedido_id = $(this).parents('.datos').attr('pedido_id');
        verModalExtenderPedido(pedido_id);
    });
}
function verModalExtenderPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_extender.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 450,
                modal: true,
                title: 'Extender Vencimiento de Pedido (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pde_pedido', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_pedido', pedido_id);

            $('.div_modal').html(data);
            setInitPdePedidos();
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
 Modal Cotizaciones del Pedido
 */
function setClickPdeCotizacionsModal() {
    $('.link.modal.cotizaciones').unbind();
    $('.link.modal.cotizaciones').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalCotizaciones(pedido_id);
    });
}
function verModalCotizaciones(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_cotizaciones.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '97%',
                height: 450,
                modal: true,
                title: 'Cotizaciones del Pedido (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                    $('.div_modal_modal').remove();

                    //refreshPdeCotizacionDatos(pedido_id);
                    //refreshAdmAll('pde_pedido', 1);
                    refreshAdmUno('pde_pedido', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_pedido', pedido_id);

            refreshPdeCotizacionDatos(pedido_id);
            refreshPdeCotizacionDatosHistoricos(pedido_id);

            $('.div_modal').html(data);
            setInitPdeCotizaciones();
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
 Modal OCs
 */
function setClickPdeOcsModal() {
    $('.link.modal.ocs').unbind();
    $('.link.modal.ocs').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalOcs(pedido_id);
    });
}
function verModalOcs(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_ocs.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 450,
                modal: true,
                title: 'OCs del Pedido (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                    $('.div_modal_modal').remove();

                    //refreshPdeCotizacionDatos(pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pde_pedido', pedido_id);

            //refreshPdeCotizacionDatos(pedido_id);

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

/* ----------------------- */
/* Cotizaciones del Pedido */
/* ----------------------- */

/*
 Refresh Cotizacion Uno
 */
function refreshPdeCotizacionUno(cotizacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/refresh_pde_cotizacion_uno.php",
        data: 'cotizacion_id=' + cotizacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#div_pde_cotizacion_uno_' + cotizacion_id + " td").css("opacity", "0.4");
            $('#div_pde_cotizacion_uno_' + cotizacion_id).append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('#div_pde_cotizacion_uno_' + cotizacion_id + " td").css("opacity", "1");
            $('#div_pde_cotizacion_uno_' + cotizacion_id).html(data);

            setInitPdeCotizaciones();
            setInitDbContext();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Ver Modal de Reclamos
 */
function setClickVerReclamos() {
    $('#listado_adm_pde_cotizacion #btn_reclamos').unbind();
    $('#listado_adm_pde_cotizacion #btn_reclamos').click(function (e) {
        var proveedor_id = $(this).parents('.uno').attr('proveedor_id');
        verModalReclamosOc(proveedor_id);
    });
}
function verModalReclamosOc(proveedor_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_oc_reclamos.php",
        data: 'proveedor_id=' + proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: 1000,
                height: 450,
                modal: true,
                title: 'Reclamos Realizados al Proveedor',
                close: function () {
                    //$('.div_modal_modal').dialog('close');					
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);
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
 Agregar Cotizacion
 */
function setClickPdeCotizacionAgregar() {
    $('.pde-modal-top .agregar-cotizacion').unbind();
    $('.pde-modal-top .agregar-cotizacion').click(function (e) {
        var pedido_id = $(this).parents('.pde-modal-top').attr('pedido_id');
        verModalAgregarCotizacion(pedido_id);
    });
}
function verModalAgregarCotizacion(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_cotizacion_agregar.php",
        data: 'pedido_id=' + pedido_id + '&cotizacion_id=0',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Registrar Cotizacion',
                close: function () {
                    $('.div_modal_modal').dialog('close');

                    refreshPdeCotizacionDatos(pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            //verModalCotizaciones(pedido_id);

            $('.div_modal_modal').html(data);
            setInitPdeCotizaciones();
            setInitPdePedidos();

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
 Editar Cotizacion
 */
function setClickPdeCotizacionEditar() {
    $('#listado_adm_pde_cotizacion .adm_botones_accion.editar-cotizacion').unbind();
    $('#listado_adm_pde_cotizacion .adm_botones_accion.editar-cotizacion').click(function (e) {
        var pedido_id = $(this).parents('#tab_cotizaciones').attr('pedido_id');
        var cotizacion_id = $(this).parents('.uno').attr('cotizacion_id');
        verModalEditarCotizacion(pedido_id, cotizacion_id);
    });
}
function verModalEditarCotizacion(pedido_id, cotizacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_cotizacion_agregar.php",
        data: 'pedido_id=' + pedido_id + '&cotizacion_id=' + cotizacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Datos de Cotizacion',
                close: function () {
                    $('.div_modal_modal').dialog('close');

                    refreshPdeCotizacionDatos(pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            //verModalCotizaciones(pedido_id);

            $('.div_modal_modal').html(data);
            setInitPdeCotizaciones();
            setInitPdePedidos();

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
 Destacado del Pedido
 */
function setClickPdeCotizacionDestacado() {
    $('#listado_adm_pde_cotizacion .adm_botones_accion.destacado').unbind();
    $('#listado_adm_pde_cotizacion .adm_botones_accion.destacado').click(function (e) {
        var cotizacion_id = $(this).parents('.uno').attr('cotizacion_id');
        setCotizacionDestacado(cotizacion_id);
    });
}
function setCotizacionDestacado(cotizacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/set_cotizacion_destacado.php",
        data: 'cotizacion_id=' + cotizacion_id,
        dataType: "html",
        beforeSend: function (objeto) {

        },
        success: function (data) {
            refreshPdeCotizacionUno(cotizacion_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshPdeCotizacionDatos(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/refresh_pde_cotizacion_datos.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.cotizacion_datos').html(img_loading);
        },
        success: function (data) {

            $('.cotizacion_datos').html(data);
            setInitPdeCotizaciones();
            setInitPdePedidos();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshPdeCotizacionDatosHistoricos(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/refresh_pde_cotizacion_datos_historicos.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.cotizacion_datos_historicos').html(img_loading);
        },
        success: function (data) {

            $('.cotizacion_datos_historicos').html(data);
            setInitPdeCotizaciones();
            setInitPdePedidos();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeCotizacionRefresh() {
    $('#listado_adm_pde_cotizacion .adm_botones_accion.refresh').unbind();
    $('#listado_adm_pde_cotizacion .adm_botones_accion.refresh').click(function (e) {
        var cotizacion_id = $(this).parents('.uno').attr('cotizacion_id');
        refreshPdeCotizacionUno(cotizacion_id);
    });
}

function setClickPdeCotizacionGenerarOc() {
    $('#listado_adm_pde_cotizacion .adm_botones_accion.generar-oc').unbind();
    $('#listado_adm_pde_cotizacion .adm_botones_accion.generar-oc').click(function (e) {
        var cotizacion_id = $(this).parents('.uno').attr('cotizacion_id');
        verModalGenerarOc(cotizacion_id);
    });
}
function verModalGenerarOc(cotizacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_cotizacion_generar_oc.php",
        data: 'cotizacion_id=' + cotizacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Generar Orden de Compra (OC)',
                close: function () {
                    $('.div_modal_modal').dialog('close');
                    refreshPdeCotizacionUno(cotizacion_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshPdeCotizacionUno(cotizacion_id);

            $('.div_modal_modal').html(data);
            setInitPdeCotizaciones();
            setInitPdePedidos();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbCentroPedido() {
    $('.div_modal .datos.agregar #cmb_pde_centro_pedido_id').unbind();
    $('.div_modal .datos.agregar #cmb_pde_centro_pedido_id').change(function (e) {
        var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
        var insumo_id = $("#dbsug_ins_insumo_id").val();
        var pedido_id = $("#hdn_id").val();
        var buscador = '';

        refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador);
    });
}

function setChangeInsumo() {
    $('#dbsug_ins_insumo_id').unbind();
    $('#dbsug_ins_insumo_id').change(function () {
        var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
        var insumo_id = $("#dbsug_ins_insumo_id").val();
        var pedido_id = $("#hdn_id").val();
        var buscador = '';

        if (insumo_id == '')
            return;

        refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador);
        refreshPdeAltaMarcas(insumo_id, pedido_id, buscador);
    });
}



/* Proveedores */
function setClickTxtProveedorBuscador() {
    var timeout;

    $("#txt_proveedor_buscador").unbind();
    $("#txt_proveedor_buscador").keyup(function (e) {
        var txt_buscador = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }
        if (e.keyCode === 13) {
            if (txt_buscador.length >= 2) {
                timeout = setTimeout('setBuscadorProveedor()', 500);
            } else if (txt_buscador.length == 0) {
                timeout = setTimeout('setBuscadorProveedor()', 500);
            }
        }
    });
}
function setBuscadorProveedor() {
    var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
    var insumo_id = $("#dbsug_ins_insumo_id").val();
    var pedido_id = $("#hdn_id").val();
    var buscador = $("#txt_proveedor_buscador").val();

    refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador);
}
function setClickAltaProveedoresVincularCategoria() {
    $('.div_modal .proveedores .datos .uno .accion.vincular-categoria').unbind();
    $('.div_modal .proveedores .datos .uno .accion.vincular-categoria').click(function () {
        var proveedor_id = $(this).parents('.uno').attr('proveedor_id');
        var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
        var insumo_id = $("#dbsug_ins_insumo_id").val();

        if (confirm('Vincular proveedor a Categoria?')) {
            setProveedorVincularCategoria(centro_pedido_id, insumo_id, proveedor_id);
        }
    });
}
function setProveedorVincularCategoria(centro_pedido_id, insumo_id, proveedor_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/set_proveedor_vincular_categoria.php",
        data: 'centro_pedido_id=' + centro_pedido_id + '&insumo_id=' + insumo_id + '&proveedor_id=' + proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#txt_proveedor_buscador').val('');
        },
        success: function (data) {
            //var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
            var pedido_id = $("#hdn_id").val();
            var buscador = $("#txt_proveedor_buscador").val();

            refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickAltaProveedoresVincularInsumo() {
    $('.div_modal .proveedores .datos .uno .accion.vincular-insumo').unbind();
    $('.div_modal .proveedores .datos .uno .accion.vincular-insumo').click(function () {
        var proveedor_id = $(this).parents('.uno').attr('proveedor_id');
        var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
        var insumo_id = $("#dbsug_ins_insumo_id").val();

        if (confirm('Vincular proveedor a Insumo?')) {
            setProveedorVincularInsumo(centro_pedido_id, insumo_id, proveedor_id);
        }
    });
}
function setProveedorVincularInsumo(centro_pedido_id, insumo_id, proveedor_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/set_proveedor_vincular_insumo.php",
        data: 'centro_pedido_id=' + centro_pedido_id + '&insumo_id=' + insumo_id + '&proveedor_id=' + proveedor_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#txt_proveedor_buscador').val('');
        },
        success: function (data) {
            //var centro_pedido_id = $("#cmb_pde_centro_pedido_id").val();
            var pedido_id = $("#hdn_id").val();
            var buscador = $("#txt_proveedor_buscador").val();

            refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAgregarPedidoUnoProveedor() {
    $('.div_modal .datos.agregar .proveedores .bloque-datos .uno .checkbox input').unbind();
    $('.div_modal .datos.agregar .proveedores .bloque-datos .uno .checkbox input').click(function () {
        var proveedor_id = $(this).parents('.uno').attr('proveedor_id');

        if ($("#chk_proveedor_id_" + proveedor_id).is(":checked") == false) {
            // se deselecciona check
            $("#chk_proveedor_id_" + proveedor_id).prop("checked", false);
            $(this).parents('.uno').removeClass('selected');
        } else {
            // se selecciona check
            $("#chk_proveedor_id_" + proveedor_id).prop("checked", true);
            $(this).parents('.uno').addClass('selected');
        }
    });
}

function refreshPdeAltaProveedores(centro_pedido_id, insumo_id, pedido_id, buscador) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/refresh_agregar_proveedores.php",
        data: 'centro_pedido_id=' + centro_pedido_id + '&insumo_id=' + insumo_id + '&pedido_id=' + pedido_id + '&buscador=' + buscador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal .datos.agregar .proveedores .bloque-datos').html(img_loading);
        },
        success: function (data) {

            $('.div_modal .datos.agregar .proveedores .bloque-datos').html(data);

            //setInitPdeCotizaciones();
            setInitPdePedidos();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/* Marcas */
function setClickTxtMarcaBuscador() {
    var timeout;

    $("#txt_marca_buscador").unbind();
    $("#txt_marca_buscador").keyup(function (e) {
        var txt_buscador = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }
        if (e.keyCode === 13) {
            if (txt_buscador.length >= 2) {
                timeout = setTimeout('setBuscadorMarca()', 500);
            } else if (txt_buscador.length == 0) {
                timeout = setTimeout('setBuscadorMarca()', 500);
            }
        }
    });
}
function setBuscadorMarca() {
    var insumo_id = $("#dbsug_ins_insumo_id").val();
    var pedido_id = $("#hdn_id").val();
    var buscador = $("#txt_marca_buscador").val();

    refreshPdeAltaMarcas(insumo_id, pedido_id, buscador);
}
function setClickAltaMarcasVincularCategoria() {
    $('.div_modal .marcas .datos .uno .accion.vincular-categoria').unbind();
    $('.div_modal .marcas .datos .uno .accion.vincular-categoria').click(function () {
        var marca_id = $(this).parents('.uno').attr('marca_id');
        var insumo_id = $("#dbsug_ins_insumo_id").val();

        if (confirm('Vincular marca a Categoria?')) {
            setMarcaVincularCategoria(insumo_id, marca_id);
        }
    });
}
function setMarcaVincularCategoria(insumo_id, marca_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/set_marca_vincular_categoria.php",
        data: 'insumo_id=' + insumo_id + '&marca_id=' + marca_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#txt_marca_buscador').val('');
        },
        success: function (data) {
            var pedido_id = $("#hdn_id").val();
            var buscador = $("#txt_marca_buscador").val();

            refreshPdeAltaMarcas(insumo_id, pedido_id, buscador);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAltaMarcasVincularInsumo() {
    $('.div_modal .marcas .datos .uno .accion.vincular-insumo').unbind();
    $('.div_modal .marcas .datos .uno .accion.vincular-insumo').click(function () {
        var marca_id = $(this).parents('.uno').attr('marca_id');
        var insumo_id = $("#dbsug_ins_insumo_id").val();

        if (confirm('Vincular marca a Categoria?')) {
            setMarcaVincularInsumo(insumo_id, marca_id);
        }
    });
}
function setMarcaVincularInsumo(insumo_id, marca_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/set_marca_vincular_insumo.php",
        data: 'insumo_id=' + insumo_id + '&marca_id=' + marca_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#txt_marca_buscador').val('');
        },
        success: function (data) {
            var pedido_id = $("#hdn_id").val();
            var buscador = $("#txt_marca_buscador").val();

            refreshPdeAltaMarcas(insumo_id, pedido_id, buscador);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAgregarPedidoUnoMarca() {
    $('.div_modal .datos.agregar .marcas .bloque-datos .uno .checkbox input').unbind();
    $('.div_modal .datos.agregar .marcas .bloque-datos .uno .checkbox input').click(function () {
        var marca_id = $(this).parents('.uno').attr('marca_id');

        if ($("#chk_marca_id_" + marca_id).is(":checked") == false) {
            $("#chk_marca_id_" + marca_id).prop("checked", false);
            $(this).parents('.uno').removeClass('selected');
        } else {
            $("#chk_marca_id_" + marca_id).prop("checked", true);
            $(this).parents('.uno').addClass('selected');
        }
    });
}

function refreshPdeAltaMarcas(insumo_id, pedido_id, buscador) {
    
    return;
    
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/refresh_agregar_marcas.php",
        data: 'insumo_id=' + insumo_id + '&pedido_id=' + pedido_id + '&buscador=' + buscador,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal .datos.agregar .marcas .bloque-datos').html(img_loading);
        },
        success: function (data) {

            $('.div_modal .datos.agregar .marcas .bloque-datos').html(data);

            //setInitPdeCotizaciones();
            setInitPdePedidos();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdeAltaBtnGuardar() {
    $('.div_modal .datos.agregar #btn_guardar').unbind();
    $('.div_modal .datos.agregar #btn_guardar').click(function (e) {

        if (controlDatosPdePedidoAgregar()) {
            setPdePedidoAgregarGuardar();
        }

    });
}

function controlDatosPdePedidoAgregar() {
    var formulario = $("#form_div_modal").serialize();
    var estado = false;

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pde_pedido/control_pedido_agregar.php",
        data: formulario,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            // se limpian todos los errores
            $(".label-error").html('');

            if (arr['error'] === true) {

                $("#cmb_pde_centro_pedido_id_error").html(arr['cmb_pde_centro_pedido_id_error']);
                $("#dbsug_ins_insumo_id_error").html(arr['dbsug_ins_insumo_id_error']);
                $("#cmb_pde_urgencia_id_error").html(arr['cmb_pde_urgencia_id_error']);
                $("#txt_cantidad_error").html(arr['txt_cantidad_error']);
                $("#txt_vencimiento_error").html(arr['txt_vencimiento_error']);

                $("#chk_proveedor_error").html(arr['chk_proveedor_error']);
                $("#chk_marca_error").html(arr['chk_marca_error']);

                estado = false;
            } else {
                estado = true;
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
    return estado;
}


function setPdePedidoAgregarGuardar() {
    var form_div_modal = $("#form_div_modal").serialize();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_pedido/set_agregar_pedido.php",
        data: form_div_modal,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_modal .datos.agregar .marcas .bloque-datos').html(img_loading);
            $("#btn_guardar").parents('.botonera').html(img_loading);
        },
        success: function (data) {

            //$('.div_modal .datos.agregar .marcas .bloque-datos').html(data);
            $("#btn_guardar").html("Generado Correctamente");

            $(".div_modal").dialog('close');

            //setInitPdeCotizaciones();
            setInitPdePedidos();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}