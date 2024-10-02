<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$gral_moneda = GralMoneda::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo ISO') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getCodigoIso()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero ISO') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getNumeroIso()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Simbolo') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getSimbolo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Moneda Base') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_moneda->getMonedaBase())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Por Default') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_moneda->getPorDefault())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Orden') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

