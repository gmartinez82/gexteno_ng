
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_oc_tipo_estado_recepcion->getId() ?>" modulo="pde_oc_tipo_estado_recepcion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getDescripcion()) ?>
    </div>
    <?php if (count($pde_oc_tipo_estado_recepcion->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pde_oc_tipo_estado_recepcion->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="activo <?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getActivo())->getCodigo()) ?> ">	

        <?php if($pde_oc_tipo_estado_recepcion->getActivo()){ ?>
        <img src='imgs/tilde_<?php echo $pde_oc_tipo_estado_recepcion->getActivo() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_oc_tipo_estado_recepcion->getActivo()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getActivo())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="terminal <?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getTerminal())->getCodigo()) ?> ">	

        <?php if($pde_oc_tipo_estado_recepcion->getTerminal()){ ?>
        <img src='imgs/tilde_<?php echo $pde_oc_tipo_estado_recepcion->getTerminal() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_oc_tipo_estado_recepcion->getTerminal()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getTerminal())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_RECEPCION_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_oc_tipo_estado_recepcion_alta.php?id=<?php Gral::_echo($pde_oc_tipo_estado_recepcion->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_RECEPCION_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_oc_tipo_estado_recepcion->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_RECEPCION_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pde_oc_tipo_estado_recepcion->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_RECEPCION_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_oc_tipo_estado_recepcion/pde_oc_tipo_estado_recepcion_db_context_acciones.php?id=<?php Gral::_echo($pde_oc_tipo_estado_recepcion->getId()) ?>' modulo_metodo_init="setInitPdeOcTipoEstadoRecepcion()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


