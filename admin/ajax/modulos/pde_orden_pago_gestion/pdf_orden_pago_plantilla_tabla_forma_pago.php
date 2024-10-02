<?php
include_once "_autoload.php";

//$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago_id = $param["pde_orden_pago_id"];

$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
$pde_orden_pago_gral_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos(null, null, true);
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
        line-height:18px;
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
        line-height:18px;
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
        line-height:18px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

Formas de Pago<br />

<table class="listado" id="listado_adm_pde_orden_pago_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="90" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="320" align="center">
                Comentarios
            </td>

            <td class="adm_tbl_encabezado" width="120" align="center">
                Importe
            </td>
        </tr>

        <?php
        foreach ($pde_orden_pago_gral_forma_pagos as $i => $pde_orden_pago_gral_forma_pago) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $gral_fp_forma_pago = $pde_orden_pago_gral_forma_pago->getGralFpFormaPago();
            $item_descripcion = $pde_orden_pago_gral_forma_pago->getDescripcion();
            $importe_forma_pago = $pde_orden_pago_gral_forma_pago->getImporteAfectado();
            
            $total_importe_forma_pago+= $importe_forma_pago;
            ?>
            <tr id="tr_pde_orden_pago_gral_fp_forma_pago_gestion_uno_<?php echo $pde_orden_pago_gral_forma_pago->getId() ?>" class="uno" identificador="<?php echo $pde_orden_pago_gral_forma_pago->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="forma-pago">
                        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="observacion">
                        <?php Gral::_echo($item_descripcion) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_forma_pago) ?>
                    </label>
                </td>	

            </tr>
        <?php } ?>
            
        <tr>
            <td class="" align="center" colspan="2">&nbsp;</td>
            <td class="adm_tbl_encabezado" align="right">
                <?php Gral::_echoImp($total_importe_forma_pago) ?>                
            </td>
        </tr>

    </tbody>
</table>
