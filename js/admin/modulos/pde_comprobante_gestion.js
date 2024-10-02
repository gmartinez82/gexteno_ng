// archivo js del modulo 'pde_factura'
$(function ($) {
    setInitPdeComprobanteGestion();
});

function setInitPdeComprobanteGestion() {

    // Seccion filtros top
    setChangeCmbFiltroPdeComprobantePrvProveedor();
    setChangeCmbFiltroPdeComprobanteImputable();

    // Seccion Imputar comprobantes
    setClickPdeComprobanteImputarDebe();
    setClickPdeComprobanteImputarHaber();

    // seleccion de los comprobantes del modal generar vinculo
    setCheckComprobanteDebeAll();
    setCkeckComprobanteDebeUno();
    setCheckComprobanteHaberAll();
    setCkeckComprobanteHaberUno();

    // Seccion acciones
    setClickBtnGenerarVinculoDebe();
    setClickBtnGenerarVinculoHaber();
    setClickPdeNotaCreditoGestionVerFicha();
    setClickBtnDesvincular();
    
    setHoverPdeComprobanteUno();
}

function setChangeCmbFiltroPdeComprobantePrvProveedor() {
    $("#cmb_filtro_prv_proveedor_id").unbind();
    $("#cmb_filtro_prv_proveedor_id").change(function () {
        //setAdmBuscadorTop("pde_comprobante_gestion");
    });
}
function setChangeCmbFiltroPdeComprobanteImputable() {
    $("#cmb_filtro_imputable").unbind();
    $("#cmb_filtro_imputable").change(function () {
        //setAdmBuscadorTop("pde_comprobante_gestion");
    });
}

function setClickPdeComprobanteImputarDebe() {
    $('#listado_adm_pde_comprobante_gestion_debe .adm_botones_acciones .adm_botones_accion.imputar_comprobante').unbind();
    $('#listado_adm_pde_comprobante_gestion_debe .adm_botones_acciones .adm_botones_accion.imputar_comprobante').click(function (e) {
        var pde_comprobante_id = $(this).parents(".uno").attr("identificador");
        var clase = $(this).parents("td").attr("clase");
        verModalPdeComprobanteImputarDebe(pde_comprobante_id, clase);
    });
}

function verModalPdeComprobanteImputarDebe(pde_comprobante_id, clase) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_comprobante_gestion/modal_pde_comprobante_gestion_vincular_comprobante_debe.php",
        data: 'pde_comprobante_id=' + pde_comprobante_id + '&clase=' + clase,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Vincular Comprobante',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeComprobanteGestion();
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
    $('#listado_adm_pde_comprobante_gestion_debe #chk_pde_comprobante_debe_select_all').unbind();
    $('#listado_adm_pde_comprobante_gestion_debe #chk_pde_comprobante_debe_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_pde_comprobante_gestion_debe .chk_pde_comprobante").attr('checked', true);
        } else {
            $("#listado_adm_pde_comprobante_gestion_debe .chk_pde_comprobante").attr('checked', false);
        }
        setComprobanteDebeUno();
    });
}

function setCkeckComprobanteDebeUno() {
    $("#listado_adm_pde_comprobante_gestion_debe .chk_pde_comprobante").unbind();
    $("#listado_adm_pde_comprobante_gestion_debe .chk_pde_comprobante").change(function () {
        setComprobanteDebeUno();
    });
}

function setComprobanteDebeUno() {
    var form = $("#form_pde_comprobante_gestion_generar_vinculo_debe");
    var clase = $('.div_listado_datos.comprobantes').attr('clase');
    var pde_comprobante_id = $('.div_listado_datos.comprobantes').attr('pde_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_comprobante_gestion/bloque_pde_comprobante_gestion_totales_debe.php",
        data: form.serialize() + '&clase=' + clase + '&pde_comprobante_id=' + pde_comprobante_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal #pde_comprobante_gestion_totales").html(img_loading);
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
        },
        success: function (data) {
            $(".div_modal #pde_comprobante_gestion_totales").html(data);

            setInitPdeComprobanteGestion();
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
        setPdeComprobanteBtnGenerarVinculoDebe();
    });
}

