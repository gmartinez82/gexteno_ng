<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$sld_slider_imagen_id = Gral::getVars(2, 'sld_slider_imagen_id');
$sld_slider_imagen = SldSliderImagen::getOxId($sld_slider_imagen_id);
$sld_tipo_imagen = $sld_slider_imagen->getSldTipoImagen();

?>
<div class="datos" id="<?php Gral::_echo($sld_tipo_imagen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('SldTipoImagen') ?>: 
        <strong><?php Gral::_echo($sld_tipo_imagen->getId()) ?> - <?php Gral::_echo($sld_tipo_imagen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="sld_tipo_imagen_alta.php?id=<?php echo($sld_tipo_imagen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('SldTipoImagen') ?>: <strong><?php Gral::_echo($sld_tipo_imagen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo SldSliderImagen::getFiltrosArrGral() ?>&arr=<?php echo $sld_slider_imagen->getFiltrosArrXCampo('SldTipoImagen', 'sld_tipo_imagen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('SldSliderImagens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($sld_tipo_imagen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

