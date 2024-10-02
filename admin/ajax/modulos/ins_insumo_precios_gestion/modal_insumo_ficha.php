<?php
include "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$ins_marca = $ins_insumo->getInsMarca();
$ins_categoria = $ins_insumo->getInsCategoria();
$ins_matriz = $ins_insumo->getInsMatriz();
$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$gral_tipo_iva = GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta());

$prv_insumos = $ins_insumo->getPrvInsumos(null, null, true, $arr_ordens = array(array('campo' => PrvInsumo::GEN_ATTR_FECHA_ACTUALIZACION, 'orden' => 'desc')));

$ins_insumo_costos = $ins_insumo->getInsInsumoCostos(null, null, true, $arr_ordens = array(array('campo' => InsInsumoCosto::GEN_ATTR_ID, 'orden' => 'desc')));
$ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

$ins_lista_precios = $ins_insumo->getInsListaPrecios();

$ins_insumo_imagens = $ins_insumo->getInsInsumoImagens();

$ins_insumo_vinculados = $ins_insumo->getInsInsumoVinculadosOrdenados();
$ins_insumo_similars = $ins_insumo->getInsInsumoSimilarsOrdenados();

$vta_orden_ventas_ultimos = $ins_insumo->getVtaOrdenVentasUltimos();
$pde_ocs_ultimos = $ins_insumo->getPdeOcsUltimos();

$ins_insumo_bultos = $ins_insumo->getInsInsumoBultos(null, null, true);

//Gral::prr($pde_ocs_ultimos);
?>

<div class="tabs ficha-insumo" insumo_id="<?php echo $ins_insumo->getId() ?>">
    <?php include "modal_insumo_ficha_top.php" ?>  
    
    <ul>
        
        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_PRECIOS_GESTION_FICHA_TAB_COSTOS')) { ?>
            <li><a href="#tab_costos"><?php Lang::_lang('Evolucion de Costos') ?></a></li>
        <?php } ?>

    </ul>
        
    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_PRECIOS_GESTION_FICHA_TAB_COSTOS')) { ?>
        <!-- Tab Costos -->
        <div id="tab_costos" class="datos">
            <?php include "modal_insumo_ficha_tab_costos.php"; ?>
        </div>
    <?php } ?>
    
</div>