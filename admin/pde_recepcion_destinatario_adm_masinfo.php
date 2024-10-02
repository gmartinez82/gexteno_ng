<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_recepcion_destinatario_id = Gral::getVars(2, 'id');
$pde_recepcion_destinatario = PdeRecepcionDestinatario::getOxId($pde_recepcion_destinatario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recepcion_destinatario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECEPCION_DESTINATARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_destinatario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recepcion_destinatario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECEPCION_DESTINATARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_destinatario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recepcion_destinatario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

