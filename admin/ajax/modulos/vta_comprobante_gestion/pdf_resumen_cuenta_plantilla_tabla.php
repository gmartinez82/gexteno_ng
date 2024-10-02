<?php
include_once "_autoload.php";

$cli_cliente_id = $param["cli_cliente_id"];
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

$fecha_desde = $param["fecha_desde"];
$fecha_hasta = $param["fecha_hasta"];
$otros = $param["otros"];

$gral_empresa_id = 1;

$vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id = false, $anio = false, $cli_cliente_id, $incluir_recibos = true, $orden = 'ASC', $vta_vendedor_id = false, $incluir_ajustes = $otros, $cli_categoria_id = false);
//Gral::prr($vta_comprobantes);
//exit;

$fecha_hasta_saldo = Date::sumarDias($fecha_desde, -1);
$importe_total_saldo_inicial_en_fecha = $cli_cliente->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha_hasta_saldo, false, $otros);
?>
<style>
    .listado{
        font-size: 7px;
    }
    .saldo{
        font-size: 9px;
    }
    .saldo td{
        background-color: #dedede;
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

    .adm_tbl_lineas_saldo{
        font-weight: normal;
        text-decoration: none;
        color: #000;
        border-bottom:#CCCCCC solid 1px;
        line-height:22px;
    }
    
    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

<table class="listado" id="listado_adm_vta_factura_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="50" align="center">
                Fecha
            </td>

            <td class="adm_tbl_encabezado" width="35" align="center">
                Tipo
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="80" align="center">
                Nro Compro Ext
            </td>
            
            <td class="adm_tbl_encabezado" width="70" align="center">
                Tipo de Estado
            </td>

            <td class="adm_tbl_encabezado" width="74" align="center">
                Debe
            </td>

            <td class="adm_tbl_encabezado" width="74" align="center">
                Haber
            </td>

            <td class="adm_tbl_encabezado" width="76" align="center">
                Saldo
            </td>
        </tr>

        <tr id="tr_saldo" class="uno" identificador="0">

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left" colspan="7">
                <label class="nro-comprobante">
                    Saldo de Cuenta al <?php Gral::_echo(Gral::getFechaToWeb($fecha_hasta_saldo)) ?>
                </label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-saldo">
                    <?php Gral::_echoImp($importe_total_saldo_inicial_en_fecha) ?>
                </label>
            </td>	

        </tr>

        <?php
        $importe_total_debe_total = 0;
        $importe_total_haber_total = 0;
        //$importe_total_saldo = 0;
        $importe_total_saldo = $importe_total_saldo_inicial_en_fecha;
        foreach ($vta_comprobantes as $i => $vta_comprobante) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $importe_total_debe = $vta_comprobante->getImporteTotalComprobanteDebe();
            $importe_total_haber = $vta_comprobante->getImporteTotalComprobanteHaber();

            $importe_total_debe_total += $importe_total_debe;
            $importe_total_haber_total += $importe_total_haber;

            $importe_total_saldo += $importe_total_debe - $importe_total_haber;
            ?>
            <tr id="tr_vta_comprobante_uno_<?php echo $vta_comprobante->getId() ?>" class="uno" identificador="<?php echo $vta_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha"><?php Gral::_echo(Gral::getFechaToWeb($vta_comprobante->getFechaEmision())) ?></label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="tipo-comprobante"><?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="nro-comprobante"><?php Gral::_echo($vta_comprobante->getTipoComprobanteMin()) ?> <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="codigo-op-cliente"><?php Gral::_echo($vta_comprobante->getCodigoOpCliente()) ?></label>
                </td>
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="tipo-estado"><?php Gral::_echo($vta_comprobante->getTipoEstadoComprobante()) ?></label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-debe">
                        <?php if ($importe_total_debe != 0) { ?>
                            <?php Gral::_echoImp($importe_total_debe) ?>
                        <?php } ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-haber">
                        <?php if ($importe_total_haber != 0) { ?>
                            <?php Gral::_echoImp($importe_total_haber) ?>
                        <?php } ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-saldo">
                        <?php Gral::_echoImp($importe_total_saldo) ?>
                    </label>
                </td>	

            </tr>
        <?php } ?>
            
        <tr>
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>

            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>

            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>

            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
            
            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>

            <td class="adm_tbl_encabezado" align="right">
                <label class="importe-haber">
                    <?php if ($importe_total_debe_total != 0) { ?>
                        <?php Gral::_echoImp($importe_total_debe_total) ?>
                    <?php } ?>
                </label>
            </td>

            <td class="adm_tbl_encabezado" align="right">
                <label class="importe-haber">
                    <?php if ($importe_total_haber_total != 0) { ?>
                        <?php Gral::_echoImp($importe_total_haber_total) ?>
                    <?php } ?>
                </label>
            </td>

            <td class="adm_tbl_encabezado" align="center">
                &nbsp;
            </td>
        </tr>        

    </tbody>
</table>

<table class="saldo" id="listado_adm_vta_factura_gestion" border="0" align="center">
    <thead>
        
        <tr id="tr_saldo" class="uno" identificador="0">

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="nro-comprobante">
                    Saldo de Cuenta al <?php Gral::_echo(Gral::getFechaToWeb($fecha_hasta)) ?>
                </label>
            </td>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-saldo">
                    <?php Gral::_echoImp($importe_total_saldo) ?>
                </label>
            </td>	

        </tr>            
        
    </thead>
</table>