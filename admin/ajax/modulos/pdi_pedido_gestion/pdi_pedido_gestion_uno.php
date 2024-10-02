<?php
$gral_si_no = GralSiNo::getOxId($pdi_pedido->getVentaPerdida());
$venta_perdida = $gral_si_no->getDescripcion();

$pdi_tipo_origen = $pdi_pedido->getPdiTipoOrigen();
$ins_insumo = $pdi_pedido->getInsInsumo();
$ins_categoria = $ins_insumo->getInsCategoria();

$pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
$pdi_tipo_estado = $pdi_pedido->getPdiTipoEstado();

//$tal_insumo_solicitado = $pdi_pedido->getTalInsumoSolicitado();

$pdi_urgencia = $pdi_pedido->getPdiUrgencia();
?>

<td align='center' class=''>
    <input type="checkbox" id="chk_pdi_pedido_id_<?php Gral::_echo($pdi_pedido->getId()) ?>" name="chk_pdi_pedido_id[<?php Gral::_echo($pdi_pedido->getId()) ?>]" value="<?php Gral::_echo($pdi_pedido->getId()) ?>" class="chk_pdi_pedido_id" />   
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="marcas">
        <div class="urgencia">
            <?php Gral::_echo($pdi_urgencia->getDescripcion()) ?>        
        </div>
        <img src="imgs/icn_alerta_<?php Gral::_echo($pdi_urgencia->getCodigo()) ?>.png" alt="1" width="10" title="<?php Lang::_lang('Urgencia: ') ?><?php Gral::_echo($pdi_urgencia->getDescripcion()) ?>"><br />
    </div>
    <div class="codigo">
        <?php Gral::_echo($pdi_pedido->getCodigo()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>

    <div class="codigo-interno">
        CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>
    <div class="descripcion">
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
    </div>
    <div class="categoria">
        <?php Gral::_echo($ins_insumo->getInsCategoria()->getFamiliaDescripcion()) ?>
    </div>

    <div class="comentario">
        <img src='imgs/icn_<?php echo $pdi_tipo_origen->getCodigo() ?>.png' width='16' alt="<?php echo $pdi_tipo_origen->getCodigo() ?>" align='absmiddle' title="<?php Gral::_echo($pdi_pedido->getPdiOrigenTooltip()) ?>" />
        <?php Gral::_echo($pdi_pedido->getPdiOrigenDescripcion()) ?>
    </div>
    <div class="comentarios">
        <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?>
    </div>
    <div class="pdi_comentarios adm_botones_accion" style="float:right; margin-top:-45px;">
        <?php if ($cantidad_comentarios > 0): ?>
            <img src="imgs/icn_comentario3.png" alt="1" width="22" title="<?php Lang::_lang($cantidad_comentarios . ' Comentarios') ?>">            
        <?php endif; ?>
    </div>
</td>

<?php
// si el origen es AJUSTE
if ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_AJUSTE) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?><br />
            <?php foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
                <strong>
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br /> 
                </strong>
            <?php } ?>
        </div>
    </td>

    <?php
// si el origen es AJUSTE_PANOL
} elseif ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <strong>
                <?php Gral::_echo($pdi_estado_actual->getCantidad()) ?>
                <?php Gral::_echo($pdi_pedido->getInsInsumo()->getInsUnidadMedida()->getDescripcion()) ?> - 
                <?php if ($pdi_pedido->getInsStockMovimiento()) { ?>
                    <?php Gral::_echo($pdi_pedido->getInsStockMovimiento()->getInsStockTipoMovimiento()->getDescripcion()) ?> 
                <?php } ?>
            </strong>
        </div>
        <div class="comentario">
            <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?><br />

            <?php /* foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
              <strong>
              <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> -
              <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> -
              <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br />
              </strong>
              <?php } */ ?>
        </div>
    </td>

    <?php
// si el origen es NEUMATICO
} elseif ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_NEUMATICO) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?><br />
            <?php foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
                <strong>
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br /> 
                </strong>
            <?php } ?>
        </div>
    </td>

    <?php
