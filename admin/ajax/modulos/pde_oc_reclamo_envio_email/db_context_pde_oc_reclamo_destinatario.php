<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_reclamo_envio_email_id = Gral::getVars(2, 'pde_oc_reclamo_envio_email_id');
$pde_oc_reclamo_envio_email = PdeOcReclamoEnvioEmail::getOxId($pde_oc_reclamo_envio_email_id);
$pde_oc_reclamo_destinatario = $pde_oc_reclamo_envio_email->getPdeOcReclamoDestinatario();

?>
<div class="datos" id="<?php Gral::_echo($pde_oc_reclamo_destinatario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeOcReclamoDestinatario') ?>: 
        <strong><?php Gral::_echo($pde_oc_reclamo_destinatario->getId()) ?> - <?php Gral::_echo($pde_oc_reclamo_destinatario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_oc_reclamo_destinatario_alta.php?id=<?php echo($pde_oc_reclamo_destinatario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamoDestinatario') ?>: <strong><?php Gral::_echo($pde_oc_reclamo_destinatario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcReclamoEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo_envio_email->getFiltrosArrXCampo('PdeOcReclamoDestinatario', 'pde_oc_reclamo_destinatario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcReclamoEnvioEmails') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_oc_reclamo_destinatario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

