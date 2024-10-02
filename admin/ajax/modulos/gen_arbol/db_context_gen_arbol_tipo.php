<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_arbol_id = Gral::getVars(2, 'gen_arbol_id');
$gen_arbol = GenArbol::getOxId($gen_arbol_id);
$gen_arbol_tipo = $gen_arbol->getGenArbolTipo();

?>
<div class="datos" id="<?php Gral::_echo($gen_arbol_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenArbolTipo') ?>: 
        <strong><?php Gral::_echo($gen_arbol_tipo->getId()) ?> - <?php Gral::_echo($gen_arbol_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_arbol_tipo_alta.php?id=<?php echo($gen_arbol_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenArbolTipo') ?>: <strong><?php Gral::_echo($gen_arbol_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenArbol::getFiltrosArrGral() ?>&arr=<?php echo $gen_arbol->getFiltrosArrXCampo('GenArbolTipo', 'gen_arbol_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenArbols') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_arbol_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

