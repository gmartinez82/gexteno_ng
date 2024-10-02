<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_nota_credito_ws_fe_ope_solicitud_id = Gral::getVars(2, 'id');
$vta_nota_credito_ws_fe_ope_solicitud = VtaNotaCreditoWsFeOpeSolicitud::getOxId($vta_nota_credito_ws_fe_ope_solicitud_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_nota_credito_ws_fe_ope_solicitud->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_ws_fe_ope_solicitud->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_ws_fe_ope_solicitud->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

