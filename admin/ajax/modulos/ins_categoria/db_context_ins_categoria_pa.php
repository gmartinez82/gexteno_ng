<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_categoria_id = Gral::getVars(2, 'ins_categoria_id');
$ins_categoria = InsCategoria::getOxId($ins_categoria_id);
$ins_categoria_pa = $ins_categoria->getInsCategoriaPa();

?>
<div class="datos" id="<?php Gral::_echo($ins_categoria_pa->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsCategoriaPa') ?>: 
        <strong><?php Gral::_echo($ins_categoria_pa->getId()) ?> - <?php Gral::_echo($ins_categoria_pa->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_categoria_pa_alta.php?id=<?php echo($ins_categoria_pa->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsCategoriaPa') ?>: <strong><?php Gral::_echo($ins_categoria_pa->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsCategoria::getFiltrosArrGral() ?>&arr=<?php echo $ins_categoria->getFiltrosArrXCampo('InsCategoriaPa', 'ins_categoria_pa_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsCategorias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_categoria_pa->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

