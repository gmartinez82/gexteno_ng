<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_unidad_medida_atributo = InsUnidadMedidaAtributo::getOxId($id);
//Gral::prr($ins_unidad_medida_atributo);
?>

<div class="tabs ficha-ins_unidad_medida_atributo" identificador="<?php echo $ins_unidad_medida_atributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_unidad_medida_atributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_unidad_medida_atributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_atributo descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_atributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_atributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_atributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_atributo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_atributo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

