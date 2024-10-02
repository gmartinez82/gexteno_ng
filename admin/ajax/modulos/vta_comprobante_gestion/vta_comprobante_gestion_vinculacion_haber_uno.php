<?php
$clase = get_class($vta_comprobante);
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="check_vta_comprobante chk_vta_comprobante_<?php echo $vta_comprobante->getId() ?>">
        <input type="checkbox" name="chk_vta_comprobante_<?php echo $clase ?>[<?php echo $vta_comprobante->getId() ?>]" id="chk_vta_comprobante_<?php echo $clase ?>_<?php echo $vta_comprobante->getId() ?>" class="chk_vta_comprobante" vta_comprobante_id="<?php echo $vta_comprobante->getId() ?>" clase="<?php echo $clase ?>" value="<?php echo $vta_comprobante->getId() ?>">
    </div>
</td>

<td align='center' class='adm_tbl_lineas tipo_<?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?> <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_comprobante_min">	
        <?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_comprobante_id">	
        <?php Gral::_echo($vta_comprobante->getTipoComprobante()) ?>
    </div>
    <div class="vta_numero_comprobante">	
        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>
    </div>
    <div class="vta_comprobante_tipo_estado_id">
        <img src="imgs/vta_comprobante_tipo_estado/<?php Gral::_echo($vta_comprobante->getVtaComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_comprobante->getTipoEstadoComprobante()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cli_cliente_id">	
        <?php Gral::_echo($vta_comprobante->getCliCliente()->getDescripcion()) ?>
    </div>
    <div class="codigo">
        <?php Gral::_echo($vta_comprobante->getCodigo()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_comprobante->getFechaEmision())) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe">	
        <?php Gral::_echoImp($vta_comprobante->getImporteTotalComprobante()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe_imputar">	
        <?php Gral::_echoImp($vta_comprobante->getSaldoImputable()) ?>
    </div>
</td>


