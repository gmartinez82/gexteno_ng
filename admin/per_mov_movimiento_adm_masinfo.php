<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_mov_movimiento_id = Gral::getVars(2, 'id');
$per_mov_movimiento = PerMovMovimiento::getOxId($per_mov_movimiento_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_movimiento->getGralEmpresa()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_movimiento->getPerPersona()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_movimiento->getPerMovTipoEstado()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_movimiento->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_MOVIMIENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_movimiento->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_MOVIMIENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_movimiento->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

