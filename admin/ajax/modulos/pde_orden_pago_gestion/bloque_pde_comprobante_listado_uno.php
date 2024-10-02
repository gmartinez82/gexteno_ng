<?php
$pde_comprobante_id = $pde_comprobante->getId();
$pde_comprobante_class = get_class($pde_comprobante);

$arr_indice_combinado = $pde_comprobante_class . '_' . $pde_comprobante_id;

$prv_descuento_financiero = $pde_comprobante->getPrvDescuentoFinanciero();
$porcentaje_descuento_tentativo = 0;
if ($prv_descuento_financiero) {
    $porcentaje_descuento_tentativo = $prv_descuento_financiero->getPorcentajeDescuento();
}

$importe_subtotal_comprobante = $pde_comprobante->getImporteSubtotalComprobante($ins_tipo_insumo = false, $tipo_subtotal = PdeComprobante::TIPO_SUBTOTAL_GRAVADO);
$importe_total_comprobante = $pde_comprobante->getImporteTotalComprobante();
$importe_imputado = $pde_comprobante->getSaldoImputado();
$importe_en_orden_pago = $pde_comprobante->getImporteEnOrdenPago();
$importe_disponible_para_orden_pago = $pde_comprobante->getImporteDisponibleParaOrdenPago(true);
$importe_imponible_disponible_para_orden_pago = $pde_comprobante->getImporteImponibleDisponibleParaOrdenPago(true);
$porcentaje_imponible_decimal = $pde_comprobante->getPorcentajeImponibleDecimal();

$importe_imponible = round($importe_imponible_disponible_para_orden_pago, 2);

$importe_total_comprobante_con_descuento_esperado = $importe_total_comprobante - ($importe_total_comprobante * ($porcentaje_descuento_tentativo / 100));

// dias para vencimiento
$dias_para_vencimiento = Date::getDiferenciaTiempo('d', date('Y-m-d'), $pde_comprobante->getFechaVencimiento());

