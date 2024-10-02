
	<?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA_RELACION_VTA_REMITO_AJUSTE')){ ?>
	<div class='relacion vta_remito_ajuste' clase='vta_remito_ajuste' padre='vta_hoja_ruta' padre_clase='VtaHojaRuta' relacion='VtaHojaRutaVtaRemitoAjuste'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaRemitoAjustes') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_remito_ajustes = $vta_hoja_ruta->getCantidadVtaRemitoAjustesXVtaHojaRutaVtaRemitoAjuste();
                echo ($cantidad_vta_remito_ajustes > 0) ? '('.$cantidad_vta_remito_ajustes.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_hoja_ruta_alta_relacion_vta_hoja_ruta_vta_remito_ajuste_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_remito_ajuste_txt_buscar' id='vta_remito_ajuste_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA_RELACION_VTA_REMITO_AJUSTE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_remito_ajuste/vta_remito_ajuste_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_remito_ajuste', 'vta_hoja_ruta', <?php Gral::_echo($vta_hoja_ruta->getId()) ?>, 'VtaHojaRuta', 'VtaHojaRutaVtaRemitoAjuste')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_remito_ajuste') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

