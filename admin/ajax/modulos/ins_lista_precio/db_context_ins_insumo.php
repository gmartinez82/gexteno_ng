<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_lista_precio_id = Gral::getVars(2, 'ins_lista_precio_id');
$ins_lista_precio = InsListaPrecio::getOxId($ins_lista_precio_id);
$ins_insumo = $ins_lista_precio->getInsInsumo();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumo') ?>: 
        <strong><?php Gral::_echo($ins_insumo->getId()) ?> - <?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_alta.php?id=<?php echo($ins_insumo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumo') ?>: <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $ins_lista_precio->getFiltrosArrXCampo('InsInsumo', 'ins_insumo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsListaPrecios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

