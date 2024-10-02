<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_sucursal_valoracion_tipo_item_gral_sucursal_id = Gral::getVars(2, 'gral_sucursal_valoracion_tipo_item_gral_sucursal_id');
$gral_sucursal_valoracion_tipo_item_gral_sucursal = GralSucursalValoracionTipoItemGralSucursal::getOxId($gral_sucursal_valoracion_tipo_item_gral_sucursal_id);
$gral_sucursal_valoracion_tipo_item = $gral_sucursal_valoracion_tipo_item_gral_sucursal->getGralSucursalValoracionTipoItem();

?>
<div class="datos" id="<?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralSucursalValoracionTipoItem') ?>: 
        <strong><?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getId()) ?> - <?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_sucursal_valoracion_tipo_item_alta.php?id=<?php echo($gral_sucursal_valoracion_tipo_item->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalValoracionTipoItem') ?>: <strong><?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralSucursalValoracionTipoItemGralSucursal::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_valoracion_tipo_item_gral_sucursal->getFiltrosArrXCampo('GralSucursalValoracionTipoItem', 'gral_sucursal_valoracion_tipo_item_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralSucursalValoracionTipoItemGralSucursals') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_sucursal_valoracion_tipo_item->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

