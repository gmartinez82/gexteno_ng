<table id='listado_gral_centro_costo' class='listado' border='0' align='center' pde_factura_id="<?php Gral::_echo($pde_factura->getId()); ?>">
    <tr>
        <td width='250' align='left' class='adm_tbl_encabezado'>
            Centro de costo
        </td>
        <td width='150' align='center' class='adm_tbl_encabezado'>
            Porcentaje Afectado
        </td>
        <td width='150' align='center' class='adm_tbl_encabezado'>
            Importe Afectado
        </td>
    </tr>
    
    <?php
    $importe_subtotal_factura = $pde_factura->getPdeFacturaSubtotal();
    $porcentaje_afectado_total = 0;
    $importe_afectado_total    = 0;
    foreach ($gral_centro_costos as $gral_centro_costo):
        $pde_factura_gral_centro_costo = $pde_factura->getPdeFacturaGralCentroCosto();
        
        $porcentaje_afectado = 0;
        $importe_afectado = 0;
        
        if($simular){
            $porcentaje_afectado = $txt_gral_centro_costo_porcentaje_afectados[$gral_centro_costo->getId()];
            //$porcentaje_afectado = number_format($porcentaje_afectado, 5);
            //$porcentaje_afectado = Gral::getImporteDesdePriceFormatToDB($porcentaje_afectado);

            $importe_afectado = $importe_subtotal_factura * ($porcentaje_afectado / 100);                        
        }else{

            $array = array(
                array('campo' => 'pde_factura_id', 'valor' => $pde_factura->getId()),
                array('campo' => 'gral_centro_costo_id', 'valor' => $gral_centro_costo->getId()),
            );
            $pde_factura_gral_centro_costo = PdeFacturaGralCentroCosto::getOxArray($array);
            if($pde_factura_gral_centro_costo){
                $porcentaje_afectado = ($pde_factura_gral_centro_costo) ? $pde_factura_gral_centro_costo->getPorcentajeAfectado() : 0;
                $importe_afectado    = ($pde_factura_gral_centro_costo) ? $pde_factura_gral_centro_costo->getImporteAfectado() : 0;   
            } 
        }

        $porcentaje_afectado_total += $porcentaje_afectado;
        $importe_afectado_total += $importe_afectado;
    ?>
    
    <tr id="tr_gral_centro_costo_uno_<?php Gral::_echo($gral_centro_costo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($gral_centro_costo->getId()) ?>">
        <td align='left' class='adm_tbl_lineas'>
            <div class="centro-costo">
                <?php Gral::_echo($gral_centro_costo->getDescripcion()) ?>
            </div>
        </td>
        <td align='center' class='adm_tbl_lineas <?php echo ($porcentaje_afectado > 0) ? 'sel' : '' ?>'>
            <div id="porcentaje_afectado_<?php Gral::_echo($gral_centro_costo->getId()); ?>" class="porcentaje-afectado">
                <input id="txt_gral_centro_costo_porcentaje_afectado_<?php Gral::_echo($gral_centro_costo->getId()); ?>" name="txt_gral_centro_costo_porcentaje_afectado[<?php Gral::_echo($gral_centro_costo->getId()); ?>]" type="text" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($porcentaje_afectado, 5)); ?>" size="10" class="textbox moneda-d5 txt_gral_centro_costo_porcentaje_afectado">
            </div>
        </td>
        <td align='center' class='adm_tbl_lineas <?php echo ($importe_afectado > 0) ? 'sel' : '' ?>'>
            <div id="importe_afectado_<?php Gral::_echo($gral_centro_costo->getId()); ?>" class="importe-afectado">
                <?php Gral::_echoImp($importe_afectado); ?>
            </div>
        </td>
    </tr>
    
    <?php
    endforeach;
    ?>
    <tr id="" class="uno-total listado_gral_centro_costo" >
        <td align='center' class='adm_tbl_encabezado'>
        </td>
        <td align='center' class='adm_tbl_encabezado'>
            <div id="porcentaje_afectado_total" class="porcentaje-afectado-total">
            <?php Gral::_echoFloat($porcentaje_afectado_total); ?>%
            </div>
        </td>
        <td align='center' class='adm_tbl_encabezado'>
            <div id="importe_afectado_total" class="importe-afectado-total">
                <?php Gral::_echoImp($importe_afectado_total); ?>
            </div>
        </td>
    </tr>
</table>