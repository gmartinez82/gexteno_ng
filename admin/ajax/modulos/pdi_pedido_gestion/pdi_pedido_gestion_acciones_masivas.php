<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_ACCIONES_MASIVAS')){ ?>
<div class='adm_botones_accion db_context' archivo='../admin/ajax/modulos/pdi_pedido_gestion/db_context_acciones_masivas.php' modulo_metodo_init="setInitPdiPedidos()">
    <?php Lang::_lang('Acciones Masivas') ?>
	<img class="icono" src="imgs/btn_flecha_abajo.png" width="18" alt="control" align="absmiddle" title="" />
</div>
<?php } ?>