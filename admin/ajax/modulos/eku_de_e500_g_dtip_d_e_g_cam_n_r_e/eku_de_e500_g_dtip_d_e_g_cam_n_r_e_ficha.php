<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e500_g_dtip_d_e_g_cam_n_r_e = EkuDeE500GDtipDEGCamNRE::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e501_imoteminr') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE501Imoteminr()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e502_ddesmoteminr') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE502Ddesmoteminr()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e503_irespeminr') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE503Irespeminr()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e504_ddesrespeminr') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE504Ddesrespeminr()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e505_dkmr') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE505Dkmr()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e506_dfecem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE506Dfecem()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

