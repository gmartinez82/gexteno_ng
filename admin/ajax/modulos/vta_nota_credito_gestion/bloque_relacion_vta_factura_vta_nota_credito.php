
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA')){ ?>
	<div class='relacion vta_factura' clase='vta_factura' padre='vta_nota_credito' padre_clase='VtaNotaCredito' relacion='VtaFacturaVtaNotaCredito'>

	<div class='titulo'>
            <?php Lang::_lang('VtaFacturas') ?>
            <?php 
            $cantidad_vta_facturas = count($vta_nota_credito->getVtaFacturasXVtaFacturaVtaNotaCredito());
            echo ($cantidad_vta_facturas > 0) ? '('.$cantidad_vta_facturas.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='vta_factura_txt_buscar' id='vta_factura_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_factura/vta_factura_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_factura', 'vta_nota_credito', <?php Gral::_echo($vta_nota_credito->getId()) ?>, 'VtaNotaCredito', 'vta_factura_vta_nota_credito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaFactura') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

