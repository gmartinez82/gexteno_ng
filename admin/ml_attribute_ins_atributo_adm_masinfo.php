<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_attribute_ins_atributo_id = Gral::getVars(2, 'id');
$ml_attribute_ins_atributo = MlAttributeInsAtributo::getOxId($ml_attribute_ins_atributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_attribute_ins_atributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_INS_ATRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ins_atributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute_ins_atributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_INS_ATRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ins_atributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute_ins_atributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

