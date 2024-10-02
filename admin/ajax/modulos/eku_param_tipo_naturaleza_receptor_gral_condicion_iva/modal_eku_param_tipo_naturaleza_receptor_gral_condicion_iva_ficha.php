<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_naturaleza_receptor_gral_condicion_iva = EkuParamTipoNaturalezaReceptorGralCondicionIva::getOxId($id);
//Gral::prr($eku_param_tipo_naturaleza_receptor_gral_condicion_iva);
?>

<div class="tabs ficha-eku_param_tipo_naturaleza_receptor_gral_condicion_iva" identificador="<?php echo $eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_naturaleza_receptor_gral_condicion_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_naturaleza_receptor_gral_condicion_iva eku_param_tipo_naturaleza_receptor_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getEkuParamTipoNaturalezaReceptor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_naturaleza_receptor_gral_condicion_iva gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

