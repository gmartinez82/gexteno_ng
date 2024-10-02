<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<label title="<?php Gral::_echo($pde_oc->getId()) ?>"><?php Gral::_echo($pde_oc->getCodigo()) ?></label>		
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="proveedor-descripcion"><?php Gral::_echo($pde_oc->getPrvProveedor()->getDescripcion()) ?></div>
    <div class="proveedor-codigo-cotizacion">Cod Prv: <strong><?php Gral::_echo($pde_oc->getPdeCotizacion()->getCodigo()) ?></strong></div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> hs.
    
    <?php if($pde_oc->getPdeOcEstadoActual()->getObservacion() != ''){ ?>
    <div class="comentario" title="<?php Gral::_echo($pde_oc->getPdeOcEstadoActual()->getObservacion()) ?>">
    	<img src="imgs/btn_ficha.png" width="12" alt="observaciones" align="absmiddle">
		<?php Gral::_echo(substr($pde_oc->getPdeOcEstadoActual()->getObservacion(), 0, 25)) ?> ...
    </div>
    <?php } ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<?php Gral::_echo($pde_oc->getCantidad()) ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<strong><?php Gral::_echoImp($pde_oc->getImporteUnidad()) ?></strong>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<strong><?php Gral::_echoImp($pde_oc->getImporteTotal()) ?></strong>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<?php Gral::_echo($pde_oc->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion()) ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
	<?php Gral::_echo(($pde_oc->getPdeRecepcion()) ? $pde_oc->getPdeRecepcion()->getCodigo() : '-') ?>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
  <ul>
    
  </ul>		
</td>
