<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura = PdeFactura::getOxId($id);
//Gral::prr($pde_factura);
?>

<div class="tabs ficha-pde_factura" identificador="<?php echo $pde_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura pde_factura_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeFacturaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPdeFacturaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura pde_tipo_factura_id">
            <div class="label"><?php Lang::_lang('PdeTipoFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPdeTipoFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura pde_tipo_origen_factura_id">
            <div class="label"><?php Lang::_lang('PdeTipoOrigenFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPdeTipoOrigenFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura numero_punto_venta">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getNumeroPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par pde_factura numero_factura">
            <div class="label"><?php Lang::_lang('Numero de Factura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getNumeroFactura()) ?>
            </div>
        </div>
		
        <div class="par pde_factura numero_factura_completo">
            <div class="label"><?php Lang::_lang('Numero de Factura Completo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getNumeroFacturaCompleto()) ?>
            </div>
        </div>
		
        <div class="par pde_factura cae">
            <div class="label"><?php Lang::_lang('Cae') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getCae()) ?>
            </div>
        </div>
		
        <div class="par pde_factura numero_despacho">
            <div class="label"><?php Lang::_lang('Numero de Despacho') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getNumeroDespacho()) ?>
            </div>
        </div>
		
        <div class="par pde_factura fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par pde_factura fecha_vencimiento">
            <div class="label"><?php Lang::_lang('Fecha de Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_factura->getFechaVencimiento())) ?>
            </div>
        </div>
		
        <div class="par pde_factura persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par pde_factura domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par pde_factura cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getCuit()) ?>
            </div>
        </div>
		
        <div class="par pde_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getAnio()) ?>
            </div>
        </div>
		
        <div class="par pde_factura gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura prv_descuento_financiero_id">
            <div class="label"><?php Lang::_lang('PrvDescuentoFinanciero') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getPrvDescuentoFinanciero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

