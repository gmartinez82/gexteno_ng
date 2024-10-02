<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_punto_venta = VtaPuntoVenta::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaTipoPuntoVenta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getVtaTipoPuntoVenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getGralEmpresa()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GeoLocalidad') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getGeoLocalidad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Domicilio Fiscal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getDomicilioFiscal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getNumero()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero Timbrado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getNumeroTimbrado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Inicio Timbr') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_punto_venta->getFechaInicioTimbrado())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Serie') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getSerie()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero Actual') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getNumeroActual()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Tipo de Emision') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getTipoEmision()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Bloqueado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getBloqueado()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Baja') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getFechaBaja()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Requiere CAE') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getRequiereCae())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Solicita CAE') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getSolicitaCae())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Autoincrem') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getAutoincremental())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_punto_venta->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

