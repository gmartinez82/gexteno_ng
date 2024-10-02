<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_cliente_gral_actividad_id = Gral::getVars(2, 'id');
$cli_cliente_gral_actividad = CliClienteGralActividad::getOxId($cli_cliente_gral_actividad_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_gral_actividad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_GRAL_ACTIVIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_actividad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_gral_actividad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_GRAL_ACTIVIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_gral_actividad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_gral_actividad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

