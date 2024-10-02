<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_sucursal_valoracion_tipo_item_gral_sucursal = GralSucursalValoracionTipoItemGralSucursal::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_sucursal_valoracion_tipo_item_gral_sucursal->getId()) ?>" modulo="gral_sucursal_valoracion_tipo_item_gral_sucursal">

    <div class="titulo">
        <?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursal') ?>: 
        <strong><?php Gral::_echo($gral_sucursal_valoracion_tipo_item_gral_sucursal->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VALORACION_TIPO_ITEM_GRAL_SUCURSAL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursal') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

