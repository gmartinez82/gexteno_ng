<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ml_shipping_mode = MlShippingMode::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ml_shipping_mode->getId()) ?>" modulo="ml_shipping_mode">

    <div class="titulo">
        <?php Lang::_lang('MlShippingMode') ?>: 
        <strong><?php Gral::_echo($ml_shipping_mode->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('MlShippingMode') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

