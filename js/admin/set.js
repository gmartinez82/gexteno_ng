// JavaScript Document

$(function ($) {
    setBuscadorSet();
    setBuscadorSetClickListCheckbox();
    setBuscadorSetClickArbolCheckbox();
    setBuscadorSetClickArbolAllCheckbox();

    setRelacionesImagenesBxSlider();
    setRelacionesImagenesLightbox();

    setRelacionesArchivosBxSlider();

    setClickRelacionesTitulo();
    setClickRelacionesPaginar();

    /* Vinculos */
    setClickVinculoTitulo();
    setBuscadorVinculo();
    setClickVinculoPaginar();
    setClickVinculoEstado();
});

function setBuscadorSet() {
    var timeout;

    $(".relaciones .relacion .buscador input").unbind();
    $(".relaciones .relacion .buscador input").keydown(function (e) {

        var clase = $(this).parent().parent().attr('clase');
        var padre = $(this).parent().parent().attr('padre');
        var padre_id = $("#hdn_id").val();
        var padre_clase = $(this).parent().parent().attr('padre_clase');
        var relacion = $(this).parent().parent().attr('relacion');
        var palabra = $("#" + clase + "_txt_buscar").val();


        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.keyCode === 13) {
            timeout = setTimeout('buscarSetResultados(1, "' + palabra + '", "' + clase + '", "' + padre + '", "' + padre_id + '", "' + padre_clase + '", "' + relacion + '")', 500);
            e.preventDefault();
        }
    });
}

