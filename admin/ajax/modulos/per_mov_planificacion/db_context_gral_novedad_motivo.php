<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$per_mov_planificacion_id = Gral::getVars(2, 'per_mov_planificacion_id');
$per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
$gral_novedad_motivo = $per_mov_planificacion->getGralNovedadMotivo();

?>
<div class="datos" id="<?php Gral::_echo($gral_novedad_motivo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralNovedadMotivo') ?>: 
        <strong><?php Gral::_echo($gral_novedad_motivo->getId()) ?> - <?php Gral::_echo($gral_novedad_motivo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_novedad_motivo_alta.php?id=<?php echo($gral_novedad_motivo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralNovedadMotivo') ?>: <strong><?php Gral::_echo($gral_novedad_motivo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerMovPlanificacion::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_planificacion->getFiltrosArrXCampo('GralNovedadMotivo', 'gral_novedad_motivo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerMovPlanificacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_novedad_motivo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

