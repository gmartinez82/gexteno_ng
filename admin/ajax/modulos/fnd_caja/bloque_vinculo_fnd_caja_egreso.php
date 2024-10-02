
<?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_VINCULO_FND_CAJA_EGRESO')){ ?>
<div class='vinculo fnd_caja_egreso' padre='fnd_caja' hijo='fnd_caja_egreso' padre_id='<?php echo $fnd_caja->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('FndCajaEgresos') ?>
        <?php 
        $cantidad_fnd_caja_egresos = count($fnd_caja->getFndCajaEgresos());
        echo ($cantidad_fnd_caja_egresos > 0) ? '('.$cantidad_fnd_caja_egresos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='fnd_caja_egreso_txt_buscar' id='fnd_caja_egreso_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_VINCULO_FND_CAJA_EGRESO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_caja_egreso/fnd_caja_egreso_alta.php?fnd_caja_id=<?php Gral::_echo($fnd_caja->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'fnd_caja', 'fnd_caja_egreso', <?php Gral::_echo($fnd_caja->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('FndCajaEgreso') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

