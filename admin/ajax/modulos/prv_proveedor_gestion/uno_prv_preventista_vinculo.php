
    <div class='list'>
	
	<label class='descripcion'><strong><?php Gral::_echo($prv_preventista->getDescripcion()) ?></strong></label>
	
	<div class='link'>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_PREVENTISTA_ACCIONES_EDITAR')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_preventista/prv_preventista_alta.php?id=<?php Gral::_echo($prv_preventista->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshVinculoUno(<?php Gral::_echo($prv_preventista->getId()) ?>, 'prv_proveedor', 'prv_preventista', <?php Gral::_echo($o_padre->getId()) ?>)" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvPreventista') ?>">
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </div>
            <?php } ?>

            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_VINCULO_PRV_PREVENTISTA_ACCIONES_ESTADO')){ ?>
            <div class='boton estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($prv_preventista->getEstado())  ?>.gif' width='18' border='0' />
            </div>
            <?php } ?>

	</div>
		
        <div class='segunda'>
        
        </div>
	
    </div>
<script>
setInit();
</script>

