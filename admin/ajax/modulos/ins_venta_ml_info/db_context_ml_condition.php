<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_venta_ml_info_id = Gral::getVars(2, 'ins_venta_ml_info_id');
$ins_venta_ml_info = InsVentaMlInfo::getOxId($ins_venta_ml_info_id);
$ml_condition = $ins_venta_ml_info->getMlCondition();

?>
<div class="datos" id="<?php Gral::_echo($ml_condition->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('MlCondition') ?>: 
        <strong><?php Gral::_echo($ml_condition->getId()) ?> - <?php Gral::_echo($ml_condition->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ml_condition_alta.php?id=<?php echo($ml_condition->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlCondition') ?>: <strong><?php Gral::_echo($ml_condition->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsVentaMlInfo::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info->getFiltrosArrXCampo('MlCondition', 'ml_condition_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsVentaMlInfos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ml_condition->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

