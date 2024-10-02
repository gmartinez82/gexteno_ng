<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ctrl_equipo_estado = CtrlEquipoEstado::getOxId($id);
//Gral::prr($ctrl_equipo_estado);
?>

<div class="tabs ficha-ctrl_equipo_estado" identificador="<?php echo $ctrl_equipo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ctrl_equipo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par ctrl_equipo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_estado ctrl_equipo_id">
            <div class="label"><?php Lang::_lang('CtrlEquipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_estado->getCtrlEquipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_estado ctrl_equipo_tipo_estado_id">
            <div class="label"><?php Lang::_lang('CtrlEquipoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ctrl_equipo_estado->getCtrlEquipoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ctrl_equipo_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ctrl_equipo_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ctrl_equipo_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ctrl_equipo_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

