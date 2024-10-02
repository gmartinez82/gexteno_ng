<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="120" align="center"><?php Lang::_lang("Fecha") ?></td>
        <td class="adm_tbl_encabezado" width="100" align="center"><?php Lang::_lang("Tipo Resolucion") ?></td>
        <td class="adm_tbl_encabezado" width="50" align="center"><?php Lang::_lang("Dias") ?></td>
        <td class="adm_tbl_encabezado" width="80" align="center"><?php Lang::_lang("Fecha Inicio") ?></td>
        <td class="adm_tbl_encabezado" width="80" align="center"><?php Lang::_lang("Fecha Fin") ?></td>
        <td class="adm_tbl_encabezado" width="80" align="center"><?php Lang::_lang("Fecha Reintegro") ?></td>
        <td class="adm_tbl_encabezado" width="300" align="center"><?php Lang::_lang("Nota Publica") ?></td>
        <td class="adm_tbl_encabezado" width="300" align="center"><?php Lang::_lang("Nota Interna") ?></td>
        <td class="adm_tbl_encabezado" width="120" align="center"><?php Lang::_lang("Usuario") ?></td>
        <td class="adm_tbl_encabezado" width="40" align="center"><?php Lang::_lang("PDF") ?></td>
    </tr>
        
    <?php
    $dias_suspension = "";
    $fecha_suspension_inicio    = "";
    $fecha_suspension_fin       = "";
    $fecha_suspension_reintegro = "";
    
    foreach($os_resolucions as $os_resolucion):
        
        $os_tipo_resolucion = $os_resolucion->getOsTipoResolucion();
    
        if($os_tipo_resolucion->getCodigo() === OsTipoResolucion::TIPO_SUSPENSION)
        {
            $dias_suspension = $os_resolucion->getOsResolucionSuspension()->getDiasSuspension();
            $fecha_suspension_inicio    = Date::getFechaVisual( $os_resolucion->getOsResolucionSuspension()->getFechaInicio() );
            $fecha_suspension_fin       = Date::getFechaVisual( $os_resolucion->getOsResolucionSuspension()->getFechaFin() );
            $fecha_suspension_reintegro = Date::getFechaVisual( $os_resolucion->getOsResolucionSuspension()->getFechaReintegro() );
        }else{
            $dias_suspension = '-';
            $fecha_suspension_inicio    = '-';
            $fecha_suspension_fin       = '-';
            $fecha_suspension_reintegro = '-';
        }
            
    ?>
    
    <tr>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion->getCreado())); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo($os_resolucion->getOsTipoResolucion()->getDescripcion()); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo($dias_suspension); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo($fecha_suspension_inicio); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo($fecha_suspension_fin); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo($fecha_suspension_reintegro); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
            <?php Gral::_echo($os_resolucion->getNotaPublica()); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
            <?php Gral::_echo($os_resolucion->getObservacion()); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <?php Gral::_echo($os_resolucion->getCreadoPorDescripcion()); ?>
        </td>
        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
            <a href="<?php Gral::getPath('path_http') ?>ajax/modulos/os_orden_servicio_gestion/pdf_orden_servicio_resolucion.php?os_id=<?php echo $os_orden_servicio->getId() ?>&resolucion_id=<?php echo $os_resolucion->getId() ?>" target="_blank">
	        <img src="imgs/btn_pdf.png" width='20' border='0' />
            </a>
        </td>
    </tr>
    
    <?php
    endforeach;
    ?>
</table>
<br />
