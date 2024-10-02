<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_recepcion = PdeRecepcion::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Nro Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getNroComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeTipoRecepcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdeTipoRecepcion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeCentroRecepcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdeCentroRecepcion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPrvProveedor()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdePedido') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdePedido()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeOc') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdeOc()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeRecepcionTipoEstadoFacturacion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstadoFacturacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cantidad') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getCantidad()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Entrega') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getFechaEntrega())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Unidad') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getImporteUnidad()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Total') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getImporteTotal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Vencimiento') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getVencimiento())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeRecepcionAgrupacion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getPdeRecepcionAgrupacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_recepcion->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

