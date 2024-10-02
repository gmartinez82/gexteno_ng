<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="id">
        <?php Gral::_echo($pde_cotizacion->getId()) ?>
    </div>	
    <div class="creado" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_cotizacion->getCreado())) ?>
    </div>	
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="proveedor-descripcion">
        <?php Gral::_echo($pde_cotizacion->getPrvProveedor()->getDescripcion()) ?>

        <?php if (count($pde_cotizacion->getPrvProveedor()->getPdeOcReclamos()) > 0) { ?>
            <img id="btn_reclamos" src='imgs/btn_reclamar.png' width='15' align='absmiddle' />    
        <?php } ?>

    </div>
    <div class="proveedor-codigo-cotizacion">Nro Cot: <?php Gral::_echo($pde_cotizacion->getCodigo()) ?></div>

    <?php if ($pde_cotizacion->getObservacion() != '') { ?>
        <div class="comentario" title="<?php Gral::_echo($pde_cotizacion->getObservacion()) ?>">
            <img src="imgs/btn_ficha.png" width="12" alt="observaciones" align="absmiddle">
            <?php Gral::_echo(substr($pde_cotizacion->getObservacion(), 0, 25)) ?> ...
        </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php Gral::_echo(Gral::getFechaToWeb($pde_cotizacion->getFechaEntrega())) ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php Gral::_echo($pde_cotizacion->getCantidad()) ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="importe-unidad">Uni: <?php Gral::_echoImp($pde_cotizacion->getImporteUnidad()) ?></div>
    <div class="importe-total">Tot: <?php Gral::_echoImp($pde_cotizacion->getImporteTotal()) ?></div>
</td>


<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if ($pde_recepcion_ultima) { ?>

        <div class="importe-ult-compra"><?php Gral::_echoImp($pde_recepcion_ultima->getImporteUnidad()) ?> x U</div>
        <div class="fecha-ult-compra" title="<?php Gral::_echo($pde_recepcion_ultima->getCodigo()) ?> / <?php Gral::_echo($pde_recepcion_ultima->getPdeOc()->getCodigo()) ?>"><?php Gral::_echo(Gral::getFechaToWeb($pde_recepcion_ultima->getCreado())) ?></div>

        <?php if ($pde_recepcion_ultima->getPdeOc()) { ?>
            <div class="oc-codigo"><?php Gral::_echo($pde_recepcion_ultima->getPdeOc()->getCodigo()) ?></div>
            <div class="oc-tipo-estado">
                <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_recepcion_ultima->getPdeOc()->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
                <?php Gral::_echo($pde_recepcion_ultima->getPdeOc()->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion()) ?>
            </div>
        <?php } ?>

    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <?php if ($pde_cotizacion->getPdeOc()) { ?>
        <div class="oc-codigo"><?php Gral::_echo($pde_cotizacion->getPdeOc()->getCodigo()) ?></div>
        <div class="oc-tipo-estado">
            <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_cotizacion->getPdeOc()->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getCodigo()) ?>.png' width='12' align='absmiddle' />
            <?php Gral::_echo($pde_cotizacion->getPdeOc()->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion()) ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <ul>

        <?php if (UsCredencial::getEsAcreditado('PDE_PEDIDO_GESTION_COTIZACION_EDITAR')) { ?>
            <?php if (!$pde_cotizacion->getPdeOc()) { ?>
                <li class='adm_botones_accion editar-cotizacion' title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCotizacion') ?>">
                    <img src='imgs/btn_modi.gif' width='18' align='absmiddle' />
                </li>
            <?php } ?>
        <?php } ?>

        <li class='adm_botones_accion destacado' title="<?php Lang::_lang(($pde_cotizacion->esPdeCotizacionDestacado()) ? 'Destacado' : 'No Destacado') ?>">
            <img src='imgs/btn_destacado_<?php echo ($pde_cotizacion->esPdeCotizacionDestacado()) ? '1' : '0' ?>.png' width='18' align='absmiddle' />
        </li>

        <li class='adm_botones_accion refresh' title="<?php Lang::_lang('Actualizar') ?> <?php Lang::_lang('PdeCotizacion') ?>">
            <img src='imgs/btn_refresh.png' width='16' align='absmiddle' />
        </li>

        <?php if (UsCredencial::getEsAcreditado('PDE_PEDIDO_GESTION_COTIZACION_GENERAR_OC')) { ?>
            <?php if (!$pde_cotizacion->getPdeOc()) { ?>
                <li class='adm_botones_accion generar-oc' title="<?php Lang::_lang('Generar') ?> <?php Lang::_lang('PdeOc') ?>">
                    <img src='imgs/btn_comprar.png' width='14' align='absmiddle' />
                </li>
            <?php } else { ?>
                <li class='adm_botones_accion' title="<?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('generada') ?>: <?php echo $pde_cotizacion->getPdeOc()->getCodigo() ?> ">
                    <img src='imgs/btn_comprar_0.png' width='14' align='absmiddle' />
                </li>
            <?php } ?>
        <?php } ?>
    </ul>		
</td>
