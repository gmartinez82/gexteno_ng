<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$xml_lenguaje_entorno = XmlLenguajeEntorno::getOxId($id);
//Gral::prr($xml_lenguaje_entorno);
?>

<div class="tabs ficha-xml_lenguaje_entorno" identificador="<?php echo $xml_lenguaje_entorno->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par xml_lenguaje_entorno id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_entorno->getId()) ?>
            </div>
        </div>

	
        <div class="par xml_lenguaje_entorno descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_entorno->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_entorno codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_entorno->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_entorno observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_entorno->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_entorno orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_entorno->getOrden()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_entorno estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_entorno->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

