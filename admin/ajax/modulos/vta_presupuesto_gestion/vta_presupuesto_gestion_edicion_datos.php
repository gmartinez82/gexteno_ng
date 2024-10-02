<?php
// -----------------------------------------------------------------------------
// se controla que el presupuesto sobre el que se esta operando se encuentre activo
// para evitar doble factura y recibo por problemas con servidores de AFIP
// -----------------------------------------------------------------------------
include "control_vta_presupuesto_activo.php";
// -----------------------------------------------------------------------------

$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);


$hay_conflicto_general = false;
if ($vta_presupuesto) {
    ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_ACCION_BUSCAR_PRODUCTO')) { ?>
        <div class="buscador-producto">
            <input type="text" id="txt_buscador_productos" name="txt_buscador_productos" value="" size="25" placeholder="Ingrese producto a buscar ..." autocomplete="off" />
        </div>
    <?php } ?>

    <?php include "bloque_vta_presupuesto_insumos_datos.php"; ?>

    <?php if (DbConfig::VARS_CANTIDAD_ITEMS_PRESUPUESTO > 0) { ?>
        <?php if (count($vta_presupuesto_ins_insumos) == DbConfig::VARS_CANTIDAD_ITEMS_PRESUPUESTO) { ?>
            <div class="mensaje-limite-cantidad-items">
                IMPORTANTE: El presupuesto no admite mas de <?php echo DbConfig::VARS_CANTIDAD_ITEMS_PRESUPUESTO ?> items por limitaciones de facturacion
            </div>
        <?php } ?>
    <?php } ?>

<?php }
else {
    ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontro el presupuesto') ?></div>
    </div>

<?php } ?>

<script>
    setInitVtaPresupuestoGestion();
    setInitAdm();
    setInit();
</script>