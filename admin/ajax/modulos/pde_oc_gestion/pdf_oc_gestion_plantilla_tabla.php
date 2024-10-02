<?php
include_once "_autoload.php";

$pde_oc_id = $param["pde_oc_id"];

$pde_oc = PdeOc::getOxId($pde_oc_id);
$pde_ocs[] = $pde_oc; // se agrega a un array para simular coleccion
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

        <th class="adm_tbl_encabezado_gris" width="25" align="center">
            #
        </th>

        <th class="adm_tbl_encabezado_gris" width="30" align="center">
            Cant
        </th>

        <th class="adm_tbl_encabezado_gris" width="285" align="center">
            Nombre de Insumo de Provedor
        </th>

        <th class="adm_tbl_encabezado_gris" width="100" align="center">
            Cod Proveedor
        </th>

        <th class="adm_tbl_encabezado_gris" width="100" align="center">
            Cto Unit Estim
        </th>

    </tr>


    <?php
    foreach ($pde_ocs as $i => $pde_oc) {
        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $pde_oc->getInsInsumo();
        $prv_insumo = $pde_oc->getPrvInsumo();
        $cantidad = $pde_oc->getCantidad();
        $importe_unitario = $pde_oc->getImporteUnidad();
        $importe_total = $pde_oc->getImporteTotal();
        $fecha_entrega = $pde_oc->getVencimiento();
        ?>
        <tr id="tr_pde_oc_agrupacion_gestion_uno_<?php echo $pde_oc->getId() ?>" class="uno" identificador="<?php echo $pde_oc->getId() ?>">

            <td class="adm_tbl_encabezado_gris" align="center">
                <label class="cantidad">
                    <?php Gral::_echo( ++$cont) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad">
                    <?php Gral::_echo($cantidad) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <?php if (trim($prv_insumo->getDescripcion()) != "") { ?>
                    <label class="insumo">
                        <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
                    </label>
                <?php } else { ?>
                    <label class="insumo">
                        (<?php echo Gral::getConfig('conf_proyecto_min') ?>) <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                    </label>
                    <br />
                    <label class="insumo">
                        &nbsp; C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                    </label>
                    <br />
                    <label class="insumo">
                        &nbsp; <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
                    </label>
                <?php } ?>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="codigo-proveedor">
                    <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-unitario">
                    <?php Gral::_echoImp($importe_unitario) ?>
                </label>
            </td>	

        </tr>
    <?php } ?>
</table>

