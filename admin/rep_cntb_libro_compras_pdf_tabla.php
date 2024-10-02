<?php
include_once "_autoload.php";

$gral_empresa_id = $param["gral_empresa_id"];
$prv_proveedor_id = $param["prv_proveedor_id"];
$fecha_desde = $param["fecha_desde"];
$fecha_hasta = $param["fecha_hasta"];
$pagina = $param["pagina"];
$pde_comprobantes_pagina = $param['pde_comprobantes_pagina'];
$arr_total_libro_acumulado = $param['arr_total_libro_acumulado'];

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
        line-height: 16px;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#d0d0d0;
        border: #000 solid 1px;
        line-height: 16px;
    }
    .adm_tbl_encabezado_gris_claro{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#ededed;
        border: #000 solid 1px;
        line-height: 25px;
    }
    .adm_tbl_pie{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        background-color:#f1f1f1;
        border-bottom:#999 solid 1px;
        line-height: 20px;
        padding:5px;
    }
    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border: #000 solid 1px;
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

<table cellpadding="0" cellspacing="0" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>

        <th class="adm_tbl_encabezado_gris" width="43" align="center">
            Fecha
        </th>

        <th class="adm_tbl_encabezado_gris" width="35" align="center">
            Tipo
        </th>

        <th class="adm_tbl_encabezado_gris" width="58" align="center">
            Comprobante
        </th>

        <th class="adm_tbl_encabezado_gris" width="120" align="center">
            Proveedor
        </th>

        <th class="adm_tbl_encabezado_gris" width="55" align="center">
            CUIT
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Sub Neto Grav
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Sub Neto NG
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Importe IVA
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Perc IVA
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            P. IIBB Mnes
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            P. IIBB BsAs
        </th>
        
        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Otros Impuest
        </th>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            TOTAL
        </th>

    </tr>

    <?php
    foreach ($pde_comprobantes_pagina as $i => $pde_comprobante) {

        $cont++;

        include "rep_cntb_libro_compras_pdf_calculos.php";        
        ?>
        <tr id="tr_cntb_diario_asiento_cuenta_uno_<?php echo $pde_comprobante->getId() ?>" class="uno" identificador="<?php echo $pde_comprobante->getId() ?>">

            <td class="adm_tbl_lineas" align="left">
                <?php Gral::_echo(Gral::getFechaToWEB($pde_comprobante->getFechaEmision())) ?>
            </td>

            <td class="adm_tbl_lineas" align="left">
                <?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?> - <?php Gral::_echo($pde_comprobante->getTipoComprobanteMin()) ?>
            </td>

            <td class="adm_tbl_lineas" align="left">
                <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
            </td>

            <td class="adm_tbl_lineas" align="left">
                <?php Gral::_echo(substr($pde_comprobante->getPersonaDescripcion(), 0, 25)) ?>
            </td>

            <td class="adm_tbl_lineas" align="left">
                <?php Gral::_echo($pde_comprobante->getCuit()) ?>
            </td>

            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_subtotal_neto_gravado) ?>&nbsp;&nbsp;
            </td>

            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_subtotal_neto_no_gravado_exento) ?>&nbsp;&nbsp;
            </td>

            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_iva_importe) ?>&nbsp;&nbsp;
            </td>

            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_tributos_perc_iva_importe) ?>&nbsp;&nbsp;
            </td>

            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_tributos_perc_iibb_mnes_importe) ?>&nbsp;&nbsp;
            </td>

            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_tributos_perc_iibb_bsas_importe) ?>&nbsp;&nbsp;
            </td>
            
            <td class="adm_tbl_lineas" align="right">
                <?php Gral::_echoImp($importe_otros_tributos_importe) ?>&nbsp;&nbsp;
            </td>

            <td class="adm_tbl_lineas" align="right" style="<?php echo (!Gral::getCompararIgualdadNumerosFloat($importe_total_comprobante, $importe_total_comprobante_individual_sumado)) ? 'color:#c00;' : '' ?>">
                <?php Gral::_echoImp($importe_total_comprobante) ?>&nbsp;&nbsp;
            </td>

        </tr> 

    <?php } ?>

    <tr>
        <td class="adm_tbl_encabezado_gris" align="left" colspan="5">
            Total de pagina <?php echo $pagina ?>
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_subtotal_neto_gravado) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_subtotal_neto_no_gravado) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_iva_importe) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_perc_iva_importe) ?>&nbsp;&nbsp;
        </td>
        
        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_perc_iibb_mnes_importe) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_perc_iibb_bsas_importe) ?>&nbsp;&nbsp;
        </td>
        
        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_tributos_importe) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($importe_total_mensual_total_comprobante) ?>&nbsp;&nbsp;
        </td>

    </tr>

    <tr>
        <td class="adm_tbl_encabezado_gris" align="left" colspan="5">
            Total acumulado del libro
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_subtotal_neto_gravado']) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_subtotal_neto_no_gravado']) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_iva_importe']) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_perc_iva_importe']) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_perc_iibb_mnes_importe']) ?>&nbsp;&nbsp;
        </td>
        
        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_perc_iibb_bsas_importe']) ?>&nbsp;&nbsp;
        </td>

        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_tributos_importe']) ?>&nbsp;&nbsp;
        </td>
        
        <td class="adm_tbl_encabezado_gris" align="right">
            <?php Gral::_echoImp($arr_total_libro_acumulado['importe_total_libro_total_comprobante']) ?>&nbsp;&nbsp;
        </td>

    </tr>
    
</table>
