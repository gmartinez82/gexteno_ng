<?php
include "_autoload.php";

$dbsug_prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'dbsug_prv_proveedor_id', 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_POST, 'prv_proveedor_id', 0);
$pde_factura_id = Gral::getVars(Gral::VARS_POST, 'pde_factura_id', 0);
$txt_buscador_filtros_varios = Gral::getVars(Gral::VARS_POST, 'txt_buscador_filtros_varios', '');

$pde_factura = PdeFactura::getOxId($pde_factura_id);
if ($pde_factura) {
    $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
} else {
    $prv_proveedor = PrvProveedor::getOxId($dbsug_prv_proveedor_id);
}

if ($prv_proveedor) {
    $pde_ocs = $prv_proveedor->getPdeOcsActivaFacturas($txt_buscador_filtros_varios);
}

foreach ($pde_ocs as $pde_oc) {
    if ($pde_oc->getCantidadDisponibleEnFactura() > 0) {
        $pde_ocs_para_facturar[] = $pde_oc;
    }
}

$orden_maximo = 0;
$pde_factura_pde_ocs = array();
if ($pde_factura) {
    $pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));

    foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
        $orden_maximo = $pde_factura_pde_oc->getOrden();
    }
}

if (count($pde_ocs_para_facturar) > 0) {
    include 'bloque_pde_oc_listado_datos_oc_no_facturadas.php';
} else {
    ?>
    <div class="mensaje-sin-resultado">
        No se encontraron OC NO facturadas con el criterio ingresado.
    </div>
    <?php
}
?>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>