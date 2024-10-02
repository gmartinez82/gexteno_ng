<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_tipo_necesidad = InsTipoNecesidad::getOxId($id);
//Gral::prr($ins_tipo_necesidad);
?>

<div class="tabs ficha-ins_tipo_necesidad" identificador="<?php echo $ins_tipo_necesidad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_tipo_necesidad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_necesidad->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_tipo_necesidad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_necesidad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_necesidad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_necesidad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_necesidad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_necesidad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_necesidad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_necesidad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_necesidad estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_necesidad->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

