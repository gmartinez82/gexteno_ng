// archivo js del modulo 'pdi_pedido_agrupacion'
$(function ($) {
    setInitPdiPedidoAgrupacions();
});

function setInitPdiPedidoAgrupacions() {

    //acciones
    setClickPdiPedidoAgrupacionFicha();

    // general
    setClickBtnAgregarPdiPedidoAgrupacionMasivo();
    setSubmitFormModalPdiPedidoAgrupacion();

    // masivo
    setPdiPedidoMasivaChangeCmbPanPanolOrigen();
    setPdiPedidoMasivaChangeCmbPanPanolDestino();

    setClickBtnPdiPedidoAgrupacionItemAgregar();
    setClickBtnPdiPedidoAgrupacionItemQuitar();

    setPdiPedidoAgrupacionChangeTxtCantidad();
    setPdiPedidoAgrupacionChangeDbsugInsumo();

    // guardar pdi masiva
    setClickBtnGuardarPdiPedidoAgrupacionMasiva();
    setClickBtnGenerarPdiPedidoAgrupacionMasiva();

    setClickPdiPedidoAgrupacionEditar();
    setClickPdiPedidoAgrupacionAnular();

    setClickPdiPedidoAgrupacionAceptarMasivo();
    setClickPdiPedidoAgrupacionAceptarMasivoConfirmar();

    setClickPdiPedidoDespacharMasivo();
    setClickPdiPedidoAgrupacionDespacharMasivoConfirmar();

    setClickPdiPedidoRecibirMasivo();
    setClickPdiPedidoAgrupacionRecibirMasivoConfirmar();

    setChkPdiPedidoAgrupacionAceptarMasivoSeleccionarAll();
    setChkPdiPedidoAgrupacionAceptarMasivoSeleccionarUno();

    setChkPdiPedidoAgrupacionDespacharMasivoSeleccionarAll();
    setChkPdiPedidoAgrupacionDespacharMasivoSeleccionarUno();

    setChkPdiPedidoAgrupacionRecibirMasivoSeleccionarAll();
    setChkPdiPedidoAgrupacionRecibirMasivoSeleccionarUno();

    setClickPdiPedidoAgrupacionGestionEnviarPorCorreo();
    setClickPdiPedidoAgrupacionGestionEnviarPorCorreoConfirmacion();
}


/*
 Agregar OC Masivo
 */
function setClickBtnAgregarPdiPedidoAgrupacionMasivo() {
    $('.botonera .agregar-pdi-pedido-masivo').unbind();
    $('.botonera .agregar-pdi-pedido-masivo').click(function () {
        var pdi_pedido_agrupacion_id = 0;
        verModalAgregarPdiPedidoAgrupacionMasivo(pdi_pedido_agrupacion_id);
    });
}

function setClickPdiPedidoAgrupacionEditar()
{
    $('.db_context .db_context_content .uno.editar').unbind();
    $('.db_context .db_context_content .uno.editar').click(function (e)
    {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos').attr('pdi_pedido_agrupacion_id');
        verModalAgregarPdiPedidoAgrupacionMasivo(pdi_pedido_agrupacion_id);
    });
}

