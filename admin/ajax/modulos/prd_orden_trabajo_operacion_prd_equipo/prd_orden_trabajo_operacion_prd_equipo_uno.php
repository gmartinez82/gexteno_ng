
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $prd_orden_trabajo_operacion_prd_equipo->getId() ?>" modulo="prd_orden_trabajo_operacion_prd_equipo">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getDescripcion()) ?>
    </div>
    <?php if (count($prd_orden_trabajo_operacion_prd_equipo->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($prd_orden_trabajo_operacion_prd_equipo->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" prd_orden_trabajo_operacion_id <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getPrdOrdenTrabajoOperacion()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getPrdOrdenTrabajoOperacion()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" prd_equipo_id <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getPrdEquipo()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getPrdEquipo()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='prd_orden_trabajo_operacion_prd_equipo_alta.php?id=<?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getId()) ?>&hash=<?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_PRD_EQUIPO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prd_orden_trabajo_operacion_prd_equipo/prd_orden_trabajo_operacion_prd_equipo_db_context_acciones.php?id=<?php Gral::_echo($prd_orden_trabajo_operacion_prd_equipo->getId()) ?>' modulo_metodo_init="setInitPrdOrdenTrabajoOperacionPrdEquipo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


