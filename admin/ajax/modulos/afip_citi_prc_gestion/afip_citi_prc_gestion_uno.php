<?php
$afip_citi_cabeceras = $afip_citi_prc->getAfipCitiCabeceras();
$cantidad_cabeceras = count($afip_citi_cabeceras);

$afip_citi_cabecera = $afip_citi_prc->getAfipCitiCabeceraActual();
$afip_citi_ventas_cbtes = $afip_citi_cabecera->getAfipCitiVentasCbtes();
$afip_citi_ventas_alicuotass = $afip_citi_cabecera->getAfipCitiVentasAlicuotass();
$afip_citi_compras_cbtes = $afip_citi_cabecera->getAfipCitiComprasCbtes();
$afip_citi_compras_alicuotass = $afip_citi_cabecera->getAfipCitiComprasAlicuotass();
$afip_citi_compras_importacioness = $afip_citi_cabecera->getAfipCitiComprasImportacioness();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $afip_citi_prc->getId() ?>" modulo="afip_citi_prc">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        <?php Gral::_echo($afip_citi_prc->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="gral_empresa_id">	
        <?php Gral::_echo($afip_citi_prc->getGralEmpresa()->getDescripcion()) ?>        
    </div>
</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="anio">
        <?php Gral::_echo($afip_citi_prc->getAnio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="gral_mes_id">	
        <?php Gral::_echo($afip_citi_prc->getGralMes()->getDescripcion()) ?>        
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="cantidad-cabecera">   
        <?php Gral::_echo($cantidad_cabeceras); ?> veces
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <?php include "bloque_cabecera_info.php" ?>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">
        <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_PRC_GESTION_ACCION_REGENERAR_CABECERA')): ?>
            <li class='adm_botones_accion modal-regenerar-cabecera'>
                <img src='imgs/btn_refresh.png' width='18' border='0' title="Renerar Proceso AFIP CITI"/>
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_PRC_GESTION_ACCION_DESCARGAR_ARCHIVO')): ?>
            <li class='adm_botones_accion modal-descargar-archivos'>
                <img src='imgs/ord_desc.png' width='20' border='0' title="Descargar Archivos Proceso AFIP CITI"/>
            </li>
        <?php endif; ?>
    </ul>
</td>