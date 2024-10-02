<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_prv_proveedor_id = Gral::getVars(2, 'id');
$ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxId($ins_insumo_prv_proveedor_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_prv_proveedor->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_PRV_PROVEEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_prv_proveedor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_prv_proveedor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_PRV_PROVEEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_prv_proveedor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_prv_proveedor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

