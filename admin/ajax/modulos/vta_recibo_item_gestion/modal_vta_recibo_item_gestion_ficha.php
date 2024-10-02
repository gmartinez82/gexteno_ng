<?php
include "_autoload.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_item = VtaReciboItem::getOxId($id);
//Gral::prr($vta_recibo_item);
?>

<div class="tabs ficha-vta_recibo_item" identificador="<?php echo $vta_recibo_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_"><?php Lang::_lang() ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item vta_recibo_concepto_id">
            <div class="label"><?php Lang::_lang('VtaReciboConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getVtaReciboConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item conciliado">
            <div class="label"><?php Lang::_lang('Conciliado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_item->getConciliado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab  -->
    <div id="tab_" class="datos">

        <div class="titulo"><?php Lang::_lang('') ?></div>

        <div class="bloque-">
            <?php if(file_exists('modal_ficha_bloque_.php')){ ?>
                <?php include 'modal_ficha_bloque_.php' ?>
            <?php }else{ ?>
                Debe incluir el bloque HTML en el archivo 'modal_ficha_bloque_.php'
            <?php } ?>
        </div>
        
    </div>
        
</div>

