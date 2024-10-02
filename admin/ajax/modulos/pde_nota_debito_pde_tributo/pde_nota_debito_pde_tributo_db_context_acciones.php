<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_nota_debito_pde_tributo = PdeNotaDebitoPdeTributo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_nota_debito_pde_tributo->getId()) ?>" modulo="pde_nota_debito_pde_tributo">

    <div class="titulo">
        <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?>: 
        <strong><?php Gral::_echo($pde_nota_debito_pde_tributo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_TRIBUTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

