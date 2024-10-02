
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO')){ ?>
	<div class='relacion vta_nota_debito' clase='vta_nota_debito' padre='vta_nota_credito' padre_clase='VtaNotaCredito' relacion='VtaNotaCreditoVtaNotaDebito'>

	<div class='titulo'>
            <?php Lang::_lang('VtaNotaDebitos') ?>
            <?php 
            $cantidad_vta_nota_debitos = count($vta_nota_credito->getVtaNotaDebitosXVtaNotaCreditoVtaNotaDebito());
            echo ($cantidad_vta_nota_debitos > 0) ? '('.$cantidad_vta_nota_debitos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='vta_nota_debito_txt_buscar' id='vta_nota_debito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_debito/vta_nota_debito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_nota_debito', 'vta_nota_credito', <?php Gral::_echo($vta_nota_credito->getId()) ?>, 'VtaNotaCredito', 'vta_nota_credito_vta_nota_debito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaNotaDebito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

