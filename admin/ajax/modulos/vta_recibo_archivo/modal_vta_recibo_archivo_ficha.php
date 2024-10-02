<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_recibo_archivo = VtaReciboArchivo::getOxId($id);
//Gral::prr($vta_recibo_archivo);
?>

<div class="tabs ficha-vta_recibo_archivo" identificador="<?php echo $vta_recibo_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_recibo_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_recibo_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par vta_recibo_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_recibo_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

