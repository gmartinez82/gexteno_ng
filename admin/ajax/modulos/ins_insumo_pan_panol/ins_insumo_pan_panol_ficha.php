<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('InsInsumo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getInsInsumo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PanPanol') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanPanol()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PanUbiPiso') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPiso()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PanUbiPasillo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPasillo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PanUbiEstante') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiEstante()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PanUbiAltura') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiAltura()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PanUbiCasillero') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCasillero()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PanUbiCelda') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCelda()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Clasif') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getInsClasificacion()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Punto de Minimo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPuntoMinimo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Punto de Pedido') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPuntoPedido()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Punto de Maximo') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getPuntoMaximo()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($ins_insumo_pan_panol->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

