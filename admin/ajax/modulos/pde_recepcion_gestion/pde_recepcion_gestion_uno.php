<?php
$oc_importe_unidad = $pde_recepcion->getPdeOc()->getImporteUnidad();
$rcp_importe_unidad = $pde_recepcion->getImporteUnidad();

$oc_importe_css = "";
if ($oc_importe_unidad != $rcp_importe_unidad) {
    $oc_importe_css = "existe-variacion";
}
?>


<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_recepcion->getId() ?>" modulo="pde_recepcion">+</div>
</td>

<!--
<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="checkbox">
        <input type="checkbox" class="textbox chk_pde_recepcion" id="chk_pde_recepcion_<?php echo $pde_recepcion->getId() ?>" name="chk_pde_recepcion[<?php echo $pde_recepcion->getId() ?>]" value="<?php echo $pde_recepcion->getId() ?>" />
    </div>
</td>
-->

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="codigo">
        <?php Gral::_echo($pde_recepcion->getCodigo()) ?>
    </div>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($pde_recepcion->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="descripcion">
        <?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?>
    </div>
    <div class="codigo-interno">
        C.I.: <?php Gral::_echo($pde_recepcion->getInsInsumo()->getCodigoInterno()) ?>
    </div>
    <div class="comentario">
        <?php Gral::_echo($pde_recepcion->getPdeOc()->getPdeCentroPedido()->getDescripcion()) ?>
    </div>    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>

    <div class="prv_proveedor_id">	
        <?php Gral::_echo($pde_recepcion->getPrvProveedor()->getDescripcion()) ?>
    </div>

    <div class="nro-comprobante">
        <?php Gral::_echo($pde_recepcion->getNroComprobante()) ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="tipo-estado">
        <img src='imgs/pde_recepcion_tipo_estado/<?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="fecha_entrega">
        el <?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion->getFechaEntrega())) ?>
    </div>

    <div class="tipo-estado-facturacion" style="display: none;">
        <img src='imgs/pde_recepcion_tipo_estado_facturacion/<?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstadoFacturacion()->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pde_recepcion->getPdeRecepcionTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="cantidad">
        <?php Gral::_echo($pde_recepcion->getCantidad()) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="importe_rcp_unidad">
        <?php Gral::_echoImp($pde_recepcion->getImporteUnidad()) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="importe_rcp_total">
        <?php Gral::_echoImp($pde_recepcion->getImporteTotal()) ?>
    </div>
</td>	

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="importe_oc_unidad <?php echo $oc_importe_css ?>">
        <?php Gral::_echoImp($pde_recepcion->getPdeOc()->getImporteUnidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_DESTACADO')) { ?>
        <li class='adm_botones_accion destacado' title="<?php Lang::_lang(($pde_recepcion->esPdeRecepcionDestacado()) ? 'Destacado' : 'No Destacado') ?>">
            <img src='imgs/btn_destacado_<?php echo ($pde_recepcion->esPdeRecepcionDestacado()) ? '1' : '0' ?>.png' width='18' align='absmiddle' />
        </li>
        <?php } ?>
        
        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_FICHA')) { ?>
        <li class='adm_botones_accion ficha' title="<?php Lang::_lang('Ver Ficha de') ?> <?php Lang::_lang('PdeRecepcion') ?>">
            <img src='imgs/btn_ficha.png' width='13' align='absmiddle' />
        </li>
        <?php } ?>
        
        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_REFRESH')) { ?>
        <li class='adm_botones_accion refresh' title="<?php Lang::_lang('Actualizar') ?> <?php Lang::_lang('PdeRecepcion') ?>">
            <img src='imgs/btn_refresh.png' width='18' align='absmiddle' />
        </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_COMPROBANTE')) { ?>
        <li class='adm_botones_accion comprobante' title="<?php Lang::_lang('Comprobante de') ?> <?php Lang::_lang('PdeRecepcion') ?>">
            <a href="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/pde_recepcion_gestion/pdf_recepcion_comprobante.php?id=<?php echo $pde_recepcion->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='18' align='absmiddle' />
            </a>
        </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_recepcion_gestion/db_context_acciones.php?id=<?php Gral::_echo($pde_recepcion->getId()) ?>' modulo_metodo_init="setInitPdeRecepcions()">
            <img src='imgs/btn_ajustar.png' width='23' align='absmiddle' />    	
        </li>
        <?php } ?>

    </ul>
</td>


