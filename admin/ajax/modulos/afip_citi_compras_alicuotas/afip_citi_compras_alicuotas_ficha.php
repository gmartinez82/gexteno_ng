<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$afip_citi_compras_alicuotas = AfipCitiComprasAlicuotas::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPrc()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCabecera()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiTipoComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_punto_venta') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPuntoVenta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiNumeroComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_codigo_documento_vendedor') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCodigoDocumentoVendedor()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_numero_identificacion_vendedor') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiNumeroIdentificacionVendedor()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiImporteNetoGravado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiAlicuotaIva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiImporteImpuestoLiquidado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getPdeFactura()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeNotaCredito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaCredito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeNotaDebito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaDebito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_alicuotas->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_alicuotas->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_alicuotas->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

