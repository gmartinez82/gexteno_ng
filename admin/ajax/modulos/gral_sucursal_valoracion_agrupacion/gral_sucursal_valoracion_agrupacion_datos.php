
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/gral_sucursal_valoracion_agrupacion.php' ?>

<?php if(count($gral_sucursal_valoracion_agrupacions) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_gral_sucursal_valoracion_agrupacion'>
    <thead>
    <tr>
	
	<td width='15' align='center' class='adm_tbl_encabezado'>
            &nbsp;
        </td>
			
	<td width='50' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Id') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='400' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Descripcion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='descripcion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='70' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=fecha&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Fecha') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='fecha'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='250' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=gral_sucursal_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('GralSucursal') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='gral_sucursal_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='80' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=valoracion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Valoracion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='valoracion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
    </tr>
    </thead>
  
    <tbody>
  <?php 
  foreach($gral_sucursal_valoracion_agrupacions as $gral_sucursal_valoracion_agrupacion){ 
  	$estado = ($gral_sucursal_valoracion_agrupacion->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

    <tr id="tr_gral_sucursal_valoracion_agrupacion_uno_<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>" class="uno tr_datos" identificador="<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>" hash="<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getHash()) ?>" >
  	<?php include "gral_sucursal_valoracion_agrupacion_uno.php" ?>
    </tr>
  
  
    <tr id='tr_eliminar_<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>" hash="<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getHash()) ?>" >
	<td colspan='7' align='center' class='adm_tbl_lineas'>
            
            <div id='div_eliminar_<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>'  class='div_eliminar warning'>
            
                <div class="eliminar-titulo">
                    <?php Lang::_lang('Confirma la Eliminacion') ?> 
                </div>

                <div class="eliminar-mensaje">
                    <?php Lang::_lang('Esta a punto de eliminar') ?> "<strong><?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getDescripcion()) ?></strong>".<br />
                    <?php Lang::_lang('Al eliminar el registro se eliminaran tambien todos los datos vinculados') ?>.<br />
                    <?php Lang::_lang('Una vez eliminados no podra recuperarlos') ?>.
                </div>

                <div class="eliminar-botonera">
                      <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                      <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>,0)'/>
                </div>
            </div>
            
        </td>
	<td align='center'></td>
    </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $gral_sucursal_valoracion_agrupacion->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
    <tr id='tr_mi_<?php Gral::_echo($gral_sucursal_valoracion_agrupacion->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='7' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $gral_sucursal_valoracion_agrupacion->getId()){ 
			include "gral_sucursal_valoracion_agrupacion_adm_masinfo.php";
		}
		?>
	</div>
			
	</td>
	<td align='center'></td>
    </tr>
  <?php } ?>
    </tbody>

    <tfoot>
  
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
    </tfoot>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


