
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_tipo_lista_precio->getId() ?>" modulo="ins_tipo_lista_precio">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
    </div>
    <?php if (count($ins_tipo_lista_precio->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ins_tipo_lista_precio->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion_corta">
            <?php Gral::_echo($ins_tipo_lista_precio->getDescripcionCorta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_incremento">
            <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeIncremento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_minimo">
            <?php Gral::_echoImp($ins_tipo_lista_precio->getImporteMinimo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="incluye_logistica <?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getIncluyeLogistica())->getCodigo()) ?> ">	

        <?php if($ins_tipo_lista_precio->getIncluyeLogistica()){ ?>
        <img src='imgs/tilde_<?php echo $ins_tipo_lista_precio->getIncluyeLogistica() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_tipo_lista_precio->getIncluyeLogistica()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getIncluyeLogistica())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="bulto_cerrado <?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getBultoCerrado())->getCodigo()) ?> ">	

        <?php if($ins_tipo_lista_precio->getBultoCerrado()){ ?>
        <img src='imgs/tilde_<?php echo $ins_tipo_lista_precio->getBultoCerrado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_tipo_lista_precio->getBultoCerrado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getBultoCerrado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_comision">
            <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeComision()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_logistica">
            <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeLogistica()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_descuento_maximo">
            <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="por_default <?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getPorDefault())->getCodigo()) ?> ">	

        <?php if($ins_tipo_lista_precio->getPorDefault()){ ?>
        <img src='imgs/tilde_<?php echo $ins_tipo_lista_precio->getPorDefault() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_tipo_lista_precio->getPorDefault()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_tipo_lista_precio->getPorDefault())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ins_tipo_lista_precio_alta.php?id=<?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>&hash=<?php Gral::_echo($ins_tipo_lista_precio->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ins_tipo_lista_precio->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ins_tipo_lista_precio/ins_tipo_lista_precio_db_context_acciones.php?id=<?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>' modulo_metodo_init="setInitInsTipoListaPrecio()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


