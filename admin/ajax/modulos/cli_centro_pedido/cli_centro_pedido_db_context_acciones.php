<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_centro_pedido = CliCentroPedido::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_centro_pedido->getId()) ?>" modulo="cli_centro_pedido">

    <div class="titulo">
        <?php Lang::_lang('CliCentroPedido') ?>: 
        <strong><?php Gral::_echo($cli_centro_pedido->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_CENTRO_PEDIDO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliCentroPedido') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

