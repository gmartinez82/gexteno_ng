<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_pedido_id = Gral::getVars(2, 'pde_pedido_id');
$pde_pedido = PdePedido::getOxId($pde_pedido_id);
$pde_urgencia = $pde_pedido->getPdeUrgencia();

?>
<div class="datos" id="<?php Gral::_echo($pde_urgencia->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeUrgencia') ?>: 
        <strong><?php Gral::_echo($pde_urgencia->getId()) ?> - <?php Gral::_echo($pde_urgencia->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_urgencia_alta.php?id=<?php echo($pde_urgencia->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeUrgencia') ?>: <strong><?php Gral::_echo($pde_urgencia->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdePedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido->getFiltrosArrXCampo('PdeUrgencia', 'pde_urgencia_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdePedidos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_urgencia->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

