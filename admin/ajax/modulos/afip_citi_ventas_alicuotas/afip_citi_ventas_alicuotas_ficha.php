<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$afip_citi_ventas_alicuotas = AfipCitiVentasAlicuotas::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiPrc()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiCabecera()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_tipo_comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiTipoComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_punto_venta') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiPuntoVenta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_numero_comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiNumeroComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiImporteNetoGravado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiAlicuotaIva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getAfipCitiImporteImpuestoLiquidado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaFactura') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getVtaFactura()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaNotaCredito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getVtaNotaCredito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaNotaDebito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getVtaNotaDebito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_alicuotas->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_alicuotas->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_ventas_alicuotas->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

