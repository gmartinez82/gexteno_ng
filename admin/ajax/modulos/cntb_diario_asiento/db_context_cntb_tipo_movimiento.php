<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_diario_asiento_id = Gral::getVars(2, 'cntb_diario_asiento_id');
$cntb_diario_asiento = CntbDiarioAsiento::getOxId($cntb_diario_asiento_id);
$cntb_tipo_movimiento = $cntb_diario_asiento->getCntbTipoMovimiento();

?>
<div class="datos" id="<?php Gral::_echo($cntb_tipo_movimiento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbTipoMovimiento') ?>: 
        <strong><?php Gral::_echo($cntb_tipo_movimiento->getId()) ?> - <?php Gral::_echo($cntb_tipo_movimiento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_tipo_movimiento_alta.php?id=<?php echo($cntb_tipo_movimiento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbTipoMovimiento') ?>: <strong><?php Gral::_echo($cntb_tipo_movimiento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbDiarioAsiento::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento->getFiltrosArrXCampo('CntbTipoMovimiento', 'cntb_tipo_movimiento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbDiarioAsientos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_tipo_movimiento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

