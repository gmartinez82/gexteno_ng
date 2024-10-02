<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e981_inattrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE981Inattrans()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e982_dnomtrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE982Dnomtrans()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e983_dructrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE983Dructrans()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e984_ddvtrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE984Ddvtrans()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e985_itipidtrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE985Itipidtrans()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e986_ddtipidtrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE986Ddtipidtrans()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e987_dnumidtrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE987Dnumidtrans()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e988_cnactrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE988Cnactrans()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e989_ddesnactrans') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE989Ddesnactrans()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e990_dnumidchof') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE990Dnumidchof()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e991_dnomchof') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE991Dnomchof()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e992_ddomfisc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE992Ddomfisc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e993_ddirchof') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE993Ddirchof()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e994_dnombag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE994Dnombag()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e995_drucag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE995Drucag()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e996_ddvag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE996Ddvag()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e997_ddirage') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE997Ddirage()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

