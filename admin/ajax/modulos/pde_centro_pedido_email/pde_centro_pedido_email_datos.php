
<?php include Gral::getPathAbs().'admin/parciales/buscadores/activos/pde_centro_pedido_email.php' ?>

<?php if(count($pde_centro_pedido_emails) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_pde_centro_pedido_email'>

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
                <?php Lang::_lang('Email') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='descripcion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=pde_centro_pedido_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('PdeCentroPedido') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='pde_centro_pedido_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
  </tr>
  
  
  <?php 
  foreach($pde_centro_pedido_emails as $pde_centro_pedido_email){ 
  	$estado = ($pde_centro_pedido_email->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

  <tr id="tr_pde_centro_pedido_email_uno_<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>">
  	<?php include "pde_centro_pedido_email_uno.php" ?>
  </tr>
  
  
  <tr id='tr_eliminar_<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>" >
	<td colspan='5' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
	  <br />
	  <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
		<input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>,0)'/>
	  </div>
	</div>		</td>
	<td align='center'></td>
  </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $pde_centro_pedido_email->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
  <tr id='tr_mi_<?php Gral::_echo($pde_centro_pedido_email->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='5' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $pde_centro_pedido_email->getId()){ 
			include "pde_centro_pedido_email_adm_masinfo.php";
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
  </tr>

  <tr>
	<td colspan='5' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
	</tr>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


