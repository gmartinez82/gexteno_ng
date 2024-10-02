<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_mes = GralMes::getOxId($id);
//Gral::prr($gral_mes);
?>

<div class="tabs ficha-gral_mes" identificador="<?php echo $gral_mes->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_mes id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_mes descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_mes descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_mes codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_mes codigo_numero">
            <div class="label"><?php Lang::_lang('Codigo Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getCodigoNumero()) ?>
            </div>
        </div>
		
        <div class="par gral_mes observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_mes orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_mes->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_mes estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_mes->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

