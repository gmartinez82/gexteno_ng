<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$cntb_periodo_id = Gral::getVars(2, 'cntb_periodo_id');
$cntb_periodo = CntbPeriodo::getOxId($cntb_periodo_id);
$gral_mes = $cntb_periodo->getGralMes();

?>
<div class="datos" id="<?php Gral::_echo($gral_mes->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralMes') ?>: 
        <strong><?php Gral::_echo($gral_mes->getId()) ?> - <?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_mes_alta.php?id=<?php echo($gral_mes->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralMes') ?>: <strong><?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbPeriodo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_periodo->getFiltrosArrXCampo('GralMes', 'gral_mes_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbPeriodos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

