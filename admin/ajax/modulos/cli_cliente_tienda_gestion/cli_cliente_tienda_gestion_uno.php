
<?php

$mensaje_cliente = '';
$cli_cliente = CliCliente::getOxCuit($cli_cliente_tienda->getCuit());
if($cli_cliente){
    $mensaje_cliente = Lang::_lang('Existe un cliente con el mismo CUIT', true).' - '.$cli_cliente->getDescripcion().' '.$cli_cliente->getCuit().'. Se debe VINCULAR'; 
}

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cli_cliente_tienda->getId() ?>" modulo="cli_cliente_tienda">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($cli_cliente_tienda->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
        <?php Gral::_echo($cli_cliente_tienda->getDescripcion()) ?>
    </div>
    <?php if (count($cli_cliente_tienda->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($cli_cliente_tienda->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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

    <?php if($cli_cliente_tienda->getCliClienteId() != 'null'){ ?>
        <div class="cli-cliente-datos si-cliente <?php Gral::_echo($cli_cliente_tienda->getCliCliente()->getCodigo()) ?>">
            <div>
                ID: <?php Gral::_echo($cli_cliente_tienda->getCliCliente()->getId()) ?>
            </div>
            <div>
                <?php Gral::_echo($cli_cliente_tienda->getCliCliente()->getDescripcion()) ?>
            </div>
            <div>
                <?php Gral::_echo($cli_cliente_tienda->getCliCliente()->getCliCategoria()->getDescripcion()) ?>
            </div>
        </div>
    <?php }else{ ?>
        <div class="cli-cliente-datos no-cliente">
            No tiene cliente generado
        </div>
    <?php } ?>

    <?php if($cli_cliente_tienda->getCliClienteId() == 'null'): ?>                
        <div class="label-error" id="error_general_error"><?php echo $mensaje_cliente; ?></div>
    <?php endif; ?>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="tienda-info">
        <div class="tienda-codigo" title="Código de Cliente Tienda">
            <?php Gral::_echo($cli_cliente_tienda->getCodigo()) ?>
        </div>
        <div class="tienda-centro-pedido" title="Centro Pedido">
            <?php Gral::_echo($cli_cliente_tienda->getCliCentroPedido()->getDescripcion()) ?>
        </div>
        <div class="tienda-email" title="Email de Tienda">
            <?php Gral::_echo($cli_cliente_tienda->getEmail()) ?>
        </div>
        <div class="tienda-ultima-conexion" title="Ultima Conexión a la Tienda">
            <?php Gral::_echo($cli_cliente_tienda->getUltimaConexionTienda()) ?>
        </div>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    
    <div class="gral_tipo_documento_id <?php Gral::_echo($cli_cliente_tienda->getGralTipoDocumento()->getCodigo()) ?> ">	
        <?php Gral::_echo($cli_cliente_tienda->getGralTipoDocumento()->getDescripcion()) ?>
    </div>
    <div class="cuit">
        <?php Gral::_echo($cli_cliente_tienda->getCuit()) ?>
    </div>

</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="telefono">
        <img src='imgs/icn_phone.png' width='16' align="absmiddle" />       
        <?php Gral::_echo($cli_cliente_tienda->getTelefono()) ?>
    </div>
    <div class="telefono-whatsapp">
        <img src='imgs/icon_wsp.png' width='18' align="absmiddle" />       
        <?php Gral::_echo($cli_cliente_tienda->getTelefonoWhatsapp()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="verificar <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_tienda->getVerificar())->getCodigo()) ?> ">	

        <?php if($cli_cliente_tienda->getVerificar()){ ?>
        <img src='imgs/tilde_<?php echo $cli_cliente_tienda->getVerificar() ?>.png' width='16' border='0' alt="<?php Gral::_echo($cli_cliente_tienda->getVerificar()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($cli_cliente_tienda->getVerificar())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ADM_ACCION_MODIFICAR')){ ?>
        <li class='adm_botones_accion'>
                <a href='cli_cliente_tienda_alta.php?id=<?php Gral::_echo($cli_cliente_tienda->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
        </li>
        <?php } ?>
        
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ADM_ACCION_ELIMINAR')){ ?>
        <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($cli_cliente_tienda->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
        </li>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ADM_ACCION_FICHA')){ ?>
        <li class='adm_botones_accion ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
                <img src='imgs/btn_ficha.png' width='15' border='0' />
        </li>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ADM_ACCION_ESTADO')){ ?>
        <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cli_cliente_tienda->getEstado())  ?>.gif' width='20' border='0' />
        </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cli_cliente_tienda_gestion/cli_cliente_tienda_gestion_db_context_acciones.php?id=<?php Gral::_echo($cli_cliente_tienda->getId()) ?>' modulo_metodo_init="setInitCliClienteTiendaGestion()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>
    </ul>
</td>


