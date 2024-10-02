<div class="modal-top">
    
    <div class="col foto">
        <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" alt="img-prd" />
    </div>
    
    <div class="col info-insumo">
        <div class="descripcion">
            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
        </div>
        <div class="codigo-interno">
            <label class="label">C.I.: </label> 
            <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
        </div>
        <div class="categoria">
            <label class="label">Cat:</label> 
            <?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?>
        </div>
        <div class="modelos">
            <label class="label">Para:</label> 
            <?php foreach($ins_insumo->getVehModelosXInsInsumoVehModelo() as $veh_modelo){ ?>
            <label class="modelo"><?php Gral::_echo($veh_modelo->getDescripcion()) ?></label> /
            <?php } ?>
        </div>
    </div>
    
    <div class="col marca">
        <?php Gral::_echo($ins_marca->getDescripcion()) ?>: 
        <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
    </div>
    
</div>