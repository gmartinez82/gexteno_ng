<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_denominacion_tarjeta_gral_fp_medio_pago_id = Gral::getVars(2, 'eku_param_denominacion_tarjeta_gral_fp_medio_pago_id');
$eku_param_denominacion_tarjeta_gral_fp_medio_pago = EkuParamDenominacionTarjetaGralFpMedioPago::getOxId($eku_param_denominacion_tarjeta_gral_fp_medio_pago_id);
$gral_fp_medio_pago = $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getGralFpMedioPago();

?>
<div class="datos" id="<?php Gral::_echo($gral_fp_medio_pago->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralFpMedioPago') ?>: 
        <strong><?php Gral::_echo($gral_fp_medio_pago->getId()) ?> - <?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_fp_medio_pago_alta.php?id=<?php echo($gral_fp_medio_pago->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralFpMedioPago') ?>: <strong><?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamDenominacionTarjetaGralFpMedioPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getFiltrosArrXCampo('GralFpMedioPago', 'gral_fp_medio_pago_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPagos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

