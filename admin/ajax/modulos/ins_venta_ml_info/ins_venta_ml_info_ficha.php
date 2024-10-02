<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_venta_ml_info = InsVentaMlInfo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Titulo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Desc Breve') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getDescripcionBreve()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Desc Empresa') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getDescripcionEmpresa()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getCantidad()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getImporte()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML ID') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlIdentificador()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Cat') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlCategoryId()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Cat') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlCategoryDesc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Cat Cod') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlCategoryCod()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Listing Type') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlListingTypeId()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Listing Type') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlListingTypeDesc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Condition') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlConditionId()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Condition') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlConditionDesc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Shipping Mode') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlShippingModeId()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Shipping Mode') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlShippingModeDesc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Permalink') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlPermalink()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Start Time') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlStartTime()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Exp Time') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlExpirationTime()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Seller') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlSeller()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Status') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlStatus()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('MlItemStatus') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlItemStatus()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Initial Quantity') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlInitialQuantity()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Available Quantity') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlAvailableQuantity()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Sold Quantity') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlSoldQuantity()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Price') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getMlPrice()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Ult Act') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getMlUltimaActualizacion())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('ML Free Shipping') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlFreeShipping())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('ML Local Pickup') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlLocalPickup())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('editado') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('publicado') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_venta_ml_info->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

