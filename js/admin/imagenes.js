// JavaScript Document

$().ready(function () {
    setInitImagenes();
});

function setInitImagenes() {
    setClickSobreImagen();
    setClickBtnImagenModificar();
    setClickBtnImagenEliminar();
    setClickBtnImagenEstado();
    setClickBtnImagenPublicado();

    setSortImagenUno();
}

function setClickSobreImagen() {
    $(".imagenes .uno .imagen").each(function () {
        var identificador = $(this).parent().attr('identificador');
        var padre = $(".imagenes").attr('padre');
        var clase = $(".imagenes").attr('clase');
        var elemento_id = 'div_imagen_' + identificador;

        setRefreshImagenConAjax(elemento_id, identificador, padre, clase);
    });

    $("#div_imagen_nuevo").each(function () {
        var identificador = $(this).parent().attr('identificador');
        var padre = $(".imagenes").attr('padre');
        var clase = $(".imagenes").attr('clase');
        var elemento_id = 'div_imagen_nuevo';

        setNuevaImagenConAjax(elemento_id, identificador, padre, clase);
    });

    $(".div_imagen_nuevo_agrupado").each(function () {
        var identificador = $(this).parent().attr('identificador');
        var padre = $(".imagenes").attr('padre');
        var clase = $(".imagenes").attr('clase');

        var agrupacion_clase = $('.imagenes').attr('agrupacion_clase');
        var agrupacion_tabla = $('.imagenes').attr('agrupacion_tabla');
        var agrupacion_id = $(this).parents('.imagenes-agrupacion').attr('identificador');
        
        var elemento_id = 'div_imagen_nuevo_agrupado_' + agrupacion_id;

        setNuevaImagenAgrupadaConAjax(elemento_id, identificador, padre, clase, agrupacion_clase, agrupacion_tabla, agrupacion_id);
    });

}
function setRefreshImagenConAjax(elemento_id, identificador, padre, clase) {
    new AjaxUpload('#' + elemento_id, {
        action: 'ajax/imagenes/upload.php?identificador=' + identificador + '&padre=' + padre + '&clase=' + clase,
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                // extensiones permitidas
                alert('Error: Solo se permiten imagenes');
                // cancela upload
                return false;
            } else {
                //Cambio el texto del boton y lo deshabilito
                $('#div_grupo_imagen_' + identificador + " .loading").show();
            }
        },
        onComplete: function (file, response) {
            $('#div_grupo_imagen_' + identificador + " .loading").hide();
            $('#' + elemento_id).html(response);
        }
    });
}

function setNuevaImagenConAjax(elemento_id, identificador, padre, clase) {
    new AjaxUpload('#' + elemento_id, {
        action: 'ajax/imagenes/upload_new.php?identificador=' + identificador + '&padre=' + padre + '&clase=' + clase,
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                // extensiones permitidas
                alert('Error: Solo se permiten imagenes');
                // cancela upload
                return false;
            } else {

                $('#div_imagen_nuevo').children(".loading").show();
            }
        },
        onComplete: function (file, response) {
            $('#div_imagen_nuevo').children(".loading").hide();
            $('#' + elemento_id).parent().before(response);

            setInitImagenes();
        }
    });
}

function setNuevaImagenAgrupadaConAjax(elemento_id, identificador, padre, clase, agrupacion_clase, agrupacion_tabla, agrupacion_id) {
    new AjaxUpload('#' + elemento_id, {
        action: 'ajax/imagenes/upload_new_agrupado.php?identificador=' + identificador + '&padre=' + padre + '&clase=' + clase + '&agrupacion_clase=' + agrupacion_clase + '&agrupacion_tabla=' + agrupacion_tabla + '&agrupacion_id=' + agrupacion_id,
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                // extensiones permitidas
                alert('Error: Solo se permiten imagenes');
                // cancela upload
                return false;
            } else {

                $('#div_imagen_nuevo_agrupado').children(".loading").show();
            }
        },
        onComplete: function (file, response) {
            $('#div_imagen_nuevo_agrupado').children(".loading").hide();
            $('#' + elemento_id).parent().before(response);

            setInitImagenes();
        }
    });
}

