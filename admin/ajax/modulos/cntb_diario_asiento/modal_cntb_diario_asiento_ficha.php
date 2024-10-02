<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento = CntbDiarioAsiento::getOxId($id);
//Gral::prr($cntb_diario_asiento);
?>

<div class="tabs ficha-cntb_diario_asiento" identificador="<?php echo $cntb_diario_asiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento cntb_ejercicio_id">
            <div class="label"><?php Lang::_lang('CntbEjercicio') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getCntbEjercicio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento cntb_periodo_id">
            <div class="label"><?php Lang::_lang('CntbPeriodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getCntbPeriodo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento cntb_tipo_asiento_id">
            <div class="label"><?php Lang::_lang('CntbTipoAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getCntbTipoAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento cntb_tipo_origen_id">
            <div class="label"><?php Lang::_lang('CntbTipoOrigen') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getCntbTipoOrigen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento cntb_tipo_movimiento_id">
            <div class="label"><?php Lang::_lang('CntbTipoMovimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getCntbTipoMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento gral_actividad_id">
            <div class="label"><?php Lang::_lang('GralActividad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getGralActividad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($cntb_diario_asiento->getFecha())) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getNumero()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

