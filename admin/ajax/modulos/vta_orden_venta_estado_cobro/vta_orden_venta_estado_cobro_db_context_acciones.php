<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_orden_venta_estado_cobro = VtaOrdenVentaEstadoCobro::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_orden_venta_estado_cobro->getId()) ?>" modulo="vta_orden_venta_estado_cobro">

    <div class="titulo">
        <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?>: 
        <strong><?php Gral::_echo($vta_orden_venta_estado_cobro->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_COBRO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

