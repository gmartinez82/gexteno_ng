
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $gral_fp_forma_pago->getId() ?>" modulo="gral_fp_forma_pago">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($gral_fp_forma_pago->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
    </div>
    <?php if (count($gral_fp_forma_pago->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($gral_fp_forma_pago->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" contado <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getContado())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getContado()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getContado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getContado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getContado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" credito <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getCredito())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getCredito()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getCredito() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getCredito()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getCredito())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" inmediato <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getInmediato())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getInmediato()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getInmediato() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getInmediato()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getInmediato())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" para_compra <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCompra())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getParaCompra()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getParaCompra() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getParaCompra()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCompra())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" para_venta <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaVenta())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getParaVenta()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getParaVenta() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getParaVenta()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaVenta())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" para_cobro <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCobro())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getParaCobro()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getParaCobro() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getParaCobro()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaCobro())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" para_pago <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaPago())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getParaPago()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getParaPago() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getParaPago()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getParaPago())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" requiere_referencia <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereReferencia())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getRequiereReferencia()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getRequiereReferencia() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getRequiereReferencia()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereReferencia())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" requiere_info_extendida <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereInfoExtendida())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getRequiereInfoExtendida()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getRequiereInfoExtendida() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getRequiereInfoExtendida()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereInfoExtendida())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" requiere_conciliacion <?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereConciliacion())->getCodigo()) ?> ">	
    
        <?php if($gral_fp_forma_pago->getRequiereConciliacion()){ ?>
            <img src='imgs/tilde_<?php echo $gral_fp_forma_pago->getRequiereConciliacion() ?>.png' width='16' border='0' alt="<?php Gral::_echo($gral_fp_forma_pago->getRequiereConciliacion()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($gral_fp_forma_pago->getRequiereConciliacion())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='gral_fp_forma_pago_alta.php?id=<?php Gral::_echo($gral_fp_forma_pago->getId()) ?>&hash=<?php Gral::_echo($gral_fp_forma_pago->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($gral_fp_forma_pago->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($gral_fp_forma_pago->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_db_context_acciones.php?id=<?php Gral::_echo($gral_fp_forma_pago->getId()) ?>' modulo_metodo_init="setInitGralFpFormaPago()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


