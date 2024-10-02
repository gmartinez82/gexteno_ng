// archivo js del modulo 'ins_stock_transformacion'
$(function ($) {
    setInitInsStockTransformacion();
});

function setInitInsStockTransformacion() {

    // general
    setClickTransformacionAgregar();

    setChangeInsStockTransformacionAgregarPanol();
    setChangeInsStockTransformacionAgregarInsumo();

    setClickBtnRegistrarTransformacion();
    setClickBtnRegistrarTransformacionConfirmacion();
}

function setChangeInsStockTransformacionAgregarPanol() {
    $('#cmb_pan_panol_id').unbind();
    $('#cmb_pan_panol_id').change(function () {
        refreshBloqueInsumoOrigen();
        refreshBloqueInsumoDestino();
    });
}
function setChangeInsStockTransformacionAgregarInsumo() {
    $('#dbsug_ins_insumo_id').unbind();
    $('#dbsug_ins_insumo_id').change(function () {
        var insumo_id = $("#dbsug_ins_insumo_id").val();
        if (insumo_id == '')
            return;
        
        refreshBloqueInsumoOrigen();
        refreshBloqueInsumoDestino();
    });
}

function refreshBloqueInsumoOrigen() {
    var panol_id = $('#cmb_pan_panol_id').val();
    var insumo_id = $('#dbsug_ins_insumo_id').val();

    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_stock_transformacion_gestion/refresh_bloque_insumo_origen.php",
        data: "panol_id=" + panol_id + "&insumo_id=" + insumo_id,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
            $('.div_modal .bloque-stock-panol').html(img_loading);
        },
        success: function (data) {
            $('.div_modal .bloque-stock-panol').html(data);

            setInitInsStockTransformacion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function refreshBloqueInsumoDestino() {
    var panol_id = $('#cmb_pan_panol_id').val();
    var insumo_id = $('#dbsug_ins_insumo_id').val();

    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_stock_transformacion_gestion/refresh_bloque_insumo_destino.php",
        data: "panol_id=" + panol_id + "&insumo_id=" + insumo_id,
        dataType: "html",
        async: false,
        beforeSend: function (objeto) {
            $('.div_modal .col.insumo-destino .bloque-datos').html(img_loading);
        },
        success: function (data) {
            $('.div_modal .col.insumo-destino .bloque-datos').html(data);

            setInitInsStockTransformacion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setClickTransformacionAgregar() {
    $('.botonera .agregar-transformacion').unbind();
    $('.botonera .agregar-transformacion').click(function () {
        verModalTransformacionAgregar();
        return false;
    });
}

function verModalTransformacionAgregar() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_stock_transformacion_gestion/modal_transformacion_agregar.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 550,
                modal: true,
                title: 'Transformacion de Stock',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('ins_stock_transformacion_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitInsStockTransformacion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnRegistrarTransformacion() {
    $('#btn_registrar_transformacion').unbind();
    $('#btn_registrar_transformacion').click(function () {
        verModalTransformacionConfirmacion();
    });
}
function verModalTransformacionConfirmacion() {
    var formulario = $("#form_div_modal").serialize();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_stock_transformacion_gestion/modal_transformacion_confirmacion.php",
        data: formulario,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 350,
                modal: true,
                title: 'Confirmar Transformacion de Stock',
                close: function () {
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal_modal').html(data);
            setInitInsStockTransformacion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnRegistrarTransformacionConfirmacion() {
    $('#btn_registrar_transformacion_confirmacion').unbind();
    $('#btn_registrar_transformacion_confirmacion').click(function () {

        if (confirm('Desea realizar la tranformacion?')) {
            setRegistrarTransformacionConfirmar();
        }

    });
}
function setRegistrarTransformacionConfirmar() {
    var form_div_modal = $("#form_div_modal").serialize();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_stock_transformacion_gestion/set_registrar_transformacion.php",
        data: form_div_modal,
        dataType: "html",
        beforeSend: function (objeto) {
            $("#btn_registrar_transformacion_confirmacion").parent().html(img_loading);
        },
        success: function (data) {
            $(".div_modal_modal").dialog('close');
            $(".div_modal").dialog('close');
            setInitInsStockTransformacion();

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}