<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_credito_item = PdeNotaCreditoItem::getOxId($id);
//Gral::prr($pde_nota_credito_item);
?>

<div class="tabs ficha-pde_nota_credito_item" identificador="<?php echo $pde_nota_credito_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_credito_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_credito_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item pde_nota_credito_id">
            <div class="label"><?php Lang::_lang('PdeNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getPdeNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item pde_nota_credito_concepto_id">
            <div class="label"><?php Lang::_lang('PdeNotaCreditoConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getPdeNotaCreditoConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_credito_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_credito_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_nota_credito_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

