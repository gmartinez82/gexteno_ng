<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_param_operacion_id = Gral::getVars(2, 'prd_param_operacion_id');
$prd_param_operacion = PrdParamOperacion::getOxId($prd_param_operacion_id);
$prd_param_tipo_operacion = $prd_param_operacion->getPrdParamTipoOperacion();

?>
<div class="datos" id="<?php Gral::_echo($prd_param_tipo_operacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrdParamTipoOperacion') ?>: 
        <strong><?php Gral::_echo($prd_param_tipo_operacion->getId()) ?> - <?php Gral::_echo($prd_param_tipo_operacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prd_param_tipo_operacion_alta.php?id=<?php echo($prd_param_tipo_operacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdParamTipoOperacion') ?>: <strong><?php Gral::_echo($prd_param_tipo_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrdParamOperacion::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion->getFiltrosArrXCampo('PrdParamTipoOperacion', 'prd_param_tipo_operacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdParamOperacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prd_param_tipo_operacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

