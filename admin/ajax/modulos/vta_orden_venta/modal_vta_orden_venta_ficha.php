<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta = VtaOrdenVenta::getOxId($id);
//Gral::prr($vta_orden_venta);
?>

<div class="tabs ficha-vta_orden_venta" identificador="<?php echo $vta_orden_venta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_presupuesto_ins_insumo_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaPresupuestoInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta ins_tipo_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsTipoListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getInsTipoListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_orden_venta_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_orden_venta_tipo_estado_facturacion_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_orden_venta_tipo_estado_remision_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta descuento">
            <div class="label"><?php Lang::_lang('descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta ins_insumo_costo_id">
            <div class="label"><?php Lang::_lang('InsInsumoCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getInsInsumoCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_costo">
            <div class="label"><?php Lang::_lang('Imp Costo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporteCosto()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_politica_descuento_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaPoliticaDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta vta_politica_descuento_rango_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuentoRango') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getVtaPoliticaDescuentoRango()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta porcentaje_politica_descuento">
            <div class="label"><?php Lang::_lang('Porc Pol Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getPorcentajePoliticaDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_politica_descuento">
            <div class="label"><?php Lang::_lang('Imp Pol Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImportePoliticaDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta incluye_logistica">
            <div class="label"><?php Lang::_lang('Incl Log') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta->getIncluyeLogistica())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comis') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_comision">
            <div class="label"><?php Lang::_lang('Imp Comis') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporteComision()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta porcentaje_logistica">
            <div class="label"><?php Lang::_lang('Porc Logis') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getPorcentajeLogistica()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_logistica">
            <div class="label"><?php Lang::_lang('Imp Logistica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporteLogistica()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta ins_insumo_bulto_id">
            <div class="label"><?php Lang::_lang('InsInsumoBulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getInsInsumoBulto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta cantidad_bulto">
            <div class="label"><?php Lang::_lang('Cant Bulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getCantidadBulto()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_descuento">
            <div class="label"><?php Lang::_lang('Imp Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporteDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe_recargo">
            <div class="label"><?php Lang::_lang('Imp Recargo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporteRecargo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getImporte()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

