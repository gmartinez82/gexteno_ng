// archivo js del modulo 'vta_factura'
$(function ($) {
    setInitVtaComprobanteGestion();
});

function setInitVtaComprobanteGestion() {

    // Seccion filtros top
    setChangeCmbFiltroVtaComprobanteCliCliente();
    setChangeCmbFiltroVtaComprobanteImputable();

    // Seccion Imputar comprobantes
    setClickVtaComprobanteImputarDebe();
    setClickVtaComprobanteImputarHaber();

    // seleccion de los comprobantes del modal generar vinculo
    setCheckComprobanteDebeAll();
    setCkeckComprobanteDebeUno();
    setCheckComprobanteHaberAll();
    setCkeckComprobanteHaberUno();

    // Seccion acciones
    setClickBtnGenerarVinculoDebe();
    setClickBtnGenerarVinculoHaber();
    setClickVtaNotaCreditoGestionVerFicha();
    setClickBtnDesvincular();

    setHoverVtaComprobanteUno();
}

function setChangeCmbFiltroVtaComprobanteCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        //setAdmBuscadorTop("vta_comprobante_gestion");
    });
}
function setChangeCmbFiltroVtaComprobanteImputable() {
    $("#cmb_filtro_imputable").unbind();
    $("#cmb_filtro_imputable").change(function () {
        //setAdmBuscadorTop("vta_comprobante_gestion");
    });
}

function setClickVtaComprobanteImputarDebe() {
    $('#listado_adm_vta_comprobante_gestion_debe .adm_botones_acciones .adm_botones_accion.imputar_comprobante').unbind();
    $('#listado_adm_vta_comprobante_gestion_debe .adm_botones_acciones .adm_botones_accion.imputar_comprobante').click(function (e) {
        var vta_comprobante_id = $(this).parents(".uno").attr("identificador");
        var clase = $(this).parents("td").attr("clase");
        verModalVtaComprobanteImputarDebe(vta_comprobante_id, clase);
    });
}

function verModalVtaComprobanteImputarDebe(vta_comprobante_id, clase) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_comprobante_gestion/modal_vta_comprobante_gestion_vincular_comprobante_debe.php",
        data: 'vta_comprobante_id=' + vta_comprobante_id + '&clase=' + clase,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Vincular Comprobante',
                close: function () {
                    refreshAdmAll('vta_comprobante_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckComprobanteDebeAll() {
    $('#listado_adm_vta_comprobante_gestion_debe #chk_vta_comprobante_debe_select_all').unbind();
    $('#listado_adm_vta_comprobante_gestion_debe #chk_vta_comprobante_debe_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_vta_comprobante_gestion_debe .chk_vta_comprobante").attr('checked', true);
        } else {
            $("#listado_adm_vta_comprobante_gestion_debe .chk_vta_comprobante").attr('checked', false);
        }
        setComprobanteDebeUno();
    });
}

function setCkeckComprobanteDebeUno() {
    $("#listado_adm_vta_comprobante_gestion_debe .chk_vta_comprobante").unbind();
    $("#listado_adm_vta_comprobante_gestion_debe .chk_vta_comprobante").change(function () {
        setComprobanteDebeUno();
    });
}

