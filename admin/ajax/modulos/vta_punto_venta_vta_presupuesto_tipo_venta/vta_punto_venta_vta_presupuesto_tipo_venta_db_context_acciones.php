<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_punto_venta_vta_presupuesto_tipo_venta = VtaPuntoVentaVtaPresupuestoTipoVenta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getId()) ?>" modulo="vta_punto_venta_vta_presupuesto_tipo_venta">

    <div class="titulo">
        <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?>: 
        <strong><?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

