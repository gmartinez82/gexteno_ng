
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO')){ ?>
	<div class='relacion pde_factura_pde_tributo' clase='pde_factura_pde_tributo' padre='pde_nota_credito' padre_clase='PdeNotaCredito' relacion='PdeNotaCreditoPdeFacturaPdeTributo'>

	<div class='titulo'>
            <?php Lang::_lang('PdeFacturaPdeTributos') ?>
            <?php 
            $cantidad_pde_factura_pde_tributos = count($pde_nota_credito->getPdeFacturaPdeTributosXPdeNotaCreditoPdeFacturaPdeTributo());
            echo ($cantidad_pde_factura_pde_tributos > 0) ? '('.$cantidad_pde_factura_pde_tributos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='pde_factura_pde_tributo_txt_buscar' id='pde_factura_pde_tributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_FACTURA_VTA_TRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_factura_pde_tributo/pde_factura_pde_tributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_factura_pde_tributo', 'pde_nota_credito', <?php Gral::_echo($pde_nota_credito->getId()) ?>, 'PdeNotaCredito', 'pde_nota_credito_pde_factura_pde_tributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

