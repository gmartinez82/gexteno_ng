<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_factura_enviado = VtaFacturaEnviado::getOxId($id);
//Gral::prr($vta_factura_enviado);
?>

<div class="tabs ficha-vta_factura_enviado" identificador="<?php echo $vta_factura_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_factura_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_factura_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_factura_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_factura_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_factura_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

