<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_id = Gral::getVars(2, 'id');
$vta_tipo_nota_debito_ws_fe_param_tipo_comprobante = VtaTipoNotaDebitoWsFeParamTipoComprobante::getOxId($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_NOTA_DEBITO_WS_FE_PARAM_TIPO_COMPROBANTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_nota_debito_ws_fe_param_tipo_comprobante->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

