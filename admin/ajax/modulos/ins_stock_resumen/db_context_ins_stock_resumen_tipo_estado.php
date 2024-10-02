<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_stock_resumen_id = Gral::getVars(2, 'ins_stock_resumen_id');
$ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);
$ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($ins_stock_resumen_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsStockResumenTipoEstado') ?>: 
        <strong><?php Gral::_echo($ins_stock_resumen_tipo_estado->getId()) ?> - <?php Gral::_echo($ins_stock_resumen_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_stock_resumen_tipo_estado_alta.php?id=<?php echo($ins_stock_resumen_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockResumenTipoEstado') ?>: <strong><?php Gral::_echo($ins_stock_resumen_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsStockResumen::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_resumen->getFiltrosArrXCampo('InsStockResumenTipoEstado', 'ins_stock_resumen_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsStockResumens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_stock_resumen_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

