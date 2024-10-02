
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_FACTURA')){ ?>
	<div class='relacion pde_factura' clase='pde_factura' padre='pde_tributo' padre_clase='PdeTributo' relacion='PdeFacturaPdeTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeFacturas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_facturas = $pde_tributo->getCantidadPdeFacturasXPdeFacturaPdeTributo();
                echo ($cantidad_pde_facturas > 0) ? '('.$cantidad_pde_facturas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_tributo_alta_relacion_pde_factura_pde_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_factura_txt_buscar' id='pde_factura_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_FACTURA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_factura/pde_factura_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_factura', 'pde_tributo', <?php Gral::_echo($pde_tributo->getId()) ?>, 'PdeTributo', 'PdeFacturaPdeTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_factura') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

