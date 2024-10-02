<table border="0" class="tabla-modal">
      <tr>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Fecha') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Imp Unit') ?></td>
        <td class="adm_tbl_encabezado" width="600" align='center'><?php Lang::_lang('Proveedor') ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Usuario') ?></td>
      </tr>
      <?php 
      $cont = 0;
      foreach($ins_insumo_costos as $ins_insumo_costo){ 
        $cont++;

      ?>
      <tr class="uno" identificador="<?php Gral::_echo($ins_insumo_costo->getId()) ?>" >

        <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo($ins_insumo_costo->getId()) ?>">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getCreado())) ?>
        </td>

        <td class="adm_tbl_lineas" align="right">
            <strong><?php Gral::_echoImp($ins_insumo_costo->getCosto()) ?></strong>
        </td>

        <td class="adm_tbl_lineas" align="left">
            <div class="proveedor">
            <?php Gral::_echo($ins_insumo_costo->getPrvProveedor()->getDescripcion()) ?>
            </div>
            <div class="comentario">
            <?php Gral::_echo($ins_insumo_costo->getObservacion()) ?>
            </div>
        </td>

        <td class="adm_tbl_lineas" align="center">
            <?php Gral::_echo($ins_insumo_costo->getCreadoPorDescripcion()) ?>
        </td>
      </tr>
      <?php } ?>
    </table>