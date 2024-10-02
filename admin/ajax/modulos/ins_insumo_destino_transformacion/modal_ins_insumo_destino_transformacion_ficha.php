<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_destino_transformacion = InsInsumoDestinoTransformacion::getOxId($id);
//Gral::prr($ins_insumo_destino_transformacion);
?>

<div class="tabs ficha-ins_insumo_destino_transformacion" identificador="<?php echo $ins_insumo_destino_transformacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_destino_transformacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_destino_transformacion ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion ins_insumo_destino">
            <div class="label"><?php Lang::_lang('InsInsumo Destino') ?></div>
            <div class="dato">
                <?php Gral::_echo(($ins_insumo_destino_transformacion->getInsInsumoDestino() != 'null') ? InsInsumo::getOxId($ins_insumo_destino_transformacion->getInsInsumoDestino())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion descripcion">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_destino_transformacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_destino_transformacion->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

