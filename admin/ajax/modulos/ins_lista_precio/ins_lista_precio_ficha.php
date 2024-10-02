<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_lista_precio = InsListaPrecio::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Calc') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getImporteCalculado()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Manual') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getImporteManual()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Venta') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getImporteVenta()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Increm') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getPorcentajeIncremento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Increm') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getPorcentajeDescuento()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Increm Fijo') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_lista_precio->getPorcentajeDescuentoFijo())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cantidad Minima Venta') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getCantidadMinimaVenta()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Habilitado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_lista_precio->getHabilitado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_lista_precio->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_lista_precio->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_lista_precio->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

