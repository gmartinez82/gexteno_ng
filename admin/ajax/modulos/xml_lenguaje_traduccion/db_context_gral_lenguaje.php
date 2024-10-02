<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$xml_lenguaje_traduccion_id = Gral::getVars(2, 'xml_lenguaje_traduccion_id');
$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($xml_lenguaje_traduccion_id);
$gral_lenguaje = $xml_lenguaje_traduccion->getGralLenguaje();

?>
<div class="datos" id="<?php Gral::_echo($gral_lenguaje->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralLenguaje') ?>: 
        <strong><?php Gral::_echo($gral_lenguaje->getId()) ?> - <?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_lenguaje_alta.php?id=<?php echo($gral_lenguaje->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralLenguaje') ?>: <strong><?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo XmlLenguajeTraduccion::getFiltrosArrGral() ?>&arr=<?php echo $xml_lenguaje_traduccion->getFiltrosArrXCampo('GralLenguaje', 'gral_lenguaje_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('XmlLenguajeTraduccions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

