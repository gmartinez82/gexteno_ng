<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_estado = FndChqEstado::getOxId($id);
//Gral::prr($fnd_chq_estado);
?>

<div class="tabs ficha-fnd_chq_estado" identificador="<?php echo $fnd_chq_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado fnd_chq_cheque_id">
            <div class="label"><?php Lang::_lang('FndChqCheque') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getFndChqCheque()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado fnd_chq_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndChqTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getFndChqTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado endosado">
            <div class="label"><?php Lang::_lang('Endosado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_estado->getEndosado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado fnd_caja_id">
            <div class="label"><?php Lang::_lang('FndCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getFndCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado gral_caja_id">
            <div class="label"><?php Lang::_lang('GralCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getGralCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

