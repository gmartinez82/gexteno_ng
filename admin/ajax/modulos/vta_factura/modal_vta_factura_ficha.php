<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_factura = VtaFactura::getOxId($id);
//Gral::prr($vta_factura);
?>

<div class="tabs ficha-vta_factura" identificador="<?php echo $vta_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_factura_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaFacturaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_tipo_factura_id">
            <div class="label"><?php Lang::_lang('VtaTipoFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaTipoFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_tipo_origen_factura_id">
            <div class="label"><?php Lang::_lang('VtaTipoOrigenFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaTipoOrigenFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_punto_venta_id">
            <div class="label"><?php Lang::_lang('VtaPuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_fp_cuota_id">
            <div class="label"><?php Lang::_lang('GralFpCuota') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralFpCuota()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_preventista_id">
            <div class="label"><?php Lang::_lang('VtaPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_comprador_id">
            <div class="label"><?php Lang::_lang('VtaComprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaComprador()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par vta_factura numero_factura">
            <div class="label"><?php Lang::_lang('Numero de Factura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getNumeroFactura()) ?>
            </div>
        </div>
		
        <div class="par vta_factura numero_factura_completo">
            <div class="label"><?php Lang::_lang('Numero de Factura Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getNumeroFacturaCompleto()) ?>
            </div>
        </div>
		
        <div class="par vta_factura cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getCae()) ?>
            </div>
        </div>
		
        <div class="par vta_factura fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_factura fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura persona_documento">
            <div class="label"><?php Lang::_lang('Persona Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getPersonaDocumento()) ?>
            </div>
        </div>
		
        <div class="par vta_factura persona_email">
            <div class="label"><?php Lang::_lang('Persona Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getPersonaEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_factura razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par vta_factura domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par vta_factura cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getCuit()) ?>
            </div>
        </div>
		
        <div class="par vta_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_factura vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par vta_factura anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getAnio()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par vta_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

