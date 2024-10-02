
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_NOTA_CREDITO')){ ?>
	<div class='relacion pde_nota_credito' clase='pde_nota_credito' padre='pde_tributo' padre_clase='PdeTributo' relacion='PdeNotaCreditoPdeTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeNotaCreditos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_nota_creditos = $pde_tributo->getCantidadPdeNotaCreditosXPdeNotaCreditoPdeTributo();
                echo ($cantidad_pde_nota_creditos > 0) ? '('.$cantidad_pde_nota_creditos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_tributo_alta_relacion_pde_nota_credito_pde_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_nota_credito_txt_buscar' id='pde_nota_credito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_credito/pde_nota_credito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_nota_credito', 'pde_tributo', <?php Gral::_echo($pde_tributo->getId()) ?>, 'PdeTributo', 'PdeNotaCreditoPdeTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_nota_credito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

