<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_nota_credito_pde_factura_pde_recepcion_id = Gral::getVars(2, 'id');
$pde_nota_credito_pde_factura_pde_recepcion = PdeNotaCreditoPdeFacturaPdeRecepcion::getOxId($pde_nota_credito_pde_factura_pde_recepcion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito_pde_factura_pde_recepcion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_recepcion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_recepcion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

