<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_nota_debito_pde_recibo_id = Gral::getVars(2, 'id');
$pde_nota_debito_pde_recibo = PdeNotaDebitoPdeRecibo::getOxId($pde_nota_debito_pde_recibo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito_pde_recibo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_DEBITO_PDE_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_recibo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_debito_pde_recibo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_DEBITO_PDE_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_recibo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_debito_pde_recibo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

