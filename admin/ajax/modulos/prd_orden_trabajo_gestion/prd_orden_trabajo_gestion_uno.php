
<?php
$cantidad_ciclos = 0;
$cantidad_operaciones_x_ciclo = 0;

$cantidad_operaciones_iniciadas = 0;
$cantidad_operaciones_en_cursos = 0;
$cantidad_operaciones_finalizadas = 0;
$cantidad_orden_trabajo_finalizados = 0;
$prd_orden_trabajo_ciclos = $prd_orden_trabajo->getPrdOrdenTrabajoCiclos();
$class_operaciones = '';
$class_ciclos = '';
$detalle_operaciones = '';
$ins_insumno_descripcion = '';
$ins_insumno_unidad_descripcion = '';

if ( count($prd_orden_trabajo_ciclos) > 0 )
{
    $cantidad_ciclos = count($prd_orden_trabajo_ciclos);
    
    foreach ( $prd_orden_trabajo_ciclos as $prd_orden_trabajo_ciclo )
    {
        $prd_orden_trabajo_operacions = $prd_orden_trabajo_ciclo->getPrdOrdenTrabajoOperacions();
        $cantidad_operaciones_x_ciclo = count($prd_orden_trabajo_operacions);
        
        $class_operaciones = ( $prd_orden_trabajo_ciclo->getEsCicloFinalizado() && $prd_orden_trabajo_ciclo->getCantidadOperacionesFinalizadas() > 0 ) ? PrdOrdenTrabajoOperacionTipoEstado::TIPO_FINALIZADA : '';
        
        // las operaciones que son distintas a NO INICIADA ( es decir En curso y finalizado )
        $cantidad_operaciones_iniciadas = $prd_orden_trabajo_ciclo->getCantidadOperacionesIniciadas();
        
        $cantidad_operaciones_en_cursos = $prd_orden_trabajo_ciclo->getCantidadOperacionesEnCursos();
        $cantidad_operaciones_finalizadas = $prd_orden_trabajo_ciclo->getCantidadOperacionesFinalizadas();
        
        $detalle_operaciones =  ( $cantidad_operaciones_iniciadas > 0 && $cantidad_operaciones_finalizadas < $cantidad_operaciones_iniciadas ) ? 'Iniciadas: ' . $cantidad_operaciones_iniciadas . ' ( En Curso ' . $cantidad_operaciones_en_cursos . ' - Finalizados ' . $cantidad_operaciones_finalizadas . ' )' : '';
    }
}

$cantidad_orden_trabajo_finalizados = $prd_orden_trabajo->getCantidadPrdOrdenTrabajoCicloFinalizados();
$class_ciclos = ( $prd_orden_trabajo->getEsOtFinalizado() && $prd_orden_trabajo->getCantidadPrdOrdenTrabajoCicloFinalizados() > 0 ) ? PrdOrdenTrabajoOperacionTipoEstado::TIPO_FINALIZADA : '';

