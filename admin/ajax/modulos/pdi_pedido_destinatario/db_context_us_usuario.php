<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pdi_pedido_destinatario_id = Gral::getVars(2, 'pdi_pedido_destinatario_id');
$pdi_pedido_destinatario = PdiPedidoDestinatario::getOxId($pdi_pedido_destinatario_id);
$us_usuario = $pdi_pedido_destinatario->getUsUsuario();

?>
<div class="datos" id="<?php Gral::_echo($us_usuario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsUsuario') ?>: 
        <strong><?php Gral::_echo($us_usuario->getId()) ?> - <?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_usuario_alta.php?id=<?php echo($us_usuario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsUsuario') ?>: <strong><?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdiPedidoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_destinatario->getFiltrosArrXCampo('UsUsuario', 'us_usuario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdiPedidoDestinatarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

