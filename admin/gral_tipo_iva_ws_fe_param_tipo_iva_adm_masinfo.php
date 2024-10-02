<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_tipo_iva_ws_fe_param_tipo_iva_id = Gral::getVars(2, 'id');
$gral_tipo_iva_ws_fe_param_tipo_iva = GralTipoIvaWsFeParamTipoIva::getOxId($gral_tipo_iva_ws_fe_param_tipo_iva_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_tipo_iva_ws_fe_param_tipo_iva->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_iva_ws_fe_param_tipo_iva->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_tipo_iva_ws_fe_param_tipo_iva->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

