<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_sucursal_gral_caja = GralSucursalGralCaja::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_sucursal_gral_caja->getId()) ?>" modulo="gral_sucursal_gral_caja">

    <div class="titulo">
        <?php Lang::_lang('GralSucursalGralCaja') ?>: 
        <strong><?php Gral::_echo($gral_sucursal_gral_caja->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_SUCURSAL_GRAL_CAJA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralSucursalGralCaja') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

