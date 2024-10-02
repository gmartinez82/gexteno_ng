
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_VTA_VENDEDOR')){ ?>
	<div class='relacion vta_vendedor' clase='vta_vendedor' padre='gral_centro_costo' padre_clase='GralCentroCosto' relacion='GralCentroCostoVtaVendedor'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaVendedors') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_vendedors = $gral_centro_costo->getCantidadVtaVendedorsXGralCentroCostoVtaVendedor();
                echo ($cantidad_vta_vendedors > 0) ? '('.$cantidad_vta_vendedors.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gral_centro_costo_alta_relacion_gral_centro_costo_vta_vendedor_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_vendedor_txt_buscar' id='vta_vendedor_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_VTA_VENDEDOR_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_vendedor/vta_vendedor_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_vendedor', 'gral_centro_costo', <?php Gral::_echo($gral_centro_costo->getId()) ?>, 'GralCentroCosto', 'GralCentroCostoVtaVendedor')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_vendedor') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

