<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e731_iafeciva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e732_ddesafeciva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE732Ddesafeciva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e733_dpropiva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE733Dpropiva()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e734_dtasaiva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e735_dbasgraviva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735Dbasgraviva()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e736_dliqivaitem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

