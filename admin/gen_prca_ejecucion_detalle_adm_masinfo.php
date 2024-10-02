<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_prca_ejecucion_detalle_id = Gral::getVars(2, 'id');
$gen_prca_ejecucion_detalle = GenPrcaEjecucionDetalle::getOxId($gen_prca_ejecucion_detalle_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_prca_ejecucion_detalle->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_PRCA_EJECUCION_DETALLE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_prca_ejecucion_detalle->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_PRCA_EJECUCION_DETALLE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_prca_ejecucion_detalle->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

