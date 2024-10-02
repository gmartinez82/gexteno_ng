
<?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_ALTA_VINCULO_PLN_JORNADA_TRAMO')){ ?>
<div class='vinculo pln_jornada_tramo' padre='pln_jornada' hijo='pln_jornada_tramo' padre_id='<?php echo $pln_jornada->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('PlnJornadaTramos') ?>
        <?php 
        $cantidad_pln_jornada_tramos = count($pln_jornada->getPlnJornadaTramos());
        echo ($cantidad_pln_jornada_tramos > 0) ? '('.$cantidad_pln_jornada_tramos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='pln_jornada_tramo_txt_buscar' id='pln_jornada_tramo_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('PLN_JORNADA_ALTA_VINCULO_PLN_JORNADA_TRAMO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pln_jornada_tramo/pln_jornada_tramo_alta.php?pln_jornada_id=<?php Gral::_echo($pln_jornada->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'pln_jornada', 'pln_jornada_tramo', <?php Gral::_echo($pln_jornada->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PlnJornadaTramo') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

