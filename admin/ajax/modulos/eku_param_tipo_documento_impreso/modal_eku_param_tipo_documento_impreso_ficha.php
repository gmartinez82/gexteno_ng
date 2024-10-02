<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_documento_impreso = EkuParamTipoDocumentoImpreso::getOxId($id);
//Gral::prr($eku_param_tipo_documento_impreso);
?>

<div class="tabs ficha-eku_param_tipo_documento_impreso" identificador="<?php echo $eku_param_tipo_documento_impreso->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_documento_impreso id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_impreso->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_documento_impreso descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_impreso->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_documento_impreso codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_impreso->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_documento_impreso codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_impreso->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_documento_impreso observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_impreso->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_documento_impreso orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_documento_impreso->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_documento_impreso estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_documento_impreso->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

