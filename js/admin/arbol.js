// JavaScript Document

$().ready(function () {
    setInitArbol();
});

function setInitArbol() {
    
    setClickArbolAgregar();
    setClickArbolExpandirAll();
    setClickArbolColapsarAll();
    setClickArbolExpandirItem();    
    setClickArbolColapsarItem();    
    setClickArbolRefresh();

    setClickArbolModificar();
    setClickArbolEstado();
    setClickArbolAgregarHijo();
    setClickArbolEliminar();

    setSortArbolItem();
    setDragArbolItem();
    setDropArbolItem();

    setClickArbolToggle();

}

function setClickArbolExpandirAll(){
    $('.arbol-gestion .raiz .accion.expandir-all').unbind();
    $('.arbol-gestion .raiz .accion.expandir-all').click(function () {
        $('.arbol-gestion .hijos').fadeIn(500);
    });
}

function setClickArbolColapsarAll(){
    $('.arbol-gestion .raiz .accion.colapsar-all').unbind();
    $('.arbol-gestion .raiz .accion.colapsar-all').click(function () {
        $('.arbol-gestion .hijos').hide();
    });
}

function setClickArbolExpandirItem(){
    $('.arbol-gestion .accion.expandir-item').unbind();
    $('.arbol-gestion .accion.expandir-item').click(function () {
        var arbol_item_id = $(this).parents('.uno').attr('item_id');
        $('.arbol-gestion #div_item_hijos_' + arbol_item_id).find('.hijos').show();
        $('.arbol-gestion #div_item_hijos_' + arbol_item_id).fadeIn(500);
    });
}

function setClickArbolColapsarItem(){
    $('.arbol-gestion .accion.colapsar-item').unbind();
    $('.arbol-gestion .accion.colapsar-item').click(function () {
        var arbol_item_id = $(this).parents('.uno').attr('item_id');
        $('.arbol-gestion #div_item_hijos_' + arbol_item_id).find('.hijos').hide();
        $('.arbol-gestion #div_item_hijos_' + arbol_item_id).hide();
    });
}

function setClickArbolToggle(){
    $('.arbol-gestion .arbol-descripcion').unbind();
    $('.arbol-gestion .arbol-descripcion').click(function () {
        var arbol_item_id = $(this).parents('.uno').attr('item_id');
        $('.arbol-gestion #div_item_hijos_' + arbol_item_id).fadeToggle(300);
    });
}


function setClickArbolAgregar() {
    $('.arbol-gestion .raiz .accion.agregar').unbind();
    $('.arbol-gestion .raiz .accion.agregar').click(function () {

        var archivo = $(this).attr('archivo');
        var ancho = 800;
        var alto = 600;
        var contenedor = 'div_modal';

        var arbol_clase = $(this).parent().attr('arbol_clase');
        var arbol_tabla = $(this).parent().attr('arbol_tabla');
        var arbol_id = $(this).parent().attr('arbol_id');
        var item_clase = $(this).parent().attr('item_clase');
        var item_id = null;

        var data = (item_id) ? "id=" + item_id : "";
        var data = data + arbol_tabla + "_id=" + arbol_id;
        var data = data + "&prefijo=" + item_clase + "_";
        var tipo = 'formulario';
        var post = "refreshArbol('" + arbol_clase + "', " + arbol_id + ")";


        wopenModal(archivo, data, contenedor, ancho, alto, tipo, post);

    });
}

function setClickArbolRefresh() {
    $('.arbol-gestion .raiz .accion.refresh').unbind();
    $('.arbol-gestion .raiz .accion.refresh').click(function () {


        var arbol_clase = $(this).parent().attr('arbol_clase');
        var arbol_tabla = $(this).parent().attr('arbol_tabla');
        var arbol_id = $(this).parent().attr('arbol_id');
        var item_clase = $(this).parent().attr('item_clase');
        var item_id = null;

        refreshArbol(arbol_clase, arbol_id);
    });
}

function setClickArbolModificar() {
    $('.arbol-gestion .arbol-acciones .accion.modificar').unbind();
    $('.arbol-gestion .arbol-acciones .accion.modificar').click(function () {

        var archivo = $(this).attr('archivo');
        var ancho = 800;
        var alto = 600;
        var contenedor = 'div_modal';

        var arbol_clase = $(this).parent().attr('arbol_clase');
        var arbol_tabla = $(this).parent().attr('arbol_tabla');
        var arbol_id = $(this).parent().attr('arbol_id');
        var item_clase = $(this).parent().attr('item_clase');
        var item_id = $(this).parent().attr('item_id');

        var data = (item_id) ? "id=" + item_id : "";
        var data = data + '&' + arbol_tabla + "_id=" + arbol_id;
        var data = data + "&arbol_id=" + arbol_id + "&";
        var data = data + "&prefijo=" + item_clase + "_";
        var tipo = 'formulario';
        var post = "refreshArbolUno('" + arbol_clase + "', " + arbol_id + ", '" + item_clase + "', " + item_id + ")";


        wopenModal(archivo, data, contenedor, ancho, alto, tipo, post);

    });
}

