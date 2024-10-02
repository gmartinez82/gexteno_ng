<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_category_ml_shipping_mode_id = Gral::getVars(2, 'id');
$ml_category_ml_shipping_mode = MlCategoryMlShippingMode::getOxId($ml_category_ml_shipping_mode_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_category_ml_shipping_mode->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_CATEGORY_ML_SHIPPING_MODE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_category_ml_shipping_mode->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_category_ml_shipping_mode->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_CATEGORY_ML_SHIPPING_MODE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_category_ml_shipping_mode->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_category_ml_shipping_mode->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

