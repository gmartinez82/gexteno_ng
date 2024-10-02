<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($id);
//Gral::prr($vta_presupuesto_conflicto);
?>

<div class="tabs ficha-vta_presupuesto_conflicto" identificador="<?php echo $vta_presupuesto_conflicto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_conflicto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_conflicto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto vta_presupuesto_ins_insumo_id">
            <div class="label"><?php Lang::_lang('VtaPresupuestoInsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto importe_inicial">
            <div class="label"><?php Lang::_lang('Imp Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getImporteInicial()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto importe_actualizado">
            <div class="label"><?php Lang::_lang('Imp Actualizado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getImporteActualizado()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto importe_diferencia">
            <div class="label"><?php Lang::_lang('Imp Dife') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getImporteDiferencia()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto importe_resuelto">
            <div class="label"><?php Lang::_lang('Imp Resuelto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getImporteResuelto()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto fecha_conflicto">
            <div class="label"><?php Lang::_lang('Fecha de Conflicto') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto_conflicto->getFechaConflicto())) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto fecha_resolucion">
            <div class="label"><?php Lang::_lang('Fecha de Resolucion') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto_conflicto->getFechaResolucion())) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto us_usuario_resolucion">
            <div class="label"><?php Lang::_lang('UsUsuario Resolucion') ?></div>
            <div class="dato">
                <?php Gral::_echo(($vta_presupuesto_conflicto->getUsUsuarioResolucion() != 'null') ? UsUsuario::getOxId($vta_presupuesto_conflicto->getUsUsuarioResolucion())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto resuelto">
            <div class="label"><?php Lang::_lang('Resuelto') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_conflicto->getResuelto())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_conflicto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_conflicto estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_conflicto->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

