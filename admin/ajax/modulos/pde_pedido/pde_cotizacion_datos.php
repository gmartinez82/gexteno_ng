<table border='0' align='left' class='listado' id='listado_adm_pde_cotizacion'>
    <tr>
        <td width='60' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Id') ?>
        </td>
        
        <td width='260' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PrvProveedor') ?>
        </td>

        <td width='70' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Entrega') ?>
        </td>

        <td width='50' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Cantidad') ?>
        </td>

        <td width='120' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Importe') ?>
        </td>


        <td width='110' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Ultima Recep') ?>
        </td>

        <td width='100' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PdeOc') ?>
        </td>

        <td width="110" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
    </tr>
	<?php 
    foreach($pde_cotizacions as $pde_cotizacion){
      $noleido = ($pde_cotizacion->esPdeCotizacionLeido()) ? '' : 'noleido';
      $destacado = ($pde_cotizacion->esPdeCotizacionDestacado()) ? 'destacado' : '';		
    ?>
    <tr id="div_pde_cotizacion_uno_<?php echo $pde_cotizacion->getId() ?>" class="uno" cotizacion_id="<?php echo $pde_cotizacion->getId() ?>" proveedor_id="<?php echo $pde_cotizacion->getPrvProveedor()->getId() ?>">
    	<?php 
		$ins_insumo = $pde_cotizacion->getInsInsumo();
		$prv_proveedor = $pde_cotizacion->getPrvProveedor();
		//$ins_marca = $pde_cotizacion->getInsMarca();
		$pde_recepcion_ultima = $ins_insumo->getUltimaPdeRecepcionXProveedor($prv_proveedor->getId());

		include "pde_cotizacion_uno.php" 
		?>
    </tr>

  <?php }?>
</table>