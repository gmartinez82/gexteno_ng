<?php
include_once "_autoload.php";

$vta_presupuesto_id = $param["vta_presupuesto_id"];
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$gral_fp_cuota = $vta_presupuesto->getGralFpCuota();
$gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
$gral_fp_forma_pago = $gral_fp_medio_pago->getGralFpFormaPago();

$cli_cliente = $vta_presupuesto->getCliCliente();
if ($cli_cliente && $cli_cliente->getId() != 'null') {
    switch ($cli_cliente->getGralCondicionIva()->getCodigo()) {
        case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
            $iva_incluido = false;
            break;
        default:
            $iva_incluido = true;
    }    
}

$cli_centro_recepcion = $vta_presupuesto->getCliCentroRecepcion();
//Gral::prr($cli_centro_recepcion);
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
        background-color:#eeeeee;
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

<br />
<br />
<br />
<br />

<?php if (trim($vta_presupuesto->getObservacion()) != "") { ?>
    <table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
        <tr>
            <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
                Comentarios para el cliente
            </th>
        </tr>

        <tr id="tr_leyenda">
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <ul class="leyenda">
                    <li><?php Gral::_echo($vta_presupuesto->getObservacion()) ?></li>
                </ul>
            </td>
        </tr>    
    </table>
<?php } ?>

<?php if ($gral_fp_medio_pago->getId() != 'null') { ?>
    <table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
        <tr>
            <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
                Condiciones comerciales
            </th>
        </tr>

        <tr id="tr_leyenda">
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <ul class="leyenda">
                    <li><?php Gral::_echo($gral_fp_cuota->getDescripcionCompleta()) ?></li>
                </ul>
            </td>
        </tr>    
    </table>
<?php } ?>

<?php if ($cli_centro_recepcion->getId() != 'null') { ?>
<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="540" align="left" colspan="2">
            Centro de Recepción
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda centro-recepcion">
                <li>Entregar en <strong><?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?></strong></li>                
                <li>Responsable: <strong><?php Gral::_echo($cli_centro_recepcion->getResponsable()) ?></strong></li>                
                <li>Telefono: <strong><?php Gral::_echo($cli_centro_recepcion->getTelefono()) ?></strong></li>                
            </ul>
        </td>
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda centro-recepcion">
                <li>Domicilio: <strong><?php Gral::_echo($cli_centro_recepcion->getDomicilio()) ?></strong></li>                
                <li>Localidad, <strong><?php Gral::_echo($cli_centro_recepcion->getGeoLocalidad()->getDescripcionFull()) ?></strong></li>                
                <li>Email: <strong><?php Gral::_echo($cli_centro_recepcion->getEmail()) ?></strong></li>                
            </ul>
        </td>
    </tr>    
</table>
<?php } ?>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
            Devoluciones
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li>La devolución de la presente compra, podrá realizarse dentro de las 48 hs a partir de la generación del presente documento, en día y horario comercial hábil y exclusivamente en el establecimiento de <?php echo DbConfig::CONFIG_GRAL_CLIENTE ?> donde realizó la compra. Siempre y cuando el producto se encuentre en idénticas condiciones en la que fue entregado.</li>
            </ul>
        </td>
    </tr>    
</table>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="540" align="left">
            Comentarios adicionales
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">
                <li>El precio final esta sujeto a variaciones del tipo de cambio U$D.</li>
                <li>El precio final esta sujeto a las percepciones y tasas correspondientes a su provincia.</li>
                <?php if ($vta_presupuesto->getIncluyeLogistica()) { ?>
                    <li>El presupuesto incluye logística de envio de la compra.</li>
                <?php } else { ?>
                    <li>El presupuesto NO incluye envio de la compra realizada.</li>
                <?php } ?>

                <?php if ($iva_incluido) { ?>
                    <li>Los importes estan expresado con IVA Incluido.</li>
                <?php } ?>
            </ul>
        </td>
    </tr>    
</table>
