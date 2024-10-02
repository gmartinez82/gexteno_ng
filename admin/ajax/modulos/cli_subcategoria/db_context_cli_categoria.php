<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_subcategoria_id = Gral::getVars(2, 'cli_subcategoria_id');
$cli_subcategoria = CliSubcategoria::getOxId($cli_subcategoria_id);
$cli_categoria = $cli_subcategoria->getCliCategoria();

?>
<div class="datos" id="<?php Gral::_echo($cli_categoria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliCategoria') ?>: 
        <strong><?php Gral::_echo($cli_categoria->getId()) ?> - <?php Gral::_echo($cli_categoria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_categoria_alta.php?id=<?php echo($cli_categoria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCategoria') ?>: <strong><?php Gral::_echo($cli_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliSubcategoria::getFiltrosArrGral() ?>&arr=<?php echo $cli_subcategoria->getFiltrosArrXCampo('CliCategoria', 'cli_categoria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliSubcategorias') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

