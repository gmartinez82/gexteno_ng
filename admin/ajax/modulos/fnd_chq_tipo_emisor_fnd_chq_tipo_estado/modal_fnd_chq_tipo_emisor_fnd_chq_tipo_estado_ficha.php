<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = FndChqTipoEmisorFndChqTipoEstado::getOxId($id);
//Gral::prr($fnd_chq_tipo_emisor_fnd_chq_tipo_estado);
?>

<div class="tabs ficha-fnd_chq_tipo_emisor_fnd_chq_tipo_estado" identificador="<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado fnd_chq_tipo_emisor_id">
            <div class="label"><?php Lang::_lang('FndChqTipoEmisor') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado fnd_chq_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndChqTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado fnd_chq_tipo_estado_posible">
            <div class="label"><?php Lang::_lang('FndChqTipoEstado Posible') ?></div>
            <div class="dato">
                <?php Gral::_echo(($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible() != 'null') ? FndChqTipoEstado::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado cambio_automatico">
            <div class="label"><?php Lang::_lang('Cambio Automatico') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado cambio_manual">
            <div class="label"><?php Lang::_lang('Cambio Manual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado predeterminado">
            <div class="label"><?php Lang::_lang('Predederminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado cambio_otro_comprobante">
            <div class="label"><?php Lang::_lang('Cambio Otro Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado cambio_simultaneo">
            <div class="label"><?php Lang::_lang('Cambio Simultaneo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor_fnd_chq_tipo_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

