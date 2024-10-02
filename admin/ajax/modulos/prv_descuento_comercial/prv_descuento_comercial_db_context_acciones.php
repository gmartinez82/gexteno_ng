<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_descuento_comercial = PrvDescuentoComercial::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_descuento_comercial->getId()) ?>" modulo="prv_descuento_comercial">

    <div class="titulo">
        <?php Lang::_lang('PrvDescuentoComercial') ?>: 
        <strong><?php Gral::_echo($prv_descuento_comercial->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_DESCUENTO_COMERCIAL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvDescuentoComercial') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

