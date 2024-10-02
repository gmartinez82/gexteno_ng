<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$app_mov_instalacion = AppMovInstalacion::getOxId($id);
//Gral::prr($app_mov_instalacion);
?>

<div class="tabs ficha-app_mov_instalacion" identificador="<?php echo $app_mov_instalacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par app_mov_instalacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getId()) ?>
            </div>
        </div>

	
        <div class="par app_mov_instalacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion app_mov_dispositivo_id">
            <div class="label"><?php Lang::_lang('AppMovDispositivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getAppMovDispositivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion app_mov_modulo_id">
            <div class="label"><?php Lang::_lang('AppMovModulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getAppMovModulo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion gen_api_token_id">
            <div class="label"><?php Lang::_lang('GenApiToken') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getGenApiToken()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion app_mov_version_id">
            <div class="label"><?php Lang::_lang('AppMovVersion') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getAppMovVersion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion app_version">
            <div class="label"><?php Lang::_lang('App Ver') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getAppVersion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion app_version_activa">
            <div class="label"><?php Lang::_lang('App Ver Act') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getAppVersionActiva()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion fecha_ultima_actividad">
            <div class="label"><?php Lang::_lang('Fecha Ult Activ') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($app_mov_instalacion->getFechaUltimaActividad())) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par app_mov_instalacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($app_mov_instalacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

