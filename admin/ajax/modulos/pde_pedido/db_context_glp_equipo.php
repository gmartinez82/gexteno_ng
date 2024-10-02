<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_pedido_id = Gral::getVars(2, 'pde_pedido_id');
$pde_pedido = PdePedido::getOxId($pde_pedido_id);
$glp_equipo = $pde_pedido->getGlpEquipo();

?>
<div class="datos" id="<?php Gral::_echo($glp_equipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GlpEquipo') ?>: 
        <strong><?php Gral::_echo($glp_equipo->getId()) ?> - <?php Gral::_echo($glp_equipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="glp_equipo_alta.php?id=<?php echo($glp_equipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GlpEquipo') ?>: <strong><?php Gral::_echo($glp_equipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdePedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido->getFiltrosArrXCampo('GlpEquipo', 'glp_equipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdePedidos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($glp_equipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

