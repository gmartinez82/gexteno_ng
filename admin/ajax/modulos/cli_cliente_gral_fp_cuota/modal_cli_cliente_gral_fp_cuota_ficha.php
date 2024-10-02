<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_gral_fp_cuota = CliClienteGralFpCuota::getOxId($id);
//Gral::prr($cli_cliente_gral_fp_cuota);
?>

<div class="tabs ficha-cli_cliente_gral_fp_cuota" identificador="<?php echo $cli_cliente_gral_fp_cuota->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_gral_fp_cuota id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_gral_fp_cuota descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota gral_fp_cuota_id">
            <div class="label"><?php Lang::_lang('GralFpCuota') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getGralFpCuota()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota predeterminado">
            <div class="label"><?php Lang::_lang('Predeterminado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_gral_fp_cuota->getPredeterminado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_gral_fp_cuota->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_gral_fp_cuota estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_gral_fp_cuota->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

