<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_condicion_operacion_gral_fp_forma_pago = EkuParamTipoCondicionOperacionGralFpFormaPago::getOxId($id);
//Gral::prr($eku_param_tipo_condicion_operacion_gral_fp_forma_pago);
?>

<div class="tabs ficha-eku_param_tipo_condicion_operacion_gral_fp_forma_pago" identificador="<?php echo $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_condicion_operacion_gral_fp_forma_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_condicion_operacion_gral_fp_forma_pago eku_param_tipo_condicion_operacion_id">
            <div class="label"><?php Lang::_lang('EkuParamTipoCondicionOperacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getEkuParamTipoCondicionOperacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_condicion_operacion_gral_fp_forma_pago gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

