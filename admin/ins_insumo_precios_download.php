<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$hash = Gral::getVars(Gral::VARS_GET, 'hash', '', Gral::TIPO_STRING);

if($hash){
    $date = base64_decode($hash);
    $nombre = DbConfig::CONFIG_CONF_PROYECTO_MIN . '-Lista-Precio-'.$date.'.pdf';
    
    header("Content-type:application/pdf");
    header("Content-Disposition:inline;filename='".$nombre."'");

    $url = DbConfig::PATH_HTTP."export/".$nombre;
    $html = file_get_contents($url);
    echo $html;
}else{
    echo 'Error 460. No esta autorizado para visualizar el archivo.';
}