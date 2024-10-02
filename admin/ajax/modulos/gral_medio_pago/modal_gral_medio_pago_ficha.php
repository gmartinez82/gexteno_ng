<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_medio_pago = GralMedioPago::getOxId($id);
//Gral::prr($gral_medio_pago);
?>

<div class="tabs ficha-gral_medio_pago" identificador="<?php echo $gral_medio_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_medio_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_medio_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_medio_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_medio_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_medio_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_medio_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_medio_pago mueve_caja">
            <div class="label"><?php Lang::_lang('Mueve Caja') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_medio_pago->getMueveCaja())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_medio_pago realiza_pago">
            <div class="label"><?php Lang::_lang('Realiza Pagos') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_medio_pago->getRealizaPago())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_medio_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_medio_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_medio_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_medio_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_medio_pago estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_medio_pago->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

