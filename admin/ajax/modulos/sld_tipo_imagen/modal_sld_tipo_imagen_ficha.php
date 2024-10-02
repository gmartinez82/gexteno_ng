<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$sld_tipo_imagen = SldTipoImagen::getOxId($id);
//Gral::prr($sld_tipo_imagen);
?>

<div class="tabs ficha-sld_tipo_imagen" identificador="<?php echo $sld_tipo_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par sld_tipo_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_tipo_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par sld_tipo_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_tipo_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par sld_tipo_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_tipo_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par sld_tipo_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_tipo_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par sld_tipo_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_tipo_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par sld_tipo_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($sld_tipo_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

