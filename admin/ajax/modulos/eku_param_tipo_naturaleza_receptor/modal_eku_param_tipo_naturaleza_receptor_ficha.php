<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_naturaleza_receptor = EkuParamTipoNaturalezaReceptor::getOxId($id);
//Gral::prr($eku_param_tipo_naturaleza_receptor);
?>

<div class="tabs ficha-eku_param_tipo_naturaleza_receptor" identificador="<?php echo $eku_param_tipo_naturaleza_receptor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_naturaleza_receptor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_naturaleza_receptor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_receptor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_receptor codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_receptor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_receptor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_receptor estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_naturaleza_receptor->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

