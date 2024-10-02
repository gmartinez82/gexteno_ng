<?php
//$cli_cliente_tienda = $cli_cliente->getCliClienteTienda();
$cli_cliente_tiendas = $cli_cliente->getCliClienteTiendas();
$vta_vendedor_asignado = $cli_cliente->getVtaVendedorXCliClienteVtaVendedor(); // no se utiliza (null, null, true) porque no se esta registrando estado = 1
$gral_sucursal_asignada = $cli_cliente->getGralSucursalXGralSucursalCliCliente(null, null, true);
$gral_sucursal_cli_cliente_asignada = $cli_cliente->getGralSucursalCliCliente(null, null, true);
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $cli_cliente->getId() ?>" modulo="cli_cliente">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    
    <div class="id">
        <?php Gral::_echo($cli_cliente->getId()) ?>
    </div>
    
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaToWeb($cli_cliente->getCreado())) ?>
    </div>

    <div class="creado-por">
        <?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?>
    </div>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
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
    
    <?php 
    // -------------------------------------------------------------------------
    // HTML Bloque Cliente Info Sifen
    // -------------------------------------------------------------------------
    $cli_cliente->getHtmlBloqueClienteInfoSifen();
    ?>

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>

    <div class="soc-categoria <?php Gral::_echo($cli_cliente->getCliCategoria()->getCodigo()) ?>">
        <?php Gral::_echo($cli_cliente->getCliCategoria()->getDescripcion()) ?>
    </div>
    
    <div class="gral_condicion_iva_id <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getCodigo()) ?> ">	
        <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?>
    </div>

    <div class="gral_tipo_personeria_id <?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getCodigo()) ?> ">	
        <?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>
    </div>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <?php foreach ($cli_cliente_tiendas as $cli_cliente_tienda) { ?>
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
    <?php } ?>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>

    <?php if (trim($cli_cliente->getEmail()) != '') { ?>
        <div class="dato-contacto email" title="<?php Gral::_echo($cli_cliente->getEmail()) ?>">
            <img src='imgs/icn_email.png' width='15' align="absmiddle" />       
            <?php Gral::_echo(substr($cli_cliente->getEmail(), 0, 20)) ?>
        </div>
    <?php } ?>
    
    <?php if (trim($cli_cliente->getTelefono()) != '') { ?>
        <div class="dato-contacto telefono" title="<?php Gral::_echo($cli_cliente->getTelefono()) ?>">
            <img src='imgs/icn_phone.png' width='16' align="absmiddle" />       
            <?php Gral::_echo(substr($cli_cliente->getTelefono(), 0, 20)) ?>
        </div>
    <?php } ?>

    <?php if (trim($cli_cliente->getTelefonoWhatsapp()) != '') { ?>
        <div class="dato-contacto telefono-whatsapp" title="<?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?>">
            <a href="https://api.whatsapp.com/send?phone=<?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?>" target="_blank" title="Abrir Conversacion en Whatsapp">
                <img src='imgs/icon_wsp.png' width='18' align="absmiddle" />       
                <?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?>
            </a>
        </div>
    <?php } ?>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>

    <div class="cli-cliente-tipo-gestion">
        <?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcion()) ?>
    </div>
    
    <?php if($vta_vendedor_asignado){ ?>
    <div class="vta-vendedor-asignado">
        <?php Gral::_echo($vta_vendedor_asignado->getDescripcion()) ?>
    </div>
    <div class="vta-vendedor-asignado-celular">
        <?php Gral::_echo($vta_vendedor_asignado->getCelular()) ?>
    </div>
    <div class="vta-vendedor-asignado-email">
        <?php Gral::_echo($vta_vendedor_asignado->getEmail()) ?>
    </div>
    <?php } ?>
    
    <?php if($gral_sucursal_asignada){ ?>
        <div class="gral-sucursal-asignado">
            <?php Gral::_echo($gral_sucursal_asignada->getDescripcion()) ?>            
            
            <div class="gral-sucursal-asignado-tipo" title="<?php Gral::_echo($gral_sucursal_cli_cliente_asignada->getObservacion()) ?>">
                <?php if($gral_sucursal_cli_cliente_asignada->getAutomatico()){ ?>
                    Vinc Automatico
                <?php }else{ ?>
                    Vinc Manual
                <?php } ?>            
            </div>
        </div>
    <?php } ?>

    <div class="cli-cliente-tipo-estado-venta" style="background-color: <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoVenta()->getColor()) ?>; color: <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoVenta()->getColorSecundario()) ?>;">
        <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoVenta()->getDescripcion()) ?>
    </div>

    <div class="creado" title="<?php Gral::_echo(Gral::getFechaToWeb($cli_cliente->getCreado())) ?>">
        Creado <?php Gral::_echo($cli_cliente->getCreadoDiferenciaDiasDescripcion()) ?>
    </div>

    <div class="creado-por">
        <?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?>
    </div>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='cli_cliente_alta.php?id=<?php Gral::_echo($cli_cliente->getId()) ?>&hash=<?php Gral::_echo($cli_cliente->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_GESTION_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($cli_cliente->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
                <img src='imgs/btn_ficha.png' width='15' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_GESTION_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cli_cliente->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/cli_cliente_gestion/db_context_acciones_tienda.php?id=<?php Gral::_echo($cli_cliente->getId()) ?>' modulo_metodo_init="setInitCliClienteGestion()">
                <img src='imgs/btn_web.png' width='22' />       
            </li>
        <?php } ?>

    </ul>
</td>


