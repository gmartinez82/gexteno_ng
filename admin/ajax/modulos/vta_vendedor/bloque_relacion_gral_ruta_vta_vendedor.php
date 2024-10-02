
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_RELACION_GRAL_RUTA')){ ?>
	<div class='relacion gral_ruta' clase='gral_ruta' padre='vta_vendedor' padre_clase='VtaVendedor' relacion='GralRutaVtaVendedor'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralRutas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_rutas = $vta_vendedor->getCantidadGralRutasXGralRutaVtaVendedor();
                echo ($cantidad_gral_rutas > 0) ? '('.$cantidad_gral_rutas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_vendedor_alta_relacion_gral_ruta_vta_vendedor_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_ruta_txt_buscar' id='gral_ruta_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_RELACION_GRAL_RUTA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_ruta/gral_ruta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_ruta', 'vta_vendedor', <?php Gral::_echo($vta_vendedor->getId()) ?>, 'VtaVendedor', 'GralRutaVtaVendedor')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_ruta') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

