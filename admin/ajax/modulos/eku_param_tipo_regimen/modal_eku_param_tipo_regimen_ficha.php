<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_regimen = EkuParamTipoRegimen::getOxId($id);
//Gral::prr($eku_param_tipo_regimen);
?>

<div class="tabs ficha-eku_param_tipo_regimen" identificador="<?php echo $eku_param_tipo_regimen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_regimen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_regimen->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_regimen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_regimen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_regimen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_regimen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_regimen codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_regimen->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_regimen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_regimen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_regimen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_regimen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_regimen estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_regimen->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

