<table border='0' align='center' class='listado' id='listado_adm_pde_cotizacion'>
    <tr>
        <td width='80' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Cod') ?>
        </td>
        
        <td width='130' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PrvProveedor') ?>
        </td>

        <td width='130' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Generado') ?>
        </td>

        <td width='80' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Vencimiento') ?>
        </td>

        <td width='50' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Cantidad') ?>
        </td>

        <td width='100' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Unidad') ?>
        </td>

        <td width='100' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Total') ?>
        </td>

        <td width='120' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('Estado Actual') ?>
        </td>

        <td width='100' align='center' class='adm_tbl_encabezado'>
          <?php Lang::_lang('PdeRecepcion') ?>
        </td>

        <td width="110" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
    </tr>
	<?php 
    foreach($pde_ocs as $pde_oc){
      $noleido = ($pde_oc->esPdeOcLeido()) ? '' : 'noleido';
      $destacado = ($pde_oc->esPdeOcDestacado()) ? 'destacado' : '';		
    ?>
    <tr id="div_pde_cotizacion_uno_<?php echo $pde_oc->getId() ?>" class="uno" oc_id="<?php echo $pde_oc->getId() ?>">
    	<?php 
		$ins_insumo = $pde_oc->getInsInsumo();
		$prv_proveedor = $pde_oc->getPrvProveedor();
		//$ins_marca = $pde_oc->getInsMarca();
		//$pde_recepcion_ultima = $ins_insumo->getUltimaPdeRecepcionXProveedor($prv_proveedor->getId(), $ins_marca->getId());
		
		include "pde_oc_uno.php" 
		?>
    </tr>

  <?php }?>
</table>