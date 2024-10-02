<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_compras_alicuotas = AfipCitiComprasAlicuotas::getOxId($id);
//Gral::prr($afip_citi_compras_alicuotas);
?>

<div class="tabs ficha-afip_citi_compras_alicuotas" identificador="<?php echo $afip_citi_compras_alicuotas->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_compras_alicuotas id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_compras_alicuotas descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_prc_id">
            <div class="label"><?php Lang::_lang('AfipCitiPrc') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPrc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_cabecera_id">
            <div class="label"><?php Lang::_lang('AfipCitiCabecera') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCabecera()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_tipo_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_punto_venta">
            <div class="label"><?php Lang::_lang('afip_citi_punto_venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_numero_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiNumeroComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_codigo_documento_vendedor">
            <div class="label"><?php Lang::_lang('afip_citi_codigo_documento_vendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCodigoDocumentoVendedor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_numero_identificacion_vendedor">
            <div class="label"><?php Lang::_lang('afip_citi_numero_identificacion_vendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiNumeroIdentificacionVendedor()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_importe_neto_gravado">
            <div class="label"><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiImporteNetoGravado()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_alicuota_iva">
            <div class="label"><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiAlicuotaIva()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas afip_citi_importe_impuesto_liquidado">
            <div class="label"><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiImporteImpuestoLiquidado()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_alicuotas estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_alicuotas->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

