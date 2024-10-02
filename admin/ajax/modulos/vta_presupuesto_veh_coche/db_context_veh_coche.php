<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_presupuesto_veh_coche_id = Gral::getVars(2, 'vta_presupuesto_veh_coche_id');
$vta_presupuesto_veh_coche = VtaPresupuestoVehCoche::getOxId($vta_presupuesto_veh_coche_id);
$veh_coche = $vta_presupuesto_veh_coche->getVehCoche();

?>
<div class="datos" id="<?php Gral::_echo($veh_coche->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VehCoche') ?>: 
        <strong><?php Gral::_echo($veh_coche->getId()) ?> - <?php Gral::_echo($veh_coche->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="veh_coche_alta.php?id=<?php echo($veh_coche->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehCoche') ?>: <strong><?php Gral::_echo($veh_coche->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuestoVehCoche::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_veh_coche->getFiltrosArrXCampo('VehCoche', 'veh_coche_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestoVehCoches') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($veh_coche->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

