<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_bulto_ins_tipo_lista_precio_id = Gral::getVars(2, 'ins_insumo_bulto_ins_tipo_lista_precio_id');
$ins_insumo_bulto_ins_tipo_lista_precio = InsInsumoBultoInsTipoListaPrecio::getOxId($ins_insumo_bulto_ins_tipo_lista_precio_id);
$ins_insumo_bulto = $ins_insumo_bulto_ins_tipo_lista_precio->getInsInsumoBulto();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo_bulto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumoBulto') ?>: 
        <strong><?php Gral::_echo($ins_insumo_bulto->getId()) ?> - <?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_bulto_alta.php?id=<?php echo($ins_insumo_bulto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoBulto') ?>: <strong><?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoBultoInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_bulto_ins_tipo_lista_precio->getFiltrosArrXCampo('InsInsumoBulto', 'ins_insumo_bulto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoBultoInsTipoListaPrecios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

