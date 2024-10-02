
<?php include Gral::getPathAbs().'admin/parciales/buscadores/activos/gral_condicion_iva_pde_tipo_recibo.php' ?>

<?php if(count($gral_condicion_iva_pde_tipo_recibos) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_gral_condicion_iva_pde_tipo_recibo'>

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
            <a class='ordenar' href="?ord=1&c=gral_condicion_iva_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('GralCondicionIva') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='gral_condicion_iva_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pde_tipo_recibo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdeTipoRecibo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pde_tipo_recibo_id'){ ?>
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
  foreach($gral_condicion_iva_pde_tipo_recibos as $gral_condicion_iva_pde_tipo_recibo){ 
  	$estado = ($gral_condicion_iva_pde_tipo_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

  <tr id="tr_gral_condicion_iva_pde_tipo_recibo_uno_<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>">
  	<?php include "gral_condicion_iva_pde_tipo_recibo_uno.php" ?>
  </tr>
  
  
  <tr id='tr_eliminar_<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>" >
	<td colspan='7' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
	  <br />
	  <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
		<input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>,0)'/>
	  </div>
	</div>		</td>
	<td align='center'></td>
  </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $gral_condicion_iva_pde_tipo_recibo->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
  <tr id='tr_mi_<?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='7' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $gral_condicion_iva_pde_tipo_recibo->getId()){ 
			include "gral_condicion_iva_pde_tipo_recibo_adm_masinfo.php";
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


