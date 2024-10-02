<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_pedido_agrupacion_enviado = PdiPedidoAgrupacionEnviado::getOxId($id);
//Gral::prr($pdi_pedido_agrupacion_enviado);
?>

<div class="tabs ficha-pdi_pedido_agrupacion_enviado" identificador="<?php echo $pdi_pedido_agrupacion_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_pedido_agrupacion_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_pedido_agrupacion_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado pdi_pedido_agrupacion_id">
            <div class="label"><?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getPdiPedidoAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_agrupacion_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_agrupacion_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

