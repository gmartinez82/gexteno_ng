<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$app_mov_dispositivo = AppMovDispositivo::getOxId($id);
//Gral::prr($app_mov_dispositivo);
?>

<div class="tabs ficha-app_mov_dispositivo" identificador="<?php echo $app_mov_dispositivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par app_mov_dispositivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getId()) ?>
            </div>
        </div>

	
        <div class="par app_mov_dispositivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo so_descripcion">
            <div class="label"><?php Lang::_lang('S.O. Descr') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getSoDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo so_version">
            <div class="label"><?php Lang::_lang('S.O. Version') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getSoVersion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo marca">
            <div class="label"><?php Lang::_lang('Marca') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getMarca()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo modelo">
            <div class="label"><?php Lang::_lang('Modelo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getModelo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo imei">
            <div class="label"><?php Lang::_lang('IMEI') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getImei()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo telefono_nro">
            <div class="label"><?php Lang::_lang('Telefono Nro') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getTelefonoNro()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo titular_apellido">
            <div class="label"><?php Lang::_lang('Titular Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getTitularApellido()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo titular_nombre">
            <div class="label"><?php Lang::_lang('Titular Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getTitularNombre()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par app_mov_dispositivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_dispositivo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

