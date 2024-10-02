<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_nota_debito_enviado = VtaNotaDebitoEnviado::getOxId($id);
//Gral::prr($vta_nota_debito_enviado);
?>

<div class="tabs ficha-vta_nota_debito_enviado" identificador="<?php echo $vta_nota_debito_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_nota_debito_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_nota_debito_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado vta_nota_debito_id">
            <div class="label"><?php Lang::_lang('VtaNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getVtaNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_debito_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_debito_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_nota_debito_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

