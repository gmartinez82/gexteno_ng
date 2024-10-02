// archivo js del modulo 'trf_pln_calendario_coche'
$(function ($) {
    setInitPerMovMovimientoCalendario();
});


function setInitPerMovMovimientoCalendario() {

    // filtros
    setChangeCmbFiltrosGralEmpresa();
    setChangeCmbFiltrosCoCentroOperativo();
    setChangeCmbFiltrosPerTipoEstado();
    setChangeCmbFiltrosGralArea();
    setChangeCmbFiltrosGralSector();
    setChangeCmbFiltrosGralPuesto();
    setSpinnerPerMovMovimientoCalendarioCantidadDias();

    setClickBtnBuscar();

    setInitDbSuggest();
    setInitDbSuggestBoton();
    setEventsTdUnoDia();

    //content acciones
    setClickBtnPerMovMovimientoCalendarioUnoFechaFicha();
    setClickBtnPerMovMovimientoCalendarioUnoFechaRefresh();
    setClickBtnPerMovMovimientoCalendarioUnoFechaAltaNovedad();
    setClickBtnPerMovMovimientoCalendarioUnoFechaAltaNovedadParcial();
    setClickBtnPerMovMovimientoCalendarioUnoFechaEditarNovedad();
    setClickBtnPerMovMovimientoCalendarioUnoFechaEliminarNovedad();
    setClickBtnPerMovMovimientoCalendarioUnoFechaEliminarNovedadParcial();
    setClickBtnPerMovMovimientoCalendarioUnoFechaNovedadAgregarComentario();
    setClickBtnPerMovMovimientoCalendarioUnoFechaNovedadConfirmar();

    setClickBtnPerMovMovimientoCalendarioUnoFechaAltaNovedadGuardar();
    setClickBtnPerMovMovimientoCalendarioUnoFechaNovedadGuardarComentario();

    setClickBtnAltaPerMovMovimientoEntrada();
    setClickBtnAltaPerMovMovimientoEntradaGuardar();

    setClickBtnAltaPerMovMovimientoSalida();
    setClickBtnAltaPerMovMovimientoSalidaGuardar();

    setClickBtnEditarPerMovMovimiento();
    setClickBtnEditarPerMovMovimientoGuardar();

    setClickBtnAgregarPerMovMovimientoCalendario();

    setChangeCmbGralNovedadAltaNovedad();
    setChangeCmbGralNovedadMotivoAltaNovedad();
    setChangeCmbPlnJornadaAltaNovedad();

    setClickChkDiaUno();

    setCheckBoxCalendario();
    setClickChkPersonasAll();
    setClickDbcontextMasivoAgregarNovedad();
}




/**
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/03/2018
 */
