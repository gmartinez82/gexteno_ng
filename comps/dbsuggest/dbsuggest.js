// JavaScript Document
var db_suggest_resultados_activo = false;
$(function ($) {
    setInitDbSuggest();
});

function setInitDbSuggest() {
    setInitDbSuggestEventos();
    setInitDbSuggestBoton();

    dbsuggestControlBotonEnter();
}

function setInitDbSuggestEventos() {
    var dbsuggest_timeout;

    $(".dbsuggest").unbind();
    $(".dbsuggest").keyup(function (e) {
        if (dbsuggest_timeout) {
            clearTimeout(dbsuggest_timeout);
            dbsuggest_timeout = null;
        }

        var archivo = $(this).parents('.dbsuggest-contenedor').attr('archivo');
        var buscar = $(this).val();
        var elemento_id = $(this).attr('id');
        var post = $(this).parents('.dbsuggest-contenedor').attr('post');
        var contenedor = $(this).parents('.dbsuggest-contenedor').attr('contenedor');


        var $listItems = $('#' + contenedor + ' li');
        var key = e.keyCode,
                $selected = $listItems.filter('.selected'),
                $current;


        //alert(e.keyCode);
        switch (e.keyCode) {

            case 13: // enter
                // se controla de que el dbsuggest sea seleccionable
                var seleccionable = $("#" + elemento_id).parents('.dbsuggest-contenedor').attr('seleccionable');
                if (seleccionable != "seleccionable")
                    return;

                // se setea el value
                var value = $selected.attr("value");
                $("#" + elemento_id + "_id").val(value).trigger('change');


                if ($("#" + elemento_id + "_id").val() == '') {
                    //return true;
                } else {
                    // se setea el value
                    var descripcion = $selected.attr("descripcion");
                    $("#" + elemento_id).val(descripcion);

                    // se agrega css que indica que el elemento macheo
                    $("#" + elemento_id).addClass('seleccionado-ok');
                }

                dbsuggestOcultarResultados(contenedor);
                $(this).blur();
                //e.stopPropagation();
                break;

            case 27: // escape
                dbsuggestOcultarResultados(contenedor);
                return;
                break;
            case 38: // flecha arriba
                if (!$selected.length || $selected.is(':first-child')) {
                    $current = $listItems.last();
                } else {
                    $current = $selected.prev();
                }

                break;
            case 40: // flecha abajo
                dbsuggestMostrarResultados(contenedor);
                if (!$selected.length || $selected.is(':last-child')) {
                    $current = $listItems.eq(0);
                } else {
                    $current = $selected.next();
                }

                break;

            default:
                // Si ex externo no oculta antes de buscar
                var externo = $(this).parents(".externo");
                if (externo.length == 0) {
                    dbsuggestOcultarResultados(contenedor);
                }

                if (buscar.length > 0) {
                    // se muestra el loading antes de disparar la consulta
                    $(this).addClass('loading');

                    // se abre el div de resultados
                    dbsuggest_timeout = setTimeout(function(){
                        dbsuggestBuscarPalabra(buscar, contenedor, elemento_id, archivo, post, 1);
                    }, 1000);

                    // se quita css que indica que el elemento macheo
                    $("#" + elemento_id).removeClass('seleccionado-ok');
                    $("#" + elemento_id + "_id").val('').trigger('change');
                    return;
                } else {
                    // se quita css que indica que el elemento macheo
                    $("#" + elemento_id).removeClass('seleccionado-ok');
                    $("#" + elemento_id + "_id").val('').trigger('change');
                    $("#" + elemento_id).removeClass('loading');
                }

        }
        try {
            $listItems.removeClass('selected');
            $current.addClass('selected');
        } catch (e) {
        }
    });

    $(".dbsuggest").focus(function () {
        $(this).select();
    });

    $(".dbsuggest").blur(function () {
        var elemento_id = $(this).attr('id');
        var contenedor = $(this).parents('.dbsuggest-contenedor').attr('contenedor');

        var externo = $(this).parents(".externo");
        if (externo.length == 0) {
            setTimeout(function () {
                dbsuggestOcultarResultados(contenedor)
            }, 200);
        }
    });
}

function dbsuggestControlBotonEnter() {
    $('form').keypress(function (e) {
        if (e == 13) {
            if (db_suggest_resultados_activo) {
                return false;
            }
        }
    });
    $('input').keypress(function (e) {
        if (e.which == 13) {
            if (db_suggest_resultados_activo) {
                return false;
            }
        }
    });
}

