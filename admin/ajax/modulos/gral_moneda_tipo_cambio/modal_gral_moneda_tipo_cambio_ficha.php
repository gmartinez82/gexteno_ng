<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxId($id);
//Gral::prr($gral_moneda_tipo_cambio);
?>

<div class="tabs ficha-gral_moneda_tipo_cambio" identificador="<?php echo $gral_moneda_tipo_cambio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_moneda_tipo_cambio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_moneda_tipo_cambio descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($gral_moneda_tipo_cambio->getFecha())) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio gral_moneda_id">
            <div class="label"><?php Lang::_lang('GralMoneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getGralMoneda()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio gral_moneda_comparada">
            <div class="label"><?php Lang::_lang('Moneda Comparada') ?></div>
            <div class="dato">
                <?php Gral::_echo(($gral_moneda_tipo_cambio->getGralMonedaComparada() != 'null') ? GralMoneda::getOxId($gral_moneda_tipo_cambio->getGralMonedaComparada())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio tipo_cambio">
            <div class="label"><?php Lang::_lang('Tipo Cambio') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getTipoCambio()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio coeficiente_ajuste">
            <div class="label"><?php Lang::_lang('Coeficiente Ajuste') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getCoeficienteAjuste()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio tipo_cambio_real">
            <div class="label"><?php Lang::_lang('Tipo Cambio Real') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getTipoCambioReal()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_moneda_tipo_cambio->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_moneda_tipo_cambio estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_moneda_tipo_cambio->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

