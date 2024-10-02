// archivo js del modulo 'vta_ajuste_haber'
$(function ($)
{
    setInitVtaAjusteHaberGestion();
});

function setInitVtaAjusteHaberGestion()
{
    
    // Nueva AjusteHaber (+)
    setClickGenerarVtaAjusteHaber();
    setChangeCmbFiltroCliCliente();

    setClickWsFeAfip();
    setClickWsAfipGenerarVtaAjusteHaberOnlineBtnSiguiente();

    // Botones Accion
    setClickVtaAjusteHaberGestionVerFicha();
    setClickVtaAjusteHaberGestionModificarDatos();
    setClickVtaAjusteHaberGestionModificarDatosConfirmacion();
    setClickVtaAjusteHaberGestionEnviarPorCorreoAjusteHaber();
    setClickVtaAjusteHaberGestionEnviarPorCorreoAjusteHaberBtnEnviarAjusteHaber();
    setClickVtaAjusteHaberGestionAnular();
    setClickVtaAjusteHaberGestionAnularConfirmar();

    // Modal Agregar NC
    setClickBtnAgregarItemAjusteHaber();
    setClickBtnQuitarItemAjusteHaber();

    // Cheque
    setChangeCmbGralFpFormaPago();
    setClickVtaAjusteHaberGestionSetCheque();

    // Retencion
    setChangeCmbVtaAjusteHaberConcepto();
    setClickVtaAjusteHaberGestionSetRetencion();
    setClickVtaAjusteHaberGestionSetRetencionBtnGuardar();

    // Modal Ficha Tab email
    setClickVtaAjusteHaberGestionVerCuerpoMail();
    setClickVtaAjusteHaberGestionVerAdjuntoMail();

    // Seccion filtros Top
    setChangeCmbFiltroVtaAjusteHaberCodigo();
    setChangeCmbFiltroVtaAjusteHaberNumeroAjusteHaber();
    setChangeCmbFiltroVtaAjusteHaberCae();
    setChangeCmbFiltroVtaAjusteHaberCliCliente();
    setChangeCmbFiltroVtaAjusteHaberVtaTipoAjusteHaber();
    setChangeCmbFiltroVtaAjusteHaberVtaTipoEstado();
    setChangeCmbFiltroVtaAjusteHaberVtaGralCondicionIva();

    // Modal
    setChangeCmbGralEmpresa();
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
        url: "ajax/modulos/vta_ajuste_haber_gestion/get_vta_punto_venta_por_gral_empresa.php",
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

function setChangeCmbFiltroVtaAjusteHaberCodigo() {
    $("#txt_buscador_codigo").unbind();
    $("#txt_buscador_codigo").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberCae() {
    $("#txt_buscador_cae").unbind();
    $("#txt_buscador_cae").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberNumeroAjusteHaber() {
    $("#txt_buscador_numero_ajuste_haber").unbind();
    $("#txt_buscador_numero_ajuste_haber").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberVtaTipoAjusteHaber() {
    $("#cmb_filtro_vta_tipo_ajuste_haber_id").unbind();
    $("#cmb_filtro_vta_tipo_ajuste_haber_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberVtaTipoEstado() {
    $("#cmb_filtro_vta_ajuste_haber_tipo_estado_id").unbind();
    $("#cmb_filtro_vta_ajuste_haber_tipo_estado_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberVtaGralCondicionIva() {
    $("#cmb_filtro_gral_condicion_iva_id").unbind();
    $("#cmb_filtro_gral_condicion_iva_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}
function setChangeCmbFiltroVtaAjusteHaberVtaGralEmpresa() {
    $("#cmb_filtro_gral_empresa_id").unbind();
    $("#cmb_filtro_gral_empresa_id").change(function () {
        setAdmBuscadorTop("vta_ajuste_haber_gestion");
    });
}

function setClickGenerarVtaAjusteHaber() {
    $('.div_listado_buscador .col .boton.generar_ajuste_haber').unbind();
    $('.div_listado_buscador .col .boton.generar_ajuste_haber').click(function (e) {
        verModalGenerarVtaAjusteHaber();
    });
}

function verModalGenerarVtaAjusteHaber() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_generar_ajuste_haber.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 800,
                modal: true,
                title: 'Generar AjusteHaber',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaAjusteHaberGestion();
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
        if (dbsug_cli_cliente_id != '') {
            refreshBloqueVtaAjusteHaberItem(dbsug_cli_cliente_id);
        }
    });
}

function refreshBloqueVtaAjusteHaberItem(dbsug_cli_cliente_id) {

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_haber_gestion/bloque_vta_ajuste_haber_items_datos_x_cli_cliente.php",
        data: 'dbsug_cli_cliente_id=' + dbsug_cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_datos_generar_ajuste_habers').html(img_loading);
        },
        success: function (data) {
            $('#txt_buscador_persona_descripcion').val('');
            $('.div_datos_generar_ajuste_habers').html(data);
            setInitVtaAjusteHaberGestion();
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
// Modal Generar una Nueva AjusteHaber (Boton + del buscador top)
// Boton siguiente
// ----------------------------------------------------------------
function setClickWsFeAfip() {
    $(".div_modal .datos.generar-ajuste_haber .div_datos_generar_ajuste_habers .botonera #btn_set_ws_fe_ajuste_haber_afip").unbind();
    $(".div_modal .datos.generar-ajuste_haber .div_datos_generar_ajuste_habers .botonera #btn_set_ws_fe_ajuste_haber_afip").click(function (e) {
        var cli_cliente_id = $(this).attr("cli_cliente_id");
        //verModalClickWsFeAfip(cli_cliente_id);
        setControlModalWsFeAfip(cli_cliente_id);
    });
}

function setControlModalWsFeAfip(cli_cliente_id)
{
    var form              = $("#form_generar_ajuste_haber");
    var modulo            = 'vta_ajuste_haber';
    var var_sesion_random = $(".datos.generar-ajuste_haber").attr('var_sesion_random');
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_haber_gestion/control_vta_ajuste_haber_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&modulo=' + modulo + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            //$(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        close: function () {
            setClickAdmRefreshAll();
        },
        success: function (data) {
            //$('.div_modal').html(img_loading);
            var arr = data;
            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                verModalClickWsFeAfip(cli_cliente_id);
            }

            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalClickWsFeAfip(cli_cliente_id) {

    var form = $("#form_generar_ajuste_haber");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_ws_fe_afip.php",
        data: form.serialize() + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '90%',
                height: 700,
                modal: true,
                title: 'Generar AjusteHaber',
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitVtaAjusteHaberGestion();
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
// Modal Generar una Nueava AjusteHaber (Boton + del buscador top)
// Boton siguiente
// Boton Generar AjusteHaber Online
// ----------------------------------------------------------------
function setClickWsAfipGenerarVtaAjusteHaberOnlineBtnSiguiente() {
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_ajuste_haber_online").unbind();
    $(".div_modal_modal .datos.generar-ws-fe-afip .botonera #btn_generar_ajuste_haber_online").click(function (e) {
        setWsAfipGenerarVtaAjusteHaberOnlineBtnSiguiente();
    });
}

function setWsAfipGenerarVtaAjusteHaberOnlineBtnSiguiente() {

    var cli_cliente_id = $("#dbsug_cli_cliente_id").val();
    var var_sesion_random = $(".datos.generar-ajuste_haber").attr('var_sesion_random');

    var form = $("#form_generar_ajuste_haber");
    var form2 = $("#form_generar_ws_fe_afip");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_ws_afip_generar_ajuste_haber_online.php",
        data: form.serialize() + '&' + form2.serialize() + '&cli_cliente_id=' + cli_cliente_id + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal_modal .textbox").removeClass('input-error');
            $(".div_modal_modal .label-error").html("");
        },
        close: function () {
            setClickAdmRefreshAll();
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
                $(".div_modal").dialog("close");
                $(".div_modal_modal").dialog("close");

                refreshAdmAll('vta_ajuste_haber_gestion', 1);
            }

            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}

function setClickBtnAgregarItemAjusteHaber() {
    $(".div_modal .datos.generar-ajuste_haber .div_datos_generar_ajuste_habers #form_generar_ajuste_haber .boton.agregar_item_ajuste_haber").unbind();
    $(".div_modal .datos.generar-ajuste_haber .div_datos_generar_ajuste_habers #form_generar_ajuste_haber .boton.agregar_item_ajuste_haber").click(function (e) {
        var cli_cliente_id = $(this).parents("form").attr("cli_cliente_id");
        var key = 0;
        $(".tr-item").each(function () {
            key = $(this).attr('key');
        });
        $(this).hide();
        setBtnAgregarItemAjusteHaber(cli_cliente_id, key, $(this));
    });
}

function setBtnAgregarItemAjusteHaber(cli_cliente_id, key, elem) {

    var form = $("#form_generar_ajuste_haber");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_haber_gestion/set_bloque_vta_ajuste_haber_items_datos_x_cli_cliente_uno.php",
        data: form.serialize() + '&dbsug_cli_cliente_id=' + cli_cliente_id + '&key=' + key,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.listado_vta_ajuste_haber_items').append(data);

            elem.show();

            setInitVtaAjusteHaberGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarItemAjusteHaber() {
    $(".div_modal .datos.generar-ajuste_haber .div_datos_generar_ajuste_habers #form_generar_ajuste_haber .boton.quitar_item_ajuste_haber").unbind();
    $(".div_modal .datos.generar-ajuste_haber .div_datos_generar_ajuste_habers #form_generar_ajuste_haber .boton.quitar_item_ajuste_haber").click(function (e) {

        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}

/*
 Ver Ficha del AjusteHaber
 */
function setClickVtaAjusteHaberGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_ajuste_haber_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_ajuste_haber_gestion_ver_ficha').click(function (e) {
        var vta_ajuste_haber_id = $(this).parents('.adm_botones_acciones').attr('vta_ajuste_haber_id');
        verModalVtaAjusteHaberGestionVerFicha(vta_ajuste_haber_id);
    });
}

function verModalVtaAjusteHaberGestionVerFicha(vta_ajuste_haber_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_ficha.php",
        data: 'vta_ajuste_haber_id=' + vta_ajuste_haber_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la AjusteHaber',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteHaberGestionModificarDatos() {
    $("#listado_adm_vta_ajuste_haber_gestion .adm_botones_accion.modificar-datos").unbind();
    $("#listado_adm_vta_ajuste_haber_gestion .adm_botones_accion.modificar-datos").click(function (e) {
        var vta_ajuste_haber_id = $(this).parents(".uno").attr("identificador");
        verModalVtaAjusteHaberGestionModificarDatos(vta_ajuste_haber_id);
    });
}

function verModalVtaAjusteHaberGestionModificarDatos(vta_ajuste_haber_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_modificar_datos.php",
        data: 'vta_ajuste_haber_id=' + vta_ajuste_haber_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 600,
                modal: true,
                title: 'Modificar Datos',
                close: function () {
                    refreshAdmUno('vta_ajuste_haber_gestion', vta_ajuste_haber_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

            setInitVtaAjusteHaberGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteHaberGestionModificarDatosConfirmacion() {
    $(".div_modal .datos.modificar-datos #btn_registrar").unbind();
    $(".div_modal .datos.modificar-datos #btn_registrar").click(function (e) {
        var vta_ajuste_haber_id = $(this).parents(".datos").attr("vta_ajuste_haber_id");
        setVtaAjusteHaberGestionModificarDatosConfirmacion(vta_ajuste_haber_id);
    });
}

function setVtaAjusteHaberGestionModificarDatosConfirmacion(vta_ajuste_haber_id) {
    var form = $("#form_modificar_datos");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_modificar_datos.php",
        data: form.serialize() + '&vta_ajuste_haber_id=' + vta_ajuste_haber_id,
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

            setInitVtaAjusteHaberGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickVtaAjusteHaberGestionEnviarPorCorreoAjusteHaber() {
    $("#listado_adm_vta_ajuste_haber_gestion .adm_botones_accion.vta-ajuste-haber-enviar-por-correo").unbind();
    $("#listado_adm_vta_ajuste_haber_gestion .adm_botones_accion.vta-ajuste-haber-enviar-por-correo").click(function (e) {
        var vta_ajuste_haber_id = $(this).parents(".uno").attr("identificador");
        verModalVtaAjusteHaberGestionBotonEnviarAjusteHaberPorMail(vta_ajuste_haber_id);
    });
}

function verModalVtaAjusteHaberGestionBotonEnviarAjusteHaberPorMail(vta_ajuste_haber_id) {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_enviar_ajuste_haber.php",
        data: 'vta_ajuste_haber_id=' + vta_ajuste_haber_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '55%',
                height: 330,
                modal: true,
                title: 'Enviar AjusteHaber',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);
            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteHaberGestionEnviarPorCorreoAjusteHaberBtnEnviarAjusteHaber() {
    $(".div_modal .datos.enviar-ajuste_haber #btn_enviar").unbind();
    $(".div_modal .datos.enviar-ajuste_haber #btn_enviar").click(function (e) {
        var vta_ajuste_haber_id = $(this).parents(".datos").attr("vta_ajuste_haber_id");
        setVtaFacturaGestionEnviarPorCorreoAjusteHaberBtnEnviarAjusteHaber(vta_ajuste_haber_id);
    });
}

function setVtaFacturaGestionEnviarPorCorreoAjusteHaberBtnEnviarAjusteHaber(vta_ajuste_haber_id) {
    var form = $("#form_enviar_ajuste_haber");
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_enviar_ajuste_haber.php",
        data: form.serialize() + '&vta_ajuste_haber_id=' + vta_ajuste_haber_id,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
            $(".botonera").hide();
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            //$('.div_modal').html(img_loading);
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

            setInitVtaAjusteHaberGestion();
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

function setClickVtaAjusteHaberGestionVerCuerpoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-haber-ver-cuerpo-correo").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-haber-ver-cuerpo-correo").click(function (e) {
        var vta_ajuste_haber_enviado_id = $(this).attr("vta_ajuste_haber_enviado_id");
        setVtaAjusteHaberGestionVerCuerpoMail(vta_ajuste_haber_enviado_id);
    });
}

function setVtaAjusteHaberGestionVerCuerpoMail(vta_ajuste_haber_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_ver_cuerpo_email.php",
        data: 'vta_ajuste_haber_enviado_id=' + vta_ajuste_haber_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '60%',
                height: 600,
                modal: true,
                title: 'AjusteHaber',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteHaberGestionVerAdjuntoMail() {
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-haber-comprobante").unbind();
    $(".adm_botones_acciones_modal_ficha .adm_botones_accion.vta-ajuste-haber-comprobante").click(function (e) {
        var vta_ajuste_haber_enviado_id = $(this).attr("vta_ajuste_haber_enviado_id");
        setVtaAjusteHaberGestionVerAdjuntoMail(vta_ajuste_haber_enviado_id);
    });
}

function setVtaAjusteHaberGestionVerAdjuntoMail(vta_ajuste_haber_enviado_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_ver_adjunto_email.php",
        data: 'vta_ajuste_haber_enviado_id=' + vta_ajuste_haber_enviado_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_ficha').html(img_loading);
            $('.div_modal_ficha').dialog({
                width: '80%',
                height: 800,
                modal: true,
                title: 'AjusteHaber Archivo Adjunto',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $(".div_modal_ficha").html(data);
            setInitVtaAjusteHaberGestion();
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
function setClickVtaAjusteHaberGestionAnular() {
    $('.db_context .db_context_content .uno.anular-ajuste_haber').unbind();
    $('.db_context .db_context_content .uno.anular-ajuste_haber').click(function (e) {
        var vta_ajuste_haber_id = $(this).parents('.datos').attr('vta_ajuste_haber_id');
        verModalVtaAjusteHaberGestionAnular(vta_ajuste_haber_id);
    });
}
function verModalVtaAjusteHaberGestionAnular(vta_ajuste_haber_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_anular.php",
        data: 'vta_ajuste_haber_id=' + vta_ajuste_haber_id,
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
                    refreshAdmUno('vta_ajuste_haber_gestion', vta_ajuste_haber_id);
                }
            });
            //dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitVtaAjusteHaberGestion();
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
function setClickVtaAjusteHaberGestionAnularConfirmar() {
    $(".div_modal .datos.anular-ajuste_haber .botonera #btn_registrar").unbind();
    $(".div_modal .datos.anular-ajuste_haber .botonera #btn_registrar").click(function (e) {
        var vta_ajuste_haber_id = $(this).parents(".datos").attr("vta_ajuste_haber_id");
        setVtaAjusteHaberGestionAnularConfirmar(vta_ajuste_haber_id);
    });
}

function setVtaAjusteHaberGestionAnularConfirmar(vta_ajuste_haber_id) {
    var form = $("#form_datos_anular_ajuste_haber");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_anular.php",
        data: form.serialize() + '&vta_ajuste_haber_id=' + vta_ajuste_haber_id,
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

            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
        }
    });
}


/*
 * Forma de Pago 
 */
function setChangeCmbGralFpFormaPago() {
    $("#listado_vta_ajuste_haber_items .tr-item .gral_fp_forma_pago_id").unbind();
    $("#listado_vta_ajuste_haber_items .tr-item .gral_fp_forma_pago_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_gral_fp_forma_pago.php",
            data: "key=" + key + "&cmb_gral_fp_forma_pago_id=" + cmb_gral_fp_forma_pago_id,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_gral_fp_forma_pago_id[" + key + "]").removeClass('input-error');
                $("#cmb_gral_fp_forma_pago_id_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
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
                        //$('#txt_importe_unitario_' + key).val('');
                        //$('#txt_descripcion_' + key).val('');
                        //$('#txt_referencia_' + key).val('');

                        $('#btn_ver_modal_set_cheque_info_' + key).hide();

                        $('#txt_importe_unitario_' + key).removeAttr('readonly');
                        $('#txt_descripcion_' + key).removeAttr('readonly');
                        $('#txt_referencia_' + key).removeAttr('readonly');
                    }
                }

                setInitVtaAjusteHaberGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setClickVtaAjusteHaberGestionSetCheque() {
    $("#listado_vta_ajuste_haber_items .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_vta_ajuste_haber_items .tr-item .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key                         = $(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;

        var modulo                      = 'vta_ajuste_haber';
        var var_sesion_random           = $('.datos.generar-ajuste_haber').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}

function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
    $.ajax(
            {
                type: "GET",
        //url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_set_cheque_info.php",
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
                
                    setInitVtaAjusteHaberGestion();
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



/*
 * Retenciones 
 */
function setChangeCmbVtaAjusteHaberConcepto() {
    $("#listado_vta_ajuste_haber_items .tr-item .cmb_vta_ajuste_haber_concepto_id").unbind();
    $("#listado_vta_ajuste_haber_items .tr-item .cmb_vta_ajuste_haber_concepto_id").change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_vta_ajuste_haber_concepto_id = $(this).val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_vta_ajuste_haber_concepto.php",
            data: "key=" + key + "&cmb_vta_ajuste_haber_concepto_id=" + cmb_vta_ajuste_haber_concepto_id,
            dataType: "json",
            beforeSend: function () {
                $("#cmb_vta_ajuste_haber_concepto_id[" + key + "]").removeClass('input-error');
                $("#cmb_vta_ajuste_haber_concepto_id_" + key + "_error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#cmb_vta_ajuste_haber_concepto_id[" + key + "]").removeClass('input-error');

                    if (arr["btn_retencion"]) {
                        $("#btn_ver_modal_set_retencion_info_" + key).show();
                    } else {
                        $("#btn_ver_modal_set_retencion_info_" + key).hide();
                    }
                }

                setInitVtaAjusteHaberGestion();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}

function setClickVtaAjusteHaberGestionSetRetencion() {
    $("#listado_vta_ajuste_haber_items .tr-item .boton.ver_modal_set_retencion_info").unbind();
    $("#listado_vta_ajuste_haber_items .tr-item .boton.ver_modal_set_retencion_info").click(function (e) {
        var key = $(this).parents("tr").attr('key');
        verModalVtaAjusteHaberGestionSetRetencion(key);
    });
}

function verModalVtaAjusteHaberGestionSetRetencion(key)
{
    var modulo            = 'vta_ajuste_haber';
    var var_sesion_random = $(".datos.generar-ajuste_haber").attr('var_sesion_random');
    $.ajax(
    {
        type: "GET",
        url: "ajax/modulos/vta_ajuste_haber_gestion/modal_vta_ajuste_haber_gestion_set_retencion_info.php",
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
        success: function (data) {
            $(".div_modal_modal").html(data);

            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaAjusteHaberGestionSetRetencionBtnGuardar() {
    $(".div_modal_modal #form_set_retencion_info .datos .botonera .boton.btn_guardar").unbind();
    $(".div_modal_modal #form_set_retencion_info .datos .botonera .boton.btn_guardar").click(function (e) {
        setVtaAjusteHaberGestionSetRetencionBtnGuardar();
    });
}

function setVtaAjusteHaberGestionSetRetencionBtnGuardar() {

    var form_set_retencion_info = $('#form_set_retencion_info');
    var key                     = form_set_retencion_info.attr('key');
    var modulo                  = form_set_retencion_info.attr('modulo');
    var var_sesion_random       = form_set_retencion_info.attr('var_sesion_random');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_ajuste_haber_gestion/set_vta_ajuste_haber_gestion_set_retencion_info.php",
        data: form_set_retencion_info.serialize()  + '&modulo=' + modulo + '&key=' + key + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function () {
            $(".div_modal_modal .botonera").hide();
            $(".div_modal_modal .textbox").removeClass('input-error');
            $(".div_modal_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal_modal .botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal_modal").dialog("close");
            }

            setInitVtaAjusteHaberGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (jqXHR, estado, error) {
        }
    });
}

