<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_comision = VtaComision::getOxId($id);
//Gral::prr($vta_comision);
?>

<div class="tabs ficha-vta_comision" identificador="<?php echo $vta_comision->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_comision id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_comision descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision vta_preventista_id">
            <div class="label"><?php Lang::_lang('VtaPreventista') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getVtaPreventista()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision vta_comprador_id">
            <div class="label"><?php Lang::_lang('VtaComprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getVtaComprador()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision vta_comision_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaComisionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getVtaComisionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision fecha_emision">
            <div class="label"><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_comision->getFechaEmision())) ?>
            </div>
        </div>
		
        <div class="par vta_comision persona_descripcion">
            <div class="label"><?php Lang::_lang('PersonaDescripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getPersonaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_comision observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_comision estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

