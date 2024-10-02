
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_MARCA')){ ?>
	<div class='relacion ins_marca' clase='ins_marca' padre='ins_insumo' padre_clase='InsInsumo' relacion='InsInsumoInsMarca'>

	<div class='titulo'>
            <?php Lang::_lang('InsMarcas') ?>
            <?php 
            $cantidad_ins_marcas = count($ins_insumo->getInsMarcasXInsInsumoInsMarca());
            echo ($cantidad_ins_marcas > 0) ? '('.$cantidad_ins_marcas.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='ins_marca_txt_buscar' id='ins_marca_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_MARCA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_marca/ins_marca_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_marca', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'ins_insumo_ins_marca')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsMarca') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

