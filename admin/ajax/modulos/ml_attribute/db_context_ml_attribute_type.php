<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ml_attribute_id = Gral::getVars(2, 'ml_attribute_id');
$ml_attribute = MlAttribute::getOxId($ml_attribute_id);
$ml_attribute_type = $ml_attribute->getMlAttributeType();

?>
<div class="datos" id="<?php Gral::_echo($ml_attribute_type->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('MlAttributeType') ?>: 
        <strong><?php Gral::_echo($ml_attribute_type->getId()) ?> - <?php Gral::_echo($ml_attribute_type->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ml_attribute_type_alta.php?id=<?php echo($ml_attribute_type->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlAttributeType') ?>: <strong><?php Gral::_echo($ml_attribute_type->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo MlAttribute::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute->getFiltrosArrXCampo('MlAttributeType', 'ml_attribute_type_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('MlAttributes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ml_attribute_type->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

