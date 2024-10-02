<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_nota_debito = VtaNotaDebito::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getCliCliente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaTipoNotaDebito') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getVtaTipoNotaDebito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaTipoOrigenNotaDebito') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getVtaTipoOrigenNotaDebito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralEmpresa()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaNotaDebitoTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPuntoVenta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getVtaPuntoVenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralFpFormaPago') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralFpFormaPago()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPreventista') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getVtaPreventista()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralActividad') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralActividad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralEscenario') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralEscenario()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero de Pto Vta') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getNumeroPuntoVenta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Numero de Nota de Debito') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getNumeroNotaDebito()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Numero de Nota de Debito Completo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getNumeroNotaDebitoCompleto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cae') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getCae()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_nota_debito->getFechaEmision())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha de Vencimiento') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($vta_nota_debito->getFechaVencimiento())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralTipoDocumento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PersonaDescripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getPersonaDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Persona Documento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getPersonaDocumento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Persona Email') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getPersonaEmail()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getRazonSocial()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getDomicilioLegal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CUIT') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getCuit()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nota Publica') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getNotaPublica()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Anio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getAnio()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralMes') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getGralMes()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getCntbDiarioAsiento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nota Interna') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getNotaInterna()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_nota_debito->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_nota_debito->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

