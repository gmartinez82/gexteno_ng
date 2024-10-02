<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($id);
//Gral::prr($vta_presupuesto_ins_insumo);
?>

<div class="tabs ficha-vta_presupuesto_ins_insumo" identificador="<?php echo $vta_presupuesto_ins_insumo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_ins_insumo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_ins_insumo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo ins_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo descuento">
            <div class="label"><?php Lang::_lang('descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo conflicto">
            <div class="label"><?php Lang::_lang('Conflicto') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_ins_insumo->getConflicto())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo ins_insumo_costo_id">
            <div class="label"><?php Lang::_lang('InsInsumoCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo importe_costo">
            <div class="label"><?php Lang::_lang('Imp Costo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteCosto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo vta_politica_descuento_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo vta_politica_descuento_rango_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuentoRango') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoRango()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo porcentaje_politica_descuento">
            <div class="label"><?php Lang::_lang('Porc Pol Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajePoliticaDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo importe_politica_descuento">
            <div class="label"><?php Lang::_lang('Imp Pol Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getImportePoliticaDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comis') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo importe_comision">
            <div class="label"><?php Lang::_lang('Imp Comis') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteComision()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo ins_insumo_bulto_id">
            <div class="label"><?php Lang::_lang('InsInsumoBulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoBulto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo cantidad_bulto">
            <div class="label"><?php Lang::_lang('Cant Bulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidadBulto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo importe_descuento_bulto">
            <div class="label"><?php Lang::_lang('Imp Desc Bulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getImporteDescuentoBulto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo porcentaje_descuento_bulto">
            <div class="label"><?php Lang::_lang('Porc Descuento Bulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajeDescuentoBulto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_ins_insumo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_ins_insumo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_ins_insumo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

