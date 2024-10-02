<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pln_jornada_tramo_id = Gral::getVars(2, 'pln_jornada_tramo_id');
$pln_jornada_tramo = PlnJornadaTramo::getOxId($pln_jornada_tramo_id);
$pln_jornada = $pln_jornada_tramo->getPlnJornada();

?>
<div class="datos" id="<?php Gral::_echo($pln_jornada->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PlnJornada') ?>: 
        <strong><?php Gral::_echo($pln_jornada->getId()) ?> - <?php Gral::_echo($pln_jornada->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pln_jornada_alta.php?id=<?php echo($pln_jornada->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnJornada') ?>: <strong><?php Gral::_echo($pln_jornada->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PlnJornadaTramo::getFiltrosArrGral() ?>&arr=<?php echo $pln_jornada_tramo->getFiltrosArrXCampo('PlnJornada', 'pln_jornada_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PlnJornadaTramos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pln_jornada->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

