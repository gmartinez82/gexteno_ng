// archivo js del modulo 'vta_remito_ajuste'
$(function ($) {
    setInitVtaRemitoAjusteGestion();
});

function setInitVtaRemitoAjusteGestion() {
    setClickGenerarRemitoAjuste();
    setKeyupModalBuscadorCodigoPresupuesto();
    setKeyupModalBuscadorPersonaDescripcion();
    setChangeCmbFiltroCliCliente();

    setClickVtaOrdenVentaBtnGenerarRemitoAjuste();
    setClickVtaOrdenVentaBtnGenerarRemitoAjusteCentroRecepcion();    

    setCheckOrdenVentaAll();
    setCkeckOrdenVentaUno();

    // Acciones
    setClickVtaRemitoAjusteGestionVerFicha();

    setClickVtaRemitoAjusteGestionAutorizarRemitoAjuste();
    setClickVtaRemitoAjusteGestionAutorizarRemitoAjusteBtnAutorizar();
    setClickVtaRemitoAjusteGestionDespachoAutorizado();
    setClickVtaRemitoAjusteGestionDespachoAutorizadoBtnDespachar();

    setClickVtaRemitoAjusteGestionEntregarRemitoAjuste();
    setClickVtaRemitoAjusteGestionEntregarRemitoAjusteBtnDespachar();
    setClickVtaRemitoAjusteGestionDespacharRemitoAjuste();
    setClickVtaRemitoAjusteGestionDespacharRemitoAjusteBtnDespachar();
    setClickVtaRemitoAjusteGestionEnviarPorCorreoRemitoAjuste();
    setClickVtaRemitoAjusteGestionEnviarPorCorreoRemitoAjusteBtnEnviarRemitoAjuste();

    // vo_gestion seccion filtros
    setChangeCmbFiltroVtaRemitoAjusteFechaDesde();
    setChangeCmbFiltroVtaRemitoAjusteFechaHasta();
    setChangeCmbFiltroVtaRemitoAjusteTipoEstado();
    setChangeCmbFiltroVtaRemitoAjusteCliCliente();

    // Ficha tab eMail
    setClickVtaRemitoAjusteGestionVerAdjuntoMail();
    setClickVtaRemitoAjusteGestionVerCuerpoMail();
    
    // etiqueta de recepcion
    setClickGenerarEtiquetaRemision();
    setClickGenerarEtiquetaRemisionConfirmar();
    setClickGenerarEtiquetaRemisionConfirmarExec();
    
    setChangeCmbGralEmpresa();
    
}

function setChangeCmbFiltroVtaRemitoAjusteTipoEstado() {
    $("#cmb_filtro_vta_remito_ajuste_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_remito_ajuste_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_remito_ajuste_gestion");
    });
}

function setChangeCmbFiltroVtaRemitoAjusteCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_remito_ajuste_gestion");
    });
}

function setChangeCmbFiltroVtaRemitoAjusteFechaDesde() {
    $("#txt_filtro_desde").unbind();
    $("#txt_filtro_desde").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_remito_ajuste_gestion");
    });
}

function setChangeCmbFiltroVtaRemitoAjusteFechaHasta() {
    $("#txt_filtro_hasta").unbind();
    $("#txt_filtro_hasta").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_remito_ajuste_gestion");
    });
}

function setClickGenerarRemitoAjuste() {
    $('.div_listado_buscador .col .boton.generar_remito_ajuste').unbind();
    $('.div_listado_buscador .col .boton.generar_remito_ajuste').click(function (e) {
        verModalGenerarRemitoAjuste();
    });
}

function verModalGenerarRemitoAjuste() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_generar_remito_ajuste.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 800,
                modal: true,
                title: 'Generar RemitoAjuste',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
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
    });
}

