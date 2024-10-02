<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_orden_pago_enviado = PdeOrdenPagoEnviado::getOxId($id);
//Gral::prr($pde_orden_pago_enviado);
?>

<div class="tabs ficha-pde_orden_pago_enviado" identificador="<?php echo $pde_orden_pago_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_orden_pago_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_orden_pago_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado pde_orden_pago_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getPdeOrdenPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

