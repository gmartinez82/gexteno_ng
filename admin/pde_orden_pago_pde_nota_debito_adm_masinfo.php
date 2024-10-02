<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_orden_pago_pde_nota_debito_id = Gral::getVars(2, 'id');
$pde_orden_pago_pde_nota_debito = PdeOrdenPagoPdeNotaDebito::getOxId($pde_orden_pago_pde_nota_debito_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_orden_pago_pde_nota_debito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_nota_debito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_orden_pago_pde_nota_debito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_nota_debito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_orden_pago_pde_nota_debito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

