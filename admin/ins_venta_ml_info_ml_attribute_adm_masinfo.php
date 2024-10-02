<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_venta_ml_info_ml_attribute_id = Gral::getVars(2, 'id');
$ins_venta_ml_info_ml_attribute = InsVentaMlInfoMlAttribute::getOxId($ins_venta_ml_info_ml_attribute_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsVentaMlInfo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info_ml_attribute->getInsVentaMlInfo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('MlAttribute') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info_ml_attribute->getMlAttribute()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('MlValue') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info_ml_attribute->getMlValue()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info_ml_attribute->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_VENTA_ML_INFO_ML_ATTRIBUTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info_ml_attribute->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_venta_ml_info_ml_attribute->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_VENTA_ML_INFO_ML_ATTRIBUTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info_ml_attribute->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_venta_ml_info_ml_attribute->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

