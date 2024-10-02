<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_presupuesto_ins_insumo_id = Gral::getVars(2, 'vta_presupuesto_ins_insumo_id');
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
$ins_lista_precio = $vta_presupuesto_ins_insumo->getInsListaPrecio();

?>
<div class="datos" id="<?php Gral::_echo($ins_lista_precio->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsListaPrecio') ?>: 
        <strong><?php Gral::_echo($ins_lista_precio->getId()) ?> - <?php Gral::_echo($ins_lista_precio->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_lista_precio_alta.php?id=<?php echo($ins_lista_precio->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsListaPrecio') ?>: <strong><?php Gral::_echo($ins_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuestoInsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_ins_insumo->getFiltrosArrXCampo('InsListaPrecio', 'ins_lista_precio_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestoInsInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

