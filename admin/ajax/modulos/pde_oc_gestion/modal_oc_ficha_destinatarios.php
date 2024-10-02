<table border="0" class="tabla-modal">
  <tr>
    <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Fecha') ?></td>
    <td class="adm_tbl_encabezado" width="180" align='center'><?php Lang::_lang('Usuario') ?></td>
    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang('Descripcion') ?></td>
    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Enviado') ?></td>
    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Creado Por') ?></td>
  </tr>
  <?php 
  $cont = 0;
  foreach($pde_oc_destinatarios as $pde_oc_destinatario){ 
      $us_usuario = $pde_oc_destinatario->getUsUsuario();
  ?>
  <tr>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_destinatario->getCreado())) ?> hs.
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
        <?php Gral::_echo($us_usuario->getDescripcion()) ?>
        <div class="email" style="color:#666;">
            <?php Gral::_echo($us_usuario->getEmail()) ?>            
        </div>
    </td>       
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
        <?php Gral::_echo($pde_oc_destinatario->getDescripcion()) ?>
    </td>    
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_<?php Gral::_echo($pde_oc_destinatario->getAvisoEmail()) ?>.gif" width="16" alt="actual" />
        
        <div class="modificado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_destinatario->getModificado())) ?> hs.
        </div>
    </td>    
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo($pde_oc_destinatario->getCreadoPorDescripcion()) ?>
    </td>    
  </tr>
  <?php } ?>
</table>
<br />
