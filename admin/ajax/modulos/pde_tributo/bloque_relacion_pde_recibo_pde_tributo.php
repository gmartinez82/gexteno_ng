
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_RECIBO')){ ?>
	<div class='relacion pde_recibo' clase='pde_recibo' padre='pde_tributo' padre_clase='PdeTributo' relacion='PdeReciboPdeTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeRecibos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_recibos = $pde_tributo->getCantidadPdeRecibosXPdeReciboPdeTributo();
                echo ($cantidad_pde_recibos > 0) ? '('.$cantidad_pde_recibos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_tributo_alta_relacion_pde_recibo_pde_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_recibo_txt_buscar' id='pde_recibo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_RECIBO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_recibo/pde_recibo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_recibo', 'pde_tributo', <?php Gral::_echo($pde_tributo->getId()) ?>, 'PdeTributo', 'PdeReciboPdeTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_recibo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

