<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_ins_atributo_id = Gral::getVars(2, 'ins_insumo_ins_atributo_id');
$ins_insumo_ins_atributo = InsInsumoInsAtributo::getOxId($ins_insumo_ins_atributo_id);
$ins_unidad_medida_atributo = $ins_insumo_ins_atributo->getInsUnidadMedidaAtributo();

?>
<div class="datos" id="<?php Gral::_echo($ins_unidad_medida_atributo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsUnidadMedidaAtributo') ?>: 
        <strong><?php Gral::_echo($ins_unidad_medida_atributo->getId()) ?> - <?php Gral::_echo($ins_unidad_medida_atributo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_unidad_medida_atributo_alta.php?id=<?php echo($ins_unidad_medida_atributo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsUnidadMedidaAtributo') ?>: <strong><?php Gral::_echo($ins_unidad_medida_atributo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoInsAtributo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_atributo->getFiltrosArrXCampo('InsUnidadMedidaAtributo', 'ins_unidad_medida_atributo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoInsAtributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_unidad_medida_atributo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

