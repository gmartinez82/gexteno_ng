
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $alt_alerta_us_usuario->getId() ?>" modulo="alt_alerta_us_usuario">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($alt_alerta_us_usuario->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="alt_alerta_id <?php Gral::_echo($alt_alerta_us_usuario->getAltAlerta()->getCodigo()) ?> ">	

        <?php Gral::_echo($alt_alerta_us_usuario->getAltAlerta()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="us_usuario_id <?php Gral::_echo($alt_alerta_us_usuario->getUsUsuario()->getCodigo()) ?> ">	

        <?php Gral::_echo($alt_alerta_us_usuario->getUsUsuario()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="observado <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getObservado())->getCodigo()) ?> ">	

        <?php if($alt_alerta_us_usuario->getObservado()){ ?>
        <img src='imgs/tilde_<?php echo $alt_alerta_us_usuario->getObservado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($alt_alerta_us_usuario->getObservado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getObservado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="leido <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getLeido())->getCodigo()) ?> ">	

        <?php if($alt_alerta_us_usuario->getLeido()){ ?>
        <img src='imgs/tilde_<?php echo $alt_alerta_us_usuario->getLeido() ?>.png' width='16' border='0' alt="<?php Gral::_echo($alt_alerta_us_usuario->getLeido()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getLeido())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="destacado <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getDestacado())->getCodigo()) ?> ">	

        <?php if($alt_alerta_us_usuario->getDestacado()){ ?>
        <img src='imgs/tilde_<?php echo $alt_alerta_us_usuario->getDestacado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($alt_alerta_us_usuario->getDestacado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getDestacado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="aviso_email <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoEmail())->getCodigo()) ?> ">	

        <?php if($alt_alerta_us_usuario->getAvisoEmail()){ ?>
        <img src='imgs/tilde_<?php echo $alt_alerta_us_usuario->getAvisoEmail() ?>.png' width='16' border='0' alt="<?php Gral::_echo($alt_alerta_us_usuario->getAvisoEmail()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoEmail())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="aviso_sms <?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoSms())->getCodigo()) ?> ">	

        <?php if($alt_alerta_us_usuario->getAvisoSms()){ ?>
        <img src='imgs/tilde_<?php echo $alt_alerta_us_usuario->getAvisoSms() ?>.png' width='16' border='0' alt="<?php Gral::_echo($alt_alerta_us_usuario->getAvisoSms()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($alt_alerta_us_usuario->getAvisoSms())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='alt_alerta_us_usuario_alta.php?id=<?php Gral::_echo($alt_alerta_us_usuario->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($alt_alerta_us_usuario->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('ALT_ALERTA_US_USUARIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/alt_alerta_us_usuario/alt_alerta_us_usuario_db_context_acciones.php?id=<?php Gral::_echo($alt_alerta_us_usuario->getId()) ?>' modulo_metodo_init="setInitAltAlertaUsUsuario()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


