
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId() ?>" modulo="fnd_chq_tipo_emisor_fnd_chq_tipo_estado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getDescripcion()) ?>
    </div>
    <?php if (count($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_tipo_emisor_id <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisor()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_tipo_estado_id <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fnd_chq_tipo_estado_posible">
            <?php Gral::_echo(($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible() != 'null') ? FndChqTipoEstado::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cambio_automatico <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico())->getCodigo()) ?> ">	

        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cambio_manual <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual())->getCodigo()) ?> ">	

        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="predeterminado <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado())->getCodigo()) ?> ">	

        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cambio_otro_comprobante <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante())->getCodigo()) ?> ">	

        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cambio_simultaneo <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo())->getCodigo()) ?> ">	

        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php?id=<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/fnd_chq_tipo_emisor_fnd_chq_tipo_estado/fnd_chq_tipo_emisor_fnd_chq_tipo_estado_db_context_acciones.php?id=<?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?>' modulo_metodo_init="setInitFndChqTipoEmisorFndChqTipoEstado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


