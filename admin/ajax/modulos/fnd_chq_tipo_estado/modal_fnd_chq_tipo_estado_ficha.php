<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_tipo_estado = FndChqTipoEstado::getOxId($id);
//Gral::prr($fnd_chq_tipo_estado);
?>

<div class="tabs ficha-fnd_chq_tipo_estado" identificador="<?php echo $fnd_chq_tipo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_tipo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_tipo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado en_cartera">
            <div class="label"><?php Lang::_lang('En Cartera') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getEnCartera())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado anulado">
            <div class="label"><?php Lang::_lang('Anulado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getAnulado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado cambio_automatico">
            <div class="label"><?php Lang::_lang('Cambio Automatico') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getCambioAutomatico())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado cambio_manual">
            <div class="label"><?php Lang::_lang('Cambio Manual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getCambioManual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

