<?php
include_once "_autoload.php";

//$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago_id = $param["pde_orden_pago_id"];
$pde_orden_pago_pde_tributo_id = $param["pde_orden_pago_pde_tributo_id"];

$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
$pde_orden_pago_pde_tributo = PdeOrdenPagoPdeTributo::getOxId($pde_orden_pago_pde_tributo_id);
$pde_tributo = $pde_orden_pago_pde_tributo->getPdeTributo();

$pde_orden_pago_pde_comprobantes = $pde_orden_pago->getPdeOrdenPagoPdeComprobantes();
$pde_orden_pago_pde_tributos = $pde_orden_pago->getPdeOrdenPagoPdeTributos();
?>
<style>
    .listado{
        font-size: 8px;
    }
    .tabla{
        font-size: 8px;
    }
    .adm_tbl_orden {text-decoration: none; color:#FFFFFF;}
    .adm_tbl_orden:link {   text-decoration: none;  color:#FFFFFF;}
    .adm_tbl_orden:visited {    text-decoration: none;  color:#FFFFFF;}
    .adm_tbl_orden:hover {text-decoration: none;    color:#CCCCCC;}

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
        line-height:20px;
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

<br />
<br />
Comprobante de Retencion<br />

<table class="listado" id="listado_adm_pde_orden_pago_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="90" align="center">
                Codigo
            </td>
            <td class="adm_tbl_encabezado" width="70" align="center">
                Fecha Emision
            </td>
            <td class="adm_tbl_encabezado" width="140" align="left">
                Descripcion
            </td>
            <td class="adm_tbl_encabezado" width="60" align="center">
                Alicuota
            </td>
            <td class="adm_tbl_encabezado" width="90" align="center">
                Base Imponible 
            </td>
            <td class="adm_tbl_encabezado" width="90" align="center">
                Importe Retenido
            </td>
        </tr>

        <tr id="tr_pde_orden_pago_pde_tributo_gestion_uno_<?php echo $pde_orden_pago_pde_tributo->getId() ?>" class="uno" identificador="<?php echo $pde_orden_pago_pde_tributo->getId() ?>">
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="descripcion"><?php Gral::_echo($pde_orden_pago_pde_tributo->getCodigoRetencion()); ?></label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="descripcion"><?php Gral::_echo(Gral::getFEchaToWeb($pde_orden_pago_pde_tributo->getFechaEmision())); ?></label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="descripcion"><?php Gral::_echo($pde_tributo->getDescripcion()); ?></label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="alicuota">
                    <?php if ($pde_tributo->getAlicuotaPorcentual() > 0) { ?>
                        <?php Gral::_echo($pde_tributo->getAlicuotaPorcentual()); ?>%
                    <?php } ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe"><?php Gral::_echoImp($pde_orden_pago_pde_tributo->getImporteImponible()); ?></label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe"><?php Gral::_echoImp($pde_orden_pago_pde_tributo->getImporteTributo()); ?></label>
            </td>
        </tr>
    </tbody>
</table>