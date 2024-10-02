
	<?php if(UsCredencial::getEsAcreditado('CLI_RUBRO_ALTA_RELACION_CLI_CLIENTE')){ ?>
	<div class='relacion cli_cliente' clase='cli_cliente' padre='cli_rubro' padre_clase='CliRubro' relacion='CliClienteCliRubro'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('CliClientes') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_cli_clientes = $cli_rubro->getCantidadCliClientesXCliClienteCliRubro();
                echo ($cantidad_cli_clientes > 0) ? '('.$cantidad_cli_clientes.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_rubro_alta_relacion_cli_cliente_cli_rubro_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='cli_cliente_txt_buscar' id='cli_cliente_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_RUBRO_ALTA_RELACION_CLI_CLIENTE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente/cli_cliente_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cli_cliente', 'cli_rubro', <?php Gral::_echo($cli_rubro->getId()) ?>, 'CliRubro', 'CliClienteCliRubro')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cli_cliente') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

