<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_condicion_credito_gral_fp_medio_pago = EkuParamCondicionCreditoGralFpMedioPago::getOxId($id);
//Gral::prr($eku_param_condicion_credito_gral_fp_medio_pago);
?>

<div class="tabs ficha-eku_param_condicion_credito_gral_fp_medio_pago" identificador="<?php echo $eku_param_condicion_credito_gral_fp_medio_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_condicion_credito_gral_fp_medio_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_credito_gral_fp_medio_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_condicion_credito_gral_fp_medio_pago eku_param_condicion_credito_id">
            <div class="label"><?php Lang::_lang('EkuParamCondicionCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_credito_gral_fp_medio_pago->getEkuParamCondicionCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_condicion_credito_gral_fp_medio_pago gral_fp_medio_pago_id">
            <div class="label"><?php Lang::_lang('GralFpMedioPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_credito_gral_fp_medio_pago->getGralFpMedioPago()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

