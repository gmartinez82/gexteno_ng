<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($id);
//Gral::prr($ins_insumo_pan_panol);
?>

<div class="tabs ficha-ins_insumo_pan_panol" identificador="<?php echo $ins_insumo_pan_panol->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_pan_panol id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_pan_panol ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_ubi_piso_id">
            <div class="label"><?php Lang::_lang('PanUbiPiso') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPiso()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_ubi_pasillo_id">
            <div class="label"><?php Lang::_lang('PanUbiPasillo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiPasillo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_ubi_estante_id">
            <div class="label"><?php Lang::_lang('PanUbiEstante') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiEstante()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_ubi_altura_id">
            <div class="label"><?php Lang::_lang('PanUbiAltura') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiAltura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_ubi_casillero_id">
            <div class="label"><?php Lang::_lang('PanUbiCasillero') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCasillero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol pan_ubi_celda_id">
            <div class="label"><?php Lang::_lang('PanUbiCelda') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPanUbiCelda()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol ins_clasificacion_id">
            <div class="label"><?php Lang::_lang('Clasif') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getInsClasificacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol punto_minimo">
            <div class="label"><?php Lang::_lang('Punto de Minimo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPuntoMinimo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol punto_pedido">
            <div class="label"><?php Lang::_lang('Punto de Pedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPuntoPedido()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_pan_panol punto_maximo">
            <div class="label"><?php Lang::_lang('Punto de Maximo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_pan_panol->getPuntoMaximo()) ?>
            </div>
        </div>
	
    </div>    

</div>

