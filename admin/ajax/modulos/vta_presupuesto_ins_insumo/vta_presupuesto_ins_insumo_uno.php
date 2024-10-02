
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_presupuesto_ins_insumo->getId() ?>" modulo="vta_presupuesto_ins_insumo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?>
    </div>
    <?php if (count($vta_presupuesto_ins_insumo->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_presupuesto_ins_insumo->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="vta_presupuesto_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPresupuesto()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPresupuesto()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_insumo_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_iva_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getGralTipoIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getGralTipoIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_lista_precio_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsListaPrecio()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsListaPrecio()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_unitario">
            <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteUnitario()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_insumo_costo_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoCosto()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoCosto()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_costo">
            <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteCosto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_politica_descuento_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_politica_descuento_rango_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoRango()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getVtaPoliticaDescuentoRango()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_politica_descuento">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajePoliticaDescuento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_politica_descuento">
            <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImportePoliticaDescuento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_comision">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajeComision()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_comision">
            <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteComision()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_insumo_bulto_id <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoBulto()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumoBulto()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_bulto">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidadBulto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_descuento_bulto">
            <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteDescuentoBulto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_descuento_bulto">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getPorcentajeDescuentoBulto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($vta_presupuesto_ins_insumo->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_presupuesto_ins_insumo_alta.php?id=<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_presupuesto_ins_insumo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_presupuesto_ins_insumo/vta_presupuesto_ins_insumo_db_context_acciones.php?id=<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>' modulo_metodo_init="setInitVtaPresupuestoInsInsumo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


