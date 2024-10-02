<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_punto_venta = VtaPuntoVenta::getOxId($id);
//Gral::prr($vta_punto_venta);
?>

<div class="tabs ficha-vta_punto_venta" identificador="<?php echo $vta_punto_venta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_punto_venta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_punto_venta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta vta_tipo_punto_venta_id">
            <div class="label"><?php Lang::_lang('VtaTipoPuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getVtaTipoPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta domicilio_fiscal">
            <div class="label"><?php Lang::_lang('Domicilio Fiscal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getDomicilioFiscal()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getNumero()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta numero_timbrado">
            <div class="label"><?php Lang::_lang('Numero Timbrado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getNumeroTimbrado()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta fecha_inicio_timbrado">
            <div class="label"><?php Lang::_lang('Inicio Timbr') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_punto_venta->getFechaInicioTimbrado())) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta serie">
            <div class="label"><?php Lang::_lang('Serie') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getSerie()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta numero_actual">
            <div class="label"><?php Lang::_lang('Numero Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getNumeroActual()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta tipo_emision">
            <div class="label"><?php Lang::_lang('Tipo de Emision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getTipoEmision()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta bloqueado">
            <div class="label"><?php Lang::_lang('Bloqueado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getBloqueado()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta fecha_baja">
            <div class="label"><?php Lang::_lang('Fecha de Baja') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getFechaBaja()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta requiere_cae">
            <div class="label"><?php Lang::_lang('Requiere CAE') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getRequiereCae())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta solicita_cae">
            <div class="label"><?php Lang::_lang('Solicita CAE') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getSolicitaCae())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta autoincremental">
            <div class="label"><?php Lang::_lang('Autoincrem') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_punto_venta->getAutoincremental())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

