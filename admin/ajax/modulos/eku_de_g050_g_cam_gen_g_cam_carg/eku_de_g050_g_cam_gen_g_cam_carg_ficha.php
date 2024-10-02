<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_g051_cunimedtotvol') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG051Cunimedtotvol()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_g052_ddesunimedtotvol') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG052Ddesunimedtotvol()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_g053_dtotvolmerc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG053Dtotvolmerc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_g054_cunimedtotpes') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG054Cunimedtotpes()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_g055_ddesunimedtotpes') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG055Ddesunimedtotpes()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_g056_dtotpesmerc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG056Dtotpesmerc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_g057_icarcarga') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG057Icarcarga()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_g058_ddescarcarga') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG058Ddescarcarga()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_g050_g_cam_gen_g_cam_carg->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

