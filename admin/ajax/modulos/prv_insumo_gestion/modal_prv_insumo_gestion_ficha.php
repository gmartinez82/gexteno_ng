<?php
include "_autoload.php";

$tiene_ins_insumo = false;

$prv_insumo_id = Gral::getVars(2, 'prv_insumo_id', 0);
$prv_insumo = PrvInsumo::getOxId($prv_insumo_id);

//Gral::prr($prv_insumo);

$ins_marca         = $prv_insumo->getInsMarca();

$ins_marca_pieza   = InsMarca::getOxId($prv_insumo->getInsMarcaPieza());

$ins_matriz        = $prv_insumo->getInsMatriz();
$prv_proveedor     = $prv_insumo->getPrvProveedor();

$prv_insumo_costos         = $prv_insumo->getPrvInsumoCostos();
$prv_insumo_costo_actual   = $prv_insumo->getPrvInsumoCostoActual();
$prv_insumo_costo_anterior = $prv_insumo->getPrvInsumoCostoAnterior();

$ins_insumo        = $prv_insumo->getInsInsumo();
$ins_categoria     = $ins_insumo->getInsCategoria();
$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
$gral_tipo_iva     = GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta());
$ins_insumo_imagens = $ins_insumo->getInsInsumoImagens();

//$prv_insumos_insumos_similares
$ins_matriz = $ins_insumo->getInsMatriz();
$ins_matriz_id = $ins_matriz->getId();

$ins_insumos_similares = $ins_matriz->getInsInsumos();//InsInsumo::getOsxInsMatrizId($ins_matriz_id);

$cantidad_insumos_similares = count($ins_insumos_similares)-1;
$texto_cantidad_insumos_similares = "";
($cantidad_insumos_similares > 0) ? $texto_cantidad_insumos_similares = "(".$cantidad_insumos_similares.")" : $texto_cantidad_insumos_similares = "";

?>


<div class="tabs ficha-insumo" prv_insumo_id="<?php echo $prv_insumo->getId(); ?>">
    <?php
        if((int)$ins_insumo->getId() != 0):
            include "modal_prv_insumo_gestion_ficha_top.php"; 
        endif;
    ?>
    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>
        <?php if((int)$ins_insumo->getId() != 0): ?>
        <li>
            <a href="#tab_insumo">
                <?php Lang::_lang('Insumo ') ?>
            </a>
        </li>
        <li>
            <a href="#tab_insumos_similares">
                <?php Lang::_lang('Insumos Similares'); ?> <?php echo $texto_cantidad_insumos_similares; ?>
            </a>
        </li>
        <?php endif; ?>
        <li>
            <a href="#tab_historial_costos"><?php Lang::_lang('Historial Costos del Proveedor'); ?></a>
        </li>
    </ul>
    
    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_prv_insumo_gestion_ficha_tab_general.php"; ?>  
    </div>
    
    <!-- Tab Insumo -->
    <?php if((int)$ins_insumo->getId() != 0): ?>
    <div id="tab_insumo" class="datos">
        <?php include "modal_prv_insumo_gestion_ficha_tab_insumo.php"; ?>  
    </div>
    <?php endif; ?>
    
    <!-- Tab Simular -->
    <?php if((int)$ins_insumo->getId() != 0): ?>
    <div id="tab_insumos_similares" class="datos">
        <?php include "modal_prv_insumo_gestion_ficha_tab_insumos_similares.php"; ?>  
    </div>
    <?php endif; ?>
    
    <!-- Tab Costos -->
    <div id="tab_historial_costos" class="datos">
        <?php include "modal_prv_insumo_gestion_ficha_tab_historial_costos.php"; ?>  
    </div>
    
</div>