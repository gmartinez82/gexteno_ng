<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_remito = VtaRemito::getOxId($id);
//Gral::prr($vta_remito);
?>

<div class="tabs ficha-vta_remito" identificador="<?php echo $vta_remito->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_remito id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_remito descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito vta_remito_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaRemitoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getVtaRemitoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito persona_documento">
            <div class="label"><?php Lang::_lang('Persona Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getPersonaDocumento()) ?>
            </div>
        </div>
		
        <div class="par vta_remito persona_email">
            <div class="label"><?php Lang::_lang('Persona Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getPersonaEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_remito fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getFecha())) ?>
            </div>
        </div>
		
        <div class="par vta_remito codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_remito vta_presupuesto_id">
            <div class="label"><?php Lang::_lang('VtaPresupuesto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getVtaPresupuesto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito cli_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('CliCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getCliCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito en_domicilio">
            <div class="label"><?php Lang::_lang('En Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito->getEnDomicilio())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_remito estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

