
<div class="titulo"><?php Lang::_lang('Historial de Estados del Presupuesto') ?></div>

<div class="bloque-historial-estados">
    <?php include "bloque_vta_presupuesto_gestion_historial_estado.php" ?>
</div>
<br />

<?php if ($vta_factura) { ?>
    <div class="titulo"><?php Lang::_lang('Historial de Estados de la Factura') ?></div>

    <div class="bloque-historial-estados">
        <?php include "bloque_vta_presupuesto_gestion_historial_estado_factura.php" ?>
    </div>
    <br />
<?php } ?>