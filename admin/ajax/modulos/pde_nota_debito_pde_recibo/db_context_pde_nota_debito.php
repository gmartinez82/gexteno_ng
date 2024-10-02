<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_debito_pde_recibo_id = Gral::getVars(2, 'pde_nota_debito_pde_recibo_id');
$pde_nota_debito_pde_recibo = PdeNotaDebitoPdeRecibo::getOxId($pde_nota_debito_pde_recibo_id);
$pde_nota_debito = $pde_nota_debito_pde_recibo->getPdeNotaDebito();

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
        <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_recibo->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaDebitoPdeRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_nota_debito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

