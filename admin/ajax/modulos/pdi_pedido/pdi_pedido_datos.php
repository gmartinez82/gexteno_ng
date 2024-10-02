
<?php include Gral::getPathAbs().'admin/parciales/buscadores/activos/pdi_pedido.php' ?>

<?php if(count($pdi_pedidos) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_pdi_pedido'>

  <tr>
	<td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>
			
	<td width='70' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Id') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Descripcion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='descripcion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=ins_insumo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('InsInsumo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='ins_insumo_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pdi_tipo_origen_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdiTipoOrigen') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pdi_tipo_origen_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pdi_urgencia_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdiUrgencia') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pdi_urgencia_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pan_panol_origen&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PanPanolOrigen') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pan_panol_origen'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pan_panol_destino&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PanPanolDestino') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pan_panol_destino'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='70' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Codigo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='codigo'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pdi_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdiTipoEstado') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pdi_tipo_estado_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pdi_pedido_agrupacion_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdiPedidoAgrupacion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pdi_pedido_agrupacion_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pdi_pedido_agrupacion_item_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdiPedidoAgrupacionItem') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pdi_pedido_agrupacion_item_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='50' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=venta_perdida&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Venta Perdida') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='venta_perdida'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
  </tr>
  
  
  <?php 
  foreach($pdi_pedidos as $pdi_pedido){ 
  	$estado = ($pdi_pedido->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

  <tr id="tr_pdi_pedido_uno_<?php Gral::_echo($pdi_pedido->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pdi_pedido->getId()) ?>">
  	<?php include "pdi_pedido_uno.php" ?>
  </tr>
  
  
  <tr id='tr_eliminar_<?php Gral::_echo($pdi_pedido->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($pdi_pedido->getId()) ?>" >
	<td colspan='14' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($pdi_pedido->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
	  <br />
	  <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
		<input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($pdi_pedido->getId()) ?>,0)'/>
	  </div>
	</div>		</td>
	<td align='center'></td>
  </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $pdi_pedido->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
  <tr id='tr_mi_<?php Gral::_echo($pdi_pedido->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='14' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $pdi_pedido->getId()){ 
			include "pdi_pedido_adm_masinfo.php";
		}
		?>
	</div>
			
	</td>
	<td align='center'></td>
  </tr>


  <?php } ?>
  
  <tr>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
  </tr>

  <tr>
	<td colspan='14' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
	</tr>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


