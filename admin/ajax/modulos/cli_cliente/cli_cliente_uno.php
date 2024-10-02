
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cli_cliente->getId() ?>" modulo="cli_cliente">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($cli_cliente->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
    </div>
    <?php if (count($cli_cliente->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($cli_cliente->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" gral_condicion_iva_id <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_tipo_documento_id <?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" cuit">
        <?php Gral::_echo($cli_cliente->getCuit()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" telefono">
        <?php Gral::_echo($cli_cliente->getTelefono()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" telefono_whatsapp">
        <?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" gral_empresa_transportadora_id <?php Gral::_echo($cli_cliente->getGralEmpresaTransportadora()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($cli_cliente->getGralEmpresaTransportadora()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" cli_subcategoria_id <?php Gral::_echo($cli_cliente->getCliSubcategoria()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($cli_cliente->getCliSubcategoria()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" iva_exceptuado <?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getIvaExceptuado())->getCodigo()) ?> ">	
    
        <?php if($cli_cliente->getIvaExceptuado()){ ?>
            <img src='imgs/tilde_<?php echo $cli_cliente->getIvaExceptuado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($cli_cliente->getIvaExceptuado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getIvaExceptuado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        
        
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='cli_cliente_alta.php?id=<?php Gral::_echo($cli_cliente->getId()) ?>&hash=<?php Gral::_echo($cli_cliente->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($cli_cliente->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_FICHA')){ ?>
	<li class='adm_botones_accion ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
            <img src='imgs/btn_ficha.png' width='15' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($cli_cliente->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cli_cliente/cli_cliente_db_context_acciones.php?id=<?php Gral::_echo($cli_cliente->getId()) ?>' modulo_metodo_init="setInitCliCliente()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


