<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ml_attribute_ins_atributo_id = Gral::getVars(2, 'ml_attribute_ins_atributo_id');
$ml_attribute_ins_atributo = MlAttributeInsAtributo::getOxId($ml_attribute_ins_atributo_id);
$ml_attribute = $ml_attribute_ins_atributo->getMlAttribute();

?>
<div class="datos" id="<?php Gral::_echo($ml_attribute->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('MlAttribute') ?>: 
        <strong><?php Gral::_echo($ml_attribute->getId()) ?> - <?php Gral::_echo($ml_attribute->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ml_attribute_alta.php?id=<?php echo($ml_attribute->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlAttribute') ?>: <strong><?php Gral::_echo($ml_attribute->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo MlAttributeInsAtributo::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute_ins_atributo->getFiltrosArrXCampo('MlAttribute', 'ml_attribute_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('MlAttributeInsAtributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ml_attribute->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

