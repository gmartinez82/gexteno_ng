// archivo js del modulo 'per_persona'
$(function ($) {
    setInitPerPersonaGestion();
});

function setInitPerPersonaGestion() {

    // filtros
    setChangeCmbFiltrosGralEmpresa();
    setChangeCmbFiltrosCoCentroOperativo();
    setChangeCmbFiltrosGralArea();
    setChangeCmbFiltrosGralSector();
    setChangeCmbFiltrosGralPuesto();
    setChangeCmbFiltrosPerTipoEstado();
    setChangeCmbFiltrosLegajo();
    setClickBtnBuscar();
}

/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosGralEmpresa()
{
    $("#cmb_filtro_gral_empresa_id").unbind();
    $("#cmb_filtro_gral_empresa_id").change(function () {
        //setAdmBuscadorTop("per_persona_gestion");
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
        //setAdmBuscadorTop("per_persona_gestion");
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
        //setAdmBuscadorTop("per_persona_gestion");
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
        //setAdmBuscadorTop("per_persona_gestion");
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
        //setAdmBuscadorTop("per_persona_gestion");
    });
}


/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosPerTipoEstado()
{
    $("#cmb_filtro_per_tipo_estado_id").unbind();
    $("#cmb_filtro_per_tipo_estado_id").change(function () {
        //setAdmBuscadorTop("per_persona_gestion");
    });
}

/**
 * @returns {undefined}
 * @author Pablo Rosen
 * @creado 20/02/2018
 */
function setChangeCmbFiltrosLegajo()
{
    $("#txt_filtro_legajo").unbind();
    $("#txt_filtro_legajo").keyup(function (e) {
        if (e.keyCode == 13) {
            //setAdmBuscadorTop("per_persona_gestion");
        }
    });
}


function setClickBtnBuscar()
{
    $("#btn_buscar").unbind();
    $("#btn_buscar").click(function (e)
    {
        setAdmBuscadorTop("per_persona_gestion");
    });
}
