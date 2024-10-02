<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_novedad = GralNovedad::getOxId($id);
//Gral::prr($gral_novedad);
?>

<div class="tabs ficha-gral_novedad" identificador="<?php echo $gral_novedad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_novedad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_novedad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad laboral">
            <div class="label"><?php Lang::_lang('Laboral') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getLaboral())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad planificable">
            <div class="label"><?php Lang::_lang('Planificable') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getPlanificable())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad requiere_movimientos">
            <div class="label"><?php Lang::_lang('Req Movs') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getRequiereMovimientos())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad permite_confirmacion">
            <div class="label"><?php Lang::_lang('Perm Conf') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getPermiteConfirmacion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad horas">
            <div class="label"><?php Lang::_lang('Horas') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getHoras()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad codigo_color">
            <div class="label"><?php Lang::_lang('Codigo Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getCodigoColor()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

