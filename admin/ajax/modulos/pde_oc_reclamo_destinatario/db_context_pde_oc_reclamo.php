<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_reclamo_destinatario_id = Gral::getVars(2, 'pde_oc_reclamo_destinatario_id');
$pde_oc_reclamo_destinatario = PdeOcReclamoDestinatario::getOxId($pde_oc_reclamo_destinatario_id);
$pde_oc_reclamo = $pde_oc_reclamo_destinatario->getPdeOcReclamo();

?>
<div class="datos" id="<?php Gral::_echo($pde_oc_reclamo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeOcReclamo') ?>: 
        <strong><?php Gral::_echo($pde_oc_reclamo->getId()) ?> - <?php Gral::_echo($pde_oc_reclamo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_oc_reclamo_alta.php?id=<?php echo($pde_oc_reclamo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamo') ?>: <strong><?php Gral::_echo($pde_oc_reclamo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcReclamoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo_destinatario->getFiltrosArrXCampo('PdeOcReclamo', 'pde_oc_reclamo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcReclamoDestinatarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_oc_reclamo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

