<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_estado = FndCajaEstado::getOxId($id);
//Gral::prr($fnd_caja_estado);
?>

<div class="tabs ficha-fnd_caja_estado" identificador="<?php echo $fnd_caja_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado fnd_caja_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndCajaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getFndCajaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

