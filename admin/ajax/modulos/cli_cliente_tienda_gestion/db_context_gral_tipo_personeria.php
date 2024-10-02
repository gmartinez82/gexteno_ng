<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_tienda_id = Gral::getVars(2, 'cli_cliente_tienda_id');
$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);
$gral_tipo_personeria = $cli_cliente_tienda->getGralTipoPersoneria();

?>
<div class="datos" id="<?php Gral::_echo($gral_tipo_personeria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralTipoPersoneria') ?>: 
        <strong><?php Gral::_echo($gral_tipo_personeria->getId()) ?> - <?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_tipo_personeria_alta.php?id=<?php echo($gral_tipo_personeria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoPersoneria') ?>: <strong><?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteTienda::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda->getFiltrosArrXCampo('GralTipoPersoneria', 'gral_tipo_personeria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteTiendas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

