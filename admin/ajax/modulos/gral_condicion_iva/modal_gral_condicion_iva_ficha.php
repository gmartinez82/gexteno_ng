<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_condicion_iva = GralCondicionIva::getOxId($id);
//Gral::prr($gral_condicion_iva);
?>

<div class="tabs ficha-gral_condicion_iva" identificador="<?php echo $gral_condicion_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_condicion_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_condicion_iva descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva iva_discriminado">
            <div class="label"><?php Lang::_lang('Iva Discriminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva->getIvaDiscriminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva iva_discriminado_comprobante">
            <div class="label"><?php Lang::_lang('Iva Discr Compr') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva->getIvaDiscriminadoComprobante())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva leyenda_comprobante">
            <div class="label"><?php Lang::_lang('Leyenda Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva->getLeyendaComprobante()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_condicion_iva->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_condicion_iva estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_condicion_iva->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

