<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_de = EkuParamTipoDe::getOxId($id);
//Gral::prr($eku_param_tipo_de);
?>

<div class="tabs ficha-eku_param_tipo_de" identificador="<?php echo $eku_param_tipo_de->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_de id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_de->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_de descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_de->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_de codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_de->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_de codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_de->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_de observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_de->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_de orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_de->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_de estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_de->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

