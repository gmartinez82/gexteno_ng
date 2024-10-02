<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_unidad_medida_pedido = InsUnidadMedidaPedido::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_unidad_medida_pedido->getId()) ?>" modulo="ins_unidad_medida_pedido">

    <div class="titulo">
        <?php Lang::_lang('InsUnidadMedidaPedido') ?>: 
        <strong><?php Gral::_echo($ins_unidad_medida_pedido->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_PEDIDO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsUnidadMedidaPedido') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

