<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_cotizacion_destinatario = PdeCotizacionDestinatario::getOxId($id);
//Gral::prr($pde_cotizacion_destinatario);
?>

<div class="tabs ficha-pde_cotizacion_destinatario" identificador="<?php echo $pde_cotizacion_destinatario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_cotizacion_destinatario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_cotizacion_destinatario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario pde_cotizacion_id">
            <div class="label"><?php Lang::_lang('PdeCotizacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getPdeCotizacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario observado">
            <div class="label"><?php Lang::_lang('Observado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_cotizacion_destinatario->getObservado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_cotizacion_destinatario->getLeido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_cotizacion_destinatario->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario aviso_email">
            <div class="label"><?php Lang::_lang('Aviso Email') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_cotizacion_destinatario->getAvisoEmail())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario aviso_sms">
            <div class="label"><?php Lang::_lang('Aviso Sms') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_cotizacion_destinatario->getAvisoSms())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_cotizacion_destinatario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_cotizacion_destinatario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

