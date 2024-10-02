
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_ACTIVIDAD')){ ?>
	<div class='relacion gral_actividad' clase='gral_actividad' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteGralActividad'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralActividads') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_actividads = $cli_cliente->getCantidadGralActividadsXCliClienteGralActividad();
                echo ($cantidad_gral_actividads > 0) ? '('.$cantidad_gral_actividads.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_gral_actividad_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_actividad_txt_buscar' id='gral_actividad_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_ACTIVIDAD_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_actividad/gral_actividad_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_actividad', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteGralActividad')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_actividad') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

