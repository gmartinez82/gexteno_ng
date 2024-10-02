// archivo js del modulo 'cntb_periodo_gestion'
$(function ($) {
    setInitCntbPeriodoGestion();
});


function setInitCntbPeriodoGestion() {
    setClickBtnCntbPeriodoGestionModalGenerar();
    setClickBtnCntbPeriodoGestionGenerar();
    setClickBtnVerModalRegenerarCntbPeriodoGestion();
    setClickBtnRegenerarModalCntbPeriodoGestion();
    setChangeCmbGralEmpresa();
}


function setClickBtnCntbPeriodoGestionModalGenerar() {
    $('.div_listado_buscador .boton.cntb-periodo-gestion-modal_generar').unbind();
    $('.div_listado_buscador .boton.cntb-periodo-gestion-modal_generar').click(function (e)
    {
        verCntbPeriodoGestionModalGenerar();
    });
}


function verCntbPeriodoGestionModalGenerar() {
    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/cntb_periodo_gestion/modal_cntb_periodo_gestion_generar.php',
        data: '',
        dataType: 'html',
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '98%',
                height: 650,
                modal: true,
                title: 'Generar Periodo',
                close: function ()
                {
                    refreshAdmAll('cntb_periodo_gestion', 1)
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);

            setInitCntbPeriodoGestion();
            setInit();

            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnCntbPeriodoGestionGenerar() {
    $('.div_modal .datos.modal-cntb-periodo-gestion-generar .botonera #btn_cntb_periodo_gestion_generar').unbind();
    $('.div_modal .datos.modal-cntb-periodo-gestion-generar .botonera #btn_cntb_periodo_gestion_generar').click(function (e)
    {
        setCntbPeriodoGestionGenerar();
    });
}


function setCntbPeriodoGestionGenerar() {
    var form = $('#form_cntb_periodo_gestion_generar');

    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/cntb_periodo_gestion/set_cntb_periodo_gestion_generar.php',
        data: form.serialize(),
        dataType: 'json',
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
            var arr_comprobantes = arr['arr_comprobantes'];

            if (arr['error'])
            {
                $('.div_modal .botonera-loading').remove();
                $('.div_modal .botonera').show();

                $.each(arr, function (i, item) {
                    $('#' + i).addClass('input-error');
                    $('#' + i + '_error').html(arr[i]);
                });

                $('.error-comprobantes-uno').remove();

                var div_error_uno;

                $.each(arr_comprobantes, function (indice, elemento)
                {
                    $.each(elemento, function (ind, elem)
                    {
                        if (indice === 'vta_comprobantes') {

                            div_error_uno = '<div class="error-comprobantes-uno">';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-numero-comprobante">';
                            div_error_uno = div_error_uno + elem['numero_comprobante_completo_full'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-persona">';
                            div_error_uno = div_error_uno + elem['persona'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-fecha">';
                            div_error_uno = div_error_uno + elem['fecha'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '</div>';

                            $('.error-comprobantes-ventas').append(div_error_uno);
                        }

                        if (indice === 'pde_comprobantes') {
                            div_error_uno = '<div class="error-comprobantes-uno">';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-numero-comprobante">';
                            div_error_uno = div_error_uno + elem['numero_comprobante_completo_full'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-persona">';
                            div_error_uno = div_error_uno + elem['persona'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-fecha">';
                            div_error_uno = div_error_uno + elem['fecha'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '</div>';

                            $('.error-comprobantes-compras').append(div_error_uno);
                        }
                    });
                });

                $('.error-comprobantes').show();
            } else
            {
                $(".div_modal").dialog("close");
            }

            setInitCntbPeriodoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnVerModalRegenerarCntbPeriodoGestion() {
    $('#listado_adm_cntb_periodo_gestion .adm_botones_acciones .adm_botones_accion.modal-regenerar-periodo').unbind();
    $('#listado_adm_cntb_periodo_gestion .adm_botones_acciones .adm_botones_accion.modal-regenerar-periodo').click(function (e)
    {
        var cntb_periodo_id = $(this).parents('.uno').attr('identificador');
        verModalRegenerarCntbPeriodoGestion(cntb_periodo_id);
    });
}


function verModalRegenerarCntbPeriodoGestion(cntb_periodo_id) {
    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/cntb_periodo_gestion/modal_cntb_periodo_gestion_regenerar.php',
        data: 'cntb_periodo_id=' + cntb_periodo_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
 	               width: '98%',
 	               height: 650,
                        modal: true,
                        title: 'Regenerar Periodo',
                        close: function ()
                        {
                            var pagina = $("#hdn_pag_actual").val();
                            refreshAdmAll('cntb_periodo_gestion', pagina);
                        },
                        hide: 'fade',
                    });
        },
        success: function (data)
        {
            $('.div_modal').html(data);

            setInitCntbPeriodoGestion();
            setInit();

            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnRegenerarModalCntbPeriodoGestion() {

    $(".div_modal .datos.modal-cntb-periodo-gestion-regenerar .botonera #btn_cntb_periodo_gestion_regenerar").unbind();
    $(".div_modal .datos.modal-cntb-periodo-gestion-regenerar .botonera #btn_cntb_periodo_gestion_regenerar").click(function (e) {
        var cntb_periodo_id = $(this).parents(".datos.modal-cntb-periodo-gestion-regenerar").attr("cntb_periodo_id");
        setRegenerarCntbPeriodoGestion(cntb_periodo_id);
    });
}


function setRegenerarCntbPeriodoGestion(cntb_periodo_id) {
    var form = $('#form_cntb_periodo_gestion_regenerar');

    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/cntb_periodo_gestion/set_cntb_periodo_gestion_regenerar.php',
        data: form.serialize() + '&cntb_periodo_id=' + cntb_periodo_id,
        dataType: "json",
        beforeSend: function (objeto)
        {
            $('.div_modal .botonera').hide();
            $('.div_modal .botonera').after("<div class='botonera-loading'>" + img_loading + "Procesando, aguarde por favor ... Demora un momento</div>");
            $('.div_modal .textbox').removeClass('input-error');
            $('.div_modal .label-error').html('');
        },
        success: function (data)
        {
            var arr = data;
            var arr_comprobantes = arr['arr_comprobantes'];

            if (arr['error'])
            {
                $('.div_modal .botonera-loading').remove();
                $('.div_modal .botonera').show();

                $.each(arr, function (i, item) {
                    $('#' + i).addClass('input-error');
                    $('#' + i + '_error').html(arr[i]);
                });

                $('.error-comprobantes-uno').remove();

                $.each(arr_comprobantes, function (indice, elemento) {
                    $.each(elemento, function (ind, elem) {
                        if (indice === 'vta_comprobantes') {

                            div_error_uno = '<div class="error-comprobantes-uno">';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-numero-comprobante">';
                            div_error_uno = div_error_uno + elem['numero_comprobante_completo_full'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-persona">';
                            div_error_uno = div_error_uno + elem['persona'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-fecha">';
                            div_error_uno = div_error_uno + elem['fecha'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '</div>';

                            $('.error-comprobantes-ventas').append(div_error_uno);
                        }

                        if (indice === 'pde_comprobantes') {
                            div_error_uno = '<div class="error-comprobantes-uno">';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-numero-comprobante">';
                            div_error_uno = div_error_uno + elem['numero_comprobante_completo_full'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-persona">';
                            div_error_uno = div_error_uno + elem['persona'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '<div class="error-comprobantes-uno-fecha">';
                            div_error_uno = div_error_uno + elem['fecha'];
                            div_error_uno = div_error_uno + '</div>';
                            div_error_uno = div_error_uno + '</div>';

                            $('.error-comprobantes-compras').append(div_error_uno);
                        }
                    });
                });

                $('.error-comprobantes').show();
            } else
            {
                $(".div_modal").dialog("close");
            }

            setInitCntbPeriodoGestion();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setChangeCmbGralEmpresa() {
    $('#cmb_gral_empresa_id').unbind();
    $('#cmb_gral_empresa_id').change(function ()
    {
        var gral_empresa_id = $(this).val();
        if (gral_empresa_id > 0)
        {
            setCntbEjercicioCmbPorGralEmpresa(gral_empresa_id);
        } else
        {
            var cmb_cntb_ejercicio = $('#cmb_cntb_ejercicio_id');
            cmb_cntb_ejercicio.empty();
            cmb_cntb_ejercicio.append('<option value="">...</option>');

        }
    });
}

function setCntbEjercicioCmbPorGralEmpresa(gral_empresa_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/cntb_periodo_gestion/get_cntb_ejercicio_por_gral_empresa.php",
        data: "gral_empresa_id=" + gral_empresa_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto)
        {
        },
        success: function (data)
        {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb = $('#cmb_cntb_ejercicio_id');

            cmb.empty();
            cmb.append('<option value="">...</option>');
            for (var i = 0; i < len; i++)
            {
                cmb.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}
