<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_venta_ml_info = InsVentaMlInfo::getOxId($id);
//Gral::prr($ins_venta_ml_info);
?>

<div class="tabs ficha-ins_venta_ml_info" identificador="<?php echo $ins_venta_ml_info->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_venta_ml_info id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_venta_ml_info ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info descripcion">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info descripcion_breve">
            <div class="label"><?php Lang::_lang('Desc Breve') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getDescripcionBreve()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info descripcion_empresa">
            <div class="label"><?php Lang::_lang('Desc Empresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getDescripcionEmpresa()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getImporte()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_identificador">
            <div class="label"><?php Lang::_lang('ML ID') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlIdentificador()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_category_id">
            <div class="label"><?php Lang::_lang('ML Cat') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryId()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_category_desc">
            <div class="label"><?php Lang::_lang('ML Cat') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryDesc()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_category_cod">
            <div class="label"><?php Lang::_lang('ML Cat Cod') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlCategoryCod()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_listing_type_id">
            <div class="label"><?php Lang::_lang('ML Listing Type') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlListingTypeId()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_listing_type_desc">
            <div class="label"><?php Lang::_lang('ML Listing Type') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlListingTypeDesc()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_condition_id">
            <div class="label"><?php Lang::_lang('ML Condition') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlConditionId()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_condition_desc">
            <div class="label"><?php Lang::_lang('ML Condition') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlConditionDesc()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_shipping_mode_id">
            <div class="label"><?php Lang::_lang('ML Shipping Mode') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlShippingModeId()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_shipping_mode_desc">
            <div class="label"><?php Lang::_lang('ML Shipping Mode') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlShippingModeDesc()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_permalink">
            <div class="label"><?php Lang::_lang('ML Permalink') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlPermalink()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_start_time">
            <div class="label"><?php Lang::_lang('ML Start Time') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlStartTime()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_expiration_time">
            <div class="label"><?php Lang::_lang('ML Exp Time') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlExpirationTime()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_seller">
            <div class="label"><?php Lang::_lang('ML Seller') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlSeller()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_status">
            <div class="label"><?php Lang::_lang('ML Status') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlStatus()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_item_status_id">
            <div class="label"><?php Lang::_lang('MlItemStatus') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlItemStatus()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_initial_quantity">
            <div class="label"><?php Lang::_lang('ML Initial Quantity') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlInitialQuantity()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_available_quantity">
            <div class="label"><?php Lang::_lang('ML Available Quantity') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlAvailableQuantity()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_sold_quantity">
            <div class="label"><?php Lang::_lang('ML Sold Quantity') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlSoldQuantity()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_price">
            <div class="label"><?php Lang::_lang('ML Price') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getMlPrice()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_ultima_actualizacion">
            <div class="label"><?php Lang::_lang('ML Ult Act') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getMlUltimaActualizacion())) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_free_shipping">
            <div class="label"><?php Lang::_lang('ML Free Shipping') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlFreeShipping())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info ml_local_pickup">
            <div class="label"><?php Lang::_lang('ML Local Pickup') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlLocalPickup())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info editado">
            <div class="label"><?php Lang::_lang('editado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info publicado">
            <div class="label"><?php Lang::_lang('publicado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

