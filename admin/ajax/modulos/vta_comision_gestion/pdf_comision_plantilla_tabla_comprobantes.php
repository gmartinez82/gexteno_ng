<?php
include_once "_autoload.php";

//$vta_comision_id = Gral::getVars(Gral::VARS_GET, 'vta_comision_id', 0);
$vta_comision_id = $param["vta_comision_id"];

$vta_comision = VtaComision::getOxId($vta_comision_id);
$vta_comision_vta_comprobantes = $vta_comision->getVtaComisionVtaComprobantes();
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
        line-height:20px;
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
    Comprobantes afectados
</div>

<table class="listado" id="listado_adm_vta_comision_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="60" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="40" align="center">
                Tipo
            </td>

            <td class="adm_tbl_encabezado" width="85" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Cliente
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Imp Total
            </td>

            <td class="adm_tbl_encabezado" width="70" align="center">
                Base Com
            </td>

            <td class="adm_tbl_encabezado" width="50" align="center">
                % Com
            </td>

            <td class="adm_tbl_encabezado" width="75" align="center">
                Imp Com
            </td>
        </tr>

        <?php
        foreach ($vta_comision_vta_comprobantes as $i => $vta_comision_vta_comprobante) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $vta_comprobante = $vta_comision_vta_comprobante->getVtaComprobante();
            $importe_afectado = $vta_comision_vta_comprobante->getImporteAfectado();

            $importe_total = $vta_comprobante->getImporteTotalComprobante();
            $base_comisionable = $vta_comision_vta_comprobante->getBaseComisionable();
            $porcentaje_comision = $vta_comision_vta_comprobante->getPorcentajeComision();
            $importe_comision = $vta_comision_vta_comprobante->getImporteComision();

            $total_base_comisionable += $base_comisionable;
            $total_importe_comision += $importe_comision;
            ?>
            <tr id="tr_vta_comision_vta_comprobante_gestion_uno_<?php echo $vta_comision_vta_comprobante->getId() ?>" class="uno" identificador="<?php echo $vta_comision_vta_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-emision">
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_comprobante->getFechaEmision())) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="tipo">
                        <?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="numero-comprobante">
                        <?php Gral::_echo($vta_comprobante->getTipoComprobanteMin()) ?>
                        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="cliente">
                        <?php Gral::_echo(substr(htmlentities($vta_comprobante->getPersonaDescripcion()), 0, 10)) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_total) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($base_comisionable) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="importe-total">
                        <?php Gral::_echo($porcentaje_comision) ?> %
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right" style="background-color:#ddd; font-weight: bold;">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_comision) ?>
                    </label>
                </td>	

            </tr>
        <?php } ?>

        <tr>

            <td class="adm_tbl_encabezado" align="center" colspan="5">&nbsp;</td>	

            <td class="adm_tbl_encabezado" align="right">
                <label class="importe-total">
                    <?php Gral::_echoImp($total_base_comisionable) ?>
                </label>
            </td>	

            <td class="adm_tbl_encabezado" align="center">&nbsp;</td>	

            <td class="adm_tbl_encabezado" align="right">
                <label class="importe-total">
                    <?php Gral::_echoImp($total_importe_comision) ?>
                </label>
            </td>	

        </tr>            


    </tbody>
</table>
