<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_credito_pde_factura_pde_recepcion_id = Gral::getVars(2, 'pde_nota_credito_pde_factura_pde_recepcion_id');
$pde_nota_credito_pde_factura_pde_recepcion = PdeNotaCreditoPdeFacturaPdeRecepcion::getOxId($pde_nota_credito_pde_factura_pde_recepcion_id);
$ins_unidad_medida = $pde_nota_credito_pde_factura_pde_recepcion->getInsUnidadMedida();

?>
<div class="datos" id="<?php Gral::_echo($ins_unidad_medida->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsUnidadMedida') ?>: 
        <strong><?php Gral::_echo($ins_unidad_medida->getId()) ?> - <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_unidad_medida_alta.php?id=<?php echo($ins_unidad_medida->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsUnidadMedida') ?>: <strong><?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getFiltrosArrXCampo('InsUnidadMedida', 'ins_unidad_medida_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

