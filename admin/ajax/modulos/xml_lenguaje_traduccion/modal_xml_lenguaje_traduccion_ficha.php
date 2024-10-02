<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($id);
//Gral::prr($xml_lenguaje_traduccion);
?>

<div class="tabs ficha-xml_lenguaje_traduccion" identificador="<?php echo $xml_lenguaje_traduccion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par xml_lenguaje_traduccion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getId()) ?>
            </div>
        </div>

	
        <div class="par xml_lenguaje_traduccion gral_lenguaje_id">
            <div class="label"><?php Lang::_lang('Lenguaje') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getGralLenguaje()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion xml_lenguaje_codigo_id">
            <div class="label"><?php Lang::_lang('Lenguaje Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getXmlLenguajeCodigo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion traduccion">
            <div class="label"><?php Lang::_lang('Traduccion') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getTraduccion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_traduccion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_traduccion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($xml_lenguaje_traduccion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