function refreshListOrdenVentaCodigoPresupuesto(txt_buscador_codigo_presupuesto) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_remito_ajuste_gestion/bloque_vta_orden_venta_listado_datos_x_codigo_presupuesto.php",
        data: 'txt_buscador_codigo_presupuesto=' + txt_buscador_codigo_presupuesto,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_remito_ajustes').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_remito_ajustes').html(data);
            setInitVtaRemitoAjusteGestion();
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

    });
}

function refreshListOrdenVentaPersonaDescripcion(txt_buscador_persona_descripcion) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_remito_ajuste_gestion/bloque_vta_orden_venta_listado_datos_x_persona_descripcion.php",
        data: 'txt_buscador_persona_descripcion=' + txt_buscador_persona_descripcion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_remito_ajustes').html(img_loading);
        },
        success: function (data) {
            $('.div_datos_generar_remito_ajustes').html(data);
            setInitVtaRemitoAjusteGestion();
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
        var cli_cliente_id = $(this).val();
        if (cli_cliente_id != '') {
            refreshListOrdenVenta(cli_cliente_id);
        }
    });
}

function refreshListOrdenVenta(cli_cliente_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_remito_ajuste_gestion/bloque_vta_orden_venta_listado_datos_x_cli_cliente.php",
        data: 'cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_remito_ajustes').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_codigo_presupuesto').val('');
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_remito_ajustes').html(data);

            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaOrdenVentaBtnGenerarRemitoAjuste() {
    $(".div_datos_generar_remito_ajustes .botonera #btn_generar_remito_ajuste").unbind();
    $(".div_datos_generar_remito_ajustes .botonera #btn_generar_remito_ajuste").click(function () {
        setControlModalGenerarRemito();
    });
}

function setControlModalGenerarRemito() {

    var form = $("#form_generar_remito_ajuste");
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_remito_ajuste_gestion/control_vta_remito_ajuste_gestion_generar_remito.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id,
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
                verModalGenerarRemitoAjusteSetCentroRecepcion();
            }

            setInitVtaRemitoAjusteGestion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalGenerarRemitoAjusteSetCentroRecepcion() {
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    var vta_presupuesto_id = $(".datos.generar-remito-ajuste").attr('vta_presupuesto_id');
    var form = $("#form_generar_remito_ajuste");
    
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_generar_remito_ajuste_set_centro_recepcion.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&vta_presupuesto_id=' + vta_presupuesto_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 600,
                modal: true,
                title: 'Centro de Recepcion',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
//            $('.div_modal_modal').html(data);
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

            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickVtaOrdenVentaBtnGenerarRemitoAjusteCentroRecepcion() {
    $(".datos.generar-remito-ajuste-set-centro-recepcion .botonera #btn_generar_remito_ajuste_centro_recepcion").unbind();
    $(".datos.generar-remito-ajuste-set-centro-recepcion .botonera #btn_generar_remito_ajuste_centro_recepcion").click(function () {
        setVtaOrdenVentaBtnGenerarRemitoAjuste();
    });
}

function setVtaOrdenVentaBtnGenerarRemitoAjuste() {
    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    //var cli_centro_recepcion_id = $('#cmb_cli_centro_recepcion_id').val();
    //var en_domicilio = $('#cmb_en_domicilio').val();
    //var txa_nota_interna = $('#txa_nota_interna').val();
    //var cmb_registrar_movimiento_stock = $('#cmb_registrar_movimiento_stock').val();
    //var cmb_pan_panol_id = $('#cmb_pan_panol_id').val();
    //var cmb_finalizar_remito = $('#cmb_finalizar_remito').val();    
    var form = $("#form_generar_remito_ajuste");
    var form_2 = $("#form_generar_remito_ajuste_centro_recepcion");

    // -------------------------------------------------------------------------
    // excepciones para cuando no existen los elementos
    // -------------------------------------------------------------------------
    if (typeof cmb_registrar_movimiento_stock === 'undefined') {
      cmb_registrar_movimiento_stock = 0;
    }
    if (typeof cmb_pan_panol_id === 'undefined') {
      cmb_pan_panol_id = 0;
    }
    if (typeof cmb_finalizar_remito === 'undefined') {
      cmb_finalizar_remito = 0;
    }

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_generar_remito_ajuste.php",
        //data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&cli_centro_recepcion_id=' + cli_centro_recepcion_id + '&en_domicilio=' + en_domicilio + '&txa_nota_interna=' + txa_nota_interna+ '&cmb_registrar_movimiento_stock=' + cmb_registrar_movimiento_stock + '&cmb_pan_panol_id=' + cmb_pan_panol_id + '&cmb_finalizar_remito=' + cmb_finalizar_remito,
        data: form.serialize() + '&' + form_2.serialize() + '&cli_cliente_id=' + cli_cliente_id,
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
                $("#error_general").html(arr['error_general']);
            } else {
                $(".div_modal_modal").dialog("close");
                $(".div_modal").dialog("close");
                
                if(getDbCurrentPageName() === 'vta_remito_ajuste_gestion'){
                    refreshAdmAll('vta_remito_ajuste_gestion', 1);
                }
            }

            setInitVtaRemitoAjusteGestion();
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
    $('#listado_vta_remito_ajuste_generar_remito_ajuste #chk_vta_orden_venta_select_all').unbind();
    $('#listado_vta_remito_ajuste_generar_remito_ajuste #chk_vta_orden_venta_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_vta_remito_ajuste_generar_remito_ajuste .chk_vta_orden_venta").attr('checked', true);
        } else {
            $("#listado_vta_remito_ajuste_generar_remito_ajuste .chk_vta_orden_venta").attr('checked', false);
        }
        $("#listado_vta_remito_ajuste_generar_remito_ajuste").find(".chk_vta_orden_venta").trigger('change');
    });
}

