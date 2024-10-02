<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ml_value_ins_marca_id = Gral::getVars(2, 'ml_value_ins_marca_id');
$ml_value_ins_marca = MlValueInsMarca::getOxId($ml_value_ins_marca_id);
$ml_value = $ml_value_ins_marca->getMlValue();

?>
<div class="datos" id="<?php Gral::_echo($ml_value->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('MlValue') ?>: 
        <strong><?php Gral::_echo($ml_value->getId()) ?> - <?php Gral::_echo($ml_value->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ml_value_alta.php?id=<?php echo($ml_value->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlValue') ?>: <strong><?php Gral::_echo($ml_value->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo MlValueInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ml_value_ins_marca->getFiltrosArrXCampo('MlValue', 'ml_value_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('MlValueInsMarcas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ml_value->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

