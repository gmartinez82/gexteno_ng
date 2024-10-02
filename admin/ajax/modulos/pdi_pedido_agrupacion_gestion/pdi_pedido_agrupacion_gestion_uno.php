<?php
$pdi_pedido_agrupacion_items = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionItems();
$pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidos();
$pdi_pedido_agrupacion_tipo_estado = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado();

$pan_panol_origen = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
$pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();

$cantidad_solicitada = count($pdi_pedido_agrupacion->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_SOLICITADO));
$cantidad_aceptada = count($pdi_pedido_agrupacion->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_ACEPTADO));
$cantidad_despachada = count($pdi_pedido_agrupacion->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_DESPACHADO));
$cantidad_recibida = count($pdi_pedido_agrupacion->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_RECIBIDO));
$cantidad_rechazada = count($pdi_pedido_agrupacion->getPdiPedidosXTipoEstado(PdiTipoEstado::TIPO_ESTADO_RECHAZADO));

$cantidad_solicitada = ($cantidad_solicitada == 0) ? '-' : $cantidad_solicitada;
$cantidad_aceptada = ($cantidad_aceptada == 0) ? '-' : $cantidad_aceptada;
$cantidad_despachada = ($cantidad_despachada == 0) ? '-' : $cantidad_despachada;
$cantidad_recibida = ($cantidad_recibida == 0) ? '-' : $cantidad_recibida;
$cantidad_rechazada = ($cantidad_rechazada == 0) ? '-' : $cantidad_rechazada;

