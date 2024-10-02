<?php
include_once "_autoload.php";

//$vta_ajuste_haber_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_id', 0);
$vta_ajuste_haber_id = $param["vta_ajuste_haber_id"];

$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
//$vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $vta_ajuste_haber->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas();
$vta_ajuste_haber_items = $vta_ajuste_haber->getVtaAjusteHaberItems();

if (!count($vta_ajuste_haber_items) > 0) {
    $vta_ajuste_haber_items = $vta_ajuste_haber->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas();
}

//Gral::prr($vta_ajuste_haber_vta_factura_vta_orden_ventas);
//Gral::prr($vta_ajuste_haber_items);

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
    Items
</div>

<table class="listado" id="listado_adm_vta_ajuste_haber_gestion" border="0" align="center">

    <tbody>
        <tr>

            <td class="adm_tbl_encabezado" width="25" align="center">
                #
            </td>

            <td class="adm_tbl_encabezado" width="35" align="center">
                Cant
            </td>

            <td class="adm_tbl_encabezado" width="260" align="center">
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
        foreach ($vta_ajuste_haber_items as $i => $vta_ajuste_haber_item) {
            $cont++;
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            if($php_class == 'VtaNotaCreditoItem'){
                $vta_ajuste_haber_concepto = $vta_ajuste_haber_item->getVtaAjusteHaberConcepto();
                $gral_fp_forma_pago = $vta_ajuste_haber_item->getGralFpFormaPago();
                $cantidad = $vta_ajuste_haber_item->getCantidad();
                $importe_unitario = $vta_ajuste_haber_item->getImporteUnitarioParaComprobante();
                $importe_total = $vta_ajuste_haber_item->getImporteTotalParaComprobante();

                $vta_ajuste_haber_item_cheque = $vta_ajuste_haber_item->getVtaAjusteHaberItemCheque();
                if($vta_ajuste_haber_item_cheque){
                    $arr_vta_ajuste_haber_item_cheque[$cont] = $vta_ajuste_haber_item_cheque;
                }
                
            }else{
                $cantidad = $vta_ajuste_haber_item->getCantidad();
                $importe_unitario = $vta_ajuste_haber_item->getImporteUnitario();
                $importe_total = $importe_unitario * $cantidad;    
            }

            ?>
            <tr id="tr_vta_presupuesto_gestion_uno_<?php echo $vta_ajuste_haber_item->getId() ?>" class="uno" identificador="<?php echo $vta_ajuste_haber_item->getId() ?>">

                <td class="adm_tbl_encabezado_gris" align="center">
                    <label class="linea"><?php Gral::_echo($cont) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="insumo"><?php Gral::_echo($cantidad) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="insumo">
                        <?php Gral::_echo($vta_ajuste_haber_item->getDescripcion()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <?php if($gral_fp_forma_pago){ ?>
                    <label class="gral-fp-forma-pago">
                        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                    </label>
                <?php } ?>
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

    </tbody>
</table>
