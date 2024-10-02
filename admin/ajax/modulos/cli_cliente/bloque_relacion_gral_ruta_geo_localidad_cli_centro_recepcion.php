
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GEO_LOCALIDAD')){ ?>
	<div class='relacion geo_localidad' clase='geo_localidad' padre='cli_cliente' padre_clase='CliCliente' relacion='GralRutaGeoLocalidadCliCentroRecepcion'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GeoLocalidads') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                //$cantidad_geo_localidads = $cli_cliente->getCantidadGeoLocalidadsXGralRutaGeoLocalidadCliCentroRecepcion();
                echo ($cantidad_geo_localidads > 0) ? '('.$cantidad_geo_localidads.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_gral_ruta_geo_localidad_cli_centro_recepcion_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='geo_localidad_txt_buscar' id='geo_localidad_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GEO_LOCALIDAD_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_localidad/geo_localidad_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'geo_localidad', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'GralRutaGeoLocalidadCliCentroRecepcion')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('geo_localidad') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

