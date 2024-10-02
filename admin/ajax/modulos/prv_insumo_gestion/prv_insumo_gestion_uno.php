<?php
$prv_insumo_costo_actual = $prv_insumo->getPrvInsumoCostoActual();
$prv_insumo_costo_anterior = $prv_insumo->getPrvInsumoCostoAnterior();

$importe_neto_actual = $prv_insumo_costo_actual->getImporteNeto();
$ins_insumo = $prv_insumo->getInsInsumo();
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo_proveedor">
        <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
    </div>
    <div class="id">
        ID: <?php Gral::_echo($prv_insumo->getId()); ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="prv-descripcion">
        <?php Gral::_echo($prv_insumo->getDescripcion()); ?>
    </div>
    <div class="creado">
        Creado el <?php Gral::_echo(Gral::getFechaHoraToWEB($prv_insumo->getCreado())) ?> por <?php Gral::_echo($prv_insumo->getCreadoPorDescripcion()) ?>
    </div>
    
    <div class="ins_marca_pieza">
        <?php Gral::_echo(($prv_insumo->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_insumo->getInsMarcaPieza())->getDescripcion() : '-') ?>
    </div>
    <div class="codigo_pieza">
        <?php Gral::_echo($prv_insumo->getCodigoPieza()); ?>
    </div>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="prv_proveedor_id">	
        <?php Gral::_echo($prv_insumo->getPrvProveedor()->getDescripcion()); ?>

        <?php if ($prv_insumo->getReferencial()) { ?>
            <img src="imgs/btn_importe.png" width="8" alt="hab" title="Es proveedor referencial de precios" />                    
        <?php } ?>
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
    <div class="importes-venta">
        <div class="importe-venta-neto">
            <?php Gral::_echoImp($importe_neto_actual); ?>
        </div>
        <div class="fecha_actualizacion" title="Ultima Actualizacion">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getFechaActualizacion())); ?>
        </div>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ((int) $ins_insumo->getId() != 0): ?>
        <div class="ins-insumo">
            <div class="avatar">
                <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>">
                    <img class="foto" src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" alt="imagen-prd" />
                </a>
            </div>
            <div class="descripcion">
                <?php Gral::_echo($ins_insumo->getCodigoInterno() . ": " . $ins_insumo->getDescripcion()); ?> (<?php echo "#" . $ins_insumo->getId() ?>)
            </div>
        </div>
    <?php endif; ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">
        <?php if (UsCredencial::getEsAcreditado('PRV_INSUMO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ver-ficha-prv-insumo'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado("PRV_INSUMO_GESTION_ACCION_CONFIG")): ?>
            <li class="adm_botones_accion db_context" archivo="<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prv_insumo_gestion/prv_insumo_gestion_acciones_db_context.php?id=<?php Gral::_echo($prv_insumo->getId()) ?>" modulo_metodo_init="setInitPrvInsumoGestion()" title="<?php Lang::_lang("Ver Acciones") ?>">
                <img src="imgs/btn_config.png" width="20" border="0" />
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado('PRV_INSUMO_GESTION_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($prv_insumo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>        
    </ul>
</td>




<script>
    setInit();
    setInitPrvInsumoGestion();
</script>