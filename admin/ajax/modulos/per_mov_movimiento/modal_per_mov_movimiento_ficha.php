<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_mov_movimiento = PerMovMovimiento::getOxId($id);
//Gral::prr($per_mov_movimiento);
?>

<div class="tabs ficha-per_mov_movimiento" identificador="<?php echo $per_mov_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_mov_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par per_mov_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento codigo">
            <div class="label"><?php Lang::_lang('Credencial') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento per_mov_tipo_movimiento_id">
            <div class="label"><?php Lang::_lang('Tipo Mov') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getPerMovTipoMovimiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento fechahora">
            <div class="label"><?php Lang::_lang('Fecha Hora') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getFechahora())) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento ctrl_sector_id">
            <div class="label"><?php Lang::_lang('CtrlSector') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getCtrlSector()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento ctrl_equipo_id">
            <div class="label"><?php Lang::_lang('CtrlEquipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getCtrlEquipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento per_mov_tipo_estado_id">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getPerMovTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_mov_movimiento estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_movimiento->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

