<?php
include "_autoload.php";

$identificador = Gral::getVars(2, 'identificador', 0);
$ins_stock_resumen = InsStockResumen::getOxId($identificador);
$ins_insumo = $ins_stock_resumen->getInsInsumo();
$ins_categoria = $ins_insumo->getInsCategoria();
$pan_panol = $ins_stock_resumen->getPanPanol();
$pde_centro_pedido = $pan_panol->getPdeCentroPedido();

$ins_insumo_costos = $ins_insumo->getInsInsumoCostosEvolucion();
//Gral::prr($ins_insumo_costos); exit;
?>

<div class="datos detalle" stock_resumen_id="<?php echo $ins_stock_resumen->getId() ?>">        
    <div class="titulo"><?php Lang::_lang('Evolucion de Costos de Insumo') ?></div>
    
    <div class="info-insumo">
        <div class="par categoria">
            <div class="label"><?php Lang::_lang('Categoria') ?></div>
            <div class="dato"><?php Gral::_echo($ins_categoria->getDescripcion()) ?></div>
        </div>
        <div class="par insumo">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
        </div>
    </div>
    
    <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_AGREGAR_COSTO')){ ?>
    <div class="botonera">
        <input type="button" class="boton" id="btn_costo_agregar" name="btn_costo_agregar" value="<?php Lang::_lang('Agregar Nuevo Costo') ?>">
    </div>
    <?php } ?>
    
    <div class="costos">
        <?php include "bloque_insumo_costos.php" ?>    
    </div>
    
        
</div>
