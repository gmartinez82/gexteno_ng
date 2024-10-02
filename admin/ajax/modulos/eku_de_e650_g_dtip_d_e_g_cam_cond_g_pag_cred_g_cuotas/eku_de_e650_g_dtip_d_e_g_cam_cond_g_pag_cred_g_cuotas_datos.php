
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.php' ?>

<?php if(count($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotass) > 0){ ?>

<table border='0' align='center' class='listado' id='listado_adm_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas'>
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
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Descripcion') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='descripcion'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='120' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=eku_de_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('EkuDe') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='eku_de_id'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=eku_e653_cmonecuo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('eku_e653_cmonecuo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='eku_e653_cmonecuo'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=eku_e654_ddmonecuo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('eku_e654_ddmonecuo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='eku_e654_ddmonecuo'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=eku_e651_dmoncuota&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('eku_e651_dmoncuota') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='eku_e651_dmoncuota'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='200' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=eku_e652_dvenccuo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('eku_e652_dvenccuo') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='eku_e652_dvenccuo'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
			
	<td width='160' align='center' class='adm_tbl_encabezado'>
            <a class='ordenar' href="?ord=1&c=creado&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Creado') ?>
                    
                <?php if($criterio->getOrdenDato('campo')=='creado'){ ?>
                <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                <?php } ?>
            </a>
	</td>
	
	<td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
    </tr>
    </thead>
  
    <tbody>
  <?php 
  foreach($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotass as $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){ 
  	$estado = ($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEstado()) ? 'habilitado' : 'deshabilitado';
  ?>

    <tr id="tr_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_uno_<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>" class="uno tr_datos" identificador="<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>" hash="<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash()) ?>" >
  	<?php include "eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_uno.php" ?>
    </tr>
  
  
    <tr id='tr_eliminar_<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>" hash="<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash()) ?>" >
	<td colspan='10' align='center' class='adm_tbl_lineas'>
            
            <div id='div_eliminar_<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>'  class='div_eliminar warning'>
            
                <div class="eliminar-titulo">
                    <?php Lang::_lang('Confirma la Eliminacion') ?> 
                </div>

                <div class="eliminar-mensaje">
                    <?php Lang::_lang('Esta a punto de eliminar') ?> "<strong><?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getDescripcion()) ?></strong>".<br />
                    <?php Lang::_lang('Al eliminar el registro se eliminaran tambien todos los datos vinculados') ?>.<br />
                    <?php Lang::_lang('Una vez eliminados no podra recuperarlos') ?>.
                </div>

                <div class="eliminar-botonera">
                      <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                      <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>,0)'/>
                </div>
            </div>
            
        </td>
	<td align='center'></td>
    </tr>
  

<?php
// auto hash de mas info de acuerdo al id recibido por url
$id = Gral::getVars(2, 'id');
$mi_display = "style='display:none;'";
if(trim($id) == $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()){ 
	$mi_display = '';
	$mi_hash = "location.hash = 'mi_".$id."';"; 
}
?>
    <tr id='tr_mi_<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
	<td colspan='10' align='center' class='adm_tbl_lineas'>
	
	
	<div class="masinfo">
		<?php 
		if(trim($id) == $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()){ 
			include "eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_adm_masinfo.php";
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
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
	<td align='center' class="adm_tbl_pie" >&nbsp;</td>
    </tr>

    <tr>
	<td colspan='10' align='center'><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php';?></td>
    </tr>
    </tfoot>
</table>

<?php }else{ ?>

<div class="mensaje-sin-resultado">
	<div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
	<div class="paginador-oculto"><?php include Gral::getPathAbs().'admin/parciales/paginador_adm.php' ?></div>
</div>
    
<?php } ?>


