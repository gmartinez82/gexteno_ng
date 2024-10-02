<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$xml_lenguaje_traduccion_id = Gral::getVars(2, 'id');
$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($xml_lenguaje_traduccion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($xml_lenguaje_traduccion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'XML_LENGUAJE_TRADUCCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_traduccion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($xml_lenguaje_traduccion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'XML_LENGUAJE_TRADUCCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_traduccion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($xml_lenguaje_traduccion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

