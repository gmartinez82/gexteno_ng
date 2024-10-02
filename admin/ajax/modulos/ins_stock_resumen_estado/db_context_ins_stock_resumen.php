<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_stock_resumen_estado_id = Gral::getVars(2, 'ins_stock_resumen_estado_id');
$ins_stock_resumen_estado = InsStockResumenEstado::getOxId($ins_stock_resumen_estado_id);
$ins_stock_resumen = $ins_stock_resumen_estado->getInsStockResumen();

?>
<div class="datos" id="<?php Gral::_echo($ins_stock_resumen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsStockResumen') ?>: 
        <strong><?php Gral::_echo($ins_stock_resumen->getId()) ?> - <?php Gral::_echo($ins_stock_resumen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_stock_resumen_alta.php?id=<?php echo($ins_stock_resumen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockResumen') ?>: <strong><?php Gral::_echo($ins_stock_resumen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsStockResumenEstado::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_resumen_estado->getFiltrosArrXCampo('InsStockResumen', 'ins_stock_resumen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsStockResumenEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_stock_resumen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

