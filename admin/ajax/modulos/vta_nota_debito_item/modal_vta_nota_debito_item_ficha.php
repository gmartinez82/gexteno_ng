<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_nota_debito_item = VtaNotaDebitoItem::getOxId($id);
//Gral::prr($vta_nota_debito_item);
?>

<div class="tabs ficha-vta_nota_debito_item" identificador="<?php echo $vta_nota_debito_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_nota_debito_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_nota_debito_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item vta_nota_debito_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getVtaNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item vta_nota_debito_concepto_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebitoConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getVtaNotaDebitoConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item percepcion_iibb_aplica">
            <div class="label"><?php Lang::_lang('percepcion_iibb_aplica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getPercepcionIibbApl()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_nota_debito_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