function setCkeckOrdenVentaUno() {
    $("#listado_vta_remito_ajuste_generar_remito_ajuste .chk_vta_orden_venta").unbind();
    $("#listado_vta_remito_ajuste_generar_remito_ajuste .chk_vta_orden_venta").change(function () {
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
 Ver Ficha del RemitoAjuste
 */
function setClickVtaRemitoAjusteGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_ver_ficha').click(function (e) {
        var vta_remito_ajuste_id = $(this).parents('.adm_botones_acciones').attr('vta_remito_ajuste_id');
        verModalVtaRemitoAjusteGestionVerFicha(vta_remito_ajuste_id);
    });
}

function verModalVtaRemitoAjusteGestionVerFicha(vta_remito_ajuste_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_ficha.php",
        data: 'vta_remito_ajuste_id=' + vta_remito_ajuste_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha del RemitoAjuste Ajuste',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
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
 Ver Accion Autorizar remito
 */
function setClickVtaRemitoAjusteGestionAutorizarRemitoAjuste() {
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_autorizar_remito_ajuste').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_autorizar_remito_ajuste').click(function (e) {
        var vta_remito_ajuste_id = $(this).parents('.adm_botones_acciones').attr('vta_remito_ajuste_id');
        verModalVtaRemitoAjusteGestionAutorizarRemitoAjuste(vta_remito_ajuste_id);
    });
}

