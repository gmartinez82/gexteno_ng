<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_atributo = InsAtributo::getOxId($id);
//Gral::prr($ins_atributo);
?>

<div class="tabs ficha-ins_atributo" identificador="<?php echo $ins_atributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_atributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_atributo->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_atributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_atributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_atributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_atributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_atributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_atributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_atributo orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_atributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_atributo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_atributo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

