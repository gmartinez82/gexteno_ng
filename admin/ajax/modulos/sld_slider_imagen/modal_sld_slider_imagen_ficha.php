<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$sld_slider_imagen = SldSliderImagen::getOxId($id);
//Gral::prr($sld_slider_imagen);
?>

<div class="tabs ficha-sld_slider_imagen" identificador="<?php echo $sld_slider_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par sld_slider_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par sld_slider_imagen sld_slider_id">
            <div class="label"><?php Lang::_lang('SldSlider') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getSldSlider()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen sld_tipo_imagen_id">
            <div class="label"><?php Lang::_lang('SldTipoImagen') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getSldTipoImagen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par sld_slider_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

