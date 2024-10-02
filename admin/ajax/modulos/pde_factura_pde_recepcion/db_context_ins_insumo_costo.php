<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_pde_recepcion_id = Gral::getVars(2, 'pde_factura_pde_recepcion_id');
$pde_factura_pde_recepcion = PdeFacturaPdeRecepcion::getOxId($pde_factura_pde_recepcion_id);
$ins_insumo_costo = $pde_factura_pde_recepcion->getInsInsumoCosto();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo_costo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumoCosto') ?>: 
        <strong><?php Gral::_echo($ins_insumo_costo->getId()) ?> - <?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_costo_alta.php?id=<?php echo($ins_insumo_costo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoCosto') ?>: <strong><?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recepcion->getFiltrosArrXCampo('InsInsumoCosto', 'ins_insumo_costo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturaPdeRecepcions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

