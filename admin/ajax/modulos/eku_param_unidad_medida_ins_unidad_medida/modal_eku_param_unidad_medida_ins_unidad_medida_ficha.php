<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxId($id);
//Gral::prr($eku_param_unidad_medida_ins_unidad_medida);
?>

<div class="tabs ficha-eku_param_unidad_medida_ins_unidad_medida" identificador="<?php echo $eku_param_unidad_medida_ins_unidad_medida->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_unidad_medida_ins_unidad_medida id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_unidad_medida_ins_unidad_medida eku_param_unidad_medida_id">
            <div class="label"><?php Lang::_lang('EkuParamUnidadMedida') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getEkuParamUnidadMedida()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida_ins_unidad_medida ins_unidad_medida_id">
            <div class="label"><?php Lang::_lang('InsUnidadMedida') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getInsUnidadMedida()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

