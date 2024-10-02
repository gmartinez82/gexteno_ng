<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_estado = PdiEstado::getOxId($id);
//Gral::prr($pdi_estado);
?>

<div class="tabs ficha-pdi_estado" identificador="<?php echo $pdi_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_estado pdi_pedido_id">
            <div class="label"><?php Lang::_lang('PdiPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getPdiPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado pdi_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdiTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado cantidad_stock_real">
            <div class="label"><?php Lang::_lang('Cantidad Stock Real') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getCantidadStockReal()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado cantidad_stock_comprometida">
            <div class="label"><?php Lang::_lang('Cantidad Stock Comprometida') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getCantidadStockComprometida()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado fechahora">
            <div class="label"><?php Lang::_lang('Fecha Hora') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getFechahora())) ?>
            </div>
        </div>
		
        <div class="par pdi_estado venta_perdida">
            <div class="label"><?php Lang::_lang('Venta Perdida') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getVentaPerdida())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_estado->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

