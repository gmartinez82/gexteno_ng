<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_pedido_envio_email = PdePedidoEnvioEmail::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_pedido_envio_email->getId()) ?>" modulo="pde_pedido_envio_email">

    <div class="titulo">
        <?php Lang::_lang('PdePedidoEnvioEmail') ?>: 
        <strong><?php Gral::_echo($pde_pedido_envio_email->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_PEDIDO_ENVIO_EMAIL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdePedidoEnvioEmail') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

