<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_remito_enviado = VtaRemitoEnviado::getOxId($id);
//Gral::prr($vta_remito_enviado);
?>

<div class="tabs ficha-vta_remito_enviado" identificador="<?php echo $vta_remito_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_remito_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_remito_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado vta_remito_id">
            <div class="label"><?php Lang::_lang('VtaRemito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getVtaRemito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

