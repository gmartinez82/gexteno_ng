<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_vehiculo_tipo_combustible_id = Gral::getVars(2, 'id');
$eku_param_vehiculo_tipo_combustible = EkuParamVehiculoTipoCombustible::getOxId($eku_param_vehiculo_tipo_combustible_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_vehiculo_tipo_combustible->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_vehiculo_tipo_combustible->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_VEHICULO_TIPO_COMBUSTIBLE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_vehiculo_tipo_combustible->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_VEHICULO_TIPO_COMBUSTIBLE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_vehiculo_tipo_combustible->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_vehiculo_tipo_combustible->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

