<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_nota_debito_id = Gral::getVars(2, 'pde_nota_debito_id');
$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
$gral_empresa = $pde_nota_debito->getGralEmpresa();

?>
<div class="datos" id="<?php Gral::_echo($gral_empresa->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralEmpresa') ?>: 
        <strong><?php Gral::_echo($gral_empresa->getId()) ?> - <?php Gral::_echo($gral_empresa->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_empresa_alta.php?id=<?php echo($gral_empresa->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralEmpresa') ?>: <strong><?php Gral::_echo($gral_empresa->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito->getFiltrosArrXCampo('GralEmpresa', 'gral_empresa_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaDebitos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_empresa->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

