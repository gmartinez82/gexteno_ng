// JavaScript Document
$(function ($) {
    setInitAdm();
});

function setInitAdm() {
    
    // general
    setKeyupAdmBuscador();
    setClickAdmBuscadorBtnBuscar();
    setClickBtnAdmBuscador();
    setClickBtnQuitarFiltro();
    setClickAdmRefreshAll();
    setSubmitAdmBuscadorModal();
    setClickAdmActivosEliminar();
    setClickAdmOrdenar();
    setClickAdmPaginar();
    setSpinnerPaginas();

    // acciones
    setClickAdmEstado();
    setClickAdmPublicado();
    setClickAdmDestacado();
    setClickAdmPrincipal();

    setClickAdmEliminarConfirmar();

    setInitDbContext();

    // ficha
    setClickAdmVerFicha();

    // duplicar
    setClickAdmDuplicar();

    // cambio de estados
    setClickAdmCambiarEstado();
    setClickAdmCambiarEstadoConfirmar();

}

/* Set Spinner Cantidad Registros */
function setSpinnerPaginas() {
    var timeout;
    
    var modulo = $('.div_listado_buscador').attr('modulo');
    $("#txt_cantidad_paginas").spinner({
        min: 1,
        stop: function (event, ui) {
            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
            }

            timeout = setTimeout(function(){
                setAdmCantidadRegistros(modulo);
            }, 1000);
        }
    });
    $("#txt_cantidad_paginas").css('border', 'none');
    $("#txt_cantidad_paginas").css('padding', '5px');
    $("#txt_cantidad_paginas").css('font-size', '11px');
}

/* Set Cantidad Registros */
function setAdmCantidadRegistros(modulo) {
    var cantidad = $("#txt_cantidad_paginas").val();
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_cantidad_registros.php",
        data: "cantidad=" + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmAll(modulo, 1);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/* Keyup Buscador */
function setKeyupAdmBuscador() {
    var timeout;

    $("#txt_buscador").unbind();
    $("#txt_buscador").keyup(function (e) {
        var txt_buscador = $(this).val();
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.keyCode === 13) {
            if (txt_buscador.length >= 2) {
                timeout = setTimeout('setAdmBuscadorTop("' + modulo + '")', 500);
            } else if (txt_buscador.length == 0) {
                timeout = setTimeout('setAdmBuscadorTop("' + modulo + '")', 500);
            }
        }
    });
    $("#txt_buscador").click(function () {
        $(this).select();
    });
}
function setClickAdmBuscadorBtnBuscar(){
    $("#btn_buscar").unbind();
    $("#btn_buscar").click(function (e){
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');
        
        setAdmBuscadorTop(modulo);
    });
}
function setClickBtnAdmBuscador() {
    $(".txt_buscador_boton").unbind();
    $(".txt_buscador_boton").click(function (e) {
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');
        setAdmBuscadorTop(modulo);
    });
}

