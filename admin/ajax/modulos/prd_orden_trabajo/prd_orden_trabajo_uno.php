
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $prd_orden_trabajo->getId() ?>" modulo="prd_orden_trabajo">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($prd_orden_trabajo->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?>
    </div>
    <?php if (count($prd_orden_trabajo->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($prd_orden_trabajo->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" vta_presupuesto_id <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuesto()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuesto()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" vta_presupuesto_ins_insumo_id <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuestoInsInsumo()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuestoInsInsumo()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" cli_cliente_id <?php Gral::_echo($prd_orden_trabajo->getCliCliente()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getCliCliente()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" prd_tipo_origen_id <?php Gral::_echo($prd_orden_trabajo->getPrdTipoOrigen()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getPrdTipoOrigen()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" prd_proceso_productivo_id <?php Gral::_echo($prd_orden_trabajo->getPrdProcesoProductivo()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getPrdProcesoProductivo()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" prd_prioridad_id <?php Gral::_echo($prd_orden_trabajo->getPrdPrioridad()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getPrdPrioridad()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" ins_insumo_id <?php Gral::_echo($prd_orden_trabajo->getInsInsumo()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getInsInsumo()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" prd_orden_trabajo_tipo_estado_id <?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" cantidad">
        <?php Gral::_echo($prd_orden_trabajo->getCantidad()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" fecha">
        <?php Gral::_echo(Gral::getFechaToWeb($prd_orden_trabajo->getFecha())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='prd_orden_trabajo_alta.php?id=<?php Gral::_echo($prd_orden_trabajo->getId()) ?>&hash=<?php Gral::_echo($prd_orden_trabajo->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($prd_orden_trabajo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_FICHA')){ ?>
	<li class='adm_botones_accion ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
            <img src='imgs/btn_ficha.png' width='15' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($prd_orden_trabajo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_db_context_acciones.php?id=<?php Gral::_echo($prd_orden_trabajo->getId()) ?>' modulo_metodo_init="setInitPrdOrdenTrabajo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


