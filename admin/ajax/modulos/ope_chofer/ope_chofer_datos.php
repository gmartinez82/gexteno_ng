
<?php include Gral::getPathAbs().'admin/parciales/buscadores/activos/ope_chofer.php' ?>

<?php if(count($ope_chofers) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_ope_chofer'>

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
			
	<td width='250' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Descripcion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='descripcion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
  </tr>
  
  
  <?php 
  foreach($ope_chofers as $ope_chofer){ 
  	$estado = ($ope_chofer->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

  <tr id="tr_ope_chofer_uno_<?php Gral::_echo($ope_chofer->getId()) ?>" class="uno" identificador="<?php Gral::_echo($ope_chofer->getId()) ?>">
  	<?php include "ope_chofer_uno.php" ?>
  </tr>
  
  
  <tr id='tr_eliminar_<?php Gral::_echo($ope_chofer->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($ope_chofer->getId()) ?>" >
	<td colspan='4' align='center' class='adm_tbl_lineas'>
            <div id='div_eliminar_<?php Gral::_echo($ope_chofer->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                <br />
                <div>
                      <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                      <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($ope_chofer->getId()) ?>,0)'/>
                </div>
            </div>		
        </td>
	<td align='center'></td>
  </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $ope_chofer->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
  <tr id='tr_mi_<?php Gral::_echo($ope_chofer->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='4' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $ope_chofer->getId()){ 
			include "ope_chofer_adm_masinfo.php";
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
  </tr>

  <tr>
	<td colspan='4' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
	</tr>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


