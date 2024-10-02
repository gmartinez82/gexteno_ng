<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_subcategoria_gral_fp_forma_pago = CliSubcategoriaGralFpFormaPago::getOxId($id);
//Gral::prr($cli_subcategoria_gral_fp_forma_pago);
?>

<div class="tabs ficha-cli_subcategoria_gral_fp_forma_pago" identificador="<?php echo $cli_subcategoria_gral_fp_forma_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_subcategoria_gral_fp_forma_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_subcategoria_gral_fp_forma_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago cli_subcategoria_id">
            <div class="label"><?php Lang::_lang('CliSubcategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCliSubcategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago gral_fp_forma_pago_id">
            <div class="label"><?php Lang::_lang('GralFpFormaPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getGralFpFormaPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_subcategoria_gral_fp_forma_pago->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_subcategoria_gral_fp_forma_pago estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_subcategoria_gral_fp_forma_pago->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

