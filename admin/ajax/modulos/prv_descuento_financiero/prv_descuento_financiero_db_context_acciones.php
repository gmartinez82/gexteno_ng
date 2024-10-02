<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_descuento_financiero = PrvDescuentoFinanciero::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_descuento_financiero->getId()) ?>" modulo="prv_descuento_financiero">

    <div class="titulo">
        <?php Lang::_lang('PrvDescuentoFinanciero') ?>: 
        <strong><?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_DESCUENTO_FINANCIERO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvDescuentoFinanciero') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

