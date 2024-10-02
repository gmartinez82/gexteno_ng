<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_nota_credito_item = PdeNotaCreditoItem::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_nota_credito_item->getId()) ?>" modulo="pde_nota_credito_item">

    <div class="titulo">
        <?php Lang::_lang('PdeNotaCreditoItem') ?>: 
        <strong><?php Gral::_echo($pde_nota_credito_item->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ITEM_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

