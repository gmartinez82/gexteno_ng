<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e020_g_dtip_d_e_g_comp_pub_id = Gral::getVars(2, 'id');
$eku_de_e020_g_dtip_d_e_g_comp_pub = EkuDeE020GDtipDEGCompPub::getOxId($eku_de_e020_g_dtip_d_e_g_comp_pub_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e020_g_dtip_d_e_g_comp_pub->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e020_g_dtip_d_e_g_comp_pub->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e020_g_dtip_d_e_g_comp_pub->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e020_g_dtip_d_e_g_comp_pub->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

