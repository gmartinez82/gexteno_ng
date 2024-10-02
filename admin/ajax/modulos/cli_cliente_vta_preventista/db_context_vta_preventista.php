<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_vta_preventista_id = Gral::getVars(2, 'cli_cliente_vta_preventista_id');
$cli_cliente_vta_preventista = CliClienteVtaPreventista::getOxId($cli_cliente_vta_preventista_id);
$vta_preventista = $cli_cliente_vta_preventista->getVtaPreventista();

?>
<div class="datos" id="<?php Gral::_echo($vta_preventista->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPreventista') ?>: 
        <strong><?php Gral::_echo($vta_preventista->getId()) ?> - <?php Gral::_echo($vta_preventista->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_preventista_alta.php?id=<?php echo($vta_preventista->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPreventista') ?>: <strong><?php Gral::_echo($vta_preventista->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteVtaPreventista::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_preventista->getFiltrosArrXCampo('VtaPreventista', 'vta_preventista_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteVtaPreventistas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_preventista->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

