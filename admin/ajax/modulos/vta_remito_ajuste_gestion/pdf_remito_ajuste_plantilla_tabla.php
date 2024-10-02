<?php
include_once "_autoload.php";

$vta_remito_ajuste_id = $param["vta_remito_ajuste_id"];

$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);
$vta_remito_ajuste_vta_orden_ventas = $vta_remito_ajuste->getVtaRemitoAjusteVtaOrdenVentas(null, null, true);

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

<table cellpadding="3" class="tabla" id="listado_adm_vta_remito_ajuste_gestion" border="0" align="center">

        <tr>

            <td class="adm_tbl_encabezado_gris" width="25" align="center">
                #
            </td>
            
            <td class="adm_tbl_encabezado_gris" width="50" align="center">
                Cant
            </td>

            <th class="adm_tbl_encabezado_gris" width="50" align="center">
                Cod Int
            </th>
            
            <td class="adm_tbl_encabezado_gris" width="415" align="left">
                Descripcion
            </td>

        </tr>

        <?php
        foreach ($vta_remito_ajuste_vta_orden_ventas as $i => $vta_remito_ajuste_vta_orden_venta) {
            $css_bg = (($i % 2) == 0) ? 'impar' : 'par';
            
            $ins_insumo = $vta_remito_ajuste_vta_orden_venta->getInsInsumo();
            $vta_orden_venta = $vta_remito_ajuste_vta_orden_venta->getVtaOrdenVenta();

            ?>
            <tr id="tr_vta_remito_ajuste_gestion_uno_<?php echo $vta_remito_ajuste_vta_orden_venta->getId() ?>" class="uno" identificador="<?php echo $vta_remito_ajuste_vta_orden_venta->getId() ?>">

                <td class="adm_tbl_encabezado_gris <?php echo $css_bg ?>" align="center">
                    <label class="cont">
                        <?php Gral::_echo(++$cont) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="cantidad">
                        <?php Gral::_echoFloatDyn($vta_remito_ajuste_vta_orden_venta->getCantidad()) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas" align="center">
                    <label class="codigo-interno"><?php Gral::_echo($ins_insumo->getCodigoBarraInterno()) ?></label>
                </td>	
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="insumo">
                        <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
                    </label>
                </td>	
            </tr>

        <?php } ?>
</table>
