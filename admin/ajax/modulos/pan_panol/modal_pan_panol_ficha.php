<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_panol = PanPanol::getOxId($id);
//Gral::prr($pan_panol);
?>

<div class="tabs ficha-pan_panol" identificador="<?php echo $pan_panol->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_panol id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_panol descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_panol pan_tipo_panol_id">
            <div class="label"><?php Lang::_lang('PanTipoPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getPanTipoPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_panol pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_panol geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_panol domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par pan_panol responsable">
            <div class="label"><?php Lang::_lang('Responsable') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getResponsable()) ?>
            </div>
        </div>
		
        <div class="par pan_panol telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par pan_panol email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getEmail()) ?>
            </div>
        </div>
		
        <div class="par pan_panol codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_panol codigo_corto">
            <div class="label"><?php Lang::_lang('Codigo Corto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getCodigoCorto()) ?>
            </div>
        </div>
		
        <div class="par pan_panol color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getColor()) ?>
            </div>
        </div>
		
        <div class="par pan_panol observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_panol orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_panol estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_panol->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