function setClickBtnImagenModificar() {
    $('.boton.modificar').unbind();
    $('.boton.modificar').click(function () {

        var identificador = $(this).parent().parent().attr('identificador');
        var padre = $(".imagenes").attr('padre');
        var clase = $(".imagenes").attr('clase');
        var tabla = $(".imagenes").attr('tabla');

        var archivo = 'ajax/modulos/' + tabla + '_imagen/' + tabla + '_imagen_alta.php';
        var pantalla = '&arr_pantalla=array(\'' + tabla + '\', ' + padre + ', 0)';
        var parametros = $.param(
                {'arr_pantalla':
                            {
                                'prd_tipo_producto':
                                        {'valor': padre, 'modo': 0}
                            }
                }
        );
        pantalla = decodeURIComponent(parametros);

        var data = 'id=' + identificador + '&' + pantalla;

        var contenedor = 'div_modal';
        var tipo = 'formulario';
        var post = 'refreshImagenUno(' + identificador + ', "' + clase + '", "' + tabla + '")';
        /*	
         $.ajax({
         url:'ajax/modulos/prd_tipo_producto_imagen/prd_tipo_producto_imagen_alta.php',
         dataType:'html',
         type:'post',
         data:{'arr':'{"parametros":{"val1":3,"val2":87,"val3":"hola"}"varx":"123456"}',
         'n':'valorn1'},
         success:function(data){
         alert(data);
         }
         });		
         */
        wopenModal(archivo, data, contenedor, 800, 600, tipo, post);
    });
}

function refreshImagenUno(id, clase, tabla) {
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/' + tabla + '_imagen/' + tabla + '_imagen_uno_refresh.php',
        data: 'id=' + id + '&clase=' + clase,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('#div_item_hijos_' + item_id).html(img_loading);
        },
        success: function (data) {
            $('#div_grupo_imagen_' + id).html(data);
            setInitImagenes();
        },
        error: function (objeto, quepaso, otroobj) {
            alert("error " + objeto.status + ' ' + objeto.message);
        }
    });
}

function setClickBtnImagenEliminar() {
    $('.boton.eliminar').unbind();
    $('.boton.eliminar').click(function () {

        var identificador = $(this).parent().parent().attr('identificador');
        var clase = $(".imagenes").attr('clase');
        var tabla = $(".imagenes").attr('tabla');

        if (confirm("Seguro que desea eliminar?")) {
            $.ajax({
                type: 'POST',
                url: 'ajax/modulos/' + tabla + '_imagen/' + tabla + '_imagen_uno_eliminar.php',
                data: 'id=' + identificador + '&clase=' + clase,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#div_item_hijos_' + item_id).html(img_loading);
                },
                success: function (data) {
                    $('#div_grupo_imagen_' + identificador).html(data);
                    setInitImagenes();
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("error " + objeto.status + ' ' + objeto.message);
                }
            });
        }
    });
}

function setClickBtnImagenEstado() {
    $('.boton.estado').unbind();
    $('.boton.estado').click(function () {

        var identificador = $(this).parent().parent().attr('identificador');
        var clase = $(".imagenes").attr('clase');
        var tabla = $(".imagenes").attr('tabla');

        $.ajax({
            type: 'POST',
            url: 'ajax/modulos/' + tabla + '_imagen/' + tabla + '_imagen_uno_estado.php',
            data: 'id=' + identificador + '&clase=' + clase,
            dataType: "html",
            beforeSend: function (objeto) {
                //$('#div_item_hijos_' + item_id).html(img_loading);
            },
            success: function (data) {
                $('#div_grupo_imagen_' + identificador).html(data);
                setInitImagenes();
            },
            error: function (objeto, quepaso, otroobj) {
                alert("error " + objeto.status + ' ' + objeto.message);
            }
        });
    });
}

function setClickBtnImagenPublicado() {
    $('.boton.publicado').unbind();
    $('.boton.publicado').click(function () {

        var identificador = $(this).parent().parent().attr('identificador');
        var clase = $(".imagenes").attr('clase');
        var tabla = $(".imagenes").attr('tabla');

        $.ajax({
            type: 'POST',
            url: 'ajax/modulos/' + tabla + '_imagen/' + tabla + '_imagen_uno_publicado.php',
            data: 'id=' + identificador + '&clase=' + clase,
            dataType: "html",
            beforeSend: function (objeto) {
                //$('#div_item_hijos_' + item_id).html(img_loading);
            },
            success: function (data) {
                $('#div_grupo_imagen_' + identificador).html(data);
                setInitImagenes();
            },
            error: function (objeto, quepaso, otroobj) {
                alert("error " + objeto.status + ' ' + objeto.message);
            }
        });
    });
}

function setSortImagenUno() {
    //$( ".imagenes" ).sortable();
    $(".imagenes .bloque-imagenes").sortable({
        start: function (e, ui) {
        },
        sort: function (e, ui) {
        },
        change: function () {
        },
        stop: function (event, ui) {
        },
        update: function (event, ui) {
            var padre = $(this).parents('.imagenes').attr('padre');
            var clase = $(this).parents('.imagenes').attr('clase');
            var orden = $(this).sortable("serialize") + '&padre=' + padre + '&clase=' + clase;

            $.post(
                    "ajax/imagenes/ordenar.php",
                    orden,
                    function (data) { // success
                        //$(".imagenes").html(data);
                    }
            )
        }
    });


}