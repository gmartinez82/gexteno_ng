<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_imagen_id = Gral::getVars(2, 'ins_insumo_imagen_id');
$ins_insumo_imagen = InsInsumoImagen::getOxId($ins_insumo_imagen_id);
$ins_tipo_imagen = $ins_insumo_imagen->getInsTipoImagen();

?>
<div class="datos" id="<?php Gral::_echo($ins_tipo_imagen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsTipoImagen') ?>: 
        <strong><?php Gral::_echo($ins_tipo_imagen->getId()) ?> - <?php Gral::_echo($ins_tipo_imagen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_tipo_imagen_alta.php?id=<?php echo($ins_tipo_imagen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsTipoImagen') ?>: <strong><?php Gral::_echo($ins_tipo_imagen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoImagen::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_imagen->getFiltrosArrXCampo('InsTipoImagen', 'ins_tipo_imagen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoImagens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_tipo_imagen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

