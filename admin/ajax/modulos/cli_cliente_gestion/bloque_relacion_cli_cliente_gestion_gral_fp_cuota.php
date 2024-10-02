
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_FP_CUOTA')){ ?>
	<div class='relacion gral_fp_cuota' clase='gral_fp_cuota' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteGralFpCuota'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralFpCuotas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_fp_cuotas = $cli_cliente->getCantidadGralFpCuotasXCliClienteGralFpCuota();
                echo ($cantidad_gral_fp_cuotas > 0) ? '('.$cantidad_gral_fp_cuotas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_gral_fp_cuota_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_fp_cuota_txt_buscar' id='gral_fp_cuota_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_FP_CUOTA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_fp_cuota/gral_fp_cuota_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_fp_cuota', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteGralFpCuota')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_fp_cuota') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

