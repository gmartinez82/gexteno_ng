<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_prca_ejecucion_detalle = GenPrcaEjecucionDetalle::getOxId($id);
//Gral::prr($gen_prca_ejecucion_detalle);
?>

<div class="tabs ficha-gen_prca_ejecucion_detalle" identificador="<?php echo $gen_prca_ejecucion_detalle->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_prca_ejecucion_detalle id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_prca_ejecucion_detalle descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle gen_api_proyecto_id">
            <div class="label"><?php Lang::_lang('GenApiProyecto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getGenApiProyecto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle gen_prca_proceso_id">
            <div class="label"><?php Lang::_lang('GenPrcaProceso') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getGenPrcaProceso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle gen_prca_ejecucion_id">
            <div class="label"><?php Lang::_lang('GenPrcaEjecucion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getGenPrcaEjecucion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle fechahora_inicio">
            <div class="label"><?php Lang::_lang('Fecha Hora Inicio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getFechahoraInicio())) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle fechahora_fin">
            <div class="label"><?php Lang::_lang('Fecha Hora Fin') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getFechahoraFin())) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle iniciado">
            <div class="label"><?php Lang::_lang('Iniciado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion_detalle->getIniciado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle finalizado">
            <div class="label"><?php Lang::_lang('Finalizado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion_detalle->getFinalizado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle id_remoto">
            <div class="label"><?php Lang::_lang('id_remoto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle confirmado">
            <div class="label"><?php Lang::_lang('Confirmado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion_detalle->getConfirmado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion_detalle estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion_detalle->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

