
<?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_VINCULO_PER_MOV_PLANIFICACION_TRAMO')){ ?>
<div class='vinculo per_mov_planificacion_tramo' padre='per_mov_planificacion' hijo='per_mov_planificacion_tramo' padre_id='<?php echo $per_mov_planificacion->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PerMovPlanificacionTramos') ?>
        <?php 
        $cantidad_per_mov_planificacion_tramos = count($per_mov_planificacion->getPerMovPlanificacionTramos());
        echo ($cantidad_per_mov_planificacion_tramos > 0) ? '('.$cantidad_per_mov_planificacion_tramos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='per_mov_planificacion_tramo_txt_buscar' id='per_mov_planificacion_tramo_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_ALTA_VINCULO_PER_MOV_PLANIFICACION_TRAMO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/per_mov_planificacion_tramo/per_mov_planificacion_tramo_alta.php?per_mov_planificacion_id=<?php Gral::_echo($per_mov_planificacion->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'per_mov_planificacion', 'per_mov_planificacion_tramo', <?php Gral::_echo($per_mov_planificacion->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PerMovPlanificacionTramo') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

