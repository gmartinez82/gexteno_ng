<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_param_denominacion_tarjeta_gral_fp_medio_pago = EkuParamDenominacionTarjetaGralFpMedioPago::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuParamDenominacionTarjeta') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getEkuParamDenominacionTarjeta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralFpMedioPago') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getGralFpMedioPago()->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

