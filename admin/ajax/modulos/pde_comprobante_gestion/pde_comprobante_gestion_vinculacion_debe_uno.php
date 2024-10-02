<?php
$clase = get_class($pde_comprobante);
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="check_pde_comprobante chk_pde_comprobante_<?php echo $pde_comprobante->getId() ?>">
        <input type="checkbox" name="chk_pde_comprobante_<?php echo $clase ?>[<?php echo $pde_comprobante->getId() ?>]" id="chk_pde_comprobante_<?php echo $clase ?>_<?php echo $pde_comprobante->getId() ?>" class="chk_pde_comprobante" pde_comprobante_id="<?php echo $pde_comprobante->getId() ?>" clase="<?php echo $clase ?>" value="<?php echo $pde_comprobante->getId() ?>">
    </div>
</td>

<td align='center' class='adm_tbl_lineas tipo_<?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?> <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_comprobante_min">	
        <?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_comprobante_id">	
        <?php Gral::_echo($pde_comprobante->getTipoComprobante()) ?>
    </div>
    <div class="pde_numero_comprobante">	
        <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
    </div>
    <div class="pde_comprobante_tipo_estado_id">
        <img src="imgs/pde_comprobante_tipo_estado/<?php Gral::_echo($pde_comprobante->getPdeComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($pde_comprobante->getTipoEstadoComprobante()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="prv_proveedor_id">	
        <?php Gral::_echo($pde_comprobante->getPrvProveedor()->getDescripcion()) ?>
    </div>
    <div class="codigo">
        <?php Gral::_echo($pde_comprobante->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getFechaEmision())) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe">	
        <?php Gral::_echoImp($pde_comprobante->getImporteTotalComprobante()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe_imputar">	
        <?php Gral::_echoImp($pde_comprobante->getSaldoImputable()) ?>
    </div>
</td>




