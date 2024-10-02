<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_politica_descuento_ins_categoria_id = Gral::getVars(2, 'vta_politica_descuento_ins_categoria_id');
$vta_politica_descuento_ins_categoria = VtaPoliticaDescuentoInsCategoria::getOxId($vta_politica_descuento_ins_categoria_id);
$ins_categoria = $vta_politica_descuento_ins_categoria->getInsCategoria();

?>
<div class="datos" id="<?php Gral::_echo($ins_categoria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsCategoria') ?>: 
        <strong><?php Gral::_echo($ins_categoria->getId()) ?> - <?php Gral::_echo($ins_categoria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_categoria_alta.php?id=<?php echo($ins_categoria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsCategoria') ?>: <strong><?php Gral::_echo($ins_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsCategoria::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_categoria->getFiltrosArrXCampo('InsCategoria', 'ins_categoria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategorias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

