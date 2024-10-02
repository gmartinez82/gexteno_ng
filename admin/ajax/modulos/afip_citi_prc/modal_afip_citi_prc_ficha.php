<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$afip_citi_prc = AfipCitiPrc::getOxId($id);
//Gral::prr($afip_citi_prc);
?>

<div class="tabs ficha-afip_citi_prc" identificador="<?php echo $afip_citi_prc->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par afip_citi_prc id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getId()) ?>
            </div>
        </div>

	
        <div class="par afip_citi_prc descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc anio">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getAnio()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc gral_mes_id">
            <div class="label"><?php Lang::_lang('GralMes') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getGralMes()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getOrden()) ?>
            </div>
        </div>
		
        <div class="par afip_citi_prc estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($afip_citi_prc->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

