
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ALTA_RELACION_VTA_PRESUPUESTO')){ ?>
	<div class='relacion vta_presupuesto' clase='vta_presupuesto' padre='cli_cliente_tienda' padre_clase='CliClienteTienda' relacion='VtaPresupuestoCliClienteTienda'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaPresupuestos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_presupuestos = $cli_cliente_tienda->getCantidadVtaPresupuestosXVtaPresupuestoCliClienteTienda();
                echo ($cantidad_vta_presupuestos > 0) ? '('.$cantidad_vta_presupuestos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_tienda_alta_relacion_vta_presupuesto_cli_cliente_tienda_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_presupuesto_txt_buscar' id='vta_presupuesto_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ALTA_RELACION_VTA_PRESUPUESTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_presupuesto/vta_presupuesto_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_presupuesto', 'cli_cliente_tienda', <?php Gral::_echo($cli_cliente_tienda->getId()) ?>, 'CliClienteTienda', 'VtaPresupuestoCliClienteTienda')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_presupuesto') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

