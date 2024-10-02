<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_tolerancia = EkuParamTipoTolerancia::getOxId($id);
//Gral::prr($eku_param_tipo_tolerancia);
?>

<div class="tabs ficha-eku_param_tipo_tolerancia" identificador="<?php echo $eku_param_tipo_tolerancia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_tolerancia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_tolerancia->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_tolerancia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_tolerancia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_tolerancia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_tolerancia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_tolerancia codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_tolerancia->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_tolerancia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_tolerancia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_tolerancia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_tolerancia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_tolerancia estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_tolerancia->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

