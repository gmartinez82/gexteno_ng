<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_recibo = VtaRecibo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCliCliente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaTipoRecibo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaTipoRecibo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaTipoOrigenRecibo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaTipoOrigenRecibo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralEmpresa()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaPuntoVenta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaPuntoVenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaReciboTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero de Pto Vta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getNumeroPuntoVenta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero de Recibo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getNumeroRecibo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero de Recibo Completo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getNumeroReciboCompleto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cae') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCae()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_recibo->getFechaEmision())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralTipoDocumento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getPersonaDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Persona Documento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getPersonaDocumento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Persona Email') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getPersonaEmail()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getRazonSocial()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getDomicilioLegal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CUIT') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCuit()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPresupuesto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaPresupuesto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getVtaPreventista()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Anio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getAnio()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralMes') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralMes()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCntbDiarioAsiento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('FndCaja') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getFndCaja()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralSucursal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getGralSucursal()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getNotaInterna()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getNotaPublica()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_recibo->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

