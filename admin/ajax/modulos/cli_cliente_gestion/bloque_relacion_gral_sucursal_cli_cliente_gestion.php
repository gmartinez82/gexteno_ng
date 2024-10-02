
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_SUCURSAL')){ ?>
	<div class='relacion gral_sucursal' clase='gral_sucursal' padre='cli_cliente' padre_clase='CliCliente' relacion='GralSucursalCliCliente'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralSucursals') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_sucursals = $cli_cliente->getCantidadGralSucursalsXGralSucursalCliCliente();
                echo ($cantidad_gral_sucursals > 0) ? '('.$cantidad_gral_sucursals.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_gral_sucursal_cli_cliente_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_sucursal_txt_buscar' id='gral_sucursal_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_SUCURSAL_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_sucursal/gral_sucursal_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_sucursal', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'GralSucursalCliCliente')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_sucursal') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

