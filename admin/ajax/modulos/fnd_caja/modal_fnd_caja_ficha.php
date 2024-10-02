<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja = FndCaja::getOxId($id);
//Gral::prr($fnd_caja);
?>

<div class="tabs ficha-fnd_caja" identificador="<?php echo $fnd_caja->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja fnd_cajero_id">
            <div class="label"><?php Lang::_lang('FndCajero') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getFndCajero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja gral_caja_id">
            <div class="label"><?php Lang::_lang('GralCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getGralCaja()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja fnd_caja_tipo_estado_id">
            <div class="label"><?php Lang::_lang('FndCajaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getFndCajaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja fecha_apertura">
            <div class="label"><?php Lang::_lang('Fecha de Apertura') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_caja->getFechaApertura())) ?>
            </div>
        </div>
		
        <div class="par fnd_caja fecha_cierre">
            <div class="label"><?php Lang::_lang('Fecha de Cierre') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_caja->getFechaCierre())) ?>
            </div>
        </div>
		
        <div class="par fnd_caja fecha_rendicion">
            <div class="label"><?php Lang::_lang('Fecha de Rendicion') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($fnd_caja->getFechaRendicion())) ?>
            </div>
        </div>
		
        <div class="par fnd_caja importe_saldo_inicial_esperado">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getImporteSaldoInicialEsperado()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja importe_saldo_inicial_real">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getImporteSaldoInicialReal()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja importe_saldo_inicial_diferencia">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getImporteSaldoInicialDiferencia()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja importe_saldo_final">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getImporteSaldoFinal()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

