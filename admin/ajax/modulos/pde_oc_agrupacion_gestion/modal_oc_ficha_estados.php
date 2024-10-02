<table border="0" class="tabla-modal">
  <tr>
    <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Actual') ?></td>
    <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Fecha') ?></td>
    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado') ?></td>
    <td class="adm_tbl_encabezado" width="250" align='center'><?php Lang::_lang('Comentarios') ?></td>
    <td class="adm_tbl_encabezado" width="180" align='center'>&nbsp;</td>
  </tr>
  <?php 
  $cont = 0;
  foreach($pde_oc_agrupacion_estados as $pde_oc_agrupacion_estado){ 
  $cont++;
  $strong = ($cont==1) ? 'strong' : '';
  ?>
  <tr>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php if($pde_oc_agrupacion_estado->getActual()){ ?> 
        <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_1.gif" width="16" alt="actual">
        <?php } ?>
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_estado->getCreado())) ?> hs.
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
        &nbsp;&nbsp;
        <img src='imgs/pde_oc_agrupacion_estado/<?php Gral::_echo($pde_oc_agrupacion_estado->getPdeOcAgrupacionTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
        &nbsp;
        <?php Gral::_echo($pde_oc_agrupacion_estado->getPdeOcAgrupacionTipoEstado()->getDescripcion()) ?>
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>">
        <span title="<?php Gral::_echo($pde_oc_agrupacion_estado->getObservacion()) ?>">
            <?php Gral::_echo(substr($pde_oc_agrupacion_estado->getObservacion(), 0, 150)) ?> ...
        </span>
    </td>
    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
        <?php if($pde_oc_agrupacion_estado->getCreadoPor() != 'null'){ ?>
        <img src='imgs/icn_usuario.gif' width="15" align='absmiddle' alt="usuario" title="<?php Gral::_echo($pde_oc_agrupacion_estado->getCreadoPorDescripcion()) ?>" /> <?php Gral::_echo($pde_oc_agrupacion_estado->getCreadoPorDescripcion()) ?>
        <?php } ?>
    </td>
  </tr>
  <?php } ?>
</table>
<br />
