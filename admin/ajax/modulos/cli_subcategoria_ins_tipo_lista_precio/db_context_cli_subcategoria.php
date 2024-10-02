<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_subcategoria_ins_tipo_lista_precio_id = Gral::getVars(2, 'cli_subcategoria_ins_tipo_lista_precio_id');
$cli_subcategoria_ins_tipo_lista_precio = CliSubcategoriaInsTipoListaPrecio::getOxId($cli_subcategoria_ins_tipo_lista_precio_id);
$cli_subcategoria = $cli_subcategoria_ins_tipo_lista_precio->getCliSubcategoria();

?>
<div class="datos" id="<?php Gral::_echo($cli_subcategoria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliSubcategoria') ?>: 
        <strong><?php Gral::_echo($cli_subcategoria->getId()) ?> - <?php Gral::_echo($cli_subcategoria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_subcategoria_alta.php?id=<?php echo($cli_subcategoria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliSubcategoria') ?>: <strong><?php Gral::_echo($cli_subcategoria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliSubcategoriaInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $cli_subcategoria_ins_tipo_lista_precio->getFiltrosArrXCampo('CliSubcategoria', 'cli_subcategoria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliSubcategoriaInsTipoListaPrecios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_subcategoria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

