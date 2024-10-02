<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_cuenta = CntbCuenta::getOxId($id);
//Gral::prr($cntb_cuenta);
?>

<div class="tabs ficha-cntb_cuenta" identificador="<?php echo $cntb_cuenta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_cuenta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_cuenta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta familia_descripcion">
            <div class="label"><?php Lang::_lang('Familia Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getFamiliaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta cntb_cuenta_plan_id">
            <div class="label"><?php Lang::_lang('CntbCuentaPlan') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getCntbCuentaPlan()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta cntb_cuenta_padre">
            <div class="label"><?php Lang::_lang('Cuenta Padre') ?></div>
            <div class="dato">
                <?php Gral::_echo(($cntb_cuenta->getCntbCuentaPadre() != 'null') ? CntbCuenta::getOxId($cntb_cuenta->getCntbCuentaPadre())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta cntb_tipo_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbTipoCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getCntbTipoCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getNumero()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta nivel">
            <div class="label"><?php Lang::_lang('Nivel') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getNivel()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta imputable">
            <div class="label"><?php Lang::_lang('Imputable') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_cuenta->getImputable())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

