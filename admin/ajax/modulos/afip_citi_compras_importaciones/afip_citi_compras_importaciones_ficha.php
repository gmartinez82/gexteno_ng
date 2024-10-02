<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$afip_citi_compras_importaciones = AfipCitiComprasImportaciones::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiPrc()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('AfipCitiCabecera') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiCabecera()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_despacho_importacion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiDespachoImportacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_importe_neto_gravado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiImporteNetoGravado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('afip_citi_alicuota_iva') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiAlicuotaIva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('afip_citi_importe_impuesto_liquidado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getAfipCitiImporteImpuestoLiquidado()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeFactura') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getPdeFactura()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeNotaCredito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getPdeNotaCredito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeNotaDebito') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getPdeNotaDebito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_compras_importaciones->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

