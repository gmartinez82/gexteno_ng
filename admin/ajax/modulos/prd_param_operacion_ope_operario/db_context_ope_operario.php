<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_param_operacion_ope_operario_id = Gral::getVars(2, 'prd_param_operacion_ope_operario_id');
$prd_param_operacion_ope_operario = PrdParamOperacionOpeOperario::getOxId($prd_param_operacion_ope_operario_id);
$ope_operario = $prd_param_operacion_ope_operario->getOpeOperario();

?>
<div class="datos" id="<?php Gral::_echo($ope_operario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OpeOperario') ?>: 
        <strong><?php Gral::_echo($ope_operario->getId()) ?> - <?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ope_operario_alta.php?id=<?php echo($ope_operario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeOperario') ?>: <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrdParamOperacionOpeOperario::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion_ope_operario->getFiltrosArrXCampo('OpeOperario', 'ope_operario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdParamOperacionOpeOperarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

