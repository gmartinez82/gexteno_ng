
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $fnd_caja_movimiento->getId() ?>" modulo="fnd_caja_movimiento">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($fnd_caja_movimiento->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($fnd_caja_movimiento->getDescripcion()) ?>
    </div>
    <?php if (count($fnd_caja_movimiento->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($fnd_caja_movimiento->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="fnd_caja_origen">
            <?php Gral::_echo(($fnd_caja_movimiento->getFndCajaOrigen() != 'null') ? FndCaja::getOxId($fnd_caja_movimiento->getFndCajaOrigen())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fnd_caja_destino">
            <?php Gral::_echo(($fnd_caja_movimiento->getFndCajaDestino() != 'null') ? FndCaja::getOxId($fnd_caja_movimiento->getFndCajaDestino())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_tipo_movimiento_id <?php Gral::_echo($fnd_caja_movimiento->getFndCajaTipoMovimiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_caja_movimiento->getFndCajaTipoMovimiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="autorizado <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento->getAutorizado())->getCodigo()) ?> ">	

        <?php if($fnd_caja_movimiento->getAutorizado()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_caja_movimiento->getAutorizado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_caja_movimiento->getAutorizado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_caja_movimiento->getAutorizado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="autorizado_el">
            <?php Gral::_echo(Gral::getFechaToWeb($fnd_caja_movimiento->getAutorizadoEl())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="autorizado_por">
            <?php Gral::_echo(($fnd_caja_movimiento->getAutorizadoPor() != 'null') ? UsUsuario::getOxId($fnd_caja_movimiento->getAutorizadoPor())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_movimiento_tipo_estado_id <?php Gral::_echo($fnd_caja_movimiento->getFndCajaMovimientoTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_caja_movimiento->getFndCajaMovimientoTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($fnd_caja_movimiento->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='fnd_caja_movimiento_alta.php?id=<?php Gral::_echo($fnd_caja_movimiento->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($fnd_caja_movimiento->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($fnd_caja_movimiento->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/fnd_caja_movimiento/fnd_caja_movimiento_db_context_acciones.php?id=<?php Gral::_echo($fnd_caja_movimiento->getId()) ?>' modulo_metodo_init="setInitFndCajaMovimiento()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


