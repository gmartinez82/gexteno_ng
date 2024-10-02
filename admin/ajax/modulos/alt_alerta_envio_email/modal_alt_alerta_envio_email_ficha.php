<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_alerta_envio_email = AltAlertaEnvioEmail::getOxId($id);
//Gral::prr($alt_alerta_envio_email);
?>

<div class="tabs ficha-alt_alerta_envio_email" identificador="<?php echo $alt_alerta_envio_email->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_alerta_envio_email id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_alerta_envio_email descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email alt_alerta_id">
            <div class="label"><?php Lang::_lang('AltAlerta') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getAltAlerta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email alt_alerta_us_usuario_id">
            <div class="label"><?php Lang::_lang('AltAlertaUsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getAltAlertaUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email asunto">
            <div class="label"><?php Lang::_lang('Asunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getAsunto()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getEmail()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email cuerpo">
            <div class="label"><?php Lang::_lang('Cuerpo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getCuerpo()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email adjunto">
            <div class="label"><?php Lang::_lang('Adjunto') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getAdjunto()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email codigo_envio">
            <div class="label"><?php Lang::_lang('Codigo de Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getCodigoEnvio()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta_envio_email->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta_envio_email estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_envio_email->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