// si el origen es ENTREGA_OPERARIO
} elseif ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_ENTREGA_OPERARIO) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <?php Gral::_echo($pdi_tipo_origen->getDescripcion()) ?> 
            <strong><?php Gral::_echo($pdi_pedido->getOpeOperario()->getDescripcion()) ?></strong>
            <br />
            Coche: 
            <strong><?php Gral::_echo(($tal_insumo_solicitado) ? $tal_insumo_solicitado->getTalTareaResuelta()->getTalTareaAsignada()->getTalOrdenTrabajo()->getVehCoche()->getDescripcion() : '') ?></strong>
            <br />
            Cantidad: 
            <strong><?php Gral::_echo(($tal_insumo_solicitado) ? $pdi_estado_actual->getCantidad() : '') ?></strong>
            <br />
            Ubicación: 
            <strong><?php Gral::_echo(($tal_insumo_solicitado) ? $tal_insumo_solicitado->getTalTareaResuelta()->getTalTareaBase()->getCodigo() : '') ?></strong>



            <?php foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
                <strong>
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br /> 
                </strong>
            <?php } ?>
        </div>
    </td>

    <?php
// si el origen es ENVIO
} elseif ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_ENVIO) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?><br />
            <?php foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
                <strong>
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br /> 
                </strong>
            <?php } ?>
        </div>
    </td>

    <?php
// si el origen es VENTA
} elseif ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_VENTA) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?><br />
            <?php foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
                <strong>
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br /> 
                </strong>
            <?php } ?>
        </div>
    </td>

    <?php
// si el origen es TRANSFORMACION
} elseif ($pdi_tipo_origen->getCodigo() == PdiTipoOrigen::TIPO_ORIGEN_TRANSFORMACION) {
    ?>
    <td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>' colspan='1'>
        <div class="comentario">
            <?php Gral::_echo($pdi_estado_actual->getObservacion()) ?><br />
            <?php foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) { ?>
                <strong>
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?> - 
                    <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?> <br /> 
                </strong>
            <?php } ?>
        </div>
    </td>

    <?php
} else {
    ?>

    <td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
        <div class="adm_tbl_bloque">
            <div class="uno">
                <div class="cantidad"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_SOLICITADO]['CANTIDAD']) ?></div>
                <div class="fecha"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_SOLICITADO]['FECHA']) ?></div>
            </div>
            <div class="uno">
                <div class="cantidad"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_ACEPTADO]['CANTIDAD']) ?></div>
                <div class="fecha"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_ACEPTADO]['FECHA']) ?></div>
            </div>
            <div class="uno">
                <div class="cantidad"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_DESPACHADO]['CANTIDAD']) ?></div>
                <div class="fecha"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_DESPACHADO]['FECHA']) ?></div>
            </div>
            <div class="uno">
                <div class="cantidad"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_RECIBIDO]['CANTIDAD']) ?></div>
                <div class="fecha"><?php Gral::_echo($arr_movimientos[PdiTipoEstado::TIPO_ESTADO_RECIBIDO]['FECHA']) ?></div>
            </div>
        </div>
    </td>

<?php } ?>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_tipo_estado->getCodigo()) ?>.png' width="10" align='absmiddle' />
    <?php Gral::_echo($pdi_tipo_estado->getDescripcion()) ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="pan-panols">
        <div class="pan-panol origen"><?php Gral::_echo(($pdi_pedido->getPanPanolOrigen() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolOrigen())->getDescripcion() : '') ?></div>
        a
        <div class="pan-panol destino"><?php Gral::_echo(($pdi_pedido->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolDestino())->getDescripcion() : '') ?></div>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <ul>
        <!--
        <li class='adm_botones_accion destacado' title="<?php Lang::_lang(($pdi_pedido->esPdiPedidoDestacado()) ? 'Destacado' : 'No Destacado') ?>">
            <img src='imgs/btn_destacado_<?php echo ($pdi_pedido->esPdiPedidoDestacado()) ? '1' : '0' ?>.png' width='18' align='absmiddle' />
        </li>
        -->
        <li class='adm_botones_accion pdi-ficha' title="<?php Lang::_lang('Ver Ficha de') ?> <?php Lang::_lang('PdiPedido') ?>">
            <img src='imgs/btn_ficha.png' width='14' align='absmiddle' />
        </li>
        <li class='adm_botones_accion refresh' title="<?php Lang::_lang('Actualizar') ?> <?php Lang::_lang('PdiPedido') ?>">
            <img src='imgs/btn_refresh.png' width='18' align='absmiddle' />
        </li>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pdi_pedido_gestion/db_context_acciones.php?id=<?php Gral::_echo($pdi_pedido->getId()) ?>' modulo_metodo_init="setInitPdiPedidos()">
            <img src='imgs/btn_ajustar.png' width='23' align='absmiddle' />
        </li>
    </ul>		
</td>
