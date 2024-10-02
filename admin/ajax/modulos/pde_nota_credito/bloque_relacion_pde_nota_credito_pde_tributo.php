
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_RELACION_PDE_TRIBUTO')){ ?>
	<div class='relacion pde_tributo' clase='pde_tributo' padre='pde_nota_credito' padre_clase='PdeNotaCredito' relacion='PdeNotaCreditoPdeTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeTributos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_tributos = $pde_nota_credito->getCantidadPdeTributosXPdeNotaCreditoPdeTributo();
                echo ($cantidad_pde_tributos > 0) ? '('.$cantidad_pde_tributos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_nota_credito_alta_relacion_pde_nota_credito_pde_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_tributo_txt_buscar' id='pde_tributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA_RELACION_PDE_TRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_tributo/pde_tributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_tributo', 'pde_nota_credito', <?php Gral::_echo($pde_nota_credito->getId()) ?>, 'PdeNotaCredito', 'PdeNotaCreditoPdeTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_tributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

