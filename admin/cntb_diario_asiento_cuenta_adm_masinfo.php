<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_diario_asiento_cuenta_id = Gral::getVars(2, 'id');
$cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($cntb_diario_asiento_cuenta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_diario_asiento_cuenta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_CUENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_cuenta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_cuenta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_DIARIO_ASIENTO_CUENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_cuenta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_diario_asiento_cuenta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

