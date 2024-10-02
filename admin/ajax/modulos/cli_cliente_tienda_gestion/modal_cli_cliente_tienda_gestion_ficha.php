<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente_tienda = CliClienteTienda::getOxId($id);
//Gral::prr($cli_cliente_tienda);
?>

<div class="tabs ficha-cli_cliente_tienda" identificador="<?php echo $cli_cliente_tienda->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente_tienda id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente_tienda descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getNombre()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getApellido()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda cuit">
            <div class="label"><?php Lang::_lang('Cuit') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getCuit()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda telefono_whatsapp">
            <div class="label"><?php Lang::_lang('Whatsapp') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getTelefonoWhatsapp()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getEmail()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda codigo_postal">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda usuario">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getUsuario()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda verificar">
            <div class="label"><?php Lang::_lang('Verificar') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_tienda->getVerificar())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente_tienda->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente_tienda estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente_tienda->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab  -->
    <div id="tab_" class="datos">

        <div class="titulo"><?php Lang::_lang('') ?></div>

        <div class="bloque-">
            <?php if(file_exists('modal_ficha_bloque_.php')){ ?>
                <?php include 'modal_ficha_bloque_.php' ?>
            <?php }else{ ?>
                Debe incluir el bloque HTML en el archivo 'modal_ficha_bloque_.php'
            <?php } ?>
        </div>
        
    </div>
        
</div>

