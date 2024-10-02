<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_orden_pago_estado_id = Gral::getVars(2, 'pde_orden_pago_estado_id');
$pde_orden_pago_estado = PdeOrdenPagoEstado::getOxId($pde_orden_pago_estado_id);
$prv_preventista = $pde_orden_pago_estado->getPrvPreventista();

?>
<div class="datos" id="<?php Gral::_echo($prv_preventista->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvPreventista') ?>: 
        <strong><?php Gral::_echo($prv_preventista->getId()) ?> - <?php Gral::_echo($prv_preventista->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_preventista_alta.php?id=<?php echo($prv_preventista->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvPreventista') ?>: <strong><?php Gral::_echo($prv_preventista->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_estado->getFiltrosArrXCampo('PrvPreventista', 'prv_preventista_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOrdenPagoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_preventista->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

