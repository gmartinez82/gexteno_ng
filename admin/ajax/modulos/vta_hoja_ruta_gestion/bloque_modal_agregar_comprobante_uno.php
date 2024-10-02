
<?php
if(get_class($obj_vta_comprobante) == 'VtaRemito')
{
    $arr_vta_comprobantes_vinculados_ids = $vta_hoja_ruta->getVtaHojaRutaVtaRemitosId();
    $obj_vta_comprobante_tipo_estado = $obj_vta_comprobante->getVtaRemitoTipoEstado();
    $carpeta_img_vta_comprobante_tipo_estado = 'vta_remito_tipo_estado';
    $cantidad_items_obj_vta_comprobante = $obj_vta_comprobante->getCantidadItemsRemito();
}
elseif(get_class($obj_vta_comprobante) == 'VtaRemitoAjuste')
{    
    $arr_vta_comprobantes_vinculados_ids = $vta_hoja_ruta->getVtaHojaRutaVtaRemitoAjustesId();
    $obj_vta_comprobante_tipo_estado = $obj_vta_comprobante->getVtaRemitoAjusteTipoEstado();
    $carpeta_img_vta_comprobante_tipo_estado = 'vta_remito_tipo_estado';
    $cantidad_items_obj_vta_comprobante = $obj_vta_comprobante->getCantidadItemsRemitoAjuste();
}

$checked = (in_array($obj_vta_comprobante->getId(), $arr_vta_comprobantes_vinculados_ids)) ? 'checked' : '';

$vta_hoja_ruta_activa = $obj_vta_comprobante->getVtaHojaRutaActiva();
?>

<td align='center' class='adm_tbl_lineas'>
    <div class='chk_remito_uno_<?php Gral::_echo( $obj_vta_comprobante->getId()); ?>' >
        <input clase='<?php echo get_class(($obj_vta_comprobante)) ?>' id='chk_remito_id_<?php Gral::_echo( $obj_vta_comprobante->getId()); ?>' name='chk_remito_id[<?php Gral::_echo($obj_vta_comprobante->getId()); ?>]' type='checkbox' value='1' <?php Gral::_echo($checked); ?> />
        <div id='chk_remito_id_<?php Gral::_echo($obj_vta_comprobante->getId()); ?>_error' class='label-error'></div>
    </div>
</td>

<td align='center' class='adm_tbl_lineas'>
    <div class='comprobante-codigo'>
        <?php Gral::_echo($obj_vta_comprobante->getCodigo()); ?>
        
        <?php if(get_class($obj_vta_comprobante) == VtaRemito::GEN_CLASE){ ?>
            <a href="ajax/modulos/vta_remito_gestion/pdf_remito.php?vta_remito_id=<?php echo $obj_vta_comprobante->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='12' border='0' title="Ver Remito" />
            </a>
        <?php } ?>
        <?php if(get_class($obj_vta_comprobante) == VtaRemitoAjuste::GEN_CLASE){ ?>
            <a href="ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_ajuste.php?vta_remito_ajuste_id=<?php echo $obj_vta_comprobante->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='12' border='0' title="Ver Remito" />
            </a>
        <?php } ?>
    </div>

    <div class='comprobante-tipo-estado'>
        <img src="imgs/<?php echo $carpeta_img_vta_comprobante_tipo_estado; ?>/<?php Gral::_echo($obj_vta_comprobante_tipo_estado->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
        <?php Gral::_echo($obj_vta_comprobante_tipo_estado->getDescripcion()); ?>
    </div>

    <div class='comprobante-fecha'>
        <?php Gral::_echo(Gral::getFechaToWEB($obj_vta_comprobante->getFecha())); ?>
    </div>
</td>
    
<td align='left' class='adm_tbl_lineas'>
    
    <div class='comprobante-cliente'>
        <?php Gral::_echo($obj_vta_comprobante->getCliCliente()->getDescripcion()); ?>
    </div>
    
    <div class="comprobante-nota-interna">
        NI: <?php Gral::_echo($obj_vta_comprobante->getObservacion()) ?>
    </div>

    <div class="comprobante-nota-publica">
        NP: <?php Gral::_echo($obj_vta_comprobante->getNotaPublica()) ?>
    </div>
    
</td>
    
<td align='left' class='adm_tbl_lineas'>
    <div class='comprobante-centro-recepcion'>
        <?php Gral::_echo($obj_vta_comprobante->getCliCentroRecepcion()->getDescripcion()); ?>
    </div>
    <div class='comprobante-centro-recepcion-domicilio'>
        <?php Gral::_echo($obj_vta_comprobante->getCliCentroRecepcion()->getDomicilio()); ?>
    </div>
    <div class='comprobante-centro-recepcion-localidad'>
        <?php Gral::_echo($obj_vta_comprobante->getCliCentroRecepcion()->getGeoLocalidad()->getDescripcionFull()); ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="comprobante-items">
        <?php Gral::_echo($cantidad_items_obj_vta_comprobante) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas'>
    <?php if($vta_hoja_ruta_activa): ?>
   
        <?php if($vta_hoja_ruta_activa->getId() != $vta_hoja_ruta->getId()){ ?>
        <div class='hoja-ruta distinta-texto'>
            Vinculado a otra Hoja de Ruta
        </div>
        <?php } ?>
    
        <div class='hoja-ruta <?php echo ($vta_hoja_ruta_activa->getId() == $vta_hoja_ruta->getId()) ? 'misma' : 'distinta' ?>'>
            <?php Gral::_echo($vta_hoja_ruta_activa->getDescripcion()); ?>
        </div>
        
        <div class="creado-por">
            <?php Gral::_echo($vta_hoja_ruta_activa->getCreadoPorDescripcion()); ?>
        </div>
        <div class="creado">
            <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_hoja_ruta_activa->getCreado())); ?>
        </div>
    <?php endif; ?>
</td>
