<?php
include_once "_autoload.php";

$prv_proveedor_id = $param["prv_proveedor_id"];
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

$fecha_desde = $param["fecha_desde"];
$fecha_hasta = $param["fecha_hasta"];

$gral_empresa_id = 1;

$pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id = false, $anio = false, $prv_proveedor_id, $incluir_recibos = true, $orden = 'ASC');
//Gral::prr($pde_comprobantes);
//exit;

$fecha_hasta_saldo = Date::sumarDias($fecha_desde, -1);
$importe_total_saldo_inicial_en_fecha = $prv_proveedor->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha_hasta_saldo);
?>
<style>
    .listado{
        font-size: 8px;
    }
    .saldo{
        font-size: 10px;
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

    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    

</style>

<table class="listado" id="listado_adm_pde_factura_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado" width="60" align="center">
                Fecha
            </td>

            <td class="adm_tbl_encabezado" width="40" align="center">
                Tipo
            </td>
            
            <td class="adm_tbl_encabezado" width="90" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Tipo de Estado
            </td>
            
            <td class="adm_tbl_encabezado" width="85" align="center">
                Debe
            </td>

            <td class="adm_tbl_encabezado" width="85" align="center">
                Haber
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Saldo
            </td>
        </tr>
        
        <tr id="tr_saldo" class="uno" identificador="0">

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left" colspan="6">
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
        foreach ($pde_comprobantes as $i => $pde_comprobante) {
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

            $importe_total_debe = $pde_comprobante->getImporteTotalComprobanteDebe();
            $importe_total_haber = $pde_comprobante->getImporteTotalComprobanteHaber();

            $importe_total_debe_total += $importe_total_debe;
            $importe_total_haber_total += $importe_total_haber;

            $importe_total_saldo -= $importe_total_debe - $importe_total_haber;
            ?>
            <tr id="tr_pde_comprobante_uno_<?php echo $pde_comprobante->getId() ?>" class="uno" identificador="<?php echo $pde_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getFechaEmision())) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="tipo-comprobante">
                        <?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="nro-comprobante">
                        <?php Gral::_echo($pde_comprobante->getTipoComprobanteMin()) ?> 
                        <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="tipo-estado">
                        <?php Gral::_echo($pde_comprobante->getTipoEstadoComprobante()) ?>
                    </label>
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