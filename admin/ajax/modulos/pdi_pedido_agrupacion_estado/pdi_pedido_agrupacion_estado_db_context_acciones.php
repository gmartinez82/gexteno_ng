<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion_estado = PdiPedidoAgrupacionEstado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pdi_pedido_agrupacion_estado->getId()) ?>" modulo="pdi_pedido_agrupacion_estado">

    <div class="titulo">
        <?php Lang::_lang('PdiPedidoAgrupacionEstado') ?>: 
        <strong><?php Gral::_echo($pdi_pedido_agrupacion_estado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdiPedidoAgrupacionEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

