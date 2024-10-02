<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = EkuDeE920GDtipDEGTranspGCamSal::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e921_ddirlocsal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE921Ddirlocsal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e922_dnumcassal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE922Dnumcassal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e923_dcomp1sal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE923Dcomp1sal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e924_dcomp2sal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE924Dcomp2sal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e925_cdepsal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE925Cdepsal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e926_ddesdepsal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE926Ddesdepsal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e927_cdissal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE927Cdissal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e928_ddesdissal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE928Ddesdissal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e929_cciusal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE929Cciusal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e930_ddesciusal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE930Ddesciusal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e931_dtelsal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE931Dtelsal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

