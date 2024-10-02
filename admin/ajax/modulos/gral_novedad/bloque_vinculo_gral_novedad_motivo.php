
<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ALTA_VINCULO_GRAL_NOVEDAD_MOTIVO')){ ?>
<div class='vinculo gral_novedad_motivo' padre='gral_novedad' hijo='gral_novedad_motivo' padre_id='<?php echo $gral_novedad->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('GralNovedadMotivos') ?>
        <?php 
        $cantidad_gral_novedad_motivos = count($gral_novedad->getGralNovedadMotivos());
        echo ($cantidad_gral_novedad_motivos > 0) ? '('.$cantidad_gral_novedad_motivos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='gral_novedad_motivo_txt_buscar' id='gral_novedad_motivo_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_ALTA_VINCULO_GRAL_NOVEDAD_MOTIVO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_novedad_motivo/gral_novedad_motivo_alta.php?gral_novedad_id=<?php Gral::_echo($gral_novedad->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'gral_novedad', 'gral_novedad_motivo', <?php Gral::_echo($gral_novedad->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GralNovedadMotivo') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

