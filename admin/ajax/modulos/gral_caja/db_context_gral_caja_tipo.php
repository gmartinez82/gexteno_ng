<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_caja_id = Gral::getVars(2, 'gral_caja_id');
$gral_caja = GralCaja::getOxId($gral_caja_id);
$gral_caja_tipo = $gral_caja->getGralCajaTipo();

?>
<div class="datos" id="<?php Gral::_echo($gral_caja_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralCajaTipo') ?>: 
        <strong><?php Gral::_echo($gral_caja_tipo->getId()) ?> - <?php Gral::_echo($gral_caja_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_caja_tipo_alta.php?id=<?php echo($gral_caja_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCajaTipo') ?>: <strong><?php Gral::_echo($gral_caja_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralCaja::getFiltrosArrGral() ?>&arr=<?php echo $gral_caja->getFiltrosArrXCampo('GralCajaTipo', 'gral_caja_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralCajas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_caja_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

