<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_documento_gral_tipo_documento = EkuParamTipoDocumentoGralTipoDocumento::getOxId($id);
//Gral::prr($eku_param_tipo_documento_gral_tipo_documento);
?>

<div class="tabs ficha-eku_param_tipo_documento_gral_tipo_documento" identificador="<?php echo $eku_param_tipo_documento_gral_tipo_documento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_documento_gral_tipo_documento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_documento_gral_tipo_documento eku_param_tipo_documento_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getEkuParamTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_documento_gral_tipo_documento gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

