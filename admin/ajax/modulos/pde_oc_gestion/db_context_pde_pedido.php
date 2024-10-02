<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_oc_id = Gral::getVars(2, 'pde_oc_id');
$pde_oc = PdeOc::getOxId($pde_oc_id);
$pde_pedido = $pde_oc->getPdePedido();

?>
<div class="datos" id="<?php Gral::_echo($pde_pedido->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdePedido') ?>: 
        <strong><?php Gral::_echo($pde_pedido->getId()) ?> - <?php Gral::_echo($pde_pedido->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_pedido_alta.php?id=<?php echo($pde_pedido->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedido') ?>: <strong><?php Gral::_echo($pde_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcs') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

