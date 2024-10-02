<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_diario_asiento_pde_nota_debito_id = Gral::getVars(2, 'cntb_diario_asiento_pde_nota_debito_id');
$cntb_diario_asiento_pde_nota_debito = CntbDiarioAsientoPdeNotaDebito::getOxId($cntb_diario_asiento_pde_nota_debito_id);
$pde_nota_debito = $cntb_diario_asiento_pde_nota_debito->getPdeNotaDebito();

?>
<div class="datos" id="<?php Gral::_echo($pde_nota_debito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeNotaDebito') ?>: 
        <strong><?php Gral::_echo($pde_nota_debito->getId()) ?> - <?php Gral::_echo($pde_nota_debito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_nota_debito_alta.php?id=<?php echo($pde_nota_debito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebito') ?>: <strong><?php Gral::_echo($pde_nota_debito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_nota_debito->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_nota_debito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

