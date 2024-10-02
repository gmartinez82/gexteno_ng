
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_stock_transformacion->getId() ?>" modulo="ins_stock_transformacion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        <?php Gral::_echo($ins_stock_transformacion->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="panol-origen">
        <?php Gral::_echo($ins_stock_transformacion->getPanPanol()->getDescripcion()) ?>
    </div>
    <div class="insumo-origen">
        <?php Gral::_echo($ins_stock_transformacion->getInsInsumo()->getDescripcion()) ?>
    </div>
    <div class="cantidad-origen">
        Cantidad: <?php Gral::_echo($ins_stock_transformacion->getCantidad()) ?>
    </div>
    <div class="fecha">
        Fecha: <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getCreado())) ?>
    </div>
    <div class="creado-por">
        Creado Por: <?php Gral::_echo($ins_stock_transformacion->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php foreach ($ins_stock_transformacion->getInsStockTransformacionDestinos() as $ins_stock_transformacion_destino) { ?>
        <div class="uno-destino">
            <div class="panol-destino">
                <?php Gral::_echo($ins_stock_transformacion_destino->getPanPanol()->getDescripcion()) ?>
            </div>
            <div class="insumo-destino">
                <?php Gral::_echo($ins_stock_transformacion_destino->getInsInsumo()->getDescripcion()) ?>
            </div>
            <div class="cantidad-destino">
                Cantidad: <?php Gral::_echo($ins_stock_transformacion_destino->getCantidad()) ?>
            </div>
            <?php if($ins_stock_transformacion->getInsInsumoCosto()){  ?>
            <div class="insumo-costo">
                Costo x Un: <?php Gral::_echoImp($ins_stock_transformacion->getInsInsumoCosto()->getCosto()) ?>
            </div>
            <?php } ?>
        </div>
    <?php } ?>
</td>



<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">
        &nbsp;
    </ul>
</td>


