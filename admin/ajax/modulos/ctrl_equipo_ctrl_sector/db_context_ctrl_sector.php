<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ctrl_equipo_ctrl_sector_id = Gral::getVars(2, 'ctrl_equipo_ctrl_sector_id');
$ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxId($ctrl_equipo_ctrl_sector_id);
$ctrl_sector = $ctrl_equipo_ctrl_sector->getCtrlSector();

?>
<div class="datos" id="<?php Gral::_echo($ctrl_sector->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CtrlSector') ?>: 
        <strong><?php Gral::_echo($ctrl_sector->getId()) ?> - <?php Gral::_echo($ctrl_sector->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ctrl_sector_alta.php?id=<?php echo($ctrl_sector->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CtrlSector') ?>: <strong><?php Gral::_echo($ctrl_sector->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CtrlEquipoCtrlSector::getFiltrosArrGral() ?>&arr=<?php echo $ctrl_equipo_ctrl_sector->getFiltrosArrXCampo('CtrlSector', 'ctrl_sector_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CtrlEquipoCtrlSectors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ctrl_sector->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

