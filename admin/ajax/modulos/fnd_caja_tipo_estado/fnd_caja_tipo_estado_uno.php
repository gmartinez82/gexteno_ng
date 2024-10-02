
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $fnd_caja_tipo_estado->getId() ?>" modulo="fnd_caja_tipo_estado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($fnd_caja_tipo_estado->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($fnd_caja_tipo_estado->getDescripcion()) ?>
    </div>
    <?php if (count($fnd_caja_tipo_estado->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($fnd_caja_tipo_estado->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="codigo">
            <?php Gral::_echo($fnd_caja_tipo_estado->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="activo <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_estado->getActivo())->getCodigo()) ?> ">	

        <?php if($fnd_caja_tipo_estado->getActivo()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_caja_tipo_estado->getActivo() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_caja_tipo_estado->getActivo()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_estado->getActivo())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="terminal <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_estado->getTerminal())->getCodigo()) ?> ">	

        <?php if($fnd_caja_tipo_estado->getTerminal()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_caja_tipo_estado->getTerminal() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_caja_tipo_estado->getTerminal()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_estado->getTerminal())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="anulado <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_estado->getAnulado())->getCodigo()) ?> ">	

        <?php if($fnd_caja_tipo_estado->getAnulado()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_caja_tipo_estado->getAnulado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_caja_tipo_estado->getAnulado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_estado->getAnulado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='fnd_caja_tipo_estado_alta.php?id=<?php Gral::_echo($fnd_caja_tipo_estado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($fnd_caja_tipo_estado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($fnd_caja_tipo_estado->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_TIPO_ESTADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/fnd_caja_tipo_estado/fnd_caja_tipo_estado_db_context_acciones.php?id=<?php Gral::_echo($fnd_caja_tipo_estado->getId()) ?>' modulo_metodo_init="setInitFndCajaTipoEstado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


