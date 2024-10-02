<?php
$vta_comprobante_id = $vta_comprobante->getId();
$vta_comprobante_class = get_class($vta_comprobante);

$arr_indice_combinado = $vta_comprobante_class . '_' . $vta_comprobante_id;

//$importe_subtotal_comprobante = $vta_comprobante->getVtaFacturaSubtotal();
//$importe_iva_comprobante = $vta_comprobante->getVtaFacturaIva();
//$importe_tributo_comprobante = $vta_comprobante->getVtaFacturaTributo();
//$importe_total_comprobante = $vta_comprobante->getImporteTotalComprobante();

$vta_comprobante_resumen = $vta_comprobante->getResumenComprobante();

$importe_subtotal_comprobante = $vta_comprobante_resumen->getImporteSubtotal();
$importe_iva_comprobante = $vta_comprobante_resumen->getImporteIva();
$importe_tributo_comprobante = $vta_comprobante_resumen->getImporteTributo();
$importe_total_comprobante = $vta_comprobante_resumen->getImporteTotal();

$total_importe_total_comprobante += $importe_total_comprobante;

$importe_notas_credito_vinculados = 0;
$importe_notas_credito_anulaciones_vinculados = 0;
$importe_recibos_vinculados = 0;

$vta_factura_vta_nota_creditos = array();
$vta_factura_vta_recibos = array();
$vta_ajuste_debe_vta_ajuste_habers = array();
$vta_ajuste_debe_vta_ajuste_habers_nc = array(); // AJTH que hacen de NC
$vta_ajuste_debe_vta_ajuste_habers_rbo = array(); // AJTH que hacen de RBO

$es_comprobante_comisionable = false;
$importe_base_comisionable = 0;

//
// -----------------------------------------------------------------------------
// Facturas
// -----------------------------------------------------------------------------
if ($vta_comprobante_class == VtaFactura::GEN_CLASE) {

    // -------------------------------------------------------------------------
    // NC vinculados a la Factura
    // -------------------------------------------------------------------------
    $vta_factura_vta_nota_creditos = $vta_comprobante->getVtaFacturaVtaNotaCreditos(null, null, true);
    foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
        $vta_nota_credito = $vta_factura_vta_nota_credito->getVtaNotaCredito();
        $vta_tipo_origen_nota_credito = $vta_nota_credito->getVtaTipoOrigenNotaCredito();

        $importe_notas_credito_vinculados += $vta_factura_vta_nota_credito->getImporteAfectado();

        // -------------------------------------------------------------------------
        // NC Anulaciones vinculados a la Factura
        // -------------------------------------------------------------------------
        if ($vta_tipo_origen_nota_credito->getCodigo() != VtaTipoOrigenNotaCredito::ORIGEN_DESCUENTO_FINANCIERO) {
            $importe_notas_credito_anulaciones_vinculados += $vta_factura_vta_nota_credito->getImporteAfectado();
        }
    }

    // -------------------------------------------------------------------------
    // Recibos vinculados a la Factura
    // -------------------------------------------------------------------------
    $vta_factura_vta_recibos = $vta_comprobante->getVtaFacturaVtaRecibos(null, null, true);
    foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
        $importe_recibos_vinculados += $vta_factura_vta_recibo->getImporteAfectado();
    }
    
    $total_importe_notas_credito_anulaciones += $importe_notas_credito_anulaciones_vinculados;

    // ------------------------------------------------------------------------------
    // determinacion de base comisionable
    // ------------------------------------------------------------------------------
    $vta_comprobante_tipo_estado = $vta_comprobante->getVtaComprobanteTipoEstado();
    if ($vta_comprobante_tipo_estado->getCodigo() == VtaFacturaTipoEstado::TIPO_SALDADO) { // reemplazar luego por un campo "comisionable"
        $importe_base_comisionable = $vta_comprobante->getImporteBaseComisionable($vta_factura_vta_nota_creditos);
        $es_comprobante_comisionable = true;
    }

}

