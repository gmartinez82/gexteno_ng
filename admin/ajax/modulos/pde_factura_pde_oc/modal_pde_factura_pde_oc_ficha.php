<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_pde_oc = PdeFacturaPdeOc::getOxId($id);
//Gral::prr($pde_factura_pde_oc);
?>

<div class="tabs ficha-pde_factura_pde_oc" identificador="<?php echo $pde_factura_pde_oc->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_pde_oc id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_pde_oc descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc pde_oc_id">
            <div class="label"><?php Lang::_lang('PdeOc') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getPdeOc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc ins_unidad_medida_id">
            <div class="label"><?php Lang::_lang('InsUnidadMedida') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getInsUnidadMedida()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc ins_insumo_costo_id">
            <div class="label"><?php Lang::_lang('InsInsumoCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getInsInsumoCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc importe_costo">
            <div class="label"><?php Lang::_lang('Imp Costo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getImporteCosto()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc porcentaje_descuento">
            <div class="label"><?php Lang::_lang('Porc Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getPorcentajeDescuento()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_pde_oc->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_pde_oc estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura_pde_oc->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

