<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_pedido_prv_proveedor_avisado_id = Gral::getVars(2, 'id');
$pde_pedido_prv_proveedor_avisado = PdePedidoPrvProveedorAvisado::getOxId($pde_pedido_prv_proveedor_avisado_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