// -----------------------------------------------------------------------------
// Ajustes Debe
// -----------------------------------------------------------------------------
if ($vta_comprobante_class == VtaAjusteDebe::GEN_CLASE) {

    // -------------------------------------------------------------------------
    // Ajustes Haber a al Ajuste Debe
    // -------------------------------------------------------------------------
    $vta_ajuste_debe_vta_ajuste_habers = $vta_comprobante->getVtaAjusteDebeVtaAjusteHabers(null, null, true);
    foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
        $vta_ajuste_haber = $vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber();
        $vta_tipo_origen_ajuste_haber = $vta_ajuste_haber->getVtaTipoOrigenAjusteHaber();

        // -------------------------------------------------------------------------
        // AJTH vinculados a la AJTD
        // -------------------------------------------------------------------------
        switch ($vta_tipo_origen_ajuste_haber->getCodigo()) {
            case VtaTipoOrigenAjusteHaber::ORIGEN_DESCUENTO_FINANCIERO:
                $vta_ajuste_debe_vta_ajuste_habers_nc[] = $vta_ajuste_debe_vta_ajuste_haber;
                $importe_notas_credito_vinculados += $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
                break;
            case VtaTipoOrigenAjusteHaber::ORIGEN_ANULACION_AJUSTE_DEBE:
                $vta_ajuste_debe_vta_ajuste_habers_nc[] = $vta_ajuste_debe_vta_ajuste_haber;

                $importe_notas_credito_vinculados += $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
            $importe_notas_credito_anulaciones_vinculados += $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
                break;
            case VtaTipoOrigenAjusteHaber::ORIGEN_ITEM:
                $vta_ajuste_debe_vta_ajuste_habers_rbo[] = $vta_ajuste_debe_vta_ajuste_haber;
                $importe_recibos_vinculados += $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
        }
    }

    $total_importe_notas_credito_anulaciones += $importe_notas_credito_anulaciones_vinculados;

    // ------------------------------------------------------------------------------
    // determinacion de base comisionable
    // ------------------------------------------------------------------------------
    $vta_comprobante_tipo_estado = $vta_comprobante->getVtaComprobanteTipoEstado();
    if ($vta_comprobante_tipo_estado->getCodigo() == VtaFacturaTipoEstado::TIPO_SALDADO) { // reemplazar luego por un campo "comisionable"
        $importe_base_comisionable = $vta_comprobante->getImporteBaseComisionable($vta_ajuste_debe_vta_ajuste_habers_nc);
        $es_comprobante_comisionable = true;
    }
    
}

// ------------------------------------------------------------------------------
// determinacion de porcentaje de comision
// ------------------------------------------------------------------------------
$vta_presupuesto = $vta_comprobante->getVtaPresupuesto();
if($vta_presupuesto){
    $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
    $porcentaje_comision = $ins_tipo_lista_precio->getPorcentajeComision();
}

// ------------------------------------------------------------------------------
// determinacion de personalizacion de porcentaje de comision
// ------------------------------------------------------------------------------
$porcentaje_personalizado = false;
$porcentaje_comision_a_aplicar = $porcentaje_comision;
$porcentaje_comision_observaciones = '';
$arr_porcentaje_comision_personalizado = VtaComision::getPorcentajeComisionParaComprobante($vta_preventista, $vta_comprador, $vta_vendedor, $vta_comprobante);
if ($arr_porcentaje_comision_personalizado) {
    $porcentaje_personalizado = true;
    $porcentaje_comision_a_aplicar = $arr_porcentaje_comision_personalizado['porcentaje_comision'];
    $porcentaje_comision_observaciones = $arr_porcentaje_comision_personalizado['observacion'];
}
?>

<td align='center' class='adm_tbl_lineas'>
    <?php echo ++$cont; ?>
</td>

