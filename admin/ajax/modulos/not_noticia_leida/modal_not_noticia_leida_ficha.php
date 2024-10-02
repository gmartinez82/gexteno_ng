<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_noticia_leida = NotNoticiaLeida::getOxId($id);
//Gral::prr($not_noticia_leida);
?>

<div class="tabs ficha-not_noticia_leida" identificador="<?php echo $not_noticia_leida->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_noticia_leida id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getId()) ?>
            </div>
        </div>

	
        <div class="par not_noticia_leida descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida not_noticia_id">
            <div class="label"><?php Lang::_lang('NotNoticia') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getNotNoticia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida sesion">
            <div class="label"><?php Lang::_lang('Sesion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getSesion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida numero_ip">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getNumeroIp()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_noticia_leida estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_noticia_leida->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

