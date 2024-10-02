
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_insumo_pan_panol->getId() ?>" modulo="ins_insumo_pan_panol">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ins_insumo_pan_panol->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_panol_id <?php Gral::_echo($ins_insumo_pan_panol->getPanPanol()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanPanol()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_ubi_piso_id <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPiso()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPiso()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_ubi_pasillo_id <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPasillo()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPasillo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_ubi_estante_id <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiEstante()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiEstante()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_ubi_altura_id <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiAltura()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiAltura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_ubi_casillero_id <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCasillero()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCasillero()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pan_ubi_celda_id <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCelda()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCelda()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_clasificacion_id <?php Gral::_echo($ins_insumo_pan_panol->getInsClasificacion()->getCodigo()) ?> ">	

        <?php Gral::_echo($ins_insumo_pan_panol->getInsClasificacion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ins_insumo_pan_panol_alta.php?id=<?php Gral::_echo($ins_insumo_pan_panol->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ins_insumo_pan_panol->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ins_insumo_pan_panol/ins_insumo_pan_panol_db_context_acciones.php?id=<?php Gral::_echo($ins_insumo_pan_panol->getId()) ?>' modulo_metodo_init="setInitInsInsumoPanPanol()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


