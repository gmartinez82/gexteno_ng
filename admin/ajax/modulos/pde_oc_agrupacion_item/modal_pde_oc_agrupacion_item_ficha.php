<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_agrupacion_item = PdeOcAgrupacionItem::getOxId($id);
//Gral::prr($pde_oc_agrupacion_item);
?>

<div class="tabs ficha-pde_oc_agrupacion_item" identificador="<?php echo $pde_oc_agrupacion_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_agrupacion_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_agrupacion_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item pde_oc_agrupacion_id">
            <div class="label"><?php Lang::_lang('PdeOcAgrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getPdeOcAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item importe_unidad">
            <div class="label"><?php Lang::_lang('Importe Unidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getImporteUnidad()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item prv_insumo_id">
            <div class="label"><?php Lang::_lang('PrvInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getPrvInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item prv_insumo_costo_id">
            <div class="label"><?php Lang::_lang('PrvInsumoCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getPrvInsumoCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item importe_esperado">
            <div class="label"><?php Lang::_lang('Importe Esperado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getImporteEsperado()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item afecta_costo">
            <div class="label"><?php Lang::_lang('Afecta Costo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_agrupacion_item->getAfectaCosto())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item prv_descuento_financiero_id">
            <div class="label"><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getPrvDescuentoFinanciero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item prv_descuento_comercial_id">
            <div class="label"><?php Lang::_lang('PrvDescuentoComercial') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getPrvDescuentoComercial()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_item estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_item->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