<td align='center' class='adm_tbl_lineas'>
    <?php if ($es_comprobante_comisionable || true) { ?>
        <div class="check_vta_comprobante chk_vta_comprobante_<?php echo $vta_comprobante_id ?>">
            <input type="checkbox" name="chk_vta_comprobante[<?php echo $arr_indice_combinado ?>]" id="chk_vta_comprobante_<?php echo $arr_indice_combinado ?>" class="chk_vta_comprobante" value="<?php echo $vta_comprobante_id ?>">
        </div>
        <input type="hidden" name="hdn_vta_comprobante_id[<?php echo $arr_indice_combinado ?>]" id="hdn_vta_comprobante_id_<?php echo $arr_indice_combinado ?>" size="2" class="textbox hdn_vta_comprobante_id" value="<?php echo $vta_comprobante_id ?>">
        <input type="hidden" name="hdn_vta_comprobante_class[<?php echo $arr_indice_combinado ?>]" id="hdn_vta_comprobante_class_<?php echo $arr_indice_combinado ?>" size="7" class="textbox hdn_vta_comprobante_class" value="<?php echo $vta_comprobante_class ?>">
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas'>
    <?php if ($es_comprobante_comisionable) { ?>
        <?php echo ++$cont_comisionable; ?>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas'>
    <div class="vta-comprobante-numero">
        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>

        <?php if ($vta_comprobante_class == 'VtaFactura') { ?>
            <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $vta_comprobante->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='14' border='0' title="Ver Factura" />
            </a>
        <?php } ?>

        <?php if ($vta_comprobante_class == 'VtaAjusteDebe') { ?>
            <a href="ajax/modulos/vta_ajuste_debe_gestion/pdf_ajuste_debe.php?vta_ajuste_debe_id=<?php echo $vta_comprobante->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='14' border='0' title="Ver Ajuste" />
            </a>
        <?php } ?>
    </div>
    <div class="vta-comprobante-fecha-emision">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_comprobante->getFechaEmision())) ?>
    </div>
    <div class="vta-comprobante-tipo-estado-id">	
        <img src="imgs/vta_comprobante_tipo_estado/<?php Gral::_echo($vta_comprobante->getVtaComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
        <?php Gral::_echo($vta_comprobante->getVtaComprobanteTipoEstado()->getDescripcion()) ?>
    </div>        
</td>

