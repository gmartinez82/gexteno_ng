<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_d140_g_dat_gral_ope_g_resp_d_e = EkuDeD140GDatGralOpeGRespDE::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d141_itipidrespde') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD141Itipidrespde()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d142_ddtipidrespde') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD142Ddtipidrespde()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d143_dnumidrespde') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD143Dnumidrespde()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d144_dnomrespde') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD144Dnomrespde()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d145_dcarrespde') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD145Dcarrespde()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

