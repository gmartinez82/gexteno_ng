
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_TRIBUTO')){ ?>
	<div class='relacion vta_tributo' clase='vta_tributo' padre='vta_nota_debito' padre_clase='VtaNotaDebito' relacion='VtaNotaDebitoVtaTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaTributos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_tributos = $vta_nota_debito->getCantidadVtaTributosXVtaNotaDebitoVtaTributo();
                echo ($cantidad_vta_tributos > 0) ? '('.$cantidad_vta_tributos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_nota_debito_alta_relacion_vta_nota_debito_vta_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_tributo_txt_buscar' id='vta_tributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA_RELACION_VTA_TRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tributo/vta_tributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_tributo', 'vta_nota_debito', <?php Gral::_echo($vta_nota_debito->getId()) ?>, 'VtaNotaDebito', 'VtaNotaDebitoVtaTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_tributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

