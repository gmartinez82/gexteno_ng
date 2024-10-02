<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$per_persona = PerPersona::getOxId($id);

$desde = Date::sumarDias(PerPersona::getSesFiltroFechaDesde(), 0);
$hasta = Date::sumarDias(PerPersona::getSesFiltroFechaDesde(), PerPersona::getSesDiasPantallaCantidad());

//$desde = '2018-03-01';
//$hasta = '2018-03-14';

$dia = $desde;
$continuar = true;
while($continuar)
{
    $arr_dias[$dia] = $dia;
    
    $dia = Date::sumarDias($dia, 1);
    if(!Date::esRangoValido($dia, $hasta) || $dia == $hasta){
        $continuar = false;
    }
}

include 'per_mov_movimiento_calendario_uno.php';

?>

<script>
    setInitPerMovMovimientoCalendario();
    setInit();
</script>