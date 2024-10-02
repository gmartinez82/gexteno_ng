<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_param_operacion_prd_equipo_id = Gral::getVars(2, 'prd_param_operacion_prd_equipo_id');
$prd_param_operacion_prd_equipo = PrdParamOperacionPrdEquipo::getOxId($prd_param_operacion_prd_equipo_id);
$prd_param_operacion = $prd_param_operacion_prd_equipo->getPrdParamOperacion();

?>
<div class="datos" id="<?php Gral::_echo($prd_param_operacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrdParamOperacion') ?>: 
        <strong><?php Gral::_echo($prd_param_operacion->getId()) ?> - <?php Gral::_echo($prd_param_operacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prd_param_operacion_alta.php?id=<?php echo($prd_param_operacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdParamOperacion') ?>: <strong><?php Gral::_echo($prd_param_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrdParamOperacionPrdEquipo::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion_prd_equipo->getFiltrosArrXCampo('PrdParamOperacion', 'prd_param_operacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdParamOperacionPrdEquipos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prd_param_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

