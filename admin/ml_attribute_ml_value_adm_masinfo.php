<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_attribute_ml_value_id = Gral::getVars(2, 'id');
$ml_attribute_ml_value = MlAttributeMlValue::getOxId($ml_attribute_ml_value_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_attribute_ml_value->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_ML_VALUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ml_value->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute_ml_value->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_ML_VALUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ml_value->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute_ml_value->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

