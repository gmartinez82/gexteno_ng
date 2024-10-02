<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$geo_provincia = GeoProvincia::getOxId($id);
//Gral::prr($geo_provincia);
?>

<div class="tabs ficha-geo_provincia" identificador="<?php echo $geo_provincia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par geo_provincia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getId()) ?>
            </div>
        </div>

	
        <div class="par geo_provincia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_provincia geo_pais_id">
            <div class="label"><?php Lang::_lang('GeoPais') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getGeoPais()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_provincia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par geo_provincia codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par geo_provincia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par geo_provincia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_provincia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par geo_provincia estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($geo_provincia->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

