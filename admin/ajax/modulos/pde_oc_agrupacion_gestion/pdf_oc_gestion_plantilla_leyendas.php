<?php
include_once "_autoload.php";

$pde_oc_agrupacion_id = $param["pde_oc_agrupacion_id"];
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);

$pde_centro_recepcion = $pde_oc_agrupacion->getPdeCentroRecepcion();

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

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="500" align="left" colspan="2">
            Centro de Recepción
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda centro-recepcion">
                <li>Entregar en <strong><?php Gral::_echo($pde_centro_recepcion->getDescripcion()) ?></strong></li>                
                <li>Responsable: <strong><?php Gral::_echo($pde_centro_recepcion->getResponsable()) ?></strong></li>                
                <li>Telefono: <strong><?php Gral::_echo($pde_centro_recepcion->getTelefono()) ?></strong></li>                
            </ul>
        </td>
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda centro-recepcion">
                <li>Domicilio: <strong><?php Gral::_echo($pde_centro_recepcion->getDomicilio()) ?></strong></li>                
                <li>Localidad, <strong><?php Gral::_echo($pde_centro_recepcion->getGeoLocalidad()->getDescripcionFull()) ?></strong></li>                
                <li>Email: <strong><?php Gral::_echo($pde_centro_recepcion->getEmail()) ?></strong></li>                
            </ul>
        </td>
    </tr>    
</table>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>
        <th class="adm_tbl_encabezado_gris_claro" width="500" align="left">
            Comentarios adicionales
        </th>
    </tr>

    <tr id="tr_leyenda">
        <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
            <ul class="leyenda">                
                
                <?php if ($pde_oc_agrupacion->getIvaIncluido()) { ?>
                    <li>Los importe estan expresados CON IVA.</li>
                <?php }else{ ?>
                    <li>Los importe estan expresados SIN IVA.</li>
                <?php } ?>
                    
                <?php if (trim($pde_oc_agrupacion->getObservacion()) != "") { ?>
                    <li><?php Gral::_echo($pde_oc_agrupacion->getObservacion()) ?></li>
                <?php } ?>
            </ul>
        </td>
    </tr>    
</table>
