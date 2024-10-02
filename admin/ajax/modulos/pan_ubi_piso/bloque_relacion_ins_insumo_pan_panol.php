
	<?php if(UsCredencial::getEsAcreditado('PAN_UBI_PISO_ALTA_RELACION_PAN_PANOL')){ ?>
	<div class='relacion pan_panol' clase='pan_panol' padre='pan_ubi_piso' padre_clase='PanUbiPiso' relacion='InsInsumoPanPanol'>

	<div class='titulo'>
            <?php Lang::_lang('PanPanols') ?>
            <?php 
            $cantidad_pan_panols = $pan_ubi_piso->getCantidadPanPanolsXInsInsumoPanPanol();
            echo ($cantidad_pan_panols > 0) ? '('.$cantidad_pan_panols.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='pan_panol_txt_buscar' id='pan_panol_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PAN_UBI_PISO_ALTA_RELACION_PAN_PANOL_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pan_panol/pan_panol_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pan_panol', 'pan_ubi_piso', <?php Gral::_echo($pan_ubi_piso->getId()) ?>, 'PanUbiPiso', 'ins_insumo_pan_panol')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pan_panol') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

