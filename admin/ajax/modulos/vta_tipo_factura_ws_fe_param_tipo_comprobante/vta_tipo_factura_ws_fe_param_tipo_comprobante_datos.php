
<?php include Gral::getPathAbs().'admin/parciales/buscadores/activos/vta_tipo_factura_ws_fe_param_tipo_comprobante.php' ?>

<?php if(count($vta_tipo_factura_ws_fe_param_tipo_comprobantes) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_vta_tipo_factura_ws_fe_param_tipo_comprobante'>

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
			
	<td width='160' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Descripcion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='descripcion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=vta_tipo_factura_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('VtaTipoFactura') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='vta_tipo_factura_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=ws_fe_param_tipo_comprobante_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('WsFeParamTipoComprobante') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='ws_fe_param_tipo_comprobante_id'){ ?>
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
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
  </tr>
  
  
  <?php 
  foreach($vta_tipo_factura_ws_fe_param_tipo_comprobantes as $vta_tipo_factura_ws_fe_param_tipo_comprobante){ 
  	$estado = ($vta_tipo_factura_ws_fe_param_tipo_comprobante->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

  <tr id="tr_vta_tipo_factura_ws_fe_param_tipo_comprobante_uno_<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>">
  	<?php include "vta_tipo_factura_ws_fe_param_tipo_comprobante_uno.php" ?>
  </tr>
  
  
  <tr id='tr_eliminar_<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>" >
	<td colspan='7' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
	  <br />
	  <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
		<input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>,0)'/>
	  </div>
	</div>		</td>
	<td align='center'></td>
  </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
  <tr id='tr_mi_<?php Gral::_echo($vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='7' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $vta_tipo_factura_ws_fe_param_tipo_comprobante->getId()){ 
			include "vta_tipo_factura_ws_fe_param_tipo_comprobante_adm_masinfo.php";
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
  </tr>

  <tr>
	<td colspan='7' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
	</tr>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