function setPdeComprobanteBtnGenerarVinculoDebe() {
    var form = $("#form_pde_comprobante_gestion_generar_vinculo_debe");
    var clase = form.attr('clase');
    var pde_comprobante_id = form.attr('pde_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_comprobante_gestion/set_pde_comprobante_gestion_generar_vinculo_debe.php",
        data: form.serialize() + '&pde_comprobante_id=' + pde_comprobante_id + '&clase=' + clase,
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
                refreshAdmAll('pde_comprobante_gestion', 1);
            }

            setInitPdeComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeComprobanteImputarHaber() {
    $('#listado_adm_pde_comprobante_gestion_haber .adm_botones_acciones .adm_botones_accion.imputar_comprobante').unbind();
    $('#listado_adm_pde_comprobante_gestion_haber .adm_botones_acciones .adm_botones_accion.imputar_comprobante').click(function (e) {
        var pde_comprobante_id = $(this).parents(".uno").attr("identificador");
        var clase = $(this).parents("td").attr("clase");
        verModalPdeComprobanteImputarHaber(pde_comprobante_id, clase);
    });
}

function verModalPdeComprobanteImputarHaber(pde_comprobante_id, clase) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pde_comprobante_gestion/modal_pde_comprobante_gestion_vincular_comprobante_haber.php",
        data: 'pde_comprobante_id=' + pde_comprobante_id + '&clase=' + clase,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Vincular Comprobante',
                close: function () {
                    setClickAdmRefreshAll();
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdeComprobanteGestion();
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
    $('#listado_adm_pde_comprobante_gestion_haber #chk_pde_comprobante_haber_select_all').unbind();
    $('#listado_adm_pde_comprobante_gestion_haber #chk_pde_comprobante_haber_select_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("#listado_adm_pde_comprobante_gestion_haber .chk_pde_comprobante").attr('checked', true);
        } else {
            $("#listado_adm_pde_comprobante_gestion_haber .chk_pde_comprobante").attr('checked', false);
        }
        setComprobanteHaberUno();
    });
}

function setCkeckComprobanteHaberUno() {
    $("#listado_adm_pde_comprobante_gestion_haber .chk_pde_comprobante").unbind();
    $("#listado_adm_pde_comprobante_gestion_haber .chk_pde_comprobante").change(function () {
        setComprobanteHaberUno();
    });
}

function setComprobanteHaberUno() {
    var form = $("#form_pde_comprobante_gestion_generar_vinculo_haber");
    var clase = $('.div_listado_datos.comprobantes').attr('clase');
    var pde_comprobante_id = $('.div_listado_datos.comprobantes').attr('pde_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_comprobante_gestion/bloque_pde_comprobante_gestion_totales_haber.php",
        data: form.serialize() + '&clase=' + clase + '&pde_comprobante_id=' + pde_comprobante_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal #pde_comprobante_gestion_totales").html(img_loading);
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
        },
        success: function (data) {
            $(".div_modal #pde_comprobante_gestion_totales").html(data);

            setInitPdeComprobanteGestion();
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
        setPdeComprobanteBtnGenerarVinculoHaber();
    });
}

function setPdeComprobanteBtnGenerarVinculoHaber() {
    var form = $("#form_pde_comprobante_gestion_generar_vinculo_haber");
    var clase = form.attr('clase');
    var pde_comprobante_id = form.attr('pde_comprobante_id');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_comprobante_gestion/set_pde_comprobante_gestion_generar_vinculo_haber.php",
        data: form.serialize() + '&pde_comprobante_id=' + pde_comprobante_id + '&clase=' + clase,
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
                refreshAdmAll('pde_comprobante_gestion', 1);
            }

            setInitPdeComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPdeNotaCreditoGestionVerFicha() {
    $('.adm_botones_acciones .adm_botones_accion.pde_comprobante_gestion_ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.pde_comprobante_gestion_ver_ficha').click(function (e) {
        var pde_comprobante_id = $(this).parents(".uno").attr("identificador");
        var clase = $(this).parents("td").attr("clase");

        switch (clase) {
            case 'PdeNotaCredito':
                verModalPdeNotaCreditoGestionVerFicha(pde_comprobante_id);
                break;
            case 'PdeNotaDebito':
                verModalPdeNotaDebitoGestionVerFicha(pde_comprobante_id);
                break;
            case 'PdeFactura':
                verModalPdeFacturaGestionVerFicha(pde_comprobante_id);
                break;
            case 'PdeRecibo':
                verModalPdeReciboGestionVerFicha(pde_comprobante_id);
                break;
            default:
                alert('Default');
        }

    });
}

