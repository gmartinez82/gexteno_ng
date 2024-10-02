<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$not_noticia_id = Gral::getVars(2, 'not_noticia_id');
$not_noticia = NotNoticia::getOxId($not_noticia_id);
$not_categoria = $not_noticia->getNotCategoria();

?>
<div class="datos" id="<?php Gral::_echo($not_categoria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NotCategoria') ?>: 
        <strong><?php Gral::_echo($not_categoria->getId()) ?> - <?php Gral::_echo($not_categoria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="not_categoria_alta.php?id=<?php echo($not_categoria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotCategoria') ?>: <strong><?php Gral::_echo($not_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NotNoticia::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia->getFiltrosArrXCampo('NotCategoria', 'not_categoria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NotNoticias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($not_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

