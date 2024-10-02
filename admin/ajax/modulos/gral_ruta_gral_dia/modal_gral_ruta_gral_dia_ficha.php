<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_ruta_gral_dia = GralRutaGralDia::getOxId($id);
//Gral::prr($gral_ruta_gral_dia);
?>

<div class="tabs ficha-gral_ruta_gral_dia" identificador="<?php echo $gral_ruta_gral_dia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_ruta_gral_dia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_ruta_gral_dia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_gral_dia gral_ruta_id">
            <div class="label"><?php Lang::_lang('GralRuta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getGralRuta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_gral_dia gral_dia_id">
            <div class="label"><?php Lang::_lang('GralDia') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getGralDia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_gral_dia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_gral_dia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_gral_dia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_ruta_gral_dia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_ruta_gral_dia estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_ruta_gral_dia->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

