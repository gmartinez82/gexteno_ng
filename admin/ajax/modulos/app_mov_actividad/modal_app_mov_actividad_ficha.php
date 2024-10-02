<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$app_mov_actividad = AppMovActividad::getOxId($id);
//Gral::prr($app_mov_actividad);
?>

<div class="tabs ficha-app_mov_actividad" identificador="<?php echo $app_mov_actividad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par app_mov_actividad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getId()) ?>
            </div>
        </div>

	
        <div class="par app_mov_actividad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad app_mov_instalacion_id">
            <div class="label"><?php Lang::_lang('AppMovInstalacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getAppMovInstalacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad app_mov_dispositivo_id">
            <div class="label"><?php Lang::_lang('AppMovDispositivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getAppMovDispositivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad app_mov_modulo_id">
            <div class="label"><?php Lang::_lang('AppMovModulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getAppMovModulo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad gen_api_token_id">
            <div class="label"><?php Lang::_lang('GenApiToken') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getGenApiToken()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad metodo">
            <div class="label"><?php Lang::_lang('Metodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getMetodo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad registros">
            <div class="label"><?php Lang::_lang('Registros') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getRegistros()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad fecha_actividad">
            <div class="label"><?php Lang::_lang('Fecha Activ') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_actividad->getFechaActividad())) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad token">
            <div class="label"><?php Lang::_lang('Token') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getToken()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad respuesta">
            <div class="label"><?php Lang::_lang('Respuesta') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getRespuesta()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par app_mov_actividad estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_actividad->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

