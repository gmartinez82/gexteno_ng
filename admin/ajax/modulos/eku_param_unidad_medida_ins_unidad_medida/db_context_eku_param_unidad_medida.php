<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_param_unidad_medida_ins_unidad_medida_id = Gral::getVars(2, 'eku_param_unidad_medida_ins_unidad_medida_id');
$eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxId($eku_param_unidad_medida_ins_unidad_medida_id);
$eku_param_unidad_medida = $eku_param_unidad_medida_ins_unidad_medida->getEkuParamUnidadMedida();

?>
<div class="datos" id="<?php Gral::_echo($eku_param_unidad_medida->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuParamUnidadMedida') ?>: 
        <strong><?php Gral::_echo($eku_param_unidad_medida->getId()) ?> - <?php Gral::_echo($eku_param_unidad_medida->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_param_unidad_medida_alta.php?id=<?php echo($eku_param_unidad_medida->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamUnidadMedida') ?>: <strong><?php Gral::_echo($eku_param_unidad_medida->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuParamUnidadMedidaInsUnidadMedida::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_unidad_medida_ins_unidad_medida->getFiltrosArrXCampo('EkuParamUnidadMedida', 'eku_param_unidad_medida_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedidas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_param_unidad_medida->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

