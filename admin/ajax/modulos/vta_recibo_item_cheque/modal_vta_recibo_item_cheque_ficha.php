<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_item_cheque = VtaReciboItemCheque::getOxId($id);
//Gral::prr($vta_recibo_item_cheque);
?>

<div class="tabs ficha-vta_recibo_item_cheque" identificador="<?php echo $vta_recibo_item_cheque->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_item_cheque id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_item_cheque descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque vta_recibo_item_id">
            <div class="label"><?php Lang::_lang('VtaReciboItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getVtaReciboItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque gral_banco_id">
            <div class="label"><?php Lang::_lang('GralBanco') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getGralBanco()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque numero_cheque">
            <div class="label"><?php Lang::_lang('Numero de Cheque') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getNumeroCheque()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo_item_cheque->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque fecha_cobro">
            <div class="label"><?php Lang::_lang('Fecha de Cobro') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo_item_cheque->getFechaCobro())) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque firmante">
            <div class="label"><?php Lang::_lang('Firmante') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getFirmante()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque entregador">
            <div class="label"><?php Lang::_lang('Entregador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getEntregador()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_item_cheque->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_item_cheque estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_item_cheque->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

