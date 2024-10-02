<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_item_retencion = VtaReciboItemRetencion::getOxId($id);
//Gral::prr($vta_recibo_item_retencion);
?>

<div class="tabs ficha-vta_recibo_item_retencion" identificador="<?php echo $vta_recibo_item_retencion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_item_retencion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_item_retencion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion vta_recibo_item_id">
            <div class="label"><?php Lang::_lang('VtaReciboItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getVtaReciboItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion numero_comprobante">
            <div class="label"><?php Lang::_lang('Numero de Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getNumeroComprobante()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo_item_retencion->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion importe_base_imponible">
            <div class="label"><?php Lang::_lang('Imp BI') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getImporteBaseImponible()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion importe_retencion">
            <div class="label"><?php Lang::_lang('Imp Retencion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getImporteRetencion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_retencion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_retencion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_item_retencion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

