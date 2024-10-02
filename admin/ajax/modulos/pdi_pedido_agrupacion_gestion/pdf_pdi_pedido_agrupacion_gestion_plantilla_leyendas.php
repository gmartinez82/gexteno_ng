<?php
include_once "_autoload.php";

$pdi_pedido_agrupacion_id = $param["pdi_pedido_agrupacion_id"];
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
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
    .adm_tbl_encabezado_gris_claro{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#eeeeee;
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

<br />
<br />
<br />
<br />

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="500" align="left">
            Comentarios adicionales
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <?php if (trim($pdi_pedido_agrupacion->getObservacion()) != "") { ?>
                    <li><?php Gral::_echo($pdi_pedido_agrupacion->getObservacion()) ?></li>
                <?php } ?>
            </ul>
        </td>
    </tr>    
</table>
