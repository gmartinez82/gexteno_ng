<?php

include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

if ($cli_cliente) {
    $cli_cliente_gral_actividads = $cli_cliente->getCliClienteGralActividads();

    $arr = array();

    if (count($cli_cliente_gral_actividads) > 0) {
        foreach ($cli_cliente_gral_actividads as $cli_cliente_gral_actividad) {
            $gral_actividad = $cli_cliente_gral_actividad->getGralActividad();
            $arr_actividad = array(
                'id' => $gral_actividad->getId(),
                'descripcion' => $gral_actividad->getDescripcion(),
                'selected' => 1,
            );
            $arr[] = $arr_actividad;
        }
    } else {
        $arr_actividad = array(
            'id' => '',
            'descripcion' => '...',
            'selected' => 1,
        );
        $arr[] = $arr_actividad;

        $gral_actividads = GralActividad::getGralActividads();
        foreach ($gral_actividads as $gral_actividad) {
            $arr_actividad = array(
                'id' => $gral_actividad->getId(),
                'descripcion' => $gral_actividad->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_actividad;
        }
    }
}else{
    $arr_actividad = array(
            'id' => '',
            'descripcion' => '...',
            'selected' => 1,
        );
        $arr[] = $arr_actividad;

        $gral_actividads = GralActividad::getGralActividads();
        foreach ($gral_actividads as $gral_actividad) {
            $arr_actividad = array(
                'id' => $gral_actividad->getId(),
                'descripcion' => $gral_actividad->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_actividad;
        }    
}
$arr_json = json_encode($arr);
echo $arr_json;
?>