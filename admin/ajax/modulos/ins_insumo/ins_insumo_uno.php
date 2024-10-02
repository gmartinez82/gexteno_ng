
<?php

$ins_insumo_imagens_secundarias = $ins_insumo->getInsInsumoImagensSecundarias();
$ins_insumo_imagen_principal = $ins_insumo->getInsInsumoImagenPrincipal();
    
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_insumo->getId() ?>" modulo="ins_insumo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
   
    <?php if ($ins_insumo_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $ins_insumo_imagen_principal->getPathImagen() ?>" rel="ins_insumo_<?php echo $ins_insumo->getId() ?>" title="<?php Gral::_echo($ins_insumo_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $ins_insumo_imagen_principal->getPathImagen(true) ?>" alt="imagen-ins_insumo" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($ins_insumo_imagens_secundarias as $ins_insumo_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $ins_insumo_imagen->getPathImagen() ?>" rel="ins_insumo_<?php echo $ins_insumo->getId() ?>" title="<?php Gral::_echo($ins_insumo_imagen->getObservacion()) ?>">
                        <img src="<?php echo $ins_insumo_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="<?php echo $ins_insumo->getPathImagenNoImagen() ?>" width="120" alt="img-ins_insumo" />
    <?php } ?>

</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($ins_insumo->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" ins_categoria_id <?php Gral::_echo($ins_insumo->getInsCategoria()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($ins_insumo->getInsCategoria()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" ins_matriz_id">
        <?php Gral::_echo($ins_insumo->getInsMatriz()->getDescripcion()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
    </div>
    <?php if (count($ins_insumo->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ins_insumo->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" ins_marca_id <?php Gral::_echo($ins_insumo->getInsMarca()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo_marca">
        <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo_interno">
        <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" control_stock <?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getControlStock())->getCodigo()) ?> ">	
    
        <?php if($ins_insumo->getControlStock()){ ?>
            <img src='imgs/tilde_<?php echo $ins_insumo->getControlStock() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_insumo->getControlStock()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_insumo->getControlStock())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" gral_tipo_iva_venta">
        <?php Gral::_echo(($ins_insumo->getGralTipoIvaVenta() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta())->getDescripcion() : '-') ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" gral_tipo_iva_venta_z">
        <?php Gral::_echo(($ins_insumo->getGralTipoIvaVentaZ() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVentaZ())->getDescripcion() : '-') ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" gral_tipo_iva_compra">
        <?php Gral::_echo(($ins_insumo->getGralTipoIvaCompra() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaCompra())->getDescripcion() : '-') ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" gral_tipo_iva_compra_z">
        <?php Gral::_echo(($ins_insumo->getGralTipoIvaCompraZ() != 'null') ? GralTipoIva::getOxId($ins_insumo->getGralTipoIvaCompraZ())->getDescripcion() : '-') ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ins_insumo_alta.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>&hash=<?php Gral::_echo($ins_insumo->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ins_insumo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ins_insumo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ADM_ACCION_GIMAGEN')){ ?>
	<li class='adm_botones_accion'><a href='ins_insumo_imagen_gestor.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ins_insumo/ins_insumo_db_context_acciones.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>' modulo_metodo_init="setInitInsInsumo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


