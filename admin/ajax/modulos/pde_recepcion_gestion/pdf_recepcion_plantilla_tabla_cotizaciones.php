<?php
include_once "_autoload.php";

$pde_oc_id = $param["pde_oc_id"];

$pde_oc = PdeOc::getOxId($pde_oc_id);
$pde_pedido = $pde_oc->getPdePedido();
$pde_cotizacions = $pde_pedido->getPdeCotizacions();
?>
<style>
    .tabla{
        font-size: 8px;
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
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }  
</style>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th width="20"></th>
        <th align="left" colspan="4">
            <label style="font-weight:bold;">Otras Cotizaciones</label>
        </th>
    </tr>
    <tr>

        <th class="adm_tbl_encabezado_gris" width="25" align="center">
            #
        </th>

        <th class="adm_tbl_encabezado_gris" width="30" align="center">
            Cant
        </th>

        <th class="adm_tbl_encabezado_gris" width="259" align="center">
            Proveedor
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Entrega
        </th>
        
        <th class="adm_tbl_encabezado_gris" width="80" align="center">
            Imp Unitario
        </th>

        <th class="adm_tbl_encabezado_gris" width="85" align="center">
            Imp Total
        </th>
    </tr>


    <?php
    foreach ($pde_cotizacions as $i => $pde_cotizacion) {
        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $pde_cotizacion->getInsInsumo();
        $prv_proveedor = $pde_cotizacion->getPrvProveedor();
        $cantidad = $pde_cotizacion->getCantidad();
        $importe_unitario = $pde_cotizacion->getImporteUnidad();
        $importe_total = $pde_cotizacion->getImporteTotal();
        $fecha_entrega = $pde_cotizacion->getFechaEntrega();
        ?>
        <tr id="tr_pde_oc_gestion_uno_<?php echo $pde_oc->getId() ?>" class="uno" identificador="<?php echo $pde_oc->getId() ?>">

            <td class="adm_tbl_encabezado_gris" align="center">
                <label class="cantidad">
                    <?php Gral::_echo(++$cont) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad">
                    <?php Gral::_echo($cantidad) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="insumo">
                    <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="fecha-entrega">
                    <?php Gral::_echo(Gral::getFechaToWEB($fecha_entrega)) ?>
                </label>
            </td>	
            
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-unitario">
                    <?php Gral::_echoImp($importe_unitario) ?>
                </label>
            </td>	
            
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-total">
                    <?php Gral::_echoImp($importe_total) ?>
                </label>
            </td>	

        </tr>
    <?php } ?>
</table>
