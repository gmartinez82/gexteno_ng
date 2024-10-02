<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_ruta = GralRuta::getOxId($id);
//Gral::prr($gral_ruta);
?>

<div class="tabs ficha-gral_ruta" identificador="<?php echo $gral_ruta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_ruta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_ruta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_ruta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

