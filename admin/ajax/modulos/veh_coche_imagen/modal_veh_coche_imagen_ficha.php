<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$veh_coche_imagen = VehCocheImagen::getOxId($id);
//Gral::prr($veh_coche_imagen);
?>

<div class="tabs ficha-veh_coche_imagen" identificador="<?php echo $veh_coche_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par veh_coche_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par veh_coche_imagen veh_coche_id">
            <div class="label"><?php Lang::_lang('VehCoche') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getVehCoche()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par veh_coche_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($veh_coche_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

