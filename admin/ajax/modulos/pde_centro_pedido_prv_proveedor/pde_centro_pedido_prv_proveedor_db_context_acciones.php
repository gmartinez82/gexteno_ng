<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_centro_pedido_prv_proveedor = PdeCentroPedidoPrvProveedor::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_centro_pedido_prv_proveedor->getId()) ?>" modulo="pde_centro_pedido_prv_proveedor">

    <div class="titulo">
        <?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?>: 
        <strong><?php Gral::_echo($pde_centro_pedido_prv_proveedor->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PRV_PROVEEDOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

