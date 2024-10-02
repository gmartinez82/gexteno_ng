<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$veh_coche_imagen_id = Gral::getVars(2, 'id');
$veh_coche_imagen = VehCocheImagen::getOxId($veh_coche_imagen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_coche_imagen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_COCHE_IMAGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche_imagen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_coche_imagen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_COCHE_IMAGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche_imagen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_coche_imagen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

