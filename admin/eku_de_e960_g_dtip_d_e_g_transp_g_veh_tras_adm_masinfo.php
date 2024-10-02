<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id = Gral::getVars(2, 'id');
$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

