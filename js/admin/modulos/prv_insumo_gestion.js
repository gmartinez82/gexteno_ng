// archivo js del modulo 'prv_insumo'
$(function($)
{
     setInitPrvInsumoGestion();
});

function setInitPrvInsumoGestion()
{
    setClickPrvInsumoGestionFicha();
    setChangeCmbFiltroProveedor();
    setChangeCmbFiltroMarca();
    setChangeCmbFiltroMarcaPieza();
    
    setClickBtnVincularInsInsumo();
    setClickBtnDesvincularInsInsumo();
}


function setClickPrvInsumoGestionFicha()
{
    
    $("#listado_adm_prv_insumo_gestion .adm_botones_accion.ver-ficha-prv-insumo").unbind();
    $("#listado_adm_prv_insumo_gestion .adm_botones_accion.ver-ficha-prv-insumo").click(function (e)
    {
        var prv_insumo_id = $(this).parents(".uno").attr("identificador");
        verModalFichaPrvInsumo(prv_insumo_id);
    });
}


function verModalFichaPrvInsumo(prv_insumo_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/prv_insumo_gestion/modal_prv_insumo_gestion_ficha.php",
        data: "prv_insumo_id=" + prv_insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Ficha del Insumo',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('prv_insumo_gestion', prv_insumo_id);

            $('.div_modal').html(data);
            setInitPrvInsumoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 18/02/2017
 */
function setChangeCmbFiltroProveedor()
{
    $("#cmb_filtro_prv_proveedor_id").unbind();
    $("#cmb_filtro_prv_proveedor_id").change(function()
    {
        setAdmBuscadorTop("prv_insumo_gestion");
    });
}


/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 27/02/2017
 */
function setChangeCmbFiltroMarca()
{
    $("#cmb_filtro_ins_marca_id").unbind();
    $("#cmb_filtro_ins_marca_id").change(function()
    {
        setAdmBuscadorTop("prv_insumo_gestion");
    });
}

/**
 * 
 * @returns {undefined}
 * @author Esteban Martinez
 * @creado 27/02/2017
 */
function setChangeCmbFiltroMarcaPieza()
{
    $("#cmb_filtro_ins_marca_pieza_id").unbind();
    $("#cmb_filtro_ins_marca_pieza_id").change(function()
    {
        setAdmBuscadorTop("prv_insumo_gestion");
    });
}



/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 14/03/2017
 */
function setClickBtnVincularInsInsumo()
{
    $(".uno.ins_insumo.vincular").unbind();
    $(".uno.ins_insumo.vincular").click(function(e)
    {
        var prv_id = $(this).parents(".datos").attr("prv_insumo_id");
        verModalVincularInsumo(prv_id);
    });
}


/**
 * 
 * @param {type} prv_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 14/03/2017
 */
function verModalVincularInsumo(prv_id)
{
    $.ajax({
        type: "GET",
        url: "ajax/modulos/prv_insumo_gestion/modal_prv_insumo_vincular_ins_insumo.php",
        data: "prv_id=" + prv_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 850,
                height: 450,
                modal: true,
                title: "Vincular InsInsumo",
                close: function(){
                    refreshAdmUno("prv_insumo_gestion", prv_id);
                },
                hide: "fade"
            });
        },
        success: function(data)
        {
            $(".div_modal").html(data);
            setInitPrvInsumoGestion();
            setInit();
            setInitAccionesFormulario("div_modal", "");
            setInitDbSuggest();
            setInitDbSuggestBoton();
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
 * @creado 14/03/2017
 */
function setClickBtnDesvincularInsInsumo()
{
    $(".uno.ins_insumo.desvincular").unbind();
    $(".uno.ins_insumo.desvincular").click(function(e)
    {
        var mensaje = "¿ Quiere desvincular el Insumo ?" + "\n\n"+
                    "Por favor, Confirme la Operacion.\n\n";
        if(confirm(mensaje)){
            var prv_id = $(this).parents(".datos").attr("prv_insumo_id");
            setDesvincularInsInsumo(prv_id);
        }
        else{
            return false;
        }
        
    });
}


/**
 * @param {type} prv_id
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 14/03/2017
 */
function setDesvincularInsInsumo(prv_id)
{
    //var us_info_actualizacion_id = $("#hdn_us_info_actualizacion_id").val();
    //var us_info_actualizacion_id = $("#hdn_us_info_actualizacion_id").val();
    $.ajax({
        type: "POST",
        url: "ajax/modulos/prv_insumo_gestion/set_desvincular_ins_insumo.php",
        data: "id=" + prv_id,
        dataType: "html",
        beforeSend: function(objeto)
        {
            
        },
        success: function(data)
        {
            refreshAdmUno("prv_insumo_gestion", prv_id);
        },
        error: function(objeto, quepaso, otroobj)
        {
        }
    });
}