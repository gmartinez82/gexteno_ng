<?php

include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

if ($cli_cliente) {
    $cli_cliente_vta_preventistas = $cli_cliente->getCliClienteVtaPreventistas();

    $arr = array();

    if (count($cli_cliente_vta_preventistas) > 0) {
        foreach ($cli_cliente_vta_preventistas as $cli_cliente_vta_preventista) {
            $vta_preventista = $cli_cliente_vta_preventista->getVtaPreventista();
            $arr_preventista = array(
                'id' => $vta_preventista->getId(),
                'descripcion' => $vta_preventista->getDescripcion(),
                'selected' => $cli_cliente_vta_preventista->getPredeterminado(),
            );
            $arr[] = $arr_preventista;
        }
    } else {
        $arr_preventista = array(
            'id' => '',
            'descripcion' => '...',
            'selected' => 1,
        );
        $arr[] = $arr_preventista;

        $vta_preventistas = VtaPreventista::getVtaPreventistas();
        foreach ($vta_preventistas as $vta_preventista) {
            $arr_preventista = array(
                'id' => $vta_preventista->getId(),
                'descripcion' => $vta_preventista->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_preventista;
        }
    }
}else{
    $arr_preventista = array(
            'id' => '',
            'descripcion' => '...',
            'selected' => 1,
        );
        $arr[] = $arr_preventista;

        $vta_preventistas = VtaPreventista::getVtaPreventistas();
        foreach ($vta_preventistas as $vta_preventista) {
            $arr_preventista = array(
                'id' => $vta_preventista->getId(),
                'descripcion' => $vta_preventista->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_preventista;
        }    
}
$arr_json = json_encode($arr);
echo $arr_json;
?>