// archivo js del modulo 'os_orden_servicio'
/**
 * 
 * @param {type} $
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 08/10/2016
 * @modificado_por Esteban Martinez
 * @modificado 10/10/2016
 * @modificado 12/10/2016
 * @modificado 14/10/2016
 * @modificado 04/11/2016
 * @modificado 04/11/2016
 * @modificado 07/11/2016
 * @modificado 08/11/2016
 * @modificado 14/11/2016
 */

$(function($)
{
    setInitOsOrdenServicio();
});


function setInitOsOrdenServicio()
{
    setClickOsAgregar();
    setClickOsEditar();
    setChangeCmbOsTipo();
    setClickOsFicha();
    
    // filtros
    setChangeCmbFiltrosGralEmpresa();
    setChangeCmbFiltrosCoCentroOperativo();
    setChangeCmbFiltrosGralArea();
    setChangeCmbFiltrosGralSector();
    setChangeCmbFiltrosGralPuesto();
    setChangeCmbFiltrosPerPersona();
    setChangeCmbFiltrosOsTipo();
    setChangeCmbFiltrosOsEstado();
    setChangeCmbFiltrosOsPrioridad();
    setChangeCmbFiltrosOsActivo();
    setChangeCmbFiltrosOsResoluble();
    setChangeCmbFiltrosOsTipoResolucion();
    setChangeCmbFiltrosCantidad();
    setChangeMovFiltrosFechaDesde();
    setChangeMovFiltrosFechaHasta();
    setClickBtnBuscar();
        
    setClickBtnCambiarEstadoNotificado();
    setClickBtnCambiarEstadoNotificadoConDescargo();
    setClickBtnCambiarEstadoArchivo();
    setClickBtnRegistrarResolucion();
    setClickBtnCambiarEstadoResolucionNotificada();
    
    setChangeCmbOsTipoResolucion();
    setKeyupTxtDiasSuspension();
}




/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez, Pablo Rosen
 * @creado 08/10/2016
 */
