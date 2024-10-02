<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_sucursal_pan_panol = GralSucursalPanPanol::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_sucursal_pan_panol->getId()) ?>" modulo="gral_sucursal_pan_panol">

    <div class="titulo">
        <?php Lang::_lang('GralSucursalPanPanol') ?>: 
        <strong><?php Gral::_echo($gral_sucursal_pan_panol->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_SUCURSAL_PAN_PANOL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralSucursalPanPanol') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

