<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$afip_citi_cabecera = AfipCitiCabecera::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('AfipCitiPrc') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiPrc()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Inicial') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getInicial())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Actual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getActual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cuit Informante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiCuitInformante()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Periodo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiPeriodo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Secuencia') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiSecuencia()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Sin Movimiento') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiSinMovimiento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Prorratear Cred Fiscal computable') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiProrratearCfComputable()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cred Fiscal Computable o Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiCfComputableOComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Global') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableGlobal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Asignacion Directa') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableAsignacionDirecta()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Prorrateo') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableProrrateo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Cred Fiscal No Computable Global') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfNoComputableGlobal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Cred Fiscal Contribuyente Seg Social') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfContribuyenteSsYOc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Cred Fiscal Computable Seg Social') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableSsYOc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_cabecera->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_cabecera->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($afip_citi_cabecera->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

