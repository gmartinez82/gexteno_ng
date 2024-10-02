<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_persona_gral_sucursal_id = Gral::getVars(2, 'id');
$per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($per_persona_gral_sucursal_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_GRAL_SUCURSAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_gral_sucursal->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona_gral_sucursal->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_PERSONA_GRAL_SUCURSAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona_gral_sucursal->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_persona_gral_sucursal->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

