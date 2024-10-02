<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($id);
//Gral::prr($pdi_pedido_agrupacion);
?>

<div class="tabs ficha-pdi_pedido_agrupacion" identificador="<?php echo $pdi_pedido_agrupacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_pedido_agrupacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_pedido_agrupacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion pan_panol_origen">
            <div class="label"><?php Lang::_lang('PanPanolOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo(($pdi_pedido_agrupacion->getPanPanolOrigen() != 'null') ? PanPanol::getOxId($pdi_pedido_agrupacion->getPanPanolOrigen())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion pan_panol_destino">
            <div class="label"><?php Lang::_lang('PanPanolDestino') ?></div>
            <div class="dato">
                <?php Gral::_echo(($pdi_pedido_agrupacion->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido_agrupacion->getPanPanolDestino())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion pdi_pedido_agrupacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdiPedidoAgrupacionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion pdi_tipo_origen_id">
            <div class="label"><?php Lang::_lang('PdiTipoOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getPdiTipoOrigen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion pdi_urgencia_id">
            <div class="label"><?php Lang::_lang('PdiUrgencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getPdiUrgencia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

