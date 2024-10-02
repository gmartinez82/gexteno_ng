<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$sld_slider_imagen_id = Gral::getVars(2, 'sld_slider_imagen_id');
$sld_slider_imagen = SldSliderImagen::getOxId($sld_slider_imagen_id);
$sld_slider = $sld_slider_imagen->getSldSlider();

?>
<div class="datos" id="<?php Gral::_echo($sld_slider->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('SldSlider') ?>: 
        <strong><?php Gral::_echo($sld_slider->getId()) ?> - <?php Gral::_echo($sld_slider->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="sld_slider_alta.php?id=<?php echo($sld_slider->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('SldSlider') ?>: <strong><?php Gral::_echo($sld_slider->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo SldSliderImagen::getFiltrosArrGral() ?>&arr=<?php echo $sld_slider_imagen->getFiltrosArrXCampo('SldSlider', 'sld_slider_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('SldSliderImagens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($sld_slider->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

