<?php
include_once "_autoload.php";

$pde_oc_agrupacion_id = $param["pde_oc_agrupacion_id"];

$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
$prv_proveedor = $pde_oc_agrupacion->getPrvProveedor();
$pde_ocs = $pde_oc_agrupacion->getPdeOcs();
$pde_oc_agrupacion_items = $pde_oc_agrupacion->getPdeOcAgrupacionItems();

$pde_oc_agrupacion_tipo_estado = $pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado();
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

    .div_mensaje_temporal{
        border: #ccc solid 1px;
        background-color: #999;
        font-size: 16px;
        line-height: 40px;
        color: #fff;        
    }
    .texto-iva{
        color: #999999;
        font-size: 6px;
    }
</style>

<?php if ($pde_oc_agrupacion_tipo_estado->getCodigo() == PdeOcAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
    <div class="div_mensaje_temporal">
        Ítems Temporales, aún no genero OC
    </div>
    <br />
<?php } ?>

<table cellpadding="3" class="tabla" id="listado_adm_vta_presupuesto_gestion" border="0" align="center">
    <tr>

        <th class="adm_tbl_encabezado_gris" width="35" align="center">
            #
        </th>

        <th class="adm_tbl_encabezado_gris" width="50" align="center">
            Cant
        </th>

        <th class="adm_tbl_encabezado_gris" width="285" align="center">
            Producto
        </th>

        <th class="adm_tbl_encabezado_gris" width="90" align="center">
            Cod Proveedor
        </th>

        <th class="adm_tbl_encabezado_gris" width="80" align="center">
            Cto Unit Estim
        </th>

    </tr>


    <?php
    foreach ($pde_ocs as $i => $pde_oc) {
        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $pde_oc->getInsInsumo();
        //$prv_insumo = $pde_oc->getPrvInsumo();
        $cantidad = $pde_oc->getCantidad();
        $fecha_entrega = $pde_oc->getVencimiento();
        
        $iva_incluido = $pde_oc->getIvaIncluido();
        $gral_tipo_iva = $pde_oc->getGralTipoIva();

        if($iva_incluido){
            $importe_unitario = $pde_oc->getImporteUnidadConIva();
            $importe_total = $pde_oc->getImporteTotalConIva();
        }else{
            $importe_unitario = $pde_oc->getImporteUnidad();
            $importe_total = $pde_oc->getImporteTotal();            
        }
        
        if (!$prv_insumo) {
            $array = array(
                array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
                array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor->getId()),
            );
            $ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxArray($array);
        }
        ?>
        <tr id="tr_pde_oc_agrupacion_gestion_uno_<?php echo $pde_oc->getId() ?>" class="uno" identificador="<?php echo $pde_oc->getId() ?>">

            <td class="adm_tbl_encabezado_gris" align="center">
                <label class="cantidad">
                    <?php Gral::_echo( ++$cont) ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="cantidad"><?php Gral::_echo($cantidad) ?></label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <?php if ($prv_insumo && trim($prv_insumo->getDescripcion()) != "") { ?>
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
                        &nbsp; <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
                    </label>
                <?php } ?>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="codigo-proveedor">
                    <?php if ($prv_insumo) { ?>
                        <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
                    <?php } elseif ($ins_insumo_prv_proveedor) { ?>
                        <?php Gral::_echo($ins_insumo_prv_proveedor->getCodigo()) ?>
                    <?php } ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-unitario">
                    <?php Gral::_echoImp($importe_unitario) ?>
                </label>
                <br />
                <?php if($iva_incluido){ ?>
                    <label class="texto-iva texto-iva-incluido">
                        IVA Incluido
                    </label>
                <?php }else{ ?>
                    <label class="texto-iva texto-mas-iva">
                        + IVA
                    </label>
                <?php } ?>
            </td>	

        </tr>
    <?php } ?>

    <?php
    foreach ($pde_oc_agrupacion_items as $i => $pde_oc_agrupacion_item) {
        $css_bg = (($i % 2) == 0) ? 'adm_tbl_lineas_impar' : 'adm_tbl_lineas_par';

        $ins_insumo = $pde_oc_agrupacion_item->getInsInsumo();
        //$prv_insumo = $pde_oc_agrupacion_item->getPrvInsumo();
        $cantidad = $pde_oc_agrupacion_item->getCantidad();
        
        $iva_incluido = $pde_oc_agrupacion_item->getIvaIncluido();
        $gral_tipo_iva = $pde_oc_agrupacion_item->getGralTipoIva();
        
        if($iva_incluido){
            $importe_unitario = $pde_oc_agrupacion_item->getImporteUnidadConIva();
            $importe_total = $pde_oc_agrupacion_item->getImporteTotalConIva();
        }else{
            $importe_unitario = $pde_oc_agrupacion_item->getImporteUnidad();
            $importe_total = $pde_oc_agrupacion_item->getImporteTotal();            
        }
        
        if (!$prv_insumo) {
            $array = array(
                array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
                array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor->getId()),
            );
            $ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxArray($array);
        }
        ?>
        <tr id="tr_pde_oc_agrupacion_gestion_uno_<?php echo $pde_oc_agrupacion_item->getId() ?>" class="uno" identificador="<?php echo $pde_oc_agrupacion_item->getId() ?>">

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
                <?php if ($prv_insumo && trim($prv_insumo->getDescripcion()) != "") { ?>
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
                    <?php if ($prv_insumo) { ?>
                        <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
                    <?php } elseif ($ins_insumo_prv_proveedor) { ?>
                        <?php Gral::_echo($ins_insumo_prv_proveedor->getCodigo()) ?>
                    <?php } ?>
                </label>
            </td>	

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe-unitario">
                    <?php Gral::_echoImp($importe_unitario) ?>
                </label>
                <br />
                <?php if($iva_incluido){ ?>
                    <label class="texto-iva texto-iva-incluido">
                        IVA Incluido
                    </label>
                <?php }else{ ?>
                    <label class="texto-iva texto-mas-iva">
                        + IVA
                    </label>
                <?php } ?>
            </td>	

        </tr>
    <?php } ?>        
</table>
