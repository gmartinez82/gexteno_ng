<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$prv_insumo_costo = PrvInsumoCosto::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PrvInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getPrvInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Bruto') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getImporteBruto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descuento') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getDescuento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Inicial') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getInicial()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Actual') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getActual()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Nro Importac') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getNumeroImportacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getFechaActualizacion())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PrvImportacion') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getPrvImportacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($prv_insumo_costo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

