<?php
include_once "_autoload.php";

$vta_hoja_ruta_id = $param["vta_hoja_ruta_id"];

$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);

//$vta_hoja_ruta_vta_remitos = $vta_hoja_ruta->getVtaHojaRutaVtaRemitos(null, null, true);
//$vta_hoja_ruta_vta_remito_ajustes = $vta_hoja_ruta->getVtaHojaRutaVtaRemitoAjustes(null, null, true);
$arr_comprobantes = $vta_hoja_ruta->getComprobantesOrdenados();
//Gral::prr($arr_comprobantes);
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

<table cellpadding="3" class="tabla" id="listado_adm_vta_remito_gestion" border="0" align="center">

        <tr>

            <td class="adm_tbl_encabezado_gris" width="24" align="center">
                #
            </td>
            
            <td class="adm_tbl_encabezado_gris" width="80" align="center">
                Remito
            </td>

            <td class="adm_tbl_encabezado_gris" width="200" align="left">
                Cliente
            </td>
            
            <td class="adm_tbl_encabezado_gris" width="120" align="left">
                Localidad
            </td>

            <td class="adm_tbl_encabezado_gris" width="200" align="left">
                Domicilio
            </td>

            <td class="adm_tbl_encabezado_gris" width="170" align="left">
                Telefono
            </td>

        </tr>

        <?php
        //foreach ($vta_hoja_ruta_vta_remitos as $i => $vta_hoja_ruta_vta_remito) {
        foreach ($arr_comprobantes as $arr_localidads) {

            foreach($arr_localidads as $arr_centro_recepcions)
            {

                foreach($arr_centro_recepcions as $vta_comprobante_relacion){
                
                $cont++;
                $css_bg = (($i % 2) == 0) ? 'impar' : 'par';
                
                $vta_comprobante  = $vta_comprobante_relacion->getVtaComprobante();
                $cli_cliente = $vta_comprobante->getCliCliente();
                $cliente     = substr($vta_comprobante->getPersonaDescripcion(), 0, 25);
                $cli_centro_recepcion = $vta_comprobante->getCliCentroRecepcion();
                $geo_localidad = $cli_centro_recepcion->getGeoLocalidad();
                ?>
                <tr <?php echo($cont == 25) ? 'pagebreak="true"' : '' ?> id="tr_vta_hoja_ruta_gestion_uno_<?php echo $vta_comprobante_relacion->getId(); ?>" class="uno" identificador="<?php echo $vta_comprobante_relacion->getId() ?>">

                    <td class="adm_tbl_encabezado_gris <?php echo $css_bg ?>" align="center">
                        <label class="cont"><?php Gral::_echo($cont) ?></label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="codigo-remito"><?php Gral::_echo($vta_comprobante->getCodigo()); ?></label>
                    </td>
                    
                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="cliente-descripcion"><?php Gral::_echo($cliente); ?></label>
                    </td>
                    
                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="localidad"><?php Gral::_echo($geo_localidad->getDescripcion()); ?></label>
                    </td>
                    
                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="centro-recepcion-domicilio"><?php Gral::_echo($cli_centro_recepcion->getDomicilio()); ?></label>
                    </td>
                    
                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="centro-recepcion-telefono"><?php Gral::_echo($cli_centro_recepcion->getTelefono()); ?></label>
                    </td>
                    
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</table>