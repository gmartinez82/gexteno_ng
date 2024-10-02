<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_tipo_iva = GralTipoIva::getOxId($id);
//Gral::prr($gral_tipo_iva);
?>

<div class="tabs ficha-gral_tipo_iva" identificador="<?php echo $gral_tipo_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_tipo_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_tipo_iva descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva valor_iva">
            <div class="label"><?php Lang::_lang('Cot Resp Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getValorIva()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva gravado">
            <div class="label"><?php Lang::_lang('Gravado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_tipo_iva->getGravado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva para_compra">
            <div class="label"><?php Lang::_lang('Compra') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_tipo_iva->getParaCompra())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva para_venta">
            <div class="label"><?php Lang::_lang('Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_tipo_iva->getParaVenta())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_iva estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_iva->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

