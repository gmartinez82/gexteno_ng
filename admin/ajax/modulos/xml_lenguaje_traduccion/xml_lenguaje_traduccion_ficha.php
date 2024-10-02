<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Lenguaje') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getGralLenguaje()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Lenguaje Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getXmlLenguajeCodigo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Traduccion') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getTraduccion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($xml_lenguaje_traduccion->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_traduccion->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_traduccion->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($xml_lenguaje_traduccion->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

