<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_telefono_id = Gral::getVars(2, 'id');
$prv_telefono = PrvTelefono::getOxId($prv_telefono_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoPais') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_telefono->getGeoPais()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_telefono->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_TELEFONO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_telefono->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_TELEFONO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_telefono->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

