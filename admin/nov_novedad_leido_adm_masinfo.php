<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$nov_novedad_leido_id = Gral::getVars(2, 'id');
$nov_novedad_leido = NovNovedadLeido::getOxId($nov_novedad_leido_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($nov_novedad_leido->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOV_NOVEDAD_LEIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($nov_novedad_leido->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOV_NOVEDAD_LEIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($nov_novedad_leido->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

