<table border="0" class="tabla-modal">
  <tr>
    <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Codigo') ?></td>
    <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Fecha') ?></td>
    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Vencimiento') ?></td>
    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado Actual') ?></td>
    <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Cant') ?></td>
    <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Comentarios') ?></td>
    <td class="adm_tbl_encabezado" width="150" align='center'>&nbsp;</td>
  </tr>
  <?php 
  $cont = 0;
  foreach($pde_ocs as $pde_oc){ 
  $cont++;
  $strong = ($cont==1) ? 'strong' : '';
  ?>
  <tr>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo($pde_oc->getCodigo()) ?>
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> hs.
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?> hs.
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
        &nbsp;&nbsp;
        <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
        &nbsp;
        <?php Gral::_echo($pde_oc->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion()) ?>
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo($pde_oc->getCantidad()) ?>
    </td>    
    <td class="adm_tbl_lineas <?php echo $strong ?>">
        <span title="<?php Gral::_echo($pde_oc->getObservacion()) ?>">
            <?php Gral::_echo(substr($pde_oc->getObservacion(), 0, 150)) ?> ...
        </span>
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php if($pde_oc->getCreadoPor() != 'null'){ ?>
        <img src='imgs/icn_usuario.gif' width="15" align='absmiddle' alt="usuario" title="<?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>" /> <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>
        <?php } ?>
    </td>
  </tr>
  <?php } ?>
</table>
<br />