function verModalAgregarPdiPedidoAgrupacionMasivo(pdi_pedido_agrupacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_agrupacion_agregar_masivo.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 650,
                position: ['center', 20],
                modal: true,
                title: 'Pedido Masiva Directa',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pdi_pedido_agrupacion_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidoAgrupacions();
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


function setSubmitFormModalPdiPedidoAgrupacion() {
    $('#form_pedido_masivo').unbind();
    $('#form_pedido_masivo').submit(function () {
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

                setInitPdiPedidoAgrupacions();
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


function setPdiPedidoMasivaChangeCmbPanPanolOrigen() {
    $('.div_modal .datos-masivo.agregar-masivo #cmb_pan_panol_origen').unbind();
    $('.div_modal .datos-masivo.agregar-masivo #cmb_pan_panol_origen').change(function () {
        refreshPdiPedidoMasivaItemDatos();
    });
}


function setPdiPedidoMasivaChangeCmbPanPanolDestino() {
    $('.div_modal .datos-masivo.agregar-masivo #cmb_pan_panol_destino').unbind();
    $('.div_modal .datos-masivo.agregar-masivo #cmb_pan_panol_destino').change(function () {
        //refreshPdiPedidoMasivaItemDatos();
    });
}


function refreshPdiPedidoMasivaItemDatos() {
    var form = $("#form_pedido_masivo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/refresh_pdi_pedido_agrupacion_agregar_item_datos.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            $('.div_listado_pdi_pedido_agrupacion_items').html(data);

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnPdiPedidoAgrupacionItemAgregar() {
    $(".div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .boton.agregar_item_oc").unbind();
    $(".div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .boton.agregar_item_oc").click(function (e) {
        var pan_panol_origen = $("#cmb_pan_panol_origen").val();
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setPdiPedidoAgrupacionItemAgregar(key, pan_panol_origen, $(this));
    });
}


function setPdiPedidoAgrupacionItemAgregar(key, pan_panol_origen, elem) {

    var form = $("#form_pedido_masivo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_agrupacion_agregar_item_uno.php",
        data: form.serialize() + '&key=' + key + '&pan_panol_origen=' + pan_panol_origen,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_pdi_pedido_agrupacion_items').append(data);

            elem.show();

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnPdiPedidoAgrupacionItemQuitar() {
    $(".div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .boton.quitar_item_oc").unbind();
    $(".div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .boton.quitar_item_oc").click(function (e) {
        $(this).parents("tr").remove();
    });
}


function setPdiPedidoAgrupacionChangeTxtCantidad() {
    var timeout;

    $('.div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .txt_cantidad').unbind();
    $('.div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .txt_cantidad').keyup(function () {
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

            refreshPdiPedidoAgrupacionItemUno(key);
        }, 500);
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

                refreshPdiPedidoAgrupacionItemUno(key);
            }, 500);
        }
    });
}


function setPdiPedidoAgrupacionChangeDbsugInsumo() {
    $('.div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .dbsug_ins_insumo_id').unbind();
    $('.div_modal .datos-masivo.agregar-masivo .listado_pdi_pedido_agrupacion_items .dbsug_ins_insumo_id').change(function () {
        var key = $(this).parents(".tr-item").attr('key');

        var insumo_id = $("#dbsug_ins_insumo_" + key + "_id").val();
        var cantidad = $("#txt_cantidad_" + key).val();

        if (insumo_id == '') {
            return;
        }

        refreshPdiPedidoAgrupacionItemUno(key);
    });
}


function refreshPdiPedidoAgrupacionItemUno(key)
{
    var form = $("#form_pedido_masivo");
    var agrupacion_id = $(".datos-masivo.agregar-masivo").attr('pdi_pedido_agrupacion_id');
    var insumo_id = $("#dbsug_ins_insumo_" + key + "_id").val();

    if (insumo_id == '') {
        return;
    }

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/refresh_pdi_pedido_agrupacion_agregar_item_uno.php",
        data: form.serialize() + '&key=' + key + '&agrupacion_id=' + agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            $('.listado_pdi_pedido_agrupacion_items #tr_item_' + key).html(data);

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnGuardarPdiPedidoAgrupacionMasiva() {
    $('.div_modal .datos-masivo.agregar-masivo .botonera #btn_guardar').unbind();
    $('.div_modal .datos-masivo.agregar-masivo .botonera #btn_guardar').click(function () {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos-masivo').attr('pdi_pedido_agrupacion_id');

        if (confirm('Guardar PdiPedido Masivo Temporalmente ?')) {
            setGuardarPdiPedidoAgrupacionMasiva(pdi_pedido_agrupacion_id);
        }
    });
}


function setGuardarPdiPedidoAgrupacionMasiva(pdi_pedido_agrupacion_id) {
    var form = $("#form_pedido_masivo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_agregar_masivo_guardar_temporal.php",
        data: form.serialize() + "&pdi_pedido_agrupacion_id=" + pdi_pedido_agrupacion_id,
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

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function setClickBtnGenerarPdiPedidoAgrupacionMasiva() {
    $('.div_modal .datos-masivo.agregar-masivo .botonera #btn_generar_pdi_pedido_masiva').unbind();
    $('.div_modal .datos-masivo.agregar-masivo .botonera #btn_generar_pdi_pedido_masiva').click(function () {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos-masivo').attr('pdi_pedido_agrupacion_id');

        if (confirm('Generar PdiPedido Masiva de manera definitiva ?')) {
            setGenerarPdiPedidoMasiva(pdi_pedido_agrupacion_id);
        }
    });
}


function setGenerarPdiPedidoMasiva(pdi_pedido_agrupacion_id) {
    var form = $("#form_pedido_masivo");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_agregar_masivo_generar_pedido.php",
        data: form.serialize() + "&pdi_pedido_agrupacion_id=" + pdi_pedido_agrupacion_id,
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

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


function setClickPdiPedidoAgrupacionAnular()
{
    $('.db_context .db_context_content .uno.anular').unbind();
    $('.db_context .db_context_content .uno.anular').click(function (e) {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos').attr('pdi_pedido_agrupacion_id');
        verModalAnularPedido(pdi_pedido_agrupacion_id);
    });
}

function verModalAnularPedido(pdi_pedido_agrupacion_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_anular.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Anular Pedido',
                close: function () {
                    refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdiPedidoAgrupacionAceptarMasivo()
{
    $('.db_context .db_context_content .uno.aceptar-masivo').unbind();
    $('.db_context .db_context_content .uno.aceptar-masivo').click(function (e) {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos').attr('pdi_pedido_agrupacion_id');
        verModalAceptarMasivoPedido(pdi_pedido_agrupacion_id);
    });
}


function verModalAceptarMasivoPedido(pdi_pedido_agrupacion_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_aceptar_masivo.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Aceptacion Masiva de Pedido',
                close: function () {
                    refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);
                }
            });
            dbContextHideContent();
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdiPedidoAgrupacionAceptarMasivoConfirmar()
{
    $('.div_modal .datos-masivo.agregar-masivo .botonera #btn_generar_aceptacion_masiva').unbind();
    $('.div_modal .datos-masivo.agregar-masivo .botonera #btn_generar_aceptacion_masiva').click(function () {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos-masivo').attr('pdi_pedido_agrupacion_id');

        if (confirm('Registrar Aceptacion Masiva de Pedidos?')) {
            setAceptarPdiPedidoAgrupacionMasivaConfirmacion(pdi_pedido_agrupacion_id);
        }
    });
}


function setAceptarPdiPedidoAgrupacionMasivaConfirmacion(pdi_pedido_agrupacion_id)
{
    var form = $("#form_div_modal");

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_masivo_aceptar.php",
                data: form.serialize() + "&pdi_pedido_agrupacion_id=" + pdi_pedido_agrupacion_id,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal .botonera").hide();
                    $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
                    $(".div_modal .textbox").removeClass('input-error');
                    $(".div_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;
                    if (arr["error"])
                    {
                        $(".div_modal .botonera-loading").remove();
                        $(".div_modal .botonera").show();

                        $.each(arr, function (i, item)
                        {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal").dialog("close");
                    }

                    setInitPdiPedidoAgrupacions();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}


function setClickPdiPedidoDespacharMasivo()
{
    $('.db_context .db_context_content .uno.despachar-masivo').unbind();
    $('.db_context .db_context_content .uno.despachar-masivo').click(function (e)
    {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos').attr('pdi_pedido_agrupacion_id');
        verModalDespacharPdiPedido(pdi_pedido_agrupacion_id);
    });
}


function verModalDespacharPdiPedido(pdi_pedido_agrupacion_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_despachar.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Despachar Pedido (PDI)',
                close: function () {
                    refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            //refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);

            $('.div_modal').html(data);
            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdiPedidoAgrupacionDespacharMasivoConfirmar()
{
    $('.div_modal .datos-masivo.despachar-masivo .botonera #btn_generar_despacho_masivo').unbind();
    $('.div_modal .datos-masivo.despachar-masivo .botonera #btn_generar_despacho_masivo').click(function () {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos-masivo').attr('pdi_pedido_agrupacion_id');

        if (confirm('Registrar Despacho Masivo de Pedidos?')) {
            setAceptarPdiPedidoAgrupacionDespacharConfirmacion(pdi_pedido_agrupacion_id);
        }
    });
}


function setAceptarPdiPedidoAgrupacionDespacharConfirmacion(pdi_pedido_agrupacion_id)
{
    var form = $("#form_div_modal");

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_masivo_despachar.php",
                data: form.serialize() + "&pdi_pedido_agrupacion_id=" + pdi_pedido_agrupacion_id,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal .botonera").hide();
                    $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
                    $(".div_modal .textbox").removeClass('input-error');
                    $(".div_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;
                    if (arr["error"])
                    {
                        $(".div_modal .botonera-loading").remove();
                        $(".div_modal .botonera").show();

                        $.each(arr, function (i, item)
                        {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal").dialog("close");
                    }

                    setInitPdiPedidoAgrupacions();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}


function setClickPdiPedidoRecibirMasivo()
{
    $('.db_context .db_context_content .uno.recibir-masivo').unbind();
    $('.db_context .db_context_content .uno.recibir-masivo').click(function (e)
    {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos').attr('pdi_pedido_agrupacion_id');
        verModalRecibirPdiPedido(pdi_pedido_agrupacion_id);
    });
}


function verModalRecibirPdiPedido(pdi_pedido_agrupacion_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_recibir.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Recibir Pedido (PDI)',
                close: function () {
                    refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            //refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);

            $('.div_modal').html(data);
            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdiPedidoAgrupacionRecibirMasivoConfirmar()
{
    $('.div_modal .datos-masivo.recibir-masivo .botonera #btn_generar_recepcion_masivo').unbind();
    $('.div_modal .datos-masivo.recibir-masivo .botonera #btn_generar_recepcion_masivo').click(function ()
    {
        var pdi_pedido_agrupacion_id = $(this).parents('.datos-masivo').attr('pdi_pedido_agrupacion_id');
        if (confirm('Registrar Recepcion Masiva de Pedidos?'))
        {
            setAceptarPdiPedidoAgrupacionRecibirConfirmacion(pdi_pedido_agrupacion_id);
        }
    });
}


function setAceptarPdiPedidoAgrupacionRecibirConfirmacion(pdi_pedido_agrupacion_id)
{
    var form = $("#form_div_modal");

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_masivo_recibir.php",
                data: form.serialize() + "&pdi_pedido_agrupacion_id=" + pdi_pedido_agrupacion_id,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal .botonera").hide();
                    $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
                    $(".div_modal .textbox").removeClass('input-error');
                    $(".div_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;
                    if (arr["error"])
                    {
                        $(".div_modal .botonera-loading").remove();
                        $(".div_modal .botonera").show();

                        $.each(arr, function (i, item)
                        {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal").dialog("close");
                    }

                    setInitPdiPedidoAgrupacions();
                    setInit();

                    setInitDbSuggest();
                    setInitDbSuggestBoton();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}


function setChkPdiPedidoAgrupacionAceptarMasivoSeleccionarAll()
{
    $('.div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items #chk_aceptar_all').unbind();
    $('.div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items #chk_aceptar_all').click(function (e)
    {
        if ($(this).is(':checked'))
        {
            $(".div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items .chk_aceptar").attr('checked', true);
        } else
        {
            $(".div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items .chk_aceptar").attr('checked', false);
        }

        $(".div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items").find(".chk_aceptar").trigger('change');
    });
}


function setChkPdiPedidoAgrupacionAceptarMasivoSeleccionarUno()
{
    $('.div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items .chk_aceptar').unbind();
    $(".div_modal .datos-masivo.agregar-masivo #listado_pdi_pedido_agrupacion_items .chk_aceptar").change(function () {

        var pdi_pedido_id = $(this).parents('.uno').attr('pdi_pedido_id');
        var key = $(this).attr('key');

        if ($(this).is(':checked'))
        {
            // se muestra la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_solicitado').show();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
        } else
        {
            // se oculta la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_solicitado').hide();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
        }
    });
}


function setChkPdiPedidoAgrupacionDespacharMasivoSeleccionarAll()
{
    $('.div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items #chk_despachar_all').unbind();
    $('.div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items #chk_despachar_all').click(function (e)
    {
        if ($(this).is(':checked'))
        {
            $(".div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items .chk_despachar").attr('checked', true);
        } else
        {
            $(".div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items .chk_despachar").attr('checked', false);
        }

        $(".div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items").find(".chk_despachar").trigger('change');
    });
}


function setChkPdiPedidoAgrupacionDespacharMasivoSeleccionarUno()
{
    $('.div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items .chk_despachar').unbind();
    $(".div_modal .datos-masivo.despachar-masivo #listado_pdi_pedido_agrupacion_items .chk_despachar").change(function () {

        var pdi_pedido_id = $(this).parents('.uno').attr('pdi_pedido_id');
        var key = $(this).attr('key');

        if ($(this).is(':checked'))
        {
            // se muestra la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_solicitado').show();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
        } else
        {
            // se oculta la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_solicitado').hide();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
        }
    });
}


function setChkPdiPedidoAgrupacionRecibirMasivoSeleccionarAll()
{
    $('.div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items #chk_recibir_all').unbind();
    $('.div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items #chk_recibir_all').click(function (e)
    {
        if ($(this).is(':checked'))
        {
            $(".div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items .chk_recibir").attr('checked', true);
        } else
        {
            $(".div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items .chk_recibir").attr('checked', false);
        }

        $(".div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items").find(".chk_recibir").trigger('change');
    });
}


function setChkPdiPedidoAgrupacionRecibirMasivoSeleccionarUno()
{
    $('.div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items .chk_recibir').unbind();
    $(".div_modal .datos-masivo.recibir-masivo #listado_pdi_pedido_agrupacion_items .chk_recibir").change(function () {

        var pdi_pedido_id = $(this).parents('.uno').attr('pdi_pedido_id');
        var key = $(this).attr('key');

        if ($(this).is(':checked'))
        {
            // se muestra la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_solicitado').show();

            // se destaca la fila con css
            $(this).parents('tr').addClass('selected');
        } else
        {
            // se oculta la caja de texto de cantidad
            $(this).parents('.uno').find('.txt_cantidad_solicitado').hide();

            // se quita destacado de fila con css
            $(this).parents('tr').removeClass('selected');
        }
    });
}


function setClickPdiPedidoAgrupacionFicha()
{
    $('#listado_adm_pdi_pedido_agrupacion_gestion .adm_botones_accion.ficha').unbind();
    $('#listado_adm_pdi_pedido_agrupacion_gestion .adm_botones_accion.ficha').click(function (e) {
        var pdi_pedido_agrupacion_id = $(this).parents('.uno').attr('identificador');
        verModalFichaPedido(pdi_pedido_agrupacion_id);
    });
}

function verModalFichaPedido(pdi_pedido_agrupacion_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_agrupacion_ficha.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Ficha del Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                }
            });
        },
        success: function (data)
        {
            refreshAdmUno('pdi_pedido_agrupacion_gestion', pdi_pedido_agrupacion_id);

            $('.div_modal').html(data);
            setInitPdiPedidoAgrupacions();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickPdiPedidoAgrupacionGestionEnviarPorCorreo()
{
    $("#listado_adm_pdi_pedido_agrupacion_gestion .adm_botones_accion.pdi-pedido-agrupacion-enviar-por-correo").unbind();
    $("#listado_adm_pdi_pedido_agrupacion_gestion .adm_botones_accion.pdi-pedido-agrupacion-enviar-por-correo").click(function (e) {
        var pdi_pedido_agrupacion_id = $(this).parents(".uno").attr("identificador");
        verModalPdiPedidoAgrupacionGestionBotonEnviarPorMail(pdi_pedido_agrupacion_id);
    });
}

function verModalPdiPedidoAgrupacionGestionBotonEnviarPorMail(pdi_pedido_agrupacion_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/modal_pdi_pedido_agrupacion_gestion_enviar_email.php",
        data: 'pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '75%',
                height: 360,
                modal: true,
                title: 'Enviar Pedido Masivo a Panol',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitPdiPedidoAgrupacions();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdiPedidoAgrupacionGestionEnviarPorCorreoConfirmacion()
{
    $(".div_modal .datos.enviar-factura #btn_enviar").unbind();
    $(".div_modal .datos.enviar-factura #btn_enviar").click(function (e) {
        var pdi_pedido_agrupacion_id = $(this).parents(".datos").attr("pdi_pedido_agrupacion_id");
        setPdiPedidoAgrupacionGestionEnviarPorCorreoConfirmacion(pdi_pedido_agrupacion_id);
    });
}

function setPdiPedidoAgrupacionGestionEnviarPorCorreoConfirmacion(pdi_pedido_agrupacion_id)
{
    var form = $("#form_enviar_factura");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/pdi_pedido_agrupacion_gestion/set_pdi_pedido_agrupacion_gestion_enviar_email.php",
        data: form.serialize() + '&pdi_pedido_agrupacion_id=' + pdi_pedido_agrupacion_id,
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

            setInitPdiPedidoAgrupacions();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}