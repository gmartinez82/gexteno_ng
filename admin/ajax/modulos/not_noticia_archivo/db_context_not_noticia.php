<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$not_noticia_archivo_id = Gral::getVars(2, 'not_noticia_archivo_id');
$not_noticia_archivo = NotNoticiaArchivo::getOxId($not_noticia_archivo_id);
$not_noticia = $not_noticia_archivo->getNotNoticia();

?>
<div class="datos" id="<?php Gral::_echo($not_noticia->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NotNoticia') ?>: 
        <strong><?php Gral::_echo($not_noticia->getId()) ?> - <?php Gral::_echo($not_noticia->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="not_noticia_alta.php?id=<?php echo($not_noticia->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotNoticia') ?>: <strong><?php Gral::_echo($not_noticia->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NotNoticiaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia_archivo->getFiltrosArrXCampo('NotNoticia', 'not_noticia_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NotNoticiaArchivos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($not_noticia->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

