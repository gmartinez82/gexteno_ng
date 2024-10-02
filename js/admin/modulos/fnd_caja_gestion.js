// archivo js del modulo 'fnd_caja'
$(function ($) {
    setInitFndCaja();
});

function setInitFndCaja() {
    // general
    setClickCajaApertura();
    setClickCajaAperturaInicializar();
    setChangeCajaAperturaCmbGralCaja();

    setClickCajaGestionFicha();

    // dbsuggest
    setClickDbsugCajaCerrar();
    setClickDbsugCajaRendir();

    // cierre de caja
    setClickCajaCerrarCerar();

    // rendicion de caja
    setClickCajaRendirRendir();

    //movimiento de caja
    setClickDbsugCajaMovimiento();
    
    // ficha - ingresos
    setClickFichaIngresosAgregar();
    setClickFichaIngresosEditar();
    
    // ficha - egresos
    setClickFichaEgresosAgregar();
    setClickFichaEgresosEditar();
    
    setChangeCmbFndCajaDestino();
    setClickBtnAgregarFndCajaMovimientoItem();
    setClickBtnQuitarItemRecibo();
    setClickBtnRegistrarFndCajaMovimiento();
    
    setMovimientoChangeCmbGralFpFormaPago();
    setClickFndCajaGestionMovimientoSetCheque();

    setIngresoChangeCmbGralFpFormaPago();
    setClickFndCajaGestionIngresoSetCheque();

    setEgresoChangeCmbGralFpFormaPago();
    setClickFndCajaGestionEgresoSetCheque();    
       
    setClickFichaFndCajaGestionBtnAprobarFndCajaMovimiento();
    setClickFichaFndCajaGestionBtnAnularFndCajaMovimiento();
    setClickFichaFndCajaGestionBtnRechazarFndCajaMovimiento();
    setClickBtnGuardarFndCajaMovimientoAccion();

}

/*
 Ver Ficha de la orden_pago
 */
function setClickCajaGestionFicha() {
    $('.adm_botones_acciones .adm_botones_accion.ver_ficha').unbind();
    $('.adm_botones_acciones .adm_botones_accion.ver_ficha').click(function (e) {
        var fnd_caja_id = $(this).parents('.uno').attr('identificador');
        verModalCajaGestionFicha(fnd_caja_id);
    });
}


