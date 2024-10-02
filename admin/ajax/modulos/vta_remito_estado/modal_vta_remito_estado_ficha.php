<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_remito_estado = VtaRemitoEstado::getOxId($id);
//Gral::prr($vta_remito_estado);
?>

<div class="tabs ficha-vta_remito_estado" identificador="<?php echo $vta_remito_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_remito_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_remito_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado vta_remito_id">
            <div class="label"><?php Lang::_lang('VtaRemito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getVtaRemito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado vta_remito_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaRemitoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getVtaRemitoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado cantidad_bultos">
            <div class="label"><?php Lang::_lang('Cant Bultos') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_estado->getCantidadBultos())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_estado->getPeso())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado costo_envio">
            <div class="label"><?php Lang::_lang('Costo Envio') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_estado->getCostoEnvio())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado gral_empresa_transportadora_id">
            <div class="label"><?php Lang::_lang('GralEmpresaTransportadora') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getGralEmpresaTransportadora()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado guia">
            <div class="label"><?php Lang::_lang('Guia') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getGuia()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_remito_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_remito_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_remito_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

