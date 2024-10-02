<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_centro_pedido_us_usuario = PdeCentroPedidoUsUsuario::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_centro_pedido_us_usuario->getId()) ?>" modulo="pde_centro_pedido_us_usuario">

    <div class="titulo">
        <?php Lang::_lang('PdeCentroPedidoUsUsuario') ?>: 
        <strong><?php Gral::_echo($pde_centro_pedido_us_usuario->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_US_USUARIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuario') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