function setChangeCmbFiltrosGralEmpresa()
{
    $("#cmb_filtro_gral_empresa_id").unbind();
    $("#cmb_filtro_gral_empresa_id").change(function () {
        //setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}


/**
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 30/04/2018
 */
function setChangeCmbFiltrosCoCentroOperativo()
{
    $("#cmb_filtro_co_centro_operativo_id").unbind();
    $("#cmb_filtro_co_centro_operativo_id").change(function () {
        //setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}


/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 08/05/2018
 */
function setChangeCmbFiltrosPerTipoEstado()
{
    $("#cmb_filtro_per_tipo_estado_id").unbind();
    $("#cmb_filtro_per_tipo_estado_id").change(function () {
        //setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}


/**
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/03/2018
 */
function setChangeCmbFiltrosGralArea()
{
    $("#cmb_filtro_gral_area_id").unbind();
    $("#cmb_filtro_gral_area_id").change(function () {
        //setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}


/**
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/03/2018
 */
function setChangeCmbFiltrosGralSector()
{
    $("#cmb_filtro_gral_sector_id").unbind();
    $("#cmb_filtro_gral_sector_id").change(function () {
        //setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}


/**
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/03/2018
 */
function setChangeCmbFiltrosGralPuesto()
{
    $("#cmb_filtro_gral_puesto_id").unbind();
    $("#cmb_filtro_gral_puesto_id").change(function () {
        //setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}



function setSpinnerPerMovMovimientoCalendarioCantidadDias()
{
    var timeout;

    $("#txt_cantidad_dias").spinner({
        min: 1,
        stop: function (event, ui)
        {
            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
            }
            timeout = setTimeout(function ()
            {
                setAdmCantidadDias();

            }, 1000);
        }
    });
    $("#txt_cantidad_dias").css('border', 'none');
    $("#txt_cantidad_dias").css('padding', '5px');
    $("#txt_cantidad_dias").css('font-size', '11px');
}




function setAdmCantidadDias()
{
    var cantidad = $("#txt_cantidad_dias").val();
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_calendario_cantidad_dias.php",
        data: "cantidad=" + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmAll('per_mov_movimiento_calendario', 1);

            //setTableFixer();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnBuscar()
{
    $("#btn_buscar").unbind();
    $("#btn_buscar").click(function (e)
    {
        setAdmBuscadorTop("per_mov_movimiento_calendario");
    });
}


function setEventsTdUnoDia() {
    $('.listado_adm_per_mov_movimiento_calendario td.dia').unbind();

    // evento en mouseenter
    $('.listado_adm_per_mov_movimiento_calendario td.dia').mouseenter(function () {
        $(this).find('.acciones').show();
    });

    // evento en mouseleave
    $('.listado_adm_per_mov_movimiento_calendario td.dia').mouseleave(function () {
        $(this).find('.acciones').hide();
    });
}



function setClickBtnPerMovMovimientoCalendarioUnoFechaFicha() {
    $('.db_context .db_context_content .uno.ver-ficha').unbind();
    $('.db_context .db_context_content .uno.ver-ficha').click(function () {
        var persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        //alert("PerId: " + persona_id + " - Fecha: " + fecha);
        verModalPerMovMovimientoCalendarioUnoFechaFicha(fecha, persona_id, 1);
    });
}


function verModalPerMovMovimientoCalendarioUnoFechaFicha(fecha, persona_id, numero_solapa) {
    if (numero_solapa == "") {
        numero_solapa = 0;
    }

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/per_mov_movimiento_calendario/modal_per_mov_movimiento_calendario_uno_fecha_ficha.php",
        data: "fecha=" + fecha + "&persona_id=" + persona_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Ficha de Calendario',
                close: function () {
                    refreshPerMovMovimientoCalendarioUnoFecha(fecha, persona_id);
                }
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            $(".tabs").tabs({active: numero_solapa});
            setInitPerMovMovimientoCalendario();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaRefresh()
{
    $('.db_context .db_context_content .datos .uno.refresh').unbind();
    $('.db_context .db_context_content .datos .uno.refresh').click(function ()
    {
        var persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');

        refreshPerMovMovimientoCalendarioUnoFecha(fecha, persona_id);
    });
}


function refreshPerMovMovimientoCalendarioUnoFecha(fecha, persona_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/per_mov_movimiento_calendario/refresh_per_mov_movimiento_calendario_uno_fecha.php",
        data: "fecha=" + fecha + "&persona_id=" + persona_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('#td_persona_' + persona_id + '_' + fecha).html(img_loading);
        },
        success: function (data)
        {
            $('#td_persona_' + persona_id + '_' + fecha).html(data);
            setInitPerMovMovimientoCalendario();
            setInitDbContext();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickBtnPerMovMovimientoCalendarioUnoFechaAltaNovedad()
{
    $('.db_context .db_context_content .datos .uno.agregar-novedad').unbind();
    $('.db_context .db_context_content .datos .uno.agregar-novedad').click(function ()
    {
        var persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        verModalPerMovMovimientoCalendarioUnoFechaAltaNovedad(fecha, persona_id);
    });
}


function verModalPerMovMovimientoCalendarioUnoFechaAltaNovedad(fecha, persona_id)
{
    /*if (numero_solapa == "") {
     numero_solapa = 0;
     }*/
    var tipo_accion = "alta_novedad_total";
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/per_mov_movimiento_calendario/modal_per_mov_movimiento_calendario_uno_fecha_alta_novedad.php",
        data: "fecha=" + fecha + "&persona_id=" + persona_id + "&tipo_accion=" + tipo_accion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 900,
                height: 600,
                modal: true,
                title: 'Agregar Novedad a Persona',
                close: function ()
                {
                    //refreshPerMovMovimientoCalendarioUnoFecha(fecha, persona_id);
                    refreshAdmUno('per_mov_movimiento_calendario', persona_id);
                }
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitPerMovMovimientoCalendario();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaAltaNovedadParcial()
{
    $('.db_context .db_context_content .datos .uno.agregar-novedad-parcial').unbind();
    $('.db_context .db_context_content .datos .uno.agregar-novedad-parcial').click(function ()
    {
        var persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        verModalPerMovMovimientoCalendarioUnoFechaAltaNovedadParcial(fecha, persona_id);
    });
}

function verModalPerMovMovimientoCalendarioUnoFechaAltaNovedadParcial(fecha, persona_id)
{
    /*if (numero_solapa == "") {
     numero_solapa = 0;
     }*/
    var tipo_accion = "alta_novedad_parcial";
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/per_mov_movimiento_calendario/modal_per_mov_movimiento_calendario_uno_fecha_alta_novedad.php",
        data: "fecha=" + fecha + "&persona_id=" + persona_id + "&tipo_accion=" + tipo_accion,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 900,
                height: 600,
                modal: true,
                title: 'Agregar Novedad Parcial a Persona',
                close: function ()
                {
                    refreshAdmUno('per_mov_movimiento_calendario', persona_id);
                }
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitPerMovMovimientoCalendario();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaEditarNovedad()
{
    $('.db_context .db_context_content .datos .uno.editar-novedad').unbind();
    $('.db_context .db_context_content .datos .uno.editar-novedad').click(function ()
    {
        var per_mov_planificacion_id = $(this).parents('.datos').attr('per_mov_planificacion_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        var persona_id = $(this).parents('.datos').attr('persona_id');
        verModalPerMovMovimientoCalendarioUnoFechaEditarNovedad(per_mov_planificacion_id, fecha, persona_id);
    });
}


function verModalPerMovMovimientoCalendarioUnoFechaEditarNovedad(per_mov_planificacion_id, fecha, persona_id)
{
    var tipo_accion = "editar_novedad";
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/per_mov_movimiento_calendario/modal_per_mov_movimiento_calendario_uno_fecha_alta_novedad.php",
        data: "per_mov_planificacion_id=" + per_mov_planificacion_id + "&tipo_accion=" + tipo_accion + "&fecha=" + fecha + "&persona_id=" + persona_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 900,
                height: 600,
                modal: true,
                title: 'Editar Novedad de Persona',
                close: function ()
                {
                    refreshAdmUno('per_mov_movimiento_calendario', persona_id);
                }
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitPerMovMovimientoCalendario();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*********************************/

function setClickBtnPerMovMovimientoCalendarioUnoFechaAltaNovedadGuardar()
{
    $(".botonera #btn_novedad_guardar").unbind();
    $(".botonera #btn_novedad_guardar").click(function (e) {
        setPerMovMovimientoAltaNovedadGuardar();
    });
}


function setPerMovMovimientoAltaNovedadGuardar()
{
    var form = $("#form_alta_novedad");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_calendario_uno_fecha_alta_novedad_guardar.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto)
        {
            $(".div_modal .div-modal-alta-novedad .botonera .loading").show();
            $(".div_modal .div-modal-alta-novedad .botonera .boton").hide();

            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data)
        {
            var arr = data;
            if (arr["error"]) {
                $(".div_modal .div-modal-alta-novedad .botonera .loading").hide();
                $(".div_modal .div-modal-alta-novedad .botonera .boton").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else
            {
                $(".div_modal").dialog("close");
                var hdn_per_persona_id = $("#hdn_per_persona_id").val();
                var hdn_fecha = $("#hdn_fecha").val();
                //alert(hdn_per_persona_id + " - " + hdn_fecha);
                refreshPerMovMovimientoCalendarioUnoFecha(hdn_fecha, hdn_per_persona_id);
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaNovedadGuardarComentario()
{
    $(".botonera #btn_novedad_guardar_comentario").unbind();
    $(".botonera #btn_novedad_guardar_comentario").click(function (e)
    {
        setPerMovMovimientoNovedadGuardarComentario();
    });
}


function setPerMovMovimientoNovedadGuardarComentario()
{
    var form = $("#form_agregar_comentario");

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_calendario_novedad_guardar_comentario.php",
                data: form.serialize(),
                dataType: "json",
                beforeSend: function (objeto)
                {
                    //$(".botonera").hide();
                    $(".textbox").removeClass('input-error');
                    $(".label-error").html("");
                },
                success: function (data)
                {
                    $(".div_modal").dialog("close");
                    var hdn_per_persona_id = $("#hdn_per_persona_id").val();
                    var hdn_fecha = $("#hdn_fecha").val();
                    //alert(hdn_per_persona_id + " - " + hdn_fecha);
                    refreshPerMovMovimientoCalendarioUnoFecha(hdn_fecha, hdn_per_persona_id);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}



function setClickBtnPerMovMovimientoCalendarioUnoFechaEliminarNovedad()
{
    $('.db_context .db_context_content .datos .uno.eliminar-novedad').unbind();
    $('.db_context .db_context_content .datos .uno.eliminar-novedad').click(function ()
    {
        //del db_context_acciones_planificacion_parcial
        var per_mov_planificacion_id = $(this).parents('.datos').attr('per_mov_planificacion_id');
        var per_persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        //alert(per_persona_id + " - " + fecha);
        setPerMovMovimientoEliminarNovedad(per_mov_planificacion_id, per_persona_id, fecha);
    });
}


function setPerMovMovimientoEliminarNovedad(per_mov_planificacion_id, per_persona_id, fecha)
{
    var tipo_eliminacion = "eliminacion_total";
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_eliminar_novedad.php",
                data: "per_mov_planificacion_id=" + per_mov_planificacion_id + "&tipo_eliminacion=" + tipo_eliminacion + "&per_persona_id=" + per_persona_id + "&fecha=" + fecha,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    //$(".uno.eliminar-novedad-parcial").html(img_loading);
                },
                success: function (data)
                {
                    //refreshPerMovMovimientoCalendarioUnoFecha(fecha, per_persona_id);
                    refreshAdmUno('per_mov_movimiento_calendario', per_persona_id);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaEliminarNovedadParcial()
{
    $('.db_context .db_context_content .datos .uno.eliminar-novedad-parcial').unbind();
    $('.db_context .db_context_content .datos .uno.eliminar-novedad-parcial').click(function ()
    {
        var per_mov_planificacion_id = $(this).parents('.datos').attr('per_mov_planificacion_id');
        var per_persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        setPerMovMovimientoEliminarNovedadParcial(per_mov_planificacion_id, per_persona_id, fecha);
    });
}


function setPerMovMovimientoEliminarNovedadParcial(per_mov_planificacion_id, per_persona_id, fecha)
{
    var tipo_eliminacion = "eliminacion_parcial";
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_eliminar_novedad.php",
                data: "per_mov_planificacion_id=" + per_mov_planificacion_id + "&tipo_eliminacion=" + tipo_eliminacion + "&per_persona_id=" + per_persona_id + "&fecha=" + fecha,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    //$(".uno.eliminar-novedad-parcial").html(img_loading);
                },
                success: function (data)
                {
                    //refreshPerMovMovimientoCalendarioUnoFecha(fecha, per_persona_id);
                    refreshAdmUno('per_mov_movimiento_calendario', per_persona_id);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaNovedadAgregarComentario()
{
    $('.db_context .db_context_content .datos .uno.agregar-comentario').unbind();
    $('.db_context .db_context_content .datos .uno.agregar-comentario').click(function ()
    {
        var per_mov_planificacion_id = $(this).parents('.datos').attr('per_mov_planificacion_id');
        var per_persona_id = $(this).parents('.datos').attr('persona_id');
        var fecha = $(this).parents('.datos').attr('fecha');
        //alert("fecha: " + fecha + "- persona_id: " + per_persona_id + "- per_mov_planificacion_id: " + per_mov_planificacion_id);
        verModalNovedadAgregarComentario(per_mov_planificacion_id, per_persona_id, fecha);
    });
}


function verModalNovedadAgregarComentario(per_mov_planificacion_id, per_persona_id, fecha)
{
    var form = $("#form_agregar_comentario");
    $.ajax(
            {
                type: 'GET',
                url: "ajax/modulos/per_mov_movimiento_calendario/modal_per_mov_movimiento_calendario_agregar_comentario.php",
                data: form.serialize() + "&per_mov_planificacion_id=" + per_mov_planificacion_id + "&hdn_per_persona_id=" + per_persona_id + "&hdn_fecha=" + fecha,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('.div_modal').html(img_loading);
                    $('.div_modal').dialog({
                        width: '60%',
                        height: 350,
                        modal: true,
                        title: 'Agregar Comentario',
                        close: function () {
                        }
                    });
                },
                success: function (data)
                {
                    $('.div_modal').html(data);

                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnPerMovMovimientoCalendarioUnoFechaNovedadConfirmar()
{
    $('.db_context .db_context_content .datos .uno.confirmar-novedad').unbind();
    $('.db_context .db_context_content .datos .uno.confirmar-novedad').click(function ()
    {
        var per_mov_planificacion_id = $(this).parents('.datos').attr('per_mov_planificacion_id');
        var per_persona_id = $(this).parents('.datos').attr('persona_id');
        setPerMovPlanificacionConfirmarNovedad(per_mov_planificacion_id, per_persona_id);
    });
}


function setPerMovPlanificacionConfirmarNovedad(per_mov_planificacion_id, per_persona_id)
{
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_planificacion_novedad_confirmar.php",
                data: "per_mov_planificacion_id=" + per_mov_planificacion_id,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    //$(".uno.eliminar-novedad-parcial").html(img_loading);
                },
                success: function (data)
                {
                    //refreshPerMovMovimientoCalendarioUnoFecha(fecha, per_persona_id);
                    refreshAdmUno('per_mov_movimiento_calendario', per_persona_id);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnEditarPerMovMovimiento()
{
    $(".datos.ficha #tab_movimiento .editar.per-movimiento").unbind();
    $(".datos.ficha #tab_movimiento .editar.per-movimiento").click(function () {

        var per_persona_id = $("#hdn_per_persona_id").val();//$(this).parents(".uno-movimiento").attr("per_persona_id");
        var per_movimiento_id = $(this).parents(".uno-movimiento").attr("per_movimiento_id");
        verModalEditarPerMovMovimientoCalendario(per_persona_id, per_movimiento_id);
    });
}



function verModalEditarPerMovMovimientoCalendario(per_persona_id, per_movimiento_id)
{
    $.ajax(
            {
                type: 'GET',
                url: "ajax/modulos/per_mov_movimiento_calendario/modal_editar_per_mov_movimiento_calendario.php",
                data: "per_persona_id=" + per_persona_id + "&per_movimiento_id=" + per_movimiento_id,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('.div_modal_modal').html(img_loading);
                    $('.div_modal_modal').dialog({
                        width: '60%',
                        height: 350,
                        modal: true,
                        title: 'Editar Movimiento',
                        close: function () {
                        }
                    });
                },
                success: function (data)
                {
                    $('.div_modal_modal').html(data);

                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnEditarPerMovMovimientoGuardar()
{
    $(".div-modal-editar-movimiento .botonera #btn_movimiento_guardar").unbind();
    $(".div-modal-editar-movimiento .botonera #btn_movimiento_guardar").click(function (e)
    {
        setPerMovMovimientoEditarGuardar();
    });
}


function setPerMovMovimientoEditarGuardar()
{
    var form = $("#form_editar_movimiento");
    var hdn_per_persona_id = $("#hdn_per_persona_id").val();
    var hdn_fecha_ficha = $("#hdn_fecha").val();

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_editar_guardar.php",
                data: form.serialize() + "&hdn_per_persona_id=" + hdn_per_persona_id + "&hdn_fecha_ficha=" + hdn_fecha_ficha,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal_modal .botonera").hide();
                    $(".div_modal_modal .textbox").removeClass('input-error');
                    $(".div_modal_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;
                    if (arr["error"])
                    {
                        $(".div_modal_modal .botonera").show();
                        $.each(arr, function (i, item)
                        {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal_modal").dialog("close");
                        var hdn_per_persona_id = $("#hdn_per_persona_id").val();
                        //el hdp_per_persona_id se setea al abrir el modal de editar movimiento
                        refresh_div_bloque_movimientos(hdn_per_persona_id);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}



/*************************************************/
function setClickBtnAltaPerMovMovimientoEntrada()
{
    $(".datos.ficha #tab_movimiento .agregar-per-movimiento-entrada").unbind();
    $(".datos.ficha #tab_movimiento .agregar-per-movimiento-entrada").click(function () {
        verModarAltaPerMovMovimientoEntrada();
    });
}


function verModarAltaPerMovMovimientoEntrada()
{
    var hdn_fecha_ficha = $("#hdn_fecha").val();
    var hdn_per_persona_id = $("#hdn_per_persona_id").val();

    $.ajax(
            {
                type: 'GET',
                url: "ajax/modulos/per_mov_movimiento_calendario/modal_alta_per_mov_movimiento_entrada.php",
                data: "hdn_per_persona_id=" + hdn_per_persona_id + "&hdn_fecha=" + hdn_fecha_ficha,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('.div_modal_modal').html(img_loading);
                    $('.div_modal_modal').dialog({
                        width: '60%',
                        height: 350,
                        modal: true,
                        title: 'Alta Movimiento Entrada',
                        close: function () {
                        }
                    });
                },
                success: function (data)
                {
                    $('.div_modal_modal').html(data);
                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnAltaPerMovMovimientoEntradaGuardar()
{
    $(".botonera #btn_movimiento_guardar").unbind();
    $(".botonera #btn_movimiento_guardar").click(function (e)
    {
        setPerMovMovimientoEntradaGuardar();
    });
}


function setPerMovMovimientoEntradaGuardar()
{
    var form = $("#form_alta_movimiento_entrada");
    var hdn_fecha_ficha = $("#hdn_fecha").val();
    var hdn_per_persona_id = $("#hdn_per_persona_id").val();

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_entrada_alta_guardar.php",
                data: form.serialize() + "&hdn_per_persona_id=" + hdn_per_persona_id + "&hdn_fecha=" + hdn_fecha_ficha,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal_modal .botonera").hide();
                    $(".div_modal_modal .textbox").removeClass('input-error');
                    $(".div_modal_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;
                    if (arr["error"])
                    {
                        $(".div_modal_modal .botonera").show();
                        $.each(arr, function (i, item)
                        {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        $(".div_modal_modal").dialog("close");
                        var hdn_per_persona_id = $("#hdn_per_persona_id").val();
                        //alert(hdn_per_persona_id);

                        //el hdp_per_persona_id se setea al abrir el modal de editar movimiento
                        refresh_div_bloque_movimientos(hdn_per_persona_id);
                        //refreshPerMovMovimientoCalendarioUnoFecha(hdn_fecha_ficha, hdn_per_persona_id);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}



function setClickBtnAltaPerMovMovimientoSalida()
{
    $(".datos.ficha #tab_movimiento .agregar-per-movimiento-salida").unbind();
    $(".datos.ficha #tab_movimiento .agregar-per-movimiento-salida").click(function () {
        var per_movimiento_id = $(this).parents(".uno-movimiento").attr("per_movimiento_id");
        verModarAltaPerMovMovimientoSalida(per_movimiento_id);
    });
}


function verModarAltaPerMovMovimientoSalida(per_movimiento_id)
{
    var hdn_fecha_ficha = $("#hdn_fecha").val();
    var hdn_per_persona_id = $("#hdn_per_persona_id").val();
    $.ajax(
            {
                type: 'GET',
                url: "ajax/modulos/per_mov_movimiento_calendario/modal_alta_per_mov_movimiento_salida.php",
                data: "per_movimiento_id=" + per_movimiento_id + "&hdn_per_persona_id=" + hdn_per_persona_id + "&hdn_fecha=" + hdn_fecha_ficha,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('.div_modal_modal').html(img_loading);
                    $('.div_modal_modal').dialog({
                        width: '60%',
                        height: 350,
                        modal: true,
                        title: 'Alta Movimiento Salida',
                        close: function () {
                        }
                    });
                },
                success: function (data)
                {
                    $('.div_modal_modal').html(data);
                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setClickBtnAltaPerMovMovimientoSalidaGuardar()
{
    $(".div-modal-alta-movimiento-salida .botonera #btn_movimiento_guardar").unbind();
    $(".div-modal-alta-movimiento-salida .botonera #btn_movimiento_guardar").click(function (e)
    {
        setPerMovMovimientoSalidaGuardar();
    });
}


function setPerMovMovimientoSalidaGuardar()
{
    var form = $("#form_alta_movimiento_salida");
    var hdn_fecha_ficha = $("#hdn_fecha").val();
    var hdn_per_persona_id = $("#hdn_per_persona_id").val();

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/set_per_mov_movimiento_salida_alta_guardar.php",
                data: form.serialize() + "&hdn_per_persona_id=" + hdn_per_persona_id + "&hdn_fecha=" + hdn_fecha_ficha,
                dataType: "json",
                beforeSend: function (objeto)
                {
                    $(".div_modal_modal .botonera").hide();
                    $(".div_modal_modal .textbox").removeClass('input-error');
                    $(".div_modal_modal .label-error").html("");
                },
                success: function (data)
                {
                    var arr = data;
                    if (arr["error"])
                    {
                        $(".div_modal_modal .botonera").show();
                        $.each(arr, function (i, item)
                        {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else
                    {
                        var hdn_per_persona_id = $("#hdn_per_persona_id").val();
                        //alert(hdn_per_persona_id);

                        //el hdp_per_persona_id se setea al abrir el modal de editar movimiento
                        //refreshPerMovMovimientoCalendarioUnoFecha(hdn_fecha_ficha, hdn_per_persona_id);
                        refresh_div_bloque_movimientos(hdn_per_persona_id);
                        $(".div_modal_modal").dialog("close");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}



/*******************************************/






function refresh_div_bloque_movimientos(per_persona_id)
{
    var hdn_fecha = $("#hdn_fecha").val();
    //alert(hdn_fecha);
    $.ajax({
        type: "POST",
        url: "ajax/modulos/per_mov_movimiento_calendario/bloque_per_mov_movimientos.php",
        data: "per_persona_id=" + per_persona_id + "&hdn_fecha=" + hdn_fecha,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $(".div_bloque_per_mov_movimientos").html(img_loading);
        },
        success: function (data)
        {
            $(".div_bloque_per_mov_movimientos").html(data);
            setInitPerMovMovimientoCalendario();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickBtnAgregarPerMovMovimientoCalendario()
{
    $(".datos.ficha #tab_movimiento .agregar.per-movimiento").unbind();
    $(".datos.ficha #tab_movimiento .agregar.per-movimiento").click(function () {

        var per_persona_id = $("#hdn_per_persona_id").val();
        var per_movimiento_id = 0;
        verModalEditarPerMovMovimientoCalendario(per_persona_id, per_movimiento_id);
    });
}



function setChangeCmbGralNovedadAltaNovedad()
{
    $("#cmb_gral_novedad_id").unbind();
    $("#cmb_gral_novedad_id").change(function ()
    {
        var gral_novedad_id = $("#cmb_gral_novedad_id").val();
        //alert( gral_novedad_id.length);
        if (!gral_novedad_id || gral_novedad_id.length === 0)
        {
            $("#div_par_gral_novedad_motivo").hide();
            $("#div_par_pln_jornada").hide();
        } else
        {
            $("#div_par_gral_novedad_motivo").show();
            $("#div_par_pln_jornada").show();

            refresh_div_par_gral_novedad_motivo(gral_novedad_id);
            refresh_div_par_pln_jornada_alta_novedad(gral_novedad_id);
        }
    });
}



function refresh_div_par_pln_jornada_alta_novedad(gral_novedad_id)
{
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/refresh_div_par_pln_jornada_alta_novedad.php",
                data: "gral_novedad_id=" + gral_novedad_id,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    $("#div_par_pln_jornada").html(img_loading);
                },
                success: function (data)
                {
                    $("#div_par_pln_jornada").html(data);
                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}


function refresh_div_par_gral_novedad_motivo(gral_novedad_id)
{
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/refresh_div_par_gral_novedad_motivo.php",
                data: "gral_novedad_id=" + gral_novedad_id,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    $("#div_par_gral_novedad_motivo").html(img_loading);
                },
                success: function (data)
                {

                    $("#div_par_gral_novedad_motivo").html(data);
                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setChangeCmbGralNovedadMotivoAltaNovedad()
{
    $("#cmb_gral_novedad_motivo_id").unbind();
    $("#cmb_gral_novedad_motivo_id").change(function ()
    {
        var gral_novedad_motivo_id = $("#cmb_gral_novedad_motivo_id").val();
        //alert(gral_novedad_motivo_id);
        if (!gral_novedad_motivo_id || gral_novedad_motivo_id.length === 0)
        {
            $("#div_par_gral_novedad_motivo_extendido").hide();
        } else
        {
            $("#div_par_gral_novedad_motivo_extendido").show();
            refresh_div_par_gral_novedad_motivo_extendido(gral_novedad_motivo_id);
        }
    });
}


function refresh_div_par_gral_novedad_motivo_extendido(gral_novedad_motivo_id)
{
    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/refresh_div_par_gral_novedad_motivo_extendido.php",
                data: "gral_novedad_motivo_id=" + gral_novedad_motivo_id,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    $("#div_par_gral_novedad_motivo_extendido").html(img_loading);
                },
                success: function (data)
                {
                    $("#div_par_gral_novedad_motivo_extendido").html(data);
                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
}


function setChangeCmbPlnJornadaAltaNovedad()
{
    $("#cmb_pln_jornada_id").unbind();
    $("#cmb_pln_jornada_id").change(function ()
    {
        var pln_jornada_id = $("#cmb_pln_jornada_id").val();
        if (!pln_jornada_id || pln_jornada_id.length === 0)
        {
            $("#div_par_pln_jornada_tramos").hide();
        } else
        {
            $("#div_par_pln_jornada_tramos").show();
            refresh_div_par_pln_jornada_tramos(pln_jornada_id);
        }
    });
}


function refresh_div_par_pln_jornada_tramos(pln_jornada_id)
{
    var per_mov_planificacion_id = $("#hdn_per_mov_planificacion_id").val();

    $.ajax(
            {
                type: "POST",
                url: "ajax/modulos/per_mov_movimiento_calendario/refresh_div_par_pln_jornada_tramos.php",
                data: "per_mov_planificacion_id=" + per_mov_planificacion_id + "&pln_jornada_id=" + pln_jornada_id,
                dataType: "html",
                beforeSend: function (objeto)
                {
                    $("#div_par_pln_jornada_tramos").html(img_loading);
                },
                success: function (data)
                {
                    $("#div_par_pln_jornada_tramos").html(data);
                    setInitPerMovMovimientoCalendario();
                    setInit();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
}


function setClickChkDiaUno()
{
    $('.div_modal .dia-semana .chk_gral_dia').unbind();
    $('.div_modal .dia-semana .chk_gral_dia').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('.dia-semana').addClass('sel');
        } else {
            $(this).parents('.dia-semana').removeClass('sel');
        }
    });
}


function setCheckBoxCalendario()
{
    return;
    // no se usa momentaneamente, era para ver la version minimizada de los divs

    $("#check_tipo_calendario").unbind();
    $("#check_tipo_calendario").click(function ()
    {
        if ($("#check_tipo_calendario").is(':checked'))
        {
            //alert("check Checked");

            $(".top-fecha").hide();
            $(".gral-novedad .gral-novedad-descripcion").html('T');
            $(".per-movimiento-horas").hide();

            $("#listado_adm_per_mov_movimiento_calendario .col.dia").attr('width', '20');
        } else
        {
            //alert("check Unchecked");

            $(".top-fecha").show();
            $(".per-movimiento-horas").show();

            $("#listado_adm_per_mov_movimiento_calendario .col.dia").attr('width', '60');
        }
    });
}

function setClickChkPersonasAll() {
    $('#listado_adm_per_mov_movimiento_calendario #chk_personas_all').unbind();
    $('#listado_adm_per_mov_movimiento_calendario #chk_personas_all').click(function () {
        if ($(this).is(':checked')) {
            $("input[type=checkbox]").attr('checked', true);
        } else {
            $("input[type=checkbox]").attr('checked', false);
        }
    });
}

/* Dbsuggest Masivo Vincular Turno */
function setClickDbcontextMasivoAgregarNovedad()
{
    $(".adm_botones_accion .db_context_content .uno.masivo.agregar-novedad").unbind();
    $(".adm_botones_accion .db_context_content .uno.masivo.agregar-novedad").click(function ()
    {
        verModalMasivoAgregarNovedad();
    });
}



function verModalMasivoAgregarNovedad()
{
    var tipo_accion = "alta_novedad_total_masiva";
    var form_datos = $("#form_datos");
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/per_mov_movimiento_calendario/modal_per_mov_movimiento_calendario_uno_fecha_alta_novedad.php",
        data: form_datos.serialize() + "&tipo_accion=" + tipo_accion,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 900,
                height: 600,
                modal: true,
                title: 'Agregar Novedad Masiva',
                close: function ()
                {
                    var pag = $("#hdn_pag_actual").val();
                    refreshAdmAll('per_mov_movimiento_calendario', pag);
                }
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitPerMovMovimientoCalendario();
            setInit();
            refreshDiasSemana();
        },
        error: function (objeto, quepaso, otroobj)
        {
        }
    });
}



function refreshDiasSemana()
{
    var txt_fecha_desde = $("#hdn_fecha").val();//en novedad masiva puede NO ser el hidden que se guarda al abrir el modal
    var txt_fecha_hasta = $("#txt_fecha_hasta").val();
    setDeterminarDiaDeFechaDesdeHasta(txt_fecha_desde, txt_fecha_hasta);
}


function setDeterminarDiaDeFechaDesdeHasta(fecha_desde, fecha_hasta) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/per_mov_movimiento_calendario/get_determinar_dia_fecha_desde_hasta.php",
        data: "fecha_desde=" + fecha_desde + "&fecha_hasta=" + fecha_hasta,
        dataType: "json",
        beforeSend: function (objeto)
        {
        },
        success: function (data)
        {
            var arr = data;

            $(".dia-semana").removeClass("sel");
            $(".chk_gral_dia").attr("checked", false);

            if (arr != null)
            {
                $.each(arr, function (i, item)
                {
                    $("#chk_gral_dia_" + i).parents(".dia-semana").addClass("sel");
                    $("#chk_gral_dia_" + i).attr("checked", "checked");
                });
            }
        },
        error: function (objeto, quepaso, otroobj)
        {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setVarHiddenFecha()
{
    var txt_fecha_desde = $("#txt_fecha_desde").val();
    var arr_fecha = txt_fecha_desde.split('/');
    var fecha_desde_aux = arr_fecha[2] + "-" + arr_fecha[1] + "-" + arr_fecha[0];

    //alert(fecha_desde_aux);
    $("#hdn_fecha").val(fecha_desde_aux);
}