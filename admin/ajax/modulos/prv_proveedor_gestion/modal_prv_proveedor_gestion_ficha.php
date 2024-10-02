<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_proveedor = PrvProveedor::getOxId($id);
//Gral::prr($prv_proveedor);

$prv_telefonos = $prv_proveedor->getPrvTelefonos();
$prv_emails = $prv_proveedor->getPrvEmails();
$prv_domicilios = $prv_proveedor->getPrvDomicilios();
$prv_proveedor_prv_rubros = $prv_proveedor->getPrvProveedorPrvRubros();
$prv_convenio_descuentos = $prv_proveedor->getPrvConvenioDescuentos();
$prv_descuento_financieros = $prv_proveedor->getPrvDescuentoFinancieros();
$prv_descuento_comercials = $prv_proveedor->getPrvDescuentoComercials();
$prv_preventistas = $prv_proveedor->getPrvPreventistas();
$ins_insumos_prv_proveedors = $prv_proveedor->getInsInsumoPrvProveedors();
$prv_proveedor_ins_marcas = $prv_proveedor->getPrvProveedorInsMarcas();

//Gral::prr($ins_insumos_prv_proveedors);

?>

<div class="tabs ficha-prv_proveedor" identificador="<?php echo $prv_proveedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_telefono"><?php Lang::_lang('Telefonos') ?> <?php echo (count($prv_telefonos) > 0) ? '('.count($prv_telefonos).')' : '' ?></a></li>
        <li><a href="#tab_email"><?php Lang::_lang('Emails') ?> <?php echo (count($prv_emails) > 0) ? '('.count($prv_emails).')' : '' ?></a></li>
        <li><a href="#tab_domicilio"><?php Lang::_lang('Domicilios') ?> <?php echo (count($prv_domicilios) > 0) ? '('.count($prv_domicilios).')' : '' ?></a></li>
        <li><a href="#tab_rubro"><?php Lang::_lang('Rubros') ?> <?php echo (count($prv_proveedor_prv_rubros) > 0) ? '('.count($prv_proveedor_prv_rubros).')' : '' ?></a></li>
        <li><a href="#tab_convenio_descuento"><?php Lang::_lang('Convenio de Desc.') ?> <?php echo (count($prv_convenio_descuentos) > 0) ? '('.count($prv_convenio_descuentos).')' : '' ?></a></li>
        <li><a href="#tab_descuento_financiero"><?php Lang::_lang('Desc. Financieros') ?> <?php echo (count($prv_descuento_financieros) > 0) ? '('.count($prv_descuento_financieros).')' : '' ?></a></li>
        <li><a href="#tab_descuento_comercial"><?php Lang::_lang('Desc. Comerciales') ?> <?php echo (count($prv_descuento_comercials) > 0) ? '('.count($prv_descuento_comercials).')' : '' ?></a></li>
        <li><a href="#tab_preventista"><?php Lang::_lang('Preventistas') ?> <?php echo (count($prv_preventistas) > 0) ? '('.count($prv_preventistas).')' : '' ?></a></li>
        <li><a href="#tab_producto_vinculado"><?php Lang::_lang('Productos Vinc.') ?> <?php echo (count($ins_insumos_prv_proveedors) > 0) ? '('.count($ins_insumos_prv_proveedors).')' : '' ?></a></li>
        <li><a href="#tab_marca"><?php Lang::_lang('Marcas') ?> <?php echo (count($prv_proveedor_ins_marcas) > 0) ? '('.count($prv_proveedor_ins_marcas).')' : '' ?></a></li>
        <li><a href="#tab_compra"><?php Lang::_lang('Compras') ?> <?php echo (count($eve_eventos) > 0) ? '('.count($eve_eventos).')' : '' ?></a></li>       
    </ul>
    
    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_general.php"; ?>  
    </div>
    
    <!-- Tab Telefonos -->
    <div id="tab_telefono" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_telefono.php"; ?>  
    </div> 
    
    <!-- Tab Emails -->
    <div id="tab_email" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_email.php"; ?>  
    </div>
    
    <!-- Tab Domicilios -->
    <div id="tab_domicilio" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_domicilio.php"; ?>  
    </div>
    
    <!-- Tab Rubros -->
    <div id="tab_rubro" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_rubro.php"; ?>  
    </div>
    
    <!-- Tab Convenio de Descuentos -->
    <div id="tab_convenio_descuento" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_convenio_descuento.php"; ?>  
    </div>
    
    <!-- Tab Descuentos Financieros -->
    <div id="tab_descuento_financiero" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_descuento_financiero.php"; ?>  
    </div>
    
    <!-- Tab Descuentos Comerciales -->
    <div id="tab_descuento_comercial" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_descuento_comercial.php"; ?>  
    </div>
    
    <!-- Tab Preventistas -->
    <div id="tab_preventista" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_preventista.php"; ?>  
    </div>
    
    <!-- Tab Productos Vinculados -->
    <div id="tab_producto_vinculado" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_producto_vinculado.php"; ?>  
    </div>
    
    <!-- Tab Marcas -->
    <div id="tab_marca" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_marca.php"; ?>  
    </div>
    
    <!-- Tab Compras -->
    <div id="tab_compra" class="datos">
        <?php include "modal_prv_proveedor_gestion_ficha_compra.php"; ?>  
    </div>
      
</div>

