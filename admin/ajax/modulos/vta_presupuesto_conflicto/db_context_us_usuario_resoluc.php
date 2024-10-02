<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_presupuesto_conflicto_id = Gral::getVars(2, 'vta_presupuesto_conflicto_id');
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($vta_presupuesto_conflicto_id);
$us_usuario_resoluc = $vta_presupuesto_conflicto->getUsUsuarioResoluc();

?>
<div class="datos" id="<?php Gral::_echo($us_usuario_resoluc->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsUsuarioResoluc') ?>: 
        <strong><?php Gral::_echo($us_usuario_resoluc->getId()) ?> - <?php Gral::_echo($us_usuario_resoluc->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_usuario_resoluc_alta.php?id=<?php echo($us_usuario_resoluc->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsUsuarioResoluc') ?>: <strong><?php Gral::_echo($us_usuario_resoluc->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuestoConflicto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_conflicto->getFiltrosArrXCampo('UsUsuarioResoluc', 'us_usuario_resoluc_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestoConflictos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_usuario_resoluc->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

