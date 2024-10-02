<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_estado_id = Gral::getVars(2, 'pde_factura_estado_id');
$pde_factura_estado = PdeFacturaEstado::getOxId($pde_factura_estado_id);
$pde_factura_tipo_estado = $pde_factura_estado->getPdeFacturaTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($pde_factura_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeFacturaTipoEstado') ?>: 
        <strong><?php Gral::_echo($pde_factura_tipo_estado->getId()) ?> - <?php Gral::_echo($pde_factura_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_factura_tipo_estado_alta.php?id=<?php echo($pde_factura_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaTipoEstado') ?>: <strong><?php Gral::_echo($pde_factura_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFacturaEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_estado->getFiltrosArrXCampo('PdeFacturaTipoEstado', 'pde_factura_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturaEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_factura_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

