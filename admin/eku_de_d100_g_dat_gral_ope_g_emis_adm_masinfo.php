<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_d100_g_dat_gral_ope_g_emis_id = Gral::getVars(2, 'id');
$eku_de_d100_g_dat_gral_ope_g_emis = EkuDeD100GDatGralOpeGEmis::getOxId($eku_de_d100_g_dat_gral_ope_g_emis_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_d100_g_dat_gral_ope_g_emis->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_d100_g_dat_gral_ope_g_emis->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d100_g_dat_gral_ope_g_emis->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d100_g_dat_gral_ope_g_emis->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

