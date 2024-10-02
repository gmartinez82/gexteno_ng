<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e301_inatven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE301Inatven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e302_ddesnatven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE302Ddesnatven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e304_itipidven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE304Itipidven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e305_ddtipidven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE305Ddtipidven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e306_dnumidven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE306Dnumidven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e307_dnomven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE307Dnomven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e308_ddirven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE308Ddirven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e309_dnumcasven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE309Dnumcasven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e310_cdepven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE310Cdepven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e311_ddesdepven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE311Ddesdepven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e312_cdisven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE312Cdisven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e313_ddesdisven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE313Ddesdisven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e314_cciuven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE314Cciuven()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e315_ddesciuven') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE315Ddesciuven()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e316_ddirprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE316Ddirprov()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e317_cdepprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE317Cdepprov()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e318_ddesdepprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE318Ddesdepprov()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e319_cdisprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE319Cdisprov()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e320_ddesdisprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE320Ddesdisprov()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e321_cciuprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE321Cciuprov()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e322_ddesciuprov') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE322Ddesciuprov()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e300_g_dtip_d_e_g_cam_a_e->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

