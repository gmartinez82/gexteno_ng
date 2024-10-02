<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_proveedor = PrvProveedor::getOxId($id);
//Gral::prr($prv_proveedor);
?>

<div class="tabs ficha-prv_proveedor" identificador="<?php echo $prv_proveedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_proveedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_proveedor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor prv_tipo_id">
            <div class="label"><?php Lang::_lang('PrvTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getPrvTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getCuit()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor codigo_postal">
            <div class="label"><?php Lang::_lang('Cod Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getEmail()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor codigo_min">
            <div class="label"><?php Lang::_lang('Codigo Min') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getCodigoMin()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor prv_grupo_id">
            <div class="label"><?php Lang::_lang('PrvGrupo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getPrvGrupo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor prv_categoria_id">
            <div class="label"><?php Lang::_lang('PrvCategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getPrvCategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor convenio_multilateral">
            <div class="label"><?php Lang::_lang('Conv Multilateral') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_proveedor->getConvenioMultilateral())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor iva_incluido">
            <div class="label"><?php Lang::_lang('IVA Incluido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_proveedor->getIvaIncluido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor puntaje_promedio">
            <div class="label"><?php Lang::_lang('Puntaje Promedio') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getPuntajePromedio()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor datos_migracion">
            <div class="label"><?php Lang::_lang('Datos Migracion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDatosMigracion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor claves">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getClaves()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getOrden()) ?>
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

