<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_imagen = VtaReciboImagen::getOxId($id);
//Gral::prr($vta_recibo_imagen);
?>

<div class="tabs ficha-vta_recibo_imagen" identificador="<?php echo $vta_recibo_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_imagen vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

