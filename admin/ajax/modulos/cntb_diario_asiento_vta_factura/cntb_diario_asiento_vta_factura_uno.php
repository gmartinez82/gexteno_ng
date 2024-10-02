
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cntb_diario_asiento_vta_factura->getId() ?>" modulo="cntb_diario_asiento_vta_factura">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_periodo_id <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCntbPeriodo()->getCodigo()) ?> ">	

        <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCntbPeriodo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_diario_asiento_id <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCntbDiarioAsiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCntbDiarioAsiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_factura_id <?php Gral::_echo($cntb_diario_asiento_vta_factura->getVtaFactura()->getCodigo()) ?> ">	

        <?php Gral::_echo($cntb_diario_asiento_vta_factura->getVtaFactura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_FACTURA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='cntb_diario_asiento_vta_factura_alta.php?id=<?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_FACTURA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_FACTURA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($cntb_diario_asiento_vta_factura->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_FACTURA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cntb_diario_asiento_vta_factura/cntb_diario_asiento_vta_factura_db_context_acciones.php?id=<?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?>' modulo_metodo_init="setInitCntbDiarioAsientoVtaFactura()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


