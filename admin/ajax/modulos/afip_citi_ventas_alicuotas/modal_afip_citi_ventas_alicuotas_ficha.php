<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_ventas_alicuotas = AfipCitiVentasAlicuotas::getOxId($id);
//Gral::prr($afip_citi_ventas_alicuotas);
?>

<div class="tabs ficha-afip_citi_ventas_alicuotas" identificador="<?php echo $afip_citi_ventas_alicuotas->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_ventas_alicuotas id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_ventas_alicuotas descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_prc_id">
            <div class="label"><?php Lang::_lang('AfipCitiPrc') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiPrc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_cabecera_id">
            <div class="label"><?php Lang::_lang('AfipCitiCabecera') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiCabecera()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_tipo_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_punto_venta">
            <div class="label"><?php Lang::_lang('afip_citi_punto_venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_numero_comprobante">
            <div class="label"><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiNumeroComprobante()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_importe_neto_gravado">
            <div class="label"><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiImporteNetoGravado()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_alicuota_iva">
            <div class="label"><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiAlicuotaIva()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas afip_citi_importe_impuesto_liquidado">
            <div class="label"><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiImporteImpuestoLiquidado()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas vta_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getVtaNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas vta_nota_debito_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getVtaNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_ventas_alicuotas estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_ventas_alicuotas->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

