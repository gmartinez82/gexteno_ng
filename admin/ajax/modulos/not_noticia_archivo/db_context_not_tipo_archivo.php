<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$not_noticia_archivo_id = Gral::getVars(2, 'not_noticia_archivo_id');
$not_noticia_archivo = NotNoticiaArchivo::getOxId($not_noticia_archivo_id);
$not_tipo_archivo = $not_noticia_archivo->getNotTipoArchivo();

?>
<div class="datos" id="<?php Gral::_echo($not_tipo_archivo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NotTipoArchivo') ?>: 
        <strong><?php Gral::_echo($not_tipo_archivo->getId()) ?> - <?php Gral::_echo($not_tipo_archivo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="not_tipo_archivo_alta.php?id=<?php echo($not_tipo_archivo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotTipoArchivo') ?>: <strong><?php Gral::_echo($not_tipo_archivo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NotNoticiaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_archivo->getFiltrosArrXCampo('NotTipoArchivo', 'not_tipo_archivo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NotNoticiaArchivos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($not_tipo_archivo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

