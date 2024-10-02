<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$cli_cliente = CliCliente::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CliTipoCliente') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliTipoCliente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Razon Social') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getRazonSocial()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Documento') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCuit()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Domicilio Legal') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getDomicilioLegal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nro Casa') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getNumeroCasa()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Telefono') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getTelefono()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Whatsapp') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Email') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getEmail()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo Postal') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCodigoPostal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GeoLocalidad') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GeoZona') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getGeoZona()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CliGrupo') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliGrupo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralEmpresaTransportadora') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getGralEmpresaTransportadora()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CliCategoria') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliCategoria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CliSubcategoria') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliSubcategoria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Limite Ctacte Imp') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getLimiteCtacteImporte()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Limite Ctacte Dias') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getLimiteCtacteDias()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo Gestion') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Periodicidad') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClientePeriodicidadGestion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo Estado') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClienteTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Tipo Estado Venta') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoVenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo Estado Cobro') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoCobro()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Tipo Estado Cuenta') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoCuenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo Estado Satisfaccion') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoSatisfaccion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('IVA Exceptuado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getIvaExceptuado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Datos Migracion') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getDatosMigracion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Claves') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getClaves()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

