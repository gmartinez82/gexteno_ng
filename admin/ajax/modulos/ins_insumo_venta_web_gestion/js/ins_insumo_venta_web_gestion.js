// archivo js del modulo 'ins_insumo'
$(function ($) {
    setInitInsInsumoVentaWebGestion();
});

function setInitInsInsumoVentaWebGestion() {

    // general
    setClickChkInsumoUno();
    setClickChkInsumosAll();
    
    // venta online
    setClickVonHabilitar();
    setClickVonDeshabilitar();
    setClickVonEditar();
    setClickVonEditarGuardar();
    setClickVonEditarEliminar();
    setClickVonDestacado();
    setClickVonNoDestacado();
    
    // acciones masivas
    setClickHabilitacionMasiva();    
    setClickBtnHabilitarTiendaOnlineGuardar();
    setClickBtnDeshabilitarTiendaOnlineGuardar();
    setClickBtnHabilitarTiendaMayoristaGuardar();
    setClickBtnDeshabilitarTiendaMayoristaGuardar();
}

function setClickChkInsumoUno(){
    $('#listado_adm_ins_insumo_venta_web_gestion .checkbox input[type=checkbox]').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion .checkbox input[type=checkbox]').click(function (e) {
        if($(this).is(':checked')) {  
            $(this).parents('tr').addClass('sel');
        } else {  
            $(this).parents('tr').removeClass('sel');
        }  
    });    
}

function setClickChkInsumosAll(){
    $('#listado_adm_ins_insumo_venta_web_gestion #chk_insumo_id_all').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion #chk_insumo_id_all').click(function (e) {
        if($(this).is(':checked')) {  
            $("input[type=checkbox]").attr('checked', true);
        } else {  
            $("input[type=checkbox]").attr('checked', false);
        }  
    });    
}

/* VON habilitar */
function setClickVonHabilitar() {
    $('.von .accion.von-habilitar').unbind();
    $('.von .accion.von-habilitar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var tipo = $(this).parents('.von').attr('tipo');
        var habilitar = 1;
        setVonHabilitar(insumo_id, habilitar, tipo);
    });
}
function setClickVonDeshabilitar() {
    $('.von .accion.von-deshabilitar').unbind();
    $('.von .accion.von-deshabilitar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var tipo = $(this).parents('.von').attr('tipo');
        var habilitar = 0;
        setVonHabilitar(insumo_id, habilitar, tipo);
    });
}
function setVonHabilitar(insumo_id, habilitar, tipo) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_von_habilitar.php",
        data: "insumo_id=" + insumo_id + "&habilitar=" + habilitar + "&tipo=" + tipo,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

/* VON editar */
function setClickVonEditar() {
    $('.von .accion.von-editar').unbind();
    $('.von .accion.von-editar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        setVonEditar(insumo_id);
    });
}
function setVonEditar(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_von_info_editar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Info Venta Online',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickVonEditarGuardar() {
    $('.div_modal #btn_von_guardar').unbind();
    $('.div_modal #btn_von_guardar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_web_info_id = $(this).parents('.datos').attr('venta_web_info_id');
        setVonEditarGuardar(insumo_id, venta_web_info_id);
    });
}
function setVonEditarGuardar(insumo_id, venta_web_info_id) {
    var form = $('#form_von_info');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_von_info_editar_guardar.php",
        data: form.serialize() + '&insumo_id=' + insumo_id + '&venta_web_info_id=' + venta_web_info_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal').dialog('close');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVonEditarEliminar() {
    $('.div_modal #btn_von_eliminar').unbind();
    $('.div_modal #btn_von_eliminar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_web_info_id = $(this).parents('.datos').attr('venta_web_info_id');

        if (confirm('Eliminar Info Venta Web?')) {
            deleteVonEditarGuardar(insumo_id, venta_web_info_id);
        }
    });
}
function deleteVonEditarGuardar(insumo_id, venta_web_info_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/del_von_info_editar_eliminar.php",
        data: 'insumo_id=' + insumo_id + '&venta_web_info_id=' + venta_web_info_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal').dialog('close');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* VON destacado */
function setClickVonDestacado() {
    $('.von .accion.von-destacar').unbind();
    $('.von .accion.von-destacar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var destacado = 1;
        setVonDestacado(insumo_id, destacado);
    });
}
function setClickVonNoDestacado() {
    $('.von .accion.von-nodestacar').unbind();
    $('.von .accion.von-nodestacar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var destacado = 0;
        setVonDestacado(insumo_id, destacado);
    });
}
function setVonDestacado(insumo_id, destacado) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_von_destacado.php",
        data: "insumo_id=" + insumo_id + "&destacado=" + destacado,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

/* Habilitacion Masiva */
function setClickHabilitacionMasiva(){
    $('.div_listado_buscador .boton.habilitar-von-masivo').unbind();
    $('.div_listado_buscador .boton.habilitar-von-masivo').click(function (e) {      
        verModalHabilitacionMasiva();
    });
}
function verModalHabilitacionMasiva(){
    var form = $("#form_cuerpo");
    
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_habilitar_tienda.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: 'Habilitar Tienda Masivamente',
                close: function () {
                    refreshAdmAll('ins_insumo_venta_web_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Tienda Online */
function setClickBtnHabilitarTiendaOnlineGuardar() {
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_habilitar_tienda_online").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_habilitar_tienda_online").click(function () {
        var elem = $(this);
        if(confirm('Desea habilitar los productos para la tienda online?')){
            setHabilitarTiendaOnline(elem, 1);
        }
    });
}
function setClickBtnDeshabilitarTiendaOnlineGuardar() {
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_deshabilitar_tienda_online").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_deshabilitar_tienda_online").click(function () {
        var elem = $(this);
        if(confirm('Desea deshabilitar los productos para la tienda online?')){
            setHabilitarTiendaOnline(elem, 0);
        }
    });
}
function setHabilitarTiendaOnline(elem, estado) {
    var form = $("#form_cuerpo");
    var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_habilitar_tienda_online.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&estado=' + estado,
        dataType: "html",
        beforeSend: function (objeto) {
            elem.parents('.botonera').html(img_loading);
        },
        success: function (data) {
            
            $('.div_modal').dialog('close');
            
            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Tienda Mayorista */
function setClickBtnHabilitarTiendaMayoristaGuardar() {
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_habilitar_tienda_mayorista").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_habilitar_tienda_mayorista").click(function () {
        var elem = $(this);
        if(confirm('Desea habilitar los productos para la tienda mayorista?')){
            setHabilitarTiendaMayorista(elem, 1);
        }
    });
}
function setClickBtnDeshabilitarTiendaMayoristaGuardar() {
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_deshabilitar_tienda_mayorista").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos .botonera #btn_deshabilitar_tienda_mayorista").click(function () {
        var elem = $(this);
        if(confirm('Desea deshabilitar los productos para la tienda mayorista?')){
            setHabilitarTiendaMayorista(elem, 0);
        }
    });
}
function setHabilitarTiendaMayorista(elem, estado) {
    var form = $("#form_cuerpo");
    var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_habilitar_tienda_mayorista.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&estado=' + estado,
        dataType: "html",
        beforeSend: function (objeto) {
            elem.parents('.botonera').html(img_loading);
        },
        success: function (data) {
            
            $('.div_modal').dialog('close');
            
            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}