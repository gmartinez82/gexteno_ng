<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_prca_ejecucion = GenPrcaEjecucion::getOxId($id);
//Gral::prr($gen_prca_ejecucion);
?>

<div class="tabs ficha-gen_prca_ejecucion" identificador="<?php echo $gen_prca_ejecucion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_prca_ejecucion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_prca_ejecucion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion gen_api_proyecto_id">
            <div class="label"><?php Lang::_lang('GenApiProyecto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getGenApiProyecto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion gen_prca_proceso_id">
            <div class="label"><?php Lang::_lang('GenPrcaProceso') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getGenPrcaProceso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion fechahora_inicio">
            <div class="label"><?php Lang::_lang('Fecha Hora Inicio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getFechahoraInicio())) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion fechahora_fin">
            <div class="label"><?php Lang::_lang('Fecha Hora Fin') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getFechahoraFin())) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion iniciado">
            <div class="label"><?php Lang::_lang('Iniciado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion->getIniciado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion finalizado">
            <div class="label"><?php Lang::_lang('Finalizado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion->getFinalizado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion id_remoto">
            <div class="label"><?php Lang::_lang('id_remoto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion confirmado">
            <div class="label"><?php Lang::_lang('Confirmado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion->getConfirmado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_prca_ejecucion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_prca_ejecucion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

