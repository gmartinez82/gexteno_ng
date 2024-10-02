
	<?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA_RELACION_VTA_REMITO')){ ?>
	<div class='relacion vta_remito' clase='vta_remito' padre='vta_hoja_ruta' padre_clase='VtaHojaRuta' relacion='VtaHojaRutaVtaRemito'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaRemitos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_remitos = $vta_hoja_ruta->getCantidadVtaRemitosXVtaHojaRutaVtaRemito();
                echo ($cantidad_vta_remitos > 0) ? '('.$cantidad_vta_remitos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_hoja_ruta_alta_relacion_vta_hoja_ruta_vta_remito_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_remito_txt_buscar' id='vta_remito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA_RELACION_VTA_REMITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_remito/vta_remito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_remito', 'vta_hoja_ruta', <?php Gral::_echo($vta_hoja_ruta->getId()) ?>, 'VtaHojaRuta', 'VtaHojaRutaVtaRemito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_remito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

