<td align='center' class='adm_tbl_lineas tipo_<?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?> <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="pde_tipo_comprobante_min" title="ID: <?php Gral::_echo($pde_comprobante->getId()) ?>">	
        <?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?>
    </div>
    <?php if(trim($pde_comprobante->getNotaInterna())){ ?>
        <img src="imgs/icn_alerta.png" width="16" alt="icon-nota-interna" title="<?php Gral::_echoTxt($pde_comprobante->getNotaInterna()) ?>" />
    <?php } ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="prv_proveedor_id">	
        <?php Gral::_echo($pde_comprobante->getPrvProveedor()->getDescripcion()) ?>
    </div>
    <div class="fecha_emision">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getFechaEmision())) ?>
    </div>
    <div class="pde_numero_comprobante" title="<?php Gral::_echo($pde_comprobante->getCodigo()) ?>">	
        <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="importe">	
        <?php Gral::_echoImp($importe_total_comprobante) ?>
    </div>
    <div class="pde_comprobante_tipo_estado_id">
        <?php Gral::_echo($pde_comprobante->getTipoEstadoComprobante()) ?>
        <img src="imgs/pde_comprobante_tipo_estado/<?php Gral::_echo($pde_comprobante->getPdeComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
    </div>
    
    <?php if (is_array($arr_orden_pago_comprobante_activas['INTERMEDIO'])) { ?>
        <div class="comprobantes-vinculados">
            <?php foreach ($arr_orden_pago_comprobante_activas['INTERMEDIO'] as $arr_orden_pago_comprobante_activa) { ?>
                <div class="comprobante-vinculado">
                    <?php Gral::_echo($arr_orden_pago_comprobante_activa->getPdeOrdenPago()->getCodigo()) ?>
                    <br />
                    (<?php Gral::_echoImp($arr_orden_pago_comprobante_activa->getImporteAfectado()) ?>)
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($saldo_imputable > 0) { ?>
        <div class="importe_imputar">
            <?php Gral::_echoImp($saldo_imputable) ?>
        </div>
    <?php } ?>
    
    <?php if (is_array($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO'])) { ?>
        <div class="comprobantes-vinculados">
            <?php foreach ($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO'] as $arr_comprobante_vinculado_extremo) { ?>
                <div class="comprobante-vinculado">
                    <?php Gral::_echo($arr_comprobante_vinculado_extremo->getPdeComprobanteHaber()->getTipoComprobanteSiglas()) ?> -
                    <?php Gral::_echo($arr_comprobante_vinculado_extremo->getPdeComprobanteHaber()->getNumeroComprobanteCompleto()) ?>
                    <br />
                    (<?php Gral::_echoImp($arr_comprobante_vinculado_extremo->getImporteAfectado()) ?>)
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>' clase="<?php echo get_class($pde_comprobante); ?>">
    <ul class="adm_botones_acciones">
        <?php if (UsCredencial::getEsAcreditado('PDE_COMPROBANTE_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion pde_comprobante_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='13' border='0' />
            </li>
        <?php } ?>
        
        <?php if (UsCredencial::getEsAcreditado('PDE_COMPROBANTE_GESTION_ACCION_IMPUTAR')) { ?>
            <?php if ($pde_comprobante->getPdeComprobanteTipoEstado()->getImputable() == 1) { ?>
                <li class='adm_botones_accion imputar_comprobante' title='<?php Lang::_lang('Imputar?') ?>'>
                    <img src='imgs/icon_cadena.png' width='15' border='0' />
                </li>
            <?php } ?>
        <?php } ?>
                
        <?php if (UsCredencial::getEsAcreditado('PDE_COMPROBANTE_GESTION_ACCION_DESVINCULAR')) { ?>
            <?php if (is_array($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO']) && count($arr_comprobantes_vinculados_por_conciliacion['INTERMEDIO']) > 0) { ?>
                <li class='adm_botones_accion pde_comprobante_gestion_desvincular' title='<?php Lang::_lang('Desvincular') ?>'>
                    <img src='imgs/icon_cadena_desvincular.png' width='15' border='0' />
                </li>
            <?php } ?>
        <?php } ?>
                
                
    </ul>
</td>



