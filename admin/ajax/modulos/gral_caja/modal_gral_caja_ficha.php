<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_caja = GralCaja::getOxId($id);
//Gral::prr($gral_caja);
?>

<div class="tabs ficha-gral_caja" identificador="<?php echo $gral_caja->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_caja id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_caja descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_caja gral_caja_tipo_id">
            <div class="label"><?php Lang::_lang('GralCajaTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getGralCajaTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_caja numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getNumero()) ?>
            </div>
        </div>
		
        <div class="par gral_caja codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_caja observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_caja orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_caja estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

