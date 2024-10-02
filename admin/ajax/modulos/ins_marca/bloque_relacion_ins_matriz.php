
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_INS_MATRIZ')){ ?>
	<div class='relacion ins_matriz' clase='ins_matriz' padre='ins_marca' padre_clase='InsMarca' relacion='InsMatriz'>

	<div class='titulo'>
		 <?php Lang::_lang('InsMatrizs') ?>
		 <?php 
		 $cantidad_ins_matrizs = count($ins_marca->getInsMatrizsXInsMatriz());
		 echo ($cantidad_ins_matrizs > 0) ? '('.$cantidad_ins_matrizs.')' : '' ;
		 ?>			 
	</div>

	<div class='buscador'>
		<input name='ins_matriz_txt_buscar' id='ins_matriz_txt_buscar' type='text' />
		<img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

		<?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_INS_MATRIZ_ACCIONES')){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/ins_matriz/ins_matriz_alta.php" contenedor="div_modal" ancho="600" alto="500" tipo="formulario" post="buscarSetResultados(1, '', 'ins_matriz', 'ins_marca', <?php Gral::_echo($ins_marca->getId()) ?>, 'InsMarca', 'ins_matriz')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsMatriz') ?>'>
			<img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
		</div>
		<?php } ?>
		
	</div>

	<div class='datos'>
		&nbsp;
	</div>

</div>
<?php } ?>

