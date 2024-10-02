<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$sld_slider = SldSlider::getOxId($id);
//Gral::prr($sld_slider);
?>

<div class="tabs ficha-sld_slider" identificador="<?php echo $sld_slider->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par sld_slider id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getId()) ?>
            </div>
        </div>

	
        <div class="par sld_slider descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider url">
            <div class="label"><?php Lang::_lang('Url') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getUrl()) ?>
            </div>
        </div>
		
        <div class="par sld_slider codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par sld_slider observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par sld_slider orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_slider->getOrden()) ?>
            </div>
        </div>
		
        <div class="par sld_slider estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($sld_slider->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

