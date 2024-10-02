<?php
include "_autoload.php";

$dbsug_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_proveedor_id', 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
$pde_factura_id = Gral::getVars(Gral::VARS_POST, 'pde_factura_id', 0);
$txt_buscador_filtros_varios = Gral::getVars(Gral::VARS_POST, 'txt_buscador_filtros_varios', '');

$pde_factura = PdeFactura::getOxId($pde_factura_id);
if($pde_factura){
    $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
}else{
    $prv_proveedor = PrvProveedor::getOxId($dbsug_prv_proveedor_id);    
}

if($prv_proveedor){
    $pde_ocs = $prv_proveedor->getPdeOcsActivaFacturas($txt_buscador_filtros_varios);
}

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;

include 'bloque_pde_oc_listado_datos.php';
?>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>