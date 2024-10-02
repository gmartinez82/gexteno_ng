<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$not_relacionada_id = Gral::getVars(2, 'not_relacionada_id');
$not_relacionada = NotRelacionada::getOxId($not_relacionada_id);
$not_noticia_relacion = $not_relacionada->getNotNoticiaRelacion();

?>
<div class="datos" id="<?php Gral::_echo($not_noticia_relacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NotNoticiaRelacion') ?>: 
        <strong><?php Gral::_echo($not_noticia_relacion->getId()) ?> - <?php Gral::_echo($not_noticia_relacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="not_noticia_relacion_alta.php?id=<?php echo($not_noticia_relacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotNoticiaRelacion') ?>: <strong><?php Gral::_echo($not_noticia_relacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NotRelacionada::getFiltrosArrGral() ?>&arr=<?php echo $not_relacionada->getFiltrosArrXCampo('NotNoticiaRelacion', 'not_noticia_relacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NotRelacionadas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($not_noticia_relacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

