<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_sucursal_pan_panol_id = Gral::getVars(2, 'gral_sucursal_pan_panol_id');
$gral_sucursal_pan_panol = GralSucursalPanPanol::getOxId($gral_sucursal_pan_panol_id);
$pan_panol = $gral_sucursal_pan_panol->getPanPanol();

?>
<div class="datos" id="<?php Gral::_echo($pan_panol->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PanPanol') ?>: 
        <strong><?php Gral::_echo($pan_panol->getId()) ?> - <?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pan_panol_alta.php?id=<?php echo($pan_panol->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanPanol') ?>: <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralSucursalPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_pan_panol->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralSucursalPanPanols') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