function verModalVtaRemitoAjusteGestionAutorizarRemitoAjuste(vta_remito_ajuste_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_autorizar_remito_ajuste.php",
        data: 'vta_remito_ajuste_id=' + vta_remito_ajuste_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 600,
                modal: true,
                title: 'Autorizar RemitoAjuste',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionAutorizarRemitoAjusteBtnAutorizar() {
    $(".div_modal .datos.autorizar-remito-ajuste #form_autorizar_remito_ajuste .botonera #btn_autorizar").unbind();
    $(".div_modal .datos.autorizar-remito-ajuste #form_autorizar_remito_ajuste .botonera #btn_autorizar").click(function (e) {
        var vta_remito_ajuste_id = $(this).parents(".datos").attr("vta_remito_ajuste_id");
        setVtaRemitoAjusteGestionAutorizarRemitoAjusteBtnDespachar(vta_remito_ajuste_id);
    });
}
function setVtaRemitoAjusteGestionAutorizarRemitoAjusteBtnDespachar(vta_remito_ajuste_id) {

    var form = $("#form_autorizar_remito_ajuste");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_autorizar_remito_ajuste.php",
        data: form.serialize() + '&vta_remito_ajuste_id=' + vta_remito_ajuste_id,
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
                
                var pag = $('#hdn_pag_actual').val();
                refreshAdmAll('vta_remito_ajuste_gestion', pag);
            }

            setInitVtaRemitoAjusteGestion();
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
 Ver Accion Despacho Autorizado
 */
function setClickVtaRemitoAjusteGestionDespachoAutorizado() {
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_despacho_autorizado').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_despacho_autorizado').click(function (e) {
        var vta_remito_ajuste_id = $(this).parents('.adm_botones_acciones').attr('vta_remito_ajuste_id');
        verModalVtaRemitoAjusteGestionDespachoAutorizado(vta_remito_ajuste_id);
    });
}

function verModalVtaRemitoAjusteGestionDespachoAutorizado(vta_remito_ajuste_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_despacho_autorizado.php",
        data: 'vta_remito_ajuste_id=' + vta_remito_ajuste_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '60%',
                height: 450,
                modal: true,
                title: 'Autorizar Despacho',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionDespachoAutorizadoBtnDespachar() {
    $(".div_modal .datos.entregar-remito-ajuste #form_despacho_autorizado .botonera #btn_despachar").unbind();
    $(".div_modal .datos.entregar-remito-ajuste #form_despacho_autorizado .botonera #btn_despachar").click(function (e) {
        var vta_remito_ajuste_id = $(this).parents(".datos").attr("vta_remito_ajuste_id");
        setVtaRemitoAjusteGestionDespachoAutorizadoBtnDespachar(vta_remito_ajuste_id);
    });
}
function setVtaRemitoAjusteGestionDespachoAutorizadoBtnDespachar(vta_remito_ajuste_id) {

    var form = $("#form_despacho_autorizado");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_despacho_autorizado.php",
        data: form.serialize() + '&vta_remito_ajuste_id=' + vta_remito_ajuste_id,
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
                
                var pag = $('#hdn_pag_actual').val();
                refreshAdmAll('vta_remito_ajuste_gestion', pag);
            }

            setInitVtaRemitoAjusteGestion();
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
 Ver Accion Entregar remito
 */
function setClickVtaRemitoAjusteGestionEntregarRemitoAjuste() {
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_entregar').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_entregar').click(function (e) {
        var vta_remito_ajuste_id = $(this).parents('.adm_botones_acciones').attr('vta_remito_ajuste_id');
        verModalVtaRemitoAjusteGestionEntregarRemitoAjuste(vta_remito_ajuste_id);
    });
}

function verModalVtaRemitoAjusteGestionEntregarRemitoAjuste(vta_remito_ajuste_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_entregar_remito_ajuste.php",
        data: 'vta_remito_ajuste_id=' + vta_remito_ajuste_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '60%',
                height: 350,
                modal: true,
                title: 'Entregar RemitoAjuste Ajuste',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionEntregarRemitoAjusteBtnDespachar() {
    $(".div_modal .datos.entregar-remito-ajuste #form_entregar_remito_ajuste .botonera #btn_entregar").unbind();
    $(".div_modal .datos.entregar-remito-ajuste #form_entregar_remito_ajuste .botonera #btn_entregar").click(function (e) {
        var vta_remito_ajuste_id = $(this).parents(".datos").attr("vta_remito_ajuste_id");
        setVtaRemitoAjusteGestionEntregarRemitoAjusteBtnDespachar(vta_remito_ajuste_id);
    });
}
function setVtaRemitoAjusteGestionEntregarRemitoAjusteBtnDespachar(vta_remito_ajuste_id) {

    var form = $("#form_entregar_remito_ajuste");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_entregar_remito_ajuste.php",
        data: form.serialize() + '&vta_remito_ajuste_id=' + vta_remito_ajuste_id,
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
                
                var pag = $('#hdn_pag_actual').val();
                refreshAdmAll('vta_remito_ajuste_gestion', pag);
            }

            setInitVtaRemitoAjusteGestion();
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
 Ver Accion Despachar remito
 */
function setClickVtaRemitoAjusteGestionDespacharRemitoAjuste() {
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_despachar').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_remito_ajuste_gestion_despachar').click(function (e) {
        var vta_remito_ajuste_id = $(this).parents('.adm_botones_acciones').attr('vta_remito_ajuste_id');
        verModalVtaRemitoAjusteGestionDespacharRemitoAjuste(vta_remito_ajuste_id);
    });
}