function buscarSetResultados(pagina, palabra, clase, padre, padre_id, padre_clase, relacion) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + padre + "/refresh_" + clase + "s_set.php",
        data: "pagina=" + pagina + "&palabra=" + palabra + "&padre=" + padre + "&padre_id=" + padre_id + "&padre_clase=" + padre_clase + "&relacion=" + relacion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.relaciones .relacion.' + clase + ' .datos').html(img_loading);
        },
        success: function (data) {
            $('.relaciones .relacion.' + clase + ' .datos').html(data);

            setBuscadorSetClickListCheckbox();
            setBuscadorSetClickArbolCheckbox();
            setBuscadorSetClickArbolAllCheckbox();

            setClickRelacionesPaginar();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setBuscadorSetClickListCheckbox() {
    $(".relaciones .relacion .list input[type=checkbox]").unbind();
    $(".relaciones .relacion .list input[type=checkbox]").change(function () {

        var clase = $(this).parents('.relacion').attr('clase');
        var id = $(this).attr('identificador');
        var relacion_id = $(this).attr('relacion_id');
        var checked = $(this).attr('checked');
        var relacion = $(this).parents('.relacion').attr('relacion');
        var padre = $(this).parents('.relacion').attr('padre');
        var padre_id = $("#hdn_id").val();
        var padre_clase = $(this).parents('.relacion').attr('padre_clase');

        $.ajax({
            type: 'POST',
            url: "ajax/modulos/" + padre + "/agregar_" + clase + "_set.php",
            data: "id=" + id + "&checked=" + checked + "&padre=" + padre + "&padre_id=" + padre_id + "&padre_clase=" + padre_clase + "&relacion=" + relacion + "&relacion_id=" + relacion_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //$(this).parent().html(img_loading);	
            },
            success: function (data) {
                refreshSetUno(id, clase, padre, padre_id, padre_clase, relacion);

                setBuscadorSetClickListCheckbox();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

    });
}

function setBuscadorSetClickArbolCheckbox() {
    $(".relaciones .relacion .relacion-arbol .n1 input[type=checkbox]").unbind();
    $(".relaciones .relacion .relacion-arbol .n1 input[type=checkbox]").change(function () {

        var clase = $(this).parents('.relacion').attr('clase');
        var id = $(this).attr('identificador');
        var relacion_id = $(this).attr('relacion_id');
        var checked = $(this).attr('checked');
        var relacion = $(this).parents('.relacion').attr('relacion');
        var padre = $(this).parents('.relacion').attr('padre');
        var padre_id = $("#hdn_id").val();
        var padre_clase = $(this).parents('.relacion').attr('padre_clase');

        $.ajax({
            type: 'POST',
            url: "ajax/modulos/" + padre + "/agregar_" + clase + "_set.php",
            data: "id=" + id + "&checked=" + checked + "&padre=" + padre + "&padre_id=" + padre_id + "&padre_clase=" + padre_clase + "&relacion=" + relacion + "&relacion_id=" + relacion_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //$(this).parent().html(img_loading);	
            },
            success: function (data) {
                refreshSetUno(id, clase, padre, padre_id, padre_clase, relacion);

                setBuscadorSetClickListCheckbox();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

    });
}

function setBuscadorSetClickArbolAllCheckbox() {
    $(".relaciones .relacion .relacion-arbol .n0 input[type=checkbox].n0").unbind();
    $(".relaciones .relacion .relacion-arbol .n0 input[type=checkbox].n0").change(function () {

        if ($(this).is(":checked")) {
            $(this).parents('.uno.item.n0').find('.uno.item.n1 input[type=checkbox]').each(function () {
                if (!$(this).is(":checked")) {
                    $(this).prop('checked', true);
                    $(this).trigger('change');                    
                }
            });
        }else{
            $(this).parents('.uno.item.n0').find('.uno.item.n1 input[type=checkbox]').each(function () {
                if ($(this).is(":checked")) {
                    $(this).prop('checked', false);
                    $(this).trigger('change');
                }
            });
        }

    });
}

function refreshSetUno(id, clase, padre, padre_id, padre_clase, relacion) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + padre + "/refresh_" + clase + "_set.php",
        data: "id=" + id + "&padre=" + padre + "&padre_id=" + padre_id + "&padre_clase=" + padre_clase + "&relacion=" + relacion,
        dataType: "html",
        beforeSend: function (objeto) {
            //$("#uno_us_credencial_" + id).html(img_loading);	
        },
        success: function (data) {
            $("#uno_" + clase + "_" + id).html(data);

            setBuscadorSetClickListCheckbox();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setRelacionesImagenesBxSlider() {
    $('.alta.relaciones .imagenes .datos .slide').bxSlider({
        slideWidth: 100,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 3,
        slideMargin: 5
    });
    $('.alta.relaciones .imagenes .datos .bx-pager').css('top', '93px');
    $('.alta.relaciones .imagenes .datos .bx-pager').css('padding-top', '0px');

}
function setRelacionesImagenesLightbox() {
    $('.alta.relaciones .imagenes .datos .imagen a').lightBox({
        fixedNavigation: true,
        imageLoading: '../comps/lightbox/imgs/lightbox-ico-loading.gif',
        imageBtnPrev: '../comps/lightbox/imgs/lightbox-btn-prev.gif',
        imageBtnNext: '../comps/lightbox/imgs/lightbox-btn-next.gif',
        imageBtnClose: '../comps/lightbox/imgs/lightbox-btn-close.gif',
        imageBlank: '../comps/lightbox/imgs/lightbox-blank.gif',
    });
}

function setRelacionesArchivosBxSlider() {
    $('.alta.relaciones .archivos .slide').bxSlider({
        slideWidth: 50,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 3,
        slideMargin: 5
    });
    $('.alta.relaciones .archivos .datos .bx-pager').css('top', '53px');
    $('.alta.relaciones .archivos .datos .bx-pager').css('padding-top', '0px');
    $('.alta.relaciones .archivos .datos .bx-wrapper img').css('width', '25px');

}


function setClickRelacionesTitulo() {
    $(".alta.relaciones .relacion .titulo").unbind();
    $(".alta.relaciones .relacion .titulo").click(function () {
        var clase = $(this).parent().attr('clase');
        var padre = $(this).parent().attr('padre');
        var padre_id = $("#hdn_id").val();
        var padre_clase = $(this).parent().attr('padre_clase');
        var relacion = $(this).parent().attr('relacion');
        var palabra = $("#" + clase + "_txt_buscar").val();

        var display = $(this).parent().children('.datos').css('display');

        if (display == "none") {
            $(this).parent().children('.buscador').show();
            $(this).parent().children('.datos').show();
            buscarSetResultados(1, palabra, clase, padre, padre_id, padre_clase, relacion);
        } else {
            $(this).parent().children('.buscador').hide();
            $(this).parent().children('.datos').hide();
        }
    });
}
function setClickRelacionesPaginar() {
    $(".alta.relaciones .relacion .paginar").unbind();
    $(".alta.relaciones .relacion .paginar").click(function () {
        var pagina = $(this).attr('pagina');

        var clase = $(this).parents('.relacion').attr('clase');
        var padre = $(this).parents('.relacion').attr('padre');
        var padre_id = $("#hdn_id").val();
        var padre_clase = $(this).parents('.relacion').attr('padre_clase');
        var relacion = $(this).parents('.relacion').attr('relacion');
        var palabra = $("#" + clase + "_txt_buscar").val();

        buscarSetResultados(pagina, palabra, clase, padre, padre_id, padre_clase, relacion);
    });
}


/* Vinculos */

function setClickVinculoTitulo() {
    $(".alta.relaciones .vinculo .titulo").unbind();
    $(".alta.relaciones .vinculo .titulo").click(function () {
        var padre = $(this).parents('.vinculo').attr('padre');
        var hijo = $(this).parents('.vinculo').attr('hijo');
        var padre_id = $(this).parents('.vinculo').attr('padre_id');
        var palabra = '';

        var display = $(this).parents('.vinculo').children('.datos').css('display');

        if (display == "none") {
            $(this).parents('.vinculo').children('.buscador').show();
            $(this).parents('.vinculo').children('.datos').show();
            buscarVinculoResultados(1, palabra, padre, hijo, padre_id);
        } else {
            $(this).parents('.vinculo').children('.buscador').hide();
            $(this).parents('.vinculo').children('.datos').hide();
        }
    });
}

function buscarVinculoResultados(pagina, palabra, padre, hijo, padre_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + padre + "/refresh_" + hijo + "s_vinculo.php",
        data: "pagina=" + pagina + "&palabra=" + palabra + "&padre=" + padre + "&padre_id=" + padre_id + "&hijo=" + hijo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.relaciones .vinculo.' + hijo + ' .datos').html(img_loading);
        },
        success: function (data) {
            $('.relaciones .vinculo.' + hijo + ' .datos').html(data);

            setClickVinculoPaginar();
            setClickVinculoEstado();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setBuscadorVinculo() {
    var timeout;

    $(".relaciones .vinculo .buscador input").unbind();
    $(".relaciones .vinculo .buscador input").keyup(function () {

        var padre = $(this).parents('.vinculo').attr('padre');
        var hijo = $(this).parents('.vinculo').attr('hijo');
        var padre_id = $(this).parents('.vinculo').attr('padre_id');
        var palabra = $("#" + hijo + "_txt_buscar").val();


        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        timeout = setTimeout('buscarVinculoResultados(1, "' + palabra + '", "' + padre + '", "' + hijo + '", "' + padre_id + '")', 500);
    });
}

function setClickVinculoPaginar() {
    $(".alta.relaciones .vinculo .paginar").unbind();
    $(".alta.relaciones .vinculo .paginar").click(function () {
        var pagina = $(this).attr('pagina');

        var padre = $(this).parents('.vinculo').attr('padre');
        var hijo = $(this).parents('.vinculo').attr('hijo');
        var padre_id = $(this).parents('.vinculo').attr('padre_id');
        var palabra = $("#" + hijo + "_txt_buscar").val();

        buscarVinculoResultados(pagina, palabra, padre, hijo, padre_id);
    });
}

function refreshVinculoUno(id, padre, hijo, padre_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + padre + "/refresh_" + hijo + "_vinculo.php",
        data: "id=" + id + "&padre=" + padre + "&padre_id=" + padre_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$("#uno_" + hijo + "_" + id).html(img_loading);
        },
        success: function (data) {
            $("#uno_" + hijo + "_" + id).html(data);
            setClickVinculoEstado();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVinculoEstado() {
    $(".alta.relaciones .vinculo .uno .boton.estado").unbind();
    $(".alta.relaciones .vinculo .uno .boton.estado").click(function () {
        var padre = $(this).parents('.vinculo').attr('padre');
        var padre_id = $(this).parents('.vinculo').attr('padre_id');
        var hijo = $(this).parents('.vinculo').attr('hijo');
        var id = $(this).parents('.uno').attr('identificador');

        setVinculoEstado(padre, hijo, padre_id, id);
    });
}

function setVinculoEstado(padre, hijo, padre_id, id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + hijo + "/set_" + hijo + "_estado.php",
        data: "id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$("#uno_" + hijo + "_" + id).html(img_loading);
        },
        success: function (data) {
            refreshVinculoUno(id, padre, hijo, padre_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
