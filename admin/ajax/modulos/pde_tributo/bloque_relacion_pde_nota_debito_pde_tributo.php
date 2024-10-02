
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_NOTA_DEBITO')){ ?>
	<div class='relacion pde_nota_debito' clase='pde_nota_debito' padre='pde_tributo' padre_clase='PdeTributo' relacion='PdeNotaDebitoPdeTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeNotaDebitos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_nota_debitos = $pde_tributo->getCantidadPdeNotaDebitosXPdeNotaDebitoPdeTributo();
                echo ($cantidad_pde_nota_debitos > 0) ? '('.$cantidad_pde_nota_debitos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_tributo_alta_relacion_pde_nota_debito_pde_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_nota_debito_txt_buscar' id='pde_nota_debito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_NOTA_DEBITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_debito/pde_nota_debito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_nota_debito', 'pde_tributo', <?php Gral::_echo($pde_tributo->getId()) ?>, 'PdeTributo', 'PdeNotaDebitoPdeTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_nota_debito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

