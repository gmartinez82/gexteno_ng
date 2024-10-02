<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_centro_costo_prv_proveedor = GralCentroCostoPrvProveedor::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_centro_costo_prv_proveedor->getId()) ?>" modulo="gral_centro_costo_prv_proveedor">

    <div class="titulo">
        <?php Lang::_lang('GralCentroCostoPrvProveedor') ?>: 
        <strong><?php Gral::_echo($gral_centro_costo_prv_proveedor->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralCentroCostoPrvProveedor') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

