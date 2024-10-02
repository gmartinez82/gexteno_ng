<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_centro_pedido_prv_proveedor_id = Gral::getVars(2, 'id');
$pde_centro_pedido_prv_proveedor = PdeCentroPedidoPrvProveedor::getOxId($pde_centro_pedido_prv_proveedor_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_PEDIDO_PRV_PROVEEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_prv_proveedor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_pedido_prv_proveedor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

