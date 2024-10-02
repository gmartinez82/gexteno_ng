<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_factura_vta_tributo = VtaFacturaVtaTributo::getOxId($id);
//Gral::prr($vta_factura_vta_tributo);
?>

<div class="tabs ficha-vta_factura_vta_tributo" identificador="<?php echo $vta_factura_vta_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_factura_vta_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_factura_vta_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo vta_tributo_id">
            <div class="label"><?php Lang::_lang('VtaTributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getVtaTributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo importe_imponible">
            <div class="label"><?php Lang::_lang('Imp Imponible') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getImporteImponible()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo importe_tributo">
            <div class="label"><?php Lang::_lang('Imp Tributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getImporteTributo()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo alicuota_porcentual">
            <div class="label"><?php Lang::_lang('Alicuota Porcentual') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getAlicuotaPorcentual()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo alicuota_decimal">
            <div class="label"><?php Lang::_lang('Alicuota Decimal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getAlicuotaDecimal()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_vta_tributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_vta_tributo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_factura_vta_tributo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

