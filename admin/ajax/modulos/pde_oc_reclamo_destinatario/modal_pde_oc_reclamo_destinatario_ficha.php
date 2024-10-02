<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_reclamo_destinatario = PdeOcReclamoDestinatario::getOxId($id);
//Gral::prr($pde_oc_reclamo_destinatario);
?>

<div class="tabs ficha-pde_oc_reclamo_destinatario" identificador="<?php echo $pde_oc_reclamo_destinatario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_reclamo_destinatario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_reclamo_destinatario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario pde_oc_reclamo_id">
            <div class="label"><?php Lang::_lang('PdeOcReclamo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getPdeOcReclamo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario observado">
            <div class="label"><?php Lang::_lang('Observado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_reclamo_destinatario->getObservado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_reclamo_destinatario->getLeido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario destacado">
            <div class="label"><?php Lang::_lang('Destacado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_reclamo_destinatario->getDestacado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario aviso_email">
            <div class="label"><?php Lang::_lang('Aviso Email') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_reclamo_destinatario->getAvisoEmail())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario aviso_sms">
            <div class="label"><?php Lang::_lang('Aviso Sms') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_reclamo_destinatario->getAvisoSms())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_destinatario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_destinatario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

