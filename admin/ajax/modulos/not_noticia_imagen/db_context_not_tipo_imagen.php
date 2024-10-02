<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$not_noticia_imagen_id = Gral::getVars(2, 'not_noticia_imagen_id');
$not_noticia_imagen = NotNoticiaImagen::getOxId($not_noticia_imagen_id);
$not_tipo_imagen = $not_noticia_imagen->getNotTipoImagen();

?>
<div class="datos" id="<?php Gral::_echo($not_tipo_imagen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NotTipoImagen') ?>: 
        <strong><?php Gral::_echo($not_tipo_imagen->getId()) ?> - <?php Gral::_echo($not_tipo_imagen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="not_tipo_imagen_alta.php?id=<?php echo($not_tipo_imagen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotTipoImagen') ?>: <strong><?php Gral::_echo($not_tipo_imagen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NotNoticiaImagen::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_imagen->getFiltrosArrXCampo('NotTipoImagen', 'not_tipo_imagen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NotNoticiaImagens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($not_tipo_imagen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

