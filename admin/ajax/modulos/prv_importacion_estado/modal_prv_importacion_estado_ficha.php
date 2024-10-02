<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_importacion_estado = PrvImportacionEstado::getOxId($id);
//Gral::prr($prv_importacion_estado);
?>

<div class="tabs ficha-prv_importacion_estado" identificador="<?php echo $prv_importacion_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_importacion_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_importacion_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado prv_importacion_id">
            <div class="label"><?php Lang::_lang('PrvImportacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getPrvImportacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado prv_importacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PrvImportacionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getPrvImportacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_importacion_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_importacion_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_estado->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

