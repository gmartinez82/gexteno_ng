<?php

$cantidad_orden_trabajo = 0;
$cantidad_proceso_productivo = 0;

if ( $prd_proceso_productivo && $prd_orden_trabajo )
{
    $cantidad_orden_trabajo = $prd_orden_trabajo->getCantidad();
    $cantidad_proceso_productivo = $prd_proceso_productivo->getCantidad();
    
    $ciclos = ceil($cantidad_orden_trabajo / $cantidad_proceso_productivo);
    
    $prd_linea_produccions_cmb = $prd_proceso_productivo->getPrdLineaProduccionsCmb();
    
    $prd_orden_trabajo_ciclos = $prd_orden_trabajo->getPrdOrdenTrabajoCiclos();
    
    $proceso_productivo_cantidad = $prd_proceso_productivo->getCantidad();
    $proceso_productivo_cantidad_produccion_del_ciclo = ( $proceso_productivo_cantidad * $ciclos );
    
    $proceso_productivo_cantidad_produccion_del_ciclo_excedente = ( $prd_orden_trabajo->getCantidad() - $proceso_productivo_cantidad_produccion_del_ciclo ) * -1;
    
    
    if ( $prd_proceso_productivo && $prd_proceso_productivo->getConfigurado() == 1 )
    {
    ?>
    
    <div class="par">
        <div class="label">
            <?php Lang::_lang('Ciclos') ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($ciclos); ?>
        </div>
    </div>
    
    <div class="par">
        <div class="label">
            <?php Lang::_lang('Produccion del ciclo') ?>
        </div>
        <div class="dato">
            <?php if ( $prd_proceso_productivo ) :?>
            <?php Gral::_echo($proceso_productivo_cantidad_produccion_del_ciclo); ?>
            <?php ( $proceso_productivo_cantidad_produccion_del_ciclo_excedente > 0 ) ? Gral::_echo('Un. - Excedente: ' . $proceso_productivo_cantidad_produccion_del_ciclo_excedente) : ''; ?> Un.
            <?php endif; ?>
        </div>
    </div>
    
    <?php
    for ( $ciclo = 1; $ciclo <= $ciclos; $ciclo++ ):
        //------------------------------------------------------------------------------
        //De la coleccion de ciclos buscar el del indice que se itera y usar el obj
        //------------------------------------------------------------------------------
        $prd_orden_trabajo_ciclo = $prd_orden_trabajo_ciclos[$ciclo-1];
        if ($prd_orden_trabajo_ciclo)
        {
            $prd_linea_produccion_id = $prd_orden_trabajo_ciclo->getPrdLineaProduccionId();
        }
    ?>
    <div class="par">
        <div class="label"><?php Lang::_lang('Ciclo ' . $ciclo) ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_prd_linea_produccion_id[' . $ciclo . ']', Gral::getCmbFiltro($prd_linea_produccions_cmb, '...'), $prd_linea_produccion_id, 'textbox') ?>
            <div class="label-error" id="cmb_prd_linea_produccion_id_<?php echo $ciclo; ?>_error"></div>
        </div>
    </div>
    <?php endfor; ?>
    
    <?php
    }
    else
    {
        $mensaje = 'El proceso no esta configurado completamente';
    ?>
    <div class="par">
        <div class="label">
            
        </div>
        <div class="dato">
        <?php Lang::_lang($mensaje) ?>
        </div>
    </div>
    <?php 
    }
}
?>