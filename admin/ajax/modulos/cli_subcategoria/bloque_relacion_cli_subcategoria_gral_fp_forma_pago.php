
	<?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA_RELACION_GRAL_FP_FORMA_PAGO')){ ?>
	<div class='relacion gral_fp_forma_pago' clase='gral_fp_forma_pago' padre='cli_subcategoria' padre_clase='CliSubcategoria' relacion='CliSubcategoriaGralFpFormaPago'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralFpFormaPagos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_fp_forma_pagos = $cli_subcategoria->getCantidadGralFpFormaPagosXCliSubcategoriaGralFpFormaPago();
                echo ($cantidad_gral_fp_forma_pagos > 0) ? '('.$cantidad_gral_fp_forma_pagos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_subcategoria_alta_relacion_cli_subcategoria_gral_fp_forma_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_fp_forma_pago_txt_buscar' id='gral_fp_forma_pago_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA_RELACION_GRAL_FP_FORMA_PAGO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_fp_forma_pago', 'cli_subcategoria', <?php Gral::_echo($cli_subcategoria->getId()) ?>, 'CliSubcategoria', 'CliSubcategoriaGralFpFormaPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_fp_forma_pago') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

