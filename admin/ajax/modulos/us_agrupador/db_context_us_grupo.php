<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$us_agrupador_id = Gral::getVars(2, 'us_agrupador_id');
$us_agrupador = UsAgrupador::getOxId($us_agrupador_id);
$us_grupo = $us_agrupador->getUsGrupo();

?>
<div class="datos" id="<?php Gral::_echo($us_grupo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsGrupo') ?>: 
        <strong><?php Gral::_echo($us_grupo->getId()) ?> - <?php Gral::_echo($us_grupo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_grupo_alta.php?id=<?php echo($us_grupo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsGrupo') ?>: <strong><?php Gral::_echo($us_grupo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo UsAgrupador::getFiltrosArrGral() ?>&arr=<?php echo $us_agrupador->getFiltrosArrXCampo('UsGrupo', 'us_grupo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('UsAgrupadors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_grupo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

