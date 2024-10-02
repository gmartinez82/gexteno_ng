<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_enviado = VtaReciboEnviado::getOxId($id);
//Gral::prr($vta_recibo_enviado);
?>

<div class="tabs ficha-vta_recibo_enviado" identificador="<?php echo $vta_recibo_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_recibo_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

