<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_orden_trabajo_operacion_id = Gral::getVars(2, 'prd_orden_trabajo_operacion_id');
$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($prd_orden_trabajo_operacion_id);
$prd_param_operacion = $prd_orden_trabajo_operacion->getPrdParamOperacion();

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
        <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacion::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion->getFiltrosArrXCampo('PrdParamOperacion', 'prd_param_operacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prd_param_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

