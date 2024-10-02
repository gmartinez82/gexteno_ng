<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_reclamo_id = Gral::getVars(2, 'pde_oc_reclamo_id');
$pde_oc_reclamo = PdeOcReclamo::getOxId($pde_oc_reclamo_id);
$pde_oc_reclamo_motivo = $pde_oc_reclamo->getPdeOcReclamoMotivo();

?>
<div class="datos" id="<?php Gral::_echo($pde_oc_reclamo_motivo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeOcReclamoMotivo') ?>: 
        <strong><?php Gral::_echo($pde_oc_reclamo_motivo->getId()) ?> - <?php Gral::_echo($pde_oc_reclamo_motivo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_oc_reclamo_motivo_alta.php?id=<?php echo($pde_oc_reclamo_motivo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamoMotivo') ?>: <strong><?php Gral::_echo($pde_oc_reclamo_motivo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcReclamo::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo->getFiltrosArrXCampo('PdeOcReclamoMotivo', 'pde_oc_reclamo_motivo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcReclamos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_oc_reclamo_motivo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

