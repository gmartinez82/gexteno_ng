<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_subcategoria_ins_tipo_lista_precio = CliSubcategoriaInsTipoListaPrecio::getOxId($id);

$estado = ($cli_subcategoria_ins_tipo_lista_precio->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_subcategoria_ins_tipo_lista_precio_uno.php';
?>

