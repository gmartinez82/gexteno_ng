
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_vta_nota_credito->getId() ?>" modulo="eku_de_vta_nota_credito">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_vta_nota_credito->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_vta_nota_credito->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_vta_nota_credito->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class=" eku_de_id">
        <?php Gral::_echo($eku_de_vta_nota_credito->getEkuDe()->getDescripcion()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" vta_nota_credito_id">
        <?php Gral::_echo($eku_de_vta_nota_credito->getVtaNotaCredito()->getDescripcion()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" inicial <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getInicial())->getCodigo()) ?> ">	
    
        <?php if($eku_de_vta_nota_credito->getInicial()){ ?>
            <img src='imgs/tilde_<?php echo $eku_de_vta_nota_credito->getInicial() ?>.png' width='16' border='0' alt="<?php Gral::_echo($eku_de_vta_nota_credito->getInicial()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getInicial())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" actual <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getActual())->getCodigo()) ?> ">	
    
        <?php if($eku_de_vta_nota_credito->getActual()){ ?>
            <img src='imgs/tilde_<?php echo $eku_de_vta_nota_credito->getActual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($eku_de_vta_nota_credito->getActual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_nota_credito->getActual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" codigo">
        <?php Gral::_echo($eku_de_vta_nota_credito->getCodigo()) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_vta_nota_credito_alta.php?id=<?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?>&hash=<?php Gral::_echo($eku_de_vta_nota_credito->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_vta_nota_credito->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_vta_nota_credito/eku_de_vta_nota_credito_db_context_acciones.php?id=<?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?>' modulo_metodo_init="setInitEkuDeVtaNotaCredito()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


