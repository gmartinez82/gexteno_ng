<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_archivo = PdeFacturaArchivo::getOxId($id);
//Gral::prr($pde_factura_archivo);
?>

<div class="tabs ficha-pde_factura_archivo" identificador="<?php echo $pde_factura_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

