<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Descripcion Corta') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getDescripcionCorta()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Increm') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeIncremento()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Min') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getImporteMinimo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Incl Log') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getIncluyeLogistica())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Bulto Cerrado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getBultoCerrado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Comis') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeComision()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Porc Logis') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeLogistica()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Porc Desc Max') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Por Default') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getPorDefault())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_tipo_lista_precio->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_tipo_lista_precio->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_tipo_lista_precio->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

