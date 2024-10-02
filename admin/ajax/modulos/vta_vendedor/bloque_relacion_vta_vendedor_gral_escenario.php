
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_RELACION_GRAL_ESCENARIO')){ ?>
	<div class='relacion gral_escenario' clase='gral_escenario' padre='vta_vendedor' padre_clase='VtaVendedor' relacion='VtaVendedorGralEscenario'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralEscenarios') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_escenarios = $vta_vendedor->getCantidadGralEscenariosXVtaVendedorGralEscenario();
                echo ($cantidad_gral_escenarios > 0) ? '('.$cantidad_gral_escenarios.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_vendedor_alta_relacion_vta_vendedor_gral_escenario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_escenario_txt_buscar' id='gral_escenario_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_RELACION_GRAL_ESCENARIO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_escenario/gral_escenario_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_escenario', 'vta_vendedor', <?php Gral::_echo($vta_vendedor->getId()) ?>, 'VtaVendedor', 'VtaVendedorGralEscenario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_escenario') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

