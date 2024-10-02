<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_nota_credito_concepto = VtaNotaCreditoConcepto::getOxId($id);
//Gral::prr($vta_nota_credito_concepto);
?>

<div class="tabs ficha-vta_nota_credito_concepto" identificador="<?php echo $vta_nota_credito_concepto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_nota_credito_concepto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_nota_credito_concepto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_concepto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_concepto cntb_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getCntbCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_concepto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_concepto orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_concepto estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_concepto->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

