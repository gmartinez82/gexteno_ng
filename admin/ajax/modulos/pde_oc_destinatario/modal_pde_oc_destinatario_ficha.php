<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_destinatario = PdeOcDestinatario::getOxId($id);
//Gral::prr($pde_oc_destinatario);
?>

<div class="tabs ficha-pde_oc_destinatario" identificador="<?php echo $pde_oc_destinatario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_destinatario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_destinatario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario pde_oc_id">
            <div class="label"><?php Lang::_lang('PdeOc') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getPdeOc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario observado">
            <div class="label"><?php Lang::_lang('Observado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_destinatario->getObservado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_destinatario->getLeido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_destinatario->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario aviso_email">
            <div class="label"><?php Lang::_lang('Aviso Email') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_destinatario->getAvisoEmail())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario aviso_sms">
            <div class="label"><?php Lang::_lang('Aviso Sms') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_destinatario->getAvisoSms())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_destinatario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_destinatario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

