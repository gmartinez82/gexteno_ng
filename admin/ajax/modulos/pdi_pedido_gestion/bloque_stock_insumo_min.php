<?php 
if($ins_insumo && $pan_panol){ 
    $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
?>    
    <?php if($ins_stock_resumen){ ?>
    <div class="par">
        <div class="label"><?php Gral::_echo($pan_panol->getDescripcion()) ?></div>
        <div class="dato">Stock de <?php Gral::_echo($ins_stock_resumen->getCantidad()) ?> <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?></div>
    </div>
	<?php }else{ ?>
        No INICIALIZADO en <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
    <?php } ?>
    
    
<?php }else{ ?>
    Seleccione un INSUMO para ver su STOCK
<?php } ?>
