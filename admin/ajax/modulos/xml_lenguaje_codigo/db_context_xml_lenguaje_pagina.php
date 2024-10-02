<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$xml_lenguaje_codigo_id = Gral::getVars(2, 'xml_lenguaje_codigo_id');
$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId($xml_lenguaje_codigo_id);
$xml_lenguaje_pagina = $xml_lenguaje_codigo->getXmlLenguajePagina();

?>
<div class="datos" id="<?php Gral::_echo($xml_lenguaje_pagina->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('XmlLenguajePagina') ?>: 
        <strong><?php Gral::_echo($xml_lenguaje_pagina->getId()) ?> - <?php Gral::_echo($xml_lenguaje_pagina->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="xml_lenguaje_pagina_alta.php?id=<?php echo($xml_lenguaje_pagina->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('XmlLenguajePagina') ?>: <strong><?php Gral::_echo($xml_lenguaje_pagina->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo XmlLenguajeCodigo::getFiltrosArrGral() ?>&arr=<?php echo $xml_lenguaje_codigo->getFiltrosArrXCampo('XmlLenguajePagina', 'xml_lenguaje_pagina_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('XmlLenguajeCodigos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($xml_lenguaje_pagina->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

