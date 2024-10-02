<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_condicion_credito_gral_fp_medio_pago_id = Gral::getVars(2, 'eku_param_condicion_credito_gral_fp_medio_pago_id');
$eku_param_condicion_credito_gral_fp_medio_pago = EkuParamCondicionCreditoGralFpMedioPago::getOxId($eku_param_condicion_credito_gral_fp_medio_pago_id);
$eku_param_condicion_credito = $eku_param_condicion_credito_gral_fp_medio_pago->getEkuParamCondicionCredito();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_condicion_credito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamCondicionCredito') ?>: 
        <strong><?php Gral::_echo($eku_param_condicion_credito->getId()) ?> - <?php Gral::_echo($eku_param_condicion_credito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_condicion_credito_alta.php?id=<?php echo($eku_param_condicion_credito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamCondicionCredito') ?>: <strong><?php Gral::_echo($eku_param_condicion_credito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamCondicionCreditoGralFpMedioPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_condicion_credito_gral_fp_medio_pago->getFiltrosArrXCampo('EkuParamCondicionCredito', 'eku_param_condicion_credito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamCondicionCreditoGralFpMedioPagos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_condicion_credito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

