<?php
include_once "_autoload.php";

//$fnd_caja_id = Gral::getVars(Gral::VARS_GET, 'fnd_caja_id', 0);
$fnd_caja_id = $param["fnd_caja_id"];
$arr_resumen_caja = $param["arr_resumen_caja"];

$fnd_caja = FndCaja::getOxId($fnd_caja_id);
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
        line-height:18px;
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

<div class="adm_tbl_titulo">
    Cobro Vinculados
</div>
<table class="listado" id="listado_adm_fnd_caja_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="60" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="40" align="center">
                Tipo
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="60" align="center">
                Vencimiento
            </td>

            <td class="adm_tbl_encabezado" width="73" align="center">
                Imp Total
            </td>

            <td class="adm_tbl_encabezado" width="73" align="center">
                Imp Saldado
            </td>

            <td class="adm_tbl_encabezado" width="73" align="center">
                Imp en OP
            </td>

            <td class="adm_tbl_encabezado" width="73" align="center">
                Imp Saldo
            </td>
        </tr>

        <?php
        foreach ($fnd_caja_pde_comprobantes as $i => $fnd_caja_pde_comprobante) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            ?>
            <tr id="tr_fnd_caja_pde_comprobante_gestion_uno_<?php echo $fnd_caja_pde_comprobante->getId() ?>" class="uno" identificador="<?php echo $fnd_caja_pde_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-emision">
                        <?php Gral::_echo(Gral::getFechaToWEB($pde_comprobante->getFechaEmision())) ?>
                    </label>
                </td>	

            </tr>
        <?php } ?>


    </tbody>
</table>