function verModalVtaRemitoAjusteGestionDespacharRemitoAjuste(vta_remito_ajuste_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_despachar_remito_ajuste.php",
        data: 'vta_remito_ajuste_id=' + vta_remito_ajuste_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '60%',
                height: 650,
                modal: true,
                title: 'Despachar RemitoAjuste Ajuste',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionDespacharRemitoAjusteBtnDespachar() {
    $(".div_modal .datos.despachar-remito-ajuste #form_despachar_remito_ajuste .botonera #btn_despachar").unbind();
    $(".div_modal .datos.despachar-remito-ajuste #form_despachar_remito_ajuste .botonera #btn_despachar").click(function (e) {
        var vta_remito_ajuste_id = $(this).parents(".datos").attr("vta_remito_ajuste_id");
        setVtaRemitoAjusteGestionDespacharRemitoAjusteBtnDespachar(vta_remito_ajuste_id);
    });
}

function setVtaRemitoAjusteGestionDespacharRemitoAjusteBtnDespachar(vta_remito_ajuste_id) {

    var form = $("#form_despachar_remito_ajuste");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_despachar_remito_ajuste.php",
        data: form.serialize() + '&vta_remito_ajuste_id=' + vta_remito_ajuste_id,
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
                
                var pag = $('#hdn_pag_actual').val();
                refreshAdmAll('vta_remito_ajuste_gestion', pag);
            }

            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionEnviarPorCorreoRemitoAjuste() {
    $("#listado_adm_vta_remito_ajuste_gestion .adm_botones_accion.vta-remito-ajuste-enviar-por-correo").unbind();
    $("#listado_adm_vta_remito_ajuste_gestion .adm_botones_accion.vta-remito-ajuste-enviar-por-correo").click(function (e) {
        var vta_remito_ajuste_id = $(this).parents(".uno").attr("identificador");
        verModalVtaRemitoAjusteGestionBotonEnviarRemitoAjustePorMail(vta_remito_ajuste_id);
    });
}

function verModalVtaRemitoAjusteGestionBotonEnviarRemitoAjustePorMail(vta_remito_ajuste_id) {
    var form = $("#form_vta_remito_ajuste_gestion");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_enviar_presupuesto.php",
        data: 'vta_remito_ajuste_id=' + vta_remito_ajuste_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '60%',
                height: 350,
                modal: true,
                title: 'Enviar RemitoAjuste',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionEnviarPorCorreoRemitoAjusteBtnEnviarRemitoAjuste() {
    $(".div_modal .datos.enviar-remito-ajuste #btn_enviar").unbind();
    $(".div_modal .datos.enviar-remito-ajuste #btn_enviar").click(function (e) {
        var vta_remito_ajuste_id = $(this).parents(".datos").attr("vta_remito_ajuste_id");
        setVtaRemitoAjusteGestionEnviarPorCorreoRemitoAjusteBtnEnviarRemitoAjuste(vta_remito_ajuste_id);
    });
}

function setVtaRemitoAjusteGestionEnviarPorCorreoRemitoAjusteBtnEnviarRemitoAjuste(vta_remito_ajuste_id) {
    var form = $("#form_enviar_remito");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_remito_ajuste_gestion/set_vta_remito_ajuste_gestion_enviar_remito_ajuste.php",
        data: form.serialize() + '&vta_remito_ajuste_id=' + vta_remito_ajuste_id,
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

            setInitVtaRemitoAjusteGestion();
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

function setClickVtaRemitoAjusteGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-remito-ajuste-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-remito-ajuste-ver-cuerpo-correo").click(function (e) {
        var vta_remito_ajuste_enviado_id = $(this).attr("vta_remito_ajuste_enviado_id");
        setVtaRemitoAjusteGestionVerCuerpoMail(vta_remito_ajuste_enviado_id);
    });
}

