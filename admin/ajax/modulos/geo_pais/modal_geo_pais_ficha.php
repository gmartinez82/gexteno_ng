<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$geo_pais = GeoPais::getOxId($id);
//Gral::prr($geo_pais);
?>

<div class="tabs ficha-geo_pais" identificador="<?php echo $geo_pais->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par geo_pais id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getId()) ?>
            </div>
        </div>

	
        <div class="par geo_pais descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_pais gral_lenguaje_id">
            <div class="label"><?php Lang::_lang('Lenguaje') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getGralLenguaje()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par geo_pais codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par geo_pais codigo_alpha_2">
            <div class="label"><?php Lang::_lang('Cod A2') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getCodigoAlpha2()) ?>
            </div>
        </div>
		
        <div class="par geo_pais codigo_alpha_3">
            <div class="label"><?php Lang::_lang('Cod A3') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getCodigoAlpha3()) ?>
            </div>
        </div>
		
        <div class="par geo_pais codigo_telefonico">
            <div class="label"><?php Lang::_lang('Codigo Telefonico') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getCodigoTelefonico()) ?>
            </div>
        </div>
		
        <div class="par geo_pais observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par geo_pais orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($geo_pais->getOrden()) ?>
            </div>
        </div>
		
        <div class="par geo_pais estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($geo_pais->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

