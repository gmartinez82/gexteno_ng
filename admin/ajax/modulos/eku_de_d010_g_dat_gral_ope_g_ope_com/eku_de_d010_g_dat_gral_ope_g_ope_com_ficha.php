<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_d010_g_dat_gral_ope_g_ope_com = EkuDeD010GDatGralOpeGOpeCom::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d011_itiptra') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD011Itiptra()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d012_ddestiptra') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD012Ddestiptra()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d013_itimp') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD013Itimp()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d014_ddestimp') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD014Ddestimp()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d015_cmoneope') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD015Cmoneope()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d016_ddesmoneope') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD016Ddesmoneope()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d017_dcondticam') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD017Dcondticam()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d018_dticam') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD018Dticam()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_d019_icondant') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD019Icondant()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_d020_ddescondant') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD020Ddescondant()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_d010_g_dat_gral_ope_g_ope_com->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d010_g_dat_gral_ope_g_ope_com->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d010_g_dat_gral_ope_g_ope_com->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

