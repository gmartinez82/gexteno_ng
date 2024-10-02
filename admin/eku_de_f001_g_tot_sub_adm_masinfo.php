<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_f001_g_tot_sub_id = Gral::getVars(2, 'id');
$eku_de_f001_g_tot_sub = EkuDeF001GTotSub::getOxId($eku_de_f001_g_tot_sub_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_f001_g_tot_sub->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_f001_g_tot_sub->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_F001_G_TOT_SUB_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_f001_g_tot_sub->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_f001_g_tot_sub->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_F001_G_TOT_SUB_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_f001_g_tot_sub->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_f001_g_tot_sub->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

