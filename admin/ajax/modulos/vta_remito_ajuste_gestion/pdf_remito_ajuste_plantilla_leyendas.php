<?php
include_once "_autoload.php";

$vta_remito_ajuste_id = $param["vta_remito_ajuste_id"];
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

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

<table cellpadding="3" class="tabla" id="listado_adm_vta_remito_ajuste_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
            Comentarios generales
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li>Remitido desde <?php Gral::_echo($vta_remito_ajuste->getPanPanol()->getDescripcion()) ?> </li>
                <li>Remitido por <?php Gral::_echo($vta_remito_ajuste->getCreadoPorDescripcion()) ?> </li>
            </ul>
        </td>
    </tr>    
    
</table>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
            Devoluciones
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li>La devolución de la presente compra, podrá realizarse dentro de las 48 hs a partir de la generación del presente documento, en día y horario comercial hábil y exclusivamente en el establecimiento de Papelera K&A donde realizó la compra. Siempre y cuando el producto se encuentre en idénticas condiciones en la que fue entregado.</li>
            </ul>
        </td>
    </tr>    
</table>

<?php if(trim($vta_remito_ajuste->getNotaPublica()) != ""){ ?>
<table cellpadding="3" class="tabla" id="listado_adm_vta_remito_ajuste_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
            Comentarios para el cliente
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li><?php Gral::_echo($vta_remito_ajuste->getNotaPublica()) ?></li>
            </ul>
        </td>
    </tr>    
</table>
<?php } ?>
