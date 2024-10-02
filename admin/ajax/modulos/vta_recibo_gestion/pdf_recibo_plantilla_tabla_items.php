<?php
include_once "_autoload.php";

//$vta_recibo_id = Gral::getVars(Gral::VARS_GET, 'vta_recibo_id', 0);
$vta_recibo_id = $param["vta_recibo_id"];

$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
//$vta_recibo_vta_factura_vta_orden_ventas = $vta_recibo->getVtaReciboVtaFacturaVtaOrdenVentas();
$vta_recibo_items = $vta_recibo->getVtaReciboItems();

//Gral::prr($vta_recibo_vta_factura_vta_orden_ventas);
//Gral::prr($vta_recibo_items);

?>
<style>
    .listado{
        font-size: 8px;
    }
    .adm_tbl_orden {text-decoration: none; color:#FFFFFF;}
    .adm_tbl_orden:link {	text-decoration: none;	color:#FFFFFF;}
    .adm_tbl_orden:visited {	text-decoration: none;	color:#FFFFFF;}
    .adm_tbl_orden:hover {text-decoration: none;	color:#CCCCCC;}

    .adm_tbl_titulo{
        text-align: left;
        color: #000;
        font-weight:bold;
        font-size: 10px;
        line-height: 22px;
    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        line-height: 18px;
    }
    .adm_tbl_encabezado a{
        color:#FFFFFF;
        cursor:pointer;
    }
    .adm_tbl_encabezado img{
        float:right;
    }
    .ver_buscador img{
        float:none;
        cursor:pointer;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#CCCCCC;
        line-height: 18px;
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
        border-bottom:#CCCCCC solid 1px;
        line-height: 18px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

<div class="adm_tbl_titulo">
    Items del Recibo
</div>

<table class="listado" id="listado_adm_vta_recibo_gestion" border="0" align="center">

    <tbody>
        <tr>

            <td class="adm_tbl_encabezado" width="25" align="center">
                #
            </td>

            <td class="adm_tbl_encabezado" width="30" align="center">
                Cant
            </td>

            <td class="adm_tbl_encabezado" width="270" align="center">
                Descripcion
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                F de Pago
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Imp Unitario
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Imp Total
            </td>
        </tr>

        <?php
        $cont = 0;
        foreach ($vta_recibo_items as $i => $vta_recibo_item) {
            $cont++;
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $gral_fp_forma_pago = $vta_recibo_item->getGralFpFormaPago();
            $cantidad = $vta_recibo_item->getCantidad();
            $vta_recibo_concepto = $vta_recibo_item->getVtaReciboConcepto();
            $importe_unitario = $vta_recibo_item->getImporteUnitarioParaComprobante();
            $importe_total = $vta_recibo_item->getImporteTotalParaComprobante();

            $vta_recibo_item_cheque = $vta_recibo_item->getVtaReciboItemCheque();
            if($vta_recibo_item_cheque){
                $arr_vta_recibo_item_cheque[$cont] = $vta_recibo_item_cheque;
            }
            ?>
            <tr id="tr_vta_presupuesto_gestion_uno_<?php echo $vta_recibo_item->getId() ?>" class="uno" identificador="<?php echo $vta_recibo_item->getId() ?>">

                <td class="adm_tbl_encabezado_gris" align="center">
                    <label class="linea"><?php Gral::_echo($cont) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="insumo"><?php Gral::_echo($cantidad) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="insumo"><?php Gral::_echo($vta_recibo_item->getDescripcion()) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="gral-fp-forma-pago"><?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?></label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-unitario"><?php Gral::_echoImp($importe_unitario) ?></label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total"><?php Gral::_echoImp($importe_total) ?></label>
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>
