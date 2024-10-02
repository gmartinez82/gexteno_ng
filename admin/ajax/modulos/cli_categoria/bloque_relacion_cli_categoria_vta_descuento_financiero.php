
	<?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ALTA_RELACION_VTA_DESCUENTO_FINANCIERO')){ ?>
	<div class='relacion vta_descuento_financiero' clase='vta_descuento_financiero' padre='cli_categoria' padre_clase='CliCategoria' relacion='CliCategoriaVtaDescuentoFinanciero'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaDescuentoFinancieros') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_descuento_financieros = $cli_categoria->getCantidadVtaDescuentoFinancierosXCliCategoriaVtaDescuentoFinanciero();
                echo ($cantidad_vta_descuento_financieros > 0) ? '('.$cantidad_vta_descuento_financieros.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_categoria_alta_relacion_cli_categoria_vta_descuento_financiero_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_descuento_financiero_txt_buscar' id='vta_descuento_financiero_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ALTA_RELACION_VTA_DESCUENTO_FINANCIERO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_descuento_financiero/vta_descuento_financiero_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_descuento_financiero', 'cli_categoria', <?php Gral::_echo($cli_categoria->getId()) ?>, 'CliCategoria', 'CliCategoriaVtaDescuentoFinanciero')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_descuento_financiero') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

