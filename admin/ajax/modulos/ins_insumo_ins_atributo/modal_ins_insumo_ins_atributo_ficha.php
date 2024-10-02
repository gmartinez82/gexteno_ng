<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_ins_atributo = InsInsumoInsAtributo::getOxId($id);
//Gral::prr($ins_insumo_ins_atributo);
?>

<div class="tabs ficha-ins_insumo_ins_atributo" identificador="<?php echo $ins_insumo_ins_atributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_ins_atributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_atributo->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_ins_atributo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_atributo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_ins_atributo ins_atributo_id">
            <div class="label"><?php Lang::_lang('InsAtributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_atributo->getInsAtributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_ins_atributo valor">
            <div class="label"><?php Lang::_lang('Valor') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_atributo->getValor()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_ins_atributo ins_unidad_medida_atributo_id">
            <div class="label"><?php Lang::_lang('InsUnidadMedidaAtributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_atributo->getInsUnidadMedidaAtributo()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

