<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_value_ins_marca_id = Gral::getVars(2, 'id');
$ml_value_ins_marca = MlValueInsMarca::getOxId($ml_value_ins_marca_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_value_ins_marca->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_VALUE_INS_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value_ins_marca->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_value_ins_marca->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_VALUE_INS_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value_ins_marca->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_value_ins_marca->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

