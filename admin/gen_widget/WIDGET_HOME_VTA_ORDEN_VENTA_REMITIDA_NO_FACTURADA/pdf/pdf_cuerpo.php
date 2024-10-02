<?php
include_once "_autoload.php";

$vta_orden_ventas = $param["vta_orden_ventas"];
?>
<style>
    .tabla{
        font-size: 7px;
    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        border: #000 solid 1px;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#d0d0d0;
        border: #000 solid 1px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        height:20px;
        padding:5px;
    }

    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border: #000 solid 1px;
        border-bottom:#CCCCCC solid 1px;
    }

    .adm_tbl_lineas_par{
        background-color:#ffffff;
    }    
    .adm_tbl_lineas_impar{
        background-color:#f4f4f4;
    }  
</style>

<!------------------------------------------------------------------------------
// Tabla Resumen
------------------------------------------------------------------------------->
<table cellpadding="3" class="tabla" border="0" align="center">
    <tr>
        <td class="adm_tbl_encabezado_gris" align="center" width="30">#</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="60">Fecha OV</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="60">Codigo OV</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="60">Deposito</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="60">Remito</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="110">Cliente</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="60">Cod. Interno</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="200">Producto</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="40">Cant</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="50">Remision</td>
        <td class="adm_tbl_encabezado_gris" align="center" width="50">Facturacion</td>
    </tr>
    
    <?php
    $cont = 0;
    foreach ($vta_orden_ventas as $vta_orden_venta) {
        $cont++;
        $css_bg = (($cont % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $vta_remito = $vta_orden_venta->getVtaRemito();
        $vta_remito_ajuste = $vta_orden_venta->getVtaRemitoAjuste();
        
        $cantidad_remitida = $vta_orden_venta->getCantidadEnRemito();
        $cantidad_facturada = $vta_orden_venta->getCantidadEnFactura();
        $importe_ov = $vta_orden_venta->getImporteTotal();
        
        $ins_insumo = $vta_orden_venta->getInsInsumo();
        
        $importe_ov_total+= $importe_ov;
    ?>
    <tr>
        <td class="adm_tbl_encabezado_gris" align="center"><div class="contador"><?php Gral::_echoInt($cont) ?></div></td>
        
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="vta-remito-fecha"><?php Gral::_echo(Gral::getFechaToWEB($vta_orden_venta->getCreado())) ?></div></td>

        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="vta-orden-venta-codigo"><?php Gral::_echo($vta_orden_venta->getCodigo()) ?></div></td>

        <?php if($vta_remito){ ?>
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="pan-panol-descripcion"><?php Gral::_echo($vta_remito->getCodigo()) ?></div>              </td>
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="pan-panol-descripcion"><?php Gral::_echo($vta_remito->getPanPanol()->getDescripcion()) ?></div>              </td>
        <?php } ?>

        <?php if($vta_remito_ajuste){ ?>
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="pan-panol-descripcion"><?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?></div>              </td>
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="pan-panol-descripcion"><?php Gral::_echo($vta_remito_ajuste->getPanPanol()->getDescripcion()) ?></div>              </td>
        <?php } ?>

        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left"><div class="cli-cliente-descripcion"><?php Gral::_echo(substr($vta_presupuesto->getCliCliente()->getDescripcion(), 0, 20)) ?></div></td>
        
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="ins-insumo-codigo-interno"><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></div>              </td>
        
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left"><div class="vta-orden-venta-descripcion"><?php Gral::_echo(substr($vta_orden_venta->getDescripcion(), 0, 50)) ?></div></td>

        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="vta-orden-venta-cantidad"><?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?></div></td>

        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="vta-orden-venta-cantidad-remitida"><?php Gral::_echoFloatDyn($cantidad_remitida) ?></div></td>

        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><div class="vta-orden-venta-cantidad-facturada"><?php Gral::_echoFloatDyn($cantidad_facturada) ?></div></td>
    </tr>
    <?php } ?>
</table>
