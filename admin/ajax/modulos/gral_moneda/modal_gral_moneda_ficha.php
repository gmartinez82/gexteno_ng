<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_moneda = GralMoneda::getOxId($id);
//Gral::prr($gral_moneda);
?>

<div class="tabs ficha-gral_moneda" identificador="<?php echo $gral_moneda->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_moneda id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_moneda descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda codigo_iso">
            <div class="label"><?php Lang::_lang('Codigo ISO') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getCodigoIso()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda numero_iso">
            <div class="label"><?php Lang::_lang('Numero ISO') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getNumeroIso()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda simbolo">
            <div class="label"><?php Lang::_lang('Simbolo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getSimbolo()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda moneda_base">
            <div class="label"><?php Lang::_lang('Moneda Base') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_moneda->getMonedaBase())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda por_default">
            <div class="label"><?php Lang::_lang('Por Default') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_moneda->getPorDefault())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

