<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($id);
//Gral::prr($cli_cliente_info_sifen);
?>

<div class="tabs ficha-cli_cliente_info_sifen" identificador="<?php echo $cli_cliente_info_sifen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_info_sifen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_info_sifen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_dcodres">
            <div class="label"><?php Lang::_lang('sifen_dcodres') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenDcodres()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_dmsgres">
            <div class="label"><?php Lang::_lang('sifen_dmsgres') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenDmsgres()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_xcontruc_druccons">
            <div class="label"><?php Lang::_lang('sifen_xcontruc_druccons') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDruccons()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_xcontruc_drazcons">
            <div class="label"><?php Lang::_lang('sifen_xcontruc_drazcons') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDrazcons()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_xcontruc_dcodestcons">
            <div class="label"><?php Lang::_lang('sifen_xcontruc_dcodestcons') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDcodestcons()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_xcontruc_ddesestcons">
            <div class="label"><?php Lang::_lang('sifen_xcontruc_ddesestcons') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDdesestcons()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen sifen_xcontruc_drucfactelec">
            <div class="label"><?php Lang::_lang('sifen_xcontruc_drucfactelec') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDrucfactelec()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_info_sifen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_info_sifen estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_info_sifen->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

