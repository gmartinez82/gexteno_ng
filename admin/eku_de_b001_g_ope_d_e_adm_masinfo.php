<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_b001_g_ope_d_e_id = Gral::getVars(2, 'id');
$eku_de_b001_g_ope_d_e = EkuDeB001GOpeDE::getOxId($eku_de_b001_g_ope_d_e_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_b001_g_ope_d_e->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_b001_g_ope_d_e->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_B001_G_OPE_D_E_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_b001_g_ope_d_e->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_b001_g_ope_d_e->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_B001_G_OPE_D_E_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_b001_g_ope_d_e->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_b001_g_ope_d_e->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