function setClickArbolEstado() {
    $('.arbol-gestion .arbol-acciones .accion.estado').unbind();
    $('.arbol-gestion .arbol-acciones .accion.estado').click(function () {

        var archivo = $(this).attr('archivo');

        var arbol_clase = $(this).parent().attr('arbol_clase');
        var arbol_id = $(this).parent().attr('arbol_id');
        var item_clase = $(this).parent().attr('item_clase');
        var item_id = $(this).parent().attr('item_id');

        $.ajax({
            type: 'POST',
            url: 'ajax/arbol/set_estado.php',
            data: 'arbol_clase=' + arbol_clase + '&arbol_id=' + arbol_id + '&item_clase=' + item_clase + '&item_id=' + item_id,
            dataType: "html",
            beforeSend: function (objeto) {
                //$('#div_item_hijos_' + item_id).html(img_loading);
            },
            success: function (data) {
                //$('#div_item_' + item_id).html(data);

                //refreshArbol(arbol_clase, arbol_id);
                refreshArbolUno(arbol_clase, arbol_id, item_clase, item_id);
            },
            error: function (objeto, quepaso, otroobj) {
                alert("error " + objeto.status + ' ' + objeto.message);
            }
        });


    });
}

function setClickArbolAgregarHijo() {
    $('.arbol-gestion .arbol-acciones .accion.agregar-hijo').unbind();
    $('.arbol-gestion .arbol-acciones .accion.agregar-hijo').click(function () {
        var arbol_clase = $(this).parent().attr('arbol_clase');
        var arbol_id = $(this).parent().attr('arbol_id');
        var item_clase = $(this).parent().attr('item_clase');
        var item_id = $(this).parent().attr('item_id');

        $.ajax({
            type: 'POST',
            url: 'ajax/arbol/agregar_uno.php',
            data: 'arbol_clase=' + arbol_clase + '&arbol_id=' + arbol_id + '&item_clase=' + item_clase + '&item_id=' + item_id,
            dataType: "html",
            beforeSend: function (objeto) {
                $('#div_item_hijos_' + item_id).html(img_loading);
            },
            success: function (data) {
                //$('#div_item_' + item_id).html(data);

                $('.arbol-gestion #div_item_hijos_' + item_id).show();

                //refreshArbol(arbol_clase, arbol_id);
                refreshArbolUnoHijos(arbol_clase, arbol_id, item_clase, item_id);
            },
            error: function (objeto, quepaso, otroobj) {
                alert("error " + objeto.status + ' ' + objeto.message);
            }
        });
    });
}

function setClickArbolEliminar() {
    $('.arbol-gestion .arbol-acciones .accion.eliminar').unbind();
    $('.arbol-gestion .arbol-acciones .accion.eliminar').click(function () {
        if (confirm('Desea Eliminar el Item? Se eliminaran ademas todos los items y relaciones dependientes')) {
            var arbol_clase = $(this).parent().attr('arbol_clase');
            var arbol_id = $(this).parent().attr('arbol_id');
            var item_clase = $(this).parent().attr('item_clase');
            var item_id = $(this).parent().attr('item_id');

            $.ajax({
                type: 'POST',
                url: 'ajax/arbol/eliminar_uno.php',
                data: 'arbol_clase=' + arbol_clase + '&arbol_id=' + arbol_id + '&item_clase=' + item_clase + '&item_id=' + item_id,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('#div_item_hijos_' + item_id).html(img_loading);
                },
                success: function (data) {
                    //$('#div_item_' + item_id).html(data);

                    refreshArbol(arbol_clase, arbol_id);
                    //refreshArbolUnoHijos(arbol_clase, arbol_id, item_clase, item_id);
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("error " + objeto.status + ' ' + objeto.message);
                }
            });
        }
    });
}

function refreshArbol(arbol_clase, arbol_id) {
    // se regenera archivo XML
    regenerarArbolXML(arbol_clase, arbol_id);

    // se hace refresh de UNO
    $.ajax({
        type: 'POST',
        url: 'ajax/arbol/refresh_arbol.php',
        data: 'arbol_clase=' + arbol_clase + '&arbol_id=' + arbol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.arbol-gestion').html(img_loading);
        },
        success: function (data) {
            $('.arbol-gestion').html(data);

            setInitArbol();
        },
        error: function (objeto, quepaso, otroobj) {
            alert("error " + objeto.status + ' ' + objeto.message);
        }
    });

}

