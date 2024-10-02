<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq = EkuDeE630GDtipDEGCamCondGPagCheq::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e631_dnumcheq') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE631Dnumcheq()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e632_dbcoemi') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE632Dbcoemi()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