if ( $prd_orden_trabajo->getVtaPresupuestoInsInsumoId() != 'null' )
{
    $vta_presupuesto_ins_insumo = $prd_orden_trabajo->getVtaPresupuestoInsInsumo();
    $ins_insumno = $vta_presupuesto_ins_insumo->getInsInsumo();
    if ( $ins_insumno )
    {
        $ins_insumno_descripcion = $ins_insumno->getDescripcion();
        $ins_insumno_unidad_descripcion = $ins_insumno->getInsUnidadMedida()->getDescripcionCorta();
    }
}
else
{
    $ins_insumno = $prd_orden_trabajo->getInsInsumo();
    if ( $ins_insumno )
    {
        $ins_insumno_descripcion = $ins_insumno->getDescripcion();
        $ins_insumno_unidad_descripcion = $ins_insumno->getInsUnidadMedida()->getDescripcionCorta();
    }
}

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $prd_orden_trabajo->getId() ?>" modulo="prd_orden_trabajo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
        <?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?>
    </div>
    <div class="fecha">
        <?php Gral::_echo(Gral::getFechaToWeb($prd_orden_trabajo->getFecha())) ?>
    </div>
    <div class="prioridad <?php Gral::_echo($prd_orden_trabajo->getPrdPrioridad()->getCodigo()); ?>">
        <?php Gral::_echo($prd_orden_trabajo->getPrdPrioridad()->getDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    
    <div class="insumo">
        <?php Gral::_echo($ins_insumno_descripcion) ?>
    </div>

    <div class="proceso-productivo">
        <?php Gral::_echo($prd_orden_trabajo->getPrdProcesoProductivo()->getDescripcion()) ?>
    </div>
    <div class="cliente">
        <?php Gral::_echo($prd_orden_trabajo->getCliCliente()->getDescripcion()) ?>
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
    <div class="cantidad">
        <?php Gral::_echo($prd_orden_trabajo->getCantidad() )  ?>
    </div>

    <div class="unidad-medida">
        <?php Gral::_echo($ins_insumno_unidad_descripcion )  ?> 
    </div>
</td>	


<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="prd-orden-trabajo-tipo-estado">
        <img src="imgs/prd_orden_trabajo_tipo_estado/<?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="prd-tipo-origen">
        <?php Gral::_echo($prd_orden_trabajo->getPrdTipoOrigen()->getDescripcion()) ?>
    </div>
    <?php if ( $prd_orden_trabajo->getVtaPresupuestoInsInsumo() ): ?>
    <div class="presupuesto">
        <?php Gral::_echo($prd_orden_trabajo->getVtaPresupuestoInsInsumo()->getVtaPresupuesto()->getCodigo()) ?>
    </div>
    <?php endif; ?>
</td>


<!-- Ciclos -->
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ciclos <?php echo $class_ciclos; ?>">
        <?php Gral::_echo($cantidad_orden_trabajo_finalizados); ?> / <?php Gral::_echo($cantidad_ciclos); ?>
    </div>

</td>

<!-- Operaciones -->
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="operaciones <?php echo $class_operaciones; ?>" title="<?php echo $detalle_operaciones; ?>">
        <?php Gral::_echo($cantidad_operaciones_iniciadas); ?> / <?php Gral::_echo($cantidad_operaciones_x_ciclo); ?>
    </div>
    <div class="operaciones-detalle">
        <?php Gral::_echo($detalle_operaciones); ?>
    </div>
</td>


<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
        <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_GESTION_ACCION_MODIFICAR')){ ?>
            <?php if ( $prd_orden_trabajo->getPrdTipoOrigen()->getCodigo() == PrdTipoOrigen::TIPO_ORIGEN_MANUAL ) : ?>
            <li class='adm_botones_accion ot-orden-trabajo'>
                <img src='imgs/btn_modi.gif' width='18' title="Editar Orden de Trabajo" class='gen-modal-open' gen-modal-file="ajax/modulos/prd_orden_trabajo_gestion/modal_orden_trabajo.php?identificador=<?php echo $prd_orden_trabajo->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="450" gen-modal-titulo="Editar OT" gen-modal-callback="setInit()"/>
            </li>
            <?php endif; ?>
        <?php } ?>
        
        <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_ELIMINAR')){ ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($prd_orden_trabajo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>
        
        <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_FICHA')){ ?>
            <li class='adm_botones_accion adm-ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
                <img src='imgs/btn_ficha.png' width='15' border='0' />
            </li>
        <?php } ?>
        
        <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_ESTADO')){ ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($prd_orden_trabajo->getEstado())  ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>
        
        <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/prd_orden_trabajo_gestion/prd_orden_trabajo_gestion_db_context_acciones.php?id=<?php Gral::_echo($prd_orden_trabajo->getId()) ?>' modulo_metodo_init="setInitPrdOrdenTrabajoGestion()">
                <img src='imgs/btn_config.png' width='20' />       
            </li>
        <?php } ?>
    </ul>
</td>