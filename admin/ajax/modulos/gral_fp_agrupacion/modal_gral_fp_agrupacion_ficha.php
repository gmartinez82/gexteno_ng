<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_fp_agrupacion = GralFpAgrupacion::getOxId($id);
//Gral::prr($gral_fp_agrupacion);
?>

<div class="tabs ficha-gral_fp_agrupacion" identificador="<?php echo $gral_fp_agrupacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_fp_agrupacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_agrupacion->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_fp_agrupacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_agrupacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_agrupacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_agrupacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_agrupacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_agrupacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_agrupacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_fp_agrupacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_fp_agrupacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_fp_agrupacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

