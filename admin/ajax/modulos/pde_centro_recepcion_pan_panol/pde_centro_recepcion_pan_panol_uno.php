
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_centro_recepcion_pan_panol->getId() ?>" modulo="pde_centro_recepcion_pan_panol">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_centro_recepcion_id <?php Gral::_echo($pde_centro_recepcion_pan_panol->getPdeCentroRecepcion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_centro_recepcion_pan_panol->getPdeCentroRecepcion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_panol_id <?php Gral::_echo($pde_centro_recepcion_pan_panol->getPanPanol()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_centro_recepcion_pan_panol->getPanPanol()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_PAN_PANOL_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_centro_recepcion_pan_panol_alta.php?id=<?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_PAN_PANOL_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_PAN_PANOL_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_centro_recepcion_pan_panol/pde_centro_recepcion_pan_panol_db_context_acciones.php?id=<?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?>' modulo_metodo_init="setInitPdeCentroRecepcionPanPanol()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


