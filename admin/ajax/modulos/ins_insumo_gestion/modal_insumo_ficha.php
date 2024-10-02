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

$ins_insumo_costos = $ins_insumo->getInsInsumoCostos(null, null, true, $arr_ordens = array(array('campo' => InsInsumoCosto::GEN_ATTR_CREADO, 'orden' => 'desc')));
$ins_insumo_costo_actual = $ins_insumo->getInsInsumoCostoActual();

$ins_lista_precios = $ins_insumo->getInsListaPrecios();

$ins_insumo_imagens = $ins_insumo->getInsInsumoImagens();

$ins_insumo_vinculados = $ins_insumo->getInsInsumoVinculadosOrdenados();
$ins_insumo_similars = $ins_insumo->getInsInsumoSimilarsOrdenados();

$vta_orden_ventas_ultimos = $ins_insumo->getVtaOrdenVentasUltimos();
$pde_ocs_ultimos = $ins_insumo->getPdeOcsUltimos();

//Gral::prr($pde_ocs_ultimos);
?>

<div class="tabs ficha-insumo" insumo_id="<?php echo $ins_insumo->getId() ?>">
    <?php include "modal_insumo_ficha_top.php" ?>  
    
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_costos"><?php Lang::_lang('Evolucion de Costos') ?></a></li>
        <li><a href="#tab_proveedores"><?php Lang::_lang('Proveedores') ?></a></li>
        <li><a href="#tab_listas_precios"><?php Lang::_lang('Listas de Precios') ?></a></li>
        <li><a href="#tab_similares"><?php Lang::_lang('Similares') ?> <?php echo (count($ins_insumo_similars) > 0) ? '('.count($ins_insumo_similars).')' : '' ?></a></li>
        <li><a href="#tab_vinculados"><?php Lang::_lang('Vinculados') ?> <?php echo (count($ins_insumo_vinculados) > 0) ? '('.count($ins_insumo_vinculados).')' : '' ?> </a></li>
        <li><a href="#tab_compras_ventas"><?php Lang::_lang('Compras y Ventas') ?></a></li>
        <li><a href="#tab_consultas_telefonicas"><?php Lang::_lang('Consultas Telefonicas') ?></a></li>

    </ul>
    
    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_insumo_ficha_tab_general.php"; ?>  
    </div>
    
    <!-- Tab Costos -->
    <div id="tab_costos" class="datos">
        <?php include "modal_insumo_ficha_tab_costos.php"; ?>
    </div>
    
    <!-- Tab Proveedores -->
    <div id="tab_proveedores" class="datos">
        <?php include "modal_insumo_ficha_tab_proveedores.php"; ?>
    </div>
    
    <!-- Tab Listas Precios -->
    <div id="tab_listas_precios" class="datos">
        <?php include "modal_insumo_ficha_tab_listas_precios.php"; ?>
    </div>
    
    <!-- Tab Similares -->
    <div id="tab_similares" class="datos">
        <?php include "modal_insumo_ficha_tab_similares.php"; ?>
    </div>
    
    <!-- Tab Vinculados -->
    <div id="tab_vinculados" class="datos">
        <?php include "modal_insumo_ficha_tab_vinculados.php"; ?>
    </div>

    <!-- Tab Compras y Ventas -->
    <div id="tab_compras_ventas" class="datos">
        <?php include "modal_insumo_ficha_tab_compras_ventas.php"; ?>
    </div>

    <!-- Tab Consultas Telefonicas -->
    <div id="tab_consultas_telefonicas" class="datos">
        <?php include "modal_insumo_ficha_tab_consultas_telefonicas.php"; ?>
    </div>
    
</div>