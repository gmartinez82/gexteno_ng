<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_mov_planificacion_tramo_id = Gral::getVars(2, 'id');
$per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($per_mov_planificacion_tramo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PerMovPlanificacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion_tramo->getPerMovPlanificacion()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PlnJornadaTramo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion_tramo->getPlnJornadaTramo()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_planificacion_tramo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_PLANIFICACION_TRAMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion_tramo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_planificacion_tramo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_PLANIFICACION_TRAMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_planificacion_tramo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_planificacion_tramo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

