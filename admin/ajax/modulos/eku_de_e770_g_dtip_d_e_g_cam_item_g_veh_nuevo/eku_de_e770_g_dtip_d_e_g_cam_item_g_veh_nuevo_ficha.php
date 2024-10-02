<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e771_itipopvn') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE771Itipopvn()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e772_ddestipopvn') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE772Ddestipopvn()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e773_dchasis') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE773Dchasis()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e774_dcolor') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE774Dcolor()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e775_dpotencia') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE775Dpotencia()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e776_dcapmot') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE776Dcapmot()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e777_dpnet') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE777Dpnet()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e778_dpbruto') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE778Dpbruto()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e779_itipcom') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE779Itipcom()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e780_ddestipcom') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE780Ddestipcom()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e781_dnromotor') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE781Dnromotor()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e782_dcaptracc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE782Dcaptracc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e783_danofab') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE783Danofab()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e784_ctipveh') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE784Ctipveh()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e785_dcapac') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE785Dcapac()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e786_dcilin') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEkuE786Dcilin()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

