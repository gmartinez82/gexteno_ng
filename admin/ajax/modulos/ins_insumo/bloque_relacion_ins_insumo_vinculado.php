
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO')){ ?>
	<div class='relacion ins_insumo' clase='ins_insumo' padre='ins_insumo' padre_clase='InsInsumo' relacion='InsInsumoVinculado'>

	<div class='titulo'>
            <?php Lang::_lang('InsInsumos') ?>
            <?php 
            $cantidad_ins_insumos = count($ins_insumo->getInsInsumos());
            echo ($cantidad_ins_insumos > 0) ? '('.$cantidad_ins_insumos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='ins_insumo_txt_buscar' id='ins_insumo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'ins_insumo_vinculado')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('InsInsumo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

