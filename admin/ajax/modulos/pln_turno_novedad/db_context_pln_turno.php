<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pln_turno_novedad_id = Gral::getVars(2, 'pln_turno_novedad_id');
$pln_turno_novedad = PlnTurnoNovedad::getOxId($pln_turno_novedad_id);
$pln_turno = $pln_turno_novedad->getPlnTurno();

?>
<div class="datos" id="<?php Gral::_echo($pln_turno->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PlnTurno') ?>: 
        <strong><?php Gral::_echo($pln_turno->getId()) ?> - <?php Gral::_echo($pln_turno->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pln_turno_alta.php?id=<?php echo($pln_turno->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnTurno') ?>: <strong><?php Gral::_echo($pln_turno->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PlnTurnoNovedad::getFiltrosArrGral() ?>&arr=<?php echo $pln_turno_novedad->getFiltrosArrXCampo('PlnTurno', 'pln_turno_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PlnTurnoNovedads') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pln_turno->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

