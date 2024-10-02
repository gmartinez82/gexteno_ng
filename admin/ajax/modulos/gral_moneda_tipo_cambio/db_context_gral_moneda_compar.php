<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_moneda_tipo_cambio_id = Gral::getVars(2, 'gral_moneda_tipo_cambio_id');
$gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxId($gral_moneda_tipo_cambio_id);
$gral_moneda_compar = $gral_moneda_tipo_cambio->getGralMonedaCompar();

?>
<div class="datos" id="<?php Gral::_echo($gral_moneda_compar->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralMonedaCompar') ?>: 
        <strong><?php Gral::_echo($gral_moneda_compar->getId()) ?> - <?php Gral::_echo($gral_moneda_compar->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_moneda_compar_alta.php?id=<?php echo($gral_moneda_compar->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralMonedaCompar') ?>: <strong><?php Gral::_echo($gral_moneda_compar->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralMonedaTipoCambio::getFiltrosArrGral() ?>&arr=<?php echo $gral_moneda_tipo_cambio->getFiltrosArrXCampo('GralMonedaCompar', 'gral_moneda_compar_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralMonedaTipoCambios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_moneda_compar->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

