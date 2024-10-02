<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_presencia_gral_escenario = EkuParamTipoPresenciaGralEscenario::getOxId($id);
//Gral::prr($eku_param_tipo_presencia_gral_escenario);
?>

<div class="tabs ficha-eku_param_tipo_presencia_gral_escenario" identificador="<?php echo $eku_param_tipo_presencia_gral_escenario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_presencia_gral_escenario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_presencia_gral_escenario eku_param_tipo_presencia_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoPresencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getEkuParamTipoPresencia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_presencia_gral_escenario gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

