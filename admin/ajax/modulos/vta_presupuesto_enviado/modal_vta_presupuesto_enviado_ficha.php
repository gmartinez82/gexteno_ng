<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_enviado = VtaPresupuestoEnviado::getOxId($id);
//Gral::prr($vta_presupuesto_enviado);
?>

<div class="tabs ficha-vta_presupuesto_enviado" identificador="<?php echo $vta_presupuesto_enviado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_enviado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_enviado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado destinatario">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getDestinatario()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_enviado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_enviado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_enviado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

