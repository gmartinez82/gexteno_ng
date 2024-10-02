<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($id);
//Gral::prr($vta_presupuesto);
?>

<div class="tabs ficha-vta_presupuesto" identificador="<?php echo $vta_presupuesto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto vta_comprador_id">
            <div class="label"><?php Lang::_lang('VtaComprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getVtaComprador()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto vta_preventista_id">
            <div class="label"><?php Lang::_lang('VtaPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getVtaPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_fp_cuota_id">
            <div class="label"><?php Lang::_lang('GralFpCuota') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto ins_tipo_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsTipoListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto vta_presupuesto_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto vta_presupuesto_tipo_emision_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoTipoEmision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto persona_descripcion">
            <div class="label"><?php Lang::_lang('Persona Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto persona_documento">
            <div class="label"><?php Lang::_lang('Persona Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getPersonaDocumento()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto persona_email">
            <div class="label"><?php Lang::_lang('Persona Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getPersonaEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto fecha_entrega">
            <div class="label"><?php Lang::_lang('Fecha de Entrega') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaEntrega())) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto fecha_recordatorio">
            <div class="label"><?php Lang::_lang('Fecha de Recordatorio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaRecordatorio())) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto importe_subtotal">
            <div class="label"><?php Lang::_lang('Imp Subtotal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getImporteSubtotal()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto importe_descuento">
            <div class="label"><?php Lang::_lang('Imp Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getImporteDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto importe_politica_descuento">
            <div class="label"><?php Lang::_lang('Imp Pol Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getImportePoliticaDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto importe_recargo">
            <div class="label"><?php Lang::_lang('Imp Recargo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getImporteRecargo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto importe_total">
            <div class="label"><?php Lang::_lang('Imp Total') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getImporteTotal()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto cantidad_items">
            <div class="label"><?php Lang::_lang('Cant Items') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getCantidadItems()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto recargo">
            <div class="label"><?php Lang::_lang('Recargo %') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getRecargo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto nota_recordatorio">
            <div class="label"><?php Lang::_lang('Nota de Recordaorio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getNotaRecordatorio()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto incluye_logistica">
            <div class="label"><?php Lang::_lang('Incl Log') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getIncluyeLogistica())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto porcentaje_logistica">
            <div class="label"><?php Lang::_lang('Porc Logis') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getPorcentajeLogistica()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto importe_logistica">
            <div class="label"><?php Lang::_lang('Imp Logistica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getImporteLogistica()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

