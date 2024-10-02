<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId($id);
//Gral::prr($xml_lenguaje_codigo);
?>

<div class="tabs ficha-xml_lenguaje_codigo" identificador="<?php echo $xml_lenguaje_codigo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par xml_lenguaje_codigo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>
            </div>
        </div>

	
        <div class="par xml_lenguaje_codigo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo xml_lenguaje_tipo_id">
            <div class="label"><?php Lang::_lang('XmlLenguajeTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getXmlLenguajeTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo xml_lenguaje_pagina_id">
            <div class="label"><?php Lang::_lang('XmlLenguajePagina') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getXmlLenguajePagina()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo xml_lenguaje_entorno_id">
            <div class="label"><?php Lang::_lang('XmlLenguajeEntorno') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getXmlLenguajeEntorno()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_codigo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_codigo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($xml_lenguaje_codigo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