function setAdmBuscadorTop(modulo) {
    var action = $('#form_buscador_top').attr('action');

    $.ajax({
        type: 'POST',
        url: action,
        data: $('#form_buscador_top').serialize(),
        dataType: "html",
        beforeSend: function (objeto) {

        },
        success: function (data) {
            refreshAdmAll(modulo, 1);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Quitar Filtro */
function setClickBtnQuitarFiltro(){
    $('.quitar-filtro').unbind();
    $('.quitar-filtro').click(function(){
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');
        
        $(this).parents('.col').find('select').val('');
        $(this).parents('.col').find('input').val('');
        
        setAdmBuscadorTop(modulo);
    });    
}

/* Buscador Modal */
function setSubmitAdmBuscadorModal() {
    $("#form_buscador").unbind();
    $("#form_buscador").submit(function () {
        var boton = $("input[type=submit][clicked=true]");
        var presionado = '&' + encodeURI('presionado') + '=' + encodeURI(boton.attr('id'));

        var modulo = $(this).attr('modulo');
        var modal = $(this).parents('.div_modal');

        $.ajax({
            type: 'POST',
            url: "ajax/modulos/" + modulo + "/set_" + modulo + "_buscador.php",
            data: $(this).serialize() + presionado,
            dataType: "html",
            beforeSend: function (objeto) {
                modal.dialog('close');
                $("#txt_buscador").val('');
            },
            success: function (data) {
                refreshAdmAll(modulo, 1);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

        return false;
    });

    $("#form_buscador input[type=submit]").click(function () {
        $("#form_buscador input[type=submit]", $(this).parents("form")).removeAttr("clicked");
        $(this).attr("clicked", "true");
    });
}

/* Filtros Activos Eliminar */
function setClickAdmActivosEliminar() {
    $(".div_listado_datos .filtros .filtro-eliminar").unbind();
    $(".div_listado_datos .filtros .filtro-eliminar").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var href = $(this).attr('href');

        $.ajax({
            type: 'POST',
            url: "ajax/modulos/" + modulo + "/set_" + modulo + "_activos_eliminar.php",
            data: href,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (data) {
                refreshAdmAll(modulo, 1);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
        return false;
    });
}

/* Listado Ordenar */
function setClickAdmOrdenar() {
    $(".div_listado_datos .ordenar").unbind();
    $(".div_listado_datos .ordenar").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var href = $(this).attr('href');

        $.ajax({
            type: 'POST',
            url: "ajax/modulos/" + modulo + "/set_" + modulo + "_ordenar.php",
            data: href,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (data) {
                refreshAdmAll(modulo, 1);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
        return false;
    });
}


/* Paginador */
function setClickAdmPaginar() {
    $(".div_listado_datos .paginar").unbind();
    $(".div_listado_datos .paginar").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var pagina = $(this).attr('pagina');

        refreshAdmAll(modulo, pagina);
    });
}


/* Click Boton Refresh All  */
function setClickAdmRefreshAll() {
    $(".div_listado_buscador .boton.refresh-all").unbind();
    $(".div_listado_buscador .boton.refresh-all").click(function () {
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');
        var pagina = $("#hdn_pag_actual").val();

        refreshAdmAll(modulo, pagina);
    });
}


/* Refresh All */
function refreshAdmAll(modulo, pagina) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/" + modulo + "/refresh_" + modulo + "_datos.php",
        data: "pag=" + pagina,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_listado_datos').css("opacity", "0.4");
            $('.div_listado_datos').before(html_loading_img_data_ajax);
        },
        success: function (data) {
            $('#html_loading_img_data_ajax').remove();
            $('.div_listado_datos').css("opacity", "1");
            $('.div_listado_datos').html(data);

            setResaltarPalabrasBuscadas();

            setInit();
            setInitAdm();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Refresh Uno */
function refreshAdmUno(modulo, id) {
    var cmb_filtro_tipo_visualizacion = $("#cmb_filtro_tipo_visualizacion").val();

    if (cmb_filtro_tipo_visualizacion === 'GRID') {
        $.ajax({
            type: 'GET',
            url: "ajax/modulos/" + modulo + "/refresh_" + modulo + "_uno_grid.php",
            data: "id=" + id,
            dataType: "html",
            beforeSend: function (objeto) {
                $('#div_' + modulo + '_uno_' + id).css("opacity", "0.4");
                $('#div_' + modulo + '_uno_' + id).append(html_loading_img_row_ajax);
            },
            success: function (data) {
                $('#div_' + modulo + '_uno_' + id).css("opacity", "1");
                $('#div_' + modulo + '_uno_' + id).html(data);

                setInit();
                setInitAdm();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

    } else {
        $.ajax({
            type: 'GET',
            url: "ajax/modulos/" + modulo + "/refresh_" + modulo + "_uno.php",
            data: "id=" + id,
            dataType: "html",
            beforeSend: function (objeto) {
                $('#tr_' + modulo + '_uno_' + id).css("opacity", "0.4");
                $('#tr_' + modulo + '_uno_' + id).append(html_loading_img_row_ajax);
            },
            success: function (data) {
                $('#tr_' + modulo + '_uno_' + id).css("opacity", "1");
                $('#tr_' + modulo + '_uno_' + id).html(data);

                setInit();
                setInitAdm();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

    }
}

/* Click Boton Estado  */
function setClickAdmEstado() {
    $(".div_listado_datos .adm_botones_accion.estado").unbind();
    $(".div_listado_datos .adm_botones_accion.estado").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var id = $(this).parents('.uno').attr('identificador');
        setAdmEstado(modulo, id);
    });
}

/* Set Estado */
function setAdmEstado(modulo, id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_estado.php",
        data: "id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno(modulo, id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Click Boton Publicado  */
function setClickAdmPublicado() {
    $(".div_listado_datos .adm_botones_accion.publicado").unbind();
    $(".div_listado_datos .adm_botones_accion.publicado").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var id = $(this).parents('.uno').attr('identificador');
        setAdmPublicado(modulo, id);
    });
}

/* Set Publicado */
function setAdmPublicado(modulo, id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_publicado.php",
        data: "id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno(modulo, id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Click Boton Destacado  */
function setClickAdmDestacado() {
    $(".div_listado_datos .adm_botones_accion.destacado").unbind();
    $(".div_listado_datos .adm_botones_accion.destacado").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var id = $(this).parents('.uno').attr('identificador');
        setAdmDestacado(modulo, id);
    });
}

/* Set Destacado */
function setAdmDestacado(modulo, id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_destacado.php",
        data: "id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno(modulo, id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Click Boton Principal  */
function setClickAdmPrincipal() {
    $(".div_listado_datos .adm_botones_accion.principal").unbind();
    $(".div_listado_datos .adm_botones_accion.principal").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var id = $(this).parents('.uno').attr('identificador');
        setAdmPrincipal(modulo, id);
    });
}

/* Set Principal */
function setAdmPrincipal(modulo, id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_principal.php",
        data: "id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno(modulo, id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Click Boton Eliminar  */
function setClickAdmEliminarConfirmar() {
    $(".div_listado_datos .btn_mensaje_aceptar").unbind();
    $(".div_listado_datos .btn_mensaje_aceptar").click(function () {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var id = $(this).parents('.uno').attr('identificador');
        eliminarAdmUno(modulo, id);

        return false;
    });
}

/* Set Eliminar Registro */
function eliminarAdmUno(modulo, id) {
    var pagina = $("#hdn_pag_actual").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/" + modulo + "_eliminar.php",
        data: "id=" + id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmAll(modulo, pagina);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setResaltarPalabrasBuscadas() {
    return;
    var palabras = $("#txt_buscador").val();
    if (palabras.length && palabras != '') {
        var arr_palabras = palabras.split(" ");
        arr_palabras.forEach(
                function (palabra, indice, array) {
                    if (palabra != '') {
                        var elem = $(".div_listado_datos .info-insumo"); // destino
                        if (elem.length) {
                            var regex = new RegExp("(<[^>]*>)|(" + palabra.replace(/([-.*+?^${}()|[\]\/\\])/g, "\\$1") + ')', 'ig');
                            var nuevoHtml = elem.html(elem.html().replace(regex, function (a, b, c) {
                                return (a.charAt(0) == "<") ? a : "<span class=\"gen-resaltar-palabra-buscada\">" + c + "</span>";
                            }));
                        }
                    }
                });
    }
}

/*
 Ver Ficha del Insumo
 */
function setClickAdmVerFicha() {
    $('.div_listado_datos .adm_botones_accion.adm-ver-ficha').unbind();
    $('.div_listado_datos .adm_botones_accion.adm-ver-ficha').click(function (e) {
        var modulo = $(this).parents('.div_listado_datos').attr('modulo');
        var id = $(this).parents('.uno').attr('identificador');
        verModalFichaAdm(modulo, id);
    });
}

function verModalFichaAdm(modulo, id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/" + modulo + "/modal_" + modulo + "_ficha.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 550,
                modal: true,
                title: 'Ficha',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno(modulo, id);

            $('.div_modal').html(data);

            setInitAdm();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAdmDuplicar() {
    $('.div_listado_datos .db_context_content .uno.duplicar').unbind();
    $('.div_listado_datos .db_context_content .uno.duplicar').click(function (e) {
        var modulo = $(this).parents('.datos').attr('modulo');
        var id = $(this).parents('.datos').attr('identificador');

        if (confirm('Duplicar?')) {
            setDuplicarAdmUno(modulo, id);
        }
    });
}
function setDuplicarAdmUno(modulo, id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_duplicar.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            //refreshAdmUno(modulo, id);
        },
        success: function (data) {
            refreshAdmAll(modulo, 1);

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAdmCambiarEstado() {
    $('.div_listado_datos .db_context_content .uno.cambiar-estado').unbind();
    $('.div_listado_datos .db_context_content .uno.cambiar-estado').click(function (e) {
        var modulo_estado = $(this).attr('modulo_estado');
        var modulo = $(this).parents('.datos').attr('modulo');
        var id = $(this).parents('.datos').attr('identificador');

        verModalAdmCambiarEstado(modulo, modulo_estado, id);
    });
}
function verModalAdmCambiarEstado(modulo, modulo_estado, id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/" + modulo + "/modal_" + modulo + "_cambiar_estado_" + modulo_estado + ".php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '65%',
                height: 500,
                modal: true,
                title: 'Cambio de Estado',
                close: function () {
                    refreshAdmUno(modulo, id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitAdm();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAdmCambiarEstadoConfirmar() {
    $('.div_modal #form_datos_adm_modificar_estado #btn_modificar_estado').unbind();
    $('.div_modal #form_datos_adm_modificar_estado #btn_modificar_estado').click(function (e) {
        var modulo_estado = $(this).parents('.datos').attr('modulo_estado');
        var modulo = $(this).parents('.datos').attr('modulo');
        var id = $(this).parents('.datos').attr('identificador');

        setAdmCambiarEstadoConfirmar(modulo, modulo_estado, id);
    });
}
function setAdmCambiarEstadoConfirmar(modulo, modulo_estado, id) {
    var form = $('#form_datos_adm_modificar_estado');

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/" + modulo + "/set_" + modulo + "_cambiar_estado_" + modulo_estado + ".php",
        data: form.serialize() + '&id=' + id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
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

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}