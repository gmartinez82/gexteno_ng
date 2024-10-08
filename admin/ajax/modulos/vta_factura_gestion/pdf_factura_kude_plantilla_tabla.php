<?php
include_once "_autoload.php";

//$vta_factura_id = Gral::getVars(Gral::VARS_GET, 'vta_factura_id', 0);
$vta_factura_id = $param["vta_factura_id"];

$vta_factura = VtaFactura::getOxId($vta_factura_id);
//$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas();
//$vta_factura_items = $vta_factura->getVtaFacturaItems();


// ----------------------------------------------------------------------------------
// Instancia el EkuDe vinculado al Comprobante
// ----------------------------------------------------------------------------------
$eku_de = $vta_factura->getEkuDeActualDelComprobante();
//Gral::prr($eku_de);

$gral_tipo_ivas = GralTipoIva::getGralTipoIvas(null, null, true, array(array("campo" => "orden", "orden" => "asc")));
//Gral::prr($gral_tipo_ivas);

$eku_de_e700_g_dtip_d_e_g_cam_items = $eku_de->getEkuDeE700GDtipDEGCamItems(null, null, true);
//Gral::prr($eku_de_e700_g_dtip_d_e_g_cam_items);

$eku_de_f001_g_tot_sub = $eku_de->getEkuDeF001GTotSub();
//Gral::prr($eku_de_f001_g_tot_sub);

?>
<style>
    .listado{
        font-size: 7px;
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
        height:14px;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#d0d0d0;
        border: #000 solid 1px;
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
        height:14px;            
    }
    
    .adm_tbl_lineas_par{
        background-color:#f4f4f4;
    }    
    .adm_tbl_lineas_impar{
        background-color:#ffffff;
    }    
      
</style>

