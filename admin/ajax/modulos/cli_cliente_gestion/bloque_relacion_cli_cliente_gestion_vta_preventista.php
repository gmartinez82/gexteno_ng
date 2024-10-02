
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_VTA_PREVENTISTA')){ ?>
	<div class='relacion vta_preventista' clase='vta_preventista' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteVtaPreventista'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaPreventistas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_preventistas = $cli_cliente->getCantidadVtaPreventistasXCliClienteVtaPreventista();
                echo ($cantidad_vta_preventistas > 0) ? '('.$cantidad_vta_preventistas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_vta_preventista_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_preventista_txt_buscar' id='vta_preventista_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_VTA_PREVENTISTA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_preventista/vta_preventista_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_preventista', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteVtaPreventista')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_preventista') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