// -----------------------------------------------------------------------------
// Reclamos del Comprobante
// -----------------------------------------------------------------------------
$array_reclamos = $pde_comprobante->getArrReclamosComprobante();
//Gral::prr($array_reclamos);
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($importe_disponible_para_orden_pago > 0) { ?>
        <div class="check_pde_comprobante chk_pde_comprobante_<?php echo $pde_comprobante_id ?>">
            <input type="checkbox" name="chk_pde_comprobante[<?php echo $arr_indice_combinado ?>]" id="chk_pde_comprobante_<?php echo $arr_indice_combinado ?>" class="chk_pde_comprobante" value="<?php echo $pde_comprobante_id ?>">
        </div>
        <input type="hidden" name="hdn_pde_comprobante_id[<?php echo $arr_indice_combinado ?>]" id="hdn_pde_comprobante_id_<?php echo $arr_indice_combinado ?>" size="2" class="textbox hdn_pde_comprobante_id" value="<?php echo $pde_comprobante_id ?>">
        <input type="hidden" name="hdn_pde_comprobante_class[<?php echo $arr_indice_combinado ?>]" id="hdn_pde_comprobante_class_<?php echo $arr_indice_combinado ?>" size="7" class="textbox hdn_pde_comprobante_class" value="<?php echo $pde_comprobante_class ?>">
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if (trim($pde_comprobante->getNotaInterna())) { ?>
        <img src="imgs/btn_nota_interna.png" width="16" alt="icon-nota-interna" title="<?php Gral::_echoTxt($pde_comprobante->getNotaInterna()) ?>" />
    <?php } ?>

    <?php if (count($array_reclamos) > 0) { ?>
        <?php foreach ($array_reclamos as $array_reclamo) { ?>
            <img src="imgs/icn_alerta.png" width="16" alt="icon-nota-interna" title="<?php Gral::_echoTxt($array_reclamo['descripcion_full']) ?>" />
        <?php } ?>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-pde-comprobante">
        <?php Gral::_echo($pde_comprobante->getCodigo()) ?>
    </div>
    <div class="fecha-pde-comprobante">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getFechaEmision())) ?>
    </div>
    <div class="pde_comprobante_tipo_estado_id">	
        <img src="imgs/pde_comprobante_tipo_estado/<?php Gral::_echo($pde_comprobante->getPdeComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
        <?php Gral::_echo($pde_comprobante->getPdeComprobanteTipoEstado()->getDescripcion()) ?>
    </div>    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="numero-pde-comprobante">
        <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
    </div>
    <div class="fecha-vencimiento-pde-comprobante">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getFechaVencimiento())) ?>
    </div>

    <?php if ($pde_comprobante->getFechaVencimiento() != '1900-01-01') { ?>
        <?php if ($dias_para_vencimiento >= 0) { ?>
            <div class="fecha-vencimiento-dias-faltan">
                faltan <?php Gral::_echo($dias_para_vencimiento) ?> dias
            </div>
        <?php } else { ?>
            <div class="fecha-vencimiento-dias-pasados">
                <?php Gral::_echo($dias_para_vencimiento) ?> dias pasado
            </div>
        <?php } ?>
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-subtotal">
        <?php Gral::_echoImp($importe_subtotal_comprobante) ?>
    </div>    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($porcentaje_descuento_tentativo == 0) { ?>
        <div class="importe-total neto">
            <?php Gral::_echoImp($importe_total_comprobante) ?>
        </div>    
    <?php } else { ?>
        <div class="importe-total bruto">
            <?php Gral::_echoImp($importe_total_comprobante) ?>
        </div>
        <div class="porcentaje-descuento" title="<?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?>">
            <?php Gral::_echoFloat($porcentaje_descuento_tentativo) ?> OFF
        </div>
        <div class="importe-total neto con-descuento">
            <?php Gral::_echoImp($importe_total_comprobante_con_descuento_esperado) ?>
        </div>
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-pagado">
        <?php if ($importe_en_orden_pago > 0) { ?>
            <?php Gral::_echoImp($importe_en_orden_pago) ?>
        <?php } else { ?>
            -
        <?php } ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe-pagado">
        <?php if ($importe_imputado > 0) { ?>
            <?php Gral::_echoImp($importe_imputado) ?>
        <?php } else { ?>
            -
        <?php } ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="importe-saldo">
        <input type="text" 
               id="txt_pde_comprobante_importe_saldo_<?php echo $arr_indice_combinado ?>" 
               name="txt_pde_comprobante_importe_saldo[<?php echo $arr_indice_combinado ?>]" 
               value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($importe_disponible_para_orden_pago)) ?>" 
               size="10" 
               class="textbox moneda txt_pde_comprobante_importe_saldo" 
               />
    </div>    
    <div class="importe-saldo">
        <?php if ($importe_disponible_para_orden_pago > 0) { ?>
            <?php Gral::_echoImp($importe_disponible_para_orden_pago) ?>
        <?php } else { ?>
            -
        <?php } ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="importe-saldo">
        <input type="text" 
               id="txt_pde_comprobante_porcentaje_imponible_decimal_<?php echo $arr_indice_combinado ?>" 
               name="txt_pde_comprobante_porcentaje_imponible_decimal[<?php echo $arr_indice_combinado ?>]" 
               value="<?php Gral::_echo($porcentaje_imponible_decimal) ?>" 
               size="10" 
               class="textbox" 
               style="display: none;"
               />
        <input type="text" 
               id="txt_pde_comprobante_importe_imponible_<?php echo $arr_indice_combinado ?>" 
               name="txt_pde_comprobante_importe_imponible[<?php echo $arr_indice_combinado ?>]" 
               value="<?php Gral::_echo($importe_imponible) ?>" 
               size="10" 
               class="textbox" 
               style="display: none;"
               />
    </div>    
    <div id="div_importe_imponible_<?php echo $arr_indice_combinado ?>" class="importe-imponible">
        <?php if ($importe_imponible_disponible_para_orden_pago > 0) { ?>
            <?php Gral::_echoImp($importe_imponible_disponible_para_orden_pago) ?>
        <?php } else { ?>
            -
        <?php } ?>
    </div>
</td>
