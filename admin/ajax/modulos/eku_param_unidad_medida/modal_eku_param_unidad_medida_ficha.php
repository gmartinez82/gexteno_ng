<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_unidad_medida = EkuParamUnidadMedida::getOxId($id);
//Gral::prr($eku_param_unidad_medida);
?>

<div class="tabs ficha-eku_param_unidad_medida" identificador="<?php echo $eku_param_unidad_medida->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_unidad_medida id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_unidad_medida descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida representacion">
            <div class="label"><?php Lang::_lang('Repres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getRepresentacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_unidad_medida->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_unidad_medida estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_unidad_medida->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