<table cellpadding="3" class="listado" id="listado_adm_vta_factura_gestion" border="0" align="center">

    <tbody>
        <tr>

            <th class="adm_tbl_encabezado_gris" width="48" align="center">
                Cod
            </th>

            <td class="adm_tbl_encabezado_gris" width="176" align="center">
                Descripción
            </td>

            <td class="adm_tbl_encabezado_gris" width="30" align="center">
                Uni
            </td>

            <td class="adm_tbl_encabezado_gris" width="35" align="center">
                Cant
            </td>
            
            <td class="adm_tbl_encabezado_gris" width="45" align="center">
                Imp Unit
            </td>

            <td class="adm_tbl_encabezado_gris" width="40" align="center">
                Desc
            </td>

            <?php foreach($gral_tipo_ivas as $gral_tipo_iva){ ?>
                <td class="adm_tbl_encabezado_gris" width="55" align="center">
                    <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?>
                </td>
            <?php } ?>
            
        </tr>
        
        <?php
        foreach ( $eku_de_e700_g_dtip_d_e_g_cam_items as $i => $eku_de_e700_g_dtip_d_e_g_cam_item )
        {
            $cont++;
            $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';
            
            //$ins_insumo = $vta_factura_vta_orden_venta->getInsInsumo();
            //$importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitarioParaComprobante();
            //$importe_total = $vta_factura_vta_orden_venta->getImporteTotalParaComprobante();
            
            $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE720GDtipDEGCamItemGValorItem();
            $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE730GDtipDEGCamItemGCamIVA();
            
            $eku_de_e701_dCodInt = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint();
            $eku_de_e708_dDesProSer = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser();
            $eku_de_e710_dDesUniMed = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE710Ddesunimed();
            $eku_de_e711_dCantProSer = $eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser();
            $eku_de_e721_dPUniProSer = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser();
            $eku_de_ea002_dDescItem = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem();

            $eku_e734_dtasaiva = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva();
            
            $importe_x_eku_e734_dtasaiva = $eku_de_e711_dCantProSer * $eku_de_e721_dPUniProSer;
            ?>
            <tr <?php echo($cont == 23) ? 'pagebreak="true"' : '' ?> id="tr_vta_factura_vta_orden_venta_gestion_uno_<?php echo $eku_de_e700_g_dtip_d_e_g_cam_item->getId() ?>" class="uno" identificador="<?php echo $eku_de_e700_g_dtip_d_e_g_cam_item->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><label class="codigo-interno"><?php Gral::_echo($eku_de_e701_dCodInt) ?></label></td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left"><label class="descripcion"><?php Gral::_echo(substr(htmlentities($eku_de_e708_dDesProSer), 0, 80)) ?></label></td>                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><label class="unidad-medida"><?php Gral::_echo($eku_de_e710_dDesUniMed) ?></label></td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><label class="importe-unitario"><?php Gral::_echoFloatDyn($eku_de_e711_dCantProSer) ?></label></td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right"><label class="importe-total"><?php Gral::_echoImp($eku_de_e721_dPUniProSer, false, false, ' ', 2) ?></label></td>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center"><label class="importe-total"><?php Gral::_echoImp($eku_de_ea002_dDescItem, false, false, ' ', 2) ?></label></td>
                
                <?php
                foreach ( $gral_tipo_ivas as $gral_tipo_iva ){
                    $valor_iva = $gral_tipo_iva->getValorIva();
                ?>
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <?php if ( $valor_iva == $eku_e734_dtasaiva ) { ?>
                        <?php Gral::_echoImp($importe_x_eku_e734_dtasaiva, false, false, ' ', 2) ?>
                    <?php } ?>
                </td>
                <?php } ?>
                
            </tr>
        <?php } ?>
            
        <tr>
            <th class="adm_tbl_encabezado_gris" colspan="6" align="left">Subtotal</th>
            <th class="adm_tbl_encabezado_gris" align="right"><?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF002Dsubexe(), false, false, ' ', 2) ?></th>
            <th class="adm_tbl_encabezado_gris" align="right"><?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF004Dsub5(), false, false, ' ', 2) ?></th>
            <th class="adm_tbl_encabezado_gris" align="right"><?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF005Dsub10(), false, false, ' ', 2) ?></th>
        </tr>

        <tr>
            <th class="adm_tbl_encabezado_gris" colspan="8" align="left">Total de la Operación</th>
            <th class="adm_tbl_encabezado_gris" align="right"><?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF008Dtotope(), false, false, ' ', 2) ?></th>
        </tr>

        <?php if(false){ ?>
        <tr>
            <th class="adm_tbl_encabezado_gris" colspan="9" align="left">
                <label style="font-weight: normal; font-size: 0.7em;">
                    <?php Gral::_echo(strtoupper(Gral::getNumeroEscritoEnLetras($eku_de_f001_g_tot_sub->getEkuF008Dtotope()))) ?>
                </label>
            </th>
        </tr>
        <?php } ?>
        
        <?php if(false){ ?>
        <tr>
            <th class="adm_tbl_encabezado_gris" colspan="8" align="left">Total Guaraníes</th>
            <th class="adm_tbl_encabezado_gris" align="right"><?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF023Dtotalgs(), false, false, ' ', 2) ?></th>
        </tr>
        <?php } ?>

        <tr>
            <th class="adm_tbl_encabezado_gris" colspan="2" align="left">Liquidación IVA</th>
            <th class="adm_tbl_encabezado_gris" colspan="7" align="right">
                
                <label style="font-weight: normal">
                    5%:
                </label>                 
                <strong>
                    <?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF015Diva5(), false, false, ' ', 2) ?>
                </strong>
                
                <label style="font-weight: normal">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    10%:
                </label>                 
                <strong>
                    <?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF016Diva10(), false, false, ' ', 2) ?>
                </strong>

                <label style="font-weight: normal">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Total IVA:
                </label>                 
                <strong>
                    <?php Gral::_echoImp($eku_de_f001_g_tot_sub->getEkuF017Dtotiva(), false, false, ' ', 2) ?>
                </strong>
                
            </th>
        </tr>
        
    </tbody>
</table>
