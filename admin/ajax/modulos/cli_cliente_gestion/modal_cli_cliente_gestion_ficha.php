<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente = CliCliente::getOxId($id);
//Gral::prr($cli_cliente);

$cli_telefonos = $cli_cliente->getCliTelefonos();
$cli_emails = $cli_cliente->getCliEmails();
$cli_domicilios = $cli_cliente->getCliDomicilios();
$cli_cliente_cli_rubros = $cli_cliente->getCliClienteCliRubros();
$cli_centro_recepcions = $cli_cliente->getCliCentroRecepcions();
$cli_medio_digitals = $cli_cliente->getCliMedioDigitals();
$vta_tributo_exencions = $cli_cliente->getVtaTributoExencions();
$vta_orden_ventas = $cli_cliente->getVtaOrdenVentasUltimasActivas(50);

//Gral::prr($cli_cliente_cli_rubros);

//$cli_rubros = $cli_cliente->getCliRubrosXCliClienteCliRubro();
//Gral::prr($cli_rubros);

$cli_cliente->getInfoRucDesdeSifen();
?>

<div class="tabs ficha-cli_cliente" identificador="<?php echo $cli_cliente->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_telefono"><?php Lang::_lang('Telefonos') ?> <?php echo (count($cli_telefonos) > 0) ? '('.count($cli_telefonos).')' : '' ?></a></li>
        <li><a href="#tab_email"><?php Lang::_lang('Emails') ?> <?php echo (count($cli_emails) > 0) ? '('.count($cli_emails).')' : '' ?></a></li>
        <li><a href="#tab_domicilio"><?php Lang::_lang('Domicilios') ?> <?php echo (count($cli_domicilios) > 0) ? '('.count($cli_domicilios).')' : '' ?></a></li>
        <li><a href="#tab_rubro"><?php Lang::_lang('Rubros') ?> <?php echo (count($cli_cliente_cli_rubros) > 0) ? '('.count($cli_cliente_cli_rubros).')' : '' ?></a></li>
        <li><a href="#tab_centro_recepcion"><?php Lang::_lang('Centros de Recepcion') ?> <?php echo (count($cli_centro_recepcions) > 0) ? '('.count($cli_centro_recepcions).')' : '' ?></a></li>
        <li><a href="#tab_medio_digital"><?php Lang::_lang('Medios Digitales') ?> <?php echo (count($cli_medio_digitals) > 0) ? '('.count($cli_medio_digitals).')' : '' ?></a></li>
        <li><a href="#tab_exencion_tributo"><?php Lang::_lang('Exenciones de Tributos') ?> <?php echo (count($vta_tributo_exencions) > 0) ? '('.count($vta_tributo_exencions).')' : '' ?></a></li>
        <li><a href="#tab_orden_venta"><?php Lang::_lang('Ordenes de Ventas') ?> <?php echo (count($vta_orden_ventas) > 0) ? '('.count($vta_orden_ventas).')' : '' ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_general.php"; ?>  
    </div> 

    <!-- Tab Telefonos -->
    <div id="tab_telefono" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_telefono.php"; ?>  
    </div> 
    
    <!-- Tab Emails -->
    <div id="tab_email" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_email.php"; ?>  
    </div>
    
    <!-- Tab Domicilios -->
    <div id="tab_domicilio" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_domicilio.php"; ?>  
    </div>
    
    <!-- Tab Rubros -->
    <div id="tab_rubro" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_rubro.php"; ?>  
    </div>
    
    <!-- Tab Centros de Recepcion -->
    <div id="tab_centro_recepcion" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_centro_recepcion.php"; ?>  
    </div> 
    
    <!-- Tab Medios Digitales -->
    <div id="tab_medio_digital" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_medio_digital.php"; ?>  
    </div>
    
    <!-- Tab Exenciones de Tributos -->
    <div id="tab_exencion_tributo" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_exencion_tributo.php"; ?>  
    </div>
    
    <!-- Tab Ordenes Venta -->
    <div id="tab_orden_venta" class="datos">
        <?php include "modal_cli_cliente_gestion_ficha_ordenes_venta.php"; ?>  
    </div>            
    
</div>

