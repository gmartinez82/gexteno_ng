
<?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_ALTA_VINCULO_GRAL_NOVEDAD_MOTIVO_EXTENDIDO')){ ?>
<div class='vinculo gral_novedad_motivo_extendido' padre='gral_novedad_motivo' hijo='gral_novedad_motivo_extendido' padre_id='<?php echo $gral_novedad_motivo->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('GralNovedadMotivoExtendidos') ?>
        <?php 
        $cantidad_gral_novedad_motivo_extendidos = count($gral_novedad_motivo->getGralNovedadMotivoExtendidos());
        echo ($cantidad_gral_novedad_motivo_extendidos > 0) ? '('.$cantidad_gral_novedad_motivo_extendidos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='gral_novedad_motivo_extendido_txt_buscar' id='gral_novedad_motivo_extendido_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_ALTA_VINCULO_GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_novedad_motivo_extendido/gral_novedad_motivo_extendido_alta.php?gral_novedad_motivo_id=<?php Gral::_echo($gral_novedad_motivo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'gral_novedad_motivo', 'gral_novedad_motivo_extendido', <?php Gral::_echo($gral_novedad_motivo->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GralNovedadMotivoExtendido') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

