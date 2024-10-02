<?php
include_once "_autoload.php";

$vta_recibo_id = $param["vta_recibo_id"];
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);

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

<?php if(trim($vta_recibo->getNotaPublica()) != ""){ ?>
<table cellpadding="3" class="tabla" id="listado_adm_vta_recibo_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="545" align="left">
            Comentarios para el cliente
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li><?php Gral::_echo($vta_recibo->getNotaPublica()) ?></li>
            </ul>
        </td>
    </tr>    
</table>
<?php } ?>

<?php if(trim($vta_recibo->getCodigoOpCliente()) != ""){ ?>
<table cellpadding="3" class="tabla" id="listado_adm_vta_recibo_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="545" align="left">
            Orden de Pago del Cliente
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li>Este recibo de cobro esta vinculado a la Orden de Pago del Cliente <?php Gral::_echo($vta_recibo->getCodigoOpCliente()) ?></li>
            </ul>
        </td>
    </tr>    
</table>
<?php } ?>
