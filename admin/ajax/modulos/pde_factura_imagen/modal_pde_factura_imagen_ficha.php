<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_imagen = PdeFacturaImagen::getOxId($id);
//Gral::prr($pde_factura_imagen);
?>

<div class="tabs ficha-pde_factura_imagen" identificador="<?php echo $pde_factura_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_imagen pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

