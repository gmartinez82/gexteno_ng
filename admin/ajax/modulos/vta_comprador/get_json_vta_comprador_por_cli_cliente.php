<?php

include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);
if ($cli_cliente) {
    $cli_cliente_vta_compradors = $cli_cliente->getCliClienteVtaCompradors();

    $arr = array();

    if (count($cli_cliente_vta_compradors) > 0) {
        foreach ($cli_cliente_vta_compradors as $cli_cliente_vta_comprador) {
            $vta_comprador = $cli_cliente_vta_comprador->getVtaComprador();
            $arr_comprador = array(
                'id' => $vta_comprador->getId(),
                'descripcion' => $vta_comprador->getDescripcion(),
                'selected' => $cli_cliente_vta_comprador->getPredeterminado(),
            );
            $arr[] = $arr_comprador;
        }
    } else {
        $arr_comprador = array(
            'id' => '',
            'descripcion' => '...',
            'selected' => 1,
        );
        $arr[] = $arr_comprador;

        $vta_compradors = VtaComprador::getVtaCompradors();
        foreach ($vta_compradors as $vta_comprador) {
            $arr_comprador = array(
                'id' => $vta_comprador->getId(),
                'descripcion' => $vta_comprador->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_comprador;
        }
    }
} else {
    $arr_comprador = array(
        'id' => '',
        'descripcion' => '...',
        'selected' => 1,
    );
    $arr[] = $arr_comprador;

    $vta_compradors = VtaComprador::getVtaCompradors();
    foreach ($vta_compradors as $vta_comprador) {
        $arr_comprador = array(
            'id' => $vta_comprador->getId(),
            'descripcion' => $vta_comprador->getDescripcion(),
            'selected' => 0,
        );
        $arr[] = $arr_comprador;
    }
}

$arr_json = json_encode($arr);
echo $arr_json;
?>