
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_PDE_CENTRO_RECEPCION')){ ?>
	<div class='relacion pde_centro_recepcion' clase='pde_centro_recepcion' padre='pan_panol' padre_clase='PanPanol' relacion='PdeCentroRecepcionPanPanol'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeCentroRecepcions') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_centro_recepcions = $pan_panol->getCantidadPdeCentroRecepcionsXPdeCentroRecepcionPanPanol();
                echo ($cantidad_pde_centro_recepcions > 0) ? '('.$cantidad_pde_centro_recepcions.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pan_panol_alta_relacion_pde_centro_recepcion_pan_panol_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_centro_recepcion_txt_buscar' id='pde_centro_recepcion_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_PDE_CENTRO_RECEPCION_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_centro_recepcion/pde_centro_recepcion_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_centro_recepcion', 'pan_panol', <?php Gral::_echo($pan_panol->getId()) ?>, 'PanPanol', 'PdeCentroRecepcionPanPanol')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_centro_recepcion') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

