<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_ins_tipo_lista_precio_id = Gral::getVars(2, 'cli_cliente_ins_tipo_lista_precio_id');
$cli_cliente_ins_tipo_lista_precio = CliClienteInsTipoListaPrecio::getOxId($cli_cliente_ins_tipo_lista_precio_id);
$ins_tipo_lista_precio = $cli_cliente_ins_tipo_lista_precio->getInsTipoListaPrecio();

?>
<div class="datos" id="<?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsTipoListaPrecio') ?>: 
        <strong><?php Gral::_echo($ins_tipo_lista_precio->getId()) ?> - <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_tipo_lista_precio_alta.php?id=<?php echo($ins_tipo_lista_precio->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsTipoListaPrecio') ?>: <strong><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_ins_tipo_lista_precio->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteInsTipoListaPrecios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

