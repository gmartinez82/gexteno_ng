// JavaScript Document
var img_loading = "<img src='imgs/loading.gif' />";
var img_loading_gr = "<img src='imgs/loading_gr.gif' />";
var html_loading_img = "<div style='margin-left:100px;margin-top:100px;'><img src='imgs/loading.gif' /> Procesando ...</div>";
var html_loading_img_min = "<div style='margin-left:10px;margin-top:10px;'><img src='imgs/loading.gif' /> Procesando ...</div>";
var html_loading_img_row_ajax = "<div style='position:absolute; margin-left:-105px; margin-top:6px;'>" + img_loading + "</div>";
var html_loading_img_data_ajax = "<div id='html_loading_img_data_ajax' style='position:absolute; margin-left:40%; margin-top:50px;'>" + img_loading_gr + "</div>";
var html_loading_botonera = "<div id='html_loading_botonera' style='margin: 10px auto; text-align: center; '>" + img_loading + "</div>";
var html_loading_img_widget = "<div style='margin-top:10px; text-align: center;'><img src='imgs/loading.gif' width='200px' /></div>";
var html_loading_img_widget_tab = "<div style='margin-top:50px; text-align: center;'><img src='imgs/loading_gr.gif' width='200px' /></div>";

$(function ($) {
    setInit();
});

function setInit() {
    
    setClickCmbAgregarNuevo();
    setClickCmbEditar();
    setClickComboPadre();
    setChangeCmb();

    setClickContextMenu();
    setClickBtnGuardar();

    setClickWopenModal();
    setClickEliminar();
    setClickPublicado();
    setClickEstado();

    setClickMasInfoTabs();
    setClickModalTabs();
    setClickVerMasInfo();

    //setInitDbSuggest();
    setInitInputMascaras();
    setInitInputPluggins();

    setOverflowPreviewText();
    
    // filtros
    setMarcaFiltroSeleccionado();
    setMarcaInputSelectSeleccionado();
    
    setImagenesLightbox();
    
    setInitDbSuggest();
    setInitAdmSelectiveInput();
    
    // help
    setClickBtnVerAtributosModalHelp();
    setClickBtnGuardarAtributoHelp();
    
    setDbTooltip();
    
    // modal-ajax
    setClickGenOpenModal();
    setClickGenOpenModalBtnConfirmar();    

    // execute-ajax
    setClickGenExecuteAction();

    // refresh-ajax
    setClickGenRefreshAction();
}

