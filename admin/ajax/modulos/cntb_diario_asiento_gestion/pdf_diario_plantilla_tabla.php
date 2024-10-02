<?php
include_once "_autoload.php";

$cntb_ejercicio_id = $param["cntb_ejercicio_id"];
$fecha_desde = $param["fecha_desde"];
$fecha_hasta = $param["fecha_hasta"];

$cntb_ejercicio = CntbEjercicio::getOxId($cntb_ejercicio_id);
$cntb_diario_asientos = $cntb_ejercicio->getCntbDiarioAsientosOrdenadosParaDiario($fecha_desde, $fecha_hasta);

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

        <th class="adm_tbl_encabezado_gris" width="65" align="center">
            Cuenta
        </th>

        <th class="adm_tbl_encabezado_gris" width="465" align="center">
            Descripcion
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

    </tr>

    <?php
    foreach ($cntb_diario_asientos as $i => $cntb_diario_asiento) {
        //$css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $cntb_tipo_asiento = $cntb_diario_asiento->getCntbTipoAsiento();
        $cntb_diario_asiento_cuentas = $cntb_diario_asiento->getCntbDiarioAsientoCuentas();
        
        ?>
        <tr id="tr_cntb_diario_asiento_uno_<?php echo $cntb_diario_asiento->getId() ?>" class="uno" identificador="<?php echo $cntb_diario_asiento->getId() ?>">

            <td class="adm_tbl_encabezado_gris_claro" align="center">
                <label class="asiento-numero">
                    Asiento <?php Gral::_echo($cntb_diario_asiento->getNumero()) ?>
                </label>
            </td>

            <td class="adm_tbl_encabezado_gris_claro <?php echo $css_bg ?>" align="left" colspan="4">
                <label class="descripcion">
                    <?php Gral::_echo(Gral::getFechaToWEB($cntb_diario_asiento->getFecha())) ?> - <?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?>
                </label>
            </td>

        </tr>

        <?php
        foreach ($cntb_diario_asiento_cuentas as $i => $cntb_diario_asiento_cuenta) {
            //$css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';
            
            $cntb_cuenta = $cntb_diario_asiento_cuenta->getCntbCuenta();
            $cntb_tipo_saldo = $cntb_diario_asiento_cuenta->getCntbTipoSaldo();
            //continue;
            ?>
            <tr id="tr_cntb_diario_asiento_cuenta_uno_<?php echo $cntb_diario_asiento_cuenta->getId() ?>" class="uno" identificador="<?php echo $cntb_diario_asiento_cuenta->getId() ?>">

                <td class="adm_tbl_lineas" align="center">
                    <label class="cuenta-numero">
                        <?php Gral::_echo($cntb_cuenta->getNumero()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="descripcion">
                        <?php echo ($cntb_tipo_saldo->getCodigo() == CntbTipoSaldo::TIPO_ACREEDOR) ? '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a ' : '' ?>
                        <?php Gral::_echo($cntb_cuenta->getDescripcion()) ?>
                        (<?php Gral::_echo($cntb_cuenta->getId()) ?>)
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="comprobante">
                        <?php Gral::_echo($cntb_diario_asiento_cuenta->getCodigoComprobante()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-debe">
                        <?php Gral::_echoImp($cntb_diario_asiento_cuenta->getImporteDebe()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-haber">
                        <?php Gral::_echoImp($cntb_diario_asiento_cuenta->getImporteHaber()) ?>
                    </label>
                </td>
                
            </tr>
        <?php } ?>        

    <?php } ?>
</table>
