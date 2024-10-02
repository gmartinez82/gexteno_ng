<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_vta_factura = EkuDeVtaFactura::getOxId($id);
//Gral::prr($eku_de_vta_factura);
?>

<div class="tabs ficha-eku_de_vta_factura" identificador="<?php echo $eku_de_vta_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_vta_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_vta_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_factura->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_factura->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_vta_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_vta_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_vta_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

