<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_ejercicio = CntbEjercicio::getOxId($id);
//Gral::prr($cntb_ejercicio);
?>

<div class="tabs ficha-cntb_ejercicio" identificador="<?php echo $cntb_ejercicio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_ejercicio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_ejercicio descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio fecha_inicio">
            <div class="label"><?php Lang::_lang('Fecha Inicio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($cntb_ejercicio->getFechaInicio())) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio fecha_fin">
            <div class="label"><?php Lang::_lang('Fecha Fin') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($cntb_ejercicio->getFechaFin())) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_ejercicio estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_ejercicio->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

