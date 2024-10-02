<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_clasificacion = InsClasificacion::getOxId($id);
//Gral::prr($ins_clasificacion);
?>

<div class="tabs ficha-ins_clasificacion" identificador="<?php echo $ins_clasificacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_clasificacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_clasificacion->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_clasificacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_clasificacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_clasificacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_clasificacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_clasificacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_clasificacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_clasificacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_clasificacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_clasificacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_clasificacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

