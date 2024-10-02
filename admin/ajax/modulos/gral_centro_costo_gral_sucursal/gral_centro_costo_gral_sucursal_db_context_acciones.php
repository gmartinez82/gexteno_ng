<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_centro_costo_gral_sucursal = GralCentroCostoGralSucursal::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_centro_costo_gral_sucursal->getId()) ?>" modulo="gral_centro_costo_gral_sucursal">

    <div class="titulo">
        <?php Lang::_lang('GralCentroCostoGralSucursal') ?>: 
        <strong><?php Gral::_echo($gral_centro_costo_gral_sucursal->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_GRAL_SUCURSAL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralCentroCostoGralSucursal') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

