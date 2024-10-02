<!------------------------------------------------------------------------------
// Tabla Leyenda
------------------------------------------------------------------------------->
<div class="referencias">
    
    <table class="" cellpadding="4" align="center" style="font-size: 10px;">
        <tr>
            <?php 
            foreach ($arr_ventas_en_periodo['RESUMEN']['CLIENTE_TIPO_ESTADO_VENTA'] as $cli_cliente_tipo_estado_venta_codigo => $cantidad) {
                $cli_cliente_tipo_estado_venta = CliClienteTipoEstadoVenta::getOxCodigo($cli_cliente_tipo_estado_venta_codigo);
                ?>
                <td width="100" class="" align="center" style="background-color: <?php echo $cli_cliente_tipo_estado_venta->getColor() ?>; color: <?php echo $cli_cliente_tipo_estado_venta->getColorSecundario() ?>;" >
                    <div class="cli-cliente-tipo-estado-ventas-descripcion" style="font-size: 12px;"><?php Gral::_echo($cli_cliente_tipo_estado_venta->getDescripcionPublica()) ?></div>
                    <div class="cli-cliente-tipo-estado-ventas-leyenda" style="font-size: 10px;"><?php Gral::_echo($cli_cliente_tipo_estado_venta->getLeyenda()) ?></div>
                </td>
            <?php } ?>
        </tr>
        <tr>
            <?php 
            foreach ($arr_ventas_en_periodo['RESUMEN']['CLIENTE_TIPO_ESTADO_VENTA'] as $cli_cliente_tipo_estado_venta_codigo => $cantidad) { 
                $cli_cliente_tipo_estado_venta = CliClienteTipoEstadoVenta::getOxCodigo($cli_cliente_tipo_estado_venta_codigo);
                ?>
                <td class="" align="center" style="background-color: <?php echo $cli_cliente_tipo_estado_venta->getColor() ?>; color: <?php echo $cli_cliente_tipo_estado_venta->getColorSecundario() ?>;">
                    <div class="cli-cliente-tipo-estado-ventas-total" style="font-size: 24px; font-weight: bold;"><?php Gral::_echoInt($arr_ventas_en_periodo['RESUMEN']['CLIENTE_TIPO_ESTADO_VENTA'][$cli_cliente_tipo_estado_venta->getCodigo()]) ?></div>
                </td>
            <?php } ?>
        </tr>
    </table>
    
    <table class="" cellpadding="4" align="center" style="font-size: 10px;">
        <tr>
            <?php 
            foreach ($arr_ventas_en_periodo['RESUMEN']['CLIENTE_PERIODICIDAD_GESTION'] as $cli_cliente_periodicidad_gestion_codigo => $cantidad) { 
                if(trim($cli_cliente_periodicidad_gestion_codigo) != ""){
                    $cli_cliente_periodicidad_gestion = CliClientePeriodicidadGestion::getOxCodigo($cli_cliente_periodicidad_gestion_codigo);
                    ?>
                    <td width="100" class="" align="center" style="background-color: #013254; color: #ffffff;" >
                        <div class="cli-cliente-tipo-estado-ventas-descripcion" style="font-size: 12px;"><?php Gral::_echo($cli_cliente_periodicidad_gestion->getDescripcionPublica()) ?></div>
                    </td>
                <?php }else{ ?>
                    <td width="100" class="" align="center" style="background-color: #013254; color: #ffffff;" >
                        <div class="cli-cliente-tipo-estado-ventas-descripcion" style="font-size: 12px;">Sin Periodicidad</div>
                    </td>
                <?php } ?>
            <?php } ?>
        </tr>
        <tr>
            <?php 
            foreach ($arr_ventas_en_periodo['RESUMEN']['CLIENTE_PERIODICIDAD_GESTION'] as $cli_cliente_periodicidad_gestion_codigo => $cantidad) { 
                if(trim($cli_cliente_periodicidad_gestion_codigo) != ""){
                    $cli_cliente_periodicidad_gestion = CliClientePeriodicidadGestion::getOxCodigo($cli_cliente_periodicidad_gestion_codigo);
                    ?>
                    <td class="" align="center" style="background-color: <?php echo $cli_cliente_periodicidad_gestion->getColor() ?>; color: <?php echo $cli_cliente_periodicidad_gestion->getColorSecundario() ?>;">
                        <div class="cli-cliente-tipo-estado-ventas-total" style="font-size: 24px; font-weight: bold;"><?php Gral::_echoInt($arr_ventas_en_periodo['RESUMEN']['CLIENTE_PERIODICIDAD_GESTION'][$cli_cliente_periodicidad_gestion->getCodigo()]) ?></div>
                    </td>
                <?php }else{ ?>
                    <td class="" align="center" style="background-color: #ffffff; color: #000000;">
                        <div class="cli-cliente-tipo-estado-ventas-total" style="font-size: 24px; font-weight: bold;"><?php Gral::_echoInt($arr_ventas_en_periodo['RESUMEN']['CLIENTE_PERIODICIDAD_GESTION'][""]) ?></div>
                    </td>
                <?php } ?>
            <?php } ?>
        </tr>
    </table>
    
</div>

<br />
<br />
