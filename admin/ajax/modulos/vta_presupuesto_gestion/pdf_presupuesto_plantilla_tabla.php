<?php
include_once "_autoload.php";

$vta_presupuesto_id = $param["vta_presupuesto_id"];

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);

$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
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

        <th class="adm_tbl_encabezado_gris" width="20" align="center">
            #
        </th>

        <th class="adm_tbl_encabezado_gris" width="40" align="center">
            Cant
        </th>

        <?php if ($ins_tipo_lista_precio->getBultoCerrado()) { ?>
            <th class="adm_tbl_encabezado_gris" width="40" align="center">
                Bulto
            </th>

            <th class="adm_tbl_encabezado_gris" width="40" align="center">
                Cod Int
            </th>

            <th class="adm_tbl_encabezado_gris" width="275" align="center">
                Insumo
            </th>
        <?php } else { ?>
            <th class="adm_tbl_encabezado_gris" width="40" align="center">
                Cod Int
            </th>

            <th class="adm_tbl_encabezado_gris" width="325" align="center">
                Insumo
            </th>
        <?php } ?>        

        <th class="adm_tbl_encabezado_gris" width="60" align="center">
            Imp Unitario
        </th>

        <th class="adm_tbl_encabezado_gris" width="65" align="center">
            Imp Total
        </th>
    </tr>

    <?php
    foreach ($vta_presupuesto_ins_insumos as $i => $vta_presupuesto_ins_insumo) {
        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
        $importe_unitario_lista = $vta_presupuesto_ins_insumo->getImporteUnitario();
        //$importe_unitario_neto = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento();
        //$importe_total = $importe_unitario_neto * $vta_presupuesto_ins_insumo->getCantidad();
        ?>

        <tr <?php echo($cont == 30) ? 'pagebreak="true"' : '' ?> id="tr_vta_presupuesto_gestion_uno_<?php echo $vta_presupuesto_ins_insumo->getId() ?>" class="uno" identificador="<?php echo $vta_presupuesto_ins_insumo->getId() ?>">

            <td class="adm_tbl_encabezado_gris" align="center">
                <label class="cantidad"><?php Gral::_echo(++$cont) ?></label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad"><?php Gral::_echoInt($vta_presupuesto_ins_insumo->getCantidad()) ?></label>
            </td>	

            <?php if ($ins_tipo_lista_precio->getBultoCerrado()) { ?>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <?php if ($vta_presupuesto_ins_insumo->getCantidadBulto() > 0) { ?>
                        <label class="bulto">x <?php Gral::_echoInt($vta_presupuesto_ins_insumo->getCantidadBulto()) ?></label>
                    <?php } else { ?>
                        -
                    <?php } ?>
                </td>	

                <td class="adm_tbl_lineas" align="center">
                    <label class="codigo-interno"><?php Gral::_echo($ins_insumo->getCodigoBarraInterno()) ?></label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left"><label class="insumo"><?php Gral::_echo(htmlentities(substr($vta_presupuesto_ins_insumo->getDescripcion(), 0, 90))) ?></label>
                </td>	
            <?php } else { ?>
                <td class="adm_tbl_lineas" align="center">
                    <label class="codigo-interno"><?php Gral::_echo($ins_insumo->getCodigoBarraInterno()) ?></label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left"><label class="insumo"><?php Gral::_echo(htmlentities(substr($vta_presupuesto_ins_insumo->getDescripcion(), 0, 90))) ?></label>
                </td>	
            <?php } ?>

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-unitario"><?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteUnitarioParaComprobante()) ?></label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-total"><?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteTotalParaComprobante()) ?></label>
            </td>	

        </tr>
    <?php } ?>
</table>
