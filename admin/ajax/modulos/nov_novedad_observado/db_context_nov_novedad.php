<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$nov_novedad_observado_id = Gral::getVars(2, 'nov_novedad_observado_id');
$nov_novedad_observado = NovNovedadObservado::getOxId($nov_novedad_observado_id);
$nov_novedad = $nov_novedad_observado->getNovNovedad();

?>
<div class="datos" id="<?php Gral::_echo($nov_novedad->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('NovNovedad') ?>: 
        <strong><?php Gral::_echo($nov_novedad->getId()) ?> - <?php Gral::_echo($nov_novedad->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="nov_novedad_alta.php?id=<?php echo($nov_novedad->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedad') ?>: <strong><?php Gral::_echo($nov_novedad->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo NovNovedadObservado::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_observado->getFiltrosArrXCampo('NovNovedad', 'nov_novedad_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('NovNovedadObservados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($nov_novedad->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

