<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_dia = GralDia::getOxId($id);
//Gral::prr($gral_dia);
?>

<div class="tabs ficha-gral_dia" identificador="<?php echo $gral_dia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_dia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_dia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_dia descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_dia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_dia codigo_numero">
            <div class="label"><?php Lang::_lang('Codigo Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getCodigoNumero()) ?>
            </div>
        </div>
		
        <div class="par gral_dia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_dia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_dia estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_dia->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

