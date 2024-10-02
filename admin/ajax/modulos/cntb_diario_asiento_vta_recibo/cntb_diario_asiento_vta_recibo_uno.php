
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cntb_diario_asiento_vta_recibo->getId() ?>" modulo="cntb_diario_asiento_vta_recibo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_periodo_id <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCntbPeriodo()->getCodigo()) ?> ">	

        <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCntbPeriodo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_diario_asiento_id <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCntbDiarioAsiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCntbDiarioAsiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_recibo_id <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getVtaRecibo()->getCodigo()) ?> ">	

        <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getVtaRecibo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='cntb_diario_asiento_vta_recibo_alta.php?id=<?php Gral::_echo($cntb_diario_asiento_vta_recibo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($cntb_diario_asiento_vta_recibo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($cntb_diario_asiento_vta_recibo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cntb_diario_asiento_vta_recibo/cntb_diario_asiento_vta_recibo_db_context_acciones.php?id=<?php Gral::_echo($cntb_diario_asiento_vta_recibo->getId()) ?>' modulo_metodo_init="setInitCntbDiarioAsientoVtaRecibo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


