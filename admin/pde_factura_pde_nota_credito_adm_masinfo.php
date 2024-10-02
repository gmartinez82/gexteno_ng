<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_factura_pde_nota_credito_id = Gral::getVars(2, 'id');
$pde_factura_pde_nota_credito = PdeFacturaPdeNotaCredito::getOxId($pde_factura_pde_nota_credito_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura_pde_nota_credito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_PDE_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_nota_credito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_pde_nota_credito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_PDE_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_nota_credito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_pde_nota_credito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

