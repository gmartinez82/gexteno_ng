<?php
/**
 * @modificado_por Esteban Martinez
 * @modificado 04/11/2016
 * @modificado 07/11/2016
 * @modificado 15/11/2016
 * @modificado 13/01/2017
 * @modificado 22/08/2017
 * @modificado 29/08/2017
 * @modificado 30/04/2018
 */
include_once "_autoload.php";

$user = UsUsuario::autenticado();

$txt_buscador                               = Gral::getVars(1, "txt_buscador", "");

$cmb_filtro_gral_empresa_id                 = Gral::getVars(1, "cmb_filtro_gral_empresa_id", 0);
$cmb_filtro_per_persona_id                  = Gral::getVars(1, "cmb_filtro_per_persona_id", 0);
$cmb_filtro_os_tipo_id                      = Gral::getVars(1, "cmb_filtro_os_tipo_id", 0);
$cmb_filtro_os_tipo_estado_id               = Gral::getVars(1, "cmb_filtro_os_tipo_estado_id", 0);
$cmb_filtro_os_prioridad_id                 = Gral::getVars(1, "cmb_filtro_os_prioridad_id", 0);
$cmb_filtro_activo                          = Gral::getVars(1, "cmb_filtro_activo", -1);
$cmb_filtro_resoluble                       = Gral::getVars(1, "cmb_filtro_resoluble", -1);
$txt_filtro_fecha_desde                     = Gral::getVars(1, "txt_filtro_fecha_desde", "");
$txt_filtro_fecha_hasta                     = Gral::getVars(1, "txt_filtro_fecha_hasta", "");
$cmb_filtro_os_tipo_resolucion_id           = Gral::getVars(1, "cmb_filtro_tipo_resolucion_id", 0);
$cmb_filtro_cantidad_dias_limite_resolucion = Gral::getVars(1, "cmb_filtro_cantidad_dias_limite_resolucion", 0);


$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->addDistinct(true);
$criterio->setAmbiguo(true);
//$criterio->setWhereInit(true);
$criterio->addTrueInicialEnWhere();



$criterio->addInicioSubconsulta();
$criterio->addTrueInicialEnWhere();

//$criterio->add("", "true", "" , false, "AND");

if($cmb_filtro_gral_empresa_id != 0){
    $criterio->add(GralEmpresa::GEN_ATTR_ID, $cmb_filtro_gral_empresa_id, Criterio::IGUAL);
}

if($cmb_filtro_per_persona_id != 0){
    $criterio->add(PerPersona::GEN_ATTR_ID, $cmb_filtro_per_persona_id, Criterio::IGUAL);
}

if($cmb_filtro_os_tipo_id != 0){
    $criterio->add(OsTipo::GEN_ATTR_ID, $cmb_filtro_os_tipo_id, Criterio::IGUAL);
}

if($cmb_filtro_os_tipo_estado_id != 0){
    $criterio->add(OsTipoEstado::GEN_ATTR_ID, $cmb_filtro_os_tipo_estado_id, Criterio::IGUAL);
}

if($cmb_filtro_os_prioridad_id != 0){
    $criterio->add(OsPrioridad::GEN_ATTR_ID, $cmb_filtro_os_prioridad_id, Criterio::IGUAL);
}

if($cmb_filtro_activo != -1){
    $criterio->add(OsTipoEstado::GEN_ATTR_TERMINAL, $cmb_filtro_activo, Criterio::DISTINTO);
}

if($cmb_filtro_resoluble != -1){
    $criterio->add(OsTipoEstado::GEN_ATTR_RESOLUBLE, $cmb_filtro_resoluble, Criterio::IGUAL);
}

if($cmb_filtro_os_tipo_resolucion_id != 0){
    $criterio->add(OsTipoResolucion::GEN_ATTR_ID, $cmb_filtro_os_tipo_resolucion_id, Criterio::IGUAL);
}

if($cmb_filtro_cantidad_dias_limite_resolucion != 0){
    $fecha_filtro_limite_resolucion = Date::sumarDias(date('Y-m-d'), $cmb_filtro_cantidad_dias_limite_resolucion);

    $criterio->add(OsOrdenServicio::GEN_ATTR_FECHA_LIMITE_RESOLUCION, $fecha_filtro_limite_resolucion, Criterio::MENORIGUAL);
}

if(Ctrl::esFechaValida(Gral::getFechaToDb($txt_filtro_fecha_desde))){
    $criterio->add(OsOrdenServicio::GEN_ATTR_FECHA, Gral::getFechaToDb($txt_filtro_fecha_desde), Criterio::MAYORIGUAL, "fecha_desde");
}

if(Ctrl::esFechaValida(Gral::getFechaToDb($txt_filtro_fecha_hasta))){
    $criterio->add(OsOrdenServicio::GEN_ATTR_FECHA, Gral::getFechaToDb($txt_filtro_fecha_hasta), Criterio::MENORIGUAL, "fecha_hasta");
}

$criterio->addFinSubconsulta();


if($txt_buscador != "")
{
    $criterio->addInicioSubconsulta();
    $criterio->add(OsOrdenServicio::GEN_ATTR_CODIGO, $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
    $criterio->add(PerPersona::GEN_ATTR_DESCRIPCION, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->add(PerPersona::GEN_ATTR_LEGAJO, $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
$criterio->addRealJoin(OsTipo::GEN_TABLA, OsTipo::GEN_ATTR_ID, OsOrdenServicio::GEN_ATTR_OS_TIPO_ID, "LEFT JOIN");
$criterio->addRealJoin(PerPersona::GEN_TABLA, PerPersona::GEN_ATTR_ID, OsOrdenServicio::GEN_ATTR_PER_PERSONA_ID, "LEFT JOIN");
$criterio->addRealJoin(GralEmpresa::GEN_TABLA, GralEmpresa::GEN_ATTR_ID, PerPersona::GEN_ATTR_GRAL_EMPRESA_ID, "LEFT JOIN");
$criterio->addRealJoin(OsTipoEstado::GEN_TABLA, OsTipoEstado::GEN_ATTR_ID, OsOrdenServicio::GEN_ATTR_OS_TIPO_ESTADO_ID, "LEFT JOIN");
$criterio->addRealJoin(OsPrioridad::GEN_TABLA, OsPrioridad::GEN_ATTR_ID, OsOrdenServicio::GEN_ATTR_OS_PRIORIDAD_ID, "LEFT JOIN");
$criterio->addRealJoin(OsResolucion::GEN_TABLA, OsResolucion::GEN_ATTR_OS_ORDEN_SERVICIO_ID, OsOrdenServicio::GEN_ATTR_ID, "LEFT JOIN");
$criterio->addRealJoin(OsTipoResolucion::GEN_TABLA, OsTipoResolucion::GEN_ATTR_ID, OsResolucion::GEN_ATTR_OS_TIPO_RESOLUCION_ID, "LEFT JOIN");

$criterio->addTabla(OsOrdenServicio::GEN_TABLA);
$criterio = $user->getFiltrosEspeciales(OsOrdenServicio::GEN_TABLA, $criterio);
$criterio->setCriterios();

?>