function setClickGenOpenModal() {
    $('.gen-modal-open').unbind();
    $('.gen-modal-open').click(function (e) {

        var gen_modal_file = $(this).attr('gen-modal-file');
        var gen_modal_content = $(this).attr('gen-modal-content');
        var gen_modal_width = $(this).attr('gen-modal-width');
        var gen_modal_height = $(this).attr('gen-modal-height');
        var gen_modal_titulo = $(this).attr('gen-modal-titulo');
        var gen_modal_callback = $(this).attr('gen-modal-callback');
        var gen_modal_callback_onclose = $(this).attr('gen-modal-callback-onclose');

        $.ajax({
            type: 'GET',
            url: gen_modal_file,
            data: '',
            dataType: "html",
            beforeSend: function (objeto) {
                $(gen_modal_content).html(img_loading);
                $(gen_modal_content).dialog({
                    width: gen_modal_width,
                    height: gen_modal_height,
                    modal: true,
                    title: gen_modal_titulo,
                    close: function () {
                        eval(gen_modal_callback_onclose);
                        $(gen_modal_content).html('');
                    }
                });
            },
            success: function (data) {
                $(gen_modal_content).html(data);

                eval(gen_modal_callback);

                setInit();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}
function setClickGenOpenModalBtnConfirmar() {
    $('.gen-modal-btn-confirmar').unbind();
    $('.gen-modal-btn-confirmar').click(function (e) {

        var gen_modal_file_post = $(this).attr('gen-modal-file-post');
        var gen_modal_content = $(this).attr('gen-modal-content');
        var gen_modal_callback = $(this).attr('gen-modal-callback');
        var form = $(this).parents('form');

        $.ajax({
            type: 'POST',
            url: gen_modal_file_post,
            data: form.serialize(),
            dataType: "json",
            beforeSend: function (objeto) {
                $(gen_modal_content + " .botonera").hide();
                $(gen_modal_content + " .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
                $(gen_modal_content + " .textbox").removeClass('input-error');
                $(gen_modal_content + " .label-error").html("");
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {
                    $(gen_modal_content + " .botonera-loading").remove();
                    $(gen_modal_content + " .botonera").show();

                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);

                        $("." + i + "_elem").addClass('input-error');
                        $("." + i + "_error").html(arr[i]);
                    });
                    //$("#error_general").html(arr['error_general']);
                } else {
                    $(gen_modal_content).dialog("close");
                    
                    eval(gen_modal_callback);
                }

                setInit();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickGenExecuteAction() {
    $('.gen-execute-action').unbind();
    $('.gen-execute-action').click(function (e) {

        var gen_execute_file = $(this).attr('gen-execute-file');
        var gen_execute_callback = $(this).attr('gen-execute-callback');

        $.ajax({
            type: 'GET',
            url: gen_execute_file,
            data: '',
            dataType: "html",
            beforeSend: function (objeto) {
                //$(gen_modal_content).html(img_loading);
            },
            success: function (data) {
                //$(gen_modal_content).html(data);

                eval(gen_execute_callback);

                setInit();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickGenRefreshAction() {
    $('.gen-refresh-action select').unbind();
    $('.gen-refresh-action select').change(function (e) {

        var gen_refresh_file = $(this).parents('.gen-refresh-action').attr('gen-refresh-file');
        var gen_refresh_content = $(this).parents('.gen-refresh-action').attr('gen-refresh-content');
        var gen_refresh_callback = $(this).parents('.gen-refresh-action').attr('gen-refresh-callback');

        $.ajax({
            type: 'GET',
            url: gen_refresh_file,
            data: 'id=' + $(this).val(),
            dataType: "html",
            beforeSend: function (objeto) {
                $(gen_refresh_content).html(img_loading);
            },
            success: function (data) {
                $(gen_refresh_content).html(data);

                eval(gen_refresh_callback);

                setInit();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setInitAdmSelectiveInput() {
    $('select.selective-input-filtro').selectize({// usar en buscadores y filtros
        allowEmptyOption: false,
        maxItems: 1,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
    });
    $('select.selective-input-edit').selectize({// usar en edicion de datos
        allowEmptyOption: true,
        maxItems: 1,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
    });
}

function setImagenesLightbox() {
    try {
        $('.avatar a').lightBox({
            fixedNavigation: true,
            imageLoading: '../comps/lightbox/images/lightbox-ico-loading.gif',
            imageBtnPrev: '../comps/lightbox/images/lightbox-btn-prev.gif',
            imageBtnNext: '../comps/lightbox/images/lightbox-btn-next.gif',
            imageBtnClose: '../comps/lightbox/images/lightbox-btn-close.gif',
            imageBlank: '../comps/lightbox/images/lightbox-blank.gif',
            txtImage: 'Foto',
            txtOf: 'de',
        });
    } catch (e) {
    }
}

function setMarcaFiltroSeleccionado() {
    try {
        $("#div_buscador_left select, #div_buscador_left input[type='text']").each(function () {
            var val = $(this).val();
            if (val != '') {
                $(this).addClass('sel');
                $(this).parents('.col').find('.quitar-filtro').show();
            }
        });
        $("#div_buscador_left_2016 select, #div_buscador_left_2016 input[type='text']").each(function () {
            var val = $(this).val();
            if (val != '') {
                $(this).addClass('sel');
                $(this).parents('.col').find('.quitar-filtro').show();
            }
        });
        $(".div_listado_buscador select, .div_listado_buscador input[type='text']").each(function () {
            var id = $(this).attr('id');
            if (id == 'txt_cantidad_paginas')
                return; // excepcion para cantidad de registros

            var val = $(this).val();
            if (val !== '') {
                $(this).addClass('sel');
                $(this).parents('.col').find('.quitar-filtro').show();
            } else {
                $(this).removeClass('sel');
                $(this).parents('.col').find('.quitar-filtro').hide();
            }
        });
    } catch (e) {
    }
}

function setMarcaInputSelectSeleccionado() {
    try {
        $("div.alta.datos select, div.alta.datos input[type='text'], div.alta.datos textarea").each(function () {
            var val = $(this).val();
            if (val != '') {
                $(this).addClass('sel');
            }
        });
    } catch (e) {
    }
}

function setInitInputMascaras() {

    try {
        $(".date").mask("99/99/9999");
        $(".horamin").mask("99:99");
        $(".cuit").mask("9-99999999-9");
        $(".nro-sucursal").mask("999");
        $(".nro-punto-venta-simple").mask("999");
        $(".nro-punto-venta").mask("999-999");
        $(".nro-comprobante").mask("9999999");
        
        /*
         $.mask.definitions['~']='[+-]';
         $(".date").mask("~9.99 ~9.99 999");
         
         $(".date").mask("(999) 999-9999? x99999");
         $(".date").mask("#hhhhhh");
         */

        $('.moneda').priceFormat({
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: '.',
            centsSeparator: ',',
            //centsLimit: 2,
            centsLimit: 0,
            allowNegative: true
        });
        $('.moneda-d2').priceFormat({
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: '.',
            centsSeparator: ',',
            centsLimit: 2,
            allowNegative: true
        });
        $('.moneda-d3').priceFormat({
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: '.',
            centsSeparator: ',',
            centsLimit: 3,
            allowNegative: true
        });
        $('.moneda-d4').priceFormat({
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: '.',
            centsSeparator: ',',
            centsLimit: 4,
            allowNegative: true
        });
        $('.moneda-d5').priceFormat({
            prefix: '',
            clearPrefix: true,
            thousandsSeparator: '.',
            centsSeparator: ',',
            centsLimit: 5,
            allowNegative: true
        });
        $('.moneda').focus(function () {
            $(this).select();
        });
        $('.moneda-d2').focus(function () {
            $(this).select();
        });
        $('.moneda-d3').focus(function () {
            $(this).select();
        });
        $('.moneda-d4').focus(function () {
            $(this).select();
        });
        $('.moneda-d5').focus(function () {
            $(this).select();
        });
    } catch (e) {
    }
}

function padStart(value, targetLength, padString) {
    targetLength = targetLength >> 0; //floor if number or convert non-number to 0;
    padString = String(padString || ' ');

    if (value.length > targetLength) {
        return String(value);
    } else {
        targetLength = targetLength - value.length;

        if (targetLength > padString.length) {
            padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
        }

        return padString.slice(0, targetLength) + String(value);
    }
}

function setInitInputPluggins() {
    try {

        $(".spinner").spinner();
        $(".spinner").css('border', 'none');
        $(".spinner").css('padding', '1px');
        $(".spinner").css('font-size', '11px');
        $(".spinner.porcentaje").spinner({
            min: 0,
            max: 100,
            numberFormat: "n",
            step: 0.01
        });
        $(".spinner.cantidad").spinner({
            min: 0,
            numberFormat: "n",
            step: 1
        });
        $(".spinner.fraccionable").spinner({
            min: 0.1,
            max: 100,
            numberFormat: "n1",
            step: 0.1
        });
    } catch (e) {
    }
}


function setClickContextMenu() {
//$('.div_contextual').hide();
    try {
        $('.enmarcador .opciones').unbind();
        $('.enmarcador .opciones').click(function (e) {
            var tabla = $(this).parent().attr('tabla');
            var clase = $(this).parent().attr('clase');
            var elemento_id = $(this).parent().attr('elemento_id');
            var tabla_relacion = $(this).parent().attr('tabla_relacion');
            var clase_relacion = $(this).parent().attr('clase_relacion');
            var elemento_id_relacion = $(this).parent().attr('elemento_id_relacion');

            $('#div_contextual').css('top', e.pageY);
            $('#div_contextual').css('left', e.pageX);

            setContextMenu(tabla, clase, elemento_id, tabla_relacion, clase_relacion, elemento_id_relacion);
            //alert(e.pageX +', '+ e.pageY);
        });

        $('#div_contextual').unbind();
        $('#div_contextual').mouseleave(function (e) {
            $('#div_contextual').hide();
        });
    } catch (e) {
    }

}

function setClickBtnGuardar() {

    $(".alta.datos #btn_guardar, .alta.datos #btn_guardarnvo").unbind();
    $(".alta.datos #btn_guardar, .alta.datos #btn_guardarnvo").click(function (e) {
        try {
            $(".adm_carga_datos_botones").append(img_loading + " guardando, un momento por favor ...");
            $(".alta.datos #btn_listado").hide();
            $(".alta.datos #btn_guardar").hide();
            $(".alta.datos #btn_guardarnvo").hide();
        } catch (e) {
        }
    });
}


function setContextMenu(tabla, clase, elemento_id, tabla_relacion, clase_relacion, elemento_id_relacion) {
    $.ajax({
        type: 'POST',
        url: "ajax/contextual/general.php",
        data: "clase=" + clase + "&clase=" + clase + "&elemento_id=" + elemento_id + "&tabla_relacion=" + tabla_relacion + "&clase_relacion=" + clase_relacion + "&elemento_id_relacion=" + elemento_id_relacion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#div_contextual').html(img_loading);
        },
        success: function (data) {

            $('#div_contextual').show();
            $('#div_contextual').html(data);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmb() {
    $(".img_btn_agregar_nuevo").each(function () {
        var elemento_id = $(this).attr('elemento_id');

        $('#' + elemento_id).change(function () {
            var elemento_val = $('#' + elemento_id).val();

            if (elemento_val != '') {
                $('#img_btn_editar_' + elemento_id).show();
            } else {
                $('#img_btn_editar_' + elemento_id).hide();
            }
        });
    });
}

function setClickCmbEditar() {
    $(".img_btn_editar").unbind();
    $(".img_btn_editar").click(function () {
        var elemento_id = $(this).attr('elemento_id');
        var clase_id = $(this).attr('clase_id');
        var prefijo = $(this).attr('prefijo');
        var elemento_val = $("#" + elemento_id).val();

        wopenModalCmb(clase_id + "/" + clase_id + "_alta", elemento_id + '=' + elemento_val, clase_id, prefijo, elemento_id, 850, 600);
    });
}

function setClickCmbAgregarNuevo() {
    $(".img_btn_agregar_nuevo").unbind();
    $(".img_btn_agregar_nuevo").click(function () {
        var elemento_id = $(this).attr('elemento_id');
        var clase_id = $(this).attr('clase_id');
        var prefijo = $(this).attr('prefijo');
        var elemento_val = $("#" + elemento_id).val();

        wopenModalCmb(clase_id + "/" + clase_id + "_alta", '', clase_id, prefijo, elemento_id, 850, 600);
    });
}

function wopenModalCmb(url, data, clase, prefijo, elemento, w, h) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/" + url + ".php",
        data: data + "&prefijo=" + prefijo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_' + elemento).html(img_loading);
            $('.div_modal_' + elemento).dialog({
                width: w,
                height: h,
                modal: true,
                title: 'Seleccione ' + clase,
                close: function () {
                    $('.div_modal_' + elemento).dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal_' + elemento).html(data);
            setClickModalBotonera(url, elemento);
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickModalBotonera(url, elemento) {
    $('.div_modal_' + elemento + ' .btn_cerrar').unbind();
    $('.div_modal_' + elemento + ' .btn_cerrar').click(function () {
        $('.div_modal_' + elemento).dialog('close');

        setInit();
    });

    $(".btn_guardar, .btn_guardarnvo").unbind();
    $(".btn_guardar, .btn_guardarnvo").click(function (e) {
        e.preventDefault();

        // se catpura el boton que activo el evento
        var boton = $(e.target);
        var presionado = '&' + encodeURI(boton.attr('name')) + '=' + encodeURI(boton.attr('value'));
        var form = boton.parents('form');


        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize() + presionado,
            dataType: "html",
            beforeSend: function (objeto) {

            },
            success: function (data) {
                var elemento_id = $('.div_modal_' + elemento + " .hdn_elemento_id").val();
                var clase_id = $('.div_modal_' + elemento + " .hdn_clase_id").val();
                var prefijo = $('.div_modal_' + elemento + " .hdn_prefijo").val();

                $('.div_modal_' + elemento).html(data);

                switch (boton.attr('name')) {
                    case "btn_guardar":
                        $('.div_modal_' + elemento).dialog('close');

                        refreshCmbDatos(elemento_id, clase_id + '/' + clase_id + '_cmb', prefijo);
                        break;
                    case "btn_guardarnvo":
                        refreshCmbDatos(elemento_id, clase_id + '/' + clase_id + '_cmb', prefijo);
                        break;
                }
                setClickModalBotonera(url, elemento);
                //setInit();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
        return false;
    });
}


function refreshCmbDatos(elem_id, url, prefijo) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + url + ".php",
        data: "prefijo=" + prefijo,
        dataType: "html",
        beforeSend: function (objeto) {
            $(' #dato_' + elem_id).html(img_loading);
        },
        success: function (data) {
            $(' #dato_' + elem_id).html(data);
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Trigger Ajax */
function setClickWopenModal() {
    $(".trigger.wopenModal").unbind();
    $(".trigger.wopenModal").click(function () {
        var archivo = $(this).attr('archivo');
        var ancho = $(this).attr('ancho');
        var alto = $(this).attr('alto');
        var contenedor = $(this).attr('contenedor');
        var data = ($(this).attr('elemento_id')) ? "id=" + $(this).attr('elemento_id') : "";
        var tipo = $(this).attr('tipo');
        var post = $(this).attr('post');
        var title = $(this).attr('title');

        wopenModal(archivo, data, contenedor, ancho, alto, tipo, post, title);
    });
}
function wopenModal(archivo, data, contenedor, w, h, tipo, post, title) {
    $.ajax({
        type: 'GET',
        url: archivo,
        data: data,
        dataType: "html",
        beforeSend: function (objeto) {
            $("." + contenedor).html(img_loading);
            $("." + contenedor).dialog({
                width: parseInt(w),
                height: parseInt(h),
                modal: true,
                title: title,
                close: function () {
                    //$("." + contenedor).dialog('destroy');
                    setTimeout(post, 100);
                }
            });
        },
        success: function (data) {
            $("." + contenedor).html(data);

            switch (tipo) {
                case 'formulario':
                    setInitAccionesFormulario(contenedor, post);
                    break;
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setInitAccionesFormulario(contenedor, post) {
///$("." + contenedor + " form").unbind();
//$("." + contenedor + " form").submit(function(){

    $(".btn_guardar, .btn_guardarnvo").unbind();
    $(".btn_guardar, .btn_guardarnvo").click(function (e) {

// para controlar el doble click, se oculta el boton despues de presionado
        $(this).hide();
        $(this).after(img_loading);

        e.preventDefault();

        // se catpura el boton que activo el evento
        var boton = $(e.target);
        var presionado = '&' + encodeURI(boton.attr('name')) + '=' + encodeURI(boton.attr('value'));
        var form = boton.parents('form');

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize() + presionado,
            dataType: "html",
            beforeSend: function (objeto) {
                $("." + contenedor).fadeOut();
                $("." + contenedor).fadeIn();
            },
            success: function (data) {
                $("." + contenedor).html(data);

                try {
                    if ($('.hdn_error').val() == 0) {
                        $("." + contenedor).dialog("close");
                    } else {
                        setInitAccionesFormulario(contenedor, post);
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
    // ESTO ESTA GENERANDO DOBLE SUBMIT !
    /*
     $("." + contenedor + " .btn_guardar").unbind();
     $("." + contenedor + " .btn_guardar").click(function(){
     try{
     $('.hdn_accion').val('guardar');
     $("." + contenedor + " form").submit();
     }catch(e){}
     });
     
     $("." + contenedor + " .btn_guardarnvo").unbind();
     $("." + contenedor + " .btn_guardarnvo").click(function(){
     try{
     $('.hdn_accion').val('btn_guardarnvo');
     $("." + contenedor + " form").submit();
     }catch(e){}
     });
     */

    $("." + contenedor + " .btn_cerrar").unbind();
    $("." + contenedor + " .btn_cerrar").click(function () {
        try {
            $("." + contenedor).dialog('close');
            setTimeout(post, 100);
        } catch (e) {
        }
    });
}

function setClickEliminar() {
    $(".trigger.eliminar").unbind();
    $(".trigger.eliminar").click(function () {
        var archivo = $(this).attr('archivo');
        var data = ($(this).attr('elemento_id')) ? "id=" + $(this).attr('elemento_id') : "";
        var post = $(this).attr('post');

        deleteRegistro(archivo, data, post);
    });
}
function deleteRegistro(archivo, data, post) {

    if (confirm("Desea Eliminar ?")) {
        $.ajax({
            type: 'POST',
            url: archivo,
            data: data,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (data) {
                setTimeout(post, 100);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    }
}

function setClickEstado() {
    $(".trigger.estado").unbind();
    $(".trigger.estado").click(function () {
        var archivo = $(this).attr('archivo');
        var data = ($(this).attr('elemento_id')) ? "id=" + $(this).attr('elemento_id') : "";
        var post = $(this).attr('post');

        cambiarEstadoRegistro(archivo, data, post);
    });
}
function cambiarEstadoRegistro(archivo, data, post) {

    $.ajax({
        type: 'POST',
        url: archivo,
        data: data,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            setTimeout(post, 100);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickPublicado() {
    $(".trigger.publicado").unbind();
    $(".trigger.publicado").click(function () {
        var archivo = $(this).attr('archivo');
        var data = ($(this).attr('elemento_id')) ? "id=" + $(this).attr('elemento_id') : "";
        var post = $(this).attr('post');

        cambiarEstadoPublicado(archivo, data, post);
    });
}
function cambiarEstadoPublicado(archivo, data, post) {

    $.ajax({
        type: 'POST',
        url: archivo,
        data: data,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            setTimeout(post, 100);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Dependencia de Combos */
function setClickComboPadre() {
    $(".combo_padre").unbind();
    $(".combo_padre").change(function () {
        var padre = $(this).attr('id');
        var padre_id = $(this).val();
        var padre_elemento_hijo = $(this).attr('elemento_id');
        var tipo = $(this).attr('tipo');

        refreshCmbHijos(padre, padre_id, padre_elemento_hijo, tipo);
    });
}

function refreshCmbHijos(padre, padre_id, padre_elemento_hijo, tipo) {
//$(".combo_hijo").unbind();
    $(".combo_hijo").each(function () {
        var combo_padre = $(this).attr('combo_padre');
        var hijo = $(this).attr('id');
        var hijo_elemento_id = $(this).attr('elemento_id');

        if (padre == combo_padre) {
            refreshCmbHijo(hijo, hijo_elemento_id, padre, padre_id, padre_elemento_hijo, tipo);
        }
    });
}
function refreshCmbHijo(hijo, hijo_elemento_id, padre, padre_id, padre_elemento_id, tipo) {
    $.ajax({
        type: 'POST',
        url: 'ajax/dependencia/refresh.php',
        data: 'hijo=' + hijo + '&hijo_elemento_id=' + hijo_elemento_id + '&padre=' + padre + '&padre_id=' + padre_id + '&padre_elemento_id=' + padre_elemento_id + '&tipo=' + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#dato_' + hijo).html(img_loading);
        },
        success: function (data) {
            $('#dato_' + hijo).html(data);

            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



/* --------------------------- */
function frn_submit() {

}

function eliminar(id) {
    $(".tr_eliminar").hide();
    $("#tr_eliminar_" + id).show();
}
function eliminar_conf(id, caso) {
    switch (caso) {
        case 0:
            $("#tr_eliminar_" + id).hide();
            break;
        case 1:
            location.href = "?elim=1&id=" + id;
            break;
    }
}

function eliminar_mov(id) {
    $(".tr_eliminar").hide();
    $("#tr_eliminar_mov_" + id).show();
}
function eliminar_mov_conf(did, mid, caso) {
    switch (caso) {
        case 0:
            $("#tr_eliminar_mov_" + mid).hide();
            break;
        case 1:
            location.href = "?emov=1&mid=" + mid + "&id=" + did;
            break;
    }
}

function wopen(url, name, w, h) {
// Fudge factors for window decoration space.
// In my tests these work well on all platforms & browsers.
    w += 32;
    h += 96;
    wleft = (screen.width - w) / 2;
    wtop = (screen.height - h) / 2;
    // IE5 and other old browsers might allow a window that is
    // partially offscreen or wider than the screen. Fix that.
    // (Newer browsers fix this for us, but let's be thorough.)
    if (wleft < 0) {
        w = screen.width;
        wleft = 0;
    }
    if (wtop < 0) {
        h = screen.height;
        wtop = 0;
    }
    var win = window.open(url, name,
            'width=' + w + ', height=' + h + ', ' +
            'left=' + wleft + ', top=' + wtop + ', ' +
            'location=no, menubar=no, ' +
            'status=no, toolbar=no, scrollbars=yes, resizable=no');
    // Just in case width and height are ignored
    win.resizeTo(w, h);
    // Just in case left and top are ignored
    win.moveTo(wleft, wtop);
    win.focus();
}

function vermi(id) {
    $('#tr_mi_' + id).toggle();
}

function conf(frase, url) {
    var answer = confirm(frase);
    if (answer) {
        window.location = url;
    }
}

function paginar(pag) {
    location.href = "?pag=" + pag;
}

function setClickMasInfoTabs() {
//$(function() {
    try {
        $(".masinfo .tabs").tabs();
    } catch (e) {
    }
//});	
}

function setClickModalTabs() {
//$(function() {
    try {
        $(".div_modal .tabs").tabs();
        $(".div_modal_modal .tabs").tabs();
    } catch (e) {
    }
//});	
}

function setClickVerMasInfo() {
    $(".vermasinfo").unbind();
    $(".vermasinfo").click(function () {
        var id = $(this).attr('identificador');
        var modulo = $(this).attr('modulo');

        var display = $("#tr_mi_" + id).css("display");

        if (display == 'none') {
            refreshMasInfoDiv(id, modulo);
        }
        $('#tr_mi_' + id).toggle();

    });
}

function refreshMasInfoDiv(id, modulo) {
    $.ajax({
        type: 'GET',
        url: modulo + '_adm_masinfo.php',
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#tr_mi_' + id + ' .masinfo').html(img_loading);
        },
        success: function (data) {
            $('#tr_mi_' + id + ' .masinfo').html(data);

            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setOverflowPreviewText() {
    $(".overflow-preview").each(function () {

        var texto = $(this).text();
        var len = texto.length;
        var len_max = 300;

        if (len > len_max) {

            $(this).css('height', '50');
            $(this).css('overflow', 'hidden');

            $(this).after('<label class="overflow-preview-ver-mas"><br />... ver mas</label>');
            $(".overflow-preview-ver-mas").css('cursor', 'pointer');
        }
    });
    $(".overflow-preview-ver-mas").click(function () {
        $(this).hide();
        $(".overflow-preview").css('height', 'auto');
    });
}

function number_format(number, decimals, dec_point, thousands_sep) {
// *     example: number_format(1234.56, 2, ',', ' ');
// *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? '.' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? ',' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

/* Help */
function setClickBtnVerAtributosModalHelp() {
    $('.datos.atributos .gen-atributos-link-help').unbind();
    $('.datos.atributos .gen-atributos-link-help').click(function (e) {
        var modulo = $(this).parents('.datos.atributos').attr('modulo');
        var atributo = $(this).parents('.datos.atributos').attr('atributo');
        verAtributosModalHelp(modulo, atributo);
    });
}

function verAtributosModalHelp(modulo, atributo) {
    $.ajax({
        type: 'GET',
        url: global_path_http + "admin/ajax/help/modal_atributos_help.php",
        data: 'modulo=' + modulo + '&atributo=' + atributo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: '500',
                modal: true,
                title: 'Configuracion de Ayuda',
                close: function () {
                    $('.div_modal').dialog('close');
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnGuardarAtributoHelp() {
    $('.datos.db_modal_help #btn_guardar_ayuda').unbind();
    $('.datos.db_modal_help #btn_guardar_ayuda').click(function (e) {
        var modulo = $(this).parents('.datos.db_modal_help').attr('modulo');
        var atributo = $(this).parents('.datos.db_modal_help').attr('atributo');
        setClickBtnGuardarAtributoHelpConfirmacion(modulo, atributo);
    });
}

function setClickBtnGuardarAtributoHelpConfirmacion(modulo, atributo) {
    var form = $('#form_db_modal_help');

    $.ajax({
        type: 'POST',
        url: global_path_http + "admin/ajax/help/set_atributos_help.php",
        data: form.serialize() + '&modulo=' + modulo + '&atributo=' + atributo,
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
                
                //$(this).show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $('.div_modal').dialog('close');
            }

            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* ----------------
 * DbTooltip
 * ----------------
 */
function setDbTooltip() {
    //return;
    // gen-help-icon
    $('.gen-help-icon').tooltip({
        position: {
            my: "center bottom-20",
            at: "center top",
            using: function (position, feedback) {
                $(this).css(position);
                $("<div>")
                        .addClass("gen-tooltip-arrow")
                        .addClass(feedback.vertical)
                        .addClass(feedback.horizontal)
                        .appendTo(this);
            }
        },
        content: function () {
            return $(this).prop('title');
        }
    });
}

/* ----------------
 * DbDialogMessaje 
 * ----------------
 */
function verDbDialogMessage(type, msg, comments, milis) {
    // -------------------------------------------------------------------------
    // se setean valores por default
    // -------------------------------------------------------------------------
    if(typeof milis === "undefined"){
        milis = 2500;
    }

    // -------------------------------------------------------------------------
    // se elimina el div, si existiese
    // -------------------------------------------------------------------------
    $('#db_dialog_message').remove();
    
    // -------------------------------------------------------------------------
    // se crea el div
    // -------------------------------------------------------------------------
    $('<div>', {
        id: 'db_dialog_message',
        class: '',
        title: ''
    }).appendTo('body');

    // -------------------------------------------------------------------------
    // se instancia el dialog
    // -------------------------------------------------------------------------
    $('#db_dialog_message').dialog({
        width: '450',
        height: 300,
        modal: true,
        //show: {effect: 'fade', duration: 1000},
        //hide: {effect: 'fade', duration: 200},
        open: function (event, ui) { 
            $(this).parents('.ui-dialog').find(".ui-dialog-titlebar").hide();
            $(this).parents('.ui-widget-content').css("background-color", "transparent");
            $(this).parents('.ui-widget-content').css("border", "none");
            
            $('.ui-widget-overlay').bind('click', function(){ 
                $("#db_dialog_message").dialog('close'); 
            }); 
        
            setTimeout(function () {
                $('#db_dialog_message').dialog('close');
            }, milis);
        }
    });
    
    // -------------------------------------------------------------------------
    // se prepara contenido del mensaje en html
    // -------------------------------------------------------------------------    
    var html = '';    
    html+= '<div class="db_dialog_message_icon"><img src="' + global_path_http + 'admin/imgs/icon_db_dialog_message_' + type + '.png"></div>';
    html+= '<div class="db_dialog_message_message">' + msg + '</div>';
    html+= '<div class="db_dialog_message_comments">' + comments + '</div>';
    
    // -------------------------------------------------------------------------
    // se carga contenido del mensaje en html
    // -------------------------------------------------------------------------
    $('#db_dialog_message').html(html);
    
}

function getDbCurrentPageName() {
    var index = window.location.href.lastIndexOf("/") + 1,
        filenameWithExtension = window.location.href.substr(index),
        filename = filenameWithExtension.split(".")[0];  

    return filename;                                     
}