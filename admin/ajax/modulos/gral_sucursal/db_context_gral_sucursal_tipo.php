<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_sucursal_id = Gral::getVars(2, 'gral_sucursal_id');
$gral_sucursal = GralSucursal::getOxId($gral_sucursal_id);
$gral_sucursal_tipo = $gral_sucursal->getGralSucursalTipo();

?>
<div class="datos" id="<?php Gral::_echo($gral_sucursal_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralSucursalTipo') ?>: 
        <strong><?php Gral::_echo($gral_sucursal_tipo->getId()) ?> - <?php Gral::_echo($gral_sucursal_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_sucursal_tipo_alta.php?id=<?php echo($gral_sucursal_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalTipo') ?>: <strong><?php Gral::_echo($gral_sucursal_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralSucursal::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal->getFiltrosArrXCampo('GralSucursalTipo', 'gral_sucursal_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralSucursals') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_sucursal_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

