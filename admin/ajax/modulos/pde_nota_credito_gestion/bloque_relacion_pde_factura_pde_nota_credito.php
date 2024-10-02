
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA')){ ?>
	<div class='relacion pde_factura' clase='pde_factura' padre='pde_nota_credito' padre_clase='PdeNotaCredito' relacion='PdeFacturaPdeNotaCredito'>

	<div class='titulo'>
            <?php Lang::_lang('PdeFacturas') ?>
            <?php 
            $cantidad_pde_facturas = count($pde_nota_credito->getPdeFacturasXPdeFacturaPdeNotaCredito());
            echo ($cantidad_pde_facturas > 0) ? '('.$cantidad_pde_facturas.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='pde_factura_txt_buscar' id='pde_factura_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_factura/pde_factura_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_factura', 'pde_nota_credito', <?php Gral::_echo($pde_nota_credito->getId()) ?>, 'PdeNotaCredito', 'pde_factura_pde_nota_credito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeFactura') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