function verModalPdeNotaCreditoGestionVerFicha(pde_nota_credito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_comprobante_gestion/modal_pde_nota_credito_gestion_ficha.php",
        data: 'pde_nota_credito_id=' + pde_nota_credito_id,
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
            setInitPdeComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalPdeNotaDebitoGestionVerFicha(pde_nota_debito_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_comprobante_gestion/modal_pde_nota_debito_gestion_ficha.php",
        data: 'pde_nota_debito_id=' + pde_nota_debito_id,
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
            setInitPdeComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalPdeFacturaGestionVerFicha(pde_factura_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_comprobante_gestion/modal_pde_factura_gestion_ficha.php",
        data: 'pde_factura_id=' + pde_factura_id,
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
            setInitPdeComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function verModalPdeReciboGestionVerFicha(pde_recibo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_comprobante_gestion/modal_pde_recibo_gestion_ficha.php",
        data: 'pde_recibo_id=' + pde_recibo_id,
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
            setInitPdeComprobanteGestion();
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
    $(".adm_botones_acciones .adm_botones_accion.pde_comprobante_gestion_desvincular").unbind();
    $('.adm_botones_acciones .adm_botones_accion.pde_comprobante_gestion_desvincular').click(function (e) {
        var identificador = $(this).parents('tr.uno').attr('identificador');
        var clase = $(this).parents('tr.uno').attr('clase');

        if (confirm('Desea desvincular el comprobante?')) {
            setPdeComprobanteBtnDesvincular(identificador, clase);
        }
    });
}

function setPdeComprobanteBtnDesvincular(identificador, clase) {

    $.ajax({
        type: "POST",
        url: "ajax/modulos/pde_comprobante_gestion/set_pde_comprobante_gestion_desvincular.php",
        data: 'identificador=' + identificador + '&clase=' + clase,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".label-error").html("");
            $(".input-error").removeClass('input-error');
        },
        success: function (data) {
            refreshAdmAll('pde_comprobante_gestion', 1);

            setInitPdeComprobanteGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setHoverPdeComprobanteUno() {
    // -------------------------------------------------------------------------
    // DEBE
    // -------------------------------------------------------------------------
    $('#listado_adm_pde_comprobante_gestion_debe .uno').unbind();
    $('#listado_adm_pde_comprobante_gestion_debe .uno').mouseenter(function (e) {
        var pde_comprobante_id = $(this).attr("identificador");
        var pde_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");

        $(this).addClass('remarcar');
        
        $('#listado_adm_pde_comprobante_gestion_haber .uno.CC_' + pde_comprobante_codigo).addClass('remarcar');
    });
    $('#listado_adm_pde_comprobante_gestion_debe .uno').mouseleave(function (e) {
        var pde_comprobante_id = $(this).attr("identificador");
        var pde_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");
        
        $('#listado_adm_pde_comprobante_gestion_debe .uno').removeClass('remarcar');        
        
        $('#listado_adm_pde_comprobante_gestion_haber .uno.CC_' + pde_comprobante_codigo).removeClass('remarcar');
    });

    // -------------------------------------------------------------------------
    // HABER
    // -------------------------------------------------------------------------
    $('#listado_adm_pde_comprobante_gestion_haber .uno').unbind();
    $('#listado_adm_pde_comprobante_gestion_haber .uno').mouseenter(function (e) {
        var pde_comprobante_id = $(this).attr("identificador");
        var pde_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");

        $(this).addClass('remarcar');
        
        $('#listado_adm_pde_comprobante_gestion_debe .uno.CC_' + pde_comprobante_codigo).addClass('remarcar');
    });
    $('#listado_adm_pde_comprobante_gestion_haber .uno').mouseleave(function (e) {
        var pde_comprobante_id = $(this).attr("identificador");
        var pde_comprobante_codigo = $(this).attr("codigo");
        var clase = $(this).attr("clase");
        
        $('#listado_adm_pde_comprobante_gestion_haber .uno').removeClass('remarcar');        
        
        $('#listado_adm_pde_comprobante_gestion_debe .uno.CC_' + pde_comprobante_codigo).removeClass('remarcar');
    });
    
}
