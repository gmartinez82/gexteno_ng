
<?php if(UsCredencial::getEsAcreditado('PLN_TURNO_ALTA_VINCULO_PLN_TURNO_NOVEDAD')){ ?>
<div class='vinculo pln_turno_novedad' padre='pln_turno' hijo='pln_turno_novedad' padre_id='<?php echo $pln_turno->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PlnTurnoNovedads') ?>
        <?php 
        $cantidad_pln_turno_novedads = count($pln_turno->getPlnTurnoNovedads());
        echo ($cantidad_pln_turno_novedads > 0) ? '('.$cantidad_pln_turno_novedads.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='pln_turno_novedad_txt_buscar' id='pln_turno_novedad_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_ALTA_VINCULO_PLN_TURNO_NOVEDAD_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pln_turno_novedad/pln_turno_novedad_alta.php?pln_turno_id=<?php Gral::_echo($pln_turno->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'pln_turno', 'pln_turno_novedad', <?php Gral::_echo($pln_turno->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

