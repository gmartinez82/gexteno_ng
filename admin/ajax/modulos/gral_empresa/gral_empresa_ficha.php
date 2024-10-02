<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$gral_empresa = GralEmpresa::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GeoLocalidad') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getGeoLocalidad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CUIT') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getCuit()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getRazonSocial()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cod Postal') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getCodigoPostal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getDomicilioLegal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Telefono') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getTelefono()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Email') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getEmail()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Inicio Act') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($gral_empresa->getFechaInicioActividad())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('AFIP CRT') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getAfipCrt()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('AFIP KEY') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getAfipKey()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_empresa->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_empresa->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

