<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$xml_lenguaje_traduccion_id = Gral::getVars(2, 'xml_lenguaje_traduccion_id');
$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($xml_lenguaje_traduccion_id);
$xml_lenguaje_codigo = $xml_lenguaje_traduccion->getXmlLenguajeCodigo();

?>
<div class="datos" id="<?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('XmlLenguajeCodigo') ?>: 
        <strong><?php Gral::_echo($xml_lenguaje_codigo->getId()) ?> - <?php Gral::_echo($xml_lenguaje_codigo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="xml_lenguaje_codigo_alta.php?id=<?php echo($xml_lenguaje_codigo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('XmlLenguajeCodigo') ?>: <strong><?php Gral::_echo($xml_lenguaje_codigo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo XmlLenguajeTraduccion::getFiltrosArrGral() ?>&arr=<?php echo $xml_lenguaje_traduccion->getFiltrosArrXCampo('XmlLenguajeCodigo', 'xml_lenguaje_codigo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('XmlLenguajeTraduccions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($xml_lenguaje_codigo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

