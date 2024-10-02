<?php
include_once "_autoload.php";

$cntb_ejercicio_id = $param["cntb_ejercicio_id"];
$cntb_cuenta_id = $param["cntb_cuenta_id"];
$fecha_desde = $param["fecha_desde"];
$fecha_hasta = $param["fecha_hasta"];

$cntb_ejercicio = CntbEjercicio::getOxId($cntb_ejercicio_id);
$cntb_cuenta = CntbCuenta::getOxId($cntb_cuenta_id);

$cntb_diario_asiento_cuentas = $cntb_ejercicio->getCntbDiarioAsientoCuentasOrdenadosParaMayor($cntb_cuenta, $fecha_desde, $fecha_hasta);

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
        background-color:#ededed;
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

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Fecha
        </th>

        <th class="adm_tbl_encabezado_gris" width="50" align="center">
            Asiento
        </th>

        <th class="adm_tbl_encabezado_gris" width="250" align="center">
            Concepto
        </th>

        <th class="adm_tbl_encabezado_gris" width="80" align="center">
            Comprobante
        </th>
        
        <th class="adm_tbl_encabezado_gris" width="85" align="center">
            Debe
        </th>

        <th class="adm_tbl_encabezado_gris" width="85" align="center">
            Haber
        </th>

        <th class="adm_tbl_encabezado_gris" width="85" align="center">
            Saldo Deudor
        </th>

        <th class="adm_tbl_encabezado_gris" width="85" align="center">
            Saldo Acreedor
        </th>

    </tr>

    <?php
    foreach ($cntb_diario_asiento_cuentas as $i => $cntb_diario_asiento_cuenta) {
        //$css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $cntb_diario_asiento = $cntb_diario_asiento_cuenta->getCntbDiarioAsiento();
        $cntb_tipo_asiento = $cntb_diario_asiento->getCntbTipoAsiento();
        $fecha = $cntb_diario_asiento->getFecha();
        
        $importe_debe = $cntb_diario_asiento_cuenta->getImporteDebe();
        $importe_haber = $cntb_diario_asiento_cuenta->getImporteHaber();
        
        $importe_saldo+= $importe_debe - $importe_haber;

        if($importe_saldo > 0){
            $importe_saldo_deudor = abs($importe_saldo);
            $importe_saldo_acreedor = 0;
        }else{
            $importe_saldo_deudor = 0;
            $importe_saldo_acreedor = abs($importe_saldo);
        }
        
        ?>
        <tr id="tr_cntb_diario_asiento_cuenta_uno_<?php echo $cntb_diario_asiento_cuenta->getId() ?>" class="uno" identificador="<?php echo $cntb_diario_asiento_cuenta->getId() ?>">

            <td class="adm_tbl_lineas" align="center">
                <label class="asiento-fecha"><?php Gral::_echo(Gral::getFechaToWEB($cntb_diario_asiento->getFecha())) ?></label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="asiento-numero"><?php Gral::_echo($cntb_diario_asiento->getNumero()) ?></label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="concepto"><?php Gral::_echo(substr($cntb_diario_asiento->getDescripcion(), 0, 60)) ?></label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="comprobante"><?php Gral::_echo($cntb_diario_asiento_cuenta->getCodigoComprobante()) ?></label>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-debe"><?php Gral::_echoImp($importe_debe) ?></label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-haber"><?php Gral::_echoImp($importe_haber) ?></label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-haber"><?php Gral::_echoImp($importe_saldo_deudor) ?></label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-haber"><?php Gral::_echoImp($importe_saldo_acreedor) ?></label>
            </td>
            
        </tr>        

    <?php } ?>
</table>