<td align='left' class='adm_tbl_lineas'>
    <div class="persona-descripcion">
        <?php Gral::_echo($vta_comprobante->getPersonaDescripcion()) ?>
    </div>
    <div class="actividad">
        - <?php Gral::_echo($vta_comprobante->getGralActividad()->getDescripcion()) ?>
    </div>
    <div class="escenario">
        - <?php Gral::_echo($vta_comprobante->getGralEscenario()->getDescripcion()) ?>
    </div>
    <div class="tipo-lista-precio">
        <?php Gral::_echo($vta_comprobante->getVtaPresupuesto()->getInsTipoListaPrecio()->getDescripcion()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas'>

    <div class="importe-subtotal-comprobante">
        <?php Gral::_echoImp($importe_subtotal_comprobante) ?>
    </div>

    <?php if ($importe_iva_comprobante > 0) { ?>
        <div class="importe-iva-comprobante">
            + IVA: <?php Gral::_echoImp($importe_iva_comprobante) ?>
        </div>
    <?php } ?>

    <?php if ($importe_tributo_comprobante > 0) { ?>
        <div class="importe-tributos-comprobante">
            + Trib: <?php Gral::_echoImp($importe_tributo_comprobante) ?>
        </div>
    <?php } ?>    

    <div class="importe-total-comprobante">
        <?php Gral::_echoImp($importe_total_comprobante) ?>
    </div>
    
</td>

<td align='right' class='adm_tbl_lineas'>
    <div class="importe-total-nc">
        <?php Gral::_echoImp($importe_notas_credito_vinculados) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) { ?>
            <div class="vta-comprobante-vinculado" title="<?php Gral::_echo($vta_factura_vta_nota_credito->getVtaNotaCredito()->getVtaTipoOrigenNotaCredito()->getDescripcion()) ?>">
                <?php Gral::_echo($vta_factura_vta_nota_credito->getVtaNotaCredito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_factura_vta_nota_credito->getVtaNotaCredito()->getNumeroNotaCreditoCompleto()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_ajuste_debe_vta_ajuste_habers_nc as $vta_ajuste_debe_vta_ajuste_haber) { ?>
            <div class="vta-comprobante-vinculado" title="<?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getVtaTipoOrigenAjusteHaber()->getDescripcion()) ?>">
                <?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getNumeroAjusteHaberCompleto()) ?>
                (<?php Gral::_echoImp($vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>

</td>

<td align='right' class='adm_tbl_lineas'>
    <div class="importe-total-recibo">
        <?php Gral::_echoImp($importe_recibos_vinculados) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_factura_vta_recibo->getVtaRecibo()->getCodigo()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_ajuste_debe_vta_ajuste_habers_rbo as $vta_ajuste_debe_vta_ajuste_haber) { ?>
            <div class="vta-comprobante-vinculado" title="<?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getVtaTipoOrigenAjusteHaber()->getDescripcion()) ?>">
                <?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getNumeroAjusteHaberCompleto()) ?>
                (<?php Gral::_echoImp($vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>    
</td>

<td align='right' class='adm_tbl_lineas'>
    <?php if ($es_comprobante_comisionable) { ?>
    <div class="importe-base-comisionable">
        <?php Gral::_echoImp($importe_base_comisionable) ?>
    </div>
    <div class="hdn-importe-base-comisionable">
        <input type="text" 
               id="hdn_importe_base_comisionable_<?php echo $arr_indice_combinado ?>" 
               name="hdn_importe_base_comisionable[<?php echo $arr_indice_combinado ?>]" 
               value="<?php Gral::_echo($importe_base_comisionable) ?>" 
               size="10" 
               class="textbox hdn_importe_base_comisionable" 
               />
    </div>    
        <?php
    }
    else {
        ?>
        -
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas'>

    <div class="div-porcentaje-comision <?php echo ($porcentaje_personalizado) ? 'porcentaje-personalizado' : '' ?>" title="<?php Gral::_echo($porcentaje_comision_observaciones) ?>">
        <?php if ($porcentaje_comision != $porcentaje_comision_a_aplicar) { ?>
            <div class="porcentaje-comision-tachado"><?php echo $porcentaje_comision ?>%</div>    
        <?php } ?>

        <div class="porcentaje-comision">
            <input type="text" 
                   id="txt_porcentaje_comision_<?php echo $arr_indice_combinado ?>" 
                   name="txt_porcentaje_comision[<?php echo $arr_indice_combinado ?>]" 
                   value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($porcentaje_comision_a_aplicar)) ?>" 
                   size="3" 
                   class="textbox moneda txt_porcentaje_comision" 
                   />
        </div>
        <div class="porcentaje-comision-label"><?php echo $porcentaje_comision_a_aplicar ?>%</div>    
    </div>    

</td>

<td align='right' class='adm_tbl_lineas'>
    <?php if ($es_comprobante_comisionable) { ?>
    <div class="importe-comision">
        <?php Gral::_echoImp($importe_comision) ?>
    </div>
    <div class="hdn-importe-comision">
        <input type="text" 
               id="hdn_importe_comision_<?php echo $arr_indice_combinado ?>" 
               name="hdn_importe_comision[<?php echo $arr_indice_combinado ?>]" 
               value="<?php Gral::_echo($importe_comision) ?>" 
               size="10" 
               class="textbox hdn_importe_comision" 
               />
    </div>    
        <?php
    }
    else {
        ?>
        -
    <?php } ?>
</td>
