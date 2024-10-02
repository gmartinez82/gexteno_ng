<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_categoria_id = Gral::getVars(2, 'ins_categoria_id');
$ins_categoria = InsCategoria::getOxId($ins_categoria_id);
$gen_arbol = $ins_categoria->getGenArbol();

?>
<div class="datos" id="<?php Gral::_echo($gen_arbol->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenArbol') ?>: 
        <strong><?php Gral::_echo($gen_arbol->getId()) ?> - <?php Gral::_echo($gen_arbol->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_arbol_alta.php?id=<?php echo($gen_arbol->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenArbol') ?>: <strong><?php Gral::_echo($gen_arbol->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsCategoria::getFiltrosArrGral() ?>&arr=<?php echo $ins_categoria->getFiltrosArrXCampo('GenArbol', 'gen_arbol_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsCategorias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_arbol->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

