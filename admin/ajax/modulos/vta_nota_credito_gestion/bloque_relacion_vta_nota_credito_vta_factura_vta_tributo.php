
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO')){ ?>
	<div class='relacion vta_factura_vta_tributo' clase='vta_factura_vta_tributo' padre='vta_nota_credito' padre_clase='VtaNotaCredito' relacion='VtaNotaCreditoVtaFacturaVtaTributo'>

	<div class='titulo'>
            <?php Lang::_lang('VtaFacturaVtaTributos') ?>
            <?php 
            $cantidad_vta_factura_vta_tributos = count($vta_nota_credito->getVtaFacturaVtaTributosXVtaNotaCreditoVtaFacturaVtaTributo());
            echo ($cantidad_vta_factura_vta_tributos > 0) ? '('.$cantidad_vta_factura_vta_tributos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='vta_factura_vta_tributo_txt_buscar' id='vta_factura_vta_tributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_factura_vta_tributo/vta_factura_vta_tributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_factura_vta_tributo', 'vta_nota_credito', <?php Gral::_echo($vta_nota_credito->getId()) ?>, 'VtaNotaCredito', 'vta_nota_credito_vta_factura_vta_tributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

