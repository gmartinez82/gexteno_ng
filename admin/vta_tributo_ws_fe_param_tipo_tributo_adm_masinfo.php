<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tributo_ws_fe_param_tipo_tributo_id = Gral::getVars(2, 'id');
$vta_tributo_ws_fe_param_tipo_tributo = VtaTributoWsFeParamTipoTributo::getOxId($vta_tributo_ws_fe_param_tipo_tributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tributo_ws_fe_param_tipo_tributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_ws_fe_param_tipo_tributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_ws_fe_param_tipo_tributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

