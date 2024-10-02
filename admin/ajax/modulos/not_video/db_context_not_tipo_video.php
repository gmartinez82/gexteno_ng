<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$not_video_id = Gral::getVars(2, 'not_video_id');
$not_video = NotVideo::getOxId($not_video_id);
$not_tipo_video = $not_video->getNotTipoVideo();

?>
<div class="datos" id="<?php Gral::_echo($not_tipo_video->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NotTipoVideo') ?>: 
        <strong><?php Gral::_echo($not_tipo_video->getId()) ?> - <?php Gral::_echo($not_tipo_video->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="not_tipo_video_alta.php?id=<?php echo($not_tipo_video->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotTipoVideo') ?>: <strong><?php Gral::_echo($not_tipo_video->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NotVideo::getFiltrosArrGral() ?>&arr=<?php echo $not_video->getFiltrosArrXCampo('NotTipoVideo', 'not_tipo_video_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NotVideos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($not_tipo_video->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

