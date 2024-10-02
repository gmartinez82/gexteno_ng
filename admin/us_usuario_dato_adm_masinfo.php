<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_usuario_dato_id = Gral::getVars(2, 'id');
$us_usuario_dato = UsUsuarioDato::getOxId($us_usuario_dato_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_usuario_dato->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_USUARIO_DATO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_dato->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_usuario_dato->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_USUARIO_DATO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_dato->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_usuario_dato->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

