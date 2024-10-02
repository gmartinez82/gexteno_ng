<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$per_mov_planificacion_tramo_id = Gral::getVars(2, 'per_mov_planificacion_tramo_id');
$per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($per_mov_planificacion_tramo_id);
$per_mov_planificacion = $per_mov_planificacion_tramo->getPerMovPlanificacion();

?>
<div class="datos" id="<?php Gral::_echo($per_mov_planificacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PerMovPlanificacion') ?>: 
        <strong><?php Gral::_echo($per_mov_planificacion->getId()) ?> - <?php Gral::_echo($per_mov_planificacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="per_mov_planificacion_alta.php?id=<?php echo($per_mov_planificacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovPlanificacion') ?>: <strong><?php Gral::_echo($per_mov_planificacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerMovPlanificacionTramo::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion_tramo->getFiltrosArrXCampo('PerMovPlanificacion', 'per_mov_planificacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerMovPlanificacionTramos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($per_mov_planificacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

