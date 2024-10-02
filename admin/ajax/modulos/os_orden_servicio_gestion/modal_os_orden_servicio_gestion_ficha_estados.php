<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Actual') ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Fecha') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado') ?></td>
        <td class="adm_tbl_encabezado" width="350" align="center"><?php Lang::_lang("Observaciones") ?></td>
        <td class="adm_tbl_encabezado" width="180" align='center'><?php Lang::_lang('Usuario') ?></td>
    </tr>
    
    <?php
    $cont = 0;
    
    foreach($os_estados as $os_estado): 
        $cont++;
        $strong = ($cont == 1) ? "strong" : "";
        
        $tipo_estado        = $os_estado->getOsTipoEstado()->getDescripcion();
        $tipo_estado_codigo = $os_estado->getOsTipoEstado()->getCodigo();
        
        if($tipo_estado_codigo == OsTipoEstado::TIPO_RESUELTO){
          $resolucion  = $os_orden_servicio->getOsResolucion()->getOsTipoResolucion()->getDescripcion();
        }
        else{
           $resolucion = "";
        }
        
    ?>
    <tr>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php if($os_estado->getActual()){ ?> 
            <img src="<?php echo Gral::getPath("path_http") ?>admin/imgs/btn_estado_1.gif" width="16" alt="actual">
            <?php } ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($os_estado->getCreado())) ?> hs.
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
            <div class="os_estado">
                <img src="imgs/os_tipo_estado/<?php Gral::_echo($tipo_estado_codigo) ?>.png" width="10" align="absmiddle" />
                <?php Gral::_echo($tipo_estado) ?>
            </div>
            <?php if($tipo_estado_codigo == OsTipoEstado::TIPO_RESUELTO): ?>
            <div class="os_resolucion" >	
                <?php Gral::_echo($resolucion); ?>
            </div>
            <?php endif; ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
            <?php Gral::_echo($os_estado->getObservacion()) ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
          <?php if($os_estado->getCreadoPor() != "null"): ?>
              <?php Gral::_echo($os_estado->getCreadoPorDescripcion()) ?>
          <?php endif; ?>
        </td>
    </tr>
    
    <?php
    endforeach;
    ?>

</table>
<br />