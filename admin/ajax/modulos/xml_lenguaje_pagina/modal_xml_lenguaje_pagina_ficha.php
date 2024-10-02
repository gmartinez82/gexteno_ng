<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$xml_lenguaje_pagina = XmlLenguajePagina::getOxId($id);
//Gral::prr($xml_lenguaje_pagina);
?>

<div class="tabs ficha-xml_lenguaje_pagina" identificador="<?php echo $xml_lenguaje_pagina->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par xml_lenguaje_pagina id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_pagina->getId()) ?>
            </div>
        </div>

	
        <div class="par xml_lenguaje_pagina descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_pagina->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_pagina codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_pagina->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_pagina observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_pagina->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_pagina orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_pagina->getOrden()) ?>
            </div>
        </div>
		
        <div class="par xml_lenguaje_pagina estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($xml_lenguaje_pagina->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

