<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_cotizacion_envio_email_id = Gral::getVars(2, 'pde_cotizacion_envio_email_id');
$pde_cotizacion_envio_email = PdeCotizacionEnvioEmail::getOxId($pde_cotizacion_envio_email_id);
$pde_cotizacion = $pde_cotizacion_envio_email->getPdeCotizacion();

?>
<div class="datos" id="<?php Gral::_echo($pde_cotizacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeCotizacion') ?>: 
        <strong><?php Gral::_echo($pde_cotizacion->getId()) ?> - <?php Gral::_echo($pde_cotizacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_cotizacion_alta.php?id=<?php echo($pde_cotizacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCotizacion') ?>: <strong><?php Gral::_echo($pde_cotizacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeCotizacionEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $pde_cotizacion_envio_email->getFiltrosArrXCampo('PdeCotizacion', 'pde_cotizacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeCotizacionEnvioEmails') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_cotizacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

