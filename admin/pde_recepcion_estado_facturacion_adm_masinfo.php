<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_recepcion_estado_facturacion_id = Gral::getVars(2, 'id');
$pde_recepcion_estado_facturacion = PdeRecepcionEstadoFacturacion::getOxId($pde_recepcion_estado_facturacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recepcion_estado_facturacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECEPCION_ESTADO_FACTURACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado_facturacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recepcion_estado_facturacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECEPCION_ESTADO_FACTURACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado_facturacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recepcion_estado_facturacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

