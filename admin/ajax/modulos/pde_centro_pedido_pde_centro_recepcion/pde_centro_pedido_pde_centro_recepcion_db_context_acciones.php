<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_centro_pedido_pde_centro_recepcion = PdeCentroPedidoPdeCentroRecepcion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getId()) ?>" modulo="pde_centro_pedido_pde_centro_recepcion">

    <div class="titulo">
        <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?>: 
        <strong><?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

