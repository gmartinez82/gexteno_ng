
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_VTA_FACTURA')){ ?>
	<div class='relacion vta_factura' clase='vta_factura' padre='vta_tributo' padre_clase='VtaTributo' relacion='VtaFacturaVtaTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaFacturas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_facturas = $vta_tributo->getCantidadVtaFacturasXVtaFacturaVtaTributo();
                echo ($cantidad_vta_facturas > 0) ? '('.$cantidad_vta_facturas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_tributo_alta_relacion_vta_factura_vta_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_factura_txt_buscar' id='vta_factura_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_VTA_FACTURA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_factura/vta_factura_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_factura', 'vta_tributo', <?php Gral::_echo($vta_tributo->getId()) ?>, 'VtaTributo', 'VtaFacturaVtaTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_factura') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

