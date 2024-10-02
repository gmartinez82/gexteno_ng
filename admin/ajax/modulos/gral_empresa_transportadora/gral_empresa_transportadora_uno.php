
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $gral_empresa_transportadora->getId() ?>" modulo="gral_empresa_transportadora">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($gral_empresa_transportadora->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($gral_empresa_transportadora->getDescripcion()) ?>
    </div>
    <?php if (count($gral_empresa_transportadora->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($gral_empresa_transportadora->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($gral_empresa_transportadora->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="documento">
            <?php Gral::_echo($gral_empresa_transportadora->getDocumento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="domicilio">
            <?php Gral::_echo($gral_empresa_transportadora->getDomicilio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="publica <?php Gral::_echo(GralSiNo::getOxId($gral_empresa_transportadora->getPublica())->getCodigo()) ?> ">	

        <?php if($gral_empresa_transportadora->getPublica()){ ?>
        <img src='imgs/tilde_<?php echo $gral_empresa_transportadora->getPublica() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_empresa_transportadora->getPublica()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_empresa_transportadora->getPublica())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='gral_empresa_transportadora_alta.php?id=<?php Gral::_echo($gral_empresa_transportadora->getId()) ?>&hash=<?php Gral::_echo($gral_empresa_transportadora->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($gral_empresa_transportadora->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($gral_empresa_transportadora->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('GRAL_EMPRESA_TRANSPORTADORA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/gral_empresa_transportadora/gral_empresa_transportadora_db_context_acciones.php?id=<?php Gral::_echo($gral_empresa_transportadora->getId()) ?>' modulo_metodo_init="setInitGralEmpresaTransportadora()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


