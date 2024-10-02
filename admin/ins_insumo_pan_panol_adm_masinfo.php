<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_pan_panol_id = Gral::getVars(2, 'id');
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($ins_insumo_pan_panol_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_pan_panol->getInsInsumo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Punto de Minimo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_pan_panol->getPuntoMinimo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Punto de Pedido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_pan_panol->getPuntoPedido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Punto de Maximo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_pan_panol->getPuntoMaximo())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_PAN_PANOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_pan_panol->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_PAN_PANOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_pan_panol->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

