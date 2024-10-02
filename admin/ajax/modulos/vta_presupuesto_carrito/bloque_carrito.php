<?php
$vta_presupuesto_activo = VtaPresupuesto::getPresupuestoActivo();

if ($vta_presupuesto_activo) {
    $cli_cliente_en_presupuesto = $vta_presupuesto_activo->getCliCliente();
    ?>
    <div class="bloque-carrito" vta_presupuesto_activo_id="<?php echo $vta_presupuesto_activo->getId() ?>">
        <div class="bloque-carrito-titulo">Carrito de Presupuesto Activo</div>

        <?php include Gral::getPathAbs() . "admin/ajax/modulos/vta_presupuesto_carrito/bloque_carrito_info.php" ?>

    </div>
<?php } ?>
