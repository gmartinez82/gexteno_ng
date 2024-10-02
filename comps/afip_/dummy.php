<?php
//phpinfo();

include_once '_autoload.php';

error_reporting(E_ERROR);
ini_set('display_errors', '1');


//exit();
// ========== Actualizar Tipificaciones ==========

$gral_empresa = GralEmpresa::getOxId(1);

/**
 * WSAA
 */
$wsaa = new WsAa($gral_empresa);
/*
if ($wsaa->get_expiration() < date("Y-m-d h:m:i")) {
    if ($wsaa->generar_TA()) {
        echo '<br>Nuevo TA';
    } else {
        echo '<br>Error al obtener el TA';
    }
} else {
    echo '<br>TA expiration: ' . $wsaa->get_expiration();
}
*/
$wsaa->generar_TA();
echo '<br>TA expiration: ' . $wsaa->get_expiration().'<br>' ;

/**
 * WSFEV1
 */
$wsfev1 = new WsAfip($gral_empresa->getCuit());

// Carga el archivo TA.xml
$wsfev1->openTA();

//$wsfev1->setActualizarTipificacionesAfip($gral_empresa);

$dummy = $wsfev1->FEDummy();
Gral::prr($dummy);

