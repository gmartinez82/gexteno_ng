
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_NOTA_CREDITO')){ ?>
	<div class='relacion pde_nota_credito' clase='pde_nota_credito' padre='pde_nota_debito' padre_clase='PdeNotaDebito' relacion='PdeNotaCreditoPdeNotaDebito'>

	<div class='titulo'>
            <?php Lang::_lang('PdeNotaCreditos') ?>
            <?php 
            $cantidad_pde_nota_creditos = count($pde_nota_debito->getPdeNotaCreditosXPdeNotaCreditoPdeNotaDebito());
            echo ($cantidad_pde_nota_creditos > 0) ? '('.$cantidad_pde_nota_creditos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='pde_nota_credito_txt_buscar' id='pde_nota_credito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_credito/pde_nota_credito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_nota_credito', 'pde_nota_debito', <?php Gral::_echo($pde_nota_debito->getId()) ?>, 'PdeNotaDebito', 'pde_nota_credito_pde_nota_debito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeNotaCredito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

