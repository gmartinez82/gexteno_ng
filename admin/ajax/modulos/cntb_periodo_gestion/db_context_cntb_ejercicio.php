<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$cntb_periodo_id = Gral::getVars(2, 'cntb_periodo_id');
$cntb_periodo = CntbPeriodo::getOxId($cntb_periodo_id);
$cntb_ejercicio = $cntb_periodo->getCntbEjercicio();

?>
<div class="datos" id="<?php Gral::_echo($cntb_ejercicio->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbEjercicio') ?>: 
        <strong><?php Gral::_echo($cntb_ejercicio->getId()) ?> - <?php Gral::_echo($cntb_ejercicio->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_ejercicio_alta.php?id=<?php echo($cntb_ejercicio->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbEjercicio') ?>: <strong><?php Gral::_echo($cntb_ejercicio->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbPeriodo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_periodo->getFiltrosArrXCampo('CntbEjercicio', 'cntb_ejercicio_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbPeriodos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_ejercicio->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

