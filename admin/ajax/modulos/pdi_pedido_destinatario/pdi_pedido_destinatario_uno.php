
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pdi_pedido_destinatario->getId() ?>" modulo="pdi_pedido_destinatario">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pdi_pedido_destinatario->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pdi_pedido_destinatario->getDescripcion()) ?>
    </div>
    <?php if (count($pdi_pedido_destinatario->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pdi_pedido_destinatario->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="pdi_pedido_id <?php Gral::_echo($pdi_pedido_destinatario->getPdiPedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido_destinatario->getPdiPedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="us_usuario_id <?php Gral::_echo($pdi_pedido_destinatario->getUsUsuario()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido_destinatario->getUsUsuario()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="observado <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getObservado())->getCodigo()) ?> ">	

        <?php if($pdi_pedido_destinatario->getObservado()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_pedido_destinatario->getObservado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_pedido_destinatario->getObservado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getObservado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="leido <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getLeido())->getCodigo()) ?> ">	

        <?php if($pdi_pedido_destinatario->getLeido()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_pedido_destinatario->getLeido() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_pedido_destinatario->getLeido()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getLeido())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="destacado <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getDestacado())->getCodigo()) ?> ">	

        <?php if($pdi_pedido_destinatario->getDestacado()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_pedido_destinatario->getDestacado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_pedido_destinatario->getDestacado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getDestacado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="aviso_email <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoEmail())->getCodigo()) ?> ">	

        <?php if($pdi_pedido_destinatario->getAvisoEmail()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_pedido_destinatario->getAvisoEmail() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_pedido_destinatario->getAvisoEmail()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoEmail())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="aviso_sms <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoSms())->getCodigo()) ?> ">	

        <?php if($pdi_pedido_destinatario->getAvisoSms()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_pedido_destinatario->getAvisoSms() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_pedido_destinatario->getAvisoSms()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_pedido_destinatario->getAvisoSms())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($pdi_pedido_destinatario->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pdi_pedido_destinatario_alta.php?id=<?php Gral::_echo($pdi_pedido_destinatario->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pdi_pedido_destinatario->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pdi_pedido_destinatario->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pdi_pedido_destinatario/pdi_pedido_destinatario_db_context_acciones.php?id=<?php Gral::_echo($pdi_pedido_destinatario->getId()) ?>' modulo_metodo_init="setInitPdiPedidoDestinatario()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


