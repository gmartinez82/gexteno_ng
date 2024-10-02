<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_prca_ejecucion_detalle_id = Gral::getVars(2, 'gen_prca_ejecucion_detalle_id');
$gen_prca_ejecucion_detalle = GenPrcaEjecucionDetalle::getOxId($gen_prca_ejecucion_detalle_id);
$gen_prca_ejecucion = $gen_prca_ejecucion_detalle->getGenPrcaEjecucion();

?>
<div class="datos" id="<?php Gral::_echo($gen_prca_ejecucion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenPrcaEjecucion') ?>: 
        <strong><?php Gral::_echo($gen_prca_ejecucion->getId()) ?> - <?php Gral::_echo($gen_prca_ejecucion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_prca_ejecucion_alta.php?id=<?php echo($gen_prca_ejecucion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenPrcaEjecucion') ?>: <strong><?php Gral::_echo($gen_prca_ejecucion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenPrcaEjecucionDetalle::getFiltrosArrGral() ?>&arr=<?php echo $gen_prca_ejecucion_detalle->getFiltrosArrXCampo('GenPrcaEjecucion', 'gen_prca_ejecucion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenPrcaEjecucionDetalles') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_prca_ejecucion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

