<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ctrl_sector_id = Gral::getVars(2, 'ctrl_sector_id');
$ctrl_sector = CtrlSector::getOxId($ctrl_sector_id);
$gral_sucursal = $ctrl_sector->getGralSucursal();

?>
<div class="datos" id="<?php Gral::_echo($gral_sucursal->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralSucursal') ?>: 
        <strong><?php Gral::_echo($gral_sucursal->getId()) ?> - <?php Gral::_echo($gral_sucursal->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_sucursal_alta.php?id=<?php echo($gral_sucursal->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursal') ?>: <strong><?php Gral::_echo($gral_sucursal->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CtrlSector::getFiltrosArrGral() ?>&arr=<?php echo $ctrl_sector->getFiltrosArrXCampo('GralSucursal', 'gral_sucursal_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CtrlSectors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_sucursal->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

