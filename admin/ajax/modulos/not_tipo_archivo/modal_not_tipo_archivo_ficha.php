<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_tipo_archivo = NotTipoArchivo::getOxId($id);
//Gral::prr($not_tipo_archivo);
?>

<div class="tabs ficha-not_tipo_archivo" identificador="<?php echo $not_tipo_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_tipo_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par not_tipo_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_tipo_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_tipo_archivo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

