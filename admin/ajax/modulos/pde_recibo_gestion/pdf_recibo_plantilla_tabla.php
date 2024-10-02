<?php
include_once "_autoload.php";

//$pde_recibo_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_id', 0);
$pde_recibo_id = $param["pde_recibo_id"];

$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
//$pde_recibo_pde_factura_pde_orden_ventas = $pde_recibo->getPdeReciboPdeFacturaPdeOrdenVentas();
$pde_recibo_items = $pde_recibo->getPdeReciboItems();

//Gral::prr($pde_recibo_pde_factura_pde_orden_ventas);
//Gral::prr($pde_recibo_items);

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
        font-weight: normal;
        text-decoration: none;
        color: #274D20;
        font-weight:bold;
        border-bottom:#CCCCCC solid 1px;
    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        height:14px;
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
        height:14px;
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
        height:14px;            
    }
    
    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    
      
</style>

<table class="listado" id="listado_adm_pde_recibo_gestion" border="0" align="center">

    <tbody>
        <tr>

            <td class="adm_tbl_encabezado" width="30" align="center">
                Cant
            </td>

            <td class="adm_tbl_encabezado" width="350" align="center">
                Descripcion
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Imp Unitario
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Imp Total
            </td>
        </tr>

        <?php
        foreach ($pde_recibo_items as $i => $pde_recibo_item) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';
            
            $cantidad = $pde_recibo_item->getCantidad();
            $descripcion = $pde_recibo_item->getDescripcion();
            $importe_unitario = $pde_recibo_item->getImporteUnitarioParaComprobante();
            $importe_total = $pde_recibo_item->getImporteTotalParaComprobante();
            ?>
            <tr id="tr_pde_presupuesto_gestion_uno_<?php echo $pde_recibo_item->getId() ?>" class="uno" identificador="<?php echo $pde_recibo_item->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="insumo">
                        <?php Gral::_echo($cantidad) ?>
                    </label>
                </td>
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="insumo">
                        <?php Gral::_echo($descripcion) ?>
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
            
    </tbody>
</table>
