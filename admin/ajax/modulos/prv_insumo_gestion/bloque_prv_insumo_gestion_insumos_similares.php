
<table id='listado_adm_prv_insumo_gestion' border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Id'); ?></td>
        <td class="adm_tbl_encabezado" width="250" align='center'><?php Lang::_lang('Descripcion'); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('PrvProveedor'); ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Cod Proveedor'); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('InsMarca'); ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Cod Marca'); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('InsMarcaPieza'); ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Cod Pieza'); ?></td>
        <td class="adm_tbl_encabezado" width="90" align='center'><?php Lang::_lang('Costo Actual') ?></td>
    </tr>
    <?php
    foreach($ins_insumos_similares as $ins_insumo_similar): 
        $prv_insumo = $ins_insumo_similar->getPrvInsumo();
           
        $prv_insumo_costo_actual   = $prv_insumo->getPrvInsumoCostoActual();
        $prv_insumo_costo_anterior = $prv_insumo->getPrvInsumoCostoAnterior();
        
        $importe_neto_actual = $prv_insumo_costo_actual->getImporteNeto();
        $ins_insumo_similar = $prv_insumo->getInsInsumo();
    ?>
    <tr>
       <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="id">
                <?php Gral::_echo($prv_insumo->getId()); ?>
            </div>
        </td>	
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="descripcion">
                <?php Gral::_echo($prv_insumo->getDescripcion()); ?>
            </div>

            <?php if((int)$ins_insumo_similar->getId() != 0): ?>
            <div class="ins-insumo">
                <div class="avatar">
                    <a href="<?php echo $ins_insumo_similar->getPathImagenPrincipal() ?>">
                        <img class="foto" src="<?php echo $ins_insumo_similar->getPathImagenPrincipal(true) ?>" alt="imagen-prd" />
                    </a>
                </div>
                <div class="descripcion">
                    <?php Gral::_echo($ins_insumo_similar->getDescripcion()); ?>
                </div>
            </div>
            <?php endif; ?>
        </td>	

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="prv_proveedor_id">	
                <?php Gral::_echo($prv_insumo->getPrvProveedor()->getDescripcion()); ?>
            </div>
        </td>
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="codigo_proveedor">
                    <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
            </div>
        </td>	
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="ins_marca_id">
                <?php Gral::_echo($prv_insumo->getInsMarca()->getDescripcion()); ?>
            </div>
        </td>
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="codigo_marca">
                <?php Gral::_echo($prv_insumo->getCodigoMarca()); ?>
            </div>
        </td>
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="ins_marca_pieza">
                <?php Gral::_echo(($prv_insumo->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_insumo->getInsMarcaPieza())->getDescripcion() : '-') ?>
            </div>
        </td>	
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="codigo_pieza">
                <?php Gral::_echo($prv_insumo->getCodigoPieza()); ?>
            </div>
        </td>	
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
            <div class="importes-venta">
                <div class="importe-venta-neto">
                    <?php Gral::_echoImp($importe_neto_actual); ?>
                </div>
                <div class="fecha_actualizacion">
                    <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getFechaActualizacion())); ?>
                </div>
            </div>
        </td>
    </tr>
    <?php    
    endforeach;    
    ?>
    
</table>
