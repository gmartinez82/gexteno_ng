
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $prv_importacion->getId() ?>" modulo="prv_importacion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($prv_importacion->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($prv_importacion->getDescripcion()) ?>
    </div>
    <?php if (count($prv_importacion->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($prv_importacion->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="prv_importacion_tipo_estado_id <?php Gral::_echo($prv_importacion->getPrvImportacionTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($prv_importacion->getPrvImportacionTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_proveedor_id <?php Gral::_echo($prv_importacion->getPrvProveedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($prv_importacion->getPrvProveedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_marca_id <?php Gral::_echo($prv_importacion->getInsMarca()->getCodigo()) ?> ">	

        <?php Gral::_echo($prv_importacion->getInsMarca()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ins_marca_pieza">
            <?php Gral::_echo(($prv_importacion->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_importacion->getInsMarcaPieza())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_convenio_descuento_id <?php Gral::_echo($prv_importacion->getPrvConvenioDescuento()->getCodigo()) ?> ">	

        <?php Gral::_echo($prv_importacion->getPrvConvenioDescuento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descuento">
            <?php Gral::_echo($prv_importacion->getDescuento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_tab1">
            <?php Gral::_echo($prv_importacion->getCantidadTab1()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_tab2">
            <?php Gral::_echo($prv_importacion->getCantidadTab2()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_tab3">
            <?php Gral::_echo($prv_importacion->getCantidadTab3()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_tab4">
            <?php Gral::_echo($prv_importacion->getCantidadTab4()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="seleccionar_todos <?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodos())->getCodigo()) ?> ">	

        <?php if($prv_importacion->getSeleccionarTodos()){ ?>
        <img src='imgs/tilde_<?php echo $prv_importacion->getSeleccionarTodos() ?>.png' width='16' border='0' alt="<?php Gral::_echo($prv_importacion->getSeleccionarTodos()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodos())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="seleccionar_todos_descripcion <?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodosDescripcion())->getCodigo()) ?> ">	

        <?php if($prv_importacion->getSeleccionarTodosDescripcion()){ ?>
        <img src='imgs/tilde_<?php echo $prv_importacion->getSeleccionarTodosDescripcion() ?>.png' width='16' border='0' alt="<?php Gral::_echo($prv_importacion->getSeleccionarTodosDescripcion()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($prv_importacion->getSeleccionarTodosDescripcion())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='prv_importacion_alta.php?id=<?php Gral::_echo($prv_importacion->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($prv_importacion->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($prv_importacion->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PRV_IMPORTACION_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prv_importacion/prv_importacion_db_context_acciones.php?id=<?php Gral::_echo($prv_importacion->getId()) ?>' modulo_metodo_init="setInitPrvImportacion()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