function refreshArbolUno(arbol_clase, arbol_id, item_clase, item_id) {
    // se regenera archivo XML
    regenerarArbolXML(arbol_clase, arbol_id);

    // se hace refresh de UNO
    $.ajax({
        type: 'POST',
        url: 'ajax/arbol/refresh_uno.php',
        data: 'arbol_clase=' + arbol_clase + '&arbol_id=' + arbol_id + '&item_clase=' + item_clase + '&item_id=' + item_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#div_item_' + item_id).html(img_loading);
        },
        success: function (data) {
            $('#div_item_' + item_id).html(data);

            setInitArbol();
        },
        error: function (objeto, quepaso, otroobj) {
            alert("error " + objeto.status + ' ' + objeto.message);
        }
    });

}

function refreshArbolUnoHijos(arbol_clase, arbol_id, item_clase, item_id) {
    // se regenera archivo XML
    regenerarArbolXML(arbol_clase, arbol_id);

    // se hace refresh de UNO
    $.ajax({
        type: 'POST',
        url: 'ajax/arbol/refresh_uno_hijos.php',
        data: 'arbol_clase=' + arbol_clase + '&arbol_id=' + arbol_id + '&item_clase=' + item_clase + '&item_id=' + item_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#div_item_hijos_' + item_id).html(img_loading);
        },
        success: function (data) {
            $('#div_item_hijos_' + item_id).html(data);

            setInitArbol();
        },
        error: function (objeto, quepaso, otroobj) {
            alert("error " + objeto.status + ' ' + objeto.message);
        }
    });

}


function regenerarArbolXML(clase, id) {
    $.ajax({
        type: 'POST',
        url: 'ajax/arbol/regenerar.php',
        data: 'clase=' + clase + '&id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setSortArbolItem() {
    $(".arbol-gestion ul").sortable({
        handle: '.ordenar',
        stop: function (event, ui) {
        },
        update: function (event, ui) {
            var arbol_clase = $(this).attr('arbol_clase');
            var arbol_id = $(this).attr('arbol_id');
            var item_clase = $(this).attr('item_clase');
            var orden = $(this).sortable("serialize") + '&item_clase=' + item_clase;

            $.post(
                    "ajax/arbol/ordenar_hijos.php",
                    orden,
                    function (data) { // success
                        regenerarArbolXML(arbol_clase, arbol_id);
                    }
            )
        }
    });

}
function setDragArbolItem() {
    // se vuelve a asignar el evento
    $(".arbol-gestion .uno .arbol-acciones .mover").draggable({
        revert: "valid"
    });
}
function setDropArbolItem() {
    // se quita el evento para despues reasignarse, es para evitar reasignacion
    //$(".arbol-gestion .uno").unbind();

    // se vuelve a asignar el evento
    $(".arbol-gestion .uno").droppable({
        accept: ".arbol-gestion .uno .arbol-acciones .mover",
        hoverClass: "ui-state-hover",
        drop: function (event, ui) {
            var arbol_clase = $(this).attr('arbol_clase');
            ;
            var arbol_id = $(this).attr('arbol_id');
            ;
            var item_clase = $(this).attr('item_clase');
            ;
            var item_id = ui.draggable.parent().attr('item_id');
            var padre_id = $(this).attr('item_id');

            setArbolItemNuevoPadre(arbol_clase, arbol_id, item_clase, item_id, padre_id);
        }
    });

    // se vuelve a asignar el evento
    $(".arbol-gestion .raiz").droppable({
        accept: ".arbol-gestion .uno .arbol-acciones .mover",
        hoverClass: "ui-state-hover",
        drop: function (event, ui) {
            var arbol_clase = $(this).attr('arbol_clase');
            ;
            var arbol_id = $(this).attr('arbol_id');
            ;
            var item_clase = $(this).attr('item_clase');
            ;
            var item_id = ui.draggable.parent().attr('item_id');
            var padre_id = $(this).attr('item_id');

            setArbolItemNuevoPadre(arbol_clase, arbol_id, item_clase, item_id, null);
        }
    });

}

function setArbolItemNuevoPadre(arbol_clase, arbol_id, item_clase, item_id, padre_id) {
    $.ajax({
        type: 'POST',
        url: 'ajax/arbol/set_nuevo_padre.php',
        data: 'arbol_clase=' + arbol_clase + '&item_clase=' + item_clase + '&item_id=' + item_id + '&padre_id=' + padre_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshArbol(arbol_clase, arbol_id);
            //refreshArbolUno(arbol_clase, arbol_id, item_clase, item_id);
            //refreshArbolUnoHijos(arbol_clase, arbol_id, item_clase, padre_id);
            //$('#item_' + item_id).html('');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