function setVtaRemitoAjusteGestionVerCuerpoMail(vta_remito_ajuste_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_ver_cuerpo_email.php",
        data: 'vta_remito_ajuste_enviado_id=' + vta_remito_ajuste_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'RemitoAjuste',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);

            setInitVtaRemitoAjusteGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaRemitoAjusteGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-remito-ajuste-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-remito-ajuste-comprobante").click(function (e) {
        var vta_remito_ajuste_enviado_id = $(this).attr("vta_remito_ajuste_enviado_id");
        setVtaRemitoAjusteGestionVerAdjuntoMail(vta_remito_ajuste_enviado_id);
    });
}

function setVtaRemitoAjusteGestionVerAdjuntoMail(vta_remito_ajuste_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_vta_remito_ajuste_gestion_ver_adjunto_email.php",
        data: 'vta_remito_ajuste_enviado_id=' + vta_remito_ajuste_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'RemitoAjuste Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);

            setInitVtaRemitoAjusteGestion();
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
 Generar Etiqueta de Remision
 */
function setClickGenerarEtiquetaRemision() {
    $('#listado_adm_vta_remito_ajuste_gestion .adm_botones_accion.etiquetas-remision').unbind();
    $('#listado_adm_vta_remito_ajuste_gestion .adm_botones_accion.etiquetas-remision').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalEtiquetaRemision(id);
    });
}
function verModalEtiquetaRemision(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_remito_ajuste_gestion/modal_etiqueta_remision.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 550,
                modal: true,
                title: 'Generacion de Etiqueta de Remision',
                close: function () {
                    //$('.div_modal').dialog('close');					
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitVtaRemitoAjusteGestion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickGenerarEtiquetaRemisionConfirmar() {
    $('.div_modal .etiqueta-remision .boton.generar-archivo').unbind();
    $('.div_modal .etiqueta-remision .boton.generar-archivo').click(function (e) {
        var id = $(this).parents('.datos').attr('vta_remito_ajuste_id');
        var cantidad = $("#txt_cantidad").val();

        //location.href = 'index.php?id=' + id;
        window.open(
                'ins_insumo_barcode_gestion_interno_generacion.php?id=' + id + '&cantidad=' + cantidad,
                '_blank' // <- This is what makes it open in a new window.
                );
    });
}

function setClickGenerarEtiquetaRemisionConfirmarExec() {
    $('.div_modal .etiqueta-remision .boton.generar-archivo-exec').unbind();
    $('.div_modal .etiqueta-remision .boton.generar-archivo-exec').click(function (e) {
        var id = $(this).parents('.datos').attr('vta_remito_ajuste_id');
        var cantidad = $("#txt_cantidad").val();
        var elem = $(this);

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/vta_remito_ajuste_gestion/set_etiqueta_remision_exec.php",
            data: 'id=' + id + '&cantidad=' + cantidad,
            dataType: "html",
            beforeSend: function (objeto) {
                elem.hide();
            },
            success: function (data) {
                elem.show();
                refreshAdmUno('vta_remito_ajuste_gestion', id);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
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
        url: "ajax/modulos/vta_remito_gestion/get_vta_punto_venta_por_gral_empresa.php",
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
