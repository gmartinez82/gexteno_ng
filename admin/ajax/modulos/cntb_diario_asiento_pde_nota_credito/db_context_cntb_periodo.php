<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_diario_asiento_pde_nota_credito_id = Gral::getVars(2, 'cntb_diario_asiento_pde_nota_credito_id');
$cntb_diario_asiento_pde_nota_credito = CntbDiarioAsientoPdeNotaCredito::getOxId($cntb_diario_asiento_pde_nota_credito_id);
$cntb_periodo = $cntb_diario_asiento_pde_nota_credito->getCntbPeriodo();

?>
<div class="datos" id="<?php Gral::_echo($cntb_periodo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbPeriodo') ?>: 
        <strong><?php Gral::_echo($cntb_periodo->getId()) ?> - <?php Gral::_echo($cntb_periodo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_periodo_alta.php?id=<?php echo($cntb_periodo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbPeriodo') ?>: <strong><?php Gral::_echo($cntb_periodo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_nota_credito->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_periodo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

