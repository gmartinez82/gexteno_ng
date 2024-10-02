<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_presupuesto_estado_id = Gral::getVars(2, 'vta_presupuesto_estado_id');
$vta_presupuesto_estado = VtaPresupuestoEstado::getOxId($vta_presupuesto_estado_id);
$vta_presupuesto = $vta_presupuesto_estado->getVtaPresupuesto();

?>
<div class="datos" id="<?php Gral::_echo($vta_presupuesto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPresupuesto') ?>: 
        <strong><?php Gral::_echo($vta_presupuesto->getId()) ?> - <?php Gral::_echo($vta_presupuesto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_presupuesto_alta.php?id=<?php echo($vta_presupuesto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuesto') ?>: <strong><?php Gral::_echo($vta_presupuesto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuestoEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_estado->getFiltrosArrXCampo('VtaPresupuesto', 'vta_presupuesto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_presupuesto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

