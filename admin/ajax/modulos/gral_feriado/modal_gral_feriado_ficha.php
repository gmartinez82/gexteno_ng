<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_feriado = GralFeriado::getOxId($id);
//Gral::prr($gral_feriado);
?>

<div class="tabs ficha-gral_feriado" identificador="<?php echo $gral_feriado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_feriado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_feriado->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_feriado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_feriado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_feriado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_feriado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_feriado fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($gral_feriado->getFecha())) ?>
            </div>
        </div>
		
        <div class="par gral_feriado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_feriado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_feriado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_feriado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_feriado estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_feriado->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

