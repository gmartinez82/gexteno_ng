
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_VTA_COMPRADOR')){ ?>
	<div class='relacion vta_comprador' clase='vta_comprador' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteVtaComprador'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaCompradors') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_compradors = $cli_cliente->getCantidadVtaCompradorsXCliClienteVtaComprador();
                echo ($cantidad_vta_compradors > 0) ? '('.$cantidad_vta_compradors.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_vta_comprador_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_comprador_txt_buscar' id='vta_comprador_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_VTA_COMPRADOR_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_comprador/vta_comprador_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_comprador', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteVtaComprador')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_comprador') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

