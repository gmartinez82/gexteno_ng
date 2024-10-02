
	<?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ALTA_RELACION_GRAL_FP_FORMA_PAGO')){ ?>
	<div class='relacion gral_fp_forma_pago' clase='gral_fp_forma_pago' padre='cli_categoria' padre_clase='CliCategoria' relacion='CliCategoriaGralFpFormaPago'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralFpFormaPagos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_fp_forma_pagos = $cli_categoria->getCantidadGralFpFormaPagosXCliCategoriaGralFpFormaPago();
                echo ($cantidad_gral_fp_forma_pagos > 0) ? '('.$cantidad_gral_fp_forma_pagos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_categoria_alta_relacion_cli_categoria_gral_fp_forma_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_fp_forma_pago_txt_buscar' id='gral_fp_forma_pago_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CATEGORIA_ALTA_RELACION_GRAL_FP_FORMA_PAGO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_fp_forma_pago', 'cli_categoria', <?php Gral::_echo($cli_categoria->getId()) ?>, 'CliCategoria', 'CliCategoriaGralFpFormaPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_fp_forma_pago') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

