<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_orden_venta_tipo_estado_remision = VtaOrdenVentaTipoEstadoRemision::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getId()) ?>" modulo="vta_orden_venta_tipo_estado_remision">

    <div class="titulo">
        <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?>: 
        <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

