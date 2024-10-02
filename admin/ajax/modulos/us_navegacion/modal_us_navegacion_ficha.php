<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_navegacion = UsNavegacion::getOxId($id);
//Gral::prr($us_navegacion);
?>

<div class="tabs ficha-us_navegacion" identificador="<?php echo $us_navegacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_navegacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getId()) ?>
            </div>
        </div>

	
        <div class="par us_navegacion us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion session">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getSession()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion ip">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getIp()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion navegador">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getNavegador()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion pagina">
            <div class="label"><?php Lang::_lang('Pagina') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getPagina()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion url">
            <div class="label"><?php Lang::_lang('Url') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getUrl()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion url_referer">
            <div class="label"><?php Lang::_lang('Url Anterior') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getUrlReferer()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_navegacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_navegacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_navegacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

