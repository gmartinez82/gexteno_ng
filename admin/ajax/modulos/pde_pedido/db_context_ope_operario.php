<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_pedido_id = Gral::getVars(2, 'pde_pedido_id');
$pde_pedido = PdePedido::getOxId($pde_pedido_id);
$ope_operario = $pde_pedido->getOpeOperario();

?>
<div class="datos" id="<?php Gral::_echo($ope_operario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OpeOperario') ?>: 
        <strong><?php Gral::_echo($ope_operario->getId()) ?> - <?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ope_operario_alta.php?id=<?php echo($ope_operario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeOperario') ?>: <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdePedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido->getFiltrosArrXCampo('OpeOperario', 'ope_operario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdePedidos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

