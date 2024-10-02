<?php
include "_autoload.php";

$pde_factura_id = Gral::getVars(Gral::VARS_GET, 'pde_factura_id', 0);
$pde_factura = PdeFactura::getOxId($pde_factura_id);
$prv_proveedor = $pde_factura->getPrvProveedor();

if($prv_proveedor){
    $pde_ocs = $prv_proveedor->getPdeOcsActivaFacturas($txt_buscador_filtros_varios);
}

$control_presupuesto = 1;
?>
<div class="datos generar-factura" tipo="<?php echo $tipo ?>" >
    <div class="label-error" id="error_general"></div>
    <div class="buscador">
        <div class="par col c1">
            <div class="label">
                <?php Lang::_lang('Proveedor'); ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>
        </div>

    </div>

    <div class="div_datos_generar_facturas" pde_factura_id="<?php Gral::_echo($pde_factura->getId()) ?>" prv_proveedor_id="<?php Gral::_echo($prv_proveedor->getId()) ?>">    
        <?php include 'bloque_pde_oc_listado_datos.php' ?>        
    </div>
        
</div>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>