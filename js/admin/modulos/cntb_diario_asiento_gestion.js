// archivo js del modulo 'cntb_diario_asiento'
$(function ($) {
    setInitCntbDiarioAsientoGestion();
});

function setInitCntbDiarioAsientoGestion() {

    // filtros
    setChangeCmbFiltroFechaDesde();
    setChangeCmbFiltroFechaHasta();
    setChangeCmbFiltroCntbEjercicio();
    setChangeCmbFiltroCntbTipoAsiento();
    setChangeCmbFiltroCntbTipoOrigen();
    setChangeCmbFiltroGralActividad();
    setChangeCmbFiltroCntbTipoMovimiento();
    setChangeCmbFiltroCntbCuenta();

    setClickAsientoVerMasInfo();
    
    // agregar asiento
    setClickAsientoAgregar();
    setClickAsientoAgregarCuenta();
    setClickAsientoEliminarCuenta();

    // editar asiento
    setClickAsientoEditar();
    
    // edicion de cuentas
    setChangeTxtImporteDebe();
    setChangeTxtImporteHaber();
    
    // registro y control
    setClickRegistrarAsiento();
    
    // ver libro diario
    setClickVerLibroDiario();
    setClickVerLibroDiarioConfirmar();
}

function setChangeCmbFiltroFechaDesde() {
    $("#txt_filtro_desde").unbind();
    $("#txt_filtro_desde").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroFechaHasta() {
    $("#txt_filtro_hasta").unbind();
    $("#txt_filtro_hasta").keyup(function (e) {
        var keyCode = e.keyCode;
        if (keyCode != 13)
            return;
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroCntbEjercicio() {
    $("#cmb_filtro_cntb_ejercicio_id").unbind();
    $("#cmb_filtro_cntb_ejercicio_id").change(function () {
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroCntbTipoAsiento() {
    $("#cmb_filtro_cntb_tipo_asiento_id").unbind();
    $("#cmb_filtro_cntb_tipo_asiento_id").change(function () {
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroCntbTipoOrigen() {
    $("#cmb_filtro_cntb_tipo_origen_id").unbind();
    $("#cmb_filtro_cntb_tipo_origen_id").change(function () {
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroGralActividad() {
    $("#cmb_filtro_gral_actividad_id").unbind();
    $("#cmb_filtro_gral_actividad_id").change(function () {
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroCntbTipoMovimiento() {
    $("#cmb_filtro_cntb_tipo_movimiento_id").unbind();
    $("#cmb_filtro_cntb_tipo_movimiento_id").change(function () {
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}
function setChangeCmbFiltroCntbCuenta() {
    $("#cmb_filtro_cntb_cuenta_id").unbind();
    $("#cmb_filtro_cntb_cuenta_id").change(function () {
        setAdmBuscadorTop("cntb_diario_asiento_gestion");
    });
}

function setClickAsientoVerMasInfo(){
    $("#listado_adm_cntb_diario_asiento_gestion .descripcion-asiento").unbind();
    $("#listado_adm_cntb_diario_asiento_gestion .descripcion-asiento").click(function () {
        $(this).parents('.uno').find('.observacion-asiento').toggle();
    });    
}

function setClickAsientoAgregar() {
    $('.div_listado_buscador .boton.agregar-asiento').unbind();
    $('.div_listado_buscador .boton.agregar-asiento').click(function (e) {
        //var asiento_id = $(this).parents('.uno').attr('identificador');
        var asiento_id = 0;
        verModalAsientoAgregar(asiento_id);
    });
}
function setClickAsientoEditar() {
    $('#listado_adm_cntb_diario_asiento_gestion .adm_botones_accion.modificar-asiento').unbind();
    $('#listado_adm_cntb_diario_asiento_gestion .adm_botones_accion.modificar-asiento').click(function (e) {
        var asiento_id = $(this).parents('.uno').attr('identificador');
        verModalAsientoAgregar(asiento_id);
    });
}

function verModalAsientoAgregar(asiento_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/cntb_diario_asiento_gestion/modal_asiento_agregar.php",
        data: 'asiento_id=' + asiento_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Agregar o editar asiento',
                close: function () {
                    if (asiento_id == 0) {
                        refreshAdmAll('cntb_diario_asiento_gestion', 1);
                    } else {
                        refreshAdmUno('cntb_diario_asiento_gestion', asiento_id);
                    }
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitCntbDiarioAsientoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAsientoAgregarCuenta(){
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .accion.agregar-cuenta").unbind();
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .accion.agregar-cuenta").click(function(){
        
        var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");
        
        var cantidad_filas = $('#listado_cntb_diario_asiento_gestion_cuentas').attr('cantidad_filas');
        var cantidad_filas_nuevo = parseInt(cantidad_filas) + 1;
        $('#listado_cntb_diario_asiento_gestion_cuentas').attr('cantidad_filas', cantidad_filas_nuevo);
        
        setAsientoCuentaAgregarFila(asiento_id, cantidad_filas_nuevo);
    });
}
function setAsientoCuentaAgregarFila(asiento_id, row){    
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/cntb_diario_asiento_gestion/cntb_diario_asiento_gestion_cuenta_uno.php",
        data: 'agregar=1&row=' + row,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            $('.div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas tbody').append(data);
            
            refreshAsientoCuentasTotal(asiento_id)
            
            setInitCntbDiarioAsientoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAsientoEliminarCuenta(){
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .accion.eliminar-cuenta").unbind();
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .accion.eliminar-cuenta").click(function(){
        var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");
        var elem = $(this);
        setAsientoCuentaEliminarFila(asiento_id, elem);
    });
}
function setAsientoCuentaEliminarFila(asiento_id, elem){
    elem.parents('.uno').remove();
    
    refreshAsientoCuentasTotal(asiento_id);
}

function refreshAsientoCuentasTotal(asiento_id){
    var form = $("form#cntb_diario_asiento_agregar");
    var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");
    
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/cntb_diario_asiento_gestion/refresh_cntb_diario_asiento_gestion_cuenta_total.php",
        data: form.serialize() + '&asiento_id=' + asiento_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            $('#listado_cntb_diario_asiento_gestion_cuentas tfoot').html(data);
            setInitCntbDiarioAsientoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeTxtImporteDebe(){    
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .txt_importe_debe").unbind();
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .txt_importe_debe").keyup(function(e){
        var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");

        setTimeout(function(){
            refreshAsientoCuentasTotal(asiento_id);        
        }, 500);
    });
}
function setChangeTxtImporteHaber(){
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .txt_importe_haber").unbind();
    $(".div_modal .datos .info-asiento-cuentas #listado_cntb_diario_asiento_gestion_cuentas .txt_importe_haber").keyup(function(e){
        var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");

        setTimeout(function(){
            refreshAsientoCuentasTotal(asiento_id);        
        }, 500);
    });
}

function setClickRegistrarAsiento(){
    $(".div_modal .datos .botonera #btn_registrar_asiento").unbind();
    $(".div_modal .datos .botonera #btn_registrar_asiento").click(function(){
        var form = $("form#cntb_diario_asiento_agregar");
        var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");
        setRegistrarAsiento(asiento_id);
    });
}
function setRegistrarAsiento(asiento_id){
    var form = $("form#cntb_diario_asiento_agregar");
    var asiento_id = $("form#cntb_diario_asiento_agregar").attr("cntb_diario_asiento_id");
    
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/cntb_diario_asiento_gestion/set_registrar_asiento.php",
        data: form.serialize() + '&asiento_id=' + asiento_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
                //alert('se guarda');
            }
            
            setInitCntbDiarioAsientoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();            
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVerLibroDiario() {
    $('.div_listado_buscador .boton.ver-libro-diario').unbind();
    $('.div_listado_buscador .boton.ver-libro-diario').click(function (e) {
        verModalVerLibroDiario();
    });
}

function verModalVerLibroDiario() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/cntb_diario_asiento_gestion/modal_ver_libro_diario.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 600,
                height: 500,
                modal: true,
                title: 'Agregar o editar asiento',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitCntbDiarioAsientoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVerLibroDiarioConfirmar(){
    $(".div_modal .datos .botonera #btn_ver_diario").unbind();
    $(".div_modal .datos .botonera #btn_ver_diario").click(function(){
        var cmb_cntb_ejercicio_id = $("#cmb_cntb_ejercicio_id").val();
        var txt_fecha_desde = $("#txt_fecha_desde").val();
        var txt_fecha_hasta = $("#txt_fecha_hasta").val();
                
        var url = 'ajax/modulos/cntb_diario_asiento_gestion/pdf_diario_comprobante.php?cntb_ejercicio_id=' + cmb_cntb_ejercicio_id + '&fecha_desde=' + txt_fecha_desde + '&fecha_hasta=' + txt_fecha_hasta;
        window.open(url, '_blank');
    });
}
