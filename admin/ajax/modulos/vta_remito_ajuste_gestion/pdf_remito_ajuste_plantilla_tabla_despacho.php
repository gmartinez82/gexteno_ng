<?php
include_once "_autoload.php";

$vta_remito_ajuste_id = $param["vta_remito_ajuste_id"];

$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

// se obtiene el estado despachado solamente si lo tiene
$vta_remito_ajuste_estado_despachado = $vta_remito_ajuste->getVtaRemitoAjusteEstadoXCodigoDeVtaRemitoAjusteTipoEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO);

if($vta_remito_ajuste_estado_despachado){
?>
<style>
    .adm_tbl_lineas{
        font-weight: normal;
        font-size: 8px;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC dotted 1px;
    }

    .adm_tbl_lineas_label{
        font-weight:normal;
    }

    .adm_tbl_lineas_dato{
        font-weight:bold;
        text-align: right;
    }

</style>

<br />
<br />

<table cellpadding="2" align="left">
    <tr>
        <td width="20"></td>
        <td align="left" colspan="5">
            <label style="font-weight:bold;">Datos del Despacho</label>
        </td>
    </tr>
    <tr>
        <td width="20"></td>
        <td width="80" class="adm_tbl_lineas adm_tbl_lineas_label">Empresa:</td>
        <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echo($vta_remito_ajuste_estado_despachado->getGralEmpresaTransportadora()->getDescripcion()) ?></label>
        </td>
        <td width="20"></td>
        <td width="80" class="adm_tbl_lineas adm_tbl_lineas_label">Guia:</td>
        <td width="125" class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echo($vta_remito_ajuste_estado_despachado->getGuia()) ?></label>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">Fecha:</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echo(Gral::getFEchaToWeb($vta_remito_ajuste_estado_despachado->getCreado())) ?></label>
        </td>
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">Costo Envío:</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echoImp($vta_remito_ajuste_estado_despachado->getCostoEnvio()) ?></label>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">Bultos:</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echo($vta_remito_ajuste_estado_despachado->getCantidadBultos()) ?></label>
        </td>
        <td>&nbsp;</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_label">Peso:</td>
        <td class="adm_tbl_lineas adm_tbl_lineas_dato">
            <label class=""><?php Gral::_echo($vta_remito_ajuste_estado_despachado->getPeso()) ?> kg</label>
        </td>
    </tr>
</table>

<?php } ?>
