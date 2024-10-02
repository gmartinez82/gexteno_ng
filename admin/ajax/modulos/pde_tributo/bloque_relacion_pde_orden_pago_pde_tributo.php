
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_ORDEN_PAGO')){ ?>
	<div class='relacion pde_orden_pago' clase='pde_orden_pago' padre='pde_tributo' padre_clase='PdeTributo' relacion='PdeOrdenPagoPdeTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeOrdenPagos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_orden_pagos = $pde_tributo->getCantidadPdeOrdenPagosXPdeOrdenPagoPdeTributo();
                echo ($cantidad_pde_orden_pagos > 0) ? '('.$cantidad_pde_orden_pagos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_tributo_alta_relacion_pde_orden_pago_pde_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_orden_pago_txt_buscar' id='pde_orden_pago_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA_RELACION_PDE_ORDEN_PAGO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_orden_pago/pde_orden_pago_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_orden_pago', 'pde_tributo', <?php Gral::_echo($pde_tributo->getId()) ?>, 'PdeTributo', 'PdeOrdenPagoPdeTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_orden_pago') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

