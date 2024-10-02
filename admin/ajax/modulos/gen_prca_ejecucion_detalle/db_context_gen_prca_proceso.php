<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_prca_ejecucion_detalle_id = Gral::getVars(2, 'gen_prca_ejecucion_detalle_id');
$gen_prca_ejecucion_detalle = GenPrcaEjecucionDetalle::getOxId($gen_prca_ejecucion_detalle_id);
$gen_prca_proceso = $gen_prca_ejecucion_detalle->getGenPrcaProceso();

?>
<div class="datos" id="<?php Gral::_echo($gen_prca_proceso->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenPrcaProceso') ?>: 
        <strong><?php Gral::_echo($gen_prca_proceso->getId()) ?> - <?php Gral::_echo($gen_prca_proceso->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_prca_proceso_alta.php?id=<?php echo($gen_prca_proceso->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenPrcaProceso') ?>: <strong><?php Gral::_echo($gen_prca_proceso->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenPrcaEjecucionDetalle::getFiltrosArrGral() ?>&arr=<?php echo $gen_prca_ejecucion_detalle->getFiltrosArrXCampo('GenPrcaProceso', 'gen_prca_proceso_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenPrcaEjecucionDetalles') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_prca_proceso->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

