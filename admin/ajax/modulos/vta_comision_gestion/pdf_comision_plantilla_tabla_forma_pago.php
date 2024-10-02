<?php
include_once "_autoload.php";

//$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
$vta_comision_id = $param["vta_comision_id"];

$vta_comision = VtaComision::getOxId($vta_comision_id);
$vta_comision_gral_forma_pagos = $vta_comision->getVtaComisionGralFpFormaPagos();
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
        line-height:16px;
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
        line-height:16px;
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
        line-height:16px;
    }

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

<div class="adm_tbl_titulo">
    Forma de Pago
</div>

<table class="listado" id="listado_adm_vta_comision_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="170" align="center">
                Forma de Pago
            </td>

            <td class="adm_tbl_encabezado" width="250" align="center">
                Comentarios
            </td>

            <td class="adm_tbl_encabezado" width="120" align="center">
                Importe
            </td>
        </tr>

        <?php
        foreach ($vta_comision_gral_forma_pagos as $i => $vta_comision_gral_forma_pago) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $gral_fp_forma_pago = $vta_comision_gral_forma_pago->getGralFpFormaPago();
            $item_descripcion = $vta_comision_gral_forma_pago->getDescripcion();
            $importe_forma_pago = $vta_comision_gral_forma_pago->getImporteAfectado();
            ?>
            <tr id="tr_vta_comision_gral_fp_forma_pago_gestion_uno_<?php echo $vta_comision_gral_forma_pago->getId() ?>" class="uno" identificador="<?php echo $vta_comision_gral_forma_pago->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
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


    </tbody>
</table>
