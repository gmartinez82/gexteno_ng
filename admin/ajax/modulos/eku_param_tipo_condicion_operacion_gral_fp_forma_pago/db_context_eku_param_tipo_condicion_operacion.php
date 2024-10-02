<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_tipo_condicion_operacion_gral_fp_forma_pago_id = Gral::getVars(2, 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago_id');
$eku_param_tipo_condicion_operacion_gral_fp_forma_pago = EkuParamTipoCondicionOperacionGralFpFormaPago::getOxId($eku_param_tipo_condicion_operacion_gral_fp_forma_pago_id);
$eku_param_tipo_condicion_operacion = $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getEkuParamTipoCondicionOperacion();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_tipo_condicion_operacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamTipoCondicionOperacion') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_condicion_operacion->getId()) ?> - <?php Gral::_echo($eku_param_tipo_condicion_operacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_tipo_condicion_operacion_alta.php?id=<?php echo($eku_param_tipo_condicion_operacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoCondicionOperacion') ?>: <strong><?php Gral::_echo($eku_param_tipo_condicion_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamTipoCondicionOperacionGralFpFormaPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getFiltrosArrXCampo('EkuParamTipoCondicionOperacion', 'eku_param_tipo_condicion_operacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamTipoCondicionOperacionGralFpFormaPagos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_tipo_condicion_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

