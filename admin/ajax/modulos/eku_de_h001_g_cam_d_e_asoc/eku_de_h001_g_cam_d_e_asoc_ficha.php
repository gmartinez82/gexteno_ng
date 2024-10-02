<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h002_itipdocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h003_ddestipdocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h004_dcdcderef') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h005_dntimdi') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH005Dntimdi()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h006_destdocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH006Destdocaso()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h007_dpexpdocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH007Dpexpdocaso()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h008_dnumdocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH008Dnumdocaso()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h009_itipodocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH009Itipodocaso()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h010_ddtipodocaso') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH010Ddtipodocaso()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h011_dfecemidi') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH011Dfecemidi()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h012_dnumcomret') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH012Dnumcomret()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h013_dnumrescf') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH013Dnumrescf()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h014_itipcons') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH014Itipcons()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h015_ddestipcons') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH015Ddestipcons()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_h016_dnumcons') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH016Dnumcons()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_h017_dnumcontrol') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH017Dnumcontrol()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_h001_g_cam_d_e_asoc->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

