<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_condicion_iva_pde_tipo_factura = GralCondicionIvaPdeTipoFactura::getOxId($id);
//Gral::prr($gral_condicion_iva_pde_tipo_factura);
?>

<div class="tabs ficha-gral_condicion_iva_pde_tipo_factura" identificador="<?php echo $gral_condicion_iva_pde_tipo_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_condicion_iva_pde_tipo_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_condicion_iva_pde_tipo_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura pde_tipo_factura_id">
            <div class="label"><?php Lang::_lang('PdeTipoFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getPdeTipoFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva_pde_tipo_factura->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva_pde_tipo_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva_pde_tipo_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva_pde_tipo_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

