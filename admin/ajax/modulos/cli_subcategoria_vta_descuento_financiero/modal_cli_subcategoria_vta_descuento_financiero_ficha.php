<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxId($id);
//Gral::prr($cli_subcategoria_vta_descuento_financiero);
?>

<div class="tabs ficha-cli_subcategoria_vta_descuento_financiero" identificador="<?php echo $cli_subcategoria_vta_descuento_financiero->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_subcategoria_vta_descuento_financiero id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_subcategoria_vta_descuento_financiero descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero cli_subcategoria_id">
            <div class="label"><?php Lang::_lang('CliSubcategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getCliSubcategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero vta_descuento_financiero_id">
            <div class="label"><?php Lang::_lang('VtaDescuentoFinanciero') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getVtaDescuentoFinanciero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_subcategoria_vta_descuento_financiero->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_vta_descuento_financiero estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_subcategoria_vta_descuento_financiero->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

