
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/us_usuario.php' ?>

<?php if(count($us_usuarios) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_us_usuario'>
    <thead>
    <tr>
	
	<td width='15' align='center' class='adm_tbl_encabezado'>
            &nbsp;
        </td>
			
	<td width='70' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Id') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='100' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=gral_lenguaje_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Lenguaje') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='gral_lenguaje_id'){ ?>
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
			
	<td width='100' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=usuario&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Usuario') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='usuario'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='100' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Codigo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='codigo'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=email&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Email') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='email'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
    </tr>
    </thead>
  
    <tbody>
  <?php 
  foreach($us_usuarios as $us_usuario){ 
  	$estado = ($us_usuario->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

    <tr id="tr_us_usuario_uno_<?php Gral::_echo($us_usuario->getId()) ?>" class="uno tr_datos" identificador="<?php Gral::_echo($us_usuario->getId()) ?>" hash="<?php Gral::_echo($us_usuario->getHash()) ?>" >
  	<?php include "us_usuario_uno.php" ?>
    </tr>
  
  
    <tr id='tr_eliminar_<?php Gral::_echo($us_usuario->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($us_usuario->getId()) ?>" hash="<?php Gral::_echo($us_usuario->getHash()) ?>" >
	<td colspan='8' align='center' class='adm_tbl_lineas'>
            
            <div id='div_eliminar_<?php Gral::_echo($us_usuario->getId()) ?>'  class='div_eliminar warning'>
            
                <div class="eliminar-titulo">
                    <?php Lang::_lang('Confirma la Eliminacion') ?> 
                </div>

                <div class="eliminar-mensaje">
                    <?php Lang::_lang('Esta a punto de eliminar') ?> "<strong><?php Gral::_echo($us_usuario->getDescripcion()) ?></strong>".<br />
                    <?php Lang::_lang('Al eliminar el registro se eliminaran tambien todos los datos vinculados') ?>.<br />
                    <?php Lang::_lang('Una vez eliminados no podra recuperarlos') ?>.
                </div>

                <div class="eliminar-botonera">
                      <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                      <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($us_usuario->getId()) ?>,0)'/>
                </div>
            </div>
            
        </td>
	<td align='center'></td>
    </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $us_usuario->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
    <tr id='tr_mi_<?php Gral::_echo($us_usuario->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='8' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $us_usuario->getId()){ 
			include "us_usuario_adm_masinfo.php";
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
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
    </tr>

    <tr>
	<td colspan='8' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
    </tr>
    </tfoot>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


