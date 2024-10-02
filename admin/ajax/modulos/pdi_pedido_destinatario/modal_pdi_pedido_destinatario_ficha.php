<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_pedido_destinatario = PdiPedidoDestinatario::getOxId($id);
//Gral::prr($pdi_pedido_destinatario);
?>

<div class="tabs ficha-pdi_pedido_destinatario" identificador="<?php echo $pdi_pedido_destinatario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_pedido_destinatario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_pedido_destinatario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario pdi_pedido_id">
            <div class="label"><?php Lang::_lang('PdiPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getPdiPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario observado">
            <div class="label"><?php Lang::_lang('Observado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getObservado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getLeido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario aviso_email">
            <div class="label"><?php Lang::_lang('Aviso Email') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoEmail())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario aviso_sms">
            <div class="label"><?php Lang::_lang('Aviso Sms') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoSms())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_pedido_destinatario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_pedido_destinatario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

