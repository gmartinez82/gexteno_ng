<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_insumo = PrvInsumo::getOxId($id);
//Gral::prr($prv_insumo);
?>

<div class="tabs ficha-prv_insumo" identificador="<?php echo $prv_insumo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_insumo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_insumo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo codigo_proveedor">
            <div class="label"><?php Lang::_lang('Cod Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo codigo_marca">
            <div class="label"><?php Lang::_lang('Cod Marca') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getCodigoMarca()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo ins_matriz_id">
            <div class="label"><?php Lang::_lang('InsMatriz') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getInsMatriz()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo ins_marca_pieza">
            <div class="label"><?php Lang::_lang('InsMarcaPieza') ?></div>
            <div class="dato">
                <?php Gral::_echo(($prv_insumo->getInsMarcaPieza() != 'null') ? InsMarca::getOxId($prv_insumo->getInsMarcaPieza())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par prv_insumo codigo_pieza">
            <div class="label"><?php Lang::_lang('Cod Pieza') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getCodigoPieza()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo fecha_actualizacion">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getFechaActualizacion())) ?>
            </div>
        </div>
		
        <div class="par prv_insumo referencial">
            <div class="label"><?php Lang::_lang('Referencial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_insumo->getReferencial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo claves">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getClaves()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_insumo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_insumo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

