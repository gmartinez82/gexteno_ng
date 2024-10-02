<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_id = Gral::getVars(2, 'id');
$eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::getOxId($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

