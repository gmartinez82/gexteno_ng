<div class="historico-comentario"><strong>Información de Referencia</strong>: A continuación se visualizan otras cotizaciones formalizadas por distintos proveedores a distintos centros de pedido sobre el mismo insumo.<br /> Se muestran siempre los últimos movimientos ordenados de forma descendente.</div>

<table border='0' align='left' class='listado' id='listado_adm_pde_cotizacion'>
    <tr>
        <td width='60' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Id') ?>
        </td>
        
        <td width='260' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PrvProveedor') ?>
        </td>

        <td width='80' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Entrega') ?>
        </td>

        <td width='50' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Cantidad') ?>
        </td>

        <td width='120' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Importe') ?>
        </td>

        <td width='100' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PdeOc') ?>
        </td>

        <td width="110" align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PdePedido') ?>        
        </td>
    </tr>
	<?php 
    foreach($pde_cotizacions as $pde_cotizacion){
      $noleido = ($pde_cotizacion->esPdeCotizacionLeido()) ? '' : 'noleido';
      $destacado = ($pde_cotizacion->esPdeCotizacionDestacado()) ? 'destacado' : '';		
    ?>
    <tr id="div_pde_cotizacion_uno_<?php echo $pde_cotizacion->getId() ?>" class="uno" cotizacion_id="<?php echo $pde_cotizacion->getId() ?>">
    	<?php 
		include "pde_cotizacion_uno_historico.php" 
		?>
    </tr>

  <?php }?>
</table>