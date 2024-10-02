<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_orden_trabajo_operacion_estado_id = Gral::getVars(2, 'id');
$prd_orden_trabajo_operacion_estado = PrdOrdenTrabajoOperacionEstado::getOxId($prd_orden_trabajo_operacion_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_orden_trabajo_operacion_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_OPERACION_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo_operacion_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_ORDEN_TRABAJO_OPERACION_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_orden_trabajo_operacion_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