function setComprobanteDebeUno() {
    var form = $("#form_vta_comprobante_gestion_generar_vinculo_debe");
    var clase = $('.div_listado_datos.comprobantes').attr('clase');
    var vta_comprobante_id = $('.div_listado_datos.comprobantes').attr('vta_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comprobante_gestion/bloque_vta_comprobante_gestion_totales_debe.php",
        data: form.serialize() + '&clase=' + clase + '&vta_comprobante_id=' + vta_comprobante_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal #vta_comprobante_gestion_totales").html(img_loading);
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
        },
        success: function (data) {
            $(".div_modal #vta_comprobante_gestion_totales").html(data);

            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnGenerarVinculoDebe() {
    $(".botonera #btn_generar_vinculo_debe").unbind();
    $(".botonera #btn_generar_vinculo_debe").click(function () {
        setVtaComprobanteBtnGenerarVinculoDebe();
    });
}

function setVtaComprobanteBtnGenerarVinculoDebe() {
    var form = $("#form_vta_comprobante_gestion_generar_vinculo_debe");
    var clase = form.attr('clase');
    var vta_comprobante_id = form.attr('vta_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comprobante_gestion/set_vta_comprobante_gestion_generar_vinculo_debe.php",
        data: form.serialize() + '&vta_comprobante_id=' + vta_comprobante_id + '&clase=' + clase,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
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
                $(".div_modal").dialog("close");
                refreshAdmAll('vta_comprobante_gestion', 1);
            }

            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaComprobanteImputarHaber() {
    $('#listado_adm_vta_comprobante_gestion_haber .adm_botones_acciones .adm_botones_accion.imputar_comprobante').unbind();
    $('#listado_adm_vta_comprobante_gestion_haber .adm_botones_acciones .adm_botones_accion.imputar_comprobante').click(function (e) {
        var vta_comprobante_id = $(this).parents(".uno").attr("identificador");
        var clase = $(this).parents("td").attr("clase");
        verModalVtaComprobanteImputarHaber(vta_comprobante_id, clase);
    });
}

function verModalVtaComprobanteImputarHaber(vta_comprobante_id, clase) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/vta_comprobante_gestion/modal_vta_comprobante_gestion_vincular_comprobante_haber.php",
        data: 'vta_comprobante_id=' + vta_comprobante_id + '&clase=' + clase,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Vincular Comprobante',
                close: function () {
                    refreshAdmAll('vta_comprobante_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setCheckComprobanteHaberAll() {
    $('#listado_adm_vta_comprobante_gestion_haber #chk_vta_comprobante_haber_select_all').unbind();
    $('#listado_adm_vta_comprobante_gestion_haber #chk_vta_comprobante_haber_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_vta_comprobante_gestion_haber .chk_vta_comprobante").attr('checked', true);
        } else {
            $("#listado_adm_vta_comprobante_gestion_haber .chk_vta_comprobante").attr('checked', false);
        }
        setComprobanteHaberUno();
    });
}

function setCkeckComprobanteHaberUno() {
    $("#listado_adm_vta_comprobante_gestion_haber .chk_vta_comprobante").unbind();
    $("#listado_adm_vta_comprobante_gestion_haber .chk_vta_comprobante").change(function () {
        setComprobanteHaberUno();
    });
}

function setComprobanteHaberUno() {
    var form = $("#form_vta_comprobante_gestion_generar_vinculo_haber");
    var clase = $('.div_listado_datos.comprobantes').attr('clase');
    var vta_comprobante_id = $('.div_listado_datos.comprobantes').attr('vta_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comprobante_gestion/bloque_vta_comprobante_gestion_totales_haber.php",
        data: form.serialize() + '&clase=' + clase + '&vta_comprobante_id=' + vta_comprobante_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal #vta_comprobante_gestion_totales").html(img_loading);
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
        },
        success: function (data) {
            $(".div_modal #vta_comprobante_gestion_totales").html(data);

            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnGenerarVinculoHaber() {
    $(".botonera #btn_generar_vinculo_haber").unbind();
    $(".botonera #btn_generar_vinculo_haber").click(function () {
        setVtaComprobanteBtnGenerarVinculoHaber();
    });
}

function setVtaComprobanteBtnGenerarVinculoHaber() {
    var form = $("#form_vta_comprobante_gestion_generar_vinculo_haber");
    var clase = form.attr('clase');
    var vta_comprobante_id = form.attr('vta_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comprobante_gestion/set_vta_comprobante_gestion_generar_vinculo_haber.php",
        data: form.serialize() + '&vta_comprobante_id=' + vta_comprobante_id + '&clase=' + clase,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
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
                $(".div_modal").dialog("close");
                refreshAdmAll('vta_comprobante_gestion', 1);
            }

            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVtaNotaCreditoGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.vta_comprobante_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_comprobante_gestion_ver_ficha').click(function (e) {
        var vta_comprobante_id = $(this).parents(".uno").attr("identificador");
        var clase = $(this).parents("td").attr("clase");

        switch (clase) {
            case 'VtaNotaCredito':
                verModalVtaNotaCreditoGestionVerFicha(vta_comprobante_id);
                break;
            case 'VtaNotaDebito':
                verModalVtaNotaDebitoGestionVerFicha(vta_comprobante_id);
                break;
            case 'VtaFactura':
                verModalVtaFacturaGestionVerFicha(vta_comprobante_id);
                break;
            case 'VtaRecibo':
                verModalVtaReciboGestionVerFicha(vta_comprobante_id);
                break;
            default:
                alert('Default');
        }

    });
}

function verModalVtaNotaCreditoGestionVerFicha(vta_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comprobante_gestion/modal_vta_nota_credito_gestion_ficha.php",
        data: 'vta_nota_credito_id=' + vta_nota_credito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Nota de Credito',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalVtaNotaDebitoGestionVerFicha(vta_nota_debito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comprobante_gestion/modal_vta_nota_debito_gestion_ficha.php",
        data: 'vta_nota_debito_id=' + vta_nota_debito_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Nota de Debito',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalVtaFacturaGestionVerFicha(vta_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comprobante_gestion/modal_vta_factura_gestion_ficha.php",
        data: 'vta_factura_id=' + vta_factura_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Factura',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalVtaReciboGestionVerFicha(vta_recibo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_comprobante_gestion/modal_vta_recibo_gestion_ficha.php",
        data: 'vta_recibo_id=' + vta_recibo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha del Recibo',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnDesvincular() {
    $(".adm_botones_acciones .adm_botones_accion.vta_comprobante_gestion_desvincular").unbind();
    $('.adm_botones_acciones .adm_botones_accion.vta_comprobante_gestion_desvincular').click(function (e) {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        var clase = $(this).parents('tr.uno').attr('clase');

        if (confirm('Desea desvincular el comprobante?')) {
            setVtaComprobanteBtnDesvincular(identificador, clase);
        }
    });
}

function setVtaComprobanteBtnDesvincular(identificador, clase) {

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_comprobante_gestion/set_vta_comprobante_gestion_desvincular.php",
        data: 'identificador=' + identificador + '&clase=' + clase,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
        },
        success: function (data) {
            refreshAdmAll('vta_comprobante_gestion', 1);

            setInitVtaComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setHoverVtaComprobanteUno() {
    // -------------------------------------------------------------------------
    // DEBE
    // -------------------------------------------------------------------------
    $('#listado_adm_vta_comprobante_gestion_debe .uno').unbind();
    $('#listado_adm_vta_comprobante_gestion_debe .uno').mouseenter(function (e) {
        var vta_comprobante_id = $(this).attr("identificador");
        var vta_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");

        $(this).addClass('remarcar');

        $('#listado_adm_vta_comprobante_gestion_haber .uno.CC_' + vta_comprobante_codigo).addClass('remarcar');
    });
    $('#listado_adm_vta_comprobante_gestion_debe .uno').mouseleave(function (e) {
        var vta_comprobante_id = $(this).attr("identificador");
        var vta_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");

        $('#listado_adm_vta_comprobante_gestion_debe .uno').removeClass('remarcar');

        $('#listado_adm_vta_comprobante_gestion_haber .uno.CC_' + vta_comprobante_codigo).removeClass('remarcar');
    });

    // -------------------------------------------------------------------------
    // HABER
    // -------------------------------------------------------------------------
    $('#listado_adm_vta_comprobante_gestion_haber .uno').unbind();
    $('#listado_adm_vta_comprobante_gestion_haber .uno').mouseenter(function (e) {
        var vta_comprobante_id = $(this).attr("identificador");
        var vta_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");

        $(this).addClass('remarcar');

        $('#listado_adm_vta_comprobante_gestion_debe .uno.CC_' + vta_comprobante_codigo).addClass('remarcar');
    });
    $('#listado_adm_vta_comprobante_gestion_haber .uno').mouseleave(function (e) {
        var vta_comprobante_id = $(this).attr("identificador");
        var vta_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");

        $('#listado_adm_vta_comprobante_gestion_haber .uno').removeClass('remarcar');

        $('#listado_adm_vta_comprobante_gestion_debe .uno.CC_' + vta_comprobante_codigo).removeClass('remarcar');
    });

}