function setClickOsAgregar()
{
    $("#form_buscador_top .boton.agregar").unbind();
    $("#form_buscador_top .boton.agregar").click(function(e)
    {
        var os_id = 0;
        verModalOsAgregar(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 10/10/2016
 */
function verModalOsAgregar(os_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_agregar.php",
        data: "os_id=" + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog(
            {
                width: "60%",
                height: 650,
                modal: true,
                title: "Agregar Orden Servicio",
                close: function()
                {
                    //$('.div_modal_modal').dialog('destroy');	
                    //refreshAdmUno('rcl_reclamo_gestion', reclamo_id);
                    refreshAdmAll("os_orden_servicio_gestion", 1);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            //setInitDbSuggest();
            //setInitDbSuggestBoton();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
            //alert("errorx "+ objeto.status);
        }
    });	
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 10/10/2016
 */
function setChangeCmbOsTipo()
{
    $(".datos.os.agregar #cmb_os_tipo_id").unbind();
    $(".datos.os.agregar #cmb_os_tipo_id").change(function(e)
    {
        var os_tipo_id = $(this).val();
        
        getJsonOsOrdenServicioPlantilla(os_tipo_id);
    });    
}


/**
 * 
 * @param {type} os_tipo_id
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 10/10/2016
 */
function getJsonOsOrdenServicioPlantilla(os_tipo_id)
{
    $.ajax(
    {
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/get_json_plantilla_por_os_tipo.php",
        data: "os_tipo_id=" + os_tipo_id,
        dataType: "json",
        beforeSend: function(objeto)
        {
        },
        success: function(data)
        {
            var arr = data;
            $("#txa_notificacion").val(arr["plantilla"]);
            setInitOsOrdenServicio();
            setInit();
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
            //alert("errorx "+ objeto.status);
        }
    });	
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 10/10/2016
 */
function setClickOsEditar()
{
    $("#listado_adm_os_orden_servicio_gestion .adm_botones_accion.os_editar").unbind();
    $("#listado_adm_os_orden_servicio_gestion .adm_botones_accion.os_editar").click(function(e)
    {
        var os_id = $(this).parents(".uno").attr("identificador");
        verModalOsAgregar(os_id);
    });
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 12/10/2016
 */
function setClickOsFicha()
{
    $("#listado_adm_os_orden_servicio_gestion .adm_botones_accion.ficha").unbind();
    $("#listado_adm_os_orden_servicio_gestion .adm_botones_accion.ficha").click(function(e)
    {
        var os_id = $(this).parents(".uno").attr("identificador");
	verModalOsFicha(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 12/10/2016
 */
function verModalOsFicha(os_id)
{
    $.ajax(
    {
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_gestion_ficha.php",
        data: "os_id=" + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: "Ficha de la Orden de Servicio",
                close: function(){									
                },
                hide: "fade",
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            //setInitDbSuggest();
            //setInitDbSuggestBoton();
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
                //alert("errorx "+ objeto.status);
        }
    });
}


/**
 * 
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 03/02/2018
 */
function setChangeCmbFiltrosGralEmpresa()
{
    $("#cmb_filtro_gral_empresa_id").unbind();
    $("#cmb_filtro_gral_empresa_id").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosCoCentroOperativo()
{
    $("#cmb_filtro_co_centro_operativo_id").unbind();
    $("#cmb_filtro_co_centro_operativo_id").change(function () {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosGralArea()
{
    $("#cmb_filtro_gral_area_id").unbind();
    $("#cmb_filtro_gral_area_id").change(function () {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosGralSector()
{
    $("#cmb_filtro_gral_sector_id").unbind();
    $("#cmb_filtro_gral_sector_id").change(function () {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosGralPuesto()
{
    $("#cmb_filtro_gral_puesto_id").unbind();
    $("#cmb_filtro_gral_puesto_id").change(function () {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/10/2016
 */
function setChangeCmbFiltrosPerPersona()
{
    $("#cmb_filtro_per_persona_id").unbind();
    $("#cmb_filtro_per_persona_id").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/10/2016
 */
function setChangeCmbFiltrosOsTipo()
{
    $("#cmb_filtro_os_tipo_id").unbind();
    $("#cmb_filtro_os_tipo_id").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/10/2016
 */
function setChangeCmbFiltrosOsEstado()
{
    $("#cmb_filtro_os_tipo_estado_id").unbind();
    $("#cmb_filtro_os_tipo_estado_id").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 04/11/2016
 */
function setChangeCmbFiltrosOsPrioridad()
{
    $("#cmb_filtro_os_prioridad_id").unbind();
    $("#cmb_filtro_os_prioridad_id").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * 
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 16/11/2016
 */
function setChangeCmbFiltrosOsActivo()
{
    $("#cmb_filtro_activo").unbind();
    $("#cmb_filtro_activo").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 04/11/2016
 */
function setChangeCmbFiltrosOsResoluble()
{
    $("#cmb_filtro_resoluble").unbind();
    $("#cmb_filtro_resoluble").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @credo 14/11/2016
 */
function setChangeCmbFiltrosOsTipoResolucion()
{
    $("#cmb_filtro_tipo_resolucion_id").unbind();
    $("#cmb_filtro_tipo_resolucion_id").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @credo 14/11/2016
 */
function setChangeCmbFiltrosCantidad()
{
    $("#cmb_filtro_cantidad_dias_limite_resolucion").unbind();
    $("#cmb_filtro_cantidad_dias_limite_resolucion").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}

/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/10/2016
 */
function setChangeMovFiltrosFechaDesde()
{
    $("#txt_filtro_fecha_desde").unbind();
    $("#txt_filtro_fecha_desde").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 14/10/2016
 */
function setChangeMovFiltrosFechaHasta()
{
    $("#txt_filtro_fecha_hasta").unbind();
    $("#txt_filtro_fecha_hasta").change(function()
    {
        //setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


function setClickBtnBuscar()
{
    $("#btn_buscar").unbind();
    $("#btn_buscar").click(function (e)
    {
        setAdmBuscadorTop("os_orden_servicio_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 28/10/2016
 */
function setClickBtnCambiarEstadoNotificado()
{
    $(".uno.estado.notificado").unbind();
    $(".uno.estado.notificado").click(function(e)
    {
        var os_id = $(this).parents(".datos").attr("orden_servicio_id");
        verModalCambiarEstadoNotificado(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 28/10/2016
 */
function verModalCambiarEstadoNotificado(os_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_cambiar_estado_notificado.php",
        data: 'os_id=' + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 750,
                height: 500,
                modal: true,
                title: "Registrar Notificacion",
                close: function(){
                    refreshAdmUno("os_orden_servicio_gestion", os_id);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
                //alert("errorx "+ objeto.status);
        }
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 02/11/2016
 */
function setClickBtnCambiarEstadoNotificadoConDescargo()
{
    $(".uno.estado.notificado_con_descargo").unbind();
    $(".uno.estado.notificado_con_descargo").click(function(e)
    {
        var os_id = $(this).parents(".datos").attr("orden_servicio_id");
        
        verModalCambiarEstadoNotificadoConDescargo(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 02/11/2016
 */
function verModalCambiarEstadoNotificadoConDescargo(os_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_cambiar_estado_notificado_con_descargo.php",
        data: "os_id=" + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 750,
                height: 500,
                modal: true,
                title: "Registrar Descargo",
                close: function(){
                    refreshAdmUno("os_orden_servicio_gestion", os_id);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
                //alert("errorx "+ objeto.status);
        }
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 14/11/2016
 */
function setClickBtnCambiarEstadoArchivo()
{
    $(".uno.estado.archivo").unbind();
    $(".uno.estado.archivo").click(function(e)
    {
        var os_id = $(this).parents(".datos").attr("orden_servicio_id");
        verModalCambiarEstadoArchivo(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 14/11/2016
 */
function verModalCambiarEstadoArchivo(os_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_cambiar_estado_archivo.php",
        data: "os_id=" + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 750,
                height: 500,
                modal: true,
                title: "Registrar Archivo",
                close: function(){
                    refreshAdmUno("os_orden_servicio_gestion", os_id);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
                //alert("errorx "+ objeto.status);
        }
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 07/11/2016
 */
function setClickBtnRegistrarResolucion()
{
    $(".uno.resolucion").unbind();
    $(".uno.resolucion").click(function(e)
    {
        var os_id = $(this).parents(".datos").attr("orden_servicio_id");
        
        verModalRegistrarResolucion(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 07/11/2016
 */
function verModalRegistrarResolucion(os_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_registrar_resolucion.php",
        data: "os_id=" + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 750,
                height: 700,
                modal: true,
                title: "Registrar Resolucion",
                close: function(){
                    refreshAdmUno("os_orden_servicio_gestion", os_id);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
                //alert("errorx "+ objeto.status);
        }
    });
}

/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 08/11/2016
 */
function setChangeCmbOsTipoResolucion()
{
    $("#cmb_tipo_resolucion_id").unbind();
    $("#cmb_tipo_resolucion_id").change(function(e)
    {
        //var os_tipo_resolucion_id = $(this).val();
        //refresh_div_bloque_datos_tipo_resolucion(os_tipo_resolucion_id);
        changeCmbOsTipoResolucion();
    });    
}



function changeCmbOsTipoResolucion()
{
    //var os_tipo_resolucion_id = $(this).val();
    var os_tipo_resolucion_id = $("#cmb_tipo_resolucion_id").val();
    refresh_div_bloque_datos_tipo_resolucion(os_tipo_resolucion_id);   
}


/**
 * 
 * @param {type} os_tipo_resolucion_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 08/11/2016
 */
function refresh_div_bloque_datos_tipo_resolucion(os_tipo_resolucion_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/bloque_datos_tipo_resolucion.php",
        data: "os_tipo_resolucion_id=" + os_tipo_resolucion_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
        },
        success: function(data)
        {
            $(".div_bloque_datos_tipo_resolucion").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
            //alert("errorx "+ objeto.status);
        }
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Pablo Rosen
 * @creado 08/11/2016
 */
function setKeyupTxtDiasSuspension()
{
    $(".div_modal #txt_dias").unbind();
    $(".div_modal #txt_dias").keyup(function(e)
    {
        getJsonOsTipoResolucionCalculoFechaFinSuspension();
    });
}


/**
 * Envia la fecha de inicio y los dias de suspension y calcula la fecha de fin y de reintegro
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 08/11/2016
 */
function getJsonOsTipoResolucionCalculoFechaFinSuspension()
{
    var fecha_inicio    = $("#txt_fecha_inicio").val();
    var dias_suspension = $("#txt_dias").val();
    
    $.ajax(
    {
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/get_json_os_tipo_resolucion_calculo_fecha_fin_suspension.php",
        data: "fecha_inicio=" + fecha_inicio + "&dias_suspension=" + dias_suspension,
        dataType: "json",
        beforeSend: function(objeto)
        {
        },
        success: function(data)
        {
            var arr = data;
            //$("#txt_fecha_fin").val(arr["fecha_fin"]);
            //$("#txt_fecha_reintegro").val(arr["fecha_reintegro"]);
            $(".suspension_fecha_fin").html(arr["fecha_fin"]);
            $(".suspension_fecha_reintegro").html(arr["fecha_reintegro"]);
            setInitOsOrdenServicio();
            setInit();
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
            //alert("errorx "+ objeto.status);
        }
    });	
}

/**
 * 
 * @returns {undefined}
 * @creado_por Pablo Rosen
 * @creado 13/04/2023
 */
function setClickBtnCambiarEstadoResolucionNotificada()
{
    $(".uno.estado.resuelto_notificado").unbind();
    $(".uno.estado.resuelto_notificado").click(function(e)
    {
        var os_id = $(this).parents(".datos").attr("orden_servicio_id");
        verModalCambiarEstadoResolucionNotificada(os_id);
    });
}


/**
 * 
 * @param {type} os_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 14/11/2016
 */
function verModalCambiarEstadoResolucionNotificada(os_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_cambiar_estado_resuelto_notificado.php",
        data: "os_id=" + os_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 750,
                height: 500,
                modal: true,
                title: "Registrar Notificacion de Resolucion",
                close: function(){
                    refreshAdmUno("os_orden_servicio_gestion", os_id);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitOsOrdenServicio();
            setInit();
            
            setInitAccionesFormulario("div_modal", "");
        },
        error: function(objeto, quepaso, otroobj){
                //alert("errorx "+ objeto.status);
        }
    });
}