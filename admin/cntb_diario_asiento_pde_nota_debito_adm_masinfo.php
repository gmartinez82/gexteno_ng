<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_diario_asiento_pde_nota_debito_id = Gral::getVars(2, 'id');
$cntb_diario_asiento_pde_nota_debito = CntbDiarioAsientoPdeNotaDebito::getOxId($cntb_diario_asiento_pde_nota_debito_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_debito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_debito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

