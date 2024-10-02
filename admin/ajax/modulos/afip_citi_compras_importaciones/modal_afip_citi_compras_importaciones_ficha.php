<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_compras_importaciones = AfipCitiComprasImportaciones::getOxId($id);
//Gral::prr($afip_citi_compras_importaciones);
?>

<div class="tabs ficha-afip_citi_compras_importaciones" identificador="<?php echo $afip_citi_compras_importaciones->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_compras_importaciones id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_compras_importaciones descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones afip_citi_prc_id">
            <div class="label"><?php Lang::_lang('AfipCitiPrc') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiPrc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones afip_citi_cabecera_id">
            <div class="label"><?php Lang::_lang('AfipCitiCabecera') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiCabecera()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones afip_citi_despacho_importacion">
            <div class="label"><?php Lang::_lang('afip_citi_despacho_importacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiDespachoImportacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones afip_citi_importe_neto_gravado">
            <div class="label"><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiImporteNetoGravado()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones afip_citi_alicuota_iva">
            <div class="label"><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiAlicuotaIva()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones afip_citi_importe_impuesto_liquidado">
            <div class="label"><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiImporteImpuestoLiquidado()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_compras_importaciones estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_compras_importaciones->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

