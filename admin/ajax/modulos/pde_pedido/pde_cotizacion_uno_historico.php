<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="id">
        <?php Gral::_echo($pde_cotizacion->getId()) ?>
    </div>	
    <div class="creado" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_cotizacion->getCreado())) ?>
    </div>	
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="centro-pedido">Se cotizó a <strong><?php Gral::_echo($pde_cotizacion->getPdePedido()->getPdeCentroPedido()->getEmpresa()) ?></strong></div>

    <div class="proveedor-descripcion"><?php Gral::_echo($pde_cotizacion->getPrvProveedor()->getDescripcion()) ?></div>
    <div class="proveedor-codigo-cotizacion">Cod Prv: <?php Gral::_echo($pde_cotizacion->getCodigo()) ?></div>

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
    <?php Gral::_echo(($pde_cotizacion->getPdePedido()) ? $pde_cotizacion->getPdePedido()->getCodigo() : '-') ?>
</td>
