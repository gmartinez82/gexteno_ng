<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$documento = Gral::getVars(Gral::VARS_GET, 'documento', "", Gral::TIPO_STRING);

if(trim($documento)!= ""){
    $arr_documento = explode("-", $documento);
    $documento_saneado = $arr_documento[0];
    CliCliente::getHtmlBloqueClienteNuevoInfoSifen($documento_saneado);
}