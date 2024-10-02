<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_param_operacion_ope_operario_id = Gral::getVars(2, 'id');
$prd_param_operacion_ope_operario = PrdParamOperacionOpeOperario::getOxId($prd_param_operacion_ope_operario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_param_operacion_ope_operario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_PARAM_OPERACION_OPE_OPERARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_ope_operario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_param_operacion_ope_operario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_PARAM_OPERACION_OPE_OPERARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_ope_operario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_param_operacion_ope_operario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

