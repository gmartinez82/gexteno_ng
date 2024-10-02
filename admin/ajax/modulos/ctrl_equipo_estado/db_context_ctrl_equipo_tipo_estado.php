<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ctrl_equipo_estado_id = Gral::getVars(2, 'ctrl_equipo_estado_id');
$ctrl_equipo_estado = CtrlEquipoEstado::getOxId($ctrl_equipo_estado_id);
$ctrl_equipo_tipo_estado = $ctrl_equipo_estado->getCtrlEquipoTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($ctrl_equipo_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CtrlEquipoTipoEstado') ?>: 
        <strong><?php Gral::_echo($ctrl_equipo_tipo_estado->getId()) ?> - <?php Gral::_echo($ctrl_equipo_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ctrl_equipo_tipo_estado_alta.php?id=<?php echo($ctrl_equipo_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CtrlEquipoTipoEstado') ?>: <strong><?php Gral::_echo($ctrl_equipo_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CtrlEquipoEstado::getFiltrosArrGral() ?>&arr=<?php echo $ctrl_equipo_estado->getFiltrosArrXCampo('CtrlEquipoTipoEstado', 'ctrl_equipo_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CtrlEquipoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ctrl_equipo_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

