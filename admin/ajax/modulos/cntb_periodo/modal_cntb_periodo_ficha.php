<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_periodo = CntbPeriodo::getOxId($id);
//Gral::prr($cntb_periodo);
?>

<div class="tabs ficha-cntb_periodo" identificador="<?php echo $cntb_periodo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_periodo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_periodo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo cntb_ejercicio_id">
            <div class="label"><?php Lang::_lang('CntbEjercicio') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getCntbEjercicio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getAnio()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo fecha_inicio">
            <div class="label"><?php Lang::_lang('Fecha Inicio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($cntb_periodo->getFechaInicio())) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo fecha_fin">
            <div class="label"><?php Lang::_lang('Fecha Fin') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($cntb_periodo->getFechaFin())) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_periodo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_periodo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

