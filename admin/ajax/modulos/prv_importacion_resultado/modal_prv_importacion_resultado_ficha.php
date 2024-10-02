<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_importacion_resultado = PrvImportacionResultado::getOxId($id);
//Gral::prr($prv_importacion_resultado);
?>

<div class="tabs ficha-prv_importacion_resultado" identificador="<?php echo $prv_importacion_resultado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_importacion_resultado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_importacion_resultado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_resultado prv_importacion_id">
            <div class="label"><?php Lang::_lang('PrvImportacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getPrvImportacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_resultado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_resultado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_resultado observacion_tecnica">
            <div class="label"><?php Lang::_lang('Observaciones Tecnicas') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getObservacionTecnica()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_resultado estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getObservacionTecnica()) ?>
            </div>
        </div>
		
        <div class="par prv_importacion_resultado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_importacion_resultado->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

