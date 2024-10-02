<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_diario_asiento_vta_recibo_id = Gral::getVars(2, 'cntb_diario_asiento_vta_recibo_id');
$cntb_diario_asiento_vta_recibo = CntbDiarioAsientoVtaRecibo::getOxId($cntb_diario_asiento_vta_recibo_id);
$vta_recibo = $cntb_diario_asiento_vta_recibo->getVtaRecibo();

?>
<div class="datos" id="<?php Gral::_echo($vta_recibo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaRecibo') ?>: 
        <strong><?php Gral::_echo($vta_recibo->getId()) ?> - <?php Gral::_echo($vta_recibo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_recibo_alta.php?id=<?php echo($vta_recibo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRecibo') ?>: <strong><?php Gral::_echo($vta_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_recibo->getFiltrosArrXCampo('VtaRecibo', 'vta_recibo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

