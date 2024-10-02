
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO')){ ?>
	<div class='relacion pde_nota_debito' clase='pde_nota_debito' padre='pde_nota_credito' padre_clase='PdeNotaCredito' relacion='PdeNotaCreditoPdeNotaDebito'>

	<div class='titulo'>
            <?php Lang::_lang('PdeNotaDebitos') ?>
            <?php 
            $cantidad_pde_nota_debitos = count($pde_nota_credito->getPdeNotaDebitosXPdeNotaCreditoPdeNotaDebito());
            echo ($cantidad_pde_nota_debitos > 0) ? '('.$cantidad_pde_nota_debitos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='pde_nota_debito_txt_buscar' id='pde_nota_debito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_nota_debito/pde_nota_debito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_nota_debito', 'pde_nota_credito', <?php Gral::_echo($pde_nota_credito->getId()) ?>, 'PdeNotaCredito', 'pde_nota_credito_pde_nota_debito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('PdeNotaDebito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

