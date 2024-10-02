<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_traslado_tipo_identificacion_vehiculo_id = Gral::getVars(2, 'id');
$eku_param_traslado_tipo_identificacion_vehiculo = EkuParamTrasladoTipoIdentificacionVehiculo::getOxId($eku_param_traslado_tipo_identificacion_vehiculo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_traslado_tipo_identificacion_vehiculo->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_traslado_tipo_identificacion_vehiculo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TRASLADO_TIPO_IDENTIFICACION_VEHICULO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_traslado_tipo_identificacion_vehiculo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TRASLADO_TIPO_IDENTIFICACION_VEHICULO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_traslado_tipo_identificacion_vehiculo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_traslado_tipo_identificacion_vehiculo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

