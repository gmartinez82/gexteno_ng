<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_ajuste_debe_id = Gral::getVars(2, 'vta_ajuste_debe_id');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
$cli_cliente = $vta_ajuste_debe->getCliCliente();

?>
<div class="datos" id="<?php Gral::_echo($cli_cliente->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CliCliente') ?>: 
        <strong><?php Gral::_echo($cli_cliente->getId()) ?> - <?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cli_cliente_alta.php?id=<?php echo($cli_cliente->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCliente') ?>: <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('CliCliente', 'cli_cliente_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaAjusteDebes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

