<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ml_attribute_ins_atributo_id = Gral::getVars(2, 'ml_attribute_ins_atributo_id');
$ml_attribute_ins_atributo = MlAttributeInsAtributo::getOxId($ml_attribute_ins_atributo_id);
$ins_atributo = $ml_attribute_ins_atributo->getInsAtributo();

?>
<div class="datos" id="<?php Gral::_echo($ins_atributo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsAtributo') ?>: 
        <strong><?php Gral::_echo($ins_atributo->getId()) ?> - <?php Gral::_echo($ins_atributo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_atributo_alta.php?id=<?php echo($ins_atributo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsAtributo') ?>: <strong><?php Gral::_echo($ins_atributo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo MlAttributeInsAtributo::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute_ins_atributo->getFiltrosArrXCampo('InsAtributo', 'ins_atributo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('MlAttributeInsAtributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_atributo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

