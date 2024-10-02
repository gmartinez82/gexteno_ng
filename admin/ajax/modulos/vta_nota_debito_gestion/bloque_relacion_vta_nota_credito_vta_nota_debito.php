
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_NOTA_CREDITO')){ ?>
	<div class='relacion vta_nota_credito' clase='vta_nota_credito' padre='vta_nota_debito' padre_clase='VtaNotaDebito' relacion='VtaNotaCreditoVtaNotaDebito'>

	<div class='titulo'>
            <?php Lang::_lang('VtaNotaCreditos') ?>
            <?php 
            $cantidad_vta_nota_creditos = count($vta_nota_debito->getVtaNotaCreditosXVtaNotaCreditoVtaNotaDebito());
            echo ($cantidad_vta_nota_creditos > 0) ? '('.$cantidad_vta_nota_creditos.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='vta_nota_credito_txt_buscar' id='vta_nota_credito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_credito/vta_nota_credito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_nota_credito', 'vta_nota_debito', <?php Gral::_echo($vta_nota_debito->getId()) ?>, 'VtaNotaDebito', 'vta_nota_credito_vta_nota_debito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('VtaNotaCredito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

