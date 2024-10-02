<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_linea_produccion_id = Gral::getVars(2, 'prd_linea_produccion_id');
$prd_linea_produccion = PrdLineaProduccion::getOxId($prd_linea_produccion_id);
$prd_proceso_productivo = $prd_linea_produccion->getPrdProcesoProductivo();

?>
<div class="datos" id="<?php Gral::_echo($prd_proceso_productivo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrdProcesoProductivo') ?>: 
        <strong><?php Gral::_echo($prd_proceso_productivo->getId()) ?> - <?php Gral::_echo($prd_proceso_productivo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prd_proceso_productivo_alta.php?id=<?php echo($prd_proceso_productivo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdProcesoProductivo') ?>: <strong><?php Gral::_echo($prd_proceso_productivo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrdLineaProduccion::getFiltrosArrGral() ?>&arr=<?php echo $prd_linea_produccion->getFiltrosArrXCampo('PrdProcesoProductivo', 'prd_proceso_productivo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdLineaProduccions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prd_proceso_productivo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

