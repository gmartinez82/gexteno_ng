$(function ($)
{
    setInitPrdOrdenTrabajoGestion();
});


function setInitPrdOrdenTrabajoGestion()
{
    setChangeCmbPrdProcesoProductivo();
    
    setClickBtnComenzarOperacionRefresh();
    setClickBtnComenzarOrdenTrabajoOperacion();
    setClickBtnFinalizarOrdenTrabajoOperacion();
    setClickBtnVerFichaOrdenTrabajoOperacion();
}



function setChangeCmbPrdProcesoProductivo()
{
    $('#cmb_prd_proceso_productivo_id').unbind();
    $('#cmb_prd_proceso_productivo_id').change(function ()
    {
        var prd_proceso_productivo_id = $(this).val();
        //if (prd_proceso_productivo_id != '')
        //{
            refreshDivCiclosProcesoProductivo(prd_proceso_productivo_id);
        //}
    });
}


function refreshDivCiclosProcesoProductivo(prd_proceso_productivo_id)
{
    var prd_orden_trabajo_id = $('#form_orden_trabajo_configuracion').attr('prd_orden_trabajo_id');
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/prd_orden_trabajo_gestion/refresh_modal_orden_trabajo_configuracion_ciclos_productivos.php',
        data: 'prd_proceso_productivo_id=' + prd_proceso_productivo_id + '&prd_orden_trabajo_id=' + prd_orden_trabajo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.ciclos-proceso-productivo').html(img_loading);
        },
        success: function (data) {
            $('.ciclos-proceso-productivo').html(data);
            
            setInitPrdOrdenTrabajoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/***************************************************************************************************************************/


function setClickBtnComenzarOperacionRefresh()
{
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .btn_refresh").unbind();
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .btn_refresh").click(function (e) {
        var prd_orden_trabajo_operacion_id = $(this).parents(".operacion").attr("prd_orden_trabajo_operacion_id");
        //alert('prd_orden_trabajo_operacion_id: ' + prd_orden_trabajo_operacion_id);
        refreshOrdenTrabajoOperacionBloque(prd_orden_trabajo_operacion_id);
    });
}


function refreshOrdenTrabajoOperacionBloque(prd_orden_trabajo_operacion_id)
{
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/prd_orden_trabajo_gestion/prd_orden_trabajo_edicion_bloque_operacion_refresh.php',
        data: 'prd_orden_trabajo_operacion_id=' + prd_orden_trabajo_operacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#operacion_outer_' + prd_orden_trabajo_operacion_id).html(img_loading);
        },
        success: function (data) {
            $('#operacion_outer_' + prd_orden_trabajo_operacion_id).html(data);
            
            setInitPrdOrdenTrabajoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnComenzarOrdenTrabajoOperacion()
{
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .btn_comenzar").unbind();
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .btn_comenzar").click(function (e) {
        var prd_orden_trabajo_operacion_id = $(this).parents(".operacion").attr("prd_orden_trabajo_operacion_id");
        var prd_orden_trabajo_operacion_tipo_estado_codigo = $(this).attr("prd_orden_trabajo_operacion_tipo_estado_codigo");
        //alert('prd_orden_trabajo_operacion_id: ' + prd_orden_trabajo_operacion_id + ' - prd_orden_trabajo_operacion_codigo: ' + prd_orden_trabajo_operacion_codigo);
        setOrdenTrabajoOperacionCambiarEstado(prd_orden_trabajo_operacion_id, prd_orden_trabajo_operacion_tipo_estado_codigo)
    });
}

function setClickBtnFinalizarOrdenTrabajoOperacion()
{
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .btn_finalizar").unbind();
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .btn_finalizar").click(function (e) {
        var prd_orden_trabajo_operacion_id = $(this).parents(".operacion").attr("prd_orden_trabajo_operacion_id");
        var prd_orden_trabajo_operacion_tipo_estado_codigo = $(this).attr("prd_orden_trabajo_operacion_tipo_estado_codigo");
        setOrdenTrabajoOperacionCambiarEstado(prd_orden_trabajo_operacion_id, prd_orden_trabajo_operacion_tipo_estado_codigo)
    });
}

function setOrdenTrabajoOperacionCambiarEstado(prd_orden_trabajo_operacion_id, prd_orden_trabajo_operacion_tipo_estado_codigo)
{
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/prd_orden_trabajo_gestion/set_prd_orden_trabajo_edicion_estado_operacion.php',
        data: 'prd_orden_trabajo_operacion_id=' + prd_orden_trabajo_operacion_id + '&prd_orden_trabajo_operacion_tipo_estado_codigo=' + prd_orden_trabajo_operacion_tipo_estado_codigo,
        dataType: "html",
        beforeSend: function (objeto) {
            $('#operacion_outer_' + prd_orden_trabajo_operacion_id).html(img_loading);
        },
        success: function (data) {
            $('#operacion_outer_' + prd_orden_trabajo_operacion_id).html(data);
            
            setInitPrdOrdenTrabajoGestion();
            setInit();
            refreshOrdenTrabajoOperacionBloque(prd_orden_trabajo_operacion_id);
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnVerFichaOrdenTrabajoOperacion()
{
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .adm-ver-ficha").unbind();
    $(".ot-edicion-ciclos .operacions .operacion-outer .operacion .botonera .adm-ver-ficha").click(function (e) {
        var prd_orden_trabajo_operacion_id = $(this).parents(".operacion").attr("prd_orden_trabajo_operacion_id");
        verModalFichaOrdenTrabajoOperacion(prd_orden_trabajo_operacion_id);
    });
}


function verModalFichaOrdenTrabajoOperacion(prd_orden_trabajo_operacion_id)
{
    $.ajax({
        type: 'GET',
        url: 'ajax/modulos/prd_orden_trabajo_gestion/modal_prd_orden_trabajo_operacion_ficha.php',
        data: 'prd_orden_trabajo_operacion_id=' + prd_orden_trabajo_operacion_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 600,
                modal: true,
                title: 'Ficha Orden Trabajo Operación',
                close: function () {
                    
                },
                hide: 'fade',
            });
            //$('.div_modal').html(img_loading);
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            
            setInitPrdOrdenTrabajoGestion();
            setInit();
            
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}