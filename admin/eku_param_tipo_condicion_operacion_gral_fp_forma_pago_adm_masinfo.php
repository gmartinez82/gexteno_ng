<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_condicion_operacion_gral_fp_forma_pago_id = Gral::getVars(2, 'id');
$eku_param_tipo_condicion_operacion_gral_fp_forma_pago = EkuParamTipoCondicionOperacionGralFpFormaPago::getOxId($eku_param_tipo_condicion_operacion_gral_fp_forma_pago_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_CONDICION_OPERACION_GRAL_FP_FORMA_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

