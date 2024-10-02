<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$nov_novedad_us_grupo_id = Gral::getVars(2, 'id');
$nov_novedad_us_grupo = NovNovedadUsGrupo::getOxId($nov_novedad_us_grupo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($nov_novedad_us_grupo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOV_NOVEDAD_US_GRUPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_us_grupo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($nov_novedad_us_grupo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOV_NOVEDAD_US_GRUPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_us_grupo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($nov_novedad_us_grupo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