$total_cantidad_solicitada += $cantidad_solicitada;
$total_cantidad_aceptada += $cantidad_aceptada;
$total_cantidad_despachada += $cantidad_despachada;
$total_cantidad_recibida += $cantidad_recibida;
$total_cantidad_rechazada += $cantidad_rechazada;
?>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="codigo" title="<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>">
        <?php Gral::_echo($pdi_pedido_agrupacion->getCodigo()) ?>
    </div>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaToWeb($pdi_pedido_agrupacion->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($pdi_pedido_agrupacion->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="panol">

        <strong><?php Gral::_echo($pan_panol_origen->getDescripcion()); ?></strong>
        solicita a
        <strong><?php Gral::_echo($pan_panol_destino->getDescripcion()); ?></strong>

    </div>

    <div class="observaciones">
        <?php foreach($pdi_pedido_agrupacion->getPdiPedidoAgrupacionEstados() as $pdi_pedido_agrupacion_estado){ ?>
        <div class="observacion" title="<?php Gral::_echo($pdi_pedido_agrupacion_estado->getCreadoPorDescripcion()) ?>" >
            <label class="label">- <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_estado->getCreado())) ?>, <?php Gral::_echo($pdi_pedido_agrupacion_estado->getCreadoPorDescripcion()) ?>:</label> <?php Gral::_echo($pdi_pedido_agrupacion_estado->getObservacion()) ?>
        </div>
        <?php } ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($pdi_pedido_agrupacion->getPdiPedidoAgrupacionEnviados() as $pdi_pedido_agrupacion_enviado) { ?>
            <?php if ($pdi_pedido_agrupacion_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $pdi_pedido_agrupacion_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($pdi_pedido_agrupacion_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $pdi_pedido_agrupacion_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>    

    <?php if (count($pdi_pedido_agrupacion_items) > 0) { ?>

        <div class="insumos-en-item-temporal">
            <?php
            foreach ($pdi_pedido_agrupacion_items as $pdi_pedido_agrupacion_item) {
                $cantidad = $pdi_pedido_agrupacion_item->getCantidad();
                $pedido_descripcion_corta = substr($pdi_pedido_agrupacion_item->getInsInsumo()->getDescripcion(), 0, 30);
                $pedido_descripcion = $cantidad.' '.$pdi_pedido_agrupacion_item->getInsInsumo()->getDescripcion().' (Temporal)';                
                ?>
                <label class="insumo" title="<?php Gral::_echo($pedido_descripcion) ?>">
                    <label class="cantidad"><?php Gral::_echoInt($cantidad) ?></label>
                    <?php Gral::_echo($pedido_descripcion_corta) ?>
                </label>
                <?php
            }
            ?>
        </div>

    <?php } else { ?>

        <div class="insumos-en-pedido">
            <?php
            foreach ($pdi_pedidos as $pdi_pedido) {
                $pdi_pedido_tipo_estado = $pdi_pedido->getPdiTipoEstado();
                $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
                
                $cantidad = $pdi_estado_actual->getCantidad();
                $pedido_descripcion_corta = substr($pdi_pedido->getInsInsumo()->getDescripcion(), 0, 30);
                $pedido_descripcion = $cantidad.' '.$pdi_pedido->getInsInsumo()->getDescripcion().' ('.$pdi_pedido_tipo_estado->getDescripcion().')';
                ?>
                <label class="insumo" title="<?php Gral::_echo($pedido_descripcion) ?>">
                    <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_pedido_tipo_estado->getCodigo()) ?>.png' width='8' align='absmiddle' title="<?php Gral::_echo($pdi_pedido_tipo_estado->getDescripcion()) ?>" />
                    <label class="cantidad"><?php Gral::_echoInt($cantidad) ?></label>
                    <?php Gral::_echo($pedido_descripcion_corta) ?>
                </label>
                <?php
            }
            ?>
        </div>

    <?php } ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <img src='imgs/pdi_pedido_agrupacion_estado/<?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
    <?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getDescripcion()) ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if (count($pdi_pedidos) > 0) { ?>
        <div class="cantidad-items">
            <?php Gral::_echo($cantidad_solicitada); ?>
        </div>
    <?php } elseif (count($pdi_pedido_agrupacion_items) > 0) { ?>
        <div class="cantidad-items-temporales">
            <?php Gral::_echo(count($pdi_pedido_agrupacion_items)) ?> 
            <div class="label">Items</div>
        </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if (count($pdi_pedidos) > 0) { ?>
        <div class="cantidad-items">
            <?php Gral::_echo($cantidad_aceptada); ?>
        </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if (count($pdi_pedidos) > 0) { ?>
        <div class="cantidad-items">
            <?php Gral::_echo($cantidad_despachada); ?>
        </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if (count($pdi_pedidos) > 0) { ?>
        <div class="cantidad-items">
            <?php Gral::_echo($cantidad_recibida); ?>
        </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if (count($pdi_pedidos) > 0) { ?>
        <div class="cantidad-items">
            <?php Gral::_echo($cantidad_rechazada); ?>
        </div>
    <?php } ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <ul class="adm_botones_acciones">
        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ficha' title="<?php Lang::_lang('Ver Ficha de') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?>">
                <img src='imgs/btn_ficha.png' width='13' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_REFRESH')) { ?>
            <li class='adm_botones_accion refresh' title="<?php Lang::_lang('Actualizar') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?>">
                <img src='imgs/btn_refresh.png' width='18' align='absmiddle' />
            </li>
        <?php } ?>

        <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_APROBADO) { ?>
            <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                <li class='adm_botones_accion pdi-pedido-agrupacion-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' align='absmiddle' border='0' title="Enviar Email" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (!$pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getTerminal()) { ?>
            <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_COMPROBANTE')) { ?>
                <li class='adm_botones_accion comprobante' title="<?php Lang::_lang('Comprobante de') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?>">
                    <a href="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/pdi_pedido_agrupacion_gestion/pdf_pdi_pedido_agrupacion_gestion_comprobante.php?pdi_pedido_agrupacion_id=<?php echo $pdi_pedido_agrupacion->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='20' align='absmiddle' />
                    </a>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pdi_pedido_agrupacion_gestion/db_context_acciones.php?id=<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>' modulo_metodo_init="setInitPdiPedidoAgrupacions()">
                <img src='imgs/btn_ajustar.png' width='23' align='absmiddle' />    	
            </li>
        <?php } ?>
    </ul>		
</td>
