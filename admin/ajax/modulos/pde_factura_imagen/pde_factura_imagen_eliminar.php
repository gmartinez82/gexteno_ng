<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_FACTURA_IMAGEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_factura_imagen = new PdeFacturaImagen();
    $pde_factura_imagen->setId($id, false);
    $pde_factura_imagen->deleteAll();
}    
?>

