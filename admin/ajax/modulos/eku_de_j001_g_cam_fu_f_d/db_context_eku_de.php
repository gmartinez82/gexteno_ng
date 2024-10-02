<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_de_j001_g_cam_fu_f_d_id = Gral::getVars(2, 'eku_de_j001_g_cam_fu_f_d_id');
$eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($eku_de_j001_g_cam_fu_f_d_id);
$eku_de = $eku_de_j001_g_cam_fu_f_d->getEkuDe();

?>
<div class="datos" id="<?php Gral::_echo($eku_de->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuDe') ?>: 
        <strong><?php Gral::_echo($eku_de->getId()) ?> - <?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_de_alta.php?id=<?php echo($eku_de->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDe') ?>: <strong><?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuDeJ001GCamFuFD::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_j001_g_cam_fu_f_d->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuDeJ001GCamFuFDs') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

