<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_venta_ml_info_id = Gral::getVars(2, 'ins_venta_ml_info_id');
$ins_venta_ml_info = InsVentaMlInfo::getOxId($ins_venta_ml_info_id);
$ml_item_status = $ins_venta_ml_info->getMlItemStatus();

?>
<div class="datos" id="<?php Gral::_echo($ml_item_status->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('MlItemStatus') ?>: 
        <strong><?php Gral::_echo($ml_item_status->getId()) ?> - <?php Gral::_echo($ml_item_status->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ml_item_status_alta.php?id=<?php echo($ml_item_status->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlItemStatus') ?>: <strong><?php Gral::_echo($ml_item_status->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsVentaMlInfo::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info->getFiltrosArrXCampo('MlItemStatus', 'ml_item_status_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsVentaMlInfos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ml_item_status->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

