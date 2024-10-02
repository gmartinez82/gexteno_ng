<?php
include "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// ------------------------------------------------------------------------------
// devuelve todas las listas de precios habilitadas para el vendedor
// ------------------------------------------------------------------------------
$arr_tipo_lista_precio = array(
    'id' => '',
    'descripcion' => '...',
    'selected' => 1,
);
$arr[] = $arr_tipo_lista_precio;

$ins_tipo_lista_precios = $vta_vendedor_autenticado->getInsTipoListaPreciosHabilitadasParaVendedor();
foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {    
    $arr_tipo_lista_precio = array(
        'id' => $ins_tipo_lista_precio->getId(),
        'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
        'selected' => 0,
    );
    $arr[] = $arr_tipo_lista_precio;
}
$arr_json = json_encode($arr);
echo $arr_json;

return;

// ------------------------------------------------------------------------------
// devuelve todas las listas de precios habilitadas
// ------------------------------------------------------------------------------
$arr_tipo_lista_precio = array(
    'id' => '',
    'descripcion' => '...',
    'selected' => 1,
);
$arr[] = $arr_tipo_lista_precio;

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {    
    $arr_tipo_lista_precio = array(
        'id' => $ins_tipo_lista_precio->getId(),
        'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
        'selected' => 0,
    );
    $arr[] = $arr_tipo_lista_precio;
}
$arr_json = json_encode($arr);
echo $arr_json;

return;

// ------------------------------------------------------------------------------
// el codigo de mas abajo permite retornar 1 lista de precios por cliente, de acuerdo a su configuracion
// ------------------------------------------------------------------------------
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);
if ($cli_cliente) {

    // --------------------------------------------------------------------------
    // si hay cliente seleccionado
    // --------------------------------------------------------------------------
    $cli_categoria = $cli_cliente->getCliCategoria();
    $cli_categoria_ins_tipo_lista_precios = $cli_categoria->getCliCategoriaInsTipoListaPrecios();
    $cli_cliente_ins_tipo_lista_precios = $cli_cliente->getCliClienteInsTipoListaPrecios();

    $arr = array();

    if (count($cli_cliente_ins_tipo_lista_precios) > 0) {
        foreach ($cli_cliente_ins_tipo_lista_precios as $cli_cliente_ins_tipo_lista_precio) {
            $ins_tipo_lista_precio = $cli_cliente_ins_tipo_lista_precio->getInsTipoListaPrecio();

            $arr_tipo_lista_precio = array(
                'id' => $ins_tipo_lista_precio->getId(),
                'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
                'selected' => $cli_cliente_ins_tipo_lista_precio->getPredeterminado(),
            );
            $arr[] = $arr_tipo_lista_precio;
        }
    } elseif (count($cli_categoria_ins_tipo_lista_precios) > 0) {
        foreach ($cli_categoria_ins_tipo_lista_precios as $cli_categoria_ins_tipo_lista_precio) {
            $ins_tipo_lista_precio = $cli_categoria_ins_tipo_lista_precio->getInsTipoListaPrecio();

            $arr_tipo_lista_precio = array(
                'id' => $ins_tipo_lista_precio->getId(),
                'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
                'selected' => $cli_categoria_ins_tipo_lista_precio->getPredeterminado(),
            );
            $arr[] = $arr_tipo_lista_precio;
        }
    } else {
        $arr_tipo_lista_precio = array(
            'id' => '',
            'descripcion' => '...',
            'selected' => 1,
        );
        $arr[] = $arr_tipo_lista_precio;

        $ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios();
        foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
            $arr_tipo_lista_precio = array(
                'id' => $ins_tipo_lista_precio->getId(),
                'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_tipo_lista_precio;
        }
    }
} else {
    // --------------------------------------------------------------------------
    // si NO hay cliente seleccionado
    // --------------------------------------------------------------------------

    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
    if ($ins_tipo_lista_precio) {
        $arr_tipo_lista_precio = array(
            'id' => $ins_tipo_lista_precio->getId(),
            'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
            'selected' => 0,
        );
        $arr[] = $arr_tipo_lista_precio;
    }

    /*
      $arr_tipo_lista_precio = array(
      'id' => '',
      'descripcion' => '...',
      'selected' => 1,
      );
      $arr[] = $arr_tipo_lista_precio;

      $ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios();
      foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
      $arr_tipo_lista_precio = array(
      'id' => $ins_tipo_lista_precio->getId(),
      'descripcion' => $ins_tipo_lista_precio->getDescripcion(),
      'selected' => 0,
      );
      $arr[] = $arr_tipo_lista_precio;
      }
     */
}

$arr_json = json_encode($arr);
echo $arr_json;
?>