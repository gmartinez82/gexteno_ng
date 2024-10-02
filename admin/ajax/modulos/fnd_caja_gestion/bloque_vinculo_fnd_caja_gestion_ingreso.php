
<?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_VINCULO_FND_CAJA_INGRESO')){ ?>
<div class='vinculo fnd_caja_ingreso' padre='fnd_caja' hijo='fnd_caja_ingreso' padre_id='<?php echo $fnd_caja->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('FndCajaIngresos') ?>
		 <?php 
		 $cantidad_fnd_caja_ingresos = count($fnd_caja->getFndCajaIngresos());
		 echo ($cantidad_fnd_caja_ingresos > 0) ? '('.$cantidad_fnd_caja_ingresos.')' : '' ;
		 ?>			 
    </div>

    <div class='buscador'>
        <input name='fnd_caja_ingreso_txt_buscar' id='fnd_caja_ingreso_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

		<?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA_VINCULO_FND_CAJA_INGRESO_ACCIONES_ALTA')){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_caja_ingreso/fnd_caja_ingreso_alta.php?fnd_caja_id=<?php Gral::_echo($fnd_caja->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'fnd_caja', 'fnd_caja_ingreso', <?php Gral::_echo($fnd_caja->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('FndCajaIngreso') ?>'>
        	<img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
		</div>
		<?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