function verModalCajaGestionFicha(fnd_caja_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_fnd_caja_gestion_ficha.php",
        data: 'fnd_caja_id=' + fnd_caja_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha de la Caja',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            
            setInitFndCaja();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Apertura nuevo Caja
 */
function setClickCajaApertura() {
    $('#form_buscador_top .boton.agregar').unbind();
    $('#form_buscador_top .boton.agregar').click(function (e) {
        verModalAperturaCaja();
    });
}


function verModalAperturaCaja() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_caja_apertura.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 450,
                modal: true,
                title: 'Apertura Nueva Caja',
                close: function () {
                    //$('.div_modal_modal').dialog('destroy');	

                    //refreshAdmUno('rcl_reclamo_gestion', reclamo_id);
                    refreshAdmAll('fnd_caja_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitFndCaja();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickCajaAperturaInicializar() {
    $(".div_modal .caja.inicializacion .boton.inicializar").unbind();
    $(".div_modal .caja.inicializacion .boton.inicializar").click(function () {
        var elem = $(this);

        if (confirm("¿Desea inicializar una nueva caja?")) {
            setInicializarCaja(elem);
        }

    });
}


function setInicializarCaja(elem)
{
    var form = $("#form_fnd_caja_apertura");
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/fnd_caja_gestion/set_caja_apertura.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
            //$(elem).parents('.botonera').html(img_loading);
            $('.div_modal .botonera-loading').html(img_loading);
            $('.div_modal .botonera').hide();
        },
        success: function (data)
        {
            var arr = data;
            
            if (arr["error"])
            {
                $('.div_modal .botonera-loading').remove();
                $('.div_modal .botonera').show();
                $.each(arr, function (i, item)
                {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            }
            else
            {
                $('.div_modal').dialog('close');
                setInitFndCaja();
                setInit();
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/**
 * @creado_por Esteban Martinez
 * @creado 05/07/2019
 */
function setChangeCajaAperturaCmbGralCaja()
{
    $('#form_fnd_caja_apertura .datos.caja.inicializacion #cmb_gral_caja_id').unbind();
    $('#form_fnd_caja_apertura .datos.caja.inicializacion #cmb_gral_caja_id').change(function (e)
    {
        var gral_caja_id = $(this).val();
        refreshDivBloqueDatosCaja(gral_caja_id);
    });
}


/**
 * @creado_por Esteban Martinez
 * @creado 05/07/2019
 */
function refreshDivBloqueDatosCaja(gral_caja_id)
{
    $.ajax(
    {
        type: 'POST',
        url: "ajax/modulos/fnd_caja_gestion/refresh_bloque_datos_caja.php",
        data: 'gral_caja_id=' + gral_caja_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.bloque_datos_caja').html(data);
            
            setInitFndCaja();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });   
}

/*
 Cerrar Caja
 */
function setClickDbsugCajaCerrar() {
    $('.db_context_content .uno.cerrar').unbind();
    $('.db_context_content .uno.cerrar').click(function (e) {
        var caja_id = $(this).parents('.datos').attr('fnd_caja_origen_id');
        verModalCerrarCaja(caja_id);
    });
}


function verModalCerrarCaja(caja_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_caja_cerrar.php",
        data: 'caja_id=' + caja_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '50%',
                height: 500,
                modal: true,
                title: 'Cerrar Caja',
                close: function () {
                    //$('.div_modal_modal').dialog('destroy');	

                    //refreshAdmUno('rcl_reclamo_gestion', reclamo_id);
                    refreshAdmAll('fnd_caja_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitFndCaja();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickCajaCerrarCerar() {
    $(".div_modal .caja.cierre .boton.cerrar").unbind();
    $(".div_modal .caja.cierre .boton.cerrar").click(function () {
        var elem = $(this);

        if (confirm("¿Desea cerrar la caja?")) {
            setCerrarCaja(elem);
        }

    });
}


function setCerrarCaja(elem)
{
    var form = $("#form_caja_cerrar");
    $.ajax(
    {
        type: 'POST',
        url: "ajax/modulos/fnd_caja_gestion/set_caja_cerrar.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto)
        {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
            //$(elem).parents('.botonera').html(img_loading);
        },
        success: function (data)
        {
            var arr = data;
            
            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();
                
                $.each(arr, function (i, item)
                {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            }
            else
            {
                $(".div_modal").dialog("close");
            }

            //$('.div_modal').dialog('close');
            setInitFndCaja();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Rendir Caja
 */
function setClickDbsugCajaRendir() {
    $('.db_context_content .uno.rendir').unbind();
    $('.db_context_content .uno.rendir').click(function (e) {
        var caja_id = $(this).parents('.datos').attr('caja_id');
        verModalRendirCaja(caja_id);
    });
}


function verModalRendirCaja(caja_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_caja_rendir.php",
        data: 'caja_id=' + caja_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '50%',
                height: 500,
                modal: true,
                title: 'Rendir Caja',
                close: function () {
                    //$('.div_modal_modal').dialog('destroy');	

                    //refreshAdmUno('rcl_reclamo_gestion', reclamo_id);
                    refreshAdmAll('fnd_caja_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitFndCaja();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickCajaRendirRendir() {
    $(".div_modal .caja.cierre .boton.rendir").unbind();
    $(".div_modal .caja.cierre .boton.rendir").click(function () {
        var elem = $(this);
        var caja_id = $("#hdn_caja_id").val();

        if (confirm("¿Desea registrar rendicion de la caja?")) {
            setRendirCaja(elem, caja_id);
        }

    });
}


function setRendirCaja(elem, caja_id)
{
    var form = $("#form_caja").serialize();
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/fnd_caja_gestion/set_caja_rendir.php",
        data: form + '&caja_id=' + caja_id,
        dataType: "json",
        beforeSend: function (objeto)
        {
            //$(elem).parents('.botonera').html(img_loading);
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data)
        {
            var arr = data;

            if (arr["error"])
            {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();
                
                $.each(arr, function (i, item)
                {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            }
            else
            {
                $(".div_modal").dialog("close");
            }
                       
            setInitFndCaja();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickFichaIngresosAgregar()
{
    $('#btn_agregar_ingreso').unbind();
    $('#btn_agregar_ingreso').click(function ()
    {
        var fnd_caja_id = $(this).parents('.ficha-caja').attr('fnd_caja_id');
        verModalFichaIngresoAgregar(fnd_caja_id, 0);
    });
}


function setClickFichaIngresosEditar()
{
    $('.div_modal #tab_ingresos .ingresos .modificar').unbind();
    $('.div_modal #tab_ingresos .ingresos .modificar').click(function () {
        var fnd_caja_id         = $(this).parents('.ficha-caja').attr('fnd_caja_id');
        var fnd_caja_ingreso_id = $(this).parents('.uno').attr('identificador');

        verModalFichaIngresoAgregar(fnd_caja_id, fnd_caja_ingreso_id);
    });
}


function verModalFichaIngresoAgregar(fnd_caja_id, fnd_caja_ingreso_id)
{
    var modulo = 'fnd_caja_ingreso';
    var key    = 0;
    
    $.ajax(
    {
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_ficha_ingreso_agregar.php",
        data: 'modulo=' + modulo + '&key=' + key + '&fnd_caja_id=' + fnd_caja_id + '&fnd_caja_ingreso_id=' + fnd_caja_ingreso_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '50%',
                height: 550,
                modal: true,
                title: '',
                close: function () {
                    refreshBloqueCajaFichaIngresos(fnd_caja_id);
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitFndCaja();

            setInit();
            setInitAccionesFormulario('div_modal_modal', '');
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}


function refreshBloqueCajaFichaIngresos(fnd_caja_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/refresh_bloque_ficha_ingresos.php",
        data: 'fnd_caja_id=' + fnd_caja_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
        },
        success: function (data)
        {
            $('.div_modal .bloque-ficha-ingresos').html(data);
            setInitFndCaja();
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickFichaEgresosAgregar()
{
    $('#btn_agregar_egreso').unbind();
    $('#btn_agregar_egreso').click(function ()
    {
        var fnd_caja_id = $(this).parents('.ficha-caja').attr('fnd_caja_id');
        verModalFichaEgresoAgregar(fnd_caja_id, 0);
    });
}


function setClickFichaEgresosEditar()
{
    $('.div_modal #tab_egresos .egresos .modificar').unbind();
    $('.div_modal #tab_egresos .egresos .modificar').click(function ()
    {
        var fnd_caja_id        = $(this).parents('.ficha-caja').attr('fnd_caja_id');
        var fnd_caja_egreso_id = $(this).parents('.uno').attr('identificador');
        verModalFichaEgresoAgregar(fnd_caja_id, fnd_caja_egreso_id);
    });
}


function verModalFichaEgresoAgregar(fnd_caja_id, fnd_caja_egreso_id)
{
    var modulo = 'fnd_caja_egreso';
    var key    = 0;
    
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_ficha_egreso_agregar.php",
        data: 'modulo=' + modulo + '&key=' + key + '&fnd_caja_id=' + fnd_caja_id + '&fnd_caja_egreso_id=' + fnd_caja_egreso_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '50%',
                height: 550,
                modal: true,
                title: '',
                close: function () {
                    refreshBloqueCajaFichaEgresos(fnd_caja_id);
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitFndCaja();

            setInit();
            setInitAccionesFormulario('div_modal_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function refreshBloqueCajaFichaEgresos(fnd_caja_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/refresh_bloque_ficha_egresos.php",
        data: 'fnd_caja_id=' + fnd_caja_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal .bloque-ficha-egresos').html(data);
            
            setInitFndCaja();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickDbsugCajaMovimiento()
{
    $('.db_context_content .uno.movimiento').unbind();
    $('.db_context_content .uno.movimiento').click(function (e)
    {
        var fnd_caja_origen_id = $(this).parents('.datos').attr('fnd_caja_origen_id');
        verModalCajaMovimiento(fnd_caja_origen_id);
    });
}


function verModalCajaMovimiento(fnd_caja_origen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/fnd_caja_gestion/modal_caja_movimiento.php",
        data: 'fnd_caja_origen_id=' + fnd_caja_origen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '70%',
                height: 550,
                modal: true,
                title: 'Movimiento de Caja',
                close: function () {
                    //$('.div_modal_modal').dialog('destroy');  

                    //refreshAdmUno('rcl_reclamo_gestion', reclamo_id);
                    refreshAdmAll('fnd_caja_gestion', 1);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitFndCaja();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setChangeCmbFndCajaDestino()
{
    $('.datos.caja-movimiento #form_fnd_caja_movimiento #cmb_fnd_caja_destino_id').unbind();
    $('.datos.caja-movimiento #form_fnd_caja_movimiento #cmb_fnd_caja_destino_id').change(function ()
    {
        var cmb_fnd_caja_destino_id = $(this).val();
        refreshBloqueFndCajaMovimientoItem(cmb_fnd_caja_destino_id);
        
    });
}


function refreshBloqueFndCajaMovimientoItem(fnd_caja_destino_id)
{
    var fnd_caja_origen_id = $('#form_fnd_caja_movimiento').attr('fnd_caja_origen_id');
    $.ajax(
    {
        type: 'POST',
        url: 'ajax/modulos/fnd_caja_gestion/bloque_fnd_caja_movimiento_items_datos_x_fnd_caja_destino.php',
        data: 'fnd_caja_origen_id=' + fnd_caja_origen_id + '&fnd_caja_destino_id=' + fnd_caja_destino_id,
        dataType: 'html',
        beforeSend: function (objeto) {
            $('.bloque_datos_fnd_caja_movimiento').html(img_loading);
        },
        success: function (data) {
            $('.bloque_datos_fnd_caja_movimiento').html(data);
            setInitFndCaja();
            setInit();

            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnAgregarFndCajaMovimientoItem()
{
    $('#form_fnd_caja_movimiento .boton.agregar_fnd_caja_movimiento_item').unbind();
    $('#form_fnd_caja_movimiento .boton.agregar_fnd_caja_movimiento_item').click(function (e) {
        var fnd_caja_origen_id  = $(this).parents('table').attr('fnd_caja_origen_id');
        var fnd_caja_destino_id = $(this).parents('table').attr('fnd_caja_destino_id');
        var key = 0;
        $('.tr-item').each(function (){
            key = $(this).attr('key');
        });
        $(this).hide();

        setBtnAgregarFndCajaMovimientoItem(fnd_caja_origen_id, fnd_caja_destino_id, key, $(this));
    });
}


function setBtnAgregarFndCajaMovimientoItem(fnd_caja_origen_id, fnd_caja_destino_id, key, elem)
{

    var form = $('#form_fnd_caja_movimiento');

    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/fnd_caja_gestion/set_bloque_fnd_caja_movimiento_items_datos_x_fnd_caja_destino_uno.php',
        data: form.serialize() + '&fnd_caja_origen_id=' + fnd_caja_origen_id + '&fnd_caja_destino_id=' + fnd_caja_destino_id + '&key=' + key,
        dataType: 'html',
        beforeSend: function (objeto){
        },
        success: function (data)
        {
            $('.listado_fnd_caja_movimiento_items').append(data);

            elem.show();

            setInitFndCaja();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnQuitarItemRecibo()
{
    $('#form_fnd_caja_movimiento .boton.quitar_fnd_caja_movimiento_item').unbind();
    $('#form_fnd_caja_movimiento .boton.quitar_fnd_caja_movimiento_item').click(function (e) {
        if (confirm('Esta seguro que desea eliminar el item?')) {
            $(this).parents("tr").remove();
        }
    });
}


function setClickBtnRegistrarFndCajaMovimiento()
{
    $('.bloque_datos_fnd_caja_movimiento .botonera #btn_registrar_fnd_caja_movimiento').unbind();
    $('.bloque_datos_fnd_caja_movimiento .botonera #btn_registrar_fnd_caja_movimiento').click(function (e) {
        var cmb_fnd_caja_id = $('#form_fnd_caja_movimiento #cmb_fnd_caja_id').val();
        setControlFndCajaMovimiento();
    });
}

function setControlFndCajaMovimiento()
{
    var form                = $('#form_fnd_caja_movimiento');
    var fnd_caja_origen_id  = form.attr('fnd_caja_origen_id');
    var fnd_caja_destino_id = $('#listado_fnd_caja_movimiento_items').attr('fnd_caja_destino_id');
    var modulo              = 'fnd_caja_movimiento';
    var var_sesion_random   = $('.datos.caja-movimiento').attr('var_sesion_random');
    
    $.ajax(
    {
        type    : 'POST',
        url     : 'ajax/modulos/fnd_caja_gestion/set_caja_registrar_movimiento.php',
        data    : form.serialize() + '&modulo=' + modulo + '&var_sesion_random=' + var_sesion_random + '&fnd_caja_destino_id=' + fnd_caja_destino_id + '&fnd_caja_origen_id=' + fnd_caja_origen_id,
        dataType: 'json',
        beforeSend: function (objeto)
        {
            $('.textbox').removeClass('input-error');
            $('.label-error').html('');
        },
        close: function ()
        {
            setClickAdmRefreshAll();
        },
        success: function (data)
        {
            var arr = data;
            if (arr['error'])
            {
                $('.botonera').show();
                $.each(arr, function (i, item)
                {
                    $('#' + i).addClass('input-error');
                    $('#' + i + '_error').html(arr[i]);
                });
            }
            else
            {
                $(".div_modal").dialog("close");
            }

            setInitFndCaja();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setMovimientoChangeCmbGralFpFormaPago()
{
    $('#listado_fnd_caja_movimiento_items .tr-item .gral_fp_forma_pago_id').unbind();
    $('#listado_fnd_caja_movimiento_items .tr-item .gral_fp_forma_pago_id').change(function (e) {

        var key = $(this).parents("tr").attr("key");
        var cmb_gral_fp_forma_pago_id = $(this).val();

        $.ajax({
            type: 'POST',
            url: 'ajax/modulos/fnd_caja_gestion/set_fnd_caja_gestion_gral_fp_forma_pago.php',
            data: 'key=' + key + '&cmb_gral_fp_forma_pago_id=' + cmb_gral_fp_forma_pago_id,
            dataType: 'json',
            beforeSend: function () {
                $('#cmb_gral_fp_forma_pago_id[' + key + ']').removeClass('input-error');
                $('#cmb_gral_fp_forma_pago_id_' + key + '_error').html('');
            },
            success: function (data) {
                var arr = data;

                if (arr['error']) {

                    $.each(arr, function (i, item) {
                        $('#' + i).addClass('input-error');
                        $('#' + i + '_error').html(arr[i]);
                    });
                }
                else
                {
                    $('#cmb_gral_fp_forma_pago_id[' + key + ']').removeClass('input-error');

                    if (arr['btn_cheque'])
                    {
                        $('#btn_ver_modal_set_cheque_info_' + key).show();

                        $('#txt_importe_unitario_' + key).val('');//revisar, usar el key para acceder directamente y no el class
                        $('#txt_descripcion_' + key).val('');
                        $('#txt_referencia_' + key).val('');

                        if (arr["importe_cheque_formateado"])
                        {
                            $('#txt_importe_unitario_' + key).val(arr['importe_cheque_formateado']);
                            $('#txt_descripcion_' + key).val(arr['descripcion_cheque']);
                            $('#txt_referencia_' + key).val(arr['numero_cheque']);
                        }

                        $('#txt_importe_unitario_' + key).attr('readonly', 'readonly');
                        $('#txt_descripcion_' + key).attr('readonly', 'readonly');
                        $('#txt_referencia_' + key).attr('readonly', 'readonly');
                    }
                    else
                    {
                        $('#btn_ver_modal_set_cheque_info_' + key).hide();

                        $('#txt_importe_unitario_' + key).removeAttr('readonly');
                        $('#txt_descripcion_' + key).removeAttr('readonly');
                        $('#txt_referencia_' + key).removeAttr('readonly');
                    }
                }

                setInitFndCaja();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}


function setIngresoChangeCmbGralFpFormaPago()
{
    $('#formu-ingreso #cmb_gral_fp_forma_pago_id').unbind();
    $('#formu-ingreso #cmb_gral_fp_forma_pago_id').change(function (e)
    {
        var cmb_gral_fp_forma_pago_id = $(this).val();
        
        $.ajax(
        {
            type: 'POST',
            url: 'ajax/modulos/fnd_caja_gestion/set_fnd_caja_gestion_ingreso_egreso_gral_fp_forma_pago.php',
            data: 'cmb_gral_fp_forma_pago_id=' + cmb_gral_fp_forma_pago_id,
            dataType: 'json',
            beforeSend: function ()
            {
                $('#formu-ingreso #cmb_gral_fp_forma_pago_id').removeClass('input-error');
                $('#formu-ingreso #cmb_gral_fp_forma_pago_id_error').html('');
            },
            success: function (data)
            {
                var arr = data;
                
                if (arr['error'])
                {
                    $.each(arr, function (i, item)
                    {
                        $('#' + i).addClass('input-error');
                        $('#' + i + '_error').html(arr[i]);
                    });
                }
                else
                {
                    $('#formu-ingreso #cmb_gral_fp_forma_pago_id').removeClass('input-error');
                    
                    if (arr['btn_cheque'])
                    {
                        $('#formu-ingreso #btn_ver_modal_set_cheque_info').show();
                        
                        $('#txt_importe').val('');//revisar, usar el key para acceder directamente y no el class
                        $('#txt_descripcion').val('');
                        $('#txt_codigo_referencia').val('');
                        
                        if (arr["importe_cheque_formateado"])
                        {
                            $('#txt_importe').val(arr['importe_cheque_formateado']);
                            $('#txt_descripcion').val(arr['descripcion_cheque']);
                            $('#txt_codigo_referencia').val(arr['numero_cheque']);
                        }
                        
                        $('#txt_importe').attr('readonly', 'readonly');
                        $('#txt_descripcion').attr('readonly', 'readonly');
                        $('#txt_codigo_referencia').attr('readonly', 'readonly');
                    }
                    else
                    {
                        $('#formu-ingreso #btn_ver_modal_set_cheque_info').hide();
                        
                        $('#txt_importe').removeAttr('readonly');
                        $('#txt_descripcion').removeAttr('readonly');
                        $('#txt_codigo_referencia').removeAttr('readonly');
                    }
                }
                
                setInitFndCaja();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}


function setEgresoChangeCmbGralFpFormaPago()
{
    $('#formu-egreso #cmb_gral_fp_forma_pago_id').unbind();
    $('#formu-egreso #cmb_gral_fp_forma_pago_id').change(function (e)
    {
        var cmb_gral_fp_forma_pago_id = $(this).val();
        
        $.ajax(
        {
            type: 'POST',
            url: 'ajax/modulos/fnd_caja_gestion/set_fnd_caja_gestion_ingreso_egreso_gral_fp_forma_pago.php',
            data: 'cmb_gral_fp_forma_pago_id=' + cmb_gral_fp_forma_pago_id,
            dataType: 'json',
            beforeSend: function ()
            {
                $('#formu-egreso #cmb_gral_fp_forma_pago_id').removeClass('input-error');
                $('#formu-egreso #cmb_gral_fp_forma_pago_id_error').html('');
            },
            success: function (data)
            {
                var arr = data;
                
                if (arr['error'])
                {
                    $.each(arr, function (i, item)
                    {
                        $('#' + i).addClass('input-error');
                        $('#' + i + '_error').html(arr[i]);
                    });
                }
                else
                {
                    $('#formu-egreso #cmb_gral_fp_forma_pago_id').removeClass('input-error');
                    
                    if (arr['btn_cheque'])
                    {
                        $('#formu-egreso #btn_ver_modal_set_cheque_info').show();
                        
                        $('#txt_importe').val('');//revisar, usar el key para acceder directamente y no el class
                        $('#txt_descripcion').val('');
                        $('#txt_codigo_referencia').val('');
                        
                        if (arr["importe_cheque_formateado"])
                        {
                            $('#txt_importe').val(arr['importe_cheque_formateado']);
                            $('#txt_descripcion').val(arr['descripcion_cheque']);
                            $('#txt_codigo_referencia').val(arr['numero_cheque']);
                        }
                        
                        $('#txt_importe').attr('readonly', 'readonly');
                        $('#txt_descripcion').attr('readonly', 'readonly');
                        $('#txt_codigo_referencia').attr('readonly', 'readonly');
                    }
                    else
                    {
                        $('#formu-egreso #btn_ver_modal_set_cheque_info').hide();
                        
                        $('#txt_importe').removeAttr('readonly');
                        $('#txt_descripcion').removeAttr('readonly');
                        $('#txt_codigo_referencia').removeAttr('readonly');
                    }
                }
                
                setInitFndCaja();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {

            }
        });
    });
}


function setClickFndCajaGestionMovimientoSetCheque()
{
    $("#listado_fnd_caja_movimiento_items .tr-item .boton.ver_modal_set_cheque_info").unbind();
    $("#listado_fnd_caja_movimiento_items .tr-item .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key                         = $(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;
        
        var modulo                      = 'fnd_caja_movimiento';
        var var_sesion_random           = $('.datos.caja-movimiento').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}


function verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado)
{
    //var modulo              = 'fnd_caja_movimiento';
    //var var_sesion_random   = $('.datos.caja-movimiento').attr('var_sesion_random');
    $.ajax(
    {
        type: "GET",
        //url: "ajax/modulos/fnd_caja_gestion/modal_fnd_caja_gestion_set_cheque_info.php",
        url: "ajax/modulos/fnd_chq_cheque_buscador/modal_fnd_chq_cheque_buscador_set_cheque_info.php",
        data: 
          'modulo=' + modulo
        + '&key=' + key 
        + '&cheque_id=' + cheque_id 
        + '&en_cartera=' + en_cartera 
        + '&txt_buscador_cheque=' + txt_buscador_cheque 
        + '&limpiar_cheque_seleccionado=' + limpiar_cheque_seleccionado 
        + '&var_sesion_random=' + var_sesion_random,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal_cheque_buscador').html(img_loading);
            $('.div_modal_cheque_buscador').dialog({
                width: 1200,
                height: 600,
                modal: true,
                title: 'Datos del Cheque',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            setTimeout(function ()
            {
                $(".div_modal_cheque_buscador").html(data);
                
                getFileCssFndChqChequeBuscador(); // se levanta CSS
                getFileJsFndChqChequeBuscador(); // se levanta JS
                
                setInitFndCaja();
                setInit();
                
                setInitDbSuggest();
                setInitDbSuggestBoton();
            }, 500);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickFndCajaGestionIngresoSetCheque()
{
    $("#formu-ingreso .boton.ver_modal_set_cheque_info").unbind();
    $("#formu-ingreso .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key                         = 0;//$(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;
        
        var modulo                      = 'fnd_caja_ingreso';
        var var_sesion_random           = $('#formu-ingreso').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}


function setClickFndCajaGestionEgresoSetCheque()
{
    $("#formu-egreso .boton.ver_modal_set_cheque_info").unbind();
    $("#formu-egreso .boton.ver_modal_set_cheque_info").click(function (e)
    {
        var key                         = 0;//$(this).parents("tr").attr('key');
        var cheque_id                   = 0;
        var en_cartera                  = '-1';
        var txt_buscador_cheque         = '';
        var limpiar_cheque_seleccionado = 0;
        
        var modulo                      = 'fnd_caja_egreso';
        var var_sesion_random           = $('#formu-egreso').attr('var_sesion_random');
        
        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}



function getFileCssFndChqChequeBuscador()
{
    $.ajax(
    {
        url: "../css/admin/modulos/fnd_chq_cheque_buscador.css",
        success: function (data){
            var css = "<style>" + data + "</style>";
            $("#form_fnd_chq_cheque_buscador").before(css);
        }
    });
}



function getFileJsFndChqChequeBuscador()
{
    $.ajax(
    {
        url: "../js/admin/modulos/fnd_chq_cheque_buscador.js",
        success: function (data)
        {
            var js = "<script>" + data + "</script>";
            $("#form_fnd_chq_cheque_buscador").before(js);
        }
    });
}


function setClickFichaFndCajaGestionBtnAprobarFndCajaMovimiento()
{
    $('.adm_botones_acciones_destino .adm_botones_accion.aprobar_movimiento').unbind();
    $('.adm_botones_acciones_destino .adm_botones_accion.aprobar_movimiento').click(function ()
    {
        var fnd_caja_movimiento_id     = $(this).parents('.adm_botones_acciones_destino').attr('fnd_caja_movimiento_id');
        var fnd_caja_id                = $(this).parents('.adm_botones_acciones_destino').attr('fnd_caja_id');
        var fnd_caja_movimiento_accion = $(this).attr('movimiento_accion');
        
        verModalFichaFndCajaMovimientoAccion(fnd_caja_movimiento_id, fnd_caja_id, fnd_caja_movimiento_accion);
    });
}


function setClickFichaFndCajaGestionBtnAnularFndCajaMovimiento()
{
    $('.adm_botones_acciones_origen .adm_botones_accion.anular_movimiento').unbind();
    $('.adm_botones_acciones_origen .adm_botones_accion.anular_movimiento').click(function ()
    {
        var fnd_caja_movimiento_id     = $(this).parents('.adm_botones_acciones_origen').attr('fnd_caja_movimiento_id');
        var fnd_caja_id                = $(this).parents('.adm_botones_acciones_origen').attr('fnd_caja_id');
        var fnd_caja_movimiento_accion = $(this).attr('movimiento_accion');
        
        verModalFichaFndCajaMovimientoAccion(fnd_caja_movimiento_id, fnd_caja_id, fnd_caja_movimiento_accion);
    });
}


function setClickFichaFndCajaGestionBtnRechazarFndCajaMovimiento()
{
    $('.adm_botones_acciones_destino .adm_botones_accion.rechazar_movimiento').unbind();
    $('.adm_botones_acciones_destino .adm_botones_accion.rechazar_movimiento').click(function ()
    {
        var fnd_caja_movimiento_id     = $(this).parents('.adm_botones_acciones_destino').attr('fnd_caja_movimiento_id');
        var fnd_caja_id                = $(this).parents('.adm_botones_acciones_destino').attr('fnd_caja_id');
        var fnd_caja_movimiento_accion = $(this).attr('movimiento_accion');
        
        verModalFichaFndCajaMovimientoAccion(fnd_caja_movimiento_id, fnd_caja_id, fnd_caja_movimiento_accion);
    });
}


function verModalFichaFndCajaMovimientoAccion(fnd_caja_movimiento_id, fnd_caja_id, fnd_caja_movimiento_accion)
{
    $.ajax(
    {
        type: 'GET',
        url: 'ajax/modulos/fnd_caja_gestion/modal_ficha_fnd_caja_movimiento_accion.php',
        data: 'fnd_caja_movimiento_id=' + fnd_caja_movimiento_id + '&fnd_caja_id=' + fnd_caja_id + '&fnd_caja_movimiento_accion=' + fnd_caja_movimiento_accion,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog(
            {
                width: '35%',
                height: 350,
                modal: true,
                title: '',
                close: function()
                {
                    refreshBloqueFichaFndCajaMovimientos(fnd_caja_id);
                }
            });
        },
        success: function (data)
        {
            $('.div_modal_modal').html(data);
            setInitFndCaja();
            setInit();
            setInitAccionesFormulario('div_modal_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function refreshBloqueFichaFndCajaMovimientos(fnd_caja_id)
{
    $.ajax(
    {
        type: 'GET',
        url: 'ajax/modulos/fnd_caja_gestion/refresh_bloque_ficha_fnd_caja_movimientos.php',
        data: 'fnd_caja_id=' + fnd_caja_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
        },
        success: function (data)
        {
            $('.div_modal .bloque-ficha-movimientos').html(data);
            setInitFndCaja();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnGuardarFndCajaMovimientoAccion()
{
    $('#form_fnd_caja_movimiento_accion .datos .botonera .boton.btn_guardar_movimiento_accion').unbind();
    $('#form_fnd_caja_movimiento_accion .datos .botonera .boton.btn_guardar_movimiento_accion').click(function (e)
    {
        setFndCajaMovimientoAprobarMovimiento();
    });
}


function setFndCajaMovimientoAprobarMovimiento()
{
    var form_fnd_caja_movimiento_accion = $("#form_fnd_caja_movimiento_accion");
    var fnd_caja_movimiento_id          = form_fnd_caja_movimiento_accion.attr('fnd_caja_movimiento_id');
    var fnd_caja_movimiento_accion      = form_fnd_caja_movimiento_accion.attr('fnd_caja_movimiento_accion');

    $.ajax(
    {
        type: 'POST',
        url: 'ajax/modulos/fnd_caja_gestion/set_fnd_caja_movimiento_accion.php',
        data: form_fnd_caja_movimiento_accion.serialize() + '&fnd_caja_movimiento_id=' + fnd_caja_movimiento_id + '&fnd_caja_movimiento_accion=' + fnd_caja_movimiento_accion,
        dataType: 'json',
        beforeSend: function (objeto)
        {
            $('.div_modal_modal .botonera').hide();
            $('.div_modal_modal .botonera').after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $('.div_modal_modal .textbox').removeClass('input-error');
            $('.div_modal_modal .label-error').html('');
        },
        success: function (data)
        {
            var arr = data;
            if (arr['error'])
            {
                $('.div_modal_modal .botonera-loading').remove();
                $('.div_modal_modal .botonera').show();
                
                $.each(arr, function (i, item)
                {
                    $('#' + i).addClass('input-error');
                    $('#' + i + '_error').html(arr[i]);
                });
            }
            else
            {
                $('.div_modal_modal').dialog('close');
            }
            
            setInitFndCaja();
            setInit();
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}