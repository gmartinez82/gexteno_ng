
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_INS_INSUMO')){ ?>
	<div class='relacion ins_insumo' clase='ins_insumo' padre='pan_panol' padre_clase='PanPanol' relacion='InsInsumoPanPanol'>

	<div class='titulo'>
            <?php Lang::_lang('InsInsumos') ?>
            <?php 
            $cantidad_ins_insumos = $pan_panol->getCantidadInsInsumosXInsInsumoPanPanol();
            echo ($cantidad_ins_insumos > 0) ? '('.$cantidad_ins_insumos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='ins_insumo_txt_buscar' id='ins_insumo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_INS_INSUMO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'pan_panol', <?php Gral::_echo($pan_panol->getId()) ?>, 'PanPanol', 'ins_insumo_pan_panol')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

