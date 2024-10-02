<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_afectacion_tributaria_gral_tipo_iva = EkuParamTipoAfectacionTributariaGralTipoIva::getOxId($id);
//Gral::prr($eku_param_tipo_afectacion_tributaria_gral_tipo_iva);
?>

<div class="tabs ficha-eku_param_tipo_afectacion_tributaria_gral_tipo_iva" identificador="<?php echo $eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_afectacion_tributaria_gral_tipo_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_afectacion_tributaria_gral_tipo_iva eku_param_tipo_afectacion_tributaria_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoAfectacionTributaria') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getEkuParamTipoAfectacionTributaria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_afectacion_tributaria_gral_tipo_iva gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