function setInitDbSuggestBoton() {
    $(".dbsuggest-contenedor .dbsuggest-boton").unbind();
    $(".dbsuggest-contenedor .dbsuggest-boton").click(function (e) {
        var archivo = $(this).parents('.dbsuggest-contenedor').attr('archivo');
        var buscar = $(this).parents('.dbsuggest-contenedor').children('input').val();
        var elemento_id = $(this).parents('.dbsuggest-contenedor').children('input').attr('id');
        var post = $(this).parents('.dbsuggest-contenedor').attr('post');
        var contenedor = $(this).parents('.dbsuggest-contenedor').attr('contenedor');

        setTimeout(function () {
            dbsuggestBuscarPalabra(buscar, contenedor, elemento_id, archivo, post, 1)
        }, 200);

        $(this).prev().focus();
    });
}

function setInitDbSuggestResultado(contenedor, elemento_id) {

    // se setean eventos de mouseenter y mouseleave en div de resultados
    $('#' + contenedor).mouseenter(function () {
        $('#' + contenedor).mouseleave(function () {
            //dbsuggestOcultarResultados(elemento_id);
        });
    });

    // se setea el evento mouseneter cuando el mouse ENTRA arriba de uno de resultado
    $('#' + contenedor + ' .uno').mouseenter(function () {
        $(this).addClass('selected');
    });

    // se setea el evento mouseneter cuando el mouse SALE arriba de uno de resultado
    $('#' + contenedor + ' .uno').mouseleave(function () {
        $(this).removeClass('selected');
    });

    // se setea evento cuando se presiona sobre uno de resultado
    $('#' + contenedor + ' .uno').click(function () {
        // se controla de que el dbsuggest sea seleccionable
        var seleccionable = $("#" + elemento_id).parents('.dbsuggest-contenedor').attr('seleccionable');
        var seleccionable = $("#" + elemento_id).parent().attr('seleccionable');


        // es DIV externo
        if ($("#" + elemento_id).parents(".externo").length != 0) {
            var buscador = $("#" + elemento_id).parents(".externo").attr('buscador');
            var seleccionable = $("#" + buscador).attr('seleccionable');
        }
        // FIN es DIV externo

        if (seleccionable != "seleccionable")
            return;

        var value = $(this).attr('value');

        $("#" + elemento_id + "_id").val(value).trigger('change');

        // se setea el value
        var descripcion = $(this).attr("descripcion");
        $("#" + elemento_id).val(descripcion);

        // se agrega css que indica que el elemento macheo
        $("#" + elemento_id).addClass('seleccionado-ok');

        dbsuggestOcultarResultados(contenedor);
        $(this).blur();
        return;

    });
    
    setInitDbSuggestBotonVerMas();


}


function dbsuggestBuscarPalabra(buscar, contenedor, elemento_id, archivo, post, pag) {
    $.ajax({
        type: 'POST',
        url: archivo,
        data: "buscar=" + buscar + "&pag=" + pag,
        dataType: "html",
        beforeSend: function (objeto) {
            dbsuggestMostrarResultados(contenedor);
            if(pag == 1){
                $('#' + contenedor).html(img_loading);
            }else{
                $('#' + contenedor).append(img_loading);                
            }
        },
        success: function (data) {
            if(pag == 1){
                $('#' + contenedor).html(data);
            }else{
                $('#' + contenedor).find("img[src='imgs/loading.gif']").hide();      
                $('#' + contenedor).append(data);                
            }

            setInitDbSuggestResultado(contenedor, elemento_id);

            // se ejecuta funcion indicada despues de cargar resultados
            setTimeout(post, 500);

            // se oculta el loading
            $("#" + elemento_id).removeClass('loading');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function dbsuggestMostrarResultados(contenedor) {
    $('#' + contenedor).show();
    db_suggest_resultados_activo = true;
}
function dbsuggestOcultarResultados(contenedor) {
    $('#' + contenedor).hide();
    db_suggest_resultados_activo = false;
}

function setInitDbSuggestBotonVerMas(){
    // se setea evento de click en boton ver mas
    $(".div_dbsuggest_resultados .dbsuggest-boton-ver-mas").mouseenter(function (e) {
        
        var div_contenedor = $(this).parents('.div_dbsuggest_resultados').prevAll('.dbsuggest-contenedor');
        
        var archivo = div_contenedor.attr('archivo');
        var buscar = div_contenedor.children('.dbsuggest.textbox').val();
        var elemento_id = div_contenedor.children('input').attr('id');
        var post = div_contenedor.attr('post');
        var contenedor = div_contenedor.attr('contenedor');
        
        var pag_actual = $(this).attr('pag_actual');
        var pag_siguiente = $(this).attr('pag_siguiente');
        
        // se oculta el paginador que acciono la accion
        $('.dbsuggest-boton-ver-mas.pag-' + pag_actual).hide();
        
        
        dbsuggestBuscarPalabra(buscar, contenedor, elemento_id, archivo, post, pag_siguiente);
        dbsuggestMostrarResultados(contenedor);
        //e.preventDefault();
    });
}