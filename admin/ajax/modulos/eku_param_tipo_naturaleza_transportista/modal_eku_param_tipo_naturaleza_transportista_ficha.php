<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_naturaleza_transportista = EkuParamTipoNaturalezaTransportista::getOxId($id);
//Gral::prr($eku_param_tipo_naturaleza_transportista);
?>

<div class="tabs ficha-eku_param_tipo_naturaleza_transportista" identificador="<?php echo $eku_param_tipo_naturaleza_transportista->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_naturaleza_transportista id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_transportista->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_naturaleza_transportista descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_transportista->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_transportista codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_transportista->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_transportista codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_transportista->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_transportista observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_transportista->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_transportista orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_transportista->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_transportista estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_naturaleza_transportista->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

