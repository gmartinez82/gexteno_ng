<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_politica_descuento_ins_tipo_lista_precio = VtaPoliticaDescuentoInsTipoListaPrecio::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
        <div class='dato'><?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getVtaPoliticaDescuento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('InsTipoListaPrecio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_tipo_lista_precio->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

