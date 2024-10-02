<?php
include "_autoload.php";

$pag = Gral::getVars(2, 'pag', 1);
PerPersona::setSesPag($pag);

$user = UsUsuario::autenticado();

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->setWhereInit(true);    
$criterio->addTabla('per_persona');
$criterio->addOrden(PerPersona::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
//$criterio->setCriteriosInicial();



$paginador = new Paginador(PerPersona::getSesPagCantidad(), PerPersona::getSesPag());
$per_personas = PerPersona::getPerPersonasDesdeBackend($paginador, $criterio);
//Gral::prr($per_personas);
//exit;

$desde = Date::sumarDias(PerPersona::getSesFiltroFechaDesde(), 0);
$hasta = Date::sumarDias(PerPersona::getSesFiltroFechaDesde(), PerPersona::getSesDiasPantallaCantidad());

//$desde = '2018-03-01';
//$hasta = '2018-03-14';

$dia = $desde;
$continuar = true;
while($continuar){
    $arr_dias[$dia] = $dia;
    
    $dia = Date::sumarDias($dia, 1);
    if(!Date::esRangoValido($dia, $hasta) || $dia == $hasta){
        $continuar = false;
    }
}
//Gral::prr($arr_dias);

include 'per_mov_movimiento_calendario_datos.php';
?>
<script>
    setInitPerMovMovimientoCalendario();
    setInit();
    
    // tabla fixer
    //setTableFixer();
</script>