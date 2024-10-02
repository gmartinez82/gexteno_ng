<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recibo_item = PdeReciboItem::getOxId($id);
//Gral::prr($pde_recibo_item);
?>

<div class="tabs ficha-pde_recibo_item" identificador="<?php echo $pde_recibo_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recibo_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recibo_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item pde_recibo_id">
            <div class="label"><?php Lang::_lang('PdeRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getPdeRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item pde_recibo_concepto_id">
            <div class="label"><?php Lang::_lang('PdeReciboConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getPdeReciboConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recibo_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_recibo_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recibo_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